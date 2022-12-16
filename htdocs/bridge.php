<?php
session_start();
error_reporting(0);
$_SESSION['bridge_ip']=$_POST['bridge'];
if (isset($_POST['bridge']) && ($_SESSION['wds_mac1']==$_SESSION['ap']['mac2'] || $_SESSION['wds_mac2']==$_SESSION['ap']['mac2'] || $_SESSION['wds_mac3']==$_SESSION['ap']['mac2'])&& $_SESSION['wds2_mac']==$_SESSION['ap']['mac'] && $_SESSION['ap']['switcher']== '1' &&  $_SESSION['ap']['switcher2']== '1'  && ( $_POST['bridge'] == $_SESSION['ap']['ip'] || $_POST['bridge']==$_SESSION['ap']['ip2'] || $_POST['bridge']==$_SESSION['ClientIP'] || $_POST['bridge']==$_SESSION['radius']['ip']) && ($_SESSION['success']=='1' || $_SESSION['success2']=='1' )){
	
	$_SESSION['bridge_not'] = "0";	
	$_SESSION['bridge_ok'] = "1";
	
}

else {
$_SESSION['bridge_ok'] = "0";	
$_SESSION['bridge_not'] = "1";	


}

if( $_POST['bridge'] == $_SESSION['ap']['ip']) {
	$_SESSION['bridge_ip_ap1'] = "1";	
	
}

header("Location: /set_client.php");

?>