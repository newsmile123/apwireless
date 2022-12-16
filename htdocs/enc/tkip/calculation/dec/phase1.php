<?php
session_start();
if (isset($_POST['tk']) && isset($_POST['ta']) && isset($_POST['tsc'])){
	$tk = str_replace(" ", "", $_POST['tk']);
	$ta = str_replace(" ", "", $_POST['ta']);
	$tsc = str_replace(" ", "", $_POST['tsc']);
}
$_SESSION['tkip']['dec']['phase1']['tk'] = $tk;
$_SESSION['tkip']['dec']['phase1']['ta'] = $ta;
$_SESSION['tkip']['dec']['phase1']['tsc32'] = $tsc;
//Шаг 1	
$ta = str_replace(":", "", $_POST['ta']);
$ttak['0'] = $tsc['1'].$tsc['0'];
$ttak['1'] = $tsc['3'].$tsc['2'];
$ttak['2'] = $ta['1'].$ta['0'];
$ttak['3'] = $ta['3'].$ta['2'];
$ttak['4'] = $ta['5'].$ta['4'];
// Конец шага 1

/*for ($t = 0; $t < 5; $t++){
$_SESSION['tkip']['ttak'][$t] = $ttak[$t];
}*/

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
		var_dump($dh[$i]);
	}
	return $dh;
}
// Создаем массивы десятичных значений ttak, tk, ta
$ttakDec = toDec($ttak);
$tkDec = toDec($tk);
$taDec = toDec($ta);

// Функция осуществляет замену в s-блоке и возвращает десятичное значение
include('s-box/change.php');

// Шаг 2
for ($i = 0; $i <= 7; $i++){
	$j = 2*($i & 1);
	$ttak['0'] = dechex($ttakDec['0'] + change((intval($ttakDec['4']) ^ (intval((hexdec($tk[1+$j].$tk[0+$j])))))));
	$ttak['1'] = dechex($ttakDec['1'] + change((intval($ttakDec['0']) ^ (intval((hexdec($tk[5+$j].$tk[4+$j])))))));
	$ttak['2'] = dechex($ttakDec['2'] + change((intval($ttakDec['1']) ^ (intval((hexdec($tk[9+$j].$tk[8+$j])))))));
	$ttak['3'] = dechex($ttakDec['3'] + change((intval($ttakDec['2']) ^ (intval((hexdec($tk[13+$j].$tk[12+$j])))))));
	$ttak['4'] = dechex($ttakDec['4'] + change((intval($ttakDec['3']) ^ (intval((hexdec($tk[1+$j].$tk[0+$j])))))) + $i);
}
$ttak_temp = substr(implode($ttak), 0, 20);
$ttak = str_split($ttak_temp, 4);
// Конец шага 2
$ttak = implode(" ", $ttak);
$_SESSION['tkip']['dec']['phase1']['ttak'] = $ttak;
$param = $ttak;
$_SESSION['dec']['aefefefef'] = json_encode($param);
echo $param;
//$q = change(intval($ttakDec['4']) ^ intval(hexdec($tk['8'].$tk['2'])));
//$ttak['0'] = dechex($ttakDec['0'] + change((intval($ttakDec['4']) ^ (intval((hexdec($tk['3'].$tk['2'])))))));
//header("Location: ../encapsulation.php");
?>