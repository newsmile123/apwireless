<?php
session_start();
function pbkdf2($algorithm, $password, $salt, $count, $key_length, $raw_output = false){
    $algorithm = strtolower($algorithm);
    $hash_length = 20;
    $block_count = ceil($key_length / $hash_length);
    $output = "";
    for($i = 1; $i <= $block_count; $i++) {
        $last = $salt . pack("N", $i);
        $last = $xorsum = hash_hmac($algorithm, $last, $password, true);
        for ($j = 1; $j < $count; $j++) {
            $xorsum ^= ($last = hash_hmac($algorithm, $last, $password, true));}
        $output .= $xorsum;}
    if($raw_output)
        return substr($output, 0, $key_length);
    else
        return bin2hex(substr($output, 0, $key_length));}
 $ssid = preg_replace('/[^a-zа-яё0-9]/i','', $_SESSION['demo']["ap"]["SSID"]);
 $pass = $_SESSION['demo']["ap"]["key"];
 $count = 4096;
 $key_length = 32;
 $PMK = pbkdf2('sha1', $pass, $ssid, $count, $key_length, $raw_output = false);
$_SESSION['demo']['pmk'] = $PMK;
echo $PMK;
?>