
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/DTD/loose.dtd">
<html>
<head>
<title>[NanoStation Loco M2] - Main</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta http-equiv="Cache-Control" content="no-cache">
<link rel="shortcut icon" href="/140205.1824/favicon.ico" >
<link href="/140205.1824/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="jsl10n.cgi"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/signal.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/util.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/index.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/js/jquery.cookie.js"></script>
<!--[if lte IE 8]><script type="text/javascript" src="/140205.1824/js/excanvas.js"></script><![endif]-->
<script type="text/javascript" src="/140205.1824/js/jquery.flot.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/common.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.blockUI.js"></script>

<script type="text/javascript" language="javascript">
//<!--
var status_reload_interval = 0;
var global = {
	'wlan_iface': "ath0",
	'chain_count': "2",
	'security': "none",
	'has_ht40' : true,
	'has_gps' : false,
	'is_3g_product' : false,
	'timeout' : 900,
	'_': '_'
};
var l10n_lang = {
	'Access Point WDS': "Access Point WDS",
	'Access Point': "Access Point",
	'Station WDS': "Station WDS",
	'Station': "Station",
	'Spectral Analyzer': "Spectral Analyzer",
	'Active': "Active",
	'clients': "clients",
	'Idle for': "Idle for",
	'Back to': "Back to",
	'Switching back to': "Switching back to",
	'in': "in",
	's': "s",

	'Bridge': "Bridge",
	'Router': "Router",
	'SOHO Router': "SOHO Router",
	'3G Router': "3G Router",

	'Auto': "Auto",
	'Lower': "Lower",
	'Upper': "Upper",
	'Enabled': "Enabled",
	'Peers': "Peers",
	'Disabled': "Disabled",
	'Connected': "Connected",
	'Not Connected': "Not Connected",	
	'Not Associated': "Not Associated",
	'Hidden SSID:': "Hidden SSID:",

	'wep': 'WEP',
	'wpa': 'WPA',
	'wpatkip': 'WPA-TKIP',
	'wpaaes': 'WPA-AES',
	'wpa2': 'WPA2',
	'wpa2tkip': 'WPA2-TKIP',
	'wpa2aes': 'WPA2-AES',
	'none': 'none',

	'day': 'day',
	'days': 'days',
	/* cable status */
	'Plugged': 'Plugged',
	'Unplugged': 'Unplugged',
	'Full': 'Full',
	'Half': 'Half',
	/* antennas */
	'Unknown': "Unknown",
	'Main': "Main",
	'Combined': "Combined",
	'Secondary': "Secondary",
	'Diversity': "Diversity",
	'Vertical': "Vertical",
	'Horizontal': "Horizontal",
	'Adaptive': "Adaptive",
	'External': "External",
	'Internal': "Internal",
	'Internal + External': "Internal + External",
	'Antenna 1': "Antenna 1",
	'Antenna 2': "Antenna 2",
	'Antenna 2': "Antenna 2",
	'Not detected': "Not detected",
	'Please insert SIM card': "Please insert SIM card",
	'SIM PIN required': "SIM PIN required",
	'SIM Card Blocked': "SIM Card Blocked",

	/* airmax priority */
	'None': "None",
	'High': "High",
	'Medium': "Medium",
	'Low': "Low",

	'_': '_' /* end marker */
};

function l10n_get(w) {
	var t = l10n_lang[w];
	if (t)
		return t;
	if (window.console && window.console.log)
		window.console.log('L10N ERROR: untranslated "' + w + '"');
	return w;
}

var fw_check = {
	enabled: true,
	fw_str: 'Firmware update {1} is available.',
	no_str: 'You have latest available firmware version.',
	dl_str: 'Go to Ubiquiti Networks <a href="http://www.ubnt.com/support/downloads" target="_blank"> downloads</a> page.'
};


$(document).ready(function() {
	$('#noscript').remove();
	$('#extrainfo span').addClass('initial_hide');
	$('#signalinfo').hide();

	$('#antennainfo').hide();

	reloadStatus();

	$('#extrainfo a').click( function(){
			$('#extrainfo a').removeClass('underline');
			$(this).addClass('underline');
			refreshContent($(this).attr('href'));
			return false;
	});

	$('#extrainfo span.all').removeClass('initial_hide');
	$('#extrainfo a:first').trigger('click');

	fwUpdateCheck(false, fw_check);
	security.check();
});

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
     <a href="ubnt.cgi"><img src="/140205.1824/images/ubnt.png" alt="UBNT" border="0"></a><a href="index.cgi"><img src="/140205.1824/images/main_top.png" alt="Main" border="0"></a><a href="link.cgi"><img src="/140205.1824/images/link.png" alt="Wireless" border="0"></a><a href="network.cgi"><img src="/140205.1824/images/net.png" alt="Network" border="0"></a><a href="advanced.cgi"><img src="/140205.1824/images/4dv.png" alt="Advanced" border="0"></a><a href="services.cgi"><img src="/140205.1824/images/srv.png" alt="Services" border="0"></a><a href="system.cgi"><img src="/140205.1824/images/system.png" alt="System" border="0"></a></td>
	<td align="right" valign="top" style="white-space: nowrap;">
		<select id="tools" onchange="showTool(this);">
			<option value="" selected>Tools:</option>
			<option value="signal_gui.cgi">Align Antenna...</option>
			
			<option value="survey.cgi?mode=tool">Site Survey...</option>
			<option value="discovery.cgi">Discovery...</option>
			
			<option value="pingtest.cgi">Ping...</option>
			<option value="traceroute.cgi">Traceroute...</option>
			<option value="sptest.cgi">Speed Test...</option>
			
			<option value="airview.cgi">airView...</option>
			
		</select>&nbsp;<input type="button" value="Logout" onClick="window.location.href='/logout.cgi'+'?'+(new Date().getTime());">
    </td>
  </tr>

  <tr>
<td colspan="2" class="centr">

<noscript id="noscript">You have disabled JavaScript in your browser, but the functionality of this page depends on it. Please, enable JavaScript and refresh this page.
</noscript>

<br>
	<table border="0" cellpadding="0" cellspacing="0" class="linktable">
	  <tr><th colspan="2">Status</th></tr>
	  <tr><td valign="top" style="width: 50%">
		<div class="fieldset" id="general_info">
		  <div id="hostinfo" class="row">
			<span class="label">Device Name:</span>
			<span class="value" id="hostname">&nbsp;</span>
		  </div>
		  <div id="netmodeinfo" class="row">
			<span class="label">Network Mode:</span>
			<span class="value" id="netmode">&nbsp;</span>
		  </div>
		  <div id="wmodeinfo" class="row">
			<span class="label">Wireless Mode:</span>
			<span class="value" id="wmode">&nbsp;</span>
		  </div>
		  <div id="astatusinfo" class="row">
			<span class="label">airView Status:</span>
			<span class="value" id="astatus">&nbsp;</span>
		  </div>
		  <div id="ssidinfo" class="row">
			<span class="label" id="essid_label">SSID:</span>
			<span class="value" id="essid">&nbsp;</span>
		  </div>
		  <div id="securityinfo" class="row">
			<span class="label">Security:</span>
			<span class="value" id="security">&nbsp;</span>
		  </div>
		  <div id="fwversioninfo" class="row">
			<span class="label">Version:</span>
			<span class="value" id="fwversion">&nbsp;</span>
		  </div>
		  <div id="uptimeinfo" class="row">
			<span class="label">Uptime:</span>
			<span class="value" id="uptime">&nbsp;</span>
		  </div>
		  <div id="dateinfo" class="row">
			<span class="label">Date:</span>
			<span class="value" id="date">&nbsp;</span>
		  </div>
		</div>

		<div class="fieldset" id="radioinfo">
		  <div id="freqinfo" class="row">
			<span class="label">Channel/Frequency:</span>
			<span class="value">
			  <span id="channel">&nbsp;</span>
			  <span>&nbsp;/&nbsp;</span>
			  <span id="frequency">&nbsp;</span>
			</span>
		  </div>
		  <div id="chanwidthinfo" class="row">
			<span class="label">Channel Width:</span>
			<span class="value">
			  <span id="wd">&nbsp;</span>
			  <span id="ext_chan"></span>
			</span>
		  </div>
		  <div id="ackinfo" class="row">
			<span class="label">Distance:</span>
			<span class="value" id="ack">&nbsp;</span>
		  </div>
		  <div id="chainsinfo" class="row">
			<span class="label">TX/RX Chains:</span>
			<span class="value" id="chains">&nbsp;</span>
		  </div>
		  <div id="antennainfo" class="row">
			<span class="label">Antenna:</span>
			<span class="value" id="antenna">&nbsp;</span>
		  </div>
		</div>
		<div class="fieldset" id="ifinfo" />
	  </td>
	  <td valign="top"  style="width: 50%">
		<div class="fieldset" id="cinfo">
		  <div id="apmacinfo" class="row">
			<span class="label">AP MAC:</span>
			<span class="value" id="apmac">&nbsp;</span>
		  </div>
		  <div id="signalinfo" class="row stainfo">
			<span class="label">Signal Strength:</span>
			<span class="value">
			  <span class="percentborder switchable"><div id="signalbar" class="mainbar">&nbsp;</div></span>
			  <span class="switchable">&nbsp;</span>
			  <span id="signal"></span>
			</span>
		  </div>
		  <div id="signal_chain" class="row initial_hide">
			<span class="label">Horizontal&nbsp;/&nbsp;Vertical:</span>
			<span class="value">
			 <span id="signal_0">&nbsp;</span>
			 <span>&nbsp;/&nbsp;</span>
			 <span id="signal_1">&nbsp;</span>
			 <span>&nbsp;dBm</span>
			</span>
		  </div>
		  <div id="coninfo" class="row apinfo">
			<span class="label">Connections:</span>
			<span class="value" id="count">&nbsp;</span>
		  </div>
		  <div id="nfinfo" class="row">
			<span class="label">Noise Floor:</span>
			<span class="value">
			  <span id="noisef"></span>
			</span>
		  </div>
		  <div id="ccqinfo" class="row">
			<span class="label">Transmit CCQ:</span>
			<span class="value">
			  <span id="ccq">&nbsp;</span>
			  <span>&nbsp;</span>
			</span>
		  </div>
		  <div id="rateinfo" class="row stainfo">
	        <span class="label">TX/RX Rate:</span>
			<span class="value">
			  <span id="txrate">&nbsp;nbsp;</span>
			  <span>&nbsp;/&nbsp;</span>
			  <span id="rxrate">&nbsp;</span>
			</span>
		  </div>
		</div>
		<div class="fieldset"/>
		<div class="fieldset" id="pollinfo">
		  <div id="pollstatusinfo" class="row">
			<span class="label">airMAX:</span>
			<span class="value" id="polling">&nbsp;</span>
		  </div>
		  <div id="pollprioinfo" class="row stapollinfo initial_hide">
			<span class="label">airMAX Priority:</span>
			<span class="value" id="pollprio">&nbsp;</span>
		  </div>
		  <div id="amqinfo" class="row pollinfo initial_hide">
			<span class="label">airMAX Quality:</span>
			<span class="value">
			  <span class="percentborder"><div id="amqbar" class="mainbar">&nbsp;</div></span>
			  <span>&nbsp;</span>
			  <span id="amq">&nbsp;</span>
			  <span>&nbsp;%</span>
			</span>
		  </div>
		  <div id="amcinfo" class="row pollinfo initial_hide">
	        <span class="label">airMAX Capacity:</span>
	        <span class="value">
			  <span id="amcborder" class="percentborder"><div id="amcbar" class="mainbar">&nbsp;</div></span>
			  <span>&nbsp;</span>
			  <span id="amc">&nbsp;</span>
			  <span>&nbsp;%</span>
			</span>
		  </div>
		</div>
		<div class="fieldset"/>
		<div class="fieldset" id="airselectinfo">
		  <div id="airselectsatusinfo" class="row">
			<span class="label">airSelect:</span>
			<span class="value" id="airselect">&nbsp;</span>
		  </div>
		  <div id="airselectintervalinfo" class="row airselectinfo initial_hide">
			<span class="label">Hop Interval:</span>
			<span class="value" id="airselectinterval">&nbsp;</span>
		  </div>
		</div>
		
		
		
		
		
		<div id="airgw_info" class="fieldset initial_hide">
			<div class="row">
				<span class="label">airMAX Gateway:</span>
				<span class="value"><a href="mng_airgw.cgi" target="_blank">Connected (Click to manage)</a></span>
			</div>
		</div>
	   </td>
	</tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr><th colspan="2">Monitor</th></tr>
	<tr>
	<td colspan="2" id="extrainfo">
	<span
	id="throughputgraph" class="all"><a href="throughput.cgi" target="extraFrame">Throughput</a> | </span><span
	id="stalist" class="apinfo"><a href="stalist.cgi" target="extraFrame">Stations</a> | </span><span
	id="stainfo" class="stainfo"><a href="stainfo.cgi" id="a_stainfo" name="a_stainfo" target="extraFrame">AP Information</a> | </span><span
	id="ifaces" class="all"><a href="ifaces.cgi" target="extraFrame">Interfaces</a> | </span><span
	id="ppp_info" class="router"><a href="pppinfo.cgi" target="extraFrame">PPPoE Information</a> | </span><span
	id="dhcpc_info"><a href="dhcpc.cgi" target="extraFrame">DHCP Client</a> | </span><span
	id="arp" class="all"><a href="arp.cgi" target="extraFrame">ARP Table</a> | </span><span
	id="brmacs" class="bridge"><a href="brmacs.cgi" target="extraFrame">Bridge Table</a> | </span><span
	id="sroutes" class="all"><a href="sroutes.cgi" target="extraFrame">Routes</a> | </span><span
	id="fwall"><a href="fw.cgi?netmode=" id="a_fw" target="extraFrame">Firewall</a> | </span><span
	id="pfw" class="router"><a href="pfw.cgi" target="extraFrame">Port Forward</a> | </span><span
	id="dhcp_leases" class="router"><a href="leases.cgi" target="extraFrame">DHCP Leases</a> | </span><span
	id="satelites" class="gpsinfo"><a href="gpsstats.cgi" target="extraFrame">GPS Details</a> | </span><span
	id="log" class="all"><a href="log.cgi" target="extraFrame">Log</a></span>
	</td>
	</tr>
	<tr>
	<td colspan="2">
<div id="extraFrame">
</div>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
           <td colspan="2">
           	<table cellpadding="0" align="center" cellspacing="0" width="100%">
                <tr>
           		<td height="10" class="footlogo"><img src="/glogo.cgi" border="0"></td>
	           	<td height="10" class="foottext">&copy; Copyright 2006-2014 Ubiquiti Networks, Inc.</td>
                </tr>
                </table>
           </td>
        </tr>
</table>
</body>
</html>
