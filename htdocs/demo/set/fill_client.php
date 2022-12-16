<?php
session_start();

//Заполняем настройки точки доступа
$_SESSION['demo']['client']["mac"] = "02:03:04:05:06:08";
$_SESSION['demo']['client']["ip"] = "192.168.1.2";
$_SESSION['demo']["fuller"] = "1";
$_SESSION['demo']["connect"] = "12345678";
$_SESSION['demo']["success"] = "1";
header("Location:  ../set_client.php");
?>