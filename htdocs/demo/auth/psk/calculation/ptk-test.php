<?php
session_start();
$pmk = "0d c0 d6 eb 90 55 5e d6 41 97 56 b9 a1 5e c3 e3 20 9b 63 df 70 7d d5 08 d1 45 81 f8 98 27 21 af";
$mac_ap = "a0 a1 a1 a3 a4 a5";
$mac_sta = "b0 b1 b2 b3 b4 b5";
$anonce = "c0 c1 c2 c3 c4 c5 c6 c7 c8 c9 d0 d1 d2 d3 d4 d5 d6 d7 d8 d9 da db dc dd de df e0 e1 e2 e3 e4 e5";
$snonce = "e0 e1 e2 e3 e4 e5 e6 e7 e8 e9 f0 f1 f2 f3 f4 f5 f6 f7 f8 f9 fa fb fc fd fe ff 00 01 02 03 04 05";
$str = "Pairwise key expansion";
$str1 = base_convert($mac_ap, 16, 10);
$str2 = base_convert($mac_sta, 16, 10);
$str3 = base_convert($anonce, 16, 10);
$str4 = base_convert($snonce, 16, 10);
$min_mac = base_convert(min($str1, $str2), 10, 16);
$max_mac = base_convert(max($str1, $str2), 10, 16);
$min_nonce = base_convert(min($str3, $str4), 10, 16);
$max_nonce = base_convert(max($str3, $str4), 10, 16);
$i = 0;
$ptk = "";
		for ($i = 0; $i < (512+159)/160; $i++){
			$ptk = $ptk.hash_hmac('sha1', $str."0".$min_mac.$max_mac.$min_nonce.$max_nonce.$i, $pmk);
			//$ptk .= $ptk;
		}
$ptk = substr($ptk, 0, 128);
echo $ptk."    ";
echo "KCK = ".substr($ptk, 0, 32)."    ";
echo "KEK = ".substr($ptk, 32, 32)."    ";
echo "TK = ".substr($ptk, 64, 128)."    ";
$_SESSION['demo']['ptk1'] = $ptk;
echo $_SESSION['demo']['ptk1'];
?>