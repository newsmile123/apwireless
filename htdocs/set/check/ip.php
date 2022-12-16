<?php
session_start();
$key = array();
$value = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_SESSION['ap']['ip'])){
	$ap_ip = $_SESSION['ap']['ip'];
	array_push($key, 'ap_ip');
	array_push($value, $ap_ip);
	$arr = explode(".", $ap_ip);
	array_push($key, 'ap_ip1');
	array_push($value, $arr['0']);
	array_push($key, 'ap_ip2');
	array_push($value, $arr['1']);
	array_push($key, 'ap_ip3');
	array_push($value, $arr['2']);
	array_push($key, 'ap_ip4');
	array_push($value, $arr['3']);
	}
	if (isset($_SESSION['ap2']['ip2'])){
	$ap_ip2 = $_SESSION['ap2']['ip2'];
	array_push($key, 'ap2_ip');
	array_push($value, $ap2_ip);
	$arr2 = explode(".", $ap2_ip);
	array_push($key, 'ap2_ip1');
	array_push($value, $arr2['0']);
	array_push($key, 'ap2_ip2');
	array_push($value, $arr2['1']);
	array_push($key, 'ap2_ip3');
	array_push($value, $arr2['2']);
	array_push($key, 'ap2_ip4');
	array_push($value, $arr2['3']);
	}
	if (isset($_SESSION['ClientIP'])){
	$client_ip = $_SESSION['ClientIP'];
	array_push($key, 'client_ip');
	array_push($value, $client_ip);
	}
	if (isset($_SESSION['radius']['ip'])){
		$radius_ip = $_SESSION['radius']['ip'];
		array_push($key, 'radius_ip');
		array_push($value, $radius_ip);
		$array = explode(".", $radius_ip);
		array_push($key, 'radius_ip1');
		array_push($value, $array['0']);
		array_push($key, 'radius_ip2');
		array_push($value, $array['1']);
		array_push($key, 'radius_ip3');
		array_push($value, $array['2']);
		array_push($key, 'radius_ip4');
		array_push($value, $array['3']);
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