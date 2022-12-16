<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
<link href="css/dec.css" rel="stylesheet"></link>
<link href="css/joint.css" rel="stylesheet"></link>
<link href="css/block.css" rel="stylesheet"></link>
<SCRIPT language="javascript" src="js/transmitter-for-dec.js"></SCRIPT>
<SCRIPT language="javascript" src="js/arrows.1.0.0.js"></SCRIPT>
<SCRIPT language="javascript" src="js/send.js"></SCRIPT>
<SCRIPT language="javascript" src="js/queue.js"></SCRIPT>
<SCRIPT language="javascript" src="../../orinoco/scripts/jquery-2.1.1.min.js"></SCRIPT>
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
<div id="d_main">
<div id="d-calcs">
	<div id="d-phase1">
	<div class="description">Phase 1 key mixing function</div>
    	<table><form id="phase1_form" action="javascript:void(null)" method="post">
           <tr><td width="30">TA</td><td> = </td><td><input name="ph1_ta" id="ph1_ta" size="53" value="<?=(isset($_SESSION['tkip']['dec']['phase1']['ta'])?$_SESSION['tkip']['dec']['phase1']['ta']:'')?>"/></td></tr>
           <tr><td>TSC</td><td> = </td><td><input name="ph1_tsc32" id="ph1_tsc32" size="53" value="<?=(isset($_SESSION['tkip']['dec']['phase1']['tsc32'])?$_SESSION['tkip']['dec']['phase1']['tsc32']:'')?>"/></td></tr>
           <tr><td>TK</td><td> = </td><td><input name="ph1_tk" id="ph1_tk" size="53" value="<?=(isset($_SESSION['tkip']['dec']['phase1']['tk'])?$_SESSION['tkip']['dec']['phase1']['tk']:'')?>"/></td></tr>
           <tr><td></td><td></td><td align="center"><button id="computePhase1" title="Рассчитать" onClick="phase1()">Рассчитать</button></td></tr>
           <tr><td>TTAK</td><td> = </td><td><div name="ttak" id="ttak"><?=(isset($_SESSION['tkip']['dec']['phase1']['ttak'])?$_SESSION['tkip']['dec']['phase1']['ttak']:'')?></div></td></tr>
        </table></form>
    </div>
    <div id="d-phase2">
    <div class="description">Phase 2 key mixing function</div>
    	<table><form id="phase2_form" action="javascript:void(null)" method="post">
    <tr><td width="30">TSC</td><td> = </td><td><input name="ph2_tsc16" size="53" value="<?=(isset($_SESSION['tkip']['dec']['phase2']['tsc16'])?$_SESSION['tkip']['dec']['phase2']['tsc16']:'')?>"/></td></tr>
    <tr><td>TK</td><td> = </td><td><input name="ph2_tk" size="53" value="<?=(isset($_SESSION['tkip']['dec']['phase2']['tk'])?$_SESSION['tkip']['dec']['phase2']['tk']:'')?>"/></td></tr>
    <tr><td>TTAK</td><td> = </td><td><input name="ph2_ttak" id="ph2_ttak" size="53" value="<?=(isset($_SESSION['tkip']['dec']['phase2']['ttak'])?$_SESSION['tkip']['dec']['phase2']['ttak']:'')?>"/></td></tr>
    <tr><td></td><td></td><td align="center"><button id="computePhase2" title="Рассчитать" onClick="phase2()">Рассчитать</button></td></tr>
    <tr><td align="left">Seed</td><td> = </td><td align="center"><div id="seed" align="left"><?=(isset($_SESSION['tkip']['dec']['phase2']['seed'])?$_SESSION['tkip']['dec']['phase2']['seed']:'')?></div></td></tr></form>
    </table>
    </div>
</div>
<div id="d-packet">
	<div id="d-encapsulated" class="glass">
    	<table border="2" cellpadding="3" style="border-collapse:collapse;" align="center" width="250">
                                        <tr>
            								<td align="center" width="100%" height="40px">MAC Header</td></tr>
                                        	<td align="center" width="100%">IV/Key ID 4 octets</td>
                                      		</tr>
                        					<tr><td align="center" width="100%"> Extended IV 4 octets
                                            <table border="2" cellpadding="1" width="100%" style="border-collapse:collapse;">
                                            </table></td></tr>
                       						<tr><td align="center" height="200" background="../images/fon.jpg"> Data (Protocol Data Unit) >= 1 octets
                                            <textarea rows="10" cols="30" id="ciphertext" align="justify"><?php echo file_get_contents('calculation/text/encode_ciphertext.txt'); ?></textarea>
                                            </td></tr>
                        					<tr><td align="center" background="../images/fon.jpg"> Message Integrity Code 8 octets<br />
                                            <input id="icv" name="icv" size="30" value="<?=(isset($_SESSION['tkip']['icv'])?implode(" ", $_SESSION['tkip']['icv']):'')?>"/>
                                            </td></tr>
                        					<tr><td align="center" background="../images/fon.jpg"> Integrity Check Value 4 octets</td></tr>
                        					<tr><td align="center"> Frame Control Sequence 4 octets</td> </tr>
                    						
            </table>
    </div>
    <div id="d-encryption">
	<div class="description">RC4 Encryption</div>
    	<table><form id="rc4_form" action="javascript:void(null)" method="post">
    		<tr><td>WEP IV</td><td> = </td><td><input name="iv" id="iv" size="35" value="<?=(isset($_SESSION['tkip']['dec']['rc4']["iv"])?$_SESSION['tkip']['dec']['rc4']["iv"]:'')?>"/></td></tr>
    		<tr><td>ARC4 Key</td><td> = </td><td><input name="arc4_key" id="arc4_key" size="35" value="<?=(isset($_SESSION['tkip']['dec']['rc4']['key'])?$_SESSION['tkip']['dec']['rc4']['key']:'')?>"/></td></tr>
    		<tr><td></td><td></td><td align="center"><button id="computeWep" title="Выполнить" onClick="rc4()">Рассчитать</button></td></tr>
    	</table></form>
    </div>
    <div id="d-michael">
    <div class="description">MIC Calculation (Michael algorithm)</div>
    	<table>
    <tr><td width="100">Source</td><td> = </td><td><input name="sa" id="sa" size="20" value="<?=(isset($_SESSION['tkip']['dec']['sa'])?$_SESSION['tkip']['dec']['sa']:'')?>"/></td></tr>
    <tr><td>Destination</td><td> = </td><td><input name="da" id="da" size="20" value="<?=(isset($_SESSION['tkip']['dec']['da'])?$_SESSION['tkip']['dec']['da']:'')?>"/></td></tr>
    <tr><td>Michael key</td><td> = </td><td><input name="michael" id="michael" size="20" value="<?=(isset($_SESSION['tkip']['dec']['key'])?$_SESSION['tkip']['dec']['key']:'')?>"/></td></tr>
    <tr><td></td><td></td><td align="center"><button id="computeMichael" title="Рассчитать" onClick="michael()">Рассчитать</button></td></tr>
    <tr><td>Michael = </td><td></td><td><div id="mic" align="left"><?=(isset($_SESSION['tkip']['dec']['michael'])?$_SESSION['tkip']['dec']['michael']:'')?></div></td></tr>
    </table>
    </div>
    <div id="d_after">
    	<table border="2" cellpadding="5" style="border-collapse:collapse;" width="100%">
            					<td align="center" width="100%">MAC Header
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
                                            <tr><td align="center" width="300" height="180">Frame Body
                                            <textarea rows="10" cols="27" id="plaintext" align="justify"></textarea>
                                            <tr><td align="center" width="150"> Frame Control Sequence<br /> 4 octets</td></tr></table>
    </div>
</div>
</div>
</body>
</html>