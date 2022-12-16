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
    	<table>
           <tr><td width="30">TA</td><td> = </td><td><input name="ph1_ta" id="ph1_ta" size="53" value="<?=(isset($_SESSION['demo']['tkip']['ta'])?implode(" ", $_SESSION['demo']['tkip']['ta']):'')?>"/></td></tr>
           <tr><td>TSC</td><td> = </td><td><input name="ph1_tsc32" id="ph1_tsc32" size="53" value="<?=(isset($_SESSION['demo']['tkip']['tsc32'])?implode(" ", $_SESSION['demo']['tkip']['tsc32']):'')?>"/></td></tr>
           <tr><td>TK</td><td> = </td><td><input name="ph1_tk" id="ph1_tk" size="53" value="<?=(isset($_SESSION['demo']['tkip']['tk'])?$_SESSION['demo']['tkip']['tk']:'')?>"/></td></tr>
           <tr><td></td><td></td><td align="center"><button id="computePhase1" title="Рассчитать" onClick="computePhase1()">Рассчитать</button></td></tr>
           <tr><td>TTAK</td><td> = </td><td><input name="ph1_ttak" id="ph1_ttak" size="53" /></td></tr>
        </table>
    </div>
    <div id="phase2">
    <div class="description">Phase 2 key mixing function</div>
    	<table>
    <tr><td width="30">TSC</td><td> = </td><td><input name="ph2_tsc16" size="53" value="<?=(isset($_SESSION['demo']['tkip']['tsc16'])?implode(" ", $_SESSION['demo']['tkip']['tsc16']):'')?>"/></td></tr>
    <tr><td>TK</td><td> = </td><td><input name="ph2_tk" size="53" value="<?=(isset($_SESSION['demo']['tkip']['tk'])?$_SESSION['demo']['tkip']['tk']:'')?>"/></td></tr>
    <tr><td>TTAK</td><td> = </td><td><input name="ph2_ttak" id="ph2_ttak" size="53" /></td></tr>
    <tr><td></td><td></td><td align="center"><button id="computePhase2" title="Рассчитать" onClick="computePhase2()">Рассчитать</button></td></tr>
    <tr><td align="left">Seed</td><td> = </td><td align="center"><input name="seed" size="53" id="seed"/></td></tr>
    </table>
    </div>
    <div id="michael">
    <div class="description">MIC Calculation (Michael algorithm)</div>
    	<table>
    <tr><td width="150">Source Address</td><td> = </td><td><input name="michael_source" id="michael_source" size="20" value="<?=(isset($_SESSION['demo']['tkip']["client_mac"])?implode(" ", $_SESSION['demo']['tkip']["client_mac"]):'')?>"/></td></tr>
    <tr><td>Destination Address</td><td> = </td><td><input name="michael_dest" id="michael_dest" size="20" value="<?=(isset($_SESSION['demo']['tkip']['ta'])?implode(" ", $_SESSION['demo']['tkip']['ta']):'')?>"/></td></tr>
    <tr><td>Michael key</td><td> = </td><td><input name="michael_key" id="michael_key" size="30" value="<?=(isset($_SESSION['demo']['tkip']['michael_key'])?implode(" ", $_SESSION['demo']['tkip']['michael_key']):'')?>"/></td></tr>
    <tr><td></td><td></td><td align="center"><button id="computeMichael" title="Рассчитать" onClick="computeMichael()">Рассчитать</button></td></tr>
    <tr><td>Michael</td><td> = </td><td><input name="mic" id="mic" size="30" /></td></tr>
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
                                            <tr><td align="center" width="300" height="50">Frame Body</td></tr>
                                            <tr><td align="center" width="150"> Frame Check Sequence<br /> 4 octets</td></tr></table>
    </div>
	<div id="encryption">
	<div class="description">RC4 Encryption</div>
    	<table>
    		<tr><td width="110">WEP IV</td><td> = </td><td><input name="wep_iv" id="wep_iv" size="35" value=""/></td></tr>
    		<tr><td>ARC4 Key</td><td> = </td><td><input name="arc4_key" id="arc4_key" size="35" value=""/></td></tr>
    		<tr><td></td><td></td><td align="center"><button id="computeWep" title="Рассчитать" onClick="computeWep()">Рассчитать</button></td></tr>
    	</table>
    </div>
    <div id="packet">
	<div id="encapsulated" class="glass">
    	<table border="1" cellpadding="3" style="border-collapse:collapse;" align="center" width="100%">
        					<td align="left">Radiotap
            					<table border="1" cellpadding="3" style="border-collapse:collapse;" width="100%">
            						<td align="left">IEEE 802.1x Header
                    					<table border="1" width="100%" cellpadding="3" style="border-collapse:collapse;">
                                        <tr>
            								<td align="center" width="100%">MAC Header</td>
                                        </tr>
                                        <tr>
                                        	<td align="center" width="100%">IV/Key ID 4 octets
                    									<table border="2" cellpadding="1" width="100%" style="border-collapse:collapse;">
                    										<tr><td align="center"> TKIP Sequence Counter 1</td></tr>
                        									<tr><td align="center"> WEP Seed [1]</td></tr>
                        									<tr><td align="center"> TKIP Sequence Counter 0</td></tr>
                        									<tr><td align="center"> Reserved</td></tr>
                        									<tr><td align="center"> Extended IV</td></tr>
                        									<tr><td align="center"> Key ID</td></tr>
                                               			</table>
                                            </td>
                                      		</tr>	
                        					<tr><td align="center" width="100%"> Extended IV 4 octets
                                            <table border="2" cellpadding="1" width="100%" style="border-collapse:collapse;">
                                            </table></td></tr>
                       						<tr><td align="center" height="80" background="../images/fon.jpg"> Data (Protocol Data Unit) >= 1 octets</td></tr>
                        					<tr><td align="center" background="../images/fon.jpg"> Message Integrity Code 8 octets</td></tr>
                        					<tr><td align="center" background="../images/fon.jpg"> Integrity Check Value 4 octets</td></tr>
                        					<tr><td align="center"> Frame Control Sequence 4 octets</td> </tr>
                    							
                                           </td>
                    					</table>
                    				</td>
                                </table>
            		</td>
            </table>
    </div>
</div>
<div id="todec" align="center"><input type="button" id="next" name="next" onclick="show_dec()" size="30" value="Перейти"/></div>
</div>
</div>
<div id="d_main">
<div id="d-calcs">
	<div id="d-phase1">
	<div class="description">Phase 1 key mixing function</div>
    	<table>
           <tr><td width="150">TA(48 bits)</td><td> = </td><td><input name="ph1_ta" id="ph1_ta" size="53" value="<?=(isset($_SESSION['demo']['tkip']['ta'])?implode(" ", $_SESSION['demo']['tkip']['ta']):'')?>):'')?>"/></td></tr>
           <tr><td>TSC(32 MSB IV)</td><td> = </td><td><input name="ph1_tsc32" id="ph1_tsc32" size="53" value="<?=(isset($_SESSION['demo']['tkip']['tsc32'])?implode(" ", $_SESSION['demo']['tkip']['tsc32']):'')?>"/></td></tr>
           <tr><td>TK(256-384 PTK bits)</td><td> = </td><td><input name="ph1_tk" id="ph1_tk" size="53" value="<?=(isset($_SESSION['demo']['tkip']['tk'])?$_SESSION['demo']['tkip']['tk']:'')?>"/></td></tr>
           <tr><td></td><td></td><td align="center"><button id="d-computePhase1" title="Рассчитать" onClick="computePhase1()">Рассчитать</button></td></tr>
           <tr><td>TTAK(90 bits)</td><td> = </td><td><input name="ph1_ttak" id="ph1_ttak" size="53" /></td></tr>
        </table>
    </div>
    <div id="d-phase2">
    <div class="description">Phase 2 key mixing function</div>
    	<table>
    <tr><td width="150">TSC(16 LSB IV)</td><td> = </td><td><input name="ph2_tsc16" size="53" value="<?=(isset($_SESSION['demo']['tkip']['tsc16'])?implode(" ", $_SESSION['demo']['tkip']['tsc16']):'')?>):'')?>"/></td></tr>
    <tr><td>TK(256-384 PTK bits)</td><td> = </td><td><input name="ph2_tk" size="53" value="<?=(isset($_SESSION['demo']['tkip']['tk'])?$_SESSION['demo']['tkip']['tk']:'')?>"/></td></tr>
    <tr><td>TTAK(90 bits)</td><td> = </td><td><input name="ph2_ttak" id="ph2_ttak" size="53" /></td></tr>
    <tr><td></td><td></td><td align="center"><button id="d-computePhase2" title="Рассчитать" onClick="computePhase2()">Рассчитать</button></td></tr>
    <tr><td align="left">WEP Seed</td><td> = </td><td align="center"><input name="ph2_seed" size="53" id="ph2_seed"/></td></tr>
    </table>
    </div>
</div>
<div id="d-packet">
	<div id="d-encapsulated" class="glass">
    	<table border="1" cellpadding="3" style="border-collapse:collapse;" align="center" width="100%">
        					<td align="left">Radiotap
            					<table border="1" cellpadding="3" style="border-collapse:collapse;" width="100%">
            						<td align="left">IEEE 802.1x Header
                    					<table border="1" width="100%" cellpadding="3" style="border-collapse:collapse;">
                                        <tr>
            								<td align="center" width="100%">MAC Header</td>
                                        </tr>
                                        <tr>
                                        	<td align="center" width="100%">IV/Key ID 4 octets
                    									<table border="2" cellpadding="1" width="100%" style="border-collapse:collapse;">
                    										<tr><td align="center"> TKIP Sequence Counter 1</td></tr>
                        									<tr><td align="center"> WEP Seed [1]</td></tr>
                        									<tr><td align="center"> TKIP Sequence Counter 0</td></tr>
                        									<tr><td align="center"> Reserved</td></tr>
                        									<tr><td align="center"> Extended IV</td></tr>
                        									<tr><td align="center"> Key ID</td></tr>
                                               			</table>
                                            </td>
                                      		</tr>	
                        					<tr><td align="center" width="100%"> Extended IV 4 octets
                                            <table border="2" cellpadding="1" width="100%" style="border-collapse:collapse;">
                                            </table></td></tr>
                       						<tr><td align="center" height="80" background="../images/fon.jpg"> Data (Protocol Data Unit) >= 1 octets</td></tr>
                        					<tr><td align="center" background="../images/fon.jpg"> Message Integrity Code 8 octets</td></tr>
                        					<tr><td align="center" background="../images/fon.jpg"> Integrity Check Value 4 octets</td></tr>
                        					<tr><td align="center"> Frame Control Sequence 4 octets</td> </tr>
                    							
                                           </td>
                    					</table>
                    				</td>
                                </table>
            		</td>
            </table>
    </div>
    <div id="d-encryption">
	<div class="description">RC4 Encryption</div>
    	<table>
    		<tr><td width="70">WEP IV</td><td> = </td><td><input name="michael_source" id="michael_source" size="35" value="<?=(isset($_SESSION['demo']['tkip']['wep']["iv"])?$_SESSION['demo']['tkip']['wep']["iv"]:'')?>"/></td></tr>
    		<tr><td>ARC4 Key</td><td> = </td><td><input name="michael_dest" id="michael_dest" size="35" value="<?=(isset($_SESSION['demo']['tkip']['wep']["key"])?$_SESSION['demo']['tkip']['wep']["key"]:'')?>"/></td></tr>
    		<tr><td></td><td></td><td align="center"><button id="d-computeWep" title="Рассчитать" onClick="computeWep()">Рассчитать</button></td></tr>
    	</table>
    </div>
    <div id="d-michael">
    <div class="description">MIC Calculation (Michael algorithm)</div>
    	<table>
    <tr><td width="150">Source Address</td><td> = </td><td><input name="michael_source" id="michael_source" size="20" value="<?=(isset($_SESSION['demo']['tkip']["client_mac"])?implode(" ", $_SESSION['demo']['tkip']["client_mac"]):'')?>):'')?>"/></td></tr>
    <tr><td>Destination Address</td><td> = </td><td><input name="michael_dest" id="michael_dest" size="20" value="<?=(isset($_SESSION['demo']['tkip']['ta'])?implode(" ", $_SESSION['demo']['tkip']['ta']):'')?>"/></td></tr>
    <tr><td>Key(128-191 PTK bits)</td><td> = </td><td><input name="michael_key" id="michael_key" size="30" value="<?=(isset($_SESSION['demo']['tkip']['michael_key'])?implode(" ", $_SESSION['demo']['tkip']['michael_key']):'')?>"/></td></tr>
    <tr><td></td><td></td><td align="center"><button id="d-computeMichael" title="Рассчитать" onClick="computeMichael()">Рассчитать</button></td></tr>
    <tr><td>Michael</td><td> = </td><td><input name="mic" id="mic" size="30" /></td></tr>
    </table>
    </div>
    <div id="d_after">
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
</div>
</body>
</html>