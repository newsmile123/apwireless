<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
<LINK rel="stylesheet" href="orinoco/css/global.css">
<LINK rel="stylesheet" href="orinoco/scripts/jquery-ui-1.10.4/development-bundle/themes/base/jquery.ui.base.css">
  <script src="orinoco/scripts/jquery-2.1.1.min.js"></script>
  <script src="orinoco/scripts/jquery-ui-1.10.4/js/jquery-ui-1.10.4.js"></script>
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
            	<tr><td><a href="main.php" /><img src="images/Status.png"></a></td></tr>
            	<tr><td><a href="set_ap.php" /><img src="images/AP.png"></a></td></tr>
                <tr><td><a href="set_client.php" /><img src="images/client.png"></a></td></tr>
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
        <table cellpadding="1" cellspacing="3" style="margin-top:30px; margin-left:20px" width="100%" border="0">
            <tr>
            <td background="orinoco/images/left_line.gif"></td>
            <td>
            <table align="left" style="margin-top:0px; margin-left:18px" border="0">
            <tr>
				<form id="client" method="post" action="set/Client_settings.php">
				<tr><td colspan="2" class="tableheader">Настройки клиента</td></tr>
                <tr height="10"></tr>
	<tr>
      <td width="68%">MAC-адрес</td><td><input type="text" class="formtext" name="ClientMAC" align="left" width="150" value="<?=(isset($_SESSION['demo']['client']["mac"])?$_SESSION['demo']['client']["mac"]:'')?>"/></td></tr>
      <tr>
      <td>ip-адрес</td><td><input type="text" class="formtext" name="ClientIP" align="left" width="150" value="<?=(isset($_SESSION['demo']['client']["ip"])?$_SESSION['demo']['client']["ip"]:'')?>"/></td></tr>
      <tr height="10"></tr>
    <tr>
      <td></td>
      <td align="right"><a href="set/fill_client.php" />Get parameters</a></td>
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
								if (isset($_SESSION['demo']['ap']['switcher'])) {
								if ($_SESSION['demo']['ap']['switcher'] == '1') {
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
                                                            <td align="center">'.$_SESSION['demo']['ap']['SSID'].'</td>
                                                            <td align="center">'.$_SESSION['demo']['ap']['channel'].'</td>
                                                            <td align="center">-'.$lev.'dB</td>
                                                            <td align="center">'.$_SESSION['demo']['ap']['enc'].'</td></tr>';
															if (!isset($_SESSION['demo']['connect'])) {
															echo '
															<tr><td height="15" colspan="4"></td></tr>
															<tr>
                                                            <td align="center">Введите ключ<td>
															<td align="center">
															<input type="password" name="connect"></td>
															<td align="right"><input type="submit" value="Подключиться" name="submit"></td></tr>
											</table>				
											</form>';
															}	
											else {
												if ($_SESSION['demo']['success'] == '1') {
													echo '<tr><td height="15" colspan="4"></td></tr>
													<tr>
                                                            <td height="15" align="center" valign="bottom">Подключеноо<td>
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
  		<div class="tabs"><ul>
    		<li><a href="#tabs-2-1">Общие</a></li>
            <li><a href="#tabs-2-2">clients.conf</a></li>
            <li><a href="#tabs-2-3">users.conf</a></li>
  		</ul>
    <div id="tabs-2-1">
    <table align="left" cellpadding="1" width="100%" border="0">
    <tr><td width="40%">
    	<table align="left" cellpadding="1" style="margin-top:-172px; margin-left:39px" width="100%" border="0">
            <tr>
            <td background="orinoco/images/left_line.gif"></td>
            <td>
            <form name="radius-general" method="post" action="set/radius/general.php">
            <table align="left" width="400px" style="margin-top:0px; margin-left:14px" border="0">
				<tr>
    				<td colspan="2" class="tableheader">Настройки сервера</td>
    			</tr>
                <tr height="10"></tr>
    			<tr>
    				<td width="80%">ip-адрес сервера</td>
   					<td>
                    	<input type="text" class="formtext" name="radius_ip" align="left" size="28px" value="<?=(isset($_SESSION['demo']['radius']['ip'])?$_SESSION['demo']['radius']['ip']:'')?>"/></td>
   				</tr>
                <tr height="5"></tr>
   				<tr>
   		<td>Маска</td>
   		<td><input type="text" class="formtext" name="radius_mask" align="left" size="28px" value="<?=(isset($_SESSION['demo']['radius']['mask'])?$_SESSION['demo']['radius']['mask']:'')?>"/></td>
   	</tr>
     <tr height="5"></tr>
    <tr>
   		<td>RADIUS-порт</td>
   		<td><input type="text" class="formtext" name="radius_port" align="left" size="28px" value="<?=(isset($_SESSION['demo']['radius']['port'])?$_SESSION['demo']['radius']['port']:'')?>"/></td>
   	</tr>
    <tr height="5"></tr>
   <tr height="15"></tr>
    <tr>
    <td colspan="2" align="right"><!--<input value='Сохранить' class="send_button" type="submit" name="radius-button"/>--><a href="set/radius/fill_general.php" />Get parameters</a>
    </td>
    </tr>
     </table>
    </td>
    <td  background="orinoco/images/left_line.gif"></td>
    </tr>
</table>
</td>
<td><div id="run">
		<div id="cmd">
        	<span id="label_cmd">Запуск ></span></label><input id="input-cmd" class="formtext" name="radius_port" align="left" value="<?=(isset($_SESSION['demo']['clients']['check']) && isset($_SESSION['demo']['radius']['check']) && isset($_SESSION['demo']['users']['check']) && isset($_SESSION['demo']['radius']['run'])?$_SESSION['demo']['radius']['run']:'')?>"/>
        </div>
        <div id="desc">
        	<span id="label_desc">log RADIUS-сервера</span>
        </div>
        <div id="alert" style="font-size:10px">
        <?php
					if (isset($_SESSION['demo']['clients']['check']) && isset($_SESSION['demo']['radius']['check']) && isset($_SESSION['demo']['users']['check'])){
						echo "<p font=>Данные настройки и log RADIUS-сервера приведены для примера. Для более подробного рассмотрения возможностей RADIUS-сервера используйте основной режим.</p>";
					}
					?>
        	
        </div>
        <div id="log">
        <pre>
                	<?php
					if (isset($_SESSION['demo']['clients']['check']) && isset($_SESSION['demo']['radius']['check']) && isset($_SESSION['demo']['users']['check'])){
						echo file_get_contents("set/radius/output/run.txt");
					}
					?>
                    </pre>
        </div>
</div></td></tr></form>
</table>
    </div>
    <div id="tabs-2-2">
    	<table align="left" cellpadding="1" style="margin-top:20px; margin-left:40px" width="100%" border="0">
            <tr>
            <td background="orinoco/images/left_line.gif"></td>
            <td>
            <form name="clients.conf" method="post" action="set/radius/clients.php">
            <table align="left" width="400px" style="margin-top:0px; margin-left:10px" border="0">
				<tr>
    				<td colspan="3" class="tableheader">Редактирование файла clients.conf</td>
    			</tr>
                <tr>
                <td colspan="3"><p align="justify">В данном файле содержится описание клиента (Обычно это NAS - Network Authentication Server). Обязательные атрибуты secret и shortname, опционально можно задать атрибут nastype, который определяет тип клиента</p></td>
                </tr>
                <tr height="10"></tr>
                <tr>
    				<td>Клиент</td>
                	<td colspan="2"><input type="text" class="formtext" name="client-ip" align="left" size="28px" value="<?=(isset($_SESSION['demo']['clients']['client'])?$_SESSION['demo']['clients']['client']:'')?>"/></td>
                </tr>
                <tr height="15"></tr>
    			<tr>
                	<td></td>
    				<td width="30%">secret</td>
   					<td align="center">
                    	<input type="text" class="formtext" name="radius_ip" align="left" size="28px" value="<?=(isset($_SESSION['demo']['clients']['secret'])?$_SESSION['demo']['clients']['secret']:'')?>"/></td>
   				</tr>
                <tr height="5"></tr>
   				<tr>
                <td></td>
   		<td>short</td>
   		<td align="center"><input type="text" class="formtext" name="radius_mask" align="left" size="28px" value="<?=(isset($_SESSION['demo']['clients']['short'])?$_SESSION['demo']['clients']['short']:'')?>"/></td>
   	</tr>
     <tr height="5"></tr>
    <tr>
    <td></td>
   		<td>nastype</td>
   		<td align="center"><input type="text" class="formtext" name="radius_port" align="left" size="28px" value="<?=(isset($_SESSION['demo']['clients']['nastype'])?$_SESSION['demo']['clients']['nastype']:'')?>"/></td>
   	</tr>
    <tr height="5"></tr>
   <tr height="15"></tr>
    <tr>
    <td colspan="2"></td>
    <td align="center"><!--<input class="send_button" value='Сохранить' type="submit" name="clients_send"/>--><a href="set/radius/fill_clients.php" />Get parameters</a>
    </td>
    </tr>
    </form>
    </td>
    </table>
    </table>
    </div>
    <div id="tabs-2-3">
    	<table align="left" cellpadding="1" style="margin-top:20px; margin-left:40px" width="100%" border="0">
            <tr>
            <td background="orinoco/images/left_line.gif"></td>
            <td>
            <form name="clients.conf" method="post" action="set/radius/clients.php">
            <table align="left" width="400px" style="margin-top:0px; margin-left:10px" border="0">
				<tr>
    				<td colspan="3" class="tableheader">Редактирование файла users.conf</td>
    			</tr>
                <tr>
                <td colspan="3"><p align="justify">В данном файле содержатся параметры аутентифкации и конфигурационная информацииядля каждого пользователя</p></td>
                </tr>
                <tr height="10"></tr>
                <tr>
    				<td>Username</td>
                	<td colspan="2"><input type="text" class="formtext" name="users-name" align="left" size="28px" value="<?=(isset($_SESSION['demo']['users']['name'])?$_SESSION['demo']['users']['name']:'')?>"/></td>
                </tr>
                <tr height="15"></tr>
    			<tr>
                	<td></td>
    				<td width="30%">Auth-Type</td>
   					<td align="center">
                    	<input type="text" class="formtext" name="users-auth-type" align="left" size="28px" value="<?=(isset($_SESSION['demo']['users']['type'])?$_SESSION['demo']['users']['type']:'')?>"/></td>
   				</tr>
                <tr height="5"></tr>
   				<tr>
                <td></td>
   		<td>User-Password</td>
   		<td align="center"><input type="text" class="formtext" name="users-pass" align="left" size="28px" value="<?=(isset($_SESSION['demo']['users']['pass'])?$_SESSION['demo']['users']['pass']:'')?>"/></td>
   	</tr>
     <tr height="5"></tr>
    <tr>
    <td></td>
   		<td>Service-Type</td>
   		<td align="center"><input type="text" class="formtext" name="users-service" align="left" size="28px" value="<?=(isset($_SESSION['demo']['users']['service'])?$_SESSION['demo']['users']['service']:'')?>"/></td>
   	</tr>
    <tr height="5"></tr>
    <tr>
    <td></td>
   		<td>NAS-ip-Address</td>
   		<td align="center"><input type="text" class="formtext" name="users-nas-ip" align="left" size="28px" value="<?=(isset($_SESSION['demo']['users']['nas_ip'])?$_SESSION['demo']['users']['nas_ip']:'')?>"/></td>
   	</tr>
    <tr height="5"></tr>
    <tr>
    <td></td>
   		<td>Priority</td>
   		<td align="center"><input type="text" class="formtext" name="users-priority" align="left" size="28px" value="<?=(isset($_SESSION['demo']['users']['priority'])?$_SESSION['demo']['users']['priority']:'')?>"/></td>
   	</tr>
   <tr height="15"></tr>
    <tr>
    <td colspan="2"></td>
    <td align="center"><!--<input class="send_button" value='Сохранить' type="submit" name="users_send"/>--><a href="set/radius/fill_users.php" />Get parameters</a>
    </td>
    </tr>
    </form>
    </td>
    </table>
    </table>
    </div></div>
  </div>
</div>
 
        
        
</body>
</html>