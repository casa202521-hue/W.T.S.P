<?php
session_start();

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
$access_key = 'cf4193ea8d68ef4264909612f188c88e';

// Initialize CURL:
$ch = curl_init('https://api.ipstack.com/' . $ip . '?access_key=' . $access_key . '');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$api_result = json_decode($json, true);

$allowedCountries = ['SA', 'OM', 'BH', 'KW', 'QA', 'AE', 'JO', 'MA'];
$redirectUrl = 'https://chat.whatsapp.com/invite/blocked.html';

if (!in_array($api_result['country_code'], $allowedCountries)) {
    header('Location: ' . $redirectUrl);
    exit();
}

$_SESSION['allowed'] = true;
?> 