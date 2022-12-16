<?php 
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/DTD/loose.dtd">
<html>
<head>
<title>[NanoStation Loco M2] - Wireless</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Pragma" content="no-cache">
<link rel="shortcut icon" href="/140205.1824/favicon.ico" >
<link href="/140205.1824/style.css" rel="stylesheet" type="text/css">
<link href="/140205.1824/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="/140205.1824/help.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jsl10n.php"></script>
<script type="text/javascript" src="/140205.1824/slider-min.js"></script>
<script type="text/javascript" src="/140205.1824/jsval.js"></script>
<script type="text/javascript" src="/140205.1824/util.js"></script>
<script type="text/javascript" src="/140205.1824/network.js"></script>
<script type="text/javascript" language="javascript1.2" src="/140205.1824/slink.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.ui.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.passwd.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.utils.js"></script>
<script type="text/javascript" src="/140205.1824/help.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.blockUI.js"></script>
<link type="text/css" rel="StyleSheet" href="/140205.1824/bluecurve.css" />
<script type="text/javascript">
//<!--
var radio_chains = 2;

/* regdomain 643 -B -G -S  -r -a -j -w 3 -b 0 -s 2 */
full_regdomain = [

"Russia (RU, 0x283, 643) FCC3_WORLD (0x3b, 59)",
"2412   1 G 20 20.0  3  0  1",
"2417   2 G 20 20.0  3  0  1",
"2422   3 G 20 20.0  3  0  1",
"2427   4 G 20 20.0  3  0  1",
"2432   5 G 20 20.0  7  0  1",
"2437   6 G 20 20.0  7  0  1",
"2442   7 G 20 20.0  7  0  1",
"2447   8 G 20 20.0  7  0  1",
"2452   9 G 20 20.0  7  0  1",
"2457  10 G 20 20.0  5  0  1",
"2462  11 G 20 20.0  5  0  1",
"2467  12 G 20 20.0  5  0  1",
"2472  13 G 20 20.0  5  0  1",
"2412   1 B 20 20.0  0  0  1",
"2417   2 B 20 20.0  0  0  1",
"2422   3 B 20 20.0  0  0  1",
"2427   4 B 20 20.0  0  0  1",
"2432   5 B 20 20.0  0  0  1",
"2437   6 B 20 20.0  0  0  1",
"2442   7 B 20 20.0  0  0  1",
"2447   8 B 20 20.0  0  0  1",
"2452   9 B 20 20.0  0  0  1",
"2457  10 B 20 20.0  0  0  1",
"2462  11 B 20 20.0  0  0  1",
"2467  12 B 20 20.0  0  0  1",
"2472  13 B 20 20.0  0  0  1",
"2412   1 G 10 20.0  1  0  1",
"2417   2 G 10 20.0  1  0  1",
"2422   3 G 10 20.0  1  0  1",
"2427   4 G 10 20.0  1  0  1",
"2432   5 G 10 20.0  1  0  1",
"2437   6 G 10 20.0  1  0  1",
"2442   7 G 10 20.0  1  0  1",
"2447   8 G 10 20.0  1  0  1",
"2452   9 G 10 20.0  1  0  1",
"2457  10 G 10 20.0  1  0  1",
"2462  11 G 10 20.0  1  0  1",
"2467  12 G 10 20.0  1  0  1",
"2472  13 G 10 20.0  1  0  1",
"2412   1 G  5 20.0  1  0  1",
"2417   2 G  5 20.0  1  0  1",
"2422   3 G  5 20.0  1  0  1",
"2427   4 G  5 20.0  1  0  1",
"2432   5 G  5 20.0  1  0  1",
"2437   6 G  5 20.0  1  0  1",
"2442   7 G  5 20.0  1  0  1",
"2447   8 G  5 20.0  1  0  1",
"2452   9 G  5 20.0  1  0  1",
"2457  10 G  5 20.0  1  0  1",
"2462  11 G  5 20.0  1  0  1",
"2467  12 G  5 20.0  1  0  1",
"2472  13 G  5 20.0  1  0  1",
"2414  31 G 20 20.0  3  1  1",
"2419  32 G 20 20.0  3  1  1",
"2424  33 G 20 20.0  3  1  1",
"2429  34 G 20 20.0  3  1  1",
"2434  35 G 20 20.0  7  1  1",
"2439  36 G 20 20.0  7  1  1",
"2444  37 G 20 20.0  7  1  1",
"2449  38 G 20 20.0  7  1  1",
"2454  39 G 20 20.0  7  1  1",
"2459  40 G 20 20.0  5  1  1",
"2464  41 G 20 20.0  5  1  1",
"2469  42 G 20 20.0  5  1  1",
"2474  43 G 20 20.0  5  1  1",
"2414  31 B 20 20.0  0  0  1",
"2419  32 B 20 20.0  0  0  1",
"2424  33 B 20 20.0  0  0  1",
"2429  34 B 20 20.0  0  0  1",
"2434  35 B 20 20.0  0  0  1",
"2439  36 B 20 20.0  0  0  1",
"2444  37 B 20 20.0  0  0  1",
"2449  38 B 20 20.0  0  0  1",
"2454  39 B 20 20.0  0  0  1",
"2459  40 B 20 20.0  0  0  1",
"2464  41 B 20 20.0  0  0  1",
"2469  42 B 20 20.0  0  0  1",
"2474  43 B 20 20.0  0  0  1",
"2414  31 G 10 20.0  1  1  1",
"2419  32 G 10 20.0  1  1  1",
"2424  33 G 10 20.0  1  1  1",
"2429  34 G 10 20.0  1  1  1",
"2434  35 G 10 20.0  1  1  1",
"2439  36 G 10 20.0  1  1  1",
"2444  37 G 10 20.0  1  1  1",
"2449  38 G 10 20.0  1  1  1",
"2454  39 G 10 20.0  1  1  1",
"2459  40 G 10 20.0  1  1  1",
"2464  41 G 10 20.0  1  1  1",
"2469  42 G 10 20.0  1  1  1",
"2474  43 G 10 20.0  1  1  1",
"2414  31 G  5 20.0  1  1  1",
"2419  32 G  5 20.0  1  1  1",
"2424  33 G  5 20.0  1  1  1",
"2429  34 G  5 20.0  1  1  1",
"2434  35 G  5 20.0  1  1  1",
"2439  36 G  5 20.0  1  1  1",
"2444  37 G  5 20.0  1  1  1",
"2449  38 G  5 20.0  1  1  1",
"2454  39 G  5 20.0  1  1  1",
"2459  40 G  5 20.0  1  1  1",
"2464  41 G  5 20.0  1  1  1",
"2469  42 G  5 20.0  1  1  1",
"2474  43 G  5 20.0  1  1  1",
""];

var cc_dialog = $('<div/>');
var fixer = new ieee_mode_fixer("11nght40".toLowerCase(), "0");
var ieee_mode = fixer.getIEEEMode();
var clksel = fixer.getClkSel();
var old_clksel = clksel;
var extchannel = fixer.getExtChannel();

var chanshift="0";
// Channel will be set depending on wireless mode
var rate="15";
var mcast_rate="12";
var chan_freq="0";
var obey = 'enabled' == 'enabled';
var is_ap = '2' == '2';

var txpower_max = 23;
if (txpower_max < 1)
{
	txpower_max = 26;
}
var radio_low_txpower_mode = 0;
var txpower = 12;
var antenna_gain = 8;
var cable_loss = 0;
var txpower_offset = 2;
var low_txpower_atten = 0;
var low_txpower_limit = 0;
var txpower_regdomain_limit = -1;
var country = "643";
var unii_locked = false;
var unii_supported = false;
var dfs_lock = false;
if ((country == 840 || country == 630 || country == 124)) {
        if (!unii_supported)
        	dfs_lock = true;
        else {
		if (country != 124)
       	        	dfs_lock = unii_locked;
        }
}

var mac_clone = "";
var polling = 'disabled' == 'enabled';
var polling_fh = '0' == '1';
var select_max_rate = '' == '1';

var rg_data = parse_full_regdomain(full_regdomain);
var regdomain = rg_data.regdomain;
var sta_power = init_sta_power(regdomain);

var globals = {
	chanbw : 0,
	supported_chanbw : 550293209744,
	i18n : { ht40_label : '40 MHz' }
};

var fw_check = {
	enabled: true,
	fw_str: 'Firmware update {1} is available.',
	no_str: 'You have latest available firmware version.',
	dl_str: 'Go to Ubiquiti Networks <a href="http://www.ubnt.com/support/downloads" target="_blank"> downloads</a> page.'
};


function doSubmit() {
	$('#this_form').submit();
}

var ieee_modes =
{

	'11naht' : 'A/N mixed',
	'11nght' : 'B/G/N mixed'

};

function init_ieee_mode(regdomain, value)
{
	var select = document.getElementById("ieee_mode_select");
	var options;
	var ieee_mode;

	if (!select)
	{
		return value;
	}
	options = select.options;
	options.length = 0;
	for (ieee_mode in ieee_modes)
	{
		if (regdomain[getRegdomainMode(ieee_mode)])
		{
			options[options.length] = new Option(ieee_modes[ieee_mode],
				ieee_mode, false, value == ieee_mode);
		}
	}
	if (value == 'auto') {

		clksel = 'E';

	}

	if (options.length < 2) $('#ieee_mode_select').disable();

	return options.length ? select.options[select.selectedIndex].value : value;
}

function init_ext_channels(regdomain, ieee_mode, clksel, chanshift, chan_freq, value) {
	var select;
	var options;
	var i;
	var mode;
	var channels;
	var chan = null;

	var ext;

	select = document.getElementById("extchannel_select");
	if (!select) {
		return value;
	}
	mode = getRegdomainMode(ieee_mode);

	if (!regdomain[mode] || !regdomain[mode][clksel]) {
		return value;
	}
	channels = regdomain[mode][clksel];
	chan = get_channel_by_freq(channels, chan_freq);

	options = select.options;
	options.length = 0;

	if (clksel != "E" || !chan) {
		options[options.length] = new Option("None",
			"", false, true);
	} else {
		ext = channels[chan][3];
		if ((ext & 3) == 3) {
			options[options.length] = new Option("Upper Channel",
				"plus", false, value == "plus");
		}
		if ((ext & 5) == 5) {
			options[options.length] = new Option("Lower Channel",
				"minus", false, value == "minus");
		}
	}
	setDisabled(select, options.length < 2);
	return options.length ? select.options[select.selectedIndex].value : value;
}

function adjustRate(rate, multiplier) {

        return ""+rate;

}

function reinit_form(level, leave_rates)
{
	var new_rate_multiplier = 1.0;
	switch (level)
	{
	case 0: // reinit All
		ieee_mode = init_ieee_mode(regdomain, ieee_mode);
	case 1: // reinit on ieee_mode change
		clksel = init_clksel(regdomain, ieee_mode, clksel, globals.chanbw);
	case 2: // reinit on clksel change
		new_rate_multiplier = calculateNewRateMultiplier(old_clksel, clksel);
		// TODO: check this below...
		fix_turbo_settings(ieee_mode, clksel);
		rate = adjustRate(rate, new_rate_multiplier);
		if (!leave_rates)
		{
			rate = init_rates(regdomain, ieee_mode, clksel, rate, "rate", select_max_rate);
			if (level != 0) {
				security = document.getElementById("security");
				onSecurity(security, false);
			}
		}
		// Set to lowest multicast on mode change.
		mcast_rate = adjustMulticastRate(level == 1 ? 0 : mcast_rate, new_rate_multiplier, "rate");
		setMaxrate('rate', 'maxrate');
	case 3: // reinit on chanshift change
		var hideIndoor = false;
		if ($('#hideindoor_chk').length > 0 && $('#hideindoor_chk').prop('checked'))
			hideIndoor = true;
		chan_freq = init_frequencies(regdomain, ieee_mode, clksel, chanshift, chan_freq, level == 3, hideIndoor);
	case 4: // reinit on toggle obey
		if (level != 2 && level != 3)
			init_power(regdomain, sta_power, ieee_mode, clksel, chan_freq);
		else if (level == 3)
			txpower_regdomain_limit = getRegdomainPower(regdomain, sta_power, ieee_mode, clksel, chan_freq);

		extchannel = init_ext_channels(regdomain, ieee_mode, clksel, chanshift, chan_freq, extchannel);
		document.getElementById("extchannel").value = (extchannel == null ? "" : extchannel);

	}
}

function init_common() {
	$(document).bind('rate_list_updated', function() {
		if (typeof filterRates.all != 'undefined')
			delete filterRates.all;
	});
	$(document).bind('frequencies_updated', updateFreqList);

	$('#wmode').val("ap");
	$('#country_ctrl').val(country);
	if (country == 511) {
		$('.obey_regulatory').hide();
		obey = false;
		globals.supported_chanbw = (1 << 2) | (1 << 4) | (1 << 7) | (1 << 9) | (1 << 19) | (1 << 24) | (1 << 29);
		globals.supported_chanbw+= 0x8000000000;
	}
	$('#chanshift').val(chanshift);
       	$('#antenna').val("4");
       	$('#antenna_gain').val("8");
        $("#antenna_gain").bind("change", on_antenna_gain_change);
       	$('#cable_loss').val("0");
        $("#cable_loss").bind("change", on_cable_loss_change);

	createTxPowerSlider(txpower_max);
	reinit_form(0);

	$('#security').val("none");
	var security = document.getElementById("security");
	onSecurity(security, false);

	$('#wpa_auth').val("WPA-PSK");
	$('#wpa_eap').val("TTLS");
	var wpa_auth = document.getElementById("wpa_auth");


	$('#wep_key_length').val("wep64");
	$('#wep_key_id').val("1");
	$('#wep_key_type').val("1");

	selectRadio("authtype", "1");
	$('.pwd').attr('autocomplete', 'off').passwd({
		label :  "Show",
		migrate_attrs : [ 'req', 'callback', 'realname' ]
	});

	var show_dfs =
		rg_data.has_dfs && !requiresCE(country) && country != 756 &&
		country != 840 && country != 124 && country != 630 && country != 764;
	$('#dfs_row').toggle(show_dfs);

        $('#radius_mac_acl_format').val("");
	chooseWPA(wpa_auth, false);
}

function is_changeable_country(ccode) {
	
	if (requiresCE(ccode))
		return false;
        return true;
}

function change_country(cc) {
        cc_dialog.dialog("open");
}

$(document).ready(function(){
   	cc_dialog.load('/140205.1824/cc_change.php'+'?'+Math.random()*Math.random());

	init_common();
	toggleMACACL();
	jQuery("#hidessid_chk").bind('click', function(){
		jQuery("#hidessid").val(this.checked ? "enabled" : "disabled");
	});
	
	if (jQuery("#hideindoor_chk").length > 0) {
		jQuery("#hideindoor_chk").bind('click', function() {
			chan_freq = init_frequencies(regdomain, ieee_mode, clksel, chanshift, chan_freq, false, $('#hideindoor_chk').prop('checked'));
		});
	}

	toggleScanChannels();

	$('#this_form').submit(function() {
		if ($('#country_ctrl').val() == "0" && 
                	($('#country').val() == "511" || 
                	 $('#country').val() == "891" || 
                         $('#country').val() == "0"
                        )
                   ) {
			$("#errorpad").css("paddingTop", "10px");
			$("#error").text("Please select your country.");
			$("#errortbl").show();
	                return false;
        	}
        
		if (!$('#channel_scan_list').is(':checked')) {
			var scan_list = $('#scan_channels').val();
			$(this).append('<input type="hidden" name="scan_channels" value="' + scan_list + '"/>');
		}

		$(this).append('<input type="hidden" name="chanbw" value="' + globals.chanbw + '"/>');
		if ($('#obey_regulatory_checkbox').is(':disabled')) {
			$(this).append('<input type="hidden" name="obey_regulatory_status" value="' + (obey ? "enabled" : "disabled") + '"/>');
		}
	});

	$(document).bind('obey_toggled', function() {
		obey = $('#obey_regulatory_checkbox').is(':checked'); // !! global
		if (obey) {
			var value = $('#scan_channels').val();
			var scan_channels = get_current_scan_channels(value);
			if (scan_channels.length > 0) {
				var all_channels = get_scan_channels(regdomain, ieee_mode, clksel, chanshift, obey, false, dfs_lock);
				var new_channels = [], i;
				for (i = 0; i < scan_channels.length; ++i)
				{
					if ($.inArray(scan_channels[i], all_channels) != -1)
						new_channels.push(scan_channels[i]);
				}
				var new_val = new_channels.join(',');
				if (value != new_val)
					$('#scan_channels').val(new_val);
			}
		}
	});

	cc_dialog.attr('title', "Change Country");
	if ($("#country_ctrl").is(':visible')) {
		var pos = $("#country_ctrl").position();
		var y = pos.top - $(document).scrollTop();
		cc_dialog.dialog(
		{
                	autoOpen: false,
			bgiframe: true,
			modal : true,
			height : '360',
			width: 400,
			resizable : false,
                        position: ['center', y],
			buttons: {
				"Accept": function() { 
                                	if (!$('#agreed').is(":checked")) {
                                        	$('#errmsg').html("To change country, you must agree to<br/>terms of use.");
                                                $('#errmsg').show();
                                        	return false;
                                        }
                                        if ($('#country_select').val() == 0) {
                                        	$('#errmsg').html("Please select your country.");
                                                $('#errmsg').show();
                                        	return false;
                                        }
                                        $('#country').val($('#country_select').val());
                                	$(this).dialog("close");
                                        $('#agreed').attr("checked", false);
                                        $('#country_ctrl').change();
                                        return true;
                                },
				"Cancel": function() { 
                                	$(this).dialog("close"); 
                                        $('#agreed').attr("checked", false);
                                        $('#errmsg').hide();
                                        return true;
                                }
			}
		});
	}
	var state = is_changeable_country(country);
   	$('#change_ccode').toggle(state);

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
     <a href="ubnt.php"><img src="/140205.1824/images/ubnt.png" alt="UBNT" border="0"></a><a href="index.php"><img src="/140205.1824/images/main.png" alt="Main" border="0"></a><a href="link.php"><img src="/140205.1824/images/link_top.png" alt="Wireless" border="0"></a><a href="network.php"><img src="/140205.1824/images/net.png" alt="Network" border="0"></a><a href="advanced.php"><img src="/140205.1824/images/4dv.png" alt="Advanced" border="0"></a><a href="services.php"><img src="/140205.1824/images/srv.png" alt="Services" border="0"></a><a href="system.php"><img src="/140205.1824/images/system.png" alt="System" border="0"></a></td>
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
			
		</select>&nbsp;<input type="button" value="Logout" onClick="window.location.href='/logout.php'+'?'+(new Date().getTime());">
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
    <FORM method="post" id="wirelessB" ACTION="ap2.php">
    <table cellpadding="0" cellspacing="0" class="linktable">
      <tr><th colspan="4"><input type="hidden" id="ackdistance" name="ackdistance" value="600"><input type="hidden" id="cc" name="cc" value="changed" disabled="disabled">Basic Wireless Settings</th></tr>
	  <tr><td colspan="4" class="tdpad">&nbsp;</td></tr>
      <!-- wireless link mode -->
      <tr>
        <td class="f d">Wireless Mode:<span class="help">
            <!--<a href="/140205.1824/help/en_US/wmode.html" rel="help">[?]</a></span>-->
        </td>
        <td>
	  <select id="wmode" name="wmode" req="1" realname="Wireless Mode:" onChange="onChangeAPSubmit();">
	    <option value="sta" selected>Station</option>
	    <option value="ap">Access Point</option>
	    <option value="aprepeater">AP-Repeater</option>
	  </select>
	  </td>
	  <td class="f-left" colspan="2">
&nbsp;
	</td>
      </tr>
      <!-- WDS Peers -->
      
      <!-- WDS -->
      <tr>
        <td class="f">WDS (Transparent Bridge Mode):</td>
	<td class="f-left" colspan="3">
	  <input type="checkbox" name="wds_chkbox" id="wds_chkbox" value="enabled"
	  	>
	  	<label for="wds_chkbox">Enable</label>
	</td>
      </tr>
      
      <!-- SSID -->
      <tr>
        <td class="f">SSID:</td>
        <td><input type="text"  class="config" id="essid" regexp="^[ -~]{0,32}$" maxlength="32" req="1"  name="ssid2"  value="<?=(isset($_SESSION['ap']['SSID2'])?$_SESSION['ap']['SSID2']:'')?>"/></td>
	</td>
	<td class="f-left" colspan="2">
	<input type="checkbox" name="hidessid_chk" id="hidessid_chk" >
	<label for="hidessid_chk">Hide SSID</label></td>
      </tr>
	   <tr>
        <td class="f">Mac-address:</td>
        <td><input type="text"  class="config"  regexp="^[ -~]{0,32}$" maxlength="32" req="1"  name="mac2"  value="<?=(isset($_SESSION['ap']['mac2'])?$_SESSION['ap']['mac2']:'')?>"/></td>
	</td>
	
      </tr>
	  
	  
      <tr>
        <!-- country code -->
        <td class="f">Country Code:</td>
        <td colspan="3" class="f-left">
	  <select id="country_ctrl" size="1" name="country_ctrl" onChange="onChangeAPSubmit();" disabled="disabled">

        	<option value="0">Select Your Country</option>
	<option value="8">Albania</option>
	<option value="12">Algeria</option>
	<option value="32">Argentina</option>
	<option value="51">Armenia</option>
	<option value="533">Aruba</option>
	<option value="36">Australia</option>
	<option value="40">Austria</option>
	<option value="31">Azerbaijan</option>
	<option value="48">Bahrain</option>
	<option value="50">Bangladesh</option>
	<option value="52">Barbados</option>
	<option value="112">Belarus</option>
	<option value="56">Belgium</option>
	<option value="84">Belize</option>
	<option value="68">Bolivia</option>
	<option value="70">Bosnia and Herzegovina</option>
	<option value="76">Brazil</option>
	<option value="96">Brunei Darussalam</option>
	<option value="100">Bulgaria</option>
	<option value="116">Cambodia</option>
	<option value="124">Canada</option>
	<option value="152">Chile</option>
	<option value="156">China</option>
	<option value="170">Colombia</option>
	<option value="188">Costa Rica</option>
	<option value="191">Croatia</option>
	<option value="196">Cyprus</option>
	<option value="203">Czech Republic</option>
	<option value="208">Denmark</option>
	<option value="214">Dominican Republic</option>
	<option value="218">Ecuador</option>
	<option value="818">Egypt</option>
	<option value="222">El Salvador</option>
	<option value="233">Estonia</option>
	<option value="246">Finland</option>
	<option value="250">France</option>
	<option value="268">Georgia</option>
	<option value="276">Germany</option>
	<option value="300">Greece</option>
	<option value="304">Greenland</option>
	<option value="308">Grenada</option>
	<option value="316">Guam</option>
	<option value="320">Guatemala</option>
	<option value="332">Haiti</option>
	<option value="340">Honduras</option>
	<option value="344">Hong Kong</option>
	<option value="348">Hungary</option>
	<option value="352">Iceland</option>
	<option value="356">India</option>
	<option value="360">Indonesia</option>
	<option value="368">Iraq</option>
	<option value="372">Ireland</option>
	<option value="376">Israel</option>
	<option value="380">Italy</option>
	<option value="388">Jamaica</option>
	<option value="392">Japan</option>
	<option value="400">Jordan</option>
	<option value="398">Kazakhstan</option>
	<option value="404">Kenya</option>
	<option value="410">Korea Republic</option>
	<option value="414">Kuwait</option>
	<option value="428">Latvia</option>
	<option value="422">Lebanon</option>
	<option value="438">Liechtenstein</option>
	<option value="440">Lithuania</option>
	<option value="442">Luxembourg</option>
	<option value="446">Macau</option>
	<option value="807">Macedonia</option>
	<option value="458">Malaysia</option>
	<option value="470">Malta</option>
	<option value="484">Mexico</option>
	<option value="492">Monaco</option>
	<option value="499">Montenegro</option>
	<option value="504">Morocco</option>
	<option value="524">Nepal</option>
	<option value="528">Netherlands</option>
	<option value="530">Netherlands Antilles</option>
	<option value="554">New Zealand</option>
	<option value="566">Nigeria</option>
	<option value="578">Norway</option>
	<option value="512">Oman</option>
	<option value="586">Pakistan</option>
	<option value="591">Panama</option>
	<option value="598">Papua New Guinea</option>
	<option value="604">Peru</option>
	<option value="608">Philippines</option>
	<option value="616">Poland</option>
	<option value="620">Portugal</option>
	<option value="630">Puerto Rico (U.S. territory)</option>
	<option value="634">Qatar</option>
	<option value="642">Romania</option>
	<option value="643" selected>Russia</option>
	<option value="682">Saudi Arabia</option>
	<option value="688">Serbia</option>
	<option value="702">Singapore</option>
	<option value="703">Slovakia</option>
	<option value="705">Slovenia</option>
	<option value="710">South Africa</option>
	<option value="724">Spain</option>
	<option value="144">Sri Lanka</option>
	<option value="752">Sweden</option>
	<option value="756">Switzerland</option>
	<option value="158">Taiwan</option>
	<option value="764">Thailand</option>
	<option value="780">Trinidad And Tobago</option>
	<option value="788">Tunisia</option>
	<option value="792">Turkey</option>
	<option value="804">Ukraine</option>
	<option value="784">United Arab Emirates</option>
	<option value="826">United Kingdom</option>
	<option value="840">United States</option>
	<option value="858">Uruguay</option>
	<option value="860">Uzbekistan</option>
	<option value="862">Venezuela</option>
	<option value="704">Viet Nam</option>
	<option value="887">Yemen</option>
	<option value="716">Zimbabwe</option>


          </select>
          <input type="button" id="change_ccode" value="Change..." onClick="change_country($('#country'));"/>
          <input type="hidden" name="old_country" id="old_country" value="643">
          <input type="hidden" id="country" name="country" value="643">
	</td>
      </tr>
      <!-- IEEE mode -->
      <tr  >
        <td class="f">IEEE 802.11 Mode:</td>
	<td colspan="3">
	  <select id="ieee_mode_select" name="ieee_mode_select" req="1" realname="IEEE 802.11 Mode:" onchange="onIEEEMode(this);">
	  </select><input type="hidden" id="ieee_mode" name="ieee_mode" value="11nght40">
	</td>
      </tr>


      <!-- rate mode -->
      <tr>
		<td class="f">Channel Width:<span class="help"><a href="/140205.1824/help/en_US/clksel.html" rel="help">[?]</a></span></td>
		<td colspan="3" style="white-space: nowrap;">
	  <select id="clksel_select" name="width2" req="1" realname="Channel Width:" onChange="onClksel(this);">
	  </select><input type="hidden" id="clksel" name="clksel" value="0">
	</td>
      </tr>

      <tr>
        <td class="f">Channel Shifting:<span class="help"><a href="/140205.1824/help/en_US/chanshift.html" rel="help">[?]</a></span></td>
	<td colspan="3">
	  <select id="chanshift" name="chanshift" req="1" realname="Channel Shifting:" onChange="onChanshift(this);">
          <option value="0">Disable</option>
          <option value="2">Enable</option>
	  </select>
	</td>
      </tr>
      <tr>
        <td class="f">Frequency, MHz:</td>
	<td colspan="3">
	  <select id="chan_freq" name="chan_freq" req="1" realname="Frequency, MHz:" onChange="onFrequency(this); toggleObeyRegulatory();">
	  </select>
	</td>
	
      </tr>

      <tr  >
      <td class="f">Extension Channel:</td>
        <td colspan="3">
          <select id="extchannel_select" name="extchannel_select" req="1" realname="Extension Channel:" onchange="onExtChannel(this);" >
          </select>
 	  <input type="hidden" id="extchannel" name="extchannel" value="" />
        </td>
      </tr>

      <tr id="scan_list_row">
        <td class="f">Frequency List, MHz:</td>
	<td class="f-left">
	  <input type="checkbox" name="channel_scan_list"
	  	id="channel_scan_list" onClick="toggleScanChannels();" value="enabled"
	  	>
	  	<label for="channel_scan_list">Enable</label>
	</td>
	<td colspan="2">
	  <input type="text" class="config" id="scan_channels" name="scan_channels" value="" req="1" realname="Frequency List" callback="validateChannelScanList">
	  <input type="button" id="edit_scan_channels" name="edit_scan_channels" onClick="openScanChannelSelect();" value="Edit...">
	</td>
      </tr>

      <tr class="obey_regulatory">
	<td class="f">Auto Adjust to EIRP Limit:</td>
        <td colspan="3">
    		<input type="checkbox" name="obey_regulatory_status"
	  		id="obey_regulatory_checkbox" onClick="toggleObeyRegulatory();" value="enabled"
                	checked disabled="disabled" > <label class="f" for="obey_regulatory_checkbox">Enable</label>
	</td>
      </tr>



      <!-- output power -->
      <tr>
        <td class="f">Output Power:</td>
        <td class="d2" style="padding: 0px 0px 0px 0px;">
			<div class="slider" id="slider-2" tabIndex="1">
				<input class="slider-input" id="slider-input-2" name="slider-input-2"/>
	 		</div>
	 	</td>
	 	<td colspan="2" class="f-left">
		<input type="text" class="std_width" id="txpower" name="txpower" size="5" value="12" req="1" realname="Output power" /> dBm
		</td>
      </tr>

      <!-- data rate -->
	  <tr>
        <td class="f">Data Rate Module:</td>
        <td colspan="3" class="f-left">
			<select id="rate_module" name="rate_module" req="1" realname="Data Rate Module:">
				<option value="atheros" selected>Default</option>
				<option value="ewma_ht" >Alternative</option>
			</select>
		</td>
      </tr>

      <tr>
        <td class="f">Max TX Rate, Mbps:</td>
        <td colspan="3" class="f-left">
	  <select id="rate" name="rate" req="1" realname="Transmission Rate, Mbps:"></select>
	  <input type="checkbox" name="rate_auto" id="rate_auto" value="enabled" checked>
	  <label for="rate_auto">Automatic</label>
	  <input type="hidden" name="mcast_rate" id="mcast_rate" value="12"></td>
      </tr>

      <tr><td colspan="4" class="tdpad">&nbsp;</td></tr>
      <tr><th colspan="4">Wireless Security</th></tr>
	  <tr><td colspan="4" class="tdpad">&nbsp;</td></tr>

      <!-- security settings -->
      <tr>
        <td class="f">Security:</td>
	<td colspan="3">
	  <select name="enc2" id="security" onChange="onSecurity(this, true);">
	    <option value="none">none</option>
	    <option value="wep">WEP</option>

	    <option value="wpa">WPA</option>
	    <option value="wpatkip">WPA-TKIP</option>
	    <option value="wpaaes">WPA-AES</option>
	    <option value="wpa2">WPA2</option>
	    <option value="wpa2tkip">WPA2-TKIP</option>
	    <option value="wpa2aes">WPA2-AES</option>

	  </select>
	</td>
      </tr>
     <tr class="nosec">
        <td class="f">RADIUS MAC Authentication:</td>
		<td class = "f-left" colspan="3"><input type="checkbox" name="radius_mac_acl_status" id="radius_mac_acl_status" value="enabled" onClick="toggleRadiusMACACL();"
		>
		<label for="radius_mac_acl_status">Enable</label></td>
     </tr>
     <tr class="nosec radaclmacform">
        <td class="f">MAC Format:</td>
	<td colspan="3">
	  <select class="std_width i_radaclmacform" name="radius_mac_acl_format" id="radius_mac_acl_format">
	    <option value="%.2X%.2X%.2X%.2X%.2X%.2X">XXXXXXXXXXXX</option>
	    <option value="%.2X-%.2X-%.2X-%.2X-%.2X-%.2X">XX-XX-XX-XX-XX-XX</option>
	    <option value="%.2X:%.2X:%.2X:%.2X:%.2X:%.2X">XX:XX:XX:XX:XX:XX</option>
	  </select>
	</td>
      </tr>
     <tr class="nosec radaclmacform">
        <td class="f">Use Empty Password:</td>
	<td class="f-left" colspan="3">
		<input type="checkbox" name="radius_mac_acl_passwd" id="radius_mac_acl_passwd" value="disabled"
		>
		<label for="radius_mac_acl_passwd">Enable</label>
	</td>
      </tr>
      <tr class="wep">
        <td class="f">Authentication Type:</td>
        <td class="f-left" colspan="3">
	  <input type="radio" name="authtype" id="authtype" value="1" checked>Open
	  <input type="radio" name="authtype" id="authtype" value="2">Shared Key
	</td>
      </tr>
      <!-- WEP settings -->
      <tr class="wep">
        <td class="f">WEP Key Length:</td>
	<td>
	  <select name="wep_key_length" id="wep_key_length" onChange="updateWepError();">
	    <option value="wep64">64 bit</option>
	    <option value="wep128">128 bit</option>
	  </select>
	</td>
	<td class="f">Key Type:</td>
	<td>
	  <select name="wep_key_type" id="wep_key_type" onChange="updateWepError();">
	    <option value="1" selected>HEX</option>
	    <option value="2">ASCII</option>
	  </select>
	</td>
      </tr>

      <tr class="wep">
        <td class="f">WEP Key:</td>
        <td><input type="text" class="config" name="wep_key" id="wep_key" value="" req="1" callback="validateWepKey" realname="WEP key (5 HEX pairs)"/></td>
	<td class="f">Key Index:</td>
	<td>
	  <select name="wep_key_id" id="wep_key_id">
	    <option value="1">1</option>
	    <option value="2">2</option>
	    <option value="3">3</option>
	    <option value="4">4</option>
	  </select>
	</td>
      </tr>
      <tr class="wpa">
        <td class="f">WPA Authentication:</td>
	<td colspan="3">
	  <select class="std_width" name="wpa_auth" id="wpa_auth" onChange="chooseWPA(this, true);">
	    <option value="WPA-PSK">PSK</option>
	    <option value="WPA-EAP">EAP</option>
	  </select>
	</td>
      </tr>
     <tr class="wpa wpapsk">
        <td class="f">WPA Preshared Key:</td>
        <td class="f-left" colspan="3"><input type="password" class="config pwd i_wpapsk" name="wpa_key" id="wpa_key" value="" req="1" callback="validateWpaKey" realname="WPA passphrase (minimum 8 printable ASCII chars, maximum 63)" autocomplete="off"/></td>
      </tr>
     <tr class="wpa wpaeap radmacacl">
        <td class="f">Auth Server IP/Port:</td>
        <td colspan="3"><input type="text" class="config i_wpaeap i_radaclmac" name="radius_auth_ip"
        id="radius_auth_ip" value="" req="1"
        callback="validateLanIP" realname="Authentication Server IP"/>
        <input type="text" class="std_width i_wpaeap i_radaclmac" maxlength="5" size="5"
        name="radius_auth_port"
        id="radius_auth_port" value="1812" req="1"
        realname="Authentication Server Port"
        minvalue="1" maxvalue="65535"/></td>
      </tr>
     <tr class="wpa wpaeap radmacacl">
        <td class="f">Auth Server Secret:</td>
        <td colspan="3"><input type="password" class="config pwd i_wpaeap i_radaclmac" name="radius_auth_secret"
        id="radius_auth_secret" value="secret" req="1"
	callback="validateRadiusSecret" realname="Authentication Server Secret (ASCII chars only, maximum 32)"
        autocomplete="off"/></td>
      </tr>
      <tr class="wpa wpaeap radmacacl">
        <td class="f">Accounting Server:</td>
		<td class = "f-left" colspan="3"><input type="checkbox" name="radius_acct_status" id="radius_acct_status" value="enabled" onClick="toggleRadiusAcct();"
		>
		<label for="radius_acct_status">Enable</label></td>
      </tr>
     <tr class="wpa wpaeap radmacacl radacct">
        <td class="f">Acct Server IP/Port:</td>
        <td colspan="3"><input type="text" class="config i_wpaeap i_radaclmac i_radacct" name="radius_acct_ip"
        id="radius_acct_ip" value="" req="1"
        callback="validateLanIP" realname="Accounting Server IP"/>
        <input type="text" class="std_width i_wpaeap i_radaclmac i_radacct" maxlength="5" size="5"
        name="radius_acct_port"
        id="radius_acct_port" value="1813" req="1"
        realname="Server Accounting Port"
        minvalue="1" maxvalue="65535"/></td>
      </tr>
     <tr class="wpa wpaeap radmacacl radacct">
        <td class="f">Acct Server Secret:</td>
        <td colspan="3"><input type="password" class="config pwd i_wpaeap i_radaclmac i_radacct" name="radius_acct_secret"
        id="radius_acct_secret" value="secret" req="1"
	callback="validateRadiusSecret" realname="Accounting Server Secret (ASCII chars only, maximum 32)"
        autocomplete="off"/></td>
      </tr>
      <tr>
        <td class="f">MAC ACL:</td>
		<td class = "f-left" colspan="3"><input type="checkbox" name="mac_acl_status" id="mac_acl_status" value="enabled" onClick="toggleMACACL();"
		>
		<label for="mac_acl_status">Enable</label></td>
      </tr>
      <tr class="macacl">
        <td class="f">Policy:</td>
		<td colspan="3"><select class="i_macacl" name="mac_acl_policy" id="mac_acl_policy">
		    <option value="allow"
		    selected
		    >
		    Allow</option>
	    	<option value="deny"
	    	
	    	>
	    	Deny</option>
	      </select>
              <input type="button" id="macacl_configure" name="macacl_configure" class="i_macacl"
                    value="ACL..."
                    onClick="return openPage('macacl.php');" />
	</td>
      </tr>
      <tr><td colspan="4" class="tdpad">&nbsp;</td></tr>
      <tr><th colspan="4">&nbsp;</th></tr>
      <tr>
		<td colspan="4" class="change"><input type="submit" name="save_emul2" value="Change" /></td>
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

