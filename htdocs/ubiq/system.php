
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/DTD/loose.dtd">
<html>
<head>
<title>[NanoStation Loco M2] - System</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Pragma" content="no-cache">
<link rel="shortcut icon" href="/140205.1824/favicon.ico" >
<link href="/140205.1824/style.css" rel="stylesheet" type="text/css">
<link href="/140205.1824/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="/140205.1824/help.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="jsl10n.php"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/util.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/jsval.js"></script>
<script type="text/javascript" language="javascript" src="/140205.1824/system.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.ui.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.passwd.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.utils.js"></script>
<script type="text/javascript" src="/140205.1824/js/ui.datepicker.js"></script>
<script type="text/javascript" src="/140205.1824/js/jquery.blockUI.js"></script>
<script type="text/javascript" src="/140205.1824/help.js"></script>

<script language="javascript" type="text/javascript">

var fw_check = {
	enabled: true,
	fw_str: 'Firmware update {1} is available.',
	no_str: 'You have latest available firmware version.',
	dl_str: 'Go to Ubiquiti Networks <a href="http://www.ubnt.com/support/downloads" target="_blank"> downloads</a> page.'
};


function doSubmit() {
	$('#sys_form').submit();
}

function on_language_change(e)
{
	var clone_form = jQuery(e.target.form).clone().unbind().empty().attr("id",
		function() {return this.id+"_clone";})
		.insertAfter(e.target.form);
	jQuery(e.target.form).find(":text, :password, :checkbox, select")
		.each(function() {
			jQuery('<input type="hidden" name="'+this.name+'" value="">')
				.appendTo(clone_form)
				.val((this.type == "checkbox" && !this.checked)
					? "disabled" : jQuery(this).val());
		});
	clone_form.submit();
}

function validateDate() {
	var systemdate = $('#systemdate_ui').val();
	if (systemdate.length > 0) {
		var d = new Date(systemdate);
		return !isNaN(d.getTime());
	}

	return false;
}

function init() {
	if ($.browser.msie) {
		$('#timezone option').each(function() {
			$(this).attr('title', $(this).text());
		});
	}




	roUserStatusClicked();

	jQuery("#ui_language").bind("change", on_language_change);

	$("#systemdate_ui").datepicker({
		duration: 0,
		showOn: 'button',
		buttonImage: '/140205.1824/images/calendar.gif',
		buttonImageOnly: true
	});

	dateStatusChanged();
	$('#date_status').change(dateStatusChanged);
	$('#timezone').val('GMT');

	var config_date = '';
	var date_regex = /^([0-9]{2})([0-9]{2})[0-9]{4}([0-9]{4})$/;
	var rg = config_date.match(date_regex);
	if (rg != null) {
		var sysdate = new Date(rg[3], rg[1] - 1, rg[2], 0, 0, 0, 0);
		var format = $('#systemdate_ui').datepicker('option', 'dateFormat');
		$('#systemdate_ui').val($.datepicker.formatDate(format, sysdate));
	}

	$('.i_adminpasswd, i_ropasswd').disable();
	$('.adminpasswd, .ropasswd').hide();

	$('#admin_passwd_trigger').click(function() {
		$('.adminpasswd').toggle();
		$('.i_adminpasswd').toggleDisabled();
		$('.i_adminpasswd:first').not(':disabled').focus();
	});
	$('#ro_passwd_trigger').click(function() {
		$('.ropasswd').toggle();
		$('.i_ropasswd').toggleDisabled();
		$('#roPassword').not(':disabled').focus();
	});
	$('#roPassword').passwd({
		label :  "Show",
		migrate_attrs : [ 'req', 'callback', 'realname' ]
	});

    $(window).unload(function() {
        $.unblockUI();
    });

    var fwupload_clicked = false;
    $('#btn_fwupload').click(function() {
        fwupload_clicked = true;
    });

    $('#btn_fwupdate').click(function() {
        openPage('fwflash.php?do_update=do');
        $('#updatedMsgDiv').hide();
        $.blockUI({ message: "<h3>Please Wait. Updating Firmware...</h3>"});
        return false;
    });

	$('#sys_form').submit(function() { // - two forms in this page
        if ($('#fwfile').val() != '' && !fwupload_clicked) {
            $('#fwfile').val('');
        } else if (fwupload_clicked) {
            $.blockUI({ message: "<h3>Please Wait. Uploading Firmware...</h3>"});
            return true;
        }

		if (!validateStandard($(this).get(0), 'error')) {
			return false;
		}
		appendSystemDate($(this));
		return true;
	});

	$('#cfgfile, #fwfile').change(function() {
		if ($(this).val() == '') {
			$(this).next('input').css('visibility', 'hidden');
		} else {
			$(this).next('input').css('visibility', 'visible');
		}
	});

	fwUpdateCheck(false, fw_check);
	$("#update_check").click(function() { fwUpdateCheck(true, fw_check); });
	security.check();

	


}

jQuery(document).ready(init);
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
     <a href="ubnt.php"><img src="/140205.1824/images/ubnt.png" alt="UBNT" border="0"></a><a href="index.php"><img src="/140205.1824/images/main.png" alt="Main" border="0"></a><a href="link.php"><img src="/140205.1824/images/link.png" alt="Wireless" border="0"></a><a href="network.php"><img src="/140205.1824/images/net.png" alt="Network" border="0"></a><a href="advanced.php"><img src="/140205.1824/images/4dv.png" alt="Advanced" border="0"></a><a href="services.php"><img src="/140205.1824/images/srv.png" alt="Services" border="0"></a><a href="system.php"><img src="/140205.1824/images/system_top.png" alt="System" border="0"></a></td>
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
    <form id="sys_form" enctype="multipart/form-data" action="system.php" method="POST">
	<table class="linktable" cellspacing="0" cellpadding="0">
	<tr><th colspan="5">Firmware Update</th></tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr>
		<td class="f">Firmware Version:</td>
		<td>XM.v5.5.8</td>
		<td>&nbsp;</td>
		<td class="f">Upload Firmware:</td>
		<td><input id="fwfile" name="fwfile" type="file"  size="15" realname="Upload Firmware File">&nbsp;<input style="visibility: hidden" name="fwupload" id="btn_fwupload" type="submit" value="Upload"><input type="hidden" name="action" value="fwupload"></td>
	</tr>
	<tr>
		<td class="f">Build Number:</td>
		<td>20991</td>
		<td>&nbsp;</td>
		<td class="f">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td class="f">Check for Updates:</td>
		<td>
			<input type="checkbox" name="update_status" id="update_status" value="enabled"
				checked> <label class="f" for="date_status">Enable</label>
			<input type="button" id="update_check" value="Check Now" />
		</td>
		<td>&nbsp;</td>
		<td class="f">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr>
		<th colspan="2">Device</th>
	    <td class="sep">&nbsp;</td>
	    <th colspan="2">Date Settings</th>
	</tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr>
		<td class="f d">Device Name:</td>
		<td class="d"><input type="text" class="config" name="hostname" id="hostname" value="NanoStation Loco M2" req="1" maxlength="64" realname="Device Name"></td>
		<td class="sep">&nbsp;</td>
		<td class="f">Time Zone:</td>
		<td class="d">
			<select name="timezone" id="timezone">
				<option value="GMT+12">(GMT-12:00) International Date Line West</option>
				<option value="GMT+11">(GMT-11:00) Midway Island, Samoa</option>
				<option value="GMT+10">(GMT-10:00) Hawaii</option>
				<option value="GMT+9">(GMT-09:00) Alaska</option>
				<option value="GMT+8">(GMT-08:00) Pacific Standard Time</option>
				<option value="GMT+7">(GMT-07:00) Mountain Standard Time</option>
				<option value="GMT+6">(GMT-06:00) Central Standard Time</option>
				<option value="GMT+5">(GMT-05:00) Eastern Standard Time</option>
				<option value="GMT+4:30">(GMT-04:30) Caracas</option>
				<option value="GMT+4">(GMT-04:00) Eastern Caribbean Time</option>
				<option value="GMT+3:30">(GMT-03:30) Newfoundland</option>
				<option value="GMT+3">(GMT-03:00) Greenland, Buenos Aires</option>
				<option value="GMT+2">(GMT-02:00) Mid-Atlantic</option>
				<option value="GMT+1">(GMT-01:00) Cape Verde Time</option>
				<option value="GMT">(GMT) Western Europe Time</option>
				<option value="GMT-1">(GMT+01:00) Central European Time</option>
				<option value="GMT-2">(GMT+02:00) Eastern European Time</option>
				<option value="GMT-3">(GMT+03:00) Baghdad, Riyadh, St. Petersburg</option>
				<option value="GMT-3:30">(GMT+03:30) Tehran</option>
				<option value="GMT-4">(GMT+04:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
				<option value="GMT-4:30">(GMT+04:30) Kabul</option>
				<option value="GMT-5">(GMT+05:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
				<option value="GMT-5:30">(GMT+05:30) Bombay, Calcutta, Madras, New Delhi</option>
				<option value="GMT-5:45">(GMT+05:45) Kathmandu</option>
				<option value="GMT-6">(GMT+06:00) Almaty, Dhaka, Colombo</option>
				<option value="GMT-7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
				<option value="GMT-8">(GMT+08:00) Beijing, Perth, Singapore, Hong Kong</option>
				<option value="GMT-9">(GMT+09:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
				<option value="GMT-9:30">(GMT+09:30) Adelaide, Darwin</option>
				<option value="GMT-10">(GMT+10:00) Eastern Australia, Guam, Vladivostok</option>
				<option value="GMT-11">(GMT+11:00) Magadan, Solomon Islands, New Caledonia</option>
				<option value="GMT-12">(GMT+12:00) Auckland, Wellington, Fiji, Kamchatka</option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="f d">Interface Language:</td>
		<td class="d"><select name="ui_language" id="ui_language"><option value="en_US" selected>English</option><option value="cz_CZ">Česky</option><option value="de_DE">Deutsch</option><option value="fr_FR">Français</option><option value="lt_LT">Lietuviškai</option><option value="pl_PL">Polski</option><option value="pt_PT">Português</option><option value="sp_SP">Español</option><option value="tr_TR">Türk</option><option value="zh_CN">中文（简体）</option></select></td>
		<td class="sep">&nbsp;</td>
		<td class="f">Startup Date:</td>
		<td><input type="checkbox" name="date_status" id="date_status" value="enabled"  > <label class="f" for="date_status">Enable</label></td>
	</tr>
	<tr>
		<td class="sep" colspan="3">&nbsp;</td>
		<td class="f">Startup Date:</td>
		<td>
			<input type="text" class="config" style="vertical-align: middle;" name="systemdate_ui" id="systemdate_ui"
				req="1" callback="validateDate" realname="Startup Date">
		</td>
	</tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr><th colspan="5">System Accounts</th> </tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr>
		<td class="f">Administrator Username:</td>
		<td colspan="3"><input type="text" class="config" name="adminname" id="adminname" autocomplete="off" value="ubnt" realname="User Name" req="1"> <img id="admin_passwd_trigger" class="middle" src="/140205.1824/images/passwd.png" alt="Change Password" title="Change Password"></td>
		<td></td>
	</tr>
	<tr class="adminpasswd">
		<td class="f">Current Password:</td>
		<td colspan="4"><input type="password" autocomplete="off" class="config i_adminpasswd" name="OldPassword" id="OldPassword" maxlength="8" value="" realname="Current password">
	</tr>
	<tr class="adminpasswd">
		<td class="f"><label for="NewPassword">New Password:</label></td>
		<td colspan="4">
		<input type="password" class="config i_adminpasswd" name="NewPassword" id="NewPassword" maxlength="8" value="" realname="New password">
		<label class="f" for="NewPassword2">Verify New Password:</label><input type="password" autocomplete="off" class="config i_adminpasswd" name="NewPassword2" id="NewPassword2" maxlength="8" value="" equals="NewPassword" realname="New password for verification">
		</td>
	</tr>
	<tr>
		<td class="f">Read-Only Account:</td>
		<td colspan="3"><input type="checkbox" name="ro_status" id="ro_status" onClick="roUserStatusClicked();" value="enabled"  > <label class="f" for="ro_status">Enable</label></td>
		<td>&nbsp;</td>
	</tr>
	<tr class="rouser">
		<td class="f">Read-Only Account Name:</td>
		<td colspan="3"><input type="text" class="config i_rouser" name="rousername" id="rousername" value="" realname="Read-Only Account Name" req="1" callback="validateRoUser"> <img id="ro_passwd_trigger" class="middle" src="/140205.1824/images/passwd.png" alt="Change Password" title="Change Password"> </td>
		<td>&nbsp;</td>
	</tr>
	<tr class="ropasswd">
		<td class="f">New Password:</td>
		<td colspan="3"><input type="password" autocomplete="off" class="config i_ropasswd" name="roPassword" id="roPassword" maxlength="8" value="" realname="Password"><input type="hidden" class="i_ropasswd" name="hasRoPassword" value="true"></td>
		<td>&nbsp;</td>
	</tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr>
		<th colspan="2">Miscellaneous</th>
		<td class="tdpad">&nbsp;</td>
		<th colspan="2">Location</th>
	</tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr>
		<td class="f">Reset Button: <span class="help"><a href="/140205.1824/help/en_US/resetbtn.html" rel="help">[?]</a></span></td>
		<td>
			<input type="checkbox" name="resetb_status" id="resetb_status" value="enabled"
				checked> <label class="f" for="resetb_status">Enable</label>
		</td>
		<td>&nbsp;</td>
		<td class="f">Latitude:</td>
		<td><input type="text" name="latitude" id="latitude" value=""
			req="1" callback="validateCoord" realname="Latitude [-90.000000..90.000000]" ></td>
	</tr>
	<tr>

	
		<td class="f">&nbsp;</td>
		<td>&nbsp;</td>

		<td>&nbsp;</td>
		<td class="f">Longitude:</td>
		<td><input type="text" name="longitude" id="longitude" value=""
			req="1" callback="validateCoord" realname="Longitude [-180.000000..180.000000]"
			></td>
	</tr>

	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr><th colspan="5">&nbsp;</th></tr>
	<tr><td colspan="5" style="padding-bottom: 40px;" class="change"><input type="submit" name="change" value="Change"></td></tr>

	<tr>
		<th colspan="2">Device Maintenance</th>
		<td class="tdpad">&nbsp;</td>
		<th colspan="2">Configuration Management</th>
	</tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
	<tr>
		<td class="f">Reboot Device:</td>
		<td><input class="maint_btn" type="button" onClick="openPage('reboot.php');" value="Reboot..."></td>
		<td>&nbsp;</td>
        <td class="f">Back Up Configuration:</td>
		<td><input type="button" onClick="return openPage('cfg.php');" value="Download..."></td>
	</tr>
	<tr>
		<td class="f">Support Info:</td>
		<td><input class="maint_btn" type="button" onClick="openPage('support.php');" value="Download..."></td>
		<td>&nbsp;</td>
		<td class="f">Upload Configuration:</td>
		<td><input size="17" type="file" name="cfgfile" id="cfgfile" realname="Configuration File">
		<input type="submit" style="visibility: hidden" id="cfgupload" name="cfgupload" value="Upload"><input type="hidden" name="action" value="cfgupload">
		</td>
	  		</tr>
	<tr>
		<td class="f">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td class="f">Reset to Factory Defaults:</td>
		<td><input class="maint_btn" type="button" onClick="openPage('reset.php');" value="Reset..."></td>
	</tr>
	<tr><td colspan="5" class="tdpad">&nbsp;</td></tr>
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

