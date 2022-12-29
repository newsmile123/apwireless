<?php
session_start();
error_reporting(0);
if (isset($_SESSION['ap']['mode']) && isset($_SESSION['ap']['SSID']) && isset($_SESSION['ap']['mac']) && isset($_SESSION['ap']['enc']) && isset($_SESSION['ap']['key']) && isset($_SESSION['ap']['channel'])){
$_SESSION['ap']['full'] = '1';}
else{
$_SESSION['ap']['full'] = '0';}
if (isset($_SESSION['ap']['mode2']) && isset($_SESSION['ap']['SSID2']) && isset($_SESSION['ap']['mac2']) && isset($_SESSION['ap']['enc2']) && isset($_SESSION['ap']['key2']) && isset($_SESSION['ap']['channel2'])){
$_SESSION['ap']['full2'] = '1';}
else{
$_SESSION['ap']['full2'] = '0';}
if ( isset($_SESSION['ap']['SSID3']) && isset($_SESSION['ap']['ip3']) && isset($_SESSION['ap']['mac3']) && isset($_SESSION['ap']['enc3'])){
$_SESSION['ap']['full3'] = '1';}
else{
$_SESSION['ap']['full3'] = '0';}
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
            	<?php include("menu.php"); ?>
            </table>
        </td>
        <td width="40%" bgcolor="white" valign="top">
        <table align="left" cellpadding="1" cellspacing="1" style="margin-top:30px; margin-left:40px" width="100%" border="0">
            <tr>
            <td background="orinoco/images/left_line.gif"></td>
            <td>
            <table align="left" style="margin-top:10px; margin-left:10px" border="0">
            <tr>
                <td width="400px">Настройки точки доступа Proxim ap4000</td>
                <td><?php if (isset($_SESSION['ap']['full']) && ($_SESSION['ap']['full'] == '1')) {
													echo '<font color="green">введены</font>';
												}
												else {
													echo '<font color="red">не введены</font>';}
													?>
                </td></tr>
                                                    <tr>
                                                    <td>Точка доступа Proxim ap4000</td>
                <td><?php if (isset($_SESSION['ap']['switcher']) && ($_SESSION['ap']['switcher'] == '1')) {
													echo '<font color="green">включена</font>';
												}
												else {
													echo '<font color="red">выключена</font>';}
													?></td></tr>
		<td width="400px">Настройки точки доступа Nanostation</td>
                <td><?php if (isset($_SESSION['ap']['full2']) && ($_SESSION['ap']['full2'] == '1')) {
													echo '<font color="green">введены</font>';
												}
												else {
													echo '<font color="red">не введены</font>';}
													?>
                </td></tr>
                                                    <tr>
                                                    <td>Точка доступа Nanostation</td>
                <td><?php if (isset($_SESSION['ap']['switcher2']) && ($_SESSION['ap']['switcher2'] == '1')) {
													echo '<font color="green">включена</font>';
												}
												else {
													echo '<font color="red">выключена</font>';}
													?></td></tr>		
                                                    <td width="400px">Настройки точки доступа eltex</td>
                <td><?php if (isset($_SESSION['ap']['full3']) && ($_SESSION['ap']['full3'] == '1')) {
													echo '<font color="green">введены</font>';
												}
												else {
													echo '<font color="red">не введены</font>';}
													?>
                </td></tr>
                                                    <tr>
                                                    <td>Точка доступа eltex</td>
                <td><?php if (isset($_SESSION['ap']['switcher3']) && ($_SESSION['ap']['switcher3'] == '1')) {
													echo '<font color="green">включена</font>';
												}
												else {
													echo '<font color="red">выключена</font>';}
													?></td></tr>										
                <tr>
                 <td>Настройки беспроводного клиента</td>
                <td>
                    <?php if (isset($_SESSION['fuller']) && ($_SESSION['fuller'] == '1')) {
                        echo '<font color="green">введены</font>';
                                }
                                else {
                                    echo '<font color="red">не введены</font>';}
													?></td></tr>



                                                    <tr><td>Соединение между точкой доступа Proxim ap4000 и клиентом</td>
            	                    <td><?php if (isset($_SESSION['success']) && ($_SESSION['success'] == '1'))  {
													echo '<font color="green">установлено</font>';
												}
												else {
													echo '<font color="red">не установлено</font>';}
													?></td></tr>
													<tr><td>Соединение между точкой доступа Nanostation и клиентом</td>
													<td><?php if (isset($_SESSION['success2']) && ($_SESSION['success2'] == '1'))  {
													echo '<font color="green">установлено</font>';
												}
												else {
													echo '<font color="red">не установлено</font>';}
													?></td>                                
                </tr>
                <tr><td>Соединение между точкой доступа eltex и клиентом</td>
													<td><?php if (isset($_SESSION['ap']['successxui']))  {
													echo '<font color="green">установлено</font>';
												}
												else {
													echo '<font color="red">не установлено</font>';}
													?></td>                                
                </tr>
									<tr><td>Bridge</td>
													<td><?php if ( (($_SESSION['success2']=='1') || ($_SESSION['success']=='1')) && isset($_SESSION['wds_mac1']) &&  isset($_SESSION['wds2_mac']) && ($_SESSION['wds_mac1']==$_SESSION['ap']['mac2'] || $_SESSION['wds_mac2']==$_SESSION['ap']['mac2'] || $_SESSION['wds_mac1']==$_SESSION['ap']['mac2'] ) && $_SESSION['wds2_mac']==$_SESSION['ap']['mac'] )  
													{
													echo '<font color="green">установлен</font>';
												}
												else {
													echo '<font color="red">не установлен</font>';}
													?></td>
                                                    
                </tr>
                <tr><td colspan="2" valign="middle" height="40" align="left">
                <hr width="375" size="1" color="#B4C3D" />
                </td></tr>
            <tr>
            <td colspan="2">
            <?php if (isset($_SESSION['success']) && ($_SESSION['success'] == '1'))  {
				echo '<table>
				<tr>
            <td width="400px">Аутентификация предустановленным ключом</td>
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
             CCMP</td><td><a href="enc/ccmp/encapsulation.php" /><img src="images/start.png"></a>
                </td></tr>
            </table>
			</td></tr>'; }?>
        <!--<tr><td>Значения переменных</td>
               <td align="left"><a href="set/test.php" />Переменные</a>
        </td>
        </tr>-->
        <tr><td>Эмулятор Proxim AP4000</td>
                <td align="left"><a href="emul/index/index.html" target="_blank" /><img src="images/start.png"></a>
        </td>
        </tr>
		 <tr><td>Эмулятор NanoStation Loco m2</td>
                <td align="left"><a href="ubiq/index.php" target="_blank" /><img src="images/start.png"></a>
        </td>
        </tr>
        <tr><td>Эмулятор Eltex</td>
                <td align="left"><a target='_blank' href="elastix/index.html" /><img src="images/start.png"></a>
        </td>
        </tr>
        <tr><td>Вывод переменных</td>
                <td align="left"><a target='_blank' href="elastix/outConst.php" /><img src="images/start.png"></a>
        </td>
        </tr>
        <tr>
            <td>Сброс параметров</td>
            <td align="left"><a href="set/unset.php" />Reset</a>
        </td>
        </tr>
        </table>
        </td>
        <td background="orinoco/images/left_line.gif"></td>
        </table>
        <td width="50%" bgcolor="white"></td>
    </tr>
</table>  
 <?php

//Если сессия запущена, то есть присутствуют файлы 
//кукис, и в них есть логин и айди
//то отображаем профиль пользователя
//Для этого достаем из базы все данные по логину
//и выводим их на странице
if(isset($_SESSION['login']) && isset($_SESSION['id']))
{
 
    include("index/db/db.php");
    $user=$_SESSION['login'];
    $res=mysql_query("SELECT * FROM `users` WHERE `login`='$user' ");
    $user_data=mysql_fetch_array($res);
 
    echo "<right>";
    echo "Ваш логин: <b>". $user_data['login']."</b><br>";
    echo "Ваше имя: <b>". $user_data['name']."</b><br>";
    echo "Ваша фамилия: <b>". $user_data['surname']."</b><br>";
    echo "Группа: <b>". $user_data['group']."</b><br>";
    echo "<a href='exit.php'>Выход</a>";
    echo "</right>";
}
?>
</body>
</html>