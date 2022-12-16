<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		for ($i = 1; $i <= $_SESSION['count']; $i++){
			if (isset($_POST['profile'])){
			$_SESSION['value'] = $_POST['profile'];
			header("Location: ../cfg/addedit/secProfile-edit.html");
		}
		}
		if (!isset($_SESSION['value'])){
				$_SESSION['error_radio'] = "1";
				header("Location: ../cfg/sec-Profiles.html");
		}
		}
?>
