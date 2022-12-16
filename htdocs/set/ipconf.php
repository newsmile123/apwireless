<?php
session_start();
if (isset($_POST['ip']) && ($_POST['mask']) && ($_POST['gateway'])){
$_SESSION['ap']['ip'] = $_POST['ip'];
$_SESSION['ap']['mask'] = $_POST['mask'];
$_SESSION['ap']['gateway'] = $_POST['gateway'];
}
header("Location: http://project/emul/cfg/net-ipconf.html");
?>
