<?php 
function isMobileDevice(): bool
{
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

    $mobileKeywords = [
        'android',
        'blackberry',
        'ipad',
        'iphone',
        'ipod',
        'iemobile',
        'opera mini',
        'opera mobi',
        'webos',
        'fennec',
        'kindle',
        'silk',
        'ucweb',
        'mobile',
        'tablet',
    ];
    foreach ($mobileKeywords as $keyword) {
        if (stripos($userAgent, $keyword) !== false) {
            return true;
        }
    }
    return false;
}
