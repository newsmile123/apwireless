<?php
session_start();

//Заполняем настройки точки доступа
$_SESSION['demo']["ap"]["mode"] = "802.11bgn";
$_SESSION['demo']["ap"]["width"] = "20";
$_SESSION['demo']["ap"]["SSID"] = "IEEE";
$_SESSION['demo']["ap"]["mac"] = "02:03:04:05:06:07";
$_SESSION['demo']["ap"]["enc"] = "WPA2";
$_SESSION['demo']["ap"]["key"] = "password";
$_SESSION['demo']["ap"]["upd"] = "120";
$_SESSION['demo']["ap"]["channel"] = "5";
$_SESSION['demo']["ap"]["switcher"] = "1";
$_SESSION['demo']["ap"]["full"] = "1";
$_SESSION['demo']['ap']['fill'] = "1";
header("Location:  ../emul/cfg/sec-gen34-b.html");
?>