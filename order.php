<?php
require_once 'config.php';

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// Helper function for safe field reading
function field(string $key): string
{
    return isset($_POST[$key]) ? trim((string)$_POST[$key]) : '';
}

// Read main form fields
$name  = field('name');
$phone = field('phone');
$email = field('email');


// Basic validation
if ($name === '' || $phone === '') {
    // Could add ?error=1 and show message on main page
    header('Location: index.php');
    exit;
}

// Read UTM and other traffic parameters
$utm_source   = field('utm_source');
$utm_medium   = field('utm_medium');
$utm_campaign = field('utm_campaign');
$utm_term     = field('utm_term');
$utm_content  = field('utm_content');

$fbclid       = field('fbclid');
$gclid        = field('gclid');
$sub_id       = field('sub_id');
$sub_id2      = field('sub_id2');

// Technical user information
$ip        = $_SERVER['REMOTE_ADDR']      ?? '';
$userAgent = $_SERVER['HTTP_USER_AGENT']  ?? '';
$referer   = $_SERVER['HTTP_REFERER']     ?? '';

// Log order to storage/leads.csv file
function logOrderToFile(array $data): void
{
    $dir = __DIR__ . '/storage';

    if (!is_dir($dir)) {
        // Create directory if it doesn't exist
        mkdir($dir, 0777, true);
    }

    $file = $dir . '/leads.csv';
    $isNewFile = !file_exists($file);

    $fp = fopen($file, 'a');

    if ($fp === false) {
        // If can't open file - just skip logging silently
        return;
    }

    // If new file - write column headers
    if ($isNewFile) {
        fputcsv($fp, [
            'created_at',
            'name',
            'phone',
            'email',
            'utm_source',
            'utm_medium',
            'utm_campaign',
            'utm_term',
            'utm_content',
            'fbclid',
            'gclid',
            'sub_id',
            'sub_id2',
            'ip',
            'user_agent',
            'referer',
        ], ';');
    }

    fputcsv($fp, $data, ';');
    fclose($fp);
}

// Call logging function
logOrderToFile([
    date('Y-m-d H:i:s'),
    $name,
    $phone,
    $email,
    $utm_source,
    $utm_medium,
    $utm_campaign,
    $utm_term,
    $utm_content,
    $fbclid,
    $gclid,
    $sub_id,
    $sub_id2,
    $ip,
    $userAgent,
    $referer,
]);

// Format message for Telegram

$lines = [
    "🛒 NEW ORDER: Smart Watch Ultra",
    "",
    "👤 Name: {$name}",
    "📞 Phone: {$phone}",
    $email !== '' ? "📧 Email: " . htmlspecialchars($email, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') : "📧 Email: (not provided)",
    "",
    "📈 Marketing / Traffic:",
    "utm_source:   {$utm_source}",
    "utm_medium:   {$utm_medium}",
    "utm_campaign: {$utm_campaign}",
    "utm_term:     {$utm_term}",
    "utm_content:  {$utm_content}",
    "fbclid:       {$fbclid}",
    "gclid:        {$gclid}",
    "sub_id:       {$sub_id}",
    "sub_id2:      {$sub_id2}",
    "",
    "🌐 Technical Info:",
    "IP:           {$ip}",
    "User-Agent:   {$userAgent}",
    "Referer:      {$referer}",
    "",
    "⏰ Time: " . date('Y-m-d H:i:s'),
];

$text = implode("\n", $lines);

// Data for Telegram request
$data = [
    'chat_id'    => TELEGRAM_CHAT_ID,
    'text'       => $text,
    'parse_mode' => 'HTML',
];

// Send via file_get_contents + stream_context
$options = [
    'http' => [
        'method'  => 'POST',
        'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
        'content' => http_build_query($data),
        'timeout' => 5,
    ],
];

$context = stream_context_create($options);

// Try to send message
// If error occurs - site won't crash, just no notification in TG
@file_get_contents(TELEGRAM_API_URL, false, $context);

// Redirect to thank you page
$redirectName = urlencode($name);
header("Location: thanks.php?name={$redirectName}");
exit;
