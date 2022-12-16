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
<link rel="stylesheet" href="../../orinoco/scripts/dw_tooltips/css/ex.css" type="text/css">
<SCRIPT language="javascript" src="js/transmitter.js"></SCRIPT>
<SCRIPT language="javascript" src="js/arrows.1.0.0.js"></SCRIPT>
<SCRIPT language="javascript" src="../../orinoco/scripts/jquery-2.1.1.min.js"></SCRIPT>
<style type="text/css">

</style>
</head>
<body>
<div id="header">
			<?php
			include ("../menu.html");
			?>
    </div>
<div id="main">
<div id="packet">
	<div id="before">
    	<table border="2" cellpadding="5" style="border-collapse:collapse;" width="100%">
            					<td align="center" width="100%"><p>MAC Header</p></td></tr>
                                            <tr><td align="center" width="300" height="200">Frame Body<br>
                                            <textarea id="plaintext" cols="23" rows="12" style="overflow:auto; resize:none;" align="justify"><?php echo @file_get_contents('text/plaintext.txt'); ?></textarea>
                                            </td></tr>
                                            <tr><td align="center" width="150"> Frame Control Sequence<br /> 4 octets</td></tr></table>
    </div>
   </div> 
<div id="params">
	<div id="enter" align="center"></div>
    <div id="inputs" align="center">
	<div id="aad">
    	<div class="description">AAD (Additional Authentication Data)
        <button id="input-aad" title="Сформировать" onclick="open_aad()">Сформировать</button>
        </div>
	</div>
	<div id="nonce">
    	<div class="description">Формирование Nonce
        <button id="input-nonce" title="Сформировать" onclick="open_nonce()">Сформировать</button>
        </div>
	</div>
    <div id="key">
        <table>
        <tr><td>Key</td><td> = </td><td><input name="cipherkey" id="cipherkey" size="40" value="<?=(isset($_SESSION['ccmp']['enc']['key'])?$_SESSION['ccmp']['enc']['key']:'')?>"/></td></tr></table>
	</div>
	<div id="pn" align="center">
    	<div class="description">
        <table>
           <tr><td>PN</td><td> = </td><td><input name="number" id="number" size="40" value=""/></td></tr></table>
        </div>
	</div>
    <!--<div id="ccmp-header">
    	<div class="description">Формирование CCMP Header
        <button id="input-aad" title="Сформировать" onclick="computePhase1()">Сформировать</button>
        </div>
	</div>-->
    </div>
    </div>
<div id="encapsulation">
	<div id="encryption">
    	<div class="ccm-description" align="center">CCM Encryption</div>
        	<div class="ccm">
            <div class="ccm-description" align="center">1 => AES в режиме сцепления блоков
            <button id="cbc-mac" title="Запустить" onclick="cbc()">Запустить</button></div>
            </div>
            <div class="ccm">
            <div class="ccm-description" align="center">2 => AES в режиме <br /> счетчика
        	<button id="ctr" title="Запустить" onclick="ctr()">Запустить</button></div>
            </div>
    </div>
</div>
<div id="packet">
	<div id="encapsulated">
    	<table border="1" cellpadding="5" style="border-collapse:collapse;" width="100%">
            					<td align="center" width="100%"><p>MAC Header</p>
                                            <tr><td align="center" class="ccmp"><p>CCMP Header</p>
                                            	<!--<table border="2" cellpadding="1" width="100%" style="border-collapse:collapse;">
                    										<tr><td align="center">Packet Number 0</td></tr>
                        									<tr><td align="center">Packet Number 1</td></tr>
                        									<tr><td align="center">Reserved</td></tr>
                        									<tr><td align="center">KeyID octet</td></tr>
                        									<tr><td align="center">Packet Number 2</td></tr>
                                                            <tr><td align="center">Packet Number 3</td></tr>
                        									<tr><td align="center">Packet Number 4</td></tr>
                        									<tr><td align="center">Packet Number 5</td></tr>
                                               			</table>-->
                                            </td></tr>
                                            <tr><td align="center" width="300" height="180">Frame Body<br>
                                            <textarea id="ciphertext" cols="23" rows="12" style="overflow:auto; resize:none;" align="justify"></textarea>
                                            </td></tr>
                                            <tr><td align="center" height="30px"> MIC 8 octets<br /> <div id="code"></div></td></tr>
                                            <tr><td align="center"> Frame Control Sequence<br /> 4 octets</td></tr></table>
    </div>
</div>
<a href="decapsulation.php" style="float:right; margin-top:50px; margin-right:50px;">Перейти к декапсуляции</a>
</div>
</body>
</html>