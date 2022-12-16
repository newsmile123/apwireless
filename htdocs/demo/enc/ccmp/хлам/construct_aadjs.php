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
<SCRIPT language="javascript" src="js/aad.js"></SCRIPT>
<script src="../../orinoco/scripts/jquery-ui-1.10.4/js/jquery-ui-1.10.4.js"></script>
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
    											<div id="wait_fc"></div>
                                                <div id="show_fc">Frame Control</div>
                                                <div id="wait_a1"></div>
                                                <div id="show_a1">Frame Control</div>
                                                <div id="wait_a2"></div>
                                                <div id="show_a2">Frame Control</div>
                                                <div id="wait_a3"></div>
                                                <div id="show_a3">Frame Control</div>
                                                <div id="wait_sc"></div>
                                                <div id="show_sc">Frame Control</div>
                                                <div id="wait_a4"></div>
                                                <div id="show_a4">Frame Control</div>
                                                <div id="wait_qos"></div>
                                                <div id="show_qos">Frame Control</div>
                                            
    </div>
</div>
</body>
</html>
