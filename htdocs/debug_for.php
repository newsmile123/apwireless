<?php 
session_start();
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>

<body>
<p> Условие для работы Моста:</p>
<br>
<?php $_SESSION['bridge_ip']=$_POST['bridge'];
echo  $_SESSION['bridge_ip'];

echo "Если:";
  
 
echo "то:";	

	echo "$_SESSION['bridge_ok'] = 1 " ;
	


Echo "иначе" ;
echo"$_SESSION['bridge_ok'] = 0 ";	
echo"$_SESSION['bridge_not'] = 1";	

?> 
</body>
</html>
