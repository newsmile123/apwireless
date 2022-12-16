<?php
session_start();
		for ($i = 1; $i <= $_SESSION['count']; $i++){
			if (isset($_POST['profile'])){
			$_SESSION['value'] = $_POST['profile'];
			header("Location: ../cfg/addedit/secProfile-edit-from-page.html");
		}
		}
		if (!isset($_SESSION['value'])){
				$_SESSION['error_radio'] = "1";
				header("Location: ../cfg/sec-gen34-b.html");
		}
?>
