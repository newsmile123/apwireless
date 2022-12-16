<?php 
session_start();
error_reporting(0);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/DTD/loose.dtd">
<html>
<head>
<title>[NanoStation Loco M2] - Wireless</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Pragma" content="no-cache">

<body>
   <div>
      <form id="wirelessB" ACTION="ap3.php" method="post">
      <div>
            <div>ip address</div>
            <input type="text"  value="<?=(isset($_SESSION['ap']['ip3'])?$_SESSION['ap']['ip3']:'')?>">
        </div>
        <div>
            <div>маска</div>
            <input type="text"  value="<?=(isset($_SESSION['ap']['mask3'])?$_SESSION['ap']['mask3']:'')?>">
        </div>
        <div>
            <div>mac address</div>
            <input type="text"  value="<?=(isset($_SESSION['ap']['mac3'])?$_SESSION['ap']['mac3']:'')?>">
        </div>
        <div>
            <div>ssid</div>
            <input type="text" value="<?=(isset($_SESSION['ap']['SSID3'])?$_SESSION['ap']['SSID3']:'')?>">
        </div>
        <div>
        <input type="submit" name="save_emul_elastix" value="Change" />
        </div>
      </form>
   </div>
</body>
</html>

