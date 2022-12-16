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
			include ("menu_clients.html");
			?>
    </div>
	<pre>
	<?php
	echo file_get_contents('config/clients.conf');
	?>
    </pre>
 	<p>
  		<label for="client">client {</label><input class="radius" id="client" name="client" type="text" size="13" value="<?=(isset($_SESSION['radius']['client'])?$_SESSION['radius']['client']:'')?>"/>
        </p>
        <p>
        <table id="rad_client" border="0">
        <tr>
        <td width="110px">
        secret
        </td>
        <td>
        <input class="radius" id="shared-secret" name="shared-secret" type="text" size="15" value="<?=(isset($_SESSION['radius']['shared-secret'])?$_SESSION['radius']['shared-secret']:'')?>" />
        </td>
        </tr>
        <tr>
        <td>
        shortname
        </td>
        <td>
        <input class="radius" id="shortname" name="shortname" type="text" size="15" value="<?=(isset($_SESSION['radius']['shortname'])?$_SESSION['radius']['shortname']:'mynetwork')?>" />
        </td>
        </tr>
        
        <tr>
        <td>
        nastype
        </td>
        <td>
        <input class="radius" id="nastype" name="nastype" type="text" size="15" value="<?=(isset($_SESSION['radius']['nastype'])?$_SESSION['radius']['nastype']:'other')?>" />
        </td>
        </tr>
        </table>
        <span>&nbsp;}</span>
        
</body>
</html>