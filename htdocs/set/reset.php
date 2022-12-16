<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$_SESSION['mode'] = '11bgn';
	$_SESSION['num'] = '3';
	$_SESSION['width'] = '20';
    $_SESSION['SSID'] = $SSID;
    $_SESSION['MAC_AP'] = $MAC_AP;
    $_SESSION['enc'] = $enc;
    $_SESSION['Key_AP'] = $Key_AP;
    $_SESSION['upd'] = $upd;
    $_SESSION['channel'] = $channel;
	}
header("Location: ../set_ap.php");
?>