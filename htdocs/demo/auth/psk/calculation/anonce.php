<?php
session_start();
//Функция получения времени в формате NTP
/*function queryTimeServer ($timeserver, $socket) {
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
	echo "it's ".$ret['time'];
    return $ret;
}*/
if (!isset($_SESSION['demo']['count'])){
$timevalue = time();
//$timercvd = queryTimeServer("pool.ntp.org", 13);
//if (!$timercvd['errno'] && $timercvd['time'] > 0) {
//$timevalue = strtotime($timercvd[0]);
//}
$mac = preg_replace('/[^a-fA-F0-9]/i','', $_SESSION['demo']["ap"]["mac"]);
$rand = substr(md5(rand()), 0, 32);
//date_default_timezone_set('UTC');
$str = "Init Counter";
for ($i = 0; $i < (256+159)/160; $i++){
$str.="0".$mac.$timevalue.$i;
$anonce = hash_hmac('sha256', $str, $rand);
$anonce .= $anonce;
}
$anonce = substr($anonce, 0, 64);
$_SESSION['demo']['anonce'] = $anonce;
}
$_SESSION['demo']['count'] = "1";
echo $_SESSION['demo']['anonce'];
?>