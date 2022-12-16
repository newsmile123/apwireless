<?php
session_start();
$key = array();
$value = array();
if (isset($_SESSION['pmk'])){
	$pmk = $_SESSION['pmk'];
	array_push($key, 'pmk');
	array_push($value, $pmk);
}
if (isset($_SESSION['anonce'])){
	$anonce = $_SESSION['anonce'];
	array_push($key, 'anonce');
	array_push($value, $anonce);
}
if (isset($_SESSION['snonce'])){
	$snonce = $_SESSION['snonce'];
	array_push($key, 'snonce');
	array_push($value, $snonce);
}
if (isset($_SESSION['ptk2'])){
	$ptk3 = $_SESSION['ptk2'];
	array_push($key, 'ptk2');
	array_push($value, $ptk3);
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
if (isset($_SESSION['mic']['4'])){
	$mic4 = $_SESSION['mic']['4'];
	array_push($key, 'mic4');
	array_push($value, $mic4);
}
if (isset($_SESSION['ap']['full'])){
	$full = $_SESSION['ap']['full'];
	array_push($key, 'full');
	array_push($value, $full);
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