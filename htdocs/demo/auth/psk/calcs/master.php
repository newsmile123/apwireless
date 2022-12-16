<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Калькулятор PMK</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css">
<SCRIPT language="javascript" src="js/pmk.js"></SCRIPT>
<SCRIPT language="javascript" src="../../../orinoco/scripts/jquery-2.1.1.min.js"></SCRIPT>
<style type="text/css">
</style>
</head>
<body style="margin:0px">
<table border="0" cellpadding="3" style="border-collapse:collapse;" width="280">
    				<tr> 
                    	<td width="100%" valign="top" align="left">
                        <table style="border-collapse:collapse;" cellpadding="3" border="0" width="100%" height="250"><tr>
                    		<td colspan="2" align="center" height="30px"><h3>Калькулятор PMK</h3></td></tr>
            				<form id="pmk" method="post" action="javascript:void(null);" onsubmit="pmk()">
                    		<tr height="20">
                    			<td width="40%">SSID</td>
                    			<td><input id="ssid" name="SSID" type="text" size="28px" readonly="readonly" value="<?=(isset($_SESSION['demo']["ap"]["SSID"])?$_SESSION['demo']["ap"]["SSID"]:'')?>"/></td>
                    		</tr>
                    <tr>
                    	<td>Passphrase</td>
                    	<td><input id="pass" name="Pass" type="text" size="28px" readonly="readonly" value="<?=(isset($_SESSION['demo']["ap"]["key"])?$_SESSION['demo']["ap"]["key"]:'')?>"/></td>
                    </tr>
                    <tr>
                    	<td colspan="2" align="center"><input id="send" name="PBKDF2" type="submit" size="15px" value="Считать"></td>
                    </tr>
                    <tr><td colspan="2" height="10px">Парный мастер-ключ</td></tr>
                    <td colspan="2"><textarea style="resize: none; overflow:hidden;" rows="3" cols="32" name="message" id="res"></textarea></td>
                    		</tr>
                    </form>
                    
                    </table>
