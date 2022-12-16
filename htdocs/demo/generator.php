<?php
session_start();

/*Заполняем настройки точки доступа
$_SESSION['demo']["ap"]["mode"] = "802.11bgn";
$_SESSION['demo']["ap"]["width"] = "20";
$_SESSION['demo']["ap"]["SSID"] = "IEEE";
//$_SESSION['demo']["ap"]["mac"] = "00:20:A6:5A:6D:28";
$_SESSION['demo']["ap"]["mac"] = "02 03 04 05 06 07";
$_SESSION['demo']["ap"]["enc"] = "WPA2";
$_SESSION['demo']["ap"]["key"] = "password";
$_SESSION['demo']["ap"]["upd"] = "120";
$_SESSION['demo']["ap"]["channel"] = "5";
$_SESSION['demo']["ap"]["switcher"] = "1";
$_SESSION['demo']["ap"]["full"] = "1";
//Заполняем настройки клиента
//$_SESSION['demo']['client']["mac"] = "05:13:e3:fd:45:0a";
$_SESSION['demo']['client']["mac"] = "02 03 04 05 06 08";
$_SESSION['demo']['client']["ip"] = "192.168.1.2";

//Заполняем технические данные
$_SESSION['demo']["fuller"] = "1";
$_SESSION['demo']["connect"] = "12345678";
$_SESSION['demo']["success"] = "1";*/
  
//Заполняем параметры механизма генерации ключей
/*$_SESSION['demo']["Snonce"]="e7aab854201a941a1969a7c14d7edd71770ffeb73d12a75e325f485939befaf5";
$_SESSION['demo']["ptk"]="c61c975dd4db76c60bb9b385b41393007dece29af8cb272ab0513984f00186e7b4a2ee95b93e8e04b17a1fe432e2633669de90cfbace55cda6c779221fe9e036";
$_SESSION['demo']["kck"]="c61c975dd4db76c60bb9b385b4139300";
$_SESSION['demo']["kek"]="7dece29af8cb272ab0513984f00186e7";
$_SESSION['demo']["tk"]="b4a2ee95b93e8e04b17a1fe432e26336";
$_SESSION['demo']["tmk"]="69de90cfbace55cda6c779221fe9e036";
$_SESSION['demo']["ptk1"]="c61c975dd4db76c60bb9b385b41393007dece29af8cb272ab0513984f00186e7b4a2ee95b93e8e04b17a1fe432e2633669de90cfbace55cda6c779221fe9e036";
*/
// Параметры для WEP
/*$td = mcrypt_module_open('arcfour', '', 'stream', '');
$iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
$ks = mcrypt_enc_get_key_size($td);*/
$_SESSION['demo']["wep"]["key"] = "fb 02 9e 30 31 32 33 34";
//$_SESSION['demo']["wep"]["iv"] = $iv;

//Параметры для TKIP;
/*$_SESSION['demo']["tkip"]["iv"] = "00 20 01 20 00 00 00 00";
$_SESSION['demo']['tkip']['phase1']['tk'] = str_split(substr($_SESSION['demo']['ptk1'], 64, 64), 2);
$_SESSION['demo']['tkip']['enc']['tk'] = "12 34 56 78 90 12 34 56 78 90 12 34 56 78 90 12 34 56 78 90 12 34 56 78 90 12 34 56 78 90 12 34";
$_SESSION['demo']['tkip']['phase1']['tsc32'] = str_split(substr($_SESSION['demo']['ptk1'], 0, 8), 2);
$_SESSION['demo']['tkip']['phase1']['ta'] = str_split(preg_replace('/[^a-zа-яё0-9]/i','', $_SESSION['demo']["ap"]["mac"]), 2);
$_SESSION['demo']['tkip']['phase2']['tk'] = str_split(substr($_SESSION['demo']['ptk1'], 64, 32), 2);
$_SESSION['demo']['tkip']['phase2']['tk'] = "12 34 56 78 90 12 34 56 78 90 12 34 56 78 90 12 34 56 78 90 12 34 56 78 90 12 34 56 78 90 12 34";
$_SESSION['demo']['tkip']['phase2']['tsc16'] = str_split(substr($_SESSION['demo']['ptk1'], 8, 4), 2);
$_SESSION['demo']['tkip']['mic']['michael_key'] = str_split(substr($_SESSION['demo']['ptk1'], 32, 16), 2);
$_SESSION['demo']['tkip']['mic']["client_mac"] = str_split(preg_replace('/[^a-zа-яё0-9]/i','', $_SESSION['demo']['client']["mac"]), 2);
$_SESSION['demo']['tkip']['mic']["ap_mac"] = str_split(preg_replace('/[^a-zа-яё0-9]/i','', $_SESSION['demo']["ap"]["mac"]), 2);*/
header("Location: main.php");
?>