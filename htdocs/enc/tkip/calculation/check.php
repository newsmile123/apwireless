<?php
session_start();
$key = array();
$value = array();
if (isset($_SESSION["tkip"]['phase2']["seed"])){
	$seed = $_SESSION["tkip"]['phase2']["seed"];
	array_push($key, 'seed');
	array_push($value, $seed);
}
if (isset($_SESSION["tkip"]['phase2']["seed"])){
	$iv = substr($_SESSION["tkip"]['phase2']["seed"], 0, 6);
	array_push($key, 'iv');
	array_push($value, $iv);
}
if (isset($_SESSION['tkip']['phase1']['tk'])){
	$tk = $_SESSION['tkip']['phase1']['tk'];
	array_push($key, 'tk');
	array_push($value, $tk);
}
if (isset($_SESSION["tkip"]['dec']['phase2']["seed"])){
	$seed_dec = $_SESSION["tkip"]['dec']['phase2']["seed"];
	array_push($key, 'seed_dec');
	array_push($value, $seed_dec);
}
if (isset($_SESSION["tkip"]['dec']['phase2']["seed"])){
	$iv_dec = substr($_SESSION["tkip"]['dec']['phase2']["seed"], 0, 6);
	array_push($key, 'iv_dec');
	array_push($value, $iv_dec);
}
if (isset($_SESSION['tkip']['dec']['phase1']['tk'])){
	$tk_dec = $_SESSION['tkip']['dec']['phase1']['tk'];
	array_push($key, 'tk_dec');
	array_push($value, $tk_dec);
}
if (isset($_SESSION["tkip"]['phase2']["seed"])){
	$key1 = substr($_SESSION["tkip"]['phase2']["seed"], 6, 32);;
	array_push($key, 'key1');
	array_push($value, $key1);
}
if (isset($_SESSION['ptk3'])){
	$ptk3 = $_SESSION['ptk3'];
	array_push($key, 'ptk3');
	array_push($value, $ptk3);
}
if (isset($_SESSION['mic']['2'])){
	$mic2 = $_SESSION['mic']['2'];
	array_push($key, 'mic2');
	array_push($value, $mic2);
}
if (isset($_SESSION['mic']['3'])){
	$mic3 = $_SESSION['mic']['3'];
	array_push($key, 'mic3');
	array_push($value, $mic3);
}
if (isset($_SESSION['tkip']['dec']['phase1']['ttak'])){
	$ttak_dec = $_SESSION['tkip']['dec']['phase1']['ttak'];
	array_push($key, 'ttak_dec');
	array_push($value, $ttak_dec);
}
if (isset($_SESSION['tkip']['phase1']['ttak'])){
	$ttak = $_SESSION['tkip']['phase1']['ttak'];
	array_push($key, 'ttak');
	array_push($value, $ttak);
}
if (isset($_SESSION['ap']['SSID'])){
	$ssid = $_SESSION['ap']['SSID'];
	array_push($key, 'ssid');
	array_push($value, $ssid);
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
if (isset($_SESSION['ap']['key'])){
	$pass = $_SESSION['ap']['key'];
	array_push($key, 'pass');
	array_push($value, $pass);
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