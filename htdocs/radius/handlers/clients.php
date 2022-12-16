<?php
session_start();
$_SESSION['radius']['client'] = $_POST['client'];
$_SESSION['radius']['shared-secret'] = $_POST['secret'];
$_SESSION['radius']['shortname'] = $_POST['shortname'];
$_SESSION['radius']['nastype'] = $_POST['nastype'];
$_SESSION['radius']['clients'] = "1";
//header("Location: ../clients.conf.php");
?>