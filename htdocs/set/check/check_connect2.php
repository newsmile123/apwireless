<?php
session_start();
$key = array();
$value = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_SESSION['ap2']['switcher2'])){
	$switcher2 = $_SESSION['ap2']['switcher2'];
	array_push($key, 'switcher2');
	array_push($value, $switcher2);
	}
	if (isset($_SESSION["ap2"]["key2"])){
	$pass2 = $_SESSION["ap2"]["key2"];
	array_push($key, 'pass2');
	array_push($value, $pass2);
	}
	if (isset($_SESSION['success'])){
		$success = $_SESSION['success'];
		array_push($key, 'success');
		array_push($value, $success);
	}
	else{
		$success = "0";
		array_push($key, 'success');
		array_push($value, $success);
	}
	if (isset($_SESSION['ap2']['enc2'])){
	$enc2 = $_SESSION['ap2']['enc2'];
	array_push($key, 'enc2');
	array_push($value, $enc2);
	}
	
if (count($key) > 0){
for ($i = 0; $i<count($key); $i++) { 
$check[$key[$i]] = $value[$i]; 
}
echo json_encode($check);
}
else{
echo "There no variables";
}
}
?>