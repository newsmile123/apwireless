<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
<head>
<title>Эмулятор точки доступа</title>
<link rel="stylesheet" href="orinoco/css/_styles.css" type="text/css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css">

</style>
</head>
<body  style="margin:0px" background="orinoco/images/bg.gif">
<p>Здравствуйте, вы успешно авторизованы в программе "Эмулятор беспроводной точки доступа". Для продолжения работы укажите 
количество точек доступа</p>
 <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
	   <input type="text" name="c">
	   
<input type="submit" value="Проверить">
</form>


      <?php
	  if (isset($_POST['c']))
	  { 
  
  Switch($_POST['c']){
	  Case 1:
  echo'<form name="ap1" method="post" action = "new1.php">';
   echo'<input type="text" name="ip">';
   echo '<input value="Сохранить" type="submit" name="save_ap"/>'; 
		  echo '</form>';
	  break;
	  
Case 2:
		    echo'<form name="ap2" method="post" action = "new1.php">';
   echo'<input type="text" name="ip2">';
   echo '<input value="Сохранить" type="submit" name="save_ap2"/>'; 
		  echo '</form>';
		  break;
		  default: 
		  echo 'Введите номер точки доступа от 1 до 10';
	  }
	  
	  }
	  /*}
	  else
	  {
		  echo 'dsad';}
	 }*/
	  //$_SESSION['ap1']['SSID'] = $_POST ['ap1']['SSID'];
	  
	  
	  
	//  if (isset($_POST['ap1']['SSID']))
		  
		//  {
			 // echo $_POST['ap1']['SSID']; 
			 // }
	  
	  //$_SESSION['apname'] = 'ap'.$_GET['c'];
	  
	  //echo   $_SESSION['apname'];
/*
       //$s=5;
      // while($s!=5) { 
	   //echo ' <form method="post" action="set/ap.php">';
	  // echo'<input type="text" name="c">';
	   //echo'<input type="text" name="N">';
if (isset($_GET['c'])) {
	
	   switch($_GET['c']){
 
 case  0:
 break ;
 
 case 1:
   echo'Введите ip';

  // echo '<form name="ap" id="ap" method="post" action="set/ap.php">';
   echo '<input type="text" class="formtext" name="ip"  value="'.$_SESSION['ap']['ip'].'"> ';
   //echo'<input type="text" name="'.$_SESSION['ap']['SSID'].'" >';//$_SESSION['ap']['SSID']
   echo'<input value="Сохранить" type="submit" name="save_ap">';
   echo'</form>'; 

  
  break;
 case 2: 
 echo '1212';
 break;
 default: echo'sor';
} 
}
echo $_SESSION['ap']['SSID'];

 // $k=$_SESSION['ap']['SSID'];
    
	
	//echo $_SESSION['ap']['SSID'] ;
	

//$s++; 
//break ;
// }
       */ 
        
      ?>
    <input type="text" class="formtext" name="ip" align="left" size="28px" value="<?=(isset($_SESSION['ap1']['ip'])?$_SESSION['ap1']['ip']:'')?>"/>
	   <input type="text" class="formtext" name="ip" align="left" size="28px" value="<?=(isset($_SESSION['ap2']['ip2'])?$_SESSION['ap2']['ip2']:'')?>"/>
	</body>