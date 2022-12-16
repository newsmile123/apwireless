<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css">
td {
    font-family: Times New Roman;
    font-size: 10px;
    color: rgb(60, 85, 128);
}
input, select, option {
	font-family: Arial;
	font-size: 10px;
	margin-left: 0px;
	border-width: 1px;
	border-style: inset solid solid inset;
}
.leftline {
	border-left-color:rgba(6,230,241,1.00);
	 border-left-style:dashed;
	 border-left-width:medium;
}
.rightline {
	border-right-color:rgba(6,230,241,1.00);
	 border-right-style:dashed;
	 border-right-width:medium;
}
</style>
</head>
<body style="margin:0px">

<table cellpadding="5" cellspacing="0" width="100%" height="100%" style="border-collapse:collapse;" border="1">
	<tr>
	</tr>
    <tr>
		<td valign="top">
			<table border="1" cellpadding="3" style="border-collapse:collapse;" width="100%">
                <tbody>
    				<tr>
						<td align="center" valign="top">
							<table border="1" cellpadding="3" style="border-collapse:collapse;">
  								<tbody>
                                	<tr>
                                    	<td width="270" align="center"><img src="img/client.png" width="47" height="43" alt=""/></td>
                                        <td width="1"></td>
                                        <td width="130"></td>
                                        <td width="1"></td>
                                        <td width="200" align="center"><img src="img/ap.png" width="34" height="43" alt=""/></td>
                                        <td width="1"></td>
                                        <td width="130"></td>
                                        <td width="1"></td>
                                        <td width="270" align="center"><img src="img/server.png" width="30" height="43" alt=""/></td>
                                    </tr>
        							<tr>
			  							<td>
                                        <table border="1" cellpadding="5" cellspacing="0" width="100%" height="100%" style="border-collapse:collapse;">
                                        	<tbody style="font-size:10px; text-align:center">
                                            <tr>
                                            	<td>MAC Header</td>
                                                <td>Protocol Version</td>
                                                <td>Packet Type</td>
                                                <td>Packet Body Length</td>
                                                <td>Packet Body</td>
                                            </tr>
                                            </tbody>
                                            </table>
		  							    </td>
      									<td class="leftline"></td>
      									<td align="center">EAPoL Start
                                        <img src="img/str.jpg" width="130" height="9" alt=""/>
                   					  <td class="rightline"></td>
                                        <td></td>
                                        <td class="leftline"></td>
                                        <td>&nbsp;</td>
                                        <td class="rightline"></td>
                                        <td></td>
                                   <tr>
                                        <td></td>
      									<td class="leftline"></td>
      									<td align="center">EAP Request, Identity
                                        <img src="img/l.jpg" width="130" height="9" alt=""/></td>
                       					<td class="rightline"></td>
                                        <td>
                                        <table border="1" cellpadding="5" cellspacing="0" width="100%" height="100%" style="border-collapse:collapse;">
                                        	<tbody style="font-size:10px; text-align:center">
                                            <tr>
                                            	<td>Code</td>
                                                <td>Id</td>
                                                <td>Length</td>
                                                <td>Type</td>
                                                <td>Type Data</td>
                                            </tr>
                                            </tbody>
                                            </table>
                                        </td>
                                        <td class="leftline"></td>
                                        <td></td>
                                        <td class="rightline"></td>
                                        <td></td>
   								  </tr>
                                    <tr>
                                        <td align="center">
                                        <table border="1" cellpadding="5" cellspacing="0" width="200" height="100%" style="border-collapse:collapse;">
                                        	<tbody style="font-size:10px; text-align:center">
                                            <tr>
                                            	<td>Code</td>
                                                <td>Id</td>
                                                <td>Length</td>
                                                <td>Type</td>
                                                <td>Type Data</td>
                                            </tr>
                                            </tbody>
                                            </table>
                                        </td>
      									<td class="leftline"></td>
      									<td align="center">EAP Response, Identity
                                        <img src="img/str.jpg" width="130" height="9" alt=""/></td>
                       					<td class="rightline"></td>
                                        <td>
                                        <table border="1" cellpadding="5" cellspacing="0" width="200" height="100%" style="border-collapse:collapse;">
                                        	<tbody style="font-size:10px; text-align:center">
                                            <tr>
                                            	<td>Code</td>
                                                <td>Id</td>
                                                <td>Length</td>
                                                <td>Data</td>
                                                <td>Attributes</td>
                                            </tr>
                                            </tbody>
                                            </table>
                                        </td>
                                        <td class="leftline"></td>
                                        <td align="center">RADIUS Request
                                        <img src="img/str.jpg" width="130" height="9" alt=""/></td>
                                        <td class="rightline"></td>
                                        <td></td>
                                      </tr>
                                      <tr height="50">
                                        <td></td>
                                        <td class="leftline"></td>
                                        <td colspan="5" align="center">Установлено защищенное TLS/SSL соединение</td>
                                        <td class="rightline"></td>
      									<td></td>
                                      </tr>
                                       <tr>
                                        <td></td>
      									<td class="leftline"></td>
      									<td></td>
                       					<td class="rightline"></td>
                                        <td></td>
                                        <td class="leftline"></td>
                                        <td></td>
                                        <td class="rightline"></td>
                                        <td></td>
                                      </tr>
                                        <tr>
                                        <td></td>
      									<td class="leftline"></td>
      									<td></td>
                       					<td class="rightline"></td>
                                        <td></td>
                                        <td class="leftline"></td>
                                        <td align="center">RADIUS Access Accept
                                        <img src="img/l.jpg" width="130" height="9" alt=""/></td>
                                        <td class="rightline"></td>
                                        <td align="center">
                                        <table border="1" cellpadding="5" cellspacing="0" width="200" height="100%" style="border-collapse:collapse;">
                                        	<tbody style="font-size:10px; text-align:center">
                                            <tr>
                                            	<td>Code</td>
                                                <td>Id</td>
                                                <td>Length</td>
                                                <td>Data</td>
                                                <td>Attributes</td>
                                            </tr>
                                            </tbody>
                                            </table>
                                        </td>
                                      </tr>
                                       <tr>
                                        <td></td>
      									<td class="leftline"></td>
      									<td align="center">EAP Success
                                        <img src="img/l.jpg" width="130" height="9" alt=""/></td>
                       					<td class="rightline"></td>
                                        <td><table border="1" cellpadding="5" cellspacing="0" width="100%" height="100%" style="border-collapse:collapse;">
                                          <tbody style="font-size:10px; text-align:center">
                                            <tr>
                                              <td>Code</td>
                                              <td>Id</td>
                                              <td>Length</td>
                                              <td>Type</td>
                                              <td>Type Data</td>
                                            </tr>
                                          </tbody>
                                        </table></td>
                                        <td class="leftline"></td>
                                        <td></td>
                                        <td class="rightline"></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td></td>
      									<td class="leftline"></td>
      									<td align="center">ANonce
                                        <img src="img/l.jpg" width="130" height="9" alt=""/></td>
                       					<td class="rightline"></td>
                                        <td></td>
                                        <td class="leftline"></td>
                                        <td></td>
                                        <td class="rightline"></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td></td>
      									<td class="leftline"></td>
      									<td align="center">SNonce + MIC
                                        <img src="img/str.jpg" width="130" height="9" alt=""/></td>
                       					<td class="rightline"></td>
                                        <td></td>
                                        <td class="leftline"></td>
                                        <td></td>
                                        <td class="rightline"></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td></td>
      									<td class="leftline"></td>
      									<td align="center">ANonce + GTK + MIC
                                        <img src="img/l.jpg" width="130" height="9" alt=""/></td>
                       					<td class="rightline"></td>
                                        <td></td>
                                        <td class="leftline"></td>
                                        <td></td>
                                        <td class="rightline"></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td></td>
      									<td class="leftline"></td>
      									<td align="center">MIC
                                        <img src="img/str.jpg" width="130" height="9" alt=""/></td>
                       					<td class="rightline"></td>
                                        <td></td>
                                        <td class="leftline"></td>
                                        <td></td>
                                        <td class="rightline"></td>
                                        <td></td>
                                      </tr>
  </table>
  
</body>
</html>