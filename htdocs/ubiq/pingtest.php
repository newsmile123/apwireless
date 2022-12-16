
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>[NanoStation Loco M2] - Ping</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Pragma" content="no-cache">
<link rel="shortcut icon" href="/140205.1824/favicon.ico" >
<link href="/140205.1824/style.css" rel="stylesheet" type="text/css">
<link href="/140205.1824/pingtest.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="jsl10n.cgi"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.utils.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/ajax.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/util.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/jsval.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/system.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/pingtest.js"></script>
<script type="text/javascript" language="javascript">
<!--
var iplist;
function validateManualIP(id,name,value) {
	var o = document.getElementById('dst_addr_select');
	if (!o) return false;
	if (o.selectedIndex == 0) {
		return validateIP(value) && value != "0.0.0.0";
	}
	return true;
}
function setupValidation() {
        var o = document.getElementById('dst_addr_input');
        if (o) { o.req=1; o.callback='validateManualIP'; o.realname='Destination IP'; }
        o = document.getElementById('ping_count');
        if (o) { o.req=1; o.minvalue=1; o.maxvalue=10000;o.realname='Packet Count'; }
        o = document.getElementById('ping_size');
        if (o) { o.req=1; o.minvalue=1; o.maxvalue=32768;o.realname='Packet Size [1-32768]'; }
}
function _runPing(f) {
	if (validateStandard(f, 'error')) {
		runPing(f);
	}
}
function init() {
	iplist = new IPList('dst_addr_select','dst_addr_input','ip_refresh');
	setupValidation();
	$('#dst_addr_select').change(function() {
		$('#dst_addr_input').enable($('#dst_addr_select').val() == '0');
	});
}
-->
</script>
</head>
<body class="popup" onLoad="init();">
	<form name="pingtest" target="ping_results" enctype="multipart/form-data" action="pingtest_action.cgi" method="POST" onSubmit="_runPing(this);return false;">
		<table cellspacing="0" cellpadding="0" align="center" class="popup">
		<tr><th colspan="3">Network Ping</th></tr>
		<tr><td colspan="3"><div id="errorpad">
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
</td></tr>
		<tr>
		<td colspan="3">
		<div id="pt_content">
		  <table cellspacing="0" cellpadding="0" class="pt_opt">
		  <tr><td class="h">Select Destination IP:</td>
		  <td><select class="std_width" id="dst_addr_select" name="dst_addr_select"><option value="0">specify manually</option></select><img id="ip_refresh" src="/140205.1824/images/refresh.png " width="16" height="16"></td>
		  <td style="width:3em;">&nbsp;</td>
		  <td class="h">Packet Count:</td>
		  <td><input type="text" class="std_width" id="ping_count" name="ping_count" value="5" size="6"></td>
		  </tr>
		  <tr>
		  <td class="h">&nbsp;</td>
		  <td><input type="text" class="std_width" id="dst_addr_input" name="dst_addr_input" size="18"></td>
		  <td> </td>
		  <td class="h">Packet Size:</td>
		  <td><input type="text" class="std_width" id="ping_size" name="ping_size" value="56" size="6"></td>
		  </tr>
		  <tr>
		    <td colspan="5" align="center" style="vertical-align: top;">
			<table cellspacing="0" cellpadding="0" class="pingh">
				<tr>
					<td class="h" style="width: 180px;">Host</td>
					<td class="h" style="width: 140px;">Time</td>
					<td class="h" >TTL</td>
				</tr>
			</table>
			<div id="scroll_results" class="pingc">
			<table cellspacing="0" cellpadding="0" id="pingdata" class="pingdata">
				<tbody><!-- place for generated ping results -->
				</tbody>
			</table>
			</div>
			<table cellspacing="0" cellpadding="0" class="pingh">
			<tr>
				<td class="f" colspan="3">
					<span style="font-weight: normal;" id="status_rcv" class="status">0</span> of <span style="font-weight: normal;" id="status_sent" class="status">0</span> packets received, <span style="font-weight: normal;" id="status_loss" class="status">0</span><span style="font-weight: normal">%</span> loss
				</td>
			</tr>
			<tr>
			<td class="f">Min: 
				<span id="status_min" class="status">0</span> <strong>ms</strong></td>
			<td class="f">Avg: 
				<span id="status_avg" class="status">0</span> <strong>ms</strong></td>
			<td class="f">Max: 
				<span id="status_max" class="status">0</span> <strong>ms</strong></td>
			</tr>
			</table>

		    </td>
		  </tr>
		  <tr>
		  <th colspan="5">&nbsp;<input type="hidden" name="action" value="pingtest"></th>
                  </tr>
                  <tr>
		  <td colspan="5" class="change" id="pingb">
		  <input type="button" id="ping" name="ping" value="Start" onClick="_runPing(this.form);">
		  </td>
		  </tr>

		  </table>
		</div>
		</td>
		</tr>
		</table>
	</form>
</body>
</html>
