<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
<link rel="stylesheet" href="../orinoco/css/reg.css" type="text/css">
<link rel="stylesheet" href="../orinoco/css/normalize.css" type="text/css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css">


</style>
</head>
<body  style="margin:0px">
<table width="100%"  background="../images/brushed.png">
<tr>
	<td width="223px"></td>
	<td></td>
    <td width="223px"></td>
</tr>
<tr>
<td width="200px"></td>
<td>
<table width="100%" height="100%"  background="../images/brushed.png">
	<tr>
		<td height="90" colspan="3" background="../images/logo.png"></td>
	</tr>
    <tr height="30px">
    </tr>
	<tr>
		<td width="18%" height="590" align="left" valign="top" style="border-right:solid rgba(146,144,144,0.79)">
        	<table style="margin-top:5%" border="0">
            <div id="menu12">
  <?php
include("menu.php");
?>
</div>
            </table>
        </td>
        <td width="64%" bgcolor="white" valign="top"><p><a  href="../files4lab/protocol4.docx" style="line-height:25px;">Скачать протокол к лабораторной работе</a></p>
    <p><a  href="../files4lab" style="line-height:25px;">Скачать дополнительные материалы</a></p>
          <table align="left" cellpadding="1" cellspacing="1" style="margin-top:30px; margin-left:40px" width="100%" border="0">
         </table>        </td>
   <td width="18%" style="border-left:solid rgba(146,144,144,0.79)" valign="top" align="right">
   <table border="0">
   <?php include("menu-theory.php");?>
            </table>
   </td>
    </tr>
    
</table>
</td>
<td width="180px" background="../../images/brushed.png"></td>
</tr>
</table>
</body>
</html>