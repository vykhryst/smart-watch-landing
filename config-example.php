<?php

define('TELEGRAM_BOT_TOKEN', "YOUR_BOT_TOKEN_HERE");
define('TELEGRAM_CHAT_ID', "YOUR_CHAT_ID_HERE");

define(
    'TELEGRAM_API_URL',
    'https://api.telegram.org/bot' . TELEGRAM_BOT_TOKEN . '/sendMessage'
);
