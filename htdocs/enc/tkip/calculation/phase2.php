<?php
session_start();
if (isset($_POST['ttak']) && isset($_POST['tk']) && isset($_POST['tsc'])){
	$ttak = $_POST['ttak'];
	$tk = str_replace(" ", "", $_POST['tk']);
	$tsc16 = str_replace(" ", "", $_POST['tsc']);
}
$_SESSION["tkip"]['phase2']["ttak"] = $ttak;
$_SESSION["tkip"]['phase2']["tk"] = $tk;
$_SESSION["tkip"]['phase2']["tsc16"] = $tsc16;
$ttak = str_replace(" ", "", $_POST['ttak']);
// Шаг 1
for ($i = 0; $i < 5; $i++){
	$ppk[$i] = $ttak[$i];
}
$ppk['5'] = dechex(hexdec($ttak['4']) + hexdec($tsc16['0'].$tsc16['1']));
// Конец шага 1

function toDec($hd){
	$h = 0;
	for ($h = 0; $h < count($hd); $h++){
		$hd[$h] = base_convert($hd[$h],16,10);
	}
	return $hd;
}
function toHex($dh){
	$d = 0;
	for ($d = 0; $d < count($dh); $d++){
		$dh[$d] = base_convert($dh[$d],16,10);
	}
	return $dh;
}
$ppkDec = toDec($ppk);

// Функция осуществляет замену в s-блоке и возвращает десятичное значение
include('s-box/change.php');

// Шаг 2
$ppk['0'] = dechex($ppkDec['0'] + change((intval($ppkDec['5']) ^ (intval((hexdec($tk[1].$tk[0])))))));
$ppk['1'] = dechex($ppkDec['1'] + change((intval($ppkDec['0']) ^ (intval((hexdec($tk[3].$tk[2])))))));
$ppk['2'] = dechex($ppkDec['2'] + change((intval($ppkDec['1']) ^ (intval((hexdec($tk[5].$tk[4])))))));
$ppk['3'] = dechex($ppkDec['3'] + change((intval($ppkDec['2']) ^ (intval((hexdec($tk[7].$tk[6])))))));
$ppk['4'] = dechex($ppkDec['4'] + change((intval($ppkDec['3']) ^ (intval((hexdec($tk[9].$tk[8])))))));
$ppk['5'] = dechex($ppkDec['5'] + change((intval($ppkDec['4']) ^ (intval((hexdec($tk[11].$tk[10])))))));

// Функция осуществляет побитовый поворот вправо
function rotate($rotate){
	$r = $rotate;
	//printf("  r=%d\n", $r);
	$r = str_split(strval(decbin($r)),1);
	$temp = $r[count($r)-1];
	$r = bindec(implode($r));
	$r = $r >> 1;
	$r = str_split(strval(decbin($r)),1);
	array_unshift($r,$temp);
	$r = bindec(implode($r));
	return $r;
}

$ppkDec = toDec($ppk);
$ppk['0'] = dechex($ppkDec['0'] + rotate((intval($ppkDec['5']) ^ (intval((hexdec($tk[13].$tk[12])))))));
$ppk['1'] = dechex($ppkDec['1'] + rotate((intval($ppkDec['0']) ^ (intval((hexdec($tk[15].$tk[14])))))));
$ppk['2'] = dechex($ppkDec['2'] + rotate((intval($ppkDec['1']))));
$ppk['3'] = dechex($ppkDec['3'] + rotate((intval($ppkDec['2']))));
$ppk['4'] = dechex($ppkDec['4'] + rotate((intval($ppkDec['3']))));
$ppk['5'] = dechex($ppkDec['5'] + rotate((intval($ppkDec['4']))));
//Конец шага 2

//Шаг 3
function lo8($value){
	$value = str_split(dechex($value),2);
	return $value['0'];
}

function hi8($value){
	$value = str_split(dechex($value),2);
	return $value['1'];
}

$wepSeed['0'] = $tsc16['1'];
$wepSeed['1'] = dechex(($tsc16['1'] | 0x20) & 0x7F);
$wepSeed['2'] = $tsc16['0'];
$wepSeed['3'] = lo8(intval(hexdec($ppk['5']) ^ intval(hexdec(($tk['1'].$tk['0'] >> 1)))));
for ($j = 0; $j <= 5; $j++){
	$wepSeed[4 + 2*$j] = lo8(hexdec($ppk[$j]));
	$wepSeed[5 + 2*$j] = lo8(hexdec($ppk[$j]));
}
for ($i = 0; $i < count($wepSeed); $i ++ ){
if ($wepSeed[$i] == "0"){
	$wepSeed[$i] .= "0";
}
}
echo implode("", $wepSeed);
// Конец шага 3
$_SESSION['tkip']['phase2']['var'] = "1";
$_SESSION["tkip"]['phase2']["seed"] = str_replace(" ", "", implode("", $wepSeed));
//header("Location: ../encapsulation.php");
?>