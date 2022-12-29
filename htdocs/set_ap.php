<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
<link rel="stylesheet" href="orinoco/css/_styles.css" type="text/css">
<LINK rel="stylesheet" href="orinoco/css/css/global.css">
<script src="orinoco/scripts/jquery-2.1.1.min.js"></script>
<script src="set/js/check.js"></script>
 <script src="radius/js/open.js"></script>
<script src="set/js/check_client.js"></script>
 <script src="radius/js/general.js"></script>
 <script src="orinoco/scripts/jquery-ui-1.10.4/js/jquery-ui-1.10.4.js"></script>
  <LINK rel="stylesheet" href="orinoco/css/css/global.css">
<link rel="stylesheet" href="orinoco/css/_styles.css" type="text/css">
<LINK rel="stylesheet" href="orinoco/scripts/jquery-ui-1.10.4/development-bundle/themes/base/jquery.ui.base.css">
  



<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css">
@import url("orinoco/css/table.css");
</style>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css">
td {
    font-family: 'Hammersmith One', sans-serif;
    font-family: 'Questrial', sans-serif;
    font-size: 14px;
    color: rgb(60, 85, 128);
}
input, select, option {
	font-family: 'Hammersmith One', sans-serif;
    font-family: 'Questrial', sans-serif;
    font-size: 14px;
	margin-left: 0px;
	border-width: 1px;
	border-style: inset solid solid inset;
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
        <td width="30%" bgcolor="white" valign="top"> 
			 <div class="tabs">
			   <ul>
    <li><a href="#tabs-1"></a></li>
    <li><a href="#tabs-2"></a></li>
  </ul>
			 <div id="tabs-1">
			<table align="left" cellpadding="1" cellspacing="1" style="margin-top:30px; margin-left:40px" width="100%" border="0">
            <tr>
            <td background="orinoco/images/left_line.gif"></td>
            <td>
            <form name="ap" id="ap" method="post" action="set/ap.php">
            <table align="left" style="margin-top:0px; margin-left:10px" border="0">
				<tr>
    				<td colspan="2" align= "center "class="tableheader">Введите настройки точки доступа 1</td>
					</tr>
					</tr>
					<td colspan="2" class="tableheader">Настройки точки доступа</td>
    			</tr>
                <tr height="10"></tr>
                <TR>
							<td width="80%">ip-address</td><td><input   type="text" class="formtext" name="ip" align="left" width="150" value="<?=(isset($_SESSION['ap']['ip'])?$_SESSION['ap']['ip']:'')?>"/></td>
						</TR>
                        <tr>
   		<td>Маска</td>
   		<td><input  type="text" class="formtext" name="mask" align="left" size="28px" value="<?=(isset($_SESSION['ap']['mask'])?$_SESSION['ap']['mask']:'255.255.255.0')?>" required="required"/></td>
   	</tr>
    			<tr>
    				<td>SSID</td>
   					<td>
                    	<input  type="text" class="formtext" name="ssid" align="left" size="28px" value="<?=(isset($_SESSION['ap']['SSID'])?$_SESSION['ap']['SSID']:'')?>"/></td>
   				</tr>
                <tr>
      <td>MAC-адрес</td><td><input  type="text" class="formtext" name="mac" align="left" width="150" value="<?=(isset($_SESSION['ap']['mac'])?$_SESSION['ap']['mac']:'')?>"/></td></tr>
   				<tr>
   		<td>Режим</td>
   		<td><select name="mode" class="formdropdown">
                <option value="802.11b" <?php if (isset($_SESSION['ap']['mode'])) { if ($_SESSION['ap']['mode'] == '802.11b'){ echo 'selected';}}?>>802.11b only</option>
				<option value="802.11g" <?php if (isset($_SESSION['ap']['mode'])) { if ($_SESSION['ap']['mode'] == '802.11g'){ echo 'selected';}} ?>>802.11g only</option>
				<option value="802.11n" <?php if (isset($_SESSION['ap']['mode'])) { if ($_SESSION['ap']['mode'] == '802.11n'){ echo 'selected';}} ?>>802.11n only</option>
				<option value="802.11bgn" <?php if (isset($_SESSION['ap']['mode'])) { if ($_SESSION['ap']['mode'] == '802.11bgn'){ echo 'selected';}} ?>>Mixed 802.11 b/g/n </option>
                </select></td>
   	</tr>
    <tr>
   		<td>Канал</td>
   		<td><select name="channel" class="formdropdownmini">
        <?php
        $values = array('1', '2', '3', '4','5','6','7','8','9','10','11','12','13');
		foreach ( $values as $value ) {
  		$checked = isset($_SESSION['ap']['channel']) && $_SESSION['ap']['channel'] == $value ? 'selected' : '';
  		echo '<option name="channel" value=' . $value . ' ' . $checked . '>', $value;
		}
  		?>  
        </select></td>
   	</tr>
    <tr height="5"></tr>
   	<!--<tr>
   		<td>Ширина канала</td>
   		<td> <select id="width" name="width" class="formdropdownmini">
                <option value="20" <?php if (isset($_SESSION['ap']['width'])) { if ($_SESSION['ap']['width'] == '20'){ echo 'selected';}}?>>20MHz</option>
				<option value="40" <?php if (isset($_SESSION['ap']['width'])) { if ($_SESSION['ap']['width'] == '40'){ echo 'selected';}}?>>40MHz</option> </select></td>
   	</tr>-->
    <tr height="5"></tr>
    
      <tr><td colspan="2" valign="middle" height="30" align="left">
                <hr width="275" size="1" color="#B4C3D" />
                </td></tr>
                <tr height="5"></tr>
	  <tr>
    	<td colspan="2" class="tableheader">Настройки безопасности</td></tr>   
        <tr height="10"></tr>
   	<tr>
   		<td width="180">Режим</td>
  	 	<td width="134"><select name="enc" class="formdropdown">
        	<option value="none" <?php if (isset($_SESSION['ap']['enc'])) { if ($_SESSION['ap']['enc'] == 'none'){ echo 'selected';}}?>>none</option>
        	<option value="wep" <?php if (isset($_SESSION['ap']['enc'])) { if ($_SESSION['ap']['enc'] == 'wep'){ echo 'selected';}}?>>WEP (RC4)</option>
   			<option value="wpa_psk" <?php if (isset($_SESSION['ap']['enc'])) { if ($_SESSION['ap']['enc'] == 'wpa_psk'){ echo 'selected';}}?>>WPA-PSK (TKIP)</option>
            <option value="wpa_802.1x" <?php if (isset($_SESSION['ap']['enc'])) { if ($_SESSION['ap']['enc'] == 'wpa_802.1x'){ echo 'selected';}}?>>WPA-Enterprise (TKIP+802.1x)</option>
			<option value="wpa2_psk" <?php if (isset($_SESSION['ap']['enc'])) { if ($_SESSION['ap']['enc'] == 'wpa2_psk'){ echo 'selected';}}?>>WPA2 (CCMP)</option>
            <option value="wpa2_802.1x" <?php if (isset($_SESSION['ap']['enc'])) { if ($_SESSION['ap']['enc'] == 'wpa2_802.1x'){ echo 'selected';}}?>>WPA2-Enterprise (CCMP+802.1x)</option></td>
   	</tr>
    <?php if (isset($_SESSION['ap']['enc'])) { if ($_SESSION['ap']['enc'] == 'wep' or $_SESSION['ap']['enc'] == 'wpa_psk' or $_SESSION['ap']['enc'] == 'wpa2_psk'){ 
  	echo ' <tr>
   		<td>Ключ</td>
  		<td><input type="password" class="formtext" name="key" value='.(isset($_SESSION["ap"]["key"])?$_SESSION["ap"]["key"]:'').'></td>
       
   	</tr>
   	<tr>
   		<td>Период обновления ключа</td>
   		<td><input type="text" class=" formtextmini" name="upd" size="5" value='.(isset($_SESSION["ap"]["upd"])?$_SESSION["ap"]["upd"]:'').'></td></tr>';}}?>
	<tr>
    <td>
	 Сеть</td>
     <td>
      <input type="radio" name="switcher" value="1" <?php if (isset($_SESSION['ap']['switcher']) && ($_SESSION['ap']['switcher'] == 1)) echo 'checked'; ?>/>Включить<br />
            <input type="radio" name="switcher" value="2" <?php if (isset($_SESSION['ap']['switcher']) && ($_SESSION['ap']['switcher'] == 2)) echo 'checked'; ?>/>Выключить
   	</td>
   </tr>
  
   <tr height="15"></tr>
    <tr>
    <td colspan="2" align="right"><input value='Сохранить' type="submit" name="save_ap"/>
    </td>
    </tr>
    </form>
	<tr>
	 <form name="go" id="go" method="post" action="#tabs-2">
	<td colspan ="2" align="right"><input value='Далее' type="submit"/>
	</form>
	</td>
	</tr>
    </td>
    </table>
    <td width="20"></td>
    <td background="orinoco/images/left_line.gif"></td>
    </tr>
	</td>
</table>
</div>




<div id="tabs-2">
  <table align="left" cellpadding="1" cellspacing="1" style="margin-top:30px; margin-left:40px" width="100%" border="0">
            <tr>
            <td background="orinoco/images/left_line.gif"></td>
            <td>
            <form name="ap2" id="ap2" method="post" action="set/ap2.php">
            <table align="left" style="margin-top:0px; margin-left:10px" border="0">
				<tr>
    				<td colspan="2" align= "center "class="tableheader">Введите настройки точки доступа 2</td>
					</tr>
					</tr>
					<td colspan="2" class="tableheader">Настройки точки доступа</td>
    			</tr>
                <tr height="10"></tr>
                <TR>
							<td width="80%">ip-address</td><td><input type="text" class="formtext" name="ip2" align="left" width="150" value="<?=(isset($_SESSION['ap']['ip2'])?$_SESSION['ap']['ip2']:'')?>"/></td>
						</TR>
                        <tr>
   		<td>Маска</td>
   		<td><input type="text" class="formtext" name="mask2" align="left" size="28px" value="<?=(isset($_SESSION['ap']['mask2'])?$_SESSION['ap']['mask2']:'255.255.255.0')?>" required="required"/></td>
   	</tr>
    			<tr>
    				<td>SSID</td>
   					<td>
                    	<input  type="text" class="formtext" name="ssid2" align="left" size="28px" value="<?=(isset($_SESSION['ap']['SSID2'])?$_SESSION['ap']['SSID2']:'')?>"/></td>
   				</tr>
                <tr>
      <td>MAC-адрес</td><td><input  type="text" class="formtext" name="mac2" align="left" width="150" value="<?=(isset($_SESSION['ap']['mac2'])?$_SESSION['ap']['mac2']:'')?>"/></td></tr>
   				<tr>
   		<td>Режим</td>
   		<td><select name="mode2" class="formdropdown">
                <option value="802.11b" <?php if (isset($_SESSION['ap']['mode2'])) { if ($_SESSION['ap']['mode2'] == '802.11b'){ echo 'selected';}}?>>802.11b only</option>
				<option value="802.11g" <?php if (isset($_SESSION['ap']['mode2'])) { if ($_SESSION['ap']['mode2'] == '802.11g'){ echo 'selected';}} ?>>802.11g only</option>
				<option value="802.11n" <?php if (isset($_SESSION['ap']['mode2'])) { if ($_SESSION['ap']['mode2'] == '802.11n'){ echo 'selected';}} ?>>802.11n only</option>
				<option value="802.11bgn" <?php if (isset($_SESSION['ap']['mode2'])) { if ($_SESSION['ap']['mode2'] == '802.11bgn'){ echo 'selected';}} ?>>Mixed 802.11 b/g/n </option>
                </select></td>
   	</tr>
    <tr>
   		<td>Канал</td>
   		<td><select name="channel2" class="formdropdownmini">
        <?php
        $values = array('1', '2', '3', '4','5','6','7','8','9','10','11','12','13');
		foreach ( $values as $value ) {
  		$checked = isset($_SESSION['ap']['channel2']) && $_SESSION['ap']['channel2'] == $value ? 'selected' : '';
  		echo '<option name="channel2" value=' . $value . ' ' . $checked . '>', $value;
		}
  		?>  
        </select></td>
   	</tr>
    <tr height="5"></tr>
   	<!--<tr>
   		<td>Ширина канала</td>
   		<td> <select id="width" name="width2" class="formdropdownmini">
                <option value="20" <?php if (isset($_SESSION['ap']['width2'])) { if ($_SESSION['ap']['width2'] == '20'){ echo 'selected';}}?>>20MHz</option>
				<option value="40" <?php if (isset($_SESSION['ap']['width2'])) { if ($_SESSION['ap']['width2'] == '40'){ echo 'selected';}}?>>40MHz</option> </select></td>
   	</tr>-->
    <tr height="5"></tr>
    
      <tr><td colspan="2" valign="middle" height="30" align="left">
                <hr width="275" size="1" color="#B4C3D" />
                </td></tr>
                <tr height="5"></tr>
	  <tr>
    	<td colspan="2" class="tableheader">Настройки безопасности</td></tr>
        <tr height="10"></tr>
   	<tr>
   		<td width="180">Режим</td>
  	 	<td width="134"><select name="enc2" class="formdropdown">
        	<option value="none" <?php if (isset($_SESSION['ap']['enc2'])) { if ($_SESSION['ap']['enc2'] == 'none'){ echo 'selected';}}?>>none</option>
        	<option value="wep" <?php if (isset($_SESSION['ap']['enc2'])) { if ($_SESSION['ap']['enc2'] == 'wep'){ echo 'selected';}}?>>WEP (RC4)</option>
   			<option value="wpa_psk" <?php if (isset($_SESSION['ap']['enc2'])) { if ($_SESSION['ap']['enc2'] == 'wpa_psk'){ echo 'selected';}}?>>WPA-PSK (TKIP)</option>
            <option value="wpa_802.1x" <?php if (isset($_SESSION['ap']['enc2'])) { if ($_SESSION['ap']['enc2'] == 'wpa_802.1x'){ echo 'selected';}}?>>WPA-Enterprise (TKIP+802.1x)</option>
			<option value="wpa2_psk" <?php if (isset($_SESSION['ap']['enc2'])) { if ($_SESSION['ap']['enc2'] == 'wpa2_psk'){ echo 'selected';}}?>>WPA2 (CCMP)</option>
            <option value="wpa2_802.1x" <?php if (isset($_SESSION['ap']['enc2'])) { if ($_SESSION['ap']['enc2'] == 'wpa2_802.1x'){ echo 'selected';}}?>>WPA2-Enterprise (CCMP+802.1x)</option></td>
   	</tr>
    <?php if (isset($_SESSION['ap']['enc2'])) { if ($_SESSION['ap']['enc2'] == 'wep' or $_SESSION['ap']['enc2'] == 'wpa_psk' or $_SESSION['ap']['enc2'] == 'wpa2_psk'){ 
  	echo ' <tr>
   		<td>Ключ</td>
  		<td><input type="password" class="formtext" name="key2" value='.(isset($_SESSION["ap"]["key2"])?$_SESSION["ap"]["key2"]:'').'></td>
       
   	</tr>
   	<tr>
   		<td>Период обновления ключа</td>
   		<td><input type="text" class=" formtextmini" name="upd2" size="5" value='.(isset($_SESSION["ap"]["upd2"])?$_SESSION["ap"]["upd2"]:'').'></td></tr>';}}?>
	<tr>
    <td>
	 Сеть</td>
     <td>
      <input type="radio" name="switcher2" value="1" <?php if (isset($_SESSION['ap']['switcher2']) && ($_SESSION['ap']['switcher2'] == 1)) echo 'checked'; ?>/>Включить<br />
            <input type="radio" name="switcher2" value="2" <?php if (isset($_SESSION['ap']['switcher2']) && ($_SESSION['ap']['switcher2'] == 2)) echo 'checked'; ?>/>Выключить
   	</td>
   </tr>
   
   <tr height="15"></tr>
    <tr>
    <td colspan="2" align="right"><input value='Сохранить' type="submit" name="save_ap2"/>
    </td>
    </tr>
    </form>

	<tr>
	 <form name="go2" id="go2" method="post" action="#tabs-3">
	<td colspan ="2" align="right"><input value='Далее' type="submit"/>
	</form>
	</td>
	</tr>
    </td>
    </table>
    <td width="20"></td>
    <td background="orinoco/images/left_line.gif"></td>
    </tr>
	</td>
</table>
</div>


<div id="tabs-3">
  <table align="left" cellpadding="1" cellspacing="1" style="margin-top:30px; margin-left:40px" width="100%" border="0">
            <tr>
            <td background="orinoco/images/left_line.gif"></td>
            <td>
            <form name="ap3" id="ap3" method="post" action="set/ap3.php">
            <table align="left" style="margin-top:0px; margin-left:10px" border="0">
				<tr>
    				<td colspan="2" align= "center "class="tableheader">Введите настройки точки доступа 3</td>
					</tr>
					</tr>
					<td colspan="2" class="tableheader">Настройки точки доступа</td>
    			</tr>
                <tr height="10"></tr>
                <TR>
							<td width="80%">ip-address</td><td><input type="text" class="formtext" name="ip3" align="left" width="150" value="<?=(isset($_SESSION['ap']['ip3'])?$_SESSION['ap']['ip3']:'')?>"/></td>
						</TR>
                        <tr>
   		<td>Маска</td>
   		<td><input type="text" class="formtext" name="mask3" align="left" size="28px" value="<?=(isset($_SESSION['ap']['mask3'])?$_SESSION['ap']['mask3']:'255.255.255.0')?>" required="required"/></td>
   	</tr>
    			<tr>
    				<td>SSID</td>
   					<td>
                    	<input  type="text" class="formtext" name="ssid3" align="left" size="28px" value="<?=(isset($_SESSION['ap']['SSID3'])?$_SESSION['ap']['SSID3']:'')?>"/></td>
   				</tr>
                <tr>
      <td>MAC-адрес</td><td><input  type="text" class="formtext" name="mac3" align="left" width="150" value="<?=(isset($_SESSION['ap']['mac3'])?$_SESSION['ap']['mac3']:'')?>"/></td></tr>
   				<tr>
   		<td>Режим</td>
   		<td><select name="mode3" class="formdropdown">
                <option value="802.11b" <?php if (isset($_SESSION['ap']['mode3'])) { if ($_SESSION['ap']['mode3'] == '802.11b'){ echo 'selected';}}?>>802.11b only</option>
				<option value="802.11g" <?php if (isset($_SESSION['ap']['mode3'])) { if ($_SESSION['ap']['mode3'] == '802.11g'){ echo 'selected';}} ?>>802.11g only</option>
				<option value="802.11n" <?php if (isset($_SESSION['ap']['mode3'])) { if ($_SESSION['ap']['mode3'] == '802.11n'){ echo 'selected';}} ?>>802.11n only</option>
				<option value="802.11bgn" <?php if (isset($_SESSION['ap']['mode3'])) { if ($_SESSION['ap']['mode3'] == '802.11bgn'){ echo 'selected';}} ?>>Mixed 802.11 b/g/n </option>
                </select></td>
   	</tr>
    <tr>
   		<td>Канал</td>
   		<td><select name="channel3" class="formdropdownmini">
        <?php
        $values = array('1', '2', '3', '4','5','6','7','8','9','10','11','12','13');
		foreach ( $values as $value ) {
  		$checked = isset($_SESSION['ap']['channel3']) && $_SESSION['ap']['channel3'] == $value ? 'selected' : '';
  		echo '<option name="channel2" value=' . $value . ' ' . $checked . '>', $value;
		}
  		?>  
        </select></td>
   	</tr>
    <tr height="5"></tr>
   	<!--<tr>
   		<td>Ширина канала</td>
   		<td> <select id="width" name="width2" class="formdropdownmini">
                <option value="20" <?php if (isset($_SESSION['ap']['width2'])) { if ($_SESSION['ap']['width2'] == '20'){ echo 'selected';}}?>>20MHz</option>
				<option value="40" <?php if (isset($_SESSION['ap']['width2'])) { if ($_SESSION['ap']['width2'] == '40'){ echo 'selected';}}?>>40MHz</option> </select></td>
   	</tr>-->
    <tr height="5"></tr>
    
      <tr><td colspan="2" valign="middle" height="30" align="left">
                <hr width="275" size="1" color="#B4C3D" />
                </td></tr>
                <tr height="5"></tr>
	  <tr>
    	<td colspan="2" class="tableheader">Настройки безопасности</td></tr>
        <tr height="10"></tr>
   	<tr>
   		<td width="180">Режим</td>
  	 	<td width="134"><select name="enc3" class="formdropdown">
        	<option value="none" <?php if (isset($_SESSION['ap']['enc3'])) { if ($_SESSION['ap']['enc3'] == 'none'){ echo 'selected';}}?>>none</option>
        	<option value="wep" <?php if (isset($_SESSION['ap']['enc3'])) { if ($_SESSION['ap']['enc3'] == 'wep'){ echo 'selected';}}?>>WEP (RC4)</option>
   			<option value="wpa_psk" <?php if (isset($_SESSION['ap']['enc3'])) { if ($_SESSION['ap']['enc3'] == 'wpa_psk'){ echo 'selected';}}?>>WPA-PSK (TKIP)</option>
            <option value="wpa_802.1x" <?php if (isset($_SESSION['ap']['enc3'])) { if ($_SESSION['ap']['enc3'] == 'wpa_802.1x'){ echo 'selected';}}?>>WPA-Enterprise (TKIP+802.1x)</option>
			<option value="wpa2_psk" <?php if (isset($_SESSION['ap']['enc3'])) { if ($_SESSION['ap']['enc3'] == 'wpa2_psk'){ echo 'selected';}}?>>WPA2 (CCMP)</option>
            <option value="wpa2_802.1x" <?php if (isset($_SESSION['ap']['enc3'])) { if ($_SESSION['ap']['enc3'] == 'wpa2_802.1x'){ echo 'selected';}}?>>WPA2-Enterprise (CCMP+802.1x)</option></td>
   	</tr>
    <?php if (isset($_SESSION['ap']['enc3'])) { if ($_SESSION['ap']['enc3'] == 'wep' or $_SESSION['ap']['enc3'] == 'wpa_psk' or $_SESSION['ap']['enc2'] == 'wpa2_psk'){ 
  	echo ' <tr>
   		<td>Ключ</td>
  		<td><input type="password" class="formtext" name="key2" value='.(isset($_SESSION["ap"]["key2"])?$_SESSION["ap"]["key2"]:'').'></td>
       
   	</tr>
   	<tr>
   		<td>Период обновления ключа</td>
   		<td><input type="text" class=" formtextmini" name="upd2" size="5" value='.(isset($_SESSION["ap"]["upd2"])?$_SESSION["ap"]["upd2"]:'').'></td></tr>';}}?>
	<tr>
    <td>
	 Сеть</td>
     <td>
      <input type="radio" name="switcher3" value="1" <?php if (isset($_SESSION['ap']['switcher3']) && ($_SESSION['ap']['switcher3'] == 1)) echo 'checked'; ?>/>Включить<br />
            <input type="radio" name="switcher3" value="2" <?php if (isset($_SESSION['ap']['switcher3']) && ($_SESSION['ap']['switcher3'] == 2)) echo 'checked'; ?>/>Выключить
   	</td>
   </tr>
   <tr height="5"></tr>
    
	<tr><td colspan="2" valign="middle" height="30" align="left">
			  <hr width="275" size="1" color="#B4C3D" />
			  </td></tr>
			  <tr height="5"></tr>
	<tr>
   <tr>
    	<td colspan="2" class="tableheader">Радиус</td></tr>
		<tr height="10"></tr>
		<tr>
			<td>Radius IP Address</td><td><input  type="text" class="formtext" name="radius_ip" align="left" width="150" value="<?=(isset($_SESSION['radius']['ip3'])?$_SESSION['radius']['ip3']:'')?>"/></td></tr>
		<tr>
		<tr>
			<td>Radius Key</td><td><input  type="text" class="formtext" name="radius_secret" align="left" width="150" value="<?=(isset($_SESSION['radius']['secret3'])?$_SESSION['radius']['secret3']:'')?>"/></td></tr>
		<tr>
		<tr>
			<td>Key</td><td><input  type="text" class="formtext" name="radius_secret" align="left" width="150" value="<?=(isset($_SESSION['ap']['key3'])?$_SESSION['ap']['key3']:'')?>"/></td></tr>
		<tr>
		<tr><td>Radius port</td><td><input  type="text" class="formtext" name="radius_port" align="left" width="150" value="<?=(isset($_SESSION['radius']['port'])?$_SESSION['radius']['port']:'')?>"/></td></tr>
		
		

   		
   	</tr>
   <tr height="15"></tr>
    <tr>
    <td colspan="2" align="right"><input value='Сохранить' type="submit" name="save_ap3"/>
    </td>
    </tr>
    </form>

	<tr>
	 <form name="go3" id="go3" method="post" action="#tabs-1">
	<td colspan ="2" align="right"><input value='Назад' type="submit"/>
	</form>
	</td>
	</tr>
    </td>
    </table>
    <td width="20"></td>
    <td background="orinoco/images/left_line.gif"></td>
    </tr>
	</td>
</table>
</div>




</table>
    
</div> 
 </div>
</body>

</html>