
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>[NanoStation Loco M2] - Speed Test</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Pragma" content="no-cache">
<link rel="shortcut icon" href="/140205.1824/favicon.ico" >
<link href="/140205.1824/style.css" rel="stylesheet" type="text/css">
<link href="/140205.1824/speedtest.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="/140205.1824/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/js/jquery.utils.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/util.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/sptest.js"></script>
<script type="text/javascript" language="javascript" src="jsl10n.cgi"></script>

<head>

<body class="popup">
<form name="speedtest">

<table cellspacing="0" cellpadding="0" align="center" class="popup">
	<tr>
		<th colspan="3">Network Speed Test</th>
	</tr>
	<tr>
		<td colspan="3">
			<table cellspacing="0" cellpadding="0">
				<tr>
					<td>
						<table cellspacing="0" cellpadding="0" class="st_opt">
							<tr>
								<td class="f">Select Destination IP:</td>
								<td>
									<select class="std_width" id="dst_addr_select" name="dst_addr_select">
										<option value="0">specify manually</option>
									</select>
									<img id="ip_refresh" src="/140205.1824/images/refresh.png" width="16" height="16">
								</td>
							</tr>
							<tr>
								<td class="f">&nbsp;</td>
								<td><input type="text" class="std_width" id="dst_addr_input" name="dst_addr_input" size="18"></td>
							</tr>
							<tr>
								<td class="f">User:</td>
								<td><input type="text" class="std_width" id="auth_user" name="auth_user" size="18"></td>
							</tr>
							<tr>
								<td class="f">Password:</td>
								<td><input type="password" class="std_width" id="auth_password" name="auth_password" size="18" maxlength="8"></td>
							</tr>
							<tr>
								<td class="f">Remote WEB Port:</td>
								<td><input type="text" class="std_width" id="launcher_port" name="launcher_port" size="5" maxlength="5" value="80"></td>
							</tr>
							<tr>
								<td class="f">&nbsp;</td>
								<td class="f-left">
									<input type="checkbox" id="show_adv" name="show_adv">
									<label for="show_adv">Show Advanced Options</label>
								</td>
							</tr>
							<tr id="advanced1" style="display: none;">
								<td class="f">Direction:</td>
								<td>
									<select class="std_width" id="direction_select" name="direction">
										<option value="dx">duplex</option>
										<option value="rx">receive</option>
										<option value="tx">transmit</option>
									</select>
								</td>
							</tr>
							<tr id="advanced2" style="display: none;">
								<td class="f">Duration:</td>
								<td><input class="std_width" type="text" id="time_limit" name="time_limit" value="10" size="10" /> &nbsp;seconds</td>
							</tr>
						</table>
					</td>
					<td id="st_results">
						<fieldset>
							<legend>Test Results</legend>
							<table border="0" cellpadding="0" cellspacing="0">
								<tr>
									<td class="f-left">RX:</td>
									<td class="f" id="rx_results">N/A</td>
								</tr>
								<tr>
									<td class="f-left">TX:</td>
									<td class="f" id="tx_results">N/A</td>
								</tr>
								<tr>
									<td class="f-left">Total:</td>
									<td class="f" id="total_results">N/A</td>
								</tr>
							</table>
						</fieldset>
						<br />
						<span id="results" class="conn_warn"></span>
						<span id="loader" style="display: none; padding: 2px;">
							<img src="/140205.1824/images/ajax-loader.gif" />
							<br/>
							Running, please wait...
						</span>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr><td colspan="3"><br>
	<div class="roundmsg_box">
	   <div class="roundmsg_top"><div></div></div>
	      <div class="roundmsg_content">
	         Warning! If traffic shaping is enabled on either device the speed test results will be limited accordingly.
	      </div>
	   <div class="roundmsg_bottom"><div></div></div>
	</div><td>
        </tr>
	<tr>
		<th colspan="3">&nbsp;</th>
	</tr>
	<tr>
		<td colspan="3" id="run">
			<input id="runtest" type="submit" value="Run Test">
		</td>
	</tr>
</table>

</form>
</body>

</html>
