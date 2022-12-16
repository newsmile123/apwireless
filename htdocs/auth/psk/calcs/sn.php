<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Калькулятор SNonce</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body style="margin:0px">
<link rel="stylesheet" href="css/style.css" type="text/css">
<SCRIPT language="javascript" src="../js/calcs.js"></SCRIPT>
<SCRIPT language="javascript" src="../../../orinoco/scripts/jquery-2.1.1.min.js"></SCRIPT>
<style type="text/css">
</style>
</head>
<body style="margin:0px">
<table border="0" cellpadding="3" style="border-collapse:collapse;" width="280">
    				<tr> 
                    	<td width="100%" valign="top" align="left">
                        <table style="border-collapse:collapse;" cellpadding="3" border="0" width="100%" height="250"><tr>
                    		<td colspan="2" align="center" height="30px"><h3>Калькулятор SNonce</h3></td></tr>
                    		<tr height="20">
                    			<td width="50%">Введите MAC-адрес</td>
                    			<td align="center"><input name="mac_client" id="mac" type="text" required="required"/></td></tr>
                            <tr><td align="center" colspan="2" height="40px">
                            <button name="snonce" id="send" title="Считать" onclick="snonce()"/>Считать</button></td></tr>
                    <tr><td colspan="2" height="10px">Authenticator Nonce</td></tr>
                    			<td colspan="2" height="30"><textarea style="resize: none; overflow:hidden;" rows="2" cols="32" name="message" id="message"></textarea></td>
                    		</tr>
                    </form>
                    
                    </table>
