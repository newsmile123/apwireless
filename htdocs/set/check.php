<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if ($_POST['id'] = "sec-gen"){
		if (isset($_SESSION['count'])){
			echo $_SESSION['count'];
		}
		else{
			echo "1";
		}
	}
	if ($_POST['id'] = "set_client"){
		if (isset($_SESSION['ap']['enc'])){
			echo $_SESSION['ap']['enc'];
		}
		else{
			echo "1";
		}
	}
}