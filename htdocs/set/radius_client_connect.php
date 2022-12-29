<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['output'])){
		if ($_POST['output'] == 'pass_wrong'){
			unset($_SESSION['secret_wrong']);
			unset($_SESSION['secret_ok']);
			$_SESSION['wrong_pass'] = '1';
			unset ($_SESSION['ip_wrong']);
				unset($_SESSION['options_wrong']);
			header("Location: ../set_client.php");
		}
		
		if ($_POST['output'] == 'secret_wrong'){
			unset($_SESSION['wrong_pass']);
			unset($_SESSION['secret_ok']);
			$_SESSION['secret_wrong'] = '1';
			unset ($_SESSION['ip_wrong']);
				unset($_SESSION['options_wrong']);
			header("Location: ../set_client.php");
		}
		if ($_POST['output'] == 'secret_ok'){
			unset($_SESSION['wrong_pass']);
			unset($_SESSION['secret_wrong']);
			$_SESSION['secret_ok'] = '1';
			unset ($_SESSION['ip_wrong']);
				unset($_SESSION['options_wrong']);
			header("Location: ../set_client.php");
		}



		if ($_POST['output'] == 'secret_ok'){
			unset($_SESSION['ap']['successxui'])
			$_SESSION['ap']['pidor']
			header("Location: ../set_client.php");
		}

		
		
		if ($_POST['output'] == 'options_wrong'){
			unset($_SESSION['wrong_pass']);
			unset($_SESSION['secret_wrong']);
			unset($_SESSION['secret_ok']);
			unset ($_SESSION['ip_wrong']);
			$_SESSION['options_wrong'] = '1';
			header("Location: ../set_client.php");
		}
		
		if ($_POST['output'] == 'ip_wrong'){
			unset($_SESSION['wrong_pass']);
			unset($_SESSION['secret_wrong']);
			unset($_SESSION['secret_ok']);
			unset($_SESSION['options_wrong']);
		    unset($_SESSION['run']);
			$_SESSION['ip_wrong'] = '1';
			header("Location: ../set_client.php");
		}
	}
}
?>
