<?php
session_start();
$key = array();
$value = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_SESSION['ap']['switcher'])){
	$switcher = $_SESSION['ap']['switcher'];
	array_push($key, 'switcher');
	array_push($value, $switcher);
	}
	if (isset($_SESSION['ap']['switcher2'])){
	$switcher2 = $_SESSION['ap']['switcher2'];
	array_push($key, 'switcher2');
	array_push($value, $switcher2);
	}
	if (isset($_SESSION["ap"]["key"])){
	$pass = $_SESSION["ap"]["key"];
	array_push($key, 'pass');
	array_push($value, $pass);
	}
		if (isset($_SESSION["ap"]["key2"])){
	$pass2 = $_SESSION["ap"]["key2"];
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
	if (isset($_SESSION['success2'])){
		$success2 = $_SESSION['success2'];
		array_push($key, 'success2');
		array_push($value, $success2);
	}
	else{
		$success2 = "0";
		array_push($key, 'success2');
		array_push($value, $success2);
	}
	if (isset($_SESSION['ap']['enc'])){
	$enc = $_SESSION['ap']['enc'];
	array_push($key, 'enc');
	array_push($value, $enc);
	}
if (isset($_SESSION['ap']['enc2'])){
	$enc2 = $_SESSION['ap']['enc2'];
	array_push($key, 'enc2');
	array_push($value, $enc2);
	}
	if (isset($_SESSION['radius']['secret'])){
	$secret = $_SESSION['radius']['secret'];
	array_push($key, 'secret');
	array_push($value, $secret);
	}
	if (isset($_SESSION['radius2']['secret'])){
	$secret2 = $_SESSION['radius2']['secret'];
	array_push($key, 'secret2');
	array_push($value, $secret2);
	}
	
	if (isset($_SESSION['radius']['ip'])){
	$Rip = $_SESSION['radius']['ip'];
	array_push($key, 'Rip');
	array_push($value, $Rip);
	}
	
		if (isset($_SESSION['radius2']['ip'])){
	$Rip2 = $_SESSION['radius2']['ip'];
	array_push($key, 'Rip2');
	array_push($value, $Rip2);
	}
	
	
	if (isset($_SESSION['radius']['pass'])){
	$user_pass = $_SESSION['radius']['pass'];
	array_push($key, 'user_pass');
	array_push($value, $user_pass);
	}
	if (isset($_SESSION['run'])){
	$run = $_SESSION['run'];
	array_push($key, 'run');
	array_push($value, $run);
	}
	if (isset($_SESSION['radius']['shared-secret'])){
	$nas_secret = $_SESSION['radius']['shared-secret'];
	array_push($key, 'nas_secret');
	array_push($value, $nas_secret);
	}
	if (isset($_SESSION['radius']['secret'])){
	$radius_secret = $_SESSION['radius']['secret'];
	array_push($key, 'radius_secret');
	array_push($value, $radius_secret);
	}
	if (isset($_SESSION['radius']['clients']) && isset($_SESSION['radius']['users']) && isset($_SESSION['radius']['general'])){
	$ready = "1";
	array_push($key, 'ready');
	array_push($value, $ready);
	}
	else{
		$ready = "0";
		array_push($key, 'ready');
		array_push($value, $ready);
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