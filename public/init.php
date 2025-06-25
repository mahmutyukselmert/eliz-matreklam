<?php

/**
 * Tablet cihazlar varsayılan olarak masaüstü olarak kabul edilir.
 * @return bool True eğer mobil cihaz tespit edilirse, aksi takdirde false.
 */
function isMobileDevice(): bool
{
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $userAgent = strtolower($userAgent); // Tüm dizeyi küçük harfe çevir

    // 1. Mobil Cihaz Anahtar Kelimeleri
    // Bu anahtar kelimeler genellikle telefonlara özgüdür.
    $mobileKeywords = [
        'android',      // Android telefonlar (tabletler hariç)
        'iphone',       // iPhone
        'ipod',         // iPod Touch
        'blackberry',   // BlackBerry telefonlar
        'windows phone',// Windows Phone
        'opera mini',   // Opera Mini tarayıcısı (mobil)
        'fennec',       // Firefox for mobile
        'kindle',       // Kindle okuyucular (tabletler hariç)
        'silk',         // Amazon Silk tarayıcısı (Kindle Fire gibi mobil)
        'ucbrowser',    // UC Browser (mobil odaklı)
        'webos',        // HP webOS (eski mobil platform)
        'mobile',       // Genel mobil kelimesi
        'mobi',         // Genel mobil kelimesinin kısaltması
        'bada',         // Samsung Bada OS
        'symbian',      // Symbian OS
        'series60',     // Nokia S60
        'meego',        // MeeGo OS
    ];

    $tabletKeywords = [
        'ipad',         // iPad
        'android',      // Android (tabletlerde de bulunur, bu yüzden sıralama önemli)
        'tablet',       // Genel tablet kelimesi
        'nexus 7',      // Google Nexus 7
        'nexus 9',      // Google Nexus 9
        'nexus 10',     // Google Nexus 10
        'sm-t',         // Samsung Galaxy Tab serisi (örneğin SM-T500)
        'hp-tablet',    // HP tabletler
        'fablet',       // Fabletler
        'microsoft surface', // Microsoft Surface
        'touchpad',     // HP TouchPad
        'gt-p',         // Eski Samsung Galaxy Tab
        'transformer',  // Asus Transformer Pad
        'lenovo tab',   // Lenovo tabletler
        'fire fox os',  // Firefox OS Tablet (Nadiren)
        'kindle fire',  // Kindle Fire
    ];

    foreach ($tabletKeywords as $keyword) {
        if (strpos($userAgent, $keyword) !== false) {
            return false; // Tablet tespit edildi, masaüstü olarak kabul et
        }
    }

    foreach ($mobileKeywords as $keyword) {
        if (strpos($userAgent, $keyword) !== false) {
            return true; // Mobil telefon tespit edildi
        }
    }

    // Yukarıdaki kriterlere uyan bir mobil veya tablet bulunamazsa masaüstü kabul et
    return false;
}
?>