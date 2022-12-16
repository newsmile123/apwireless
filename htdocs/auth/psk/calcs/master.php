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
<SCRIPT language="javascript" src="../../../orinoco/scripts/jquery-2.1.1.min.js"></SCRIPT>
<SCRIPT language="javascript" src="../js/calcs.js"></SCRIPT>
</head>
<body style="margin:0px">
<table border="0" cellpadding="3" style="border-collapse:collapse;" width="280">
    				<tr> 
                    	<td width="100%" valign="top" align="left">
                        <table style="border-collapse:collapse;" cellpadding="3" border="0" width="100%" height="250"><tr>
                    		<td colspan="2" align="center" height="30px"><h3>Калькулятор PMK</h3></td></tr>
                    		<tr height="20">
                    			<td width="40%">SSID</td>
                    			<td><input id="ssid" name="ssid" type="text" size="28px" required="required"/></td>
                    		</tr>
                    <tr>
                    	<td>Passphrase</td>
                    	<td><input id="pass" name="pass" type="text" size="28px" required="required"/></td>
                    </tr>
                    <tr>
                    	<td colspan="2" align="center"><button name="pmk" id="send" title="Считать" onclick="pmk()"/>Считать</button></td></tr></td>
                    </tr>
                    <tr><td colspan="2" height="10px">Парный мастер-ключ</td></tr>
                    <td colspan="2"><textarea style="resize: none; overflow:hidden;" rows="2" cols="32" name="message" id="message"></textarea></td>
                    		</tr>
                    </form>
                    
                    </table>
