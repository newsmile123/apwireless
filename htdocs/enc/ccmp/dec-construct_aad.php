<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Additional Autjentication Data</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="css/aad.css" rel="stylesheet"></link>
<SCRIPT language="javascript" src="../../orinoco/scripts/jquery-2.1.1.min.js"></SCRIPT>
<SCRIPT language="javascript" src="js/transmitter-dec.js"></SCRIPT>
</head>
<body>
<div id="main">
  <div class="description" align="center">
    <h3>Additional Authentication Data</h3><p align="center">AAD (Additional Authentication Data), - дополнительные аутентификационные данные, которые строятся из частей заголовка MAC и необходимы для защиты целостности этих частей.</p>
    </div>
  <div id="packet">
    <div id="before">
    	<table border="2" cellpadding="5" style="border-collapse:collapse;" width="100%">
            					<td align="center" width="100%" height="240px"><p>MAC Header</p>
                                <table border="2" cellpadding="3" width="100%" style="border-collapse:collapse;">
  															<tr><td align="center"><div>Frame Control</div></td></tr>
                        									<tr><td align="center"><div>Duration/ID</div></td></tr>
                        									<tr><td align="center"><div>Address 1</div></td></tr>
                        									<tr><td align="center"><div>Address 2</div></td></tr>
                        									<tr><td align="center"><div>Address 3</div></td></tr>
                        									<tr><td align="center"><div>Sequence Control</div></td></tr>
                                                            <tr><td align="center"><div>Address 4</div></td></tr>
                        									<tr><td align="center"><div>QoS Control</div></td></tr>
                        									<tr><td align="center"><div>HT Control</div></td></tr>
                                               			</table></td></tr></table>
    </div>
    </div>
  <div id="aad">
    <div class="description" align="center"><p align="center">Слева перед вами представлен заголовок MAC уровня. Укажите из каких полей заголовка состоят дополнительные аутентификационные данные</p>
    </div>
    	<table width="100%" cellpadding="2" style="border-collapse:collapse;" border="2" align="center" >
                                                    <tr>
                                                    <td width="90px"><input id="fc" name="fc" size="12" type="text" value="<?=(isset($_SESSION['aad']['dec']['fc'])?$_SESSION['aad']['dec']['fc']:'')?>"></input></td>
                                                    <td width="90px"><input id="a1" name="a1" size="12" type="text" value="<?=(isset($_SESSION['aad']['dec']['a1'])?$_SESSION['aad']['dec']['a1']:'')?>"></input></td>
                                                    <td width="90px"><input id="a2" name="a2" size="12" type="text" value="<?=(isset($_SESSION['aad']['dec']['a2'])?$_SESSION['aad']['dec']['a2']:'')?>"></input></td>
                                                    <td width="90px"><input id="a3" name="a3" size="12" type="text" value="<?=(isset($_SESSION['aad']['dec']['a3'])?$_SESSION['aad']['dec']['a3']:'')?>"></input></td>
                                                    <td width="90px"><input id="sc" name="sc" size="12" type="text" value="<?=(isset($_SESSION['aad']['dec']['sc'])?$_SESSION['aad']['dec']['sc']:'')?>"></input></td>
                                                    <td width="90px"><input id="a4" name="a4" size="12" type="text" value="<?=(isset($_SESSION['aad']['dec']['a4'])?$_SESSION['aad']['dec']['a4']:'')?>"></input></td>
                                                    <td width="90px"><input id="qos" name="qos" size="12" type="text" value="<?=(isset($_SESSION['aad']['dec']['qos'])?$_SESSION['aad']['dec']['qos']:'')?>"></input></td>
                                                    </tr>
                                                    			</table>
                                                    			<button id="send" title="Send" onClick="aad()">Переслать</button>
                                                    			
    </div>
    <div id="lab">AAD : </div><div id="key" align="left"></div>
</div>
</body>
</html>
