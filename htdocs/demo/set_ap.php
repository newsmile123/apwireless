<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
<LINK rel="stylesheet" href="orinoco/css/global.css">
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
		<td width="11%" height="570" align="center" valign="top">
        	<table style="margin-top:5%" border="0">
            	<tr><td><a href="main.php" /><img src="images/Status.png"></a></td></tr>
            	<tr><td><a href="set_ap.php" /><img src="images/AP.png"></a></td></tr>
                <tr><td><a href="set_client.php" /><img src="images/client.png"></a></td></tr>
            </table>
        </td>
        <td width="30%" bgcolor="white" valign="top"> 
			<table align="left" cellpadding="1" style="margin-top:30px; margin-left:40px" width="100%" border="0">
            <tr>
            <td background="orinoco/images/left_line.gif"></td>
            <td>
            <form name="AP" method="post" action="set/AP_settings.php">
            <table align="left" style="margin-top:0px; margin-left:10px" border="0">
				<tr>
    				<td colspan="2" class="tableheader">Настройки точки доступа</td>
    			</tr>
                <tr height="10"></tr>
    			<tr>
    				<td width="80%">SSID</td>
   					<td>
                    	<input type="text" class="formtext" name="SSID" align="left" size="28px" value="<?=(isset($_SESSION['demo']['ap']['SSID'])?$_SESSION['demo']['ap']['SSID']:'')?>"/></td>
   				</tr>
                <tr height="5"></tr>
   				<tr>
   		<td>Режим</td>
   		<td><select name="mode" class="formdropdown">
                <option value="802.11b" <?php if (isset($_SESSION['demo']['ap']['mode'])) { if ($_SESSION['demo']['ap']['mode'] == '802.11b'){ echo 'selected';}}?>>802.11b only</option>
				<option value="802.11g" <?php if (isset($_SESSION['demo']['ap']['mode'])) { if ($_SESSION['demo']['ap']['mode'] == '802.11g'){ echo 'selected';}} ?>>802.11g only</option>
				<option value="802.11n" <?php if (isset($_SESSION['demo']['ap']['mode'])) { if ($_SESSION['demo']['ap']['mode'] == '802.11n'){ echo 'selected';}} ?>>802.11n only</option>
				<option value="802.11bgn" <?php if (isset($_SESSION['demo']['ap']['mode'])) { if ($_SESSION['demo']['ap']['mode'] == '802.11bgn'){ echo 'selected';}} ?>>Mixed 802.11 b/g/n </option>
                </select></td>
   	</tr>
     <tr height="5"></tr>
    <tr>
   		<td>Канал</td>
   		<td><select name="channel" class="formdropdownmini">
        <?php
        $values = array('1', '2', '3', '4','5','6','7','8','9','10','11','12','13');
		foreach ( $values as $value ) {
  		$checked = isset($_SESSION['demo']['ap']['channel']) && $_SESSION['demo']['ap']['channel'] == $value ? 'selected' : '';
  		echo '<option name="channel" value=' . $value . ' ' . $checked . '>', $value;
		}
  		?>  
        </select></td>
   	</tr>
    <tr height="5"></tr>
   	<tr>
   		<td>Ширина канала</td>
   		<td> <select id="width" name="width" class="formdropdownmini">
                <option value="20" <?php if (isset($_SESSION['demo']['ap']['width'])) { if ($_SESSION['demo']['ap']['width'] == '20'){ echo 'selected';}}?>>20MHz</option>
				<option value="40" <?php if (isset($_SESSION['demo']['ap']['width'])) { if ($_SESSION['demo']['ap']['width'] == '40'){ echo 'selected';}}?>>40MHz</option> </select></td>
   	</tr>
    <tr height="5"></tr>
    <tr>
      <td>MAC-адрес</td><td><input type="text" class="formtext" name="MAC_AP" align="left" width="150" value="<?=(isset($_SESSION['demo']['ap']['mac'])?$_SESSION['demo']['ap']['mac']:'')?>"/></td></tr>
      <tr><td colspan="2" valign="middle" height="30" align="left">
                <hr width="275" size="1" color="#B4C3D" />
                </td></tr>
	  <tr>
    	<td colspan="2" class="tableheader">Настройки безопасности</td></tr>
        <tr height="10"></tr>
   	<tr>
   		<td width="180">Режим</td>
  	 	<td width="134"><select name="enc" class="formdropdownmini">
        	<option value="empty" <?php if (isset($_SESSION['demo']['ap']['enc'])) { if ($_SESSION['demo']['ap']['enc'] == 'empty'){ echo 'selected';}}?>></option>
        	<option value="WEP" <?php if (isset($_SESSION['demo']['ap']['enc'])) { if ($_SESSION['demo']['ap']['enc'] == 'WEP'){ echo 'selected';}}?>>WEP</option>
   			<option value="WPA" <?php if (isset($_SESSION['demo']['ap']['enc'])) { if ($_SESSION['demo']['ap']['enc'] == 'WPA'){ echo 'selected';}}?>>WPA</option>
			<option value="WPA2" <?php if (isset($_SESSION['demo']['ap']['enc'])) { if ($_SESSION['demo']['ap']['enc'] == 'WPA2'){ echo 'selected';}}?>>WPA2</option></select></td>
   	</tr>
    <tr height="5"></tr>
  	 <tr>
   		<td>Ключ</td>
  		<td><input type="password" class="formtext" name="Key_AP" value="<?=(isset($_SESSION['demo']['ap']['key'])?$_SESSION['demo']['ap']['key']:'')?>"/></td>  
   	</tr>
    <tr height="5"></tr>
   	<tr>
   		<td>Период обновления ключа</td>
   		<td><input type="text" class=" formtextmini" name="upd" size="5" value="<?=(isset($_SESSION['demo']['ap']['upd'])?$_SESSION['demo']['ap']['upd']:'')?>"/></td></tr>
        <tr height="5"></tr>
	<tr>
    <td>
	 Сеть</td>
     <td>
      <input type="radio" name="switcher" id="switcher" value="1" <?php if (isset($_SESSION['demo']['ap']['switcher']) && ($_SESSION['demo']['ap']['switcher'] == 1)) echo 'checked'; ?>/>Включить<br />
            <input type="radio" name="switcher" id="switcher" value="2" <?php if (isset($_SESSION['demo']['ap']['switcher']) && ($_SESSION['demo']['ap']['switcher'] == 2)) echo 'checked'; ?>/>Выключить
   	</td>
   </tr>
   <tr height="15"></tr>
    <tr>
    <td colspan="2" align="right"><input value='Сохранить' type="submit" name="saveAP"/>
    </td>
    </tr>
    </form>
    </td>
    </table>
    <td width="20"></td>
    <td background="orinoco/images/left_line.gif"></td>
    </tr>
</table>
</td>
<td width="52%" bgcolor="white"></td>
</tr>
</table>
</body>
</html>