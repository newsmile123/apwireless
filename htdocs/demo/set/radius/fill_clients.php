<?php
session_start();

$_SESSION['demo']['clients']['client'] = "192.168.1.1";
$_SESSION['demo']['clients']['secret'] = "testing";
$_SESSION['demo']['clients']['short'] = "private-network";
$_SESSION['demo']['clients']['nastype'] = "other";
$_SESSION['demo']['clients']['check'] = "1";
header("Location:  ../../set_client.php#tabs-2-2");
?>