<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	unset($_SESSION['connect']);
header("Location: ../set_client.php");
}
?>
