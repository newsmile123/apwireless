<?php
session_start();
$_SESSION['radius']['user'] = $_POST['user'];
$_SESSION['radius']['auth'] = $_POST['auth'];
$_SESSION['radius']['pass'] = $_POST['pass'];
$_SESSION['radius']['service'] = $_POST['service'];
$_SESSION['radius']['nas-ip'] = $_POST['ip'];
$_SESSION['radius']['priority'] = $_POST['priority'];
$_SESSION['radius']['users'] = "1";
//header("Location: ../users.conf.php");
?>