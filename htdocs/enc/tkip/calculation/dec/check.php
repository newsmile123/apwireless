<?php
session_start();
$key = array();
$value = array();
if (isset($_SESSION["tkip"]['dec']['phase2']["seed"])){
	$seed_dec = $_SESSION["tkip"]['dec']['phase2']["seed"];
	array_push($key, 'seed_dec');
	array_push($value, $seed_dec);
}
if (isset($_SESSION["tkip"]['dec']['phase2']["seed"])){
	$iv = substr($_SESSION["tkip"]['dec']['phase2']["seed"], 0, 6);
	array_push($key, 'iv');
	array_push($value, $iv);
}
if (isset($_SESSION['tkip']['dec']['phase1']['tk'])){
	$tk_dec = $_SESSION['tkip']['dec']['phase1']['tk'];
	array_push($key, 'tk_dec');
	array_push($value, $tk_dec);
}
if (isset($_SESSION["tkip"]['dec']['phase2']["seed"])){
	$key1 = substr($_SESSION["tkip"]['dec']['phase2']["seed"], 6, 32);;
	array_push($key, 'key1');
	array_push($value, $key1);
}

if (isset($_SESSION['tkip']['dec']['phase1']['ttak'])){
	$ttak_dec = $_SESSION['tkip']['dec']['phase1']['ttak'];
	array_push($key, 'ttak_dec');
	array_push($value, $ttak_dec);
}

if (isset($_SESSION['ap']['mac'])){
	$mac_ap = $_SESSION['ap']['mac'];
	array_push($key, 'mac_ap');
	array_push($value, $mac_ap);
}
else{
	$mac_ap = "";
	array_push($key, 'mac_ap');
	array_push($value, $mac_ap);
}
if (isset($_SESSION['ClientMAC'])){
	$mac_client = $_SESSION['ClientMAC'];
	array_push($key, 'mac_client');
	array_push($value, $mac_client);
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
//header("Location: ../calcs/transient1.php");
?>