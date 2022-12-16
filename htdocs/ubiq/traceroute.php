
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>[NanoStation Loco M2] - Traceroute</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Pragma" content="no-cache">
<link rel="shortcut icon" href="/140205.1824/favicon.ico" >
<link href="/140205.1824/style.css" rel="stylesheet" type="text/css">
<link href="/140205.1824/traceroute.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="jsl10n.cgi"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/ajax.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/util.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/jsval.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/traceroute.js"></script>
<script type="text/javascript" language="javascript">
<!--
function init() {
}
-->
</script>
</head>
<body class="popup" onLoad="init()">
	<form name="traceroute" enctype="multipart/form-data" action="traceroute_action.cgi" method="POST" onSubmit="startTraceroute(this);return false;">
		<table cellspacing="0" cellpadding="0" align="center" class="popup">
			<tr><th colspan="3">Network Traceroute</th></tr>
    		<tr>
		<td colspan="3">
		<div id="tr_content">
		  <table cellspacing="0" cellpadding="0" class="tr_opt">
		  <tr>
		  <td class="h">Destination Host:</td>
		  <td style="width: 0px;"><input type="text" class="std_width" name="dst_host" id="dst_host"></td>
		  <td class="h"><input type="checkbox" name="resolve" id="resolve">Resolve IP Addresses</td>
		  </tr>
		  <tr>
		  <td colspan="5" align="center" style="vertical-align: top;">
		    <table cellspacing="0" cellpadding="0" class="trh">
		    <tr>
		    <td class="h" style="width: 15px;">#</td>
		    <td class="h" style="width: 170px;">Host</td>
		    <td class="h" style="width: 90px;">IP</td>
		    <td class="h">Responses</td>
		    </tr>
		    </table>
		    <div id="scroll_results" class="trc">
		    	<table cellspacing="0" cellpadding="0" id="tr_results">
			  <tbody><!-- output -->
			  </tbody>
			</table>
		    </div>
		  </td>
		  </tr>
		  <tr><th colspan="3">&nbsp;<input type="hidden" name="action" value="traceroute"></th></tr>
		  <tr>
		    <td id="tr_b" class="change" colspan="3">
		    <input type="button" id="tr_start" name="tr_start" value="Start" onClick="_traceroute(this.form);">
		    </td>
                  </tr>
		  </table>
		</div>
		</td>
		</table>
	</form>
</body>
</html>
