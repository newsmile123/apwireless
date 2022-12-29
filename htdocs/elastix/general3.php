<?php
session_start();
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if ($_POST['Update']){

        $_SESSION['ap']['ip3'] = $_POST['ip3'];
        $_SESSION['ap']['mac3'] = $_POST['mac3'];
    }


    

        header("Location: index_1.php");
	
	}
?>
