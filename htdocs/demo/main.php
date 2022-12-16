<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
<link rel="stylesheet" href="orinoco/css/_styles.css" type="text/css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css">

</style>
</head>
<body  style="margin:0px" background="orinoco/images/bg.gif">
<table width="100%" height="100%">
	<tr>
		<td width="18%" height="40" colspan="2"></td>
	</tr>
	<tr>
		<td width="12%" height="570" align="center" valign="top">
        	<table style="margin-top:5%" border="0">
            	<tr><td><a href="main.php" /><img src="images/Status.png"></a></td></tr>
            	<tr><td><a href="set_ap.php" /><img src="images/AP.png"></a></td></tr>
                <tr><td><a href="set_client.php" /><img src="images/client.png"></a></td></tr>
            </table>
        </td>
        <td width="40%" bgcolor="white" valign="top">
        <table align="left" cellpadding="1" cellspacing="1" style="margin-top:30px; margin-left:40px" width="100%" border="0">
            <tr>
            <td background="orinoco/images/left_line.gif"></td>
            <td>
            <table align="left" style="margin-top:10px; margin-left:10px" border="0">
            <tr>
                <td width="400px">Настроки точки доступа</td>
                <td><?php if (isset($_SESSION['demo']['ap']['full']) && ($_SESSION['demo']['ap']['full'] == '1')) {
													echo '<font color="green">введены</font>';
												}
												else {
													echo '<font color="red">не введены</font>';}
													?>
                </td></tr>
                                                    <tr>
                                                    <td>Точка доступа</td>
                <td><?php if (isset($_SESSION['demo']['ap']['switcher']) && ($_SESSION['demo']['ap']['switcher'] == '1')) {
													echo '<font color="green">включена</font>';
												}
												else {
													echo '<font color="red">выключена</font>';}
													?></td></tr>
                <tr>
                 <td>Настроки беспроводного клиента</td>
                <td><?php if (isset($_SESSION['demo']['fuller']) && ($_SESSION['demo']['fuller'] == '1')) {
													echo '<font color="green">введены</font>';
												}
												else {
													echo '<font color="red">не введены</font>';}
													?></td></tr>
                                                    <tr><td>Соединение между точкой доступа и клиентом</td>
            	<td><?php if (isset($_SESSION['demo']['success']) && ($_SESSION['demo']['success'] == '1'))  {
													echo '<font color="green">установлено</font>';
												}
												else {
													echo '<font color="red">не установлено</font>';}
													?></td>
                                                    
                </tr>
                <tr><td colspan="2" valign="middle" height="40" align="left">
                <hr width="375" size="1" color="#B4C3D" />
                </td></tr>
            <tr>
            <td>Аутентификация предустановленным ключом</td>
            <td><a href="auth/psk/scenario.php" /><img src="images/start.png"> </a>
             </td>
             </tr>
             <tr>
            <td>Аутентификация по протоколу EAP</td>
            <td><a href="auth/eap/1eap.php" /><img src="images/start.png"> </a>
             </td>
             </tr>
             <tr>
             <td>
             WEP</td><td><a href="enc/wep/process.php" /><img src="images/start.png"></a>
                </td></tr>
                <tr>
             <td>
             TKIP</td><td><a href="enc/tkip/encapsulation.php" /><img src="images/start.png"></a>
                </td></tr>
                <tr>
             <td>
             CCMP</td><td><a href="enc/ccmp/ccmpenc.php" /><img src="images/start.png"></a>
                </td></tr>
                <tr><td>Эмулятор</td>
                <td align="left"><a href="/site/project/demo/emul/cfg/sec-gen34-b.html" /><img src="images/start.png"></a>
        </td>
        </tr>
            
        <!--<tr><td>Значения переменных</td>
               <td align="left"><a href="set/test.php" />Переменные</a>
        </td>
        </tr>-->
        <tr>
            <td>Сброс параметров</td>
            <td align="left"><a href="set/unset.php" />Reset</a>
        </td>
        </tr>
        </table>
        </td>
        <td background="orinoco/images/left_line.gif"></td>
        </table></td>
        <td width="50%" bgcolor="white"></td>
    </tr>
</table>
</body>
</html>