<?php
session_start();
$_SESSION["debug"]=1;
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
 <script src="orinoco/scripts/jquery-2.1.1.min.js"></script>
 <script src="radius/js/open.js"></script>
 <script src="set/js/check_client.js"></script>
  <script src="set/js/check_bridge.js"></script>
 <script src="radius/js/general.js"></script>
 <script src="orinoco/scripts/jquery-ui-1.10.4/js/jquery-ui-1.10.4.js"></script>
  <LINK rel="stylesheet" href="orinoco/css/css/global.css">
<link rel="stylesheet" href="orinoco/css/_styles.css" type="text/css">
<link rel="stylesheet" href="style.css" type="text/css">
<LINK rel="stylesheet" href="orinoco/scripts/jquery-ui-1.10.4/development-bundle/themes/base/jquery.ui.base.css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css">
@import url("orinoco/css/table.css");
</style>
<style>
    .testclass {
        display:none
    }
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
        <table cellpadding="1" cellspacing="1" style="margin-top:0px; margin-left:20px" width="100%" border="0">
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
      <tr>
   		<td>Маска</td>
   		<td><input type="text" class="formtext" name="mask" align="left" size="28px" value="<?=(isset($_SESSION['ap']['mask'])?$_SESSION['ap']['mask']:'255.255.255.0')?>" required="required"/></td>
   	</tr>
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
<table cellpadding="1" cellspacing="1" style="margin-top:10px; margin-left:40px; " width="100%" border="0">
	    <tr>
    	    <td class="tableheader">Доступные подключениия</td></tr>
        <tr>
        <td>
        	<table border="0">
            	<tr>
                	<td width="400px" height="600px">
                    	<table width="100%" height="100%" style="border: 2px solid #fff;" border="0">
                        	<tr>
                            	<td width="100%" valign="top" style="padding:5px;">
                                	<div id="switcher">
									<p> <a href="/bridge_sch.php">Схема сетевого моста</a> </p>
                                    	<p>Беспроводное сетевое соединение</p>
                                        <form action="set/psk_client_connect.php" name="connection" method="post">
											<table class="gradient-style" width="100%" style="border: 2px solid #fff;"><tr>
											<thead>
                                    						<th scope="col" width="25%" align="center">Название</td>
                                                            <th scope="col" width="25%" align="center">Канал</td>
                                                            <th scope="col" width="25%" align="center">Сигнал</td>
                                                            <th scope="col" width="25%" align="center">Шифрование</td></tr>
															</thead>
                                                            <tr>
                                                            <td align="center"><?php echo $_SESSION['ap']['SSID'];?></td>
                                                            <td align="center"><?php echo $_SESSION['ap']['channel'];?></td>
                                                            <td align="center"><?php $lev = rand(35, 50); echo $lev.'dB';?></td>
                                                            <td align="center"><?php echo $_SESSION['ap']['enc'];?></td></tr>
															<tr><td height="15" colspan="4"></td></tr></table>
                                                        <div id="unsuccess">
                                                            <table class="gradient-style" style="border: 2px solid #fff; border-top:0px; margin-top:-2px;">
															<tr>
                                                            <td width="35%" align="center">Введите ключ</td>
															<td align="center" colspan="2"  width="40%"><input type="password" name="connect"></td>
															<td align="right" width="25%"><input type="submit" value="Подключиться" id="submit" name="submit"></td></tr></table></div>
                                                            <div id="connected">
                                                            <table class="gradient-style" style="border: 2px solid #fff; border-top:0px; margin-top:-2px;">
															<tr>
                                                            <td width="75%" align="center">Подключено</td>
															<td align="right" valign="bottom"><input type="submit" value="Отключиться" name="submit1"></td></tr></table></div>
															
											</form>
                                </div>
                                </td> 
                    </td>
                </tr>
				<tr>
                	<td width="400px" height="200px">
                    	<table width="100%" height="100%" style="border: 2px solid #fff;" border="0">
                        	<tr>
                            	<td width="100%" valign="top" style="padding:5px;">
                                	<div id="switcher2">
									 
                                    	<p>Беспроводное сетевое соединение</p>
                                        <form action="set/psk_client_connect2.php" name="connection2" method="post">
											<table class="gradient-style" width="100%" style="border: 2px solid #fff;"><tr> 
											<thead>
                                    						<th scope="col" width="25%" align="center">Название</td>
                                                            <th scope="col" width="25%" align="center">Канал</td>
                                                            <th scope="col" width="25%" align="center">Сигнал</td>
                                                            <th scope="col" width="25%" align="center">Шифрование</td></tr>
															</thead>
                                                            <tr>
                                                            <td align="center"><?php echo $_SESSION['ap']['SSID2'];?></td>
                                                            <td align="center"><?php echo $_SESSION['ap']['channel2'];?></td>
                                                            <td align="center"><?php $lev = rand(35, 50); echo $lev.'dB';?></td>
                                                            <td align="center"><?php echo $_SESSION['ap']['enc2'];?></td></tr>
															<tr><td height="15" colspan="4"></td></tr></table>
                                                                       <div id="unsuccess2">
                                                            <table class="gradient-style" style="border: 2px solid #fff; border-top:0px; margin-top:-2px;">
															<tr>
                                                            <td width="35%" align="center">Введите ключ</td>
															<td align="center" colspan="2"  width="40%"><input type="password" name="connect2"></td>
															<td align="right" width="25%"><input type="submit" value="Подключиться" id="submit2" name="submit2"></td></tr></table></div>
                                                            <div id="connected2">
                                                            <table class="gradient-style" style="border: 2px solid #fff; border-top:0px; margin-top:-2px;">
															<tr>
                                                            <td width="75%" align="center">Подключено</td>
															<td align="right" valign="bottom"><input type="submit" value="Отключиться" name="submit3"></td></tr></table></div>
															
											</form></div>
                                   
                                </td>
                    </td>
                    
                </tr>

                <tr>
                	<td width="400px" height="200px">
                    	<table width="100%" height="100%" style="border: 2px solid #fff;" border="0">
                        	<tr>
                            	<td width="100%" valign="top" style="padding:5px;">
                                	<div id="switcher3" >
									 
                                    	<p>Беспроводное сетевое соединение</p>
                                        <form action="set/psk_client_connect.php" name="connection3" method="post">
											<table class="gradient-style" width="100%" style="border: 2px solid #fff;"><tr> 
											<thead>
                                    						<th scope="col" width="25%" align="center">Название</td>
                                                            <th scope="col" width="25%" align="center">Канал</td>
                                                            <th scope="col" width="25%" align="center">Сигнал</td>
                                                            <th scope="col" width="25%" align="center">Шифрование</td></tr>
															</thead>
                                                            <tr>
                                                            <td align="center"><?php echo $_SESSION['ap']['SSID3'];?></td>
                                                            <td align="center"><?php echo $_SESSION['ap']['channel3'];?></td>
                                                            <td align="center"><?php $lev = rand(35, 50); echo $lev.'dB';?></td>
                                                            <td align="center"><?php echo $_SESSION['ap']['enc3'];?></td></tr>
															<tr><td height="15" colspan="4"></td></tr></table>
                                                                       <div id="unsuccess3">
                                                            <table class="gradient-style" style="border: 2px solid #fff; border-top:0px; margin-top:-2px;">
															<tr>
                                                            <td width="35%" align="center">Введите ключ</td>
															<td align="center" colspan="2"  width="40%"><input id="inputsub" type="password" name="connect3"></td>
															<td align="right" width="25%"><input type="button" value="Подключиться" id="submit3click" name="submit3"></td></tr></table></div>
                                                            <div id="connected3">
                                                            <table class="gradient-style" style="border: 2px solid #fff; border-top:0px; margin-top:-2px;">
															<tr>
                                                            <td width="75%" align="center">Подключено</td>
															<td align="right" valign="bottom"><input type="submit" value="Отключиться" name="submit3"></td></tr></table></div>
															
                                        </form>
                                    </div>
                                   
                                </td>
                    </td>
                </tr>



           
		 
            </table>

         </td>   
         		
    </tr>
    <script>
        var getSwitcherElastix = "<?php echo $_SESSION['ap']['switcher3']; ?>"

        var getSuccessElastix = "<?php echo $_SESSION['success']; ?>"

        var getkey3 = "<?php echo $_SESSION['ap']['key3']; ?>"

        var getconnect3 = "<?php echo $_SESSION['ap']['connect3']; ?>"

        var secret = "<?php echo $_SESSION['radius']['shared-secret']; ?>"

        var elastixConnection = document.getElementById('switcher3');    
        var elastixSuccess = document.getElementById('connected3');   
        var elastixUnSuccess = document.getElementById('unsuccess3');  
        var btnsubmit = document.getElementById('submit3click');  
        var inp = document.getElementById('inputsub');  

      console.log(getSwitcherElastix)
        elastixSuccess.className = 'testclass'

        elastixConnection.className = 'testclass'

        if (getSwitcherElastix == 1) {
            elastixConnection.style.display = 'block'
        }

        btnsubmit.addEventListener('click', (e) => {
        
            var inpt  = document.getElementById('inputsub'); 

            if (inpt.value == secret) {
                elastixUnSuccess.style.display = 'none'
                elastixSuccess.style.display = 'block'
            } else {
                alert(
                    'Не верный пароль'
                )
                elastixSuccess.style.display = 'none'
            }

     
        })

    </script>
</table>
</table>
</td>
<td><div id="cmd1">
        	<div id="label_cmd1">
            	Командная строка  для проверки "Сетевого моста"<?   
				  if ($_SESSION['debug']) echo "";  
				?>
			
            </div>
            <div style="font-family:'Lucida Console'; width:600px; background-color:hsla(0,0%,0%,1.00); color:hsla(0,0%,100%,1.00); height:15px; margin:10px auto auto 5px"> <form action="bridge.php" method="post" name="bridge">
                <div id="output">
                <pre>  <form action="bridge.php" id="bridge" method="post" name="bridge">
                <span style="margin-left:-123px;">C:\windows\system32>ping</span><input name="bridge" class="bridge" style="background-color:hsla(0,0%,0%,1.00); color:hsla(0,0%,100%,1.00); font-family:'lucida console';" type="text" class="formtext" size="40" required="required"/>
                
				<input type="submit" name="connect5" id="connect5"/> </form>
                	<?php
				
					
					if ( ($_SESSION['bridge_ok'] == "1")  && ($_SESSION['bridge_ok_ip'] == "1") ){
						include 'ip_ok.php';
							      
						echo "<div style='height:100px;'></div>";
					}
						if ( ($_SESSION['bridge_not'] == "1")   || ($_SESSION['bridge_not_ip'] == "1") ){
				
						include 'ip_not.php';
						
						echo "<div style='height:100px;'></div>";
					}
					
					?>
                    </pre>
                </div>
            </div>
</div></td>
</tr>
</table>
</table>
</div>
 <div>
     <table align="left" cellpadding="1" width="100%" border="0">
    <tr><td width="40%">
    	<table align="left" cellpadding="1" style="margin-top:-123px; margin-left:20px" width="100%" border="0">
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
                    	<input  type="text" class="formtext" name="radius_ip" align="left" size="28px" value="<?=(isset($_SESSION['radius']['ip'])?$_SESSION['radius']['ip']:'')?>" required="required"/></td>
   				</tr>
                <tr height="5"></tr>
   				<tr>
   		<td>Маска</td>
   		<td><input type="text" class="formtext" name="radius_mask" align="left" size="28px" value="<?=(isset($_SESSION['radius']['mask'])?$_SESSION['radius']['mask']:'255.255.255.0')?>" required="required"/></td>
   	</tr>
     <tr height="5"></tr>
     <tr>
   		<td>Secret</td>
   		<td><input type="text" class="formtext" name="radius_pass" align="left" size="28px" value="<?=(isset($_SESSION['radius']['secret'])?$_SESSION['radius']['secret']:'')?>" required="required"/></td>
   	</tr>
     <tr height="5"></tr>
    <tr>
   		<td>RADIUS-порт</td>
   		<td><input  type="text" class="formtext" name="radius_port" align="left" size="28px" value="<?=(isset($_SESSION['radius']['port'])?$_SESSION['radius']['port']:'')?>" required="required"/></td>
   	</tr>
    <tr height="5"></tr>
   <tr height="15"></tr>
    <tr>
         <td align="right"><input value='Сохранить' type="submit" name="save_rad" class="send"/>
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
	<tr><td colspan="2"> 
<tr><td colspan="2">
<a href="/rad.php">Схема подключения</a>
    </td></tr>
</td>
	
	</tr>
</table>
</td>

<td><div id="cmd">
        	<div id="label_cmd">
            	Командная строка RADIUS <?   
				  if ($_SESSION['debug']) echo "";  
				?>
            </div>
            <div style="font-family:'Lucida Console'; width:600px; background-color:hsla(0,0%,0%,1.00); color:hsla(0,0%,100%,1.00); height:15px; margin:10px auto auto 5px"><form action="radius/handlers/run.php" method="post" name="run_radius">
                <div id="output">
                <pre>
                <span style="margin-left:-123px;">C:\windows\system32></span><input name="run" class="radius" style="background-color:hsla(0,0%,0%,1.00); color:hsla(0,0%,100%,1.00); font-family:'lucida console';" type="text" class="formtext" size="40" required="required"/>
                <input type="submit" name="connect" id="connect"/>
                	<?php
					
					
					if (isset($_SESSION['run']) && ($_SESSION['run'] == "1")){
						echo file_get_contents("radius/output/run.txt");
						echo "<div style='height:100px;'></div>";
					}
					
					if (isset($_SESSION['options_wrong']) && ($_SESSION['options_wrong'] == "1")){
						echo file_get_contents("radius/output/111.txt");
						if ($_SESSION['debug'])  echo "options wrong radius/output/111.txt";
					}
					if (isset($_SESSION['wrong_pass']) && ($_SESSION['wrong_pass'] == "1")){
						include 'radius/output/testuser_pass_fail.php';
						if ($_SESSION['debug'])  echo "wrong_pass radius/output/testuser_pass_fail.php";
					}
					if (isset($_SESSION['secret_wrong']) && ($_SESSION['secret_wrong'] == "1")){
						include'radius/output/111.txt';
					
					}
						if (isset($_SESSION['ip_wrong']) && ($_SESSION['ip_wrong'] == "1")){
						include'radius/output/ipwrong.php';
					
					}
					if (isset($_SESSION['secret_ok']) && ($_SESSION['secret_ok'] == "1")){
						
						include'radius/output/shared-secret-ok.php';
						if ($_SESSION['debug'])  echo "secret_ok radius/output/shared-secret-ok.php";
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