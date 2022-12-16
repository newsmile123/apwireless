
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>[NanoStation Loco M2] - Services</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Pragma" content="no-cache">
<link rel="shortcut icon" href="/140205.1824/favicon.ico" >
<link href="/140205.1824/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="jsl10n.php"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/util.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/jsval.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/system.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.utils.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.passwd.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.blockUI.js"></script>
<script language="javascript" type="text/javascript">
//<!--

var fw_check = {
	enabled: true,
	fw_str: 'Firmware update {1} is available.',
	no_str: 'You have latest available firmware version.',
	dl_str: 'Go to Ubiquiti Networks <a href="http://www.ubnt.com/support/downloads" target="_blank"> downloads</a> page.'
};


function doSubmit() {
	$('#svc_form').submit();
}

function showError(msg) {
	$("#errorpad").css("paddingTop", "10px");
	$("#error").text(msg);
	$("#errortbl").show();
}

function checkPorts() {
	function portVal(id) {
		return parseInt($(id).val());
	}

	var ports = [];

	if ($("#https_status").is(":checked"))
		ports.push({ "port" : portVal("#httpsport"), "name" : "HTTPS Server" });
	else
		ports.push({ "port" : portVal("#httpport"), "name" : "HTTP Server" });
	
	if ($("#snmpStatus").is(":checked"))
		ports.push({ "port" : 161, "name" : "SNMP Agent" });
	
	if ($("#ssh_status").is(":checked"))
		ports.push({ "port" : portVal("#sshport"), "name" : "SSH Server" });

	if ($("#telnetd_status").is(":checked"))
		ports.push({ "port" : portVal("#telnetport"), "name" : "Telnet Server" });
	
	if ($("#discovery_status").is(":checked"))
		ports.push({ "port" : 10001, "name" : "Discovery Service" });

	ports.sort(function(r, l) { return r.port - l.port; });

	var duplicates = [];
	for (var i = 0; i < ports.length - 1; ++i) {
		if (ports[i].port == ports[i + 1].port) {
			duplicates.push(ports[i].name);
			var curr = ports[i].port;
			while (++i < ports.length && ports[i].port == curr) {
				duplicates.push(ports[i].name);
			}
		}
	}

	var last = duplicates.pop();
	var message = duplicates.join(', ') + " and " + last + " services can not use the same source port.";
	return {
		"overlap" : duplicates.length > 0,
		"message" : message
	};
}

function validateServices(form) {
	var valid = validateStandard(form, 'error');
	if (!valid)
		return false;
	
	var ports = checkPorts();
	if (ports.overlap)
		showError(ports.message);
	return !ports.overlap;
}

$(document).ready(function() {
	pwdogStatusClicked();
	snmpStatusClicked();
	ntpStatusClicked();
	httpdStatusClicked();
	telnetStatusClicked();
	sshStatusClicked();
	syslogStatusClicked();
	dyndnsStatusClicked();
	$('.pwd').attr('autocomplete', 'off').passwd({
		label :  "Show",
		migrate_attrs : [ 'req', 'callback', 'realname' ]
	});

	fwUpdateCheck(false, fw_check);
	security.check();
});
// -->
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
     <a href="ubnt.php"><img src="/140205.1824/images/ubnt.png" alt="UBNT" border="0"></a><a href="index.php"><img src="/140205.1824/images/main.png" alt="Main" border="0"></a><a href="link.php"><img src="/140205.1824/images/link.png" alt="Wireless" border="0"></a><a href="network.php"><img src="/140205.1824/images/net.png" alt="Network" border="0"></a><a href="advanced.php"><img src="/140205.1824/images/4dv.png" alt="Advanced" border="0"></a><a href="services.php"><img src="/140205.1824/images/srv_top.png" alt="Services" border="0"></a><a href="system.php"><img src="/140205.1824/images/system.png" alt="System" border="0"></a></td>
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
		<form id="svc_form" enctype="multipart/form-data" action="services.php" method="POST"
			onSubmit="return validateServices(this);">
	<table class="linktable" cellspacing="0" cellpadding="0">
	<tr>
		<th colspan="2">Ping Watchdog</th>
		<td>&nbsp;</td>
		<th colspan="2">SNMP Agent</th>
	</tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr>
	<td class="f d">Ping Watchdog:</td>
	<td class="d"><input type="checkbox" name="pwdogStatus" value="enabled" id="pwdogStatus" onClick="pwdogStatusClicked();" > <label class="f" for="pwdogStatus">Enable</label></td>
	<td class="sep">&nbsp;</td>
	<td class="f d">SNMP Agent:</td>
	<td class="d"><input type="checkbox" name="snmpStatus" id="snmpStatus" value="enabled" onClick="snmpStatusClicked();" > <label class="f" for="snmpStatus">Enable</label></td>
	</tr>
	<tr>
	<td class="f">IP Address To Ping:</td>
	<td><input type="text" style="width: 145px;" name="pwdogHost" id="pwdogHost" realname="IP Address To Ping" req="1" callback="validatePwdogHost" value=""></td>
	<td class="sep">&nbsp;</td>
	<td class="f">SNMP Community:</td>
	<td><input type="text" style="width: 145px;" name="snmpCommunity" id="snmpCommunity" realname="SNMP Community" req="1" value="public"></td>
	</tr>
	<tr>
	<td class="f">Ping Interval:</td>
	<td class="f-left"><input type="text" class="f-left std_width" size="5" name="pwdogPeriod" id="pwdogPeriod" realname="Ping Interval" req="1" minvalue="0" value="300"> seconds
        </td>
        <td class="sep">&nbsp;</td>
	<td class="f">Contact:</td>
	<td><input type="text" style="width: 145px;" name="snmpContact" id="snmpContact" realname="SNMP Contact" req="1" value="">
	</td>
	</tr>
	<tr>
	<td class="f">Startup Delay:</td>
	<td class="f-left">
		<input type="text" class="f-left std_width" size="5" name="pwdogDelay" id="pwdogDelay"
		realname="Startup Delay [20-65535]" req="1"
		minvalue="20" maxvalue="65535"
		value="300"> seconds
	</td>
        <td class="sep">&nbsp;</td>
	<td class="f">Location:</td>
	<td><input type="text" style="width: 145px;" name="snmpLocation" id="snmpLocation" realname="SNMP Location" req="1" value=""></td>
	</tr>
	<tr>
	<td class="f">Failure Count To Reboot:</td>
	<td><input type="text" class="std_width" size="5" name="pwdogRetry" id="pwdogRetry" realname="Failure Count" req="1" minvalue="0" value="3"></td>
	<td colspan="3">&nbsp;</td>
	</tr>
	<tr>
	<td class="f">Save Support Info:</td>
	<td><input type="checkbox" name="pwdog_supp" value="enabled" id="pwdog_supp" ></td>
	<td colspan="3">&nbsp;</td>
	</tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr>
		<th colspan="2">Web Server</th>
		<td>&nbsp;</td>
		<th colspan="2">SSH Server</th>
	</tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr>
		<td class="f">Web Server:</td>
		<td>
			<input type="checkbox" id="httpd_status" name="httpd_status" value="enabled"
				checked
				onClick="httpdStatusClicked();" />
			<label class="f" for="httpd_status">Enable</label>
		</td>
	<td class="sep">&nbsp;</td>
	<td class="f">SSH Server:</td>
	<td><input type="checkbox" name="ssh_status" value="enabled" id="ssh_status" checked onClick="sshStatusClicked();"> <label class="f" for="ssh_status">Enable</label></td>
	</tr>
	<tr>
	<td class="f">Secure Connection (HTTPS):</td>
	<td><input type="checkbox" name="https_status" value="enabled" id="https_status" checked onClick="httpsStatusClicked();"> <label class="f" for="https_status">Enable</label></td>
	<td class="sep">&nbsp;</td>
        <td class="f">Server Port:</td>
        <td><input type="text" class="std_width i_sshd" maxlen="4" size="4" name="sshport" id="sshport"
        	realname="SSH Server Port:[1-65535]" req="1"
			value="22" minvalue="1" maxvalue="65535">
        </td>
	</tr>
	<tr>
	<td class="f">Secure Server Port:</td>
	<td><input type="text" class="std_width" maxlen="4" size="4" name="httpsport" id="httpsport"
		realname="HTTPS Server Port:[1-65535]" req="1"
		value="443" minvalue="1" maxvalue="65535">&nbsp;
	</td>
	<td class="sep">&nbsp;</td>
	<td class="f">Password Authentication:</td>
	<td><input type="checkbox" class="i_sshd" name="ssh_passwdauth" id="ssh_passwdauth"
		realname="Enable Password Authentication" value="enabled" checked  > <label class="f" for="ssh_passwdauth">Enable</label>
	</td>
	</tr>
	<tr>
	<td class="f">Server Port:</td>
	<td><input type="text" class="std_width" maxlen="4" size="4" name="httpport" id="httpport"
		realname="HTTP Server Port:[1-65535]" req="1"
		value="80" minvalue="1" maxvalue="65535">&nbsp;
	</td>
	<td class="sep">&nbsp;</td>
	<td class="f">Authorized Keys:</td>
	<td><input type="button" class="i_sshd" name="sshd_authkeys" id="sshd_authkeys" value="Edit..." onClick="openPage('sshd-authkeys.php');">
	</td>
	</tr>
	<tr>
		<td class="f">Session Timeout:</td>
		<td class="f-left">
			<input type="text" class="std_width" size="4"
				id="http_session_timeout" name="http_session_timeout"
				maxlen="4" req="1" minvalue="1" maxvalue="1440"
				realname="Session Timeout ([1 - 1440])"
				value="15" />&nbsp;minutes
		</td>
		<td class="sep">&nbsp;</td>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr>
		<th colspan="2">Telnet Server</th>
		<td>&nbsp;</td>
		<th colspan="2">NTP Client</th>
	</tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr>
	<td class="f">Telnet Server:</td>
	<td><input type="checkbox" name="telnetd_status" value="enabled" id="telnetd_status"  onClick="telnetStatusClicked();"> <label class="f" for="telnetd_status">Enable</label></td>
        <td class="sep">&nbsp;</td>
	<td class="f">NTP Client:</td>
	<td><input type="checkbox" name="ntpStatus" id="ntpStatus" value="enabled" onClick="ntpStatusClicked();" > <label class="f" for="ntpStatus">Enable</label></td>
	</tr>
	<tr>
		<td class="f">Server Port:</td>
		<td><input type="text" class="std_width" maxlen="4" size="4" name="telnetport" id="telnetport"
			realname="Telnet Server Port:[1-65535]" req="1"
			value="23" minvalue="1" maxvalue="65535">&nbsp;
        </td>
        <td class="sep">&nbsp;</td>
	<td class="f">NTP Server:</td>
	<td><input type="text" style="width: 145px;" name="ntpServer" id="ntpServer"
		realname="NTP Server" req="1" callback="validateNTPServer"
		value="0.ubnt.pool.ntp.org">
	</td>
	</tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr>
		<th colspan="2">Dynamic DNS</th>
		<td>&nbsp;</td>
		<th colspan="2">System Log</th>
	</tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr>
		<td class="f">Dynamic DNS:</td>
		<td><input type="checkbox" name="dyndnsstatus" value="enabled" id="dyndnsstatus"  onClick="dyndnsStatusClicked();"> <label class="f" for="dyndnsstatus">Enable</label></td>
        <td class="sep">&nbsp;</td>
		<td class="f">System Log:</td>
		<td><input type="checkbox" name="syslog_status" value="enabled" id="syslog_status"  onClick="syslogStatusClicked();"> <label class="f" for="syslog_status">Enable</label></td>
	</tr>
	<tr>
		<td class="f">Host Name:</td>
		<td><input type="text" style="width: 145px;" name="dyndnshostname" id="dyndnshostname" realname="Host Name" req="1" value=""></td>
        <td class="sep">&nbsp;</td>
		<td class="f">Remote Log:</td>
		<td><input type="checkbox" name="rsyslog_status" value="enabled" id="rsyslog_status"  onClick="rsyslogStatusClicked();"> <label class="f" for="rsyslog_status">Enable</label></td>
	</tr>
	<tr>
		<td class="f">Username:</td>
		<td><input type="text" style="width: 145px;" name="dyndnsusername" id="dyndnsusername" realname="Username" req="1" value=""></td>
        <td class="sep">&nbsp;</td>
		<td class="f">Remote Log IP Address:</td>
		<td><input type="text" style="width: 145px;" name="syslogip" id="syslogip" realname="Remote Log IP Address" req="1" callback="validateSyslogHost" value="">
	</tr>
	<tr>
		<td class="f">Password:</td>
		<td class="f"><input type="password" class="pwd" style="width: 145px;" name="dyndnspassword" id="dyndnspassword" realname="Password" req="1" value="" autocomplete="off"></td>
        <td class="sep">&nbsp;</td>
		<td class="f">Remote Log Port:</td>
		<td><input type="text" class="std_width" maxlen="4" size="4" name="syslogport" id="syslogport"
			realname="Remote Log Port:[1-65535]" req="1"
			value="514" minvalue="1" maxvalue="65535">
		</td>
	</tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr>
		<th colspan="2">Device Discovery</th>
		<td>&nbsp;</td>
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
        <tr>
		<td class="f">Discovery:</td>
		<td><input type="checkbox" name="discovery_status" value="enabled" id="discovery_status"
			checked> <label class="f" for="discovery_status">Enable</label>
		</td>
                <td class="sep">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
		<td class="f">CDP:</td>
		<td><input type="checkbox" name="cdp_status" value="enabled" id="cdp_status"
			checked> <label class="f" for="cdp_status">Enable</label>
		</td>
                <td class="sep">&nbsp;</td>
                <td colspan="2">&nbsp;</td>
        </tr>
        

	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr><th colspan="5">&nbsp;</th></tr>
	<tr><td colspan="5" class="change"><input type="submit" value="Change">&nbsp;</td></tr>
	</table>
        </form>
    </td>
  </tr>
  <tr> 
   <td colspan="2">
      <table cellpadding="0" align="center" cellspacing="0" width="100%">
      <tr>

	<td height="10" class="foottext">&copy; Copyright 2006-2014 Ubiquiti Networks, Inc.</td>
      </tr>
      </table>
   </td>
  </tr>
</table>

</body>
</html>

