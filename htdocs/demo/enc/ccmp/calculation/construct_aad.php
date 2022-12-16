<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Additional Autjentication Data</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="../css/aad.css" rel="stylesheet"></link>
<SCRIPT language="javascript" src="../../../orinoco/scripts/jquery-2.1.1.min.js"></SCRIPT>
<script src="../../../orinoco/scripts/jquery-ui-1.10.4/js/jquery-ui-1.10.4.js"></script>
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
  															<tr><td align="center"><div id="fc">Frame Control</div></td></tr>
                        									<tr><td align="center"><div id="dur/id">Duration/ID</div></td></tr>
                        									<tr><td align="center"><div id="a1">Address 1</div></td></tr>
                        									<tr><td align="center"><div id="a2">Address 2</div></td></tr>
                        									<tr><td align="center"><div id="a3">Address 3</div></td></tr>
                        									<tr><td align="center"><div id="sc">Sequence Control</div></td></tr>
                                                            <tr><td align="center"><div id="a4">Address 4</div></td></tr>
                        									<tr><td align="center"><div id="qos">QoS Control</div></td></tr>
                        									<tr><td align="center"><div id="ht">HT Control</div></td></tr>
                                               			</table></td></tr></table>
    </div>
    </div>
  <div id="aad">
    <div class="description" align="center"><p align="center">Слева перед вами представлен заголовок MAC уровня. Укажите из каких полей заголовка состоят дополнительные аутентификационные данные</p>
    </div>
    	<table width="100%" cellpadding="2" style="border-collapse:collapse;" border="2" align="center" >
                                                    <tr><form action="aad.php" method="post" name="form_aad">
                                                    <td width="90px"><div id=""><input id="wait_fc" name="wait_fc" size="12" type="text" required value="<?=(isset($_SESSION['demo']['aad']['fc'])?$_SESSION['demo']['aad']['fc']:'')?>"></input>
                                                    <div id="show_fc">Frame Control</div></div></td>
                                                    <td width="90px"><div id=""><input id="wait_a1" name="wait_a1" size="12" type="text" required value="<?=(isset($_SESSION['demo']['aad']['a1'])?$_SESSION['demo']['aad']['a1']:'')?>"></input></div></td>
                                                    <td width="90px"><div id=""><input id="wait_a2" name="wait_a2" size="12" type="text" required value="<?=(isset($_SESSION['demo']['aad']['a2'])?$_SESSION['demo']['aad']['a2']:'')?>"></input></div></td>
                                                    <td width="90px"><div id=""><input id="wait_a3" name="wait_a3" size="12" type="text" required value="<?=(isset($_SESSION['demo']['aad']['a3'])?$_SESSION['demo']['aad']['a3']:'')?>"></input></div></td>
                                                    <td width="90px"><div id=""><input id="wait_sc" name="wait_sc" size="12" type="text" required value="<?=(isset($_SESSION['demo']['aad']['sc'])?$_SESSION['demo']['aad']['sc']:'')?>"></input></div></td>
                                                    <td width="90px"><div id=""><input id="wait_a4" name="wait_a4" size="12" type="text" required value="<?=(isset($_SESSION['demo']['aad']['a4'])?$_SESSION['demo']['aad']['a4']:'')?>"></input></div></td>
                                                    <td width="90px"><div id=""><input id="wait_qos" name="wait_qos" size="12" type="text" required value="<?=(isset($_SESSION['demo']['aad']['qos'])?$_SESSION['demo']['aad']['qos']:'')?>"></input></div></td>
                                                    </tr>
                                                    			</table>
                                                    			<button id="send" title="Send" onClick="sendAad()">Переслать</button>
                                                    			</form>
                                                    <div id="res" style="margin-top:50px;">           
                                                    <?php 
													if (isset($_SESSION['demo']['aad']['success']) && $_SESSION['demo']['aad']['success'] = "1"){
														echo 'AAD = '.str_replace(" ", "", $_SESSION['demo']['aad']['fc'].$_SESSION['demo']['aad']['a1'].$_SESSION['demo']['aad']['a2'].$_SESSION['demo']['aad']['a3'].$_SESSION['demo']['aad']['sc'].$_SESSION['demo']['aad']['a4'].$_SESSION['demo']['aad']['qos']).'';}?></div>
    </div>
</div>
</body>
</html>
