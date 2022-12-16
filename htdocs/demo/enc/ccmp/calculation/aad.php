<?php
session_start();
$_SESSION['demo']['aad']['success'] = "1";
header("Location: construct_aad.php");
?>