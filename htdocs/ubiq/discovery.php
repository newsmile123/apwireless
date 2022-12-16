
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>[NanoStation Loco M2] - Discovery</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Pragma" content="no-cache">
<link rel="shortcut icon" href="/140205.1824/favicon.ico" >
<link href="/140205.1824/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="jsl10n.cgi"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript">

var mainTable;
var devices = [];
var curr_poll = 0;
var intervals = [[0, 500], [1000, 1000], [20000, 5000]];
var expire_after = 60000;
var ip_col = 6;

</script>
<script type="text/javascript" language="javascript" src="/140205.1824/discovery.js"></script>
</head>

<body class="popup">
<table cellspacing="0" cellpadding="0" align="center" class="popup" style="margin-top: 20px;">
	<tr><th>Device Discovery</th></tr>
	<tr>
		<td class="center">
			<span id="loader">Scanning, please wait...<br/>
				<img src="/140205.1824/images/ajax-loader.gif" />
			</span>

			<span id="results" class="initial_hide">
			<table id="devices" class="listhead dataTables_head" cellspacing="0" cellpadding="0" align="center">
				<thead>
				<tr>
					<th>MAC Address</th>
					<th>Device Name</th>
					<th>Mode</th>
					<th>SSID</th>
					<th>Product</th>
					<th>Firmware</th>
					<th>IP Address</th>
				</tr>
				</thead>
				<tbody />
			</table>
			</span>
		</td>
	</tr>
	<tr><th>&nbsp;</th></tr>
	<tr id="btn_row" class="initial_hide">
		<td class="change">
			<input type="button" id="scan_btn" onclick="window.location.reload()" value="Scan" />
		</td>
	</tr>
</table>

</body>
</html>
