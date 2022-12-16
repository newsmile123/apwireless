<?php
session_start();
if (isset($_POST['run']) && ($_POST['run'] == "radiusd")){
	if (isset($_SESSION['radius']['ip']) && isset($_SESSION['ap']['ip']) && isset($_SESSION['radius']['secret']) && isset($_SESSION['ap']['key'])){
		if (($_SESSION['radius']['ip'] == $_SESSION['ap']['ip']) && ($_SESSION['ap']['key'] == $_SESSION['radius']['secret'])){
		
		}
		else{
			$_SESSION['error']['1'] = "1";
		}
}
	$_SESSION['run'] = "1";
}
header("Location: ../../set_client.php#tabs-2");
?>