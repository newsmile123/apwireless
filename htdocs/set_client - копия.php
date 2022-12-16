<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
 <script src="orinoco/scripts/jquery-2.1.1.min.js"></script>
 <script src="radius/js/open.js"></script>
 <script src="set/js/check1.js"></script>
 <script src="orinoco/scripts/jquery-ui-1.10.4/js/jquery-ui-1.10.4.js"></script>
  <LINK rel="stylesheet" href="orinoco/css/css/global.css">
<link rel="stylesheet" href="orinoco/css/_styles.css" type="text/css">
<LINK rel="stylesheet" href="orinoco/scripts/jquery-ui-1.10.4/development-bundle/themes/base/jquery.ui.base.css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css">
@import url("orinoco/css/table.css");
</style>
<script>
  $(function() {
    $( ".tabs" ).tabs();
  });
  </script>
</head>
<body  style="margin:0px" background="orinoco/images/bg.gif">
<table width="100%" height="100%">
	<tr>
		<td width="18%" height="40" colspan="2"></td>
	</tr>
	<tr>
		<td width="11%" height="570" align="center" valign="top">
        	<table style="margin-top:5%" border="0">
            	<?php include("menu.php"); ?>
            </table>
        </td>
        <td width="85%" bgcolor="white" valign="top">
        <div class="tabs">
  <ul>
    <li><a href="#tabs-1">Общие настройки</a></li>
    <li><a href="#tabs-2">Настройки RADIUS</a></li>
  </ul>
  <div id="tabs-1">
        <table border="0">
        <tr><td>
        <table cellpadding="1" cellspacing="1" style="margin-top:30px; margin-left:20px" width="100%" border="0">
            <tr>
            <td background="orinoco/images/left_line.gif"></td>
            <td>
            <table align="left" style="margin-top:0px; margin-left:18px" border="0">
            <tr>
				<form id="client" method="post" action="set/client_settings.php">
				<tr><td colspan="2" class="tableheader">Настройки клиента</td></tr>
                <tr height="10"></tr>
	<tr>
      <td width="68%">MAC-адрес</td><td><input type="text" class="formtext" name="mac" id="mac" align="left" width="150" value="<?=(isset($_SESSION['ClientMAC'])?$_SESSION['ClientMAC']:'')?>"/></td></tr>
      <tr>
      <td>ip-адрес</td><td><input type="text" class="formtext" name="ip" id="ip" align="left" width="150" value="<?=(isset($_SESSION['ClientIP'])?$_SESSION['ClientIP']:'')?>"/></td></tr>
      <tr height="10"></tr>
    <tr>
      <td></td>
      <td align="right"><input value='Сохранить' type="submit" class="send"/></td>
    </tr>
</form>
</tr>
</table></td>
<td align="left" background="orinoco/images/left_line.gif"></td>
<td width="50%"></td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr height="15"></tr>
<tr>
<td width="38px"></td>
<td align="left" valign="middle"><hr width="395" size="1" color="#B4C3D" /></td></tr>
</table></td>
</tr>
<tr>
<td width="50%" bgcolor="white" valign="top" align="left">
<table cellpadding="1" cellspacing="1" style="margin-top: 10px; margin-left:40px; " width="100%" border="0">
	<tr>
    	<td class="tableheader">Доступные подключения</td></tr>
        <tr>
        <td>
        	<table border="0">
            	<tr>
                	<td width="400px" height="200px">
                    	<table width="100%" height="100%" style="border: 2px solid #fff;" border="0">
                        	<tr>
                            	<td width="100%" valign="top" style="padding:5px;">
                                <?php
								if (isset($_SESSION['ap']['switcher'])) {
								if ($_SESSION['ap']['switcher'] == '1') {
									echo "Беспроводное сетевое соединение";
									
                                    echo "<table><tr><td height='5'></td></tr></table>";
                                    $lev = rand(35, 50);
									echo '<form action="set/psk_client_connect.php" name="connection" method="post">
											<table  id="gradient-style" width="100%" style="border: 2px solid #fff;"><tr>
											<thead>
                                    						<th scope="col" width="25%" align="center">Название</td>
                                                            <th scope="col" width="25%" align="center">Канал</td>
                                                            <th scope="col" width="25%" align="center">Сигнал</td>
                                                            <th scope="col" width="25%" align="center">Шифрование</td></tr>
															</thead>
                                                            <tr>
                                                            <td align="center">'.$_SESSION['ap']['SSID'].'</td>
                                                            <td align="center">'.$_SESSION['ap']['channel'].'</td>
                                                            <td align="center">-'.$lev.'dB</td>
                                                            <td align="center">'.$_SESSION['ap']['enc'].'</td></tr>';
															if (!isset($_SESSION['connect'])) {
															echo '
															<tr><td height="15" colspan="4"></td></tr>
															<tr>
                                                            <td align="center">Введите ключ<td>
															<td align="center">
															<input type="password" name="connect"></td>
															<td align="right"><input type="submit" value="Подключиться" name="submit" onclick="check()"></td></tr>
											</table>				
											</form>';
															}	
											else {
												if ($_SESSION['success'] == '1') {
													echo '<tr><td height="15" colspan="4"></td></tr>
													<tr>
                                                            <td height="15" align="center" valign="bottom">Подключено<td>
															<td></td>
															<td align="right" valign="bottom"><input type="submit" value="Отключиться" name="submit1"></td></tr>
											</table>				
											</form>';	
												}
												else {
													echo '<tr><td colspan="4">Неверный пароль</td></tr>
													<tr>
                                                            <td align="center">Введите ключ<td>
															<td>
															<input type="password" name="connect"></td>
															<td align="right"><input type="submit" value="Подключиться" name="submit"></td></tr>
											</table>				
											</form>';
												}
													
								}
								}
									else {
									echo "<div class='header'>Доступных подключений не обнаружено</div>";
									}
								}
								?>
</td>
                    </td>
                </tr>
                </div>
            </table>
         </td>       		
    </tr>
</table>
</table>
</td>
</tr>
</table>
</div>
  <div id="tabs-2">
     <table align="left" cellpadding="1" width="100%" border="0">
    <tr><td width="40%">
    	<table align="left" cellpadding="1" style="margin-top:-163px; margin-left:20px" width="100%" border="0">
            <tr>
            <td background="orinoco/images/left_line.gif"></td>
            <td>
            <form name="radius-general" method="post" action="radius/general.php">
            <table align="left" width="400px" style="margin-top:0px; margin-left:14px" border="0">
				<tr>
    				<td colspan="2" class="tableheader">Настройки RADIUS-сервера</td>
    			</tr>
                <tr height="10"></tr>
    			<tr>
    				<td width="80%">ip-адрес сервера</td>
   					<td>
                    	<input type="text" class="formtext" name="radius_ip" align="left" size="28px" value="<?=(isset($_SESSION['radius']['ip'])?$_SESSION['radius']['ip']:'')?>" required="required"/></td>
   				</tr>
                <tr height="5"></tr>
   				<tr>
   		<td>Маска</td>
   		<td><input type="text" class="formtext" name="radius_mask" align="left" size="28px" value="<?=(isset($_SESSION['radius']['mask'])?$_SESSION['radius']['mask']:'255.255.255.0')?>" required="required"/></td>
   	</tr>
     <tr height="5"></tr>
    <tr>
   		<td>RADIUS-порт</td>
   		<td><input type="text" class="formtext" name="radius_port" align="left" size="28px" value="<?=(isset($_SESSION['radius']['port'])?$_SESSION['radius']['port']:'')?>" required="required"/></td>
   	</tr>
    <tr height="5"></tr>
   <tr height="15"></tr>
    <tr>
    <td colspan="2" align="right"><input value='Сохранить' class="send_button" type="submit" name="radius-button"/>
    </td>
    </tr>
     </table></form>
    </td>
    <td  background="orinoco/images/left_line.gif"></td>
    </tr>
    <tr height="30px"></tr>
    <tr><td colspan="2">
    <a href="set_client.php#tabs-2" onclick="clients()">Редактировать файл clients.conf</a>
    </td></tr>
    <tr height="10px"></tr>
    <tr><td colspan="2">
    <a href="set_client.php#tabs-2" onclick="users()">Редактировать файл users.conf</a>
    </td></tr>
</table>
</td>
<td><div id="cmd">
        	<div id="label_cmd">
            	Командная строка
            </div>
            <div style="font-family:'Lucida Console'; width:600px; background-color:hsla(0,0%,0%,1.00); color:hsla(0,0%,100%,1.00); height:15px; margin:10px auto auto 5px"><form action="radius/handlers/run.php" method="post" name="run_radius">
                <div id="output">
                <pre>
                <span style="margin-left:-123px;">C:\windows\system32></span><input name="run" class="radius" style="background-color:hsla(0,0%,0%,1.00); color:hsla(0,0%,100%,1.00); font-family:'lucida console';" type="text" class="formtext" size="40" required="required"/>
                <input type="submit" name="connect" id="connect"/>
                	<?php
					if (isset($_SESSION['run']) && ($_SESSION['run'] == "1")){
						echo file_get_contents("radius/output/run.txt");
					}
					?>
                    </pre>
                </div>
            </div>
</div></td></tr>
</table>
    </div>
    </div>
</body>
</html>