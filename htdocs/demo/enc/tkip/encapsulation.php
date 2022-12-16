<?php
session_start();
$_SESSION['demo']["tkip"]["iv"] = "0020012000000000";
$_SESSION['demo']['tkip']['tk'] = "12 34 56 78 90 12 34 56 78 90 12 34 56 78 90 12 34 56 78 90 12 34 56 78 90 12 34 56 78 90 12 34";
$_SESSION['demo']['tkip']['ta'] = str_split(preg_replace('/[^a-zа-яё0-9]/i','', $_SESSION['demo']["ap"]["mac"]), 2);
$_SESSION['demo']['tkip']['tsc32'] = str_split(substr($_SESSION['demo']["tkip"]["iv"], 0, 8), 2);
$_SESSION['demo']['tkip']['tsc16'] = str_split(substr($_SESSION['demo']["tkip"]["iv"], 8, 4), 2);
$_SESSION['demo']['tkip']['michael_key'] = str_split(substr(str_replace(" ", "", $_SESSION['demo']['tkip']['tk']), 32, 16), 2);
$_SESSION['demo']['tkip']["client_mac"] = str_split(preg_replace('/[^a-zа-яё0-9]/i','', $_SESSION['demo']['client']["mac"]), 2);
unset($_SESSION['demo']['tkip']['var']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Эмулятор точки доступа</title>
<link href="css/style.css" rel="stylesheet"></link>
<link href="css/block.css" rel="stylesheet"></link>
<link href="css/dec.css" rel="stylesheet"></link>
<SCRIPT language="javascript" src="js/transmitter.js"></SCRIPT>
<SCRIPT language="javascript" src="js/arrows.1.0.0.js"></SCRIPT>
<SCRIPT language="javascript" src="js/send.js"></SCRIPT>
<SCRIPT language="javascript" src="js/queue.js"></SCRIPT>
<SCRIPT language="javascript" src="../../orinoco/scripts/jquery-2.1.1.min.js"></SCRIPT>
<SCRIPT language="javascript" src="js/jquery.scrollTo.js"></SCRIPT>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css">
</style>
</head>
<body>
<div id="main">
<div id="calcs">
	<div id="phase1">
	<div class="description">Phase 1 key mixing function</div>
    	<table><form id="phase1_form" action="calculation/phase1.php" method="post">
           <tr><td width="30">TA</td><td> = </td><td><input name="ph1_ta" id="ph1_ta" size="53" value="<?=(isset($_SESSION['demo']['tkip']['ta'])?implode(" ", $_SESSION['demo']['tkip']['ta']):'')?>"/></td></tr>
           <tr><td>TSC</td><td> = </td><td><input name="ph1_tsc32" id="ph1_tsc32" size="53" value="<?=(isset($_SESSION['demo']['tkip']['tsc32'])?implode(" ", $_SESSION['demo']['tkip']['tsc32']):'')?>"/></td></tr>
           <tr><td>TK</td><td> = </td><td><input name="ph1_tk" id="ph1_tk" size="53" value="<?=(isset($_SESSION['demo']['tkip']['tk'])?$_SESSION['demo']['tkip']['tk']:'')?>"/></td></tr>
           <tr><td></td><td></td><td align="center"><button id="computePhase1" title="Рассчитать">Рассчитать</button></td></tr>
           <tr><td>TTAK</td><td> = </td><td><input name="ph1_ttak" id="ph1_ttak" size="53"  value="<?=(isset($_SESSION['demo']['tkip']['ttak'])?implode(" ", $_SESSION['demo']['tkip']['ttak']):'')?>"/></td></tr></form>
        </table>
    </div>
    <div id="phase2">
    <div class="description">Phase 2 key mixing function</div>
    	<table><form id="phase2_form" action="calculation/phase2.php" method="post">
    <tr><td width="30">TSC</td><td> = </td><td><input name="ph2_tsc16" size="53" value="<?=(isset($_SESSION['demo']['tkip']['tsc16'])?implode(" ", $_SESSION['demo']['tkip']['tsc16']):'')?>"/></td></tr>
    <tr><td>TK</td><td> = </td><td><input name="ph2_tk" size="53" value="<?=(isset($_SESSION['demo']['tkip']['tk'])?$_SESSION['demo']['tkip']['tk']:'')?>"/></td></tr>
    <tr><td>TTAK</td><td> = </td><td><input name="ph2_ttak" id="ph2_ttak" size="53" value="<?=(isset($_SESSION['demo']['tkip']['ttak'])?implode(" ", $_SESSION['demo']['tkip']['ttak']):'')?>"/></td></tr>
    <tr><td></td><td></td><td align="center"><button id="computePhase2" title="Рассчитать">Рассчитать</button></td></tr>
    <tr><td align="left">Seed</td><td> = </td><td align="center"><input name="seed" size="53" id="seed" value="<?=(isset($_SESSION['demo']['tkip']['seed'])?implode(" ", $_SESSION['demo']['tkip']['seed']):'')?>"/></td></tr></form>
    </table>
    </div>
    <div id="michael">
    <div class="description">MIC Calculation (Michael algorithm)</div>
    	<table><form id="michael_form" action="calculation/michael.php" method="post">
    <tr><td width="150">Source Address</td><td> = </td><td><input name="michael_source" id="michael_source" size="20" value="<?=(isset($_SESSION['demo']['tkip']["client_mac"])?implode(" ", $_SESSION['demo']['tkip']["client_mac"]):'')?>"/></td></tr>
    <tr><td>Destination Address</td><td> = </td><td><input name="michael_dest" id="michael_dest" size="20" value="<?=(isset($_SESSION['demo']['tkip']['ta'])?implode(" ", $_SESSION['demo']['tkip']['ta']):'')?>"/></td></tr>
    <tr><td>Michael key</td><td> = </td><td><input name="michael_key" id="michael_key" size="30" value="<?=(isset($_SESSION['demo']['tkip']['michael_key'])?implode(" ", $_SESSION['demo']['tkip']['michael_key']):'')?>"/></td></tr>
    <tr><td></td><td></td><td align="center"><button id="computeMichael" title="Рассчитать">Рассчитать</button></td></tr>
    <tr><td>Michael</td><td> = </td><td><input name="mic" id="mic" size="30" value="<?=(isset($_SESSION['demo']['tkip']['michael'])?implode(" ", $_SESSION['demo']['tkip']['michael']):'')?>"/></td></tr></form>
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
                                            <div id="plaintext" align="justify"><?php echo @file_get_contents('text/plaintext.txt'); ?></div>
                                            </td></tr>
                                            <tr><td align="center" width="150"> Frame Check Sequence<br /> 4 octets</td></tr></table>
    </div>
	<div id="encryption">
	<div class="description">RC4 Encryption</div>
    	<table><form id="rc4_form" action="calculation/encryption.php" method="post">
    		<tr><td width="110">WEP IV</td><td> = </td><td><input name="wep_iv" id="wep_iv" size="35" value="<?=(isset($_SESSION['demo']['tkip']['wep']["iv"])?$_SESSION['demo']['tkip']['wep']["iv"]:'')?>"/></td></tr>
    		<tr><td>ARC4 Key</td><td> = </td><td><input name="arc4_key" id="arc4_key" size="35" value="<?=(isset($_SESSION['demo']['tkip']['wep']["key"])?$_SESSION['demo']['tkip']['wep']["key"]:'')?>"/></td></tr>
    		<tr><td></td><td></td><td align="center"><button id="computeWep" title="Выполнить" onClick="computeWep()">Рассчитать</button></td></tr>
    	</table></form>
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
                       						<tr><td align="center" height="80" background="../images/fon.jpg"> Data (Protocol Data Unit) >= 1 octets
                                            <div id="ciphertext" align="justify"><?php if (isset($_SESSION['demo']['tkip']['ciphertext'])) echo $_SESSION['demo']['tkip']['ciphertext'];?></div>
                                            </td></tr>
                        					<tr><td align="center" background="../images/fon.jpg"> Message Integrity Code 8 octets<br />
                                            <input id="icv" name="icv" size="30" value="<?=(isset($_SESSION['demo']['tkip']['icv'])?implode(" ", $_SESSION['demo']['tkip']['icv']):'')?>"/>
                                            </td></tr>
                        					<tr><td align="center" background="../images/fon.jpg"> Integrity Check Value 4 octets</td></tr>
                        					<tr><td align="center"> Frame Control Sequence 4 octets</td> </tr>
                    						
            </table>
    </div>
</div>
<div id="todec" align="center"><a href="decapsulation.php" id="next">Перейти к декапсуляции</a></div>
</div>
</div>