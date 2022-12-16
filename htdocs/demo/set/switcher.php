<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$switcher = $_POST['switcher'];
$_SESSION['switcher']=$switcher;
}
header("Location: ../set_ap.php");
?>
