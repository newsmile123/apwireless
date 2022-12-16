<?php
session_start();
if (isset($_SESSION['demo']['count'])){
unset($_SESSION['demo']['count']);}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Калькулятор ANonce</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css">
<SCRIPT language="javascript" src="js/anonce.js"></SCRIPT>
<SCRIPT language="javascript" src="../../../orinoco/scripts/jquery-2.1.1.min.js"></SCRIPT>
<style type="text/css">
</style>
</head>
<body style="margin:0px">
<table border="0" cellpadding="3" style="border-collapse:collapse;" width="280">
    				<tr> 
                    	<td width="100%" valign="top" align="left">
                        <table style="border-collapse:collapse;" cellpadding="3" border="0" width="100%" height="250"><tr>
                    		<td colspan="2" align="center" height="30px"><h3>Калькулятор ANonce</h3></td></tr>
            				<form id="anonce" method="post" action="javascript:void(null);" onsubmit="call()">
                    		<tr height="20">
                    			<td width="50%">Введите MAC-адрес</td>
                    			<td align="center"><input name="mac_ap" id="mac" type="text" readonly="readonly" value="<?=(isset($_SESSION['demo']["ap"]["mac"])?$_SESSION['demo']["ap"]["mac"]:'')?>"/></td></tr>
                            <tr><td align="center" colspan="2" height="40px">
                            <input type="submit" name="anonce" id="send" value="Считать"/></td></tr>
                    <tr><td colspan="2" height="10px">Authenticator Nonce</td></tr>
                    <td colspan="2" height="30px"><textarea style="resize: none; overflow:hidden;" rows="2" cols="32" name="res" id="anonce-res"></textarea></td>
                    		
                    </form>
                    
                    </table>
</body>
</html>