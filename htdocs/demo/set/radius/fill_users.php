<?php
session_start();

$_SESSION['demo']['users']['name'] = "rfc3580";
$_SESSION['demo']['users']['type'] = "Local";
$_SESSION['demo']['users']['pass'] = "testing";
$_SESSION['demo']['users']['service'] = "Login-User";
$_SESSION['demo']['users']['nas_ip'] = "192.168.1.100";
$_SESSION['demo']['users']['priority'] = "1";
$_SESSION['demo']['users']['check'] = "1";
header("Location:  ../../set_client.php#tabs-2-3");
?>