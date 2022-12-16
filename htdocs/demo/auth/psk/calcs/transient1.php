<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Калькулятор PTK</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css">
<SCRIPT language="javascript" src="js/ptk1.js"></SCRIPT>
<SCRIPT language="javascript" src="../../../orinoco/scripts/jquery-2.1.1.min.js"></SCRIPT>
<style type="text/css">
</style>
</head>
<body style="margin:0px">
<table border="0" cellpadding="3" style="border-collapse:collapse;" width="280">
    				<tr> 
                    	<td width="100%" valign="top" align="left">
                        <table style="border-collapse:collapse;" cellpadding="3" border="0" width="100%" height="250"><tr>
                    		<td colspan="2" align="center" height="30px"><h3>Калькулятор PTK</h3></td></tr>
            				<form id="ptk1" method="post" action="javascript:void(null);" onsubmit="ptk1()">
                    	<tr>
                    		<td width="40%">PMK</td>
                    		<td><input id="PMKcalc" name="PMKcalc" type="text" size="28px" readonly="readonly" value="<?=(isset($_SESSION['demo']["pmk"])?$_SESSION['demo']["pmk"]:'')?>"/></td>
                    	</tr>
                    	<tr>
                    		<td>ANonce</td>
                    		<td><input id="ANonceCalc" name="ANonceCalc" type="text" size="28px" readonly="readonly" value="<?=(isset($_SESSION['demo']["anonce"])?$_SESSION['demo']["anonce"]:'')?>"/></td>
                    	</tr>
                        <tr>
                    		<td>SNonce</td>
                    		<td><input id="SNonceCalc" name="SNonceCalc" type="text" size="28px" readonly="readonly" value="<?=(isset($_SESSION['demo']["snonce"])?$_SESSION['demo']["snonce"]:'')?>"/></td>
                    	</tr>
                    	<tr>
                    		<td>MAC-адрес AP</td>
                    		<td><input id="MAC_APcalc" name="MAC_APcalc" type="text" size="28px" readonly="readonly" value="<?=(isset($_SESSION['demo']["ap"]["mac"])?$_SESSION['demo']["ap"]["mac"]:'')?>"/></td>
                    	</tr>
                        <tr>
                    		<td>MAC-адрес STA</td>
                    		<td><input id="MAC_StaCalc" name="MAC_StaCalc" type="text" size="28px" readonly="readonly" value="<?=(isset($_SESSION['demo']["client"]["mac"])?$_SESSION['demo']["client"]["mac"]:'')?>"/></td>
                    	</tr>
                    	<tr>
                    	<td colspan="2" align="center"><input id="send" type="submit" size="15px" value="Считать"></td>
                    </tr>
                    <tr><td colspan="2" height="10px">Парный передаточный ключ</td></tr>
                    <td colspan="2"><textarea style="resize: none; overflow:hidden;" rows="4" cols="32" name="message" id="res"></textarea></td>
                    		</tr>
                    </form>
                    
                    </table>
