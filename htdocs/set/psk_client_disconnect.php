<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	unset($_SESSION['connect']);
	unset($_SESSION['connect2']);
header("Location: ../set_client.php");
}
?>
