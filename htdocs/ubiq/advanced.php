
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>[NanoStation Loco M2] - Advanced</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Pragma" content="no-cache">
<link rel="shortcut icon" href="/140205.1824/favicon.ico" >
<link href="/140205.1824/style.css" rel="stylesheet" type="text/css">
<link href="/140205.1824/help.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="jsl10n.php"></script>
<script type="text/javascript" src="/140205.1824/slider-min.js"></script>
<script type="text/javascript" src="/140205.1824/jsval.js"></script>
<script type="text/javascript" src="/140205.1824/util.js"></script>
<script type="text/javascript" language="javascript1.2" src="/140205.1824/slink.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.utils.js"></script>
<link type="text/css" rel="StyleSheet" href="/140205.1824/bluecurve.css" />
<script type="text/javascript" src="/140205.1824/js/jquery.ui.js"></script>
<script type="text/javascript" src="/140205.1824/help.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.blockUI.js"></script>
<script type="text/javascript" language="javascript">
	//<!--
var fw_check = {
	enabled: true,
	fw_str: 'Firmware update {1} is available.',
	no_str: 'You have latest available firmware version.',
	dl_str: 'Go to Ubiquiti Networks <a href="http://www.ubnt.com/support/downloads" target="_blank"> downloads</a> page.'
};


	function init() {
		createSlider(23, 186);
		createQDurSlider();
		$('#rate_module').val("ath_rate_atheros");
		$('#noise_immunity').val("28");
		shaperStatusClicked();
		aggregationStatusClicked();

		var fixer = new ieee_mode_fixer("11nght40".toLowerCase(),
			"0");
		init_rates(null, fixer.getIEEEMode(), fixer.getClkSel(),
			"12", "mcast_rate");
                var o=document.getElementById('rtsoff');
                handleOff(o, 'rts', 2346);
                o=document.getElementById('rssi_sensoff');
                handleOff(o, 'rssi_sens', -96);
                var source = "0";
                selectRadio("signal_led_source", source);
                chooseSignalLedSource(source);
         	if (643 == 511) {
			$('#eirp_status').enable(false);
			$('#eirp_status').attr('checked', true);
                }

		$("#eth0_speed").val("0");
		$("#eth1_speed").val("");

		$('#mc_enhance').attr('checked', "enabled" == "enabled");

		fwUpdateCheck(false, fw_check);
		security.check();
	}

	function handleOff(o, id, val) {
		var d=document.getElementById(id);
                if (d && o) {
					d.disabled=o.checked;
                        if (o.checked) {
							d.value = val;
                        }
                }
        }
	function aggregationStatusClicked() {
		var o=document.getElementById('aggr_status');
		statusClicked(o,new Array('aggr_frames', 'aggr_bytes'));
	}
        var SIGNALLED_GPS = 1;
        var SIGNALLED_WIRELESS = 0;
        function chooseSignalLedSource(source){
                var thresholds=true;
                if (source != SIGNALLED_WIRELESS) thresholds=false;
                $('.i_threshold').disabled=!thresholds;
                $('.threshold').toggle(thresholds);
        }

	function doSubmit() {
		$('#adv_form').submit();
	}

jQuery(document).ready(init);
	//-->
</script>
</head>

<body>
<table class="maintable" cellpadding="0" align="center" cellspacing="0">
  <tr>
    <td height="70">

    <img src="/140205.1824/images/LM2.gif" alt="NanoStation Loco M2">
    
    </td>
    <td valign="bottom" align="right">

<img src="/140205.1824/images/airos_logo.png">
</td>
  </tr>
  <tr class="menu">
    <td height="26" style="white-space: nowrap;">
     <a href="ubnt.php"><img src="/140205.1824/images/ubnt.png" alt="UBNT" border="0"></a><a href="index.php"><img src="/140205.1824/images/main.png" alt="Main" border="0"></a><a href="link.php"><img src="/140205.1824/images/link.png" alt="Wireless" border="0"></a><a href="network.php"><img src="/140205.1824/images/net.png" alt="Network" border="0"></a><a href="advanced.php"><img src="/140205.1824/images/4dv_top.png" alt="Advanced" border="0"></a><a href="services.php"><img src="/140205.1824/images/srv.png" alt="Services" border="0"></a><a href="system.php"><img src="/140205.1824/images/system.png" alt="System" border="0"></a></td>
	<td align="right" valign="top" style="white-space: nowrap;">
		<select id="tools" onchange="showTool(this);">
			<option value="" selected>Tools:</option>
			<option value="signal_gui.php">Align Antenna...</option>
			
			<option value="survey.php?mode=tool">Site Survey...</option>
			<option value="discovery.php">Discovery...</option>
			
			<option value="pingtest.php">Ping...</option>
			<option value="traceroute.php">Traceroute...</option>
			<option value="sptest.php">Speed Test...</option>
			
			<option value="airview.php">airView...</option>
			
		</select>&nbsp;<a href="../main.php">  <input type="button" value="exit" > </a>
    </td>
  </tr>

  <tr>
    <td colspan="2" class="centr">
    <div id="errorpad">
<table cellspacing="0" cellpadding="0" id="errortbl" class="errortbl" >
<tr>
<td class="errorleft">&nbsp;</td>
<td class="errorcenter" valign="top">
    <div id="error"></div>
</td>
<td class="errorright">&nbsp;</td>
</tr>
</table>
</div>

    <br>
    <form id="adv_form" enctype="multipart/form-data" action="advanced.php" method="POST"
    	  onSubmit="return validateStandard(this, 'error');">
    <table border="0" cellpadding="0" cellspacing="0" class="linktable">

 <!-- Advanced wireless -->
      <tr><th colspan="3">Advanced Wireless Settings</th></tr>
	  <tr><td colspan="3" class="tdpad">&nbsp;</td></tr>


      <tr>
        <td class="f d">RTS Threshold: <span class="help"><a href="/140205.1824/help/en_US/rtstreshhold.html" rel="help">[?]</a></span></td>
        <td class="f-left" colspan="2"><input type="text" class="std_width" id="rts" name="rts" maxlength="4" size="5" value="off" req="1" maxvalue="2346" minvalue="0" realname="RTS Threshold ([0 - 2346])"/>
        	<input type="checkbox" id="rtsoff" name="rtsoff" value="off"
			checked onClick="handleOff(this, 'rts', 2346);">Off
        </td>
      </tr>
      <tr>
        <td class="f">Distance: <span class="help"><a href="/140205.1824/help/en_US/distance.html" rel="help">[?]</a></span></td>
        <td colspan="2" style="padding: 0px 0px 0px 0px;">
        <table style="padding: 0px 0px 0px 0px;" cellspacing="0"><tr>
        <td>
          <div class="slider" id="slider-1" tabIndex="1">
          	<input class="slider-input" id="slider-input-1" name="slider-input-1"/>
		  </div>
		</td>
        <td class="f-left"><input type="hidden" id="ackdistance" name="ackdistance" value="600"><input type="text" class="std_width" id="distance" size="5" maxlength="5"/> miles (<span id="distkm"></span> km)
                <input type="checkbox" id="autoack" name="autoack" value="enabled"
		checked
		>Auto Adjust
        </td>
	</tr></table>
       	</td>
      </tr>
      <tr style="display:none;">
        <td class="f">ACK Timeout:</td>
	<td class="f-left" colspan="2"><input type="text" class="std_width" id="acktimeout" name="acktimeout" size="5" value="27" req="1" minvalue="23" maxvalue="186" realname="ACK timeout"/> &nbsp;
	</td>
      </tr>


      <!-- aggregation  -->
      <tr>
        <td class="f">Aggregation: <span class="help"><a href="/140205.1824/help/en_US/aggregation.html" rel="help">[?]</a></span></td>
	<td class="f-left" colspan="2">
		<input type="text" class="std_width" id="aggr_frames" name="aggr_frames" align="right" req="1" value="32"
        		size="5" maxlength="2" realname="Aggregation Frames (1-32)" minValue="1" maxValue="32">
        		Frames&nbsp;
                <input type="text" class="std_width" id="aggr_bytes" name="aggr_bytes" align="right" req="1" value="50000"
        		size="6" maxlength="5" realname="Aggregation Bytes (2304-65535)" minValue="2304" maxValue="65535">
	        	Bytes
        <input type="checkbox" name="aggr_status" id="aggr_status" value="enabled"
        	onClick="aggregationStatusClicked();" checked> <label class="f" for="aggr_status">Enable</label>
	</td>
      </tr>


	<!-- #4662 tr>
		<td class="f">Performance Enhancement:</td>
		<td class="f-left" colspan="2">
			<div class="slider" id="slider-2" tabIndex="1">
				<input class="slider-input" id="slider-input-2" name="slider-input-2"/>
				<input type="hidden" id="qdur" name="qdur" value="40">
			</div>
		</td>
	</tr -->

      <!-- data rate -->
      <tr>
        <td class="f">Multicast Data: <span class="help"><a href="/140205.1824/help/en_US/multicastdata.html" rel="help">[?]</a></span></td>
	<td class="f-left" colspan="2"><input type="checkbox" name="mcast_status" value="enabled" id="mcast_status"
		checked>Allow All</td>
      </tr>

      <!-- AP mode multicast enhancement -->
      <tr>
        <td class="f">Multicast Enhancement: <span class="help"><a href="/140205.1824/help/en_US/multicastench.html" rel="help">[?]</a></span></td>
	<td class="f-left" colspan="2"><input type="checkbox" name="mc_enhance" value="enabled" id="mc_enhance"
		checked> Enable</td>
      </tr>



      <tr>
        <td class="f">Installer EIRP Control: <span class="help"><a href="/140205.1824/help/en_US/eirpctrl.html" rel="help">[?]</a></span></td>
	    <td class="f-left" colspan="2"><input type="checkbox" name="eirp_status" value="enabled" id="eirp_status"
	    > <label class="f" for="eirp_status">Enable</label>
	    </td>
      </tr>

	  <!-- tr>
        <td class="f">Anti-Noise Immunity:</td>
	    <td class="f-left" colspan="2"><input type="checkbox" name="ani_status" value="enabled" id="ani_status"
	    > <label class="f" for="ani_status">Enable</label>
	    </td>
      </tr -->
      <tr>
        <td class="f">Extra Reporting: <span class="help"><a href="/140205.1824/help/en_US/extrareporting.html" rel="help">[?]</a></span></td>
	    <td colspan="2"><input type="checkbox" name="mtikie" value="enabled" id="mtikie"
	    checked> <label class="f" for="mtikie">Enable</label>
	    </td>
      </tr>

      <tr>
        <td class="f">Client Isolation: <span class="help"><a href="/140205.1824/help/en_US/clientisolation.html" rel="help">[?]</a></span></td>
	    <td colspan="2"><input type="checkbox" name="client_isolation_status" id="client_isolation_status"
		value="disabled"
	    > <label class="f" for="client_isolation_status">Enable</label>
	    </td>
      </tr>


		<input name="ieee_mode" id="ieee_mode" type="hidden" value="11nght40">
                <input name="clksel" id="clksel" type="hidden" value="0">&nbsp;
      </td></tr>
      <tr>
        <td class="f d">Sensitivity Threshold, dBm: <span class="help"><a href="/140205.1824/help/en_US/senstreshhold.html" rel="help">[?]</a></span></td>
        <td class="f-left" colspan="2"><input type="text" class="std_width" id="rssi_sens" name="rssi_sens" maxlength="3" size="5" value="-96" req="1" maxvalue="-1" minvalue="-96" realname="Sersitivity Threshold [-96 ... -1]"/>
        	<input type="checkbox" id="rssi_sensoff" name="rssi_sensoff" value="off"
			checked onClick="handleOff(this, 'rssi_sens', -96);">Off
        </td>
      </tr>
      <tr><td colspan="3" class="tdpad">&nbsp;</td></tr>
      <tr><td colspan="3" class="tdpad">

 <!-- Advanced ethernet -->
      <tr><th colspan="3">Advanced Ethernet Settings</th></tr>
	  <tr><td colspan="3" class="tdpad">&nbsp;</td></tr>

      <tr>
        <td class="f">LAN0 Speed: <span class="help"><a href="/140205.1824/help/en_US/lanspeed.html" rel="help">[?]</a></span></td>
            <td colspan="2">
                <select id="eth0_speed" name="eth0_speed">
			<option value="0">Auto</option><option value="1">100Mbps-Full</option><option value="2">100Mbps-Half</option><option value="3">10Mbps-Full</option><option value="4">10Mbps-Half</option>
                </select>
            </td>
      </tr>






      <tr><td colspan="3" class="tdpad">&nbsp;</td></tr>
      <tr><th colspan="3">Signal LED Thresholds</th></tr>
      <tr><td colspan="3" class="tdpad">&nbsp;</td></tr>
      
	<tr class="threshold">
        <td class="f">
                <table style="width: 100%; padding: 0px;" cellpadding="0" cellspacing="0">
                <tr><td>&nbsp;</td></tr>
                <tr><td class="f">
                        Thresholds, dBm: <span class="help"><a href="/140205.1824/help/en_US/signaltreshold.html" rel="help">[?]</a></span>
                </td></tr>
                </table>
        </td>
	<td colspan="2">
                <table style="padding: 0px;" cellpadding="0" cellspacing="0"><tr>
                    
                        <td class="f" style="text-align: center;">&nbsp;&nbsp;LED1</td>
                    
                        <td class="f" style="text-align: center;">&nbsp;&nbsp;LED2</td>
                    
                        <td class="f" style="text-align: center;">&nbsp;&nbsp;LED3</td>
                    
                        <td class="f" style="text-align: center;">&nbsp;&nbsp;LED4</td>
                    
        	</tr>
                <tr>
                    
                        <td>-&nbsp;<input type="text" class="std_width i_threshold" id="led1" name="led1" value="94" size="2" maxlength="2" req="1" minvalue="0" maxvalue="95" realname="Signal LED1 [0-95]"/></td>
                    
                        <td>-&nbsp;<input type="text" class="std_width i_threshold" id="led2" name="led2" value="80" size="2" maxlength="2" req="1" minvalue="0" maxvalue="95" realname="Signal LED2 [0-95]"/></td>
                    
                        <td>-&nbsp;<input type="text" class="std_width i_threshold" id="led3" name="led3" value="73" size="2" maxlength="2" req="1" minvalue="0" maxvalue="95" realname="Signal LED3 [0-95]"/></td>
                    
                        <td>-&nbsp;<input type="text" class="std_width i_threshold" id="led4" name="led4" value="65" size="2" maxlength="2" req="1" minvalue="0" maxvalue="95" realname="Signal LED4 [0-95]"/></td>
                    
                </tr>
		</table>
        </td>
      </tr>


	  <tr><td colspan="3" class="tdpad">&nbsp;</td></tr>
      <tr><th colspan="3">&nbsp;</th></tr>
      <tr>
		<td colspan="3" class="change"><input type="submit" value="Change" /></td>
      </tr>
      </table>
    </form>
    </td>
  </tr>
  <tr> 
   <td colspan="2">
      <table cellpadding="0" align="center" cellspacing="0" width="100%">
      <tr>
	<td height="10" class="footlogo"><img src="/glogo.php" border="0"></td>
	<td height="10" class="foottext">&copy; Copyright 2006-2014 Ubiquiti Networks, Inc.</td>
      </tr>
      </table>
   </td>
  </tr>
</table>

</body>
</html>

