<?php
session_start();
if (isset($_POST['michael_key'])){
$mk = $_POST['michael_key'];
}
$mk = str_split($mk, 8); // 64-битный Ключ для вычисления MIC в виде 2-ух 32-битных слов
$plaintext = file_get_contents('michael_text/plaintext.txt');
if ((strlen($plaintext)) % 2 != 0){
	$n = ceil(strlen($plaintext)/2);
}
else{
	$n = (strlen($plaintext))/2;
}

$N = intval(($n+5)/4);
$a = $N * 8;
$plaintext = str_pad($plaintext, $a, "0");
//$plaintext = str_split($plaintext, 8); // MSDU{DA, SA, Priority} в виде $N 32-битных слов

function rotate($decimal, $bits) {
  $binary = decbin($decimal);
  $l = strlen($binary) - $bits;
  //var_dump(bindec(substr($binary, $l).substr($binary, 0, $l)));
  //var_dump(4009732795 ^ 58435378);
  return (
    intval(bindec(substr($binary, $l).substr($binary, 0, $l))));
}

// SWAP function
function swap($l){
			$l = str_split(dechex($l));
			if (count($l) < 8){
				while (count($l) != 8){
					array_push($l, 0x00);
				}
			}
			$t = $l['1'].$l['0'];
			$l['0'] = $l['1'];
			$l['1'] = $t;
			$t = $l['6'];
			$l['6'] = $l['7'];
			$l['7'] = $t;
			return intval(hexdec(implode($l)));
		}

//Michael block function		
function b($l, $r){
		//var_dump($l);
		//var_dump($r);
		$r = $r ^ rotate($l, 17);
		//var_dump($r);
		$l = bindec(substr(decbin(($l ^ $r)), 0, 32));
		$r = $r ^ swap($l);
		$l = bindec(substr(decbin(($l ^ $r)), 0, 32));
		$r = $r ^ rotate($l, 3);
		$l = bindec(substr(decbin(($l ^ $r)), 0, 32));
		$r = $r ^ rotate($l, -2);
		$l = bindec(substr(decbin(($l ^ $r)), 0, 32));
		return array ($l, $r);
	}
	
// Функция вычисления MIC
function MIC($key, $M, $N){
		$l = hexdec($key['0']);
		$r = hexdec($key['1']);
		$M = str_split($M, 8);
		for ($j = 0; $j < 5; $j++){
			$M[$j] = hexdec($M[$j]);
		}
		for ($i = 0; $i < $N - 1; $i++){
			$l = $l ^ $M[$i];
			$temp = b($l, $r);
		}
			return array ($l, $r);
		}
		
list ($l, $r) = MIC($mk, $plaintext, $N);
$l = dechex($l);
$r = dechex($r);
/*$M['0'] = $l & 0xff;
$M['1'] = ($l/0x100) & 0xff;
$M['2'] = ($l/0x10000) & 0xff;
echo $l;
$M['3'] = (hexdec($l)/0x1000000) & 0xff;
$M['4'] = $r & 0xff;
$M['5'] = ($r/0x100) & 0xff;
$M['6'] = ($r/0x10000) & 0xff;
$M['7'] = ($r/0x1000000) & 0xff;*/
$mic = base_convert($l, 10,16);
$mic = base_convert($r, 10,16);
$_SESSION['demo']['tkip']['michael'] = str_split($l.$r, 2);
header("Location: ../encapsulation.php");
?>