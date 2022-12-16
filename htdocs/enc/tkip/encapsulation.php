<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
<link href="css/style.css" rel="stylesheet"></link>
<link href="css/block.css" rel="stylesheet"></link>
<link rel="stylesheet" href="../../orinoco/scripts/dw_tooltips/css/ex.css" type="text/css">
<SCRIPT language="javascript" src="../../orinoco/scripts/jquery-2.1.1.min.js"></SCRIPT>
<SCRIPT language="javascript" src="js/transmitter.js"></SCRIPT>
<script language="javascript" src="js/arrows.1.0.0.js"></script>
<SCRIPT language="javascript" src="js/queue.js"></SCRIPT>
<SCRIPT language="javascript" src="../../orinoco/scripts/dw_tooltips/js/dw_tooltip_c.js"></SCRIPT>
<SCRIPT language="javascript" src="js/tooltip.js"></SCRIPT>
<SCRIPT language="javascript" src="js/jquery.scrollTo.js"></SCRIPT>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
<div id="calcs">
	<div id="phase1">
	<div class="description">Phase 1 key mixing function</div>
    	<table>
           <tr><td width="30"><a href="#" class="showTip ta">TA</a></td><td> = </td><td><input name="ph1_ta" id="ph1_ta" size="53" value="<?=(isset($_SESSION['tkip']['phase1']['ta'])?$_SESSION['tkip']['phase1']['ta']:'')?>"/></td></tr>
           <tr><td><a href="#" class="showTip tsc">TSC</a></td><td> = </td><td><input name="ph1_tsc32" id="ph1_tsc32" size="53" value="<?=(isset($_SESSION['tkip']['phase1']['tsc32'])?$_SESSION['tkip']['phase1']['tsc32']:'')?>"/></td></tr>
           <tr><td><a href="#" class="showTip tk">TK</a></td><td> = </td><td><input name="ph1_tk" id="ph1_tk" size="53" value="<?=(isset($_SESSION['tkip']['phase1']['tk'])?$_SESSION['tkip']['phase1']['tk']:'')?>"/></td></tr>
           <tr><td></td><td></td><td align="center"><button id="computePhase1" onClick="phase1()" title="Рассчитать">Рассчитать</button></td></tr>
           <tr><td><a href="#" class="showTip ttak">TTAK</a></td><td> = </td><td><div id="ph1_ttak"><?=(isset($_SESSION['tkip']['phase1']['ttak'])?$_SESSION['tkip']['phase1']['ttak']:'')?></div></td></tr></form>
        </table>
    </div>
    <div id="phase2">
    <div class="description">Phase 2 key mixing function</div>
    <table>
    <tr><td width="30"><a href="#" class="showTip tsc16">TSC</a></td><td> = </td><td><input name="ph2_tsc16" size="53" value="<?=(isset($_SESSION['tkip']['phase2']['tsc16'])?$_SESSION['tkip']['phase2']['tsc16']:'')?>"/></td></tr>
    <tr><td><a href="#" class="showTip tk">TK</a></td><td> = </td><td><input name="ph2_tk" size="53" value="<?=(isset($_SESSION['tkip']['phase2']['tk'])?$_SESSION['tkip']['phase2']['tk']:'')?>"/></td></tr>
    <tr><td><a href="#" class="showTip ttak">TTAK</a></td><td> = </td><td><input name="ph2_ttak" id="ph2_ttak" size="53" value="<?=(isset($_SESSION['tkip']['phase2']['ttak'])?$_SESSION['tkip']['phase2']['ttak']:'')?>"/></td></tr>
    <tr><td></td><td></td><td align="center"><button id="computePhase2" title="Рассчитать" onClick="phase2()">Рассчитать</button></td></tr>
    <tr><td align="left"><a href="#" class="showTip seed">Seed</a></td><td> = </td><td align="center"><div id="seed" align="left"><?=(isset($_SESSION['tkip']['phase2']['seed'])?$_SESSION['tkip']['phase2']['seed']:'')?></div></td></tr>
    </table>
    </div>
    <div id="michael">
    <div class="description">MIC Calculation (Michael algorithm)</div>
    	<table>
    <tr><td width="150"><a href="#" class="showTip sa">Source Address</a></td><td> = </td><td><input name="sa" id="sa" size="20" value="<?=(isset($_SESSION['tkip']['sa'])?$_SESSION['tkip']['sa']:'')?>"/></td></tr>
    <tr><td><a href="#" class="showTip da">Destination Address</a></td><td> = </td><td><input name="da" id="da" size="20" value="<?=(isset($_SESSION['tkip']['da'])?$_SESSION['tkip']['da']:'')?>"/></td></tr>
    <tr><td><a href="#" class="showTip mic_key">Michael key</a></td><td> = </td><td><input name="key" id="key" size="30" value="<?=(isset($_SESSION['tkip']['key'])?$_SESSION['tkip']['key']:'')?>"/></td></tr>
    <tr><td></td><td></td><td align="center"><button id="computeMichael" title="Рассчитать" onClick="michael()">Рассчитать</button></td></tr>
    <tr><td><a href="#" class="showTip michael">Michael</a> = </td><td></td><td><div id="mic" align="left"><?=(isset($_SESSION['tkip']['michael'])?$_SESSION['tkip']['michael']:'')?></div></td></tr>
    </table>
    </div>
</div>
<div id="empty">
	<div id="before">
    	<table border="2" cellpadding="5" style="border-collapse:collapse;" width="100%">
            					<td align="center" width="100%" height="170px">MAC Header
                                <table border="2" cellpadding="1" width="100%" style="border-collapse:collapse;">
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
                                            <tr><td align="center" width="300" height="50">Frame Body
                                            <div id="plaintext" align="justify"><?php echo @file_get_contents('calculation/text/plaintext.txt'); ?></div>
                                            </td></tr>
                                            <tr><td align="center" width="150"> Frame Check Sequence<br /> 4 octets</td></tr></table>
    </div>
	<div id="encryption">
	<div class="description"><a href="#" class="showTip rc4">RC4 Encryption</a></div>
    	<table>
    		<tr><td>WEP IV</td><td> = </td><td><input name="iv" id="iv" size="35" value="<?=(isset($_SESSION['tkip']['rc4']["iv"])?$_SESSION['tkip']['rc4']["iv"]:'')?>"/></td></tr>
    		<tr><td>ARC4 Key</td><td> = </td><td><input name="arc4_key" id="arc4_key" size="35" value="<?=(isset($_SESSION['tkip']['rc4']['key'])?$_SESSION['tkip']['rc4']['key']:'')?>"/></td></tr>
    		<tr><td></td><td></td><td align="center"><button id="computeWep" title="Выполнить" onClick="rc4()">Рассчитать</button></td></tr>
    	</table>
        <div id="todec" align="center"><a href="decapsulation.php" id="next">Перейти к декапсуляции</a></div>
    </div>
    <div id="packet">
	<div id="encapsulated" class="glass">
    	<table border="2" cellpadding="3" style="border-collapse:collapse;" align="center" width="250">
                                        <tr>
            								<td align="center" width="100%" height="60px">MAC Header
                                            </td></tr>
                                        	<td align="center" width="100%">IV/Key ID 4 octets</td>
                                      		</tr>
                        					<tr><td align="center" width="100%"> Extended IV 4 octets
                                            <table border="2" cellpadding="1" width="100%" style="border-collapse:collapse;">
                                            </table></td></tr>
                       						<tr><td align="center" height="200" background="../images/fon.jpg"> Data (Protocol Data Unit) >= 1 octets
                                            <textarea rows="10" cols="30" id="ciphertext" align="justify"></textarea>
                                            </td></tr>
                        					<tr><td align="center" background="../images/fon.jpg"> Message Integrity Code 8 octets<br />
                                            <input id="icv" name="icv" size="30" value="<?=(isset($_SESSION['tkip']['icv'])?implode(" ", $_SESSION['tkip']['icv']):'')?>"/>
                                            </td></tr>
                        					<tr><td align="center" background="../images/fon.jpg"> Integrity Check Value 4 octets</td></tr>
                        					<tr><td align="center"> Frame Control Sequence 4 octets</td> </tr>
                    						
            </table>
    </div>
</div>
</div>
</div>