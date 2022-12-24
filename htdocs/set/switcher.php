<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$switcher = $_POST['switcher'];
$_SESSION['switcher']=$switcher;
$switcher3 = $_POST['switcher3'];
$_SESSION['switcher3']=$switcher3;
$switcher2 = $_POST['switcher2'];
$_SESSION['switcher2']=$switcher2;
}
header("Location: ../set_ap.php");
?>
