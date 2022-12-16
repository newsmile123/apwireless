<?php
session_start();
function queryTimeServer ($timeserver, $socket) {
    $timevalue = 0;
    $ret = array();
    $fp = @fsockopen($timeserver,$socket,$err,$errstr,5);
    if ($fp) {
    	fputs($fp,"\n");
    	$timevalue = fread($fp,49);
    	fclose($fp);
    }    
    $ret['time'] = $timevalue; 
    $ret['errno'] = $err;
    $ret['errstr'] = $errstr;
    return $ret;
}
$timevalue = time();
$timercvd = queryTimeServer("pool.ntp.org", 13);
if (!$timercvd['errno'] && $timercvd['time'] > 0) {
    $timevalue = strtotime($timercvd[0]);
}
if (isset($_POST['mac'])){
$mac = $_POST['mac'];
}
$rand = substr(md5(rand()), 0, 32);
date_default_timezone_set('UTC');
$str = "Init Counter";

for ($i = 0; $i < (256+159)/160; $i++){
$str.="0".$mac.$timevalue.$i;
$anonce = hash_hmac('sha256', $str, $rand);
$anonce .= $anonce;
}
$anonce = substr($anonce, 0, 64);
echo $anonce;
$_SESSION['anonce'] = $anonce;
//header("Location: ../calcs/an.php");
?>