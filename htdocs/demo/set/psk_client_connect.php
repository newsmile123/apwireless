<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ($_REQUEST['submit']){
	$_SESSION['connect'] = $_POST['connect'];
}
if ($_REQUEST['submit1']) {
	unset($_SESSION['connect']);
}
if ($_SESSION['connect'] == $_SESSION['ap']['key']) {
	$_SESSION['success'] = '1';
}
	else {
		$_SESSION['success'] = '0';
}
}
header("Location: ../set_client.php");
?>
