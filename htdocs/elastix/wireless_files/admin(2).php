
<!-- saved from url=(0014)about:internet -->
<html><!--- wireless.html... --><!--- ...wireless.html --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- call:print_head_style_and_script() -->

	
	<script language="javascript" type="text/javascript" src="./debug.js.загрузка"></script>
	<script language="javascript" type="text/javascript" src="./stringutil.js.загрузка"></script>
	<script language="javascript" type="text/javascript" src="./dsdom.js.загрузка"></script>
	<script language="javascript" type="text/javascript" src="./style.js.загрузка"></script>
	<script language="javascript" type="text/javascript" src="./base.js.загрузка"></script>
	<script language="javascript" type="text/javascript" src="./switcher.js.загрузка"></script>
	<script language="javascript" type="text/javascript" src="./navigator.js.загрузка"></script>
	<script language="javascript" type="text/javascript" src="./polling.js.загрузка"></script>
	<script language="javascript" type="text/javascript" src="./jquery.js.загрузка"></script>
	
	<script language="javascript" type="text/javascript" src="./progress.js.загрузка"></script>
	<style type="text/css">
		TABLE.progress { margin: 4px; border: 2px solid #999999; background-color: #FFFFFF} TABLE.progress TD { margin: 0px; padding: 0px }
	</style>
	
	<link type="text/css" rel="stylesheet" title="dss3" href="../admin_files/ds3.css" media="screen,projection">
	<script type="text/javascript" language="javascript">
	// resource strings needed by various client templates that invoke code based
	// in js files that display localizable messages.
	resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";
	resourceDictionary.Messages.IntNtVld = "The value is not a valid integer.";
	resourceDictionary.Messages.StrNotLen = "The string is %1 characters long, but must be %2 characters long.";
	resourceDictionary.Messages.StrNotLen2 = "The value must be at most %s characters long.";
	resourceDictionary.Messages.StrNotLen3 = "The value must be at least %s character long.";
	resourceDictionary.Messages.ValAtLst = "The value must be at least %s.";
	resourceDictionary.Messages.ValAtMst = "The value must be at most %s.";
	resourceDictionary.Messages.IntNonNum = "The value contains a non-numerical character.";
	resourceDictionary.Messages.UpdtErr = "Update failed.";
	enableTabs();
	selectTabInMenu("wireless");
	</script>
	<style type="text/css">
	.A {
		padding: 0px 6px 0px 6px;
	}
	</style>


<!--- wireless.html... -->

<script type="text/javascript">
            var oldForm;
function setIsolationInputs() {
        var obj;


        obj = document.getElementById("station-isolation-checkbox-id1");
        if (obj)
          document.getElementById("station-isolation-checkbox-id1").value = document.getElementById( "station-isolation-checkbox-id1" ).checked ? "on" : "off";

        obj = document.getElementById("station-isolation-checkbox-id2");
        if (obj)
          document.getElementById("station-isolation-checkbox-id2").value = document.getElementById( "station-isolation-checkbox-id2" ).checked ? "on" : "off";

}

 function updateModesSelection(selectedModes)
	    {
            selectItemMode(document.getElementById("modeSelector"), selectedModes.value);
          
	    } 
function populate_radio_valid_modes()
{
    var radio1Mode = "a a-n-ac n-ac";
    var str = radio1Mode.split(" ");
    var radio1ConfiguredMode = "a-n-ac";
    for (var i=0; i < str.length;++i)
    {
        addOption(document.forms['update-container'].elements['radio.wlan0.mode'], format_mode(str[i]), format_mode(str[i]),format_mode(radio1ConfiguredMode));
    }
    
        var radio2Mode = "bg bg-n n-only-g";
        var str1 = radio2Mode.split(" ");
        var radio2ConfiguredMode = "bg-n";
        for (var i=0; i < str1.length;++i)
        {
            addOption(document.forms['update-container'].elements['radio.wlan1.mode'],format_mode(str1[i]), format_mode(str1[i]),format_mode(radio2ConfiguredMode));
        }
    
    
}

addOnLoadHandler( setIsolationInputs );

        
        
          
        
          
        

	    
     
        var r1ieee80211aChannels = new Array('Auto', '36', '40', '44', '48', '52', '56', '60', '64', '132', '136', '140', '144', '149', '153', '157', '161', '165');
        var r1ieee80211a80Channels = new Array('Auto', '36', '40', '44', '48', '52', '56', '60', '64', '132', '136', '140', '144', '149', '153', '157', '161');
        var r1ieee80211a40uChannels = new Array('Auto', '40', '48', '56', '64', '136', '144', '153', '161');
        var r1ieee80211a40lChannels = new Array('Auto', '36', '44', '52', '60', '132', '140', '149', '157');
        var r1ieee80211bChannels = new Array();
        var r1ieee80211gChannels = new Array('Auto', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13');
        var r1ieee80211g40uChannels = new Array('Auto', '5', '6', '7', '8', '9', '10', '11', '12', '13');
        var r1ieee80211g40lChannels = new Array('Auto', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    
     
        var r2ieee80211aChannels = new Array('Auto', '36', '40', '44', '48', '52', '56', '60', '64', '132', '136', '140', '149', '153', '157', '161', '165');
        var r2ieee80211a80Channels = new Array('Auto', '36', '40', '44', '48', '52', '56', '60', '64', '132', '136', '140', '144', '149', '153', '157', '161');
        var r2ieee80211a40uChannels = new Array('Auto', '40', '48', '56', '64', '136', '153', '161');
        var r2ieee80211a40lChannels = new Array('Auto', '36', '44', '52', '60', '132', '149', '157');
        var r2ieee80211bChannels = new Array();
        var r2ieee80211gChannels = new Array('Auto', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13');
        var r2ieee80211g40uChannels = new Array('Auto', '5', '6', '7', '8', '9', '10', '11', '12', '13');
        var r2ieee80211g40lChannels = new Array('Auto', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    
     
        var r3ieee80211aChannels = new Array('Auto', '36', '40', '44', '48', '52', '56', '60', '64', '132', '136', '140', '144', '149', '153', '157', '161', '165');
        var r3ieee80211a80Channels = new Array('Auto', '36', '40', '44', '48', '52', '56', '60', '64', '132', '136', '140', '144', '149', '153', '157', '161');
        var r3ieee80211a40uChannels = new Array('Auto', '40', '48', '56', '64', '136', '144', '153', '161');
        var r3ieee80211a40lChannels = new Array('Auto', '36', '44', '52', '60', '132', '140', '149', '157');
        var r3ieee80211bChannels = new Array();
        var r3ieee80211gChannels = new Array('Auto', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13');
        var r3ieee80211g40uChannels = new Array('Auto', '5', '6', '7', '8', '9', '10', '11', '12', '13');
        var r3ieee80211g40lChannels = new Array('Auto', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    

        var countryList = new Array("RU - Russia", "ZZ - Unlimited", "AF - Afghanistan", "AL - Albania", "DZ - Algeria", "AS - American Somoa", "AD - Andorra", "AO - Angola", "AI - Anguilla", "AG - Antigua and Barbuda", "AR - Argentina", "AM - Armenia", "AW - Aruba", "AU - Australia", "AT - Austria", "AZ - Azerbaijan", "BS - Bahamas", "BH - Bahrain", "BD - Bangladesh", "BB - Barbados", "BY - Belarus", "BE - Belgium", "BZ - Belize", "BJ - Benin", "BM - Bermuda", "BT - Bhutan", "BO - Bolivia", "BA - Bosnia", "BW - Botswana", "BR - Brazil", "BN - Brunei", "BG - Bulgaria", "BF - Burkina Faso", "MM - Burma", "BI - Burundi", "KH - Cambodia", "CM - Cameroon", "CA - Canada", "CV - Cape Verde", "KY - Cayman Islands", "CF - Central African Republic", "TD - Chad", "CL - Chile", "CN - China", "CX - Christmas Island", "CO - Colombia", "KM - Comoros", "CD - Congo,Democratic Republic of the", "CG - Congo,Republic of the", "CR - Costa Rica", "CI - Cote d'Ivoire", "HR - Croatia", "CY - Cyprus", "CZ - Czech Republic", "DK - Denmark", "DJ - Djibouti", "DM - Dominica", "DO - Dominican Republic", "EC - Ecuador", "EG - Egypt", "SV - El Salvador", "GQ - Equatorial Guinea", "ER - Eritrea", "EE - Estonia", "ET - Ethiopia", "EU - Europe", "FK - Faulkland Islands", "FM - Federated States of Micronesia", "FJ - Fiji", "FI - Finland", "FR - France", "GF - French Guiana", "PF - French Polynesia (France)", "TF - French Southern and Antarctic Lands", "GA - Gabon", "GM - Gambia", "GE - Georgia", "DE - Germany", "GH - Ghana", "GI - Gibralter", "GR - Greece", "GD - Grenada", "GP - Guadeloupe", "GU - Guam", "GT - Guatemala", "GG - Guernsey", "GN - Guinea", "GW - Guinea-Bissau", "GY - Guyana", "HT - Haiti", "VA - Holy See (Vatican City State)", "HN - Honduras", "HK - Hong Kong", "HU - Hungary", "IS - Iceland", "IN - India", "ID - Indonesia", "IR - Iran", "IQ - Iraq", "IE - Ireland", "IM - Isle of Man", "IL - Israel", "IT - Italy", "JM - Jamaica", "JP - Japan", "JE - Jersey", "JO - Jordan", "KZ - Kazakhstan", "KE - Kenya", "KI - Kiribati", "KR - Korea Republic", "KW - Kuwait", "KG - Kyrgyzstan", "LA - LAO People's Democratic Republic", "LV - Latvia", "LB - Lebanon", "LS - Lesotho", "LR - Liberia", "LY - Libya", "LI - Liechtenstein", "LT - Lithuania", "LU - Luxembourg", "MO - Macao", "MK - Macedonia", "MG - Madagascar", "MW - Malawi", "MY - Malaysia", "MV - Maldives", "ML - Mali", "MT - Malta", "MQ - Martinique", "MR - Mauritania", "MU - Mauritius", "YT - Mayotte", "MX - Mexico", "MD - Moldova", "MC - Monaco", "MN - Mongolia", "ME - Montenegro", "MS - Montserrat (UK)", "MA - Morocco", "MZ - Mozambique", "NA - Namibia", "NR - Nauru", "NP - Nepal", "NL - Netherlands", "AN - Netherlands Antilles", "NC - New Caledonia", "NZ - New Zealand", "NI - Nicaragua", "NE - Niger", "NG - Nigeria", "MP - Northern Mariana Islands", "NO - Norway", "OM - Oman", "PK - Pakistan", "PW - Palau", "PA - Panama", "PG - Papua New Guinea", "PY - Paraguay", "PE - Peru", "PH - Philippines", "PL - Poland", "PT - Portugal", "PR - Puerto Rico", "QA - Qatar", "RE - Reunion", "RO - Romania", "RW - Rwanda", "KN - Saint Kitts and Nevis", "LC - Saint Lucia", "MF - Saint Martin", "VC - Saint Vincent and the Grenadines", "WS - Samoa", "SM - San Marino", "ST - Sao Tome and Principe", "SA - Saudi Arabia", "SN - Senegal", "RS - Serbia", "SC - Seychelles", "SL - Sierra Leone", "SG - Singapore", "SK - Slovak Republic", "SI - Slovenia", "SB - Solomon Islands", "SO - Somalia", "ZA - South Africa", "ES - Spain", "LK - Sri Lanka", "PM - St. Pierre and Miquelon", "SR - Suriname", "SZ - Swaziland", "SE - Sweden", "CH - Switzerland", "SY - Syria", "TW - Taiwan", "TJ - Tajikistan", "TZ - Tanzania", "TH - Thailand", "TG - Togo", "TO - Tonga", "TT - Trinidad & Tobago", "TN - Tunisia", "TR - Turkey", "TM - Turkmenistan", "TC - Turks and Caicos Islands (UK)", "TV - Tuvalu", "UG - Uganda", "UA - Ukraine", "AE - United Arab Emirates", "GB - United Kingdom", "US - United States", "UM - United States (Minor Outlying Islands)", "UY - Uruguay", "UZ - Uzbekistan", "VU - Vanuatu", "VE - Venezuela", "VN - Vietnam", "VG - Virgin Islands (British)", "VI - Virgin Islands (United States)", "YE - Yemen", "ZM - Zambia", "ZW - Zimbabwe");
        var radio1ConfiguredMode = "a-n-ac";
        
        var radio2ConfiguredMode = "bg-n";
        
        

        function init() 
        {
            var selectedChannel;
            
                var automode_disable  = 0;
            
            populate_radio_valid_modes();			
            if(radio1ConfiguredMode != 'a' && radio1ConfiguredMode != 'n-ac' && radio1ConfiguredMode != 'a-n-ac')
            {
              var ext_ch_row = document.getElementById('R1_ext_channel_row');
              var fbwa_row  = document.getElementById('R1_fbwa_row');
              if(ext_ch_row != undefined)
                ext_ch_row.style.display = 'none';
              if(fbwa_row != undefined)
                fbwa_row.style.display = 'none';
            }
            
            if(radio2ConfiguredMode != 'a' && radio2ConfiguredMode != 'n-ac' && radio2ConfiguredMode != 'a-n-ac')
            {
              var ext_ch_row = document.getElementById('R2_ext_channel_row');
              var fbwa_row  = document.getElementById('R2_fbwa_row');
              if(ext_ch_row != undefined)
                ext_ch_row.style.display = 'none';
              if(fbwa_row != undefined)
                fbwa_row.style.display = 'none';
            }
            
            
             var forty_mhz_supported_a = 'Y';
             var forty_mhz_supported_g = 'Y';
             var eighty_mhz_supported_a = 'Y';
             var twoGhz = 'Y';
             var fiveGhz = 'Y';
            
            
                
                var freq_only = false;
                

                
                updateModeField(1,document.forms['update-container'].elements['radio.wlan0.mode'],forty_mhz_supported_a,forty_mhz_supported_g,eighty_mhz_supported_a,twoGhz,fiveGhz);
                
                selectedChannel = 'Auto';
                updateChannelField(1,
                                   'radio.wlan0.mode',
                                   document.forms['update-container'].elements['radio.wlan0.channel'],
                                   selectedChannel,
                                   '20 MHz',
                                   'Lower',
                                   'Off',
                                   automode_disable,freq_only);
                
                enableDisable = ("up"=="up")?true:false;
                toggleRadioEnabled(enableDisable,1);

                
            
                
                var freq_only = false;
                

                
                updateModeField(2,document.forms['update-container'].elements['radio.wlan1.mode'],forty_mhz_supported_a,forty_mhz_supported_g,eighty_mhz_supported_a,twoGhz,fiveGhz);
                
                selectedChannel = '6';
                updateChannelField(2,
                                   'radio.wlan1.mode',
                                   document.forms['update-container'].elements['radio.wlan1.channel'],
                                   selectedChannel,
                                   '20 MHz',
                                   'Lower',
                                   'Off',
                                   automode_disable,freq_only);
                
                enableDisable = ("up"=="up")?true:false;
                toggleRadioEnabled(enableDisable,2);

                
            
            
               var guestEnabled = '';
               if (guestEnabled == 'down') 
               {
                   
                    
                }
            

            initializeCountryList(document.getElementById ("country_list_id"), countryList);
              var isCountryCodeEnabled = 'on';

              if (isCountryCodeEnabled == "off")
              {
                document.getElementById ("country_list_id").disabled = true;
              }

            var currentCountry = 'RU'.toUpperCase();
            /* var message = "Current country is " + currentCountry; */
            /* alert (message); */
            selectCountry(document.getElementById("country_list_id"), currentCountry);

            var countryMode = 'on'.toLowerCase();

            
            var def_mode = "on";
            var alt_mode = "off";
            
            if (countryMode == alt_mode)
                countryMode = alt_mode;
            else
                countryMode = def_mode;

            document.getElementById('country_mode').value = countryMode;

            hideShowTransmitPowerControl(currentCountry);
            oldForm = saveForm();

            
        }
        function changeFbwaMode(count, radio){
            var fbwa_mode_name = "update.device.radio["+radio+"].fbwa-mode";
            var fbwa_mode = document.forms['update-container'].elements[fbwa_mode_name].value;
            var select_name = "radio." + radio + ".channel";
            var channel_select = document.getElementById(select_name);

            var mode_select_name = "radio." + radio + ".mode";
            var selectedChannel = channel_select.value;
            var radio_settings = {};
            
            
            radio_settings['1'] = {};
            radio_settings['1']['bandwidth'] = '20 MHz';
            radio_settings['1']['primary_channel'] = 'Lower';
            radio_settings['1']['dot11h'] = 'Off';
            
            
            radio_settings['2'] = {};
            radio_settings['2']['bandwidth'] = '20 MHz';
            radio_settings['2']['primary_channel'] = 'Lower';
            radio_settings['2']['dot11h'] = 'Off';
            
            

            
            var automode_disable  = 0;
            

            
            var freq_only = false;
            

            updateChannelField(count, mode_select_name, channel_select, selectedChannel,
                    radio_settings[count].bandwidth,
                    radio_settings[count].primary_channel,
                    radio_settings[count].dot11h,
                    automode_disable,freq_only);

            if (fbwa_mode == 'on')
                channel_select.options[0].disabled = true;
            else
                channel_select.options[0].disabled = false;
        }
        function validateTspecViolationInterval(s)
        {
            if (isIntInRange(s, 0, 900)) {
                return "";
            } else {
                var format = "The TSPEC Violation Interval is invalid. Valid range is 0 - 900.";
                var reason = getIntNotInRangeReason(s, 0, 900);
                var params = new Array(); // in case 'reason' is a number.
                params[0] = reason;
                var message = formatResourceString( format, params );
                return message + "\n";
            }
        }
        
        function validateWirelessSettings() {
          var msg = "";
          var elm;

          if (elm = document.getElementById('tspec_config' + '.tspec_violation_interval'))
                msg = msg + validateTspecViolationInterval(elm.value);

          if (msg.length > 0) {
            msg = 'The Wireless Settings configuration has the following problems:\n' + msg;
          }

          

          return msg;
        }

        function validate() {
            var msg = "";
            msg = msg + validateWirelessSettings();
            if (msg.length > 0) {
                alert(msg);
                return false;
            } else {
                return true;
            }
        }
        function modeChangeLegacyToN()
        {
          var radio1CurrentMode = document.forms['update-container'].elements['radio.wlan0.mode'].value;
          if ((radio1ConfiguredMode == "a") &&
              ((radio1CurrentMode == "IEEE 802.11a/n") || (radio1CurrentMode == "5 GHz IEEE 802.11n")))
              return 1;
          else if ((radio1ConfiguredMode == "bg") &&
                   ((radio1CurrentMode == "IEEE 802.11b/g/n") || (radio1CurrentMode == "2.4 GHz IEEE 802.11n")))
              return 1;
          else if (((radio1ConfiguredMode == "a") || (radio1ConfiguredMode == "bg")) &&
                   ((radio1CurrentMode == "IEEE 802.11a/n/ac") || (radio1CurrentMode == "IEEE 802.11n/ac")))
              return 2;

          
          var radio2CurrentMode = document.forms['update-container'].elements['radio.wlan1.mode'].value;
          if ((radio2ConfiguredMode == "a") && 
              ((radio2CurrentMode == "IEEE 802.11a/n")|| (radio2CurrentMode == "5 GHz IEEE 802.11n")))
              return 1;
          else if ((radio2ConfiguredMode == "bg") &&
                   ((radio2CurrentMode == "IEEE 802.11b/g/n") || (radio2CurrentMode == "2.4 GHz IEEE 802.11n")))
              return 1;
          else if (((radio2ConfiguredMode == "a") || (radio2ConfiguredMode == "bg")) &&
                   ((radio2CurrentMode == "IEEE 802.11a/n/ac") || (radio2CurrentMode == "IEEE 802.11n/ac")) )
              return 2;
          

          

          return 0;
        }
        function cleanup() 
        {
            var ok;
            if (formChanged(oldForm))
            {
                if (modeChangeLegacyToN() == 1)
                {
                  alert("You are requesting a change from a legacy mode to 802.11n mode. 802.11n restricts the use of certain VAP security modes and options. Any VAP currently configured for Static WEP or IEEE802.1X will be downgraded to None. In addition, any VAP currently configured for WPA will have the CCMP (AES) cipher suite enabled.");
                }
                else if (modeChangeLegacyToN() == 2)
                {
                  alert("You are requesting a change from a legacy mode to 802.11ac mode. 802.11ac mode restricts the use of certain VAP security modes and options. Any VAP currently configured for Static WEP or IEEE802.1X will be downgraded to None. In addition, any VAP currently configured for WPA will have the CCMP (AES) cipher suite enabled.");
                }
                var msg = "Your wireless settings are about to be updated. You may be disconnected.";
                msg += "\nNote: Radio will be turned 'off', if the mode is not supported by country.";
                ok = confirm(msg);
                if(ok == false)
                    return false;
            }
            else
            {
                return false;
            }

        }

	function wdsSecurityFail()
	{
		var wdsFailed = "";
        	var current_mode;
		var wds0_security='';
		var wds1_security='';
		var wds2_security='';
		var wds3_security='';
		var wds4_security='';
		var wds5_security='';
		var wds6_security='';
		var wds7_security='';
        var radio1CurrentMode = document.forms['update-container'].elements['radio.wlan0.mode'].value;
        
        var radio2CurrentMode = document.forms['update-container'].elements['radio.wlan1.mode'].value;
        
        
		if ( wds0_security == "static-wep" )
		{
			var radio = 'wlan0';
			var radiovalue;
			var current_mode;
			if ( radio == "wlan0" )
			{
				radiovalue=1;
				current_mode = radio1CurrentMode;
			}
			else if ( radio == "wlan1")
			{
				radiovalue=2;
				current_mode = radio2CurrentMode;
			}
			else
			{
				radiovalue=3;
				current_mode = radio3CurrentMode;
			}
		   if((current_mode != "IEEE 802.11b/g") && (current_mode != "IEEE 802.11a"))
		   {
		      wdsFailed = "WDS Page has WEP security set for radio "+radiovalue+ ".Can not move radio "+radiovalue+"  to selected mode.";
		      alert(wdsFailed);
	     	      return false;
		   }
		}
		if ( wds1_security == "static-wep" )
		{
			var radio = 'wlan0';
			var radiovalue;
			var current_mode;
			if ( radio == "wlan0" )
			{
				radiovalue=1;
				current_mode = radio1CurrentMode;
			}
			else if (radio == "wlan1" )
			{
				radiovalue=2;
				current_mode = radio2CurrentMode;
			}
			else
			{
				radiovalue=3;
				current_mode = radio3CurrentMode;
			}
		   if((current_mode != "IEEE 802.11b/g") && (current_mode != "IEEE 802.11a"))
		   {
		      wdsFailed = "WDS Page has WEP security set for radio "+radiovalue+ ".Can not move radio"+radiovalue+"  to selected mode.";
		      alert(wdsFailed);
		      return false;
		   }
		}
		if ( wds2_security == "static-wep" )
		{
			var radio = 'wlan0';
			var radiovalue;
			var current_mode;
			if ( radio == "wlan0" )
			{
				radiovalue=1;
				current_mode = radio1CurrentMode;
			}
			else if ( radio == "wlan1" )
			{
				radiovalue=2;
				current_mode = radio2CurrentMode;
			}
			else {
				radiovalue=3;
				current_mode = radio3CurrentMode;
			}
		   if((current_mode != "IEEE 802.11b/g") && (current_mode != "IEEE 802.11a"))
		   {
		      wdsFailed = "WDS Page has WEP security set for radio "+radiovalue+ ".Can not move radio"+radiovalue+"  to selected mode.";
	              alert(wdsFailed);
	              return false;
		   }
		}
		if ( wds3_security == "static-wep" )
		{
			var radio = 'wlan0';
			var radiovalue;
			var current_mode;
			if ( radio == "wlan0" )
			{
				radiovalue=1;
				current_mode = radio1CurrentMode;
			}
			else if ( radio == "wlan1" )
			{
				radiovalue=2;
				current_mode = radio2CurrentMode;
			}
			else {
				radiovalue=3;
				current_mode = radio3CurrentMode;
			}
		   if((current_mode != "IEEE 802.11b/g") && (current_mode != "IEEE 802.11a"))
		   {
		      wdsFailed = "WDS Page has WEP security set for radio "+radiovalue+ ".Can not move radio"+radiovalue+"  to selected mode.";
		      alert(wdsFailed);
		      return false;
		   }
		}
		if ( wds4_security == "static-wep" )
		{
			var radio = 'wlan0';
			var radiovalue;
			var current_mode;
			if ( radio == "wlan0" )
			{
				radiovalue=1;
				current_mode = radio1CurrentMode;
			}
			else if ( radio == "wlan1" )
			{
				radiovalue=2;
				current_mode = radio2CurrentMode;
			}
			else {
				radiovalue=3;
				current_mode = radio3CurrentMode;
			}
		   if((current_mode != "IEEE 802.11b/g") && (current_mode != "IEEE 802.11a"))
		   {
		      wdsFailed = "WDS Page has WEP security set for radio "+radiovalue+ ".Can not move radio"+radiovalue+"  to selected mode.";
		      alert(wdsFailed);
		      return false;
		   }
		}
		if ( wds5_security == "static-wep" )
		{
			var radio = 'wlan0';
			var radiovalue;
			var current_mode;
			if ( radio == "wlan0" )
			{
				radiovalue=1;
				current_mode = radio1CurrentMode;
			}
			else if ( radio == "wlan1" )
			{
				radiovalue=2;
				current_mode = radio2CurrentMode;
			}
			else {
				radiovalue=3;
				current_mode = radio3CurrentMode;
			}
		   if((current_mode != "IEEE 802.11b/g") && (current_mode != "IEEE 802.11a"))
		   {
		      wdsFailed = "WDS Page has WEP security set for radio "+radiovalue+ ".Can not move radio"+radiovalue+"  to selected mode.";
		      alert(wdsFailed);
		      return false;
		   }
		}
		if ( wds6_security == "static-wep" )
		{
			var radio = 'wlan0';
			var radiovalue;
			var current_mode;
			if ( radio == "wlan0" )
			{
				radiovalue=1;
				current_mode = radio1CurrentMode;
			}
			else if ( radio == "wlan1" )
			{
				radiovalue=2;
				current_mode = radio2CurrentMode;
			}
			else {
				radiovalue=3;
				current_mode = radio3CurrentMode;
			}
		   if((current_mode != "IEEE 802.11b/g") && (current_mode != "IEEE 802.11a"))
		   {
		      wdsFailed = "WDS Page has WEP security set for radio "+radiovalue+ ".Can not move radio"+radiovalue+"  to selected mode.";
		      alert(wdsFailed);
		      return false;
		   }
		}
		if ( wds7_security == "static-wep" )
		{
			var radio = 'wlan0';
			var radiovalue;
			var current_mode;
			if ( radio == "wlan0" )
			{
				radiovalue=1;
				current_mode = radio1CurrentMode;
			}
			else if ( radio == "wlan1" )
			{
				radiovalue=2;
				current_mode = radio2CurrentMode;
			}
			else {
				radiovalue=3;
				current_mode = radio3CurrentMode;
			}
		   if((current_mode != "IEEE 802.11b/g") && (current_mode != "IEEE 802.11a"))
		   {
		      wdsFailed = "WDS Page has WEP security set for radio "+radiovalue+ ".Can not move radio"+radiovalue+"  to selected mode.";
		      alert(wdsFailed);
		      return false;
		   }
		}
		
		return true;
	}


        function onSubmit()
        {
            var msg="";
            var ok;
            if (! validate()) {
              return false;
            }
            if (msg.length > 0)
            {
                return false;
            } 
            ok = cleanup();
            if (ok == false)
            {
                document.location='/admin.cgi?action=wireless';
                return false;
            }
     	    if(!wdsSecurityFail())
	    {
		return false;
	    }
            return true;
        }

        function toggleRadioEnabled(enabled, radio) 
        {
            radio--;
            document.getElementById("radio.wlan" + radio + ".mode").disabled = (enabled)?false:true;
            
            var channel_disabled = false;
            
            document.getElementById("radio.wlan" + radio + ".channel").disabled = (enabled)?channel_disabled:true;
        }

	    function updateCountrySelection(selectedCountry)
	    {
            var currentCountry = selectedCountry.value.slice(0,2);
            selectCountry(document.getElementById("country_list_id"), currentCountry);
            hideShowTransmitPowerControl(currentCountry);
            var cc = 'RU'.toUpperCase();
            if (cc != selectedCountry.value.slice(0,2))
             {
            alert ('The country setting is about to be changed. Note: You may need to reconfigure\nthe radio mode settings after the update is complete.');
            document.getElementById("update.device.radio[wlan0].status1").disabled= true;
            document.getElementById("update.device.radio[wlan0].status").disabled= true;
            document.getElementById("radio.wlan0.mode").disabled = true;
            document.getElementById("radio.wlan0.channel").disabled = true;
            
            document.getElementById("update.device.radio[wlan1].status1").disabled= true;
            document.getElementById("update.device.radio[wlan1].status").disabled= true;
            document.getElementById("radio.wlan1.mode").disabled = true;
            document.getElementById("radio.wlan1.channel").disabled = true;
            
            
        }
	    }
        function updatePrimaryChannelField(selected_channel) 
        {
            /* This is just a dummy function since "print_channel()" has on "onChange" 
             * reference to it.
             */
        }
        function hideShowTransmitPowerControl(currentCountry)
        {
            if (currentCountry == "RU") {
                document.getElementById('transmit_power_control').style.display = 'table-row';
                document.getElementById('country_mode').disabled = false;
            }
            else {
                document.getElementById('transmit_power_control').style.display = 'none';
                document.getElementById('country_mode').disabled = true;
            }
        }
        function updateChannelFieldWireless(radio_value, modeFieldName, channelField, selectedValue, channelBandwidth, primaryChannel,dfsSupport,automode) {
            
            var freq_only = false;
            

            var mode_value = document.forms['update-container'].elements[modeFieldName].value;

            var fortyMHzSupported = 'N';
            var eightyMHzSupported = 'N';
            if ((mode_value == "IEEE 802.11a/n") || (mode_value == "5 GHz IEEE 802.11n") )
            {
                fortyMHzSupported = 'Y';
            }
            else if ((mode_value == "IEEE 802.11b/g/n") || (mode_value == "2.4 GHz IEEE 802.11n"))
            {
                fortyMHzSupported = 'Y';
            }
            else if ((mode_value == "IEEE 802.11a/n/ac")  || (mode_value == "IEEE 802.11n/ac"))
            {
                fortyMHzSupported = 'Y';
                eightyMHzSupported = 'Y';
            }
            var channelBandwidthCorrect = channelBandwidth;
            if (channelBandwidthCorrect == '80 MHz' && eightyMHzSupported == 'N')
                channelBandwidthCorrect = '40 MHz';
            if (channelBandwidthCorrect == '40 MHz' && fortyMHzSupported == 'N')
                channelBandwidthCorrect = '20 MHz';

            updateChannelField(radio_value, modeFieldName, channelField, selectedValue, channelBandwidthCorrect, primaryChannel,dfsSupport,automode,freq_only);
        }
        </script>

<!--- ...wireless.html -->
</head>

<!--- wireless.html... -->


<!--- ...wireless.html -->
<body onload="init();" style="margin: 0px;">
<table class="nav-content" width="100%" height="500" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td class="nav-client-content" align="left" valign="top" width="80%">
<table width="100%" border="0" cellpadding="0" cellspacing="0" height="100%">
<tbody><tr>
<td valign="top">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<!-- call:print_page_title() -->


                      <tbody><tr><td id="page-title" class="page-title" align="left" width="100%" height="1">Modify wireless settings</td></tr>
                      <tr><td>&nbsp;</td></tr>


<tr>
<td valign="top">

<!--- wireless.html... -->

<form id="update-container-id" name="update-container" method="post" onsubmit="return onSubmit()">
  <table>
    
    <tbody><tr>
    <td class="label">
        Country                            <!-- LVL7 -->
    </td>
    <td>&nbsp;</td>
    <td class="value">
      <select name="systemCountry" id="country_list_id" onchange="updateCountrySelection(this)">
      <option value="RU">Russia</option><option value="ZZ">Unlimited</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Somoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia</option><option value="BW">Botswana</option><option value="BR">Brazil</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="MM">Burma</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CD">Congo,Democratic Republic of the</option><option value="CG">Congo,Republic of the</option><option value="CR">Costa Rica</option><option value="CI">Cote d'Ivoire</option><option value="HR">Croatia</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="EU">Europe</option><option value="FK">Faulkland Islands</option><option value="FM">Federated States of Micronesia</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia (France)</option><option value="TF">French Southern and Antarctic Lands</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibralter</option><option value="GR">Greece</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KR">Korea Republic</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">LAO People's Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat (UK)</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RW">Rwanda</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome and Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovak Republic</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="PM">St. Pierre and Miquelon</option><option value="SR">Suriname</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TG">Togo</option><option value="TO">Tonga</option><option value="TT">Trinidad &amp; Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands (UK)</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States (Minor Outlying Islands)</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (United States)</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
    </td>
    </tr>

    
  <tr><td>&nbsp;</td>

    
    </tr><tr id="transmit_power_control" style="display: table-row;">
    <td class="label">
        Transmit Power Control
    </td>
    <td>&nbsp;</td>
    <td class="value">
      <select name="systemCountryMode" id="country_mode">
        
        <option value="on">On</option>
        
        <option value="off">Off</option>
      </select>
    </td>
    </tr>

    
    <tr>
        <td class="label"> TSPEC Violation Interval
        </td>
        <td>&nbsp;</td>
        <td class="value">
            <div class="units">
                <input class="input-text numeric-filter" type="text" id="tspec_config.tspec_violation_interval" name="update.device.tspec-config.violation-interval" value="300" size="6" maxlength="3">
                (Sec, Range: 0 - 900, 0 Disables)   <!-- LVL7 -->
            </div>
        </td>
    </tr>

    
    <tr>
        <td class="label"> Global Isolation
        </td>
        <td>&nbsp;</td>
        <td>
			<script>
			function fullIsolationChanged() {
				document.getElementById('full-isolation-hidden').value = document.getElementById('full-isolation-checkbox').checked ? "on" : "off";
			}
			</script>
            <input type="hidden" id="full-isolation-hidden" name="update.device.system.full-isolation" value="on">
            <input type="checkbox" id="full-isolation-checkbox" checked="" onclick="fullIsolationChanged();">
        </td>
    </tr>


    
    
		<tr><td>&nbsp;</td></tr>
    <tr>
      <td class="page-header3">Radio Interface
        
      </td>
      
  <td>&nbsp;</td>

      <td class="value">
        <input class="input-radio" type="radio" value="up" onclick="toggleRadioEnabled(true, 1)" id="update.device.radio[wlan0].status" name="radio.wlan0.status" checked=""> On
        <input class="input-radio" type="radio" value="down" onclick="toggleRadioEnabled(false, 1)" id="update.device.radio[wlan0].status1" name="radio.wlan0.status"> Off
      </td>
    </tr>
    
  
    
    
    <!-- mac address -->
    <tr>
        <td class="label">
            MAC Address
        </td>
        <td>&nbsp;</td>
    <td>
        <?php
          session_start();
          echo $_SESSION['ap']['mac3'];
        ?>
    </td>
    </tr>

    
            
     
     
     
     
    <tr>
  <td class="label">
      Mode
  </td>
  <td>&nbsp;</td>
  <td class="value">
      <select id="radio.wlan0.mode" name="radio.wlan0.mode" onchange="updateChannelFieldWireless(1, &#39;radio.wlan0.mode&#39;, document.getElementById(&#39;radio.wlan0.channel&#39;), &#39;Auto&#39;, &#39;20 MHz&#39;, &#39;Lower&#39;,0)">
    
    <option value="IEEE 802.11a">IEEE 802.11a</option><option value="IEEE 802.11a/n/ac">IEEE 802.11a/n/ac</option><option value="IEEE 802.11n/ac">IEEE 802.11n/ac</option></select>
  </td>
    </tr>
    
    
    <!-- channel for radio 1 -->
    <tr>
        <td class="label">Channel
        </td>
        <td>&nbsp;</td>
        <td class="value">
            
            
            <select id="radio.wlan0.channel" name="radio.wlan0.channel" onchange="updatePrimaryChannelField(this)">
            <option value="Auto">Auto</option><option value="36">36 (5180 MHz)</option><option value="40">40 (5200 MHz)</option><option value="44">44 (5220 MHz)</option><option value="48">48 (5240 MHz)</option><option value="52">52 (5260 MHz)</option><option value="56">56 (5280 MHz)</option><option value="60">60 (5300 MHz)</option><option value="64">64 (5320 MHz)</option><option value="132">132 (5660 MHz)</option><option value="136">136 (5680 MHz)</option><option value="140">140 (5700 MHz)</option><option value="144">144 (5720 MHz)</option><option value="149">149 (5745 MHz)</option><option value="153">153 (5765 MHz)</option><option value="157">157 (5785 MHz)</option><option value="161">161 (5805 MHz)</option><option value="165">165 (5825 MHz)</option></select>
        </td>
    </tr>

    
    <!-- airtime fairness for radio 1 -->
    <tr>
        <td class="label">Airtime Fairness
        </td>
        <td>&nbsp;</td>
        <td class="value">
            <input class="input-radio" type="radio" value="on" name="update.device.radio[wlan0].atf" checked=""> On
            <input class="input-radio" type="radio" value="off" name="update.device.radio[wlan0].atf"> Off
        </td>
    </tr>

    

    
    
    
		<tr><td>&nbsp;</td></tr>
    <tr>
      <td class="page-header3">Radio Interface
        2
      </td>
      
  <td>&nbsp;</td>

      <td class="value">
        <input class="input-radio" type="radio" value="up" onclick="toggleRadioEnabled(true, 2)" id="update.device.radio[wlan1].status" name="radio.wlan1.status" checked=""> On
        <input class="input-radio" type="radio" value="down" onclick="toggleRadioEnabled(false, 2)" id="update.device.radio[wlan1].status1" name="radio.wlan1.status"> Off
      </td>
    </tr>
    
  
    
    
    <!-- mac address -->
    <tr>
        <td class="label">
            MAC Address
        </td>
        <td>&nbsp;</td>
    
    

    
    <td></td>
    </tr>

    
            
     
     
     
     
    <tr>
  <td class="label">
      Mode
  </td>
  <td>&nbsp;</td>
  <td class="value">
      <select id="radio.wlan1.mode" name="radio.wlan1.mode" onchange="updateChannelFieldWireless(2, &#39;radio.wlan1.mode&#39;, document.getElementById(&#39;radio.wlan1.channel&#39;), &#39;6&#39;, &#39;20 MHz&#39;, &#39;Lower&#39;,0)">
    
    <option value="IEEE 802.11b/g">IEEE 802.11b/g</option><option value="IEEE 802.11b/g/n">IEEE 802.11b/g/n</option><option value="2.4 GHz IEEE 802.11n">2.4 GHz IEEE 802.11n</option></select>
  </td>
    </tr>
    
    
    <!-- channel for radio 2 -->
    <tr>
        <td class="label">Channel
        </td>
        <td>&nbsp;</td>
        <td class="value">
            
            
            <select id="radio.wlan1.channel" name="radio.wlan1.channel" onchange="updatePrimaryChannelField(this)">
            <option value="Auto">Auto</option><option value="1">1 (2412 MHz)</option><option value="2">2 (2417 MHz)</option><option value="3">3 (2422 MHz)</option><option value="4">4 (2427 MHz)</option><option value="5">5 (2432 MHz)</option><option value="6">6 (2437 MHz)</option><option value="7">7 (2442 MHz)</option><option value="8">8 (2447 MHz)</option><option value="9">9 (2452 MHz)</option><option value="10">10 (2457 MHz)</option><option value="11">11 (2462 MHz)</option><option value="12">12 (2467 MHz)</option><option value="13">13 (2472 MHz)</option></select>
        </td>
    </tr>

    
    <!-- airtime fairness for radio 2 -->
    <tr>
        <td class="label">Airtime Fairness
        </td>
        <td>&nbsp;</td>
        <td class="value">
            <input class="input-radio" type="radio" value="on" name="update.device.radio[wlan1].atf" checked=""> On
            <input class="input-radio" type="radio" value="off" name="update.device.radio[wlan1].atf"> Off
        </td>
    </tr>

    

    
    
    

    <tr><td>&nbsp;</td></tr>
    
    

    
        
            
        
        <tr> 
           <td align="left" colspan="2"><br> Click “Update“ to save the new settings. <br> </td>
        </tr>       
        <!-- submit button for this page -->
        <tr>
            <td align="left" colspan="3">
                <input type="hidden" name="page" value="wireless">
                <input type="submit" class="input-submit" name="Update" value="Update">
            </td>
        </tr>

  </tbody></table>
</form>

<!--- ...wireless.html -->

</td>
</tr>
</tbody></table>
</td>
<td width="4">&nbsp;</td>
<!-- call:print_page_help() -->

  <td class="page-help" align="left" valign="top" width="20%">
    <img src="./page_help.gif" border="0" style="cursor: pointer;" onclick="window.open(&#39;admin.cgi?action=wireless_help&#39;, &#39;_blank&#39;, &#39;dependent=yes,resizable=yes,toolbar=no,status=no,menubar=no,height=675,width=675,scrollbars=yes&#39;); return false;">
    Wireless settings describe aspects of the local area network (LAN) related specifically to the radio device in the access point (802.11 Mode and Channel) and to the network interface to the access point (MAC address for access point and Wireless Network name, also known as SSID).<br><br>For a complete set of Radio configuration options, go to the <a href="http://192.168.31.108/admin.cgi?action=radio">Radio</a><a> tab.<br><br></a><a href="http://192.168.31.108/admin.cgi?action=wireless#null" onclick="window.open(&#39;admin.cgi?action=wireless_help&#39;, &#39;_blank&#39;, &#39;dependent=yes,resizable=yes,toolbar=no,status=no,menubar=no,height=675,width=675,scrollbars=yes&#39;); return false">More</a> ...
  </td>

</tr>
</tbody></table>
</td>
</tr>
</tbody></table>




</body></html>