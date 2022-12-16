<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
<link rel="stylesheet" href="css/radius.css" type="text/css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css">
td{
	font-size:12px;
}
</style>
<script>
</script>
</head>
<body style="margin:0px">
    <div id="rad_header">
			<?php
			include ("menu_users.html");
			?>
    </div>
	<pre>
	<?php
	echo file_get_contents('config/users.conf');
	?>
    </pre>
 	<p>
  		<label for="user">user {</label><input class="radius" id="user" name="user" type="text" size="13" value="<?=(isset($_SESSION['radius']['user'])?$_SESSION['radius']['user']:'')?>"/>
        </p>
        <p>
        <table id="rad_client" border="0">
        <tr>
        <td width="110px">
        Auth-Type
        </td>
        <td>
        <input class="radius" id="auth" name="auth" type="text" size="15" value="<?=(isset($_SESSION['radius']['auth'])?$_SESSION['radius']['auth']:'System')?>" />
        </td>
        </tr>
        <tr>
        <td>
        User-Password
        </td>
        <td>
        <input class="radius" id="pass" name="pass" type="text" size="15" value="<?=(isset($_SESSION['radius']['pass'])?$_SESSION['radius']['pass']:'')?>" />
        </td>
        </tr>
        <tr>
        <td>
        Service-Type
        </td>
        <td>
        <input class="radius" id="service" name="service" type="text" size="15" value="<?=(isset($_SESSION['radius']['service'])?$_SESSION['radius']['service']:'Framed-User')?>" />
        </td>
        </tr>
        <tr>
        <td>
        NAS-IP-Address
        </td>
        <td>
        <input class="radius" id="ip" name="ip" type="text" size="15" value="<?=(isset($_SESSION['radius']['nas-ip'])?$_SESSION['radius']['nas-ip']:'')?>" />
        </td>
        </tr>
        <tr>
        <td>
        Priority
        </td>
        <td>
        <input class="radius" id="priority" name="priority" type="text" size="15" value="<?=(isset($_SESSION['radius']['priority'])?$_SESSION['radius']['priority']:'15')?>" />
        </td>
        </tr>
        </table>
        <span>&nbsp;}</span>
        
        
</body>
</html>