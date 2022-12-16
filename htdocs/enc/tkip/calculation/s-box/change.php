<?php
function change($index){
	
	if (strlen($index) < 4){
		switch(strlen($index)){
		case 3:
		{$index = "0".$index;
		break;}
		case 2:
		{$index = "00".$index;
		break;}
		case 1:
		{$index = "000".$index;
		break;}
		}
	}
	$s_box1 = file_get_contents("s-box/1.txt");
	$s_box1 = explode(",0x",$s_box1);
	$s_box2 = file_get_contents("s-box/2.txt");
	$s_box2 = explode(",0x",$s_box2);
	
	$split = str_split($index,2);
	$res = hexdec($s_box1[hexdec($split['0'])]) ^ hexdec($s_box2[hexdec($split['1'])]);
	return $res;
}
?>