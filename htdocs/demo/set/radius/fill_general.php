<?php
session_start();

$_SESSION['demo']['radius']['ip'] = "192.168.1.100";
$_SESSION['demo']['radius']['mask'] = "255.255.255.0";
$_SESSION['demo']['radius']['port'] = "1812";
$_SESSION['demo']['radius']['check'] = "1";
$_SESSION['demo']['radius']['run'] = "c:\ radiusd";
header("Location:  ../../set_client.php#tabs-2-1");
?>