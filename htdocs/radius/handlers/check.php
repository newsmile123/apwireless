<?php
session_start();
$key = array();
$value = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_SESSION['ap']['ip'])){
	$ap_ip = $_SESSION['ap']['ip'];
	array_push($key, 'ap_ip');
	array_push($value, $ap_ip);
	} else {
		if (isset($_SESSION['ap']['ip3'])){
			$ap_ip = $_SESSION['ap']['ip3'];
			array_push($key, 'ap_ip');
			array_push($value, $ap_ip);
			}
	}
	if (isset($_SESSION['ClientMAC'])){
	$mac = $_SESSION['ClientMAC'];
	array_push($key, 'mac');
	array_push($value, $mac);
	}
	if (isset($_SESSION['ClientIP'])){
	$client_ip = $_SESSION['ClientIP'];
	array_push($key, 'client_ip');
	array_push($value, $client_ip);
	}
	if (isset($_SESSION['radius']['secret'])){
	$secret = $_SESSION['radius']['secret'];
	array_push($key, 'secret');
	array_push($value, $secret);
	}
	if (isset($_SESSION['radius']['clients'])){
	$clients = $_SESSION['radius']['clients'];
	array_push($key, 'clients');
	array_push($value, $clients);
	}
	if (isset($_SESSION['radius']['users'])){
	$users = $_SESSION['radius']['users'];
	array_push($key, 'users');
	array_push($value, $users);
	}
	if (isset($_SESSION['radius']['general'])){
	$general = $_SESSION['radius']['general'];
	array_push($key, 'general');
	array_push($value, $general);
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