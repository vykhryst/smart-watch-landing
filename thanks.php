<?php
$name = isset($_GET['name']) ? trim($_GET['name']) : '';
if ($name === '') {
    $name = 'friend';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thank you for your order | Smart Watch Ultra</title>

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'YOUR_GTM_ID');
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body class="thanks-body">

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=YOUR_GTM_ID"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <div class="thanks-wrapper">
        <div class="thanks-card">
            <div class="thanks-icon">
                <i class="ri-checkbox-circle-fill"></i>
            </div>

            <h1>Thank you, <?php echo htmlspecialchars($name); ?>!</h1>

            <p class="thanks-main-text">
                We’ve received your request for <b>Smart Watch Ultra</b>.
            </p>
            <p class="thanks-sub-text">
                Our manager will call you shortly to confirm your order.
            </p>

            <ul class="thanks-list">
                <li><i class="ri-shield-check-line"></i> You pay only after checking the package upon delivery.</li>
                <li><i class="ri-time-line"></i> We usually call within 10–30 minutes during business hours.</li>
                <li><i class="ri-smartwatch-line"></i> If we can’t reach you, we’ll send an Email/SMS/Viber message.</li>
            </ul>

            <a href="index.php" class="btn-main thanks-btn">Back to homepage</a>

            <p class="thanks-small-note">
                If you made a mistake in your phone number, just submit a new request on the main page.
            </p>
        </div>
    </div>

</body>

</html>