<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet"></link>
<link href="css/joint.css" rel="stylesheet"></link>
<link href="css/block.css" rel="stylesheet"></link>
<SCRIPT language="javascript" src="js/transmitter.js"></SCRIPT>
<SCRIPT language="javascript" src="js/arrows.1.0.0.js"></SCRIPT>
<SCRIPT language="javascript" src="js/send.js"></SCRIPT>
<SCRIPT language="javascript" src="js/queue.js"></SCRIPT>
<SCRIPT language="javascript" src="../../orinoco/scripts/jquery-2.1.1.min.js"></SCRIPT>
<style type="text/css">

</style>
</head>
<body>
<div id="main">
<div id="packet">
	<div id="before">
    	<table border="2" cellpadding="5" style="border-collapse:collapse;" width="100%">
            					<td align="center" width="100%" height="240px"><p>MAC Header</p>
                                <table border="2" cellpadding="3" width="100%" style="border-collapse:collapse;">
                    										<tr><td align="center">Frame Control</td></tr>
                        									<tr><td align="center">Duration/ID</td></tr>
                        									<tr><td align="center">Address 1</td></tr>
                        									<tr><td align="center">Address 2</td></tr>
                        									<tr><td align="center">Address 3</td></tr>
                        									<tr><td align="center">Sequence Control</td></tr>
                                                            <tr><td align="center">Address 4</td></tr>
                        									<tr><td align="center">QoS Control</td></tr>
                        									<tr><td align="center">HT Control</td></tr>
                                               			</table></td></tr>
                                            <tr><td align="center" width="300" height="50">Frame Body</td></tr>
                                            <tr><td align="center" width="150"> Frame Control Sequence<br /> 4 octets</td></tr></table>
    </div>
   </div> 
<div id="params">
	<div id="enter" align="center"></div>
    <div id="inputs" align="center">
	<div id="aad">
    	<div class="description">AAD (Additional Authentication Data)
        <button id="input-aad" title="Сформировать" onClick="computePhase1()">Сформировать</button>
        </div>
	</div>
	<div id="nonce">
    	<div class="description">Формирование Nonce
        <button id="input-nonce" title="Сформировать" onClick="computePhase1()">Сформировать</button>
        </div>
	</div>
    <div id="key">
        <table>
        <tr><td>TK</td><td> = </td><td><input name="ph1_tsc32" id="ph1_tsc32" size="43" value=""/></td></tr></table>
        <button id="input-key" title="Отправить" onClick="computePhase1()">Отправить</button>
	</div>
	<div id="pn" align="center">
    	<div class="description">
        <table>
           <tr><td>PN</td><td> = </td><td><input name="ph1_ta" id="ph1_ta" size="43" value=""/></td></tr></table>
        <button id="input-pn" title="Отправить" onClick="computePhase1()">Отправить</button>
        </div>
	</div>
    <div id="ccmp-header">
    	<div class="description">Формирование CCMP Header
        <button id="input-aad" title="Сформировать" onClick="computePhase1()">Сформировать</button>
        </div>
	</div>
    </div>
    </div>
<div id="encapsulation">
	<div id="encryption">
    	<div class="ccm-description" align="center">CCM Encryption</div>
        	<div class="ccm">
            <div class="ccm-description" align="center">AES в режиме <br /> счетчика
        	<button id="ctr" title="Запустить" onClick="computePhase1()">Запустить</button></div>
            </div>
            <div class="ccm">
            <div class="ccm-description" align="center">AES в режиме сцепления блоков
            <button id="cbc-mac" title="Запустить" onClick="computePhase1()">Запустить</button></div>
            </div>
    </div>
</div>
<div id="packet">
	<div id="encapsulated">
    	<table border="1" cellpadding="5" style="border-collapse:collapse;" width="100%">
            					<td align="center" width="100%" height="240px"><p>MAC Header</p>
                                <table border="2" cellpadding="3" width="100%" style="border-collapse:collapse;">
                    										<tr><td align="center">Frame Control</td></tr>
                        									<tr><td align="center">Duration/ID</td></tr>
                        									<tr><td align="center">Address 1</td></tr>
                        									<tr><td align="center">Address 2</td></tr>
                        									<tr><td align="center">Address 3</td></tr>
                        									<tr><td align="center">Sequence Control</td></tr>
                                                            <tr><td align="center">Address 4</td></tr>
                        									<tr><td align="center">QoS Control</td></tr>
                        									<tr><td align="center">HT Control</td></tr>
                                               			</table></td></tr>
                                            <tr><td align="center" height="50" class="ccmp">CCMP Header</td></tr>
                                            <tr><td align="center" height="50">Frame Body</td></tr>
                                            <tr><td align="center"> Frame Control Sequence<br /> 4 octets</td></tr></table>
    </div>
</div>
</div>
</body>
</html>