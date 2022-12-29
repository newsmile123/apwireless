
<!-- saved from url=(0014)about:internet -->
<html><!--- vwn.html... --><!--- ...vwn.html --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
	selectTabInMenu("vwn");
	</script>
	<style type="text/css">
	.A {
		padding: 0px 6px 0px 6px;
	}
	</style>


<!--- vwn.html... -->

<link type="text/css" rel="stylesheet" href="./radio.css" media="screen,projection">
<script language="javascript" type="text/javascript" src="./security.js.загрузка"></script>
<script language="javascript" type="text/javascript" src="./stringutils.js.загрузка"></script>
<script type="text/javascript">
         var gCurrentRadioNumber;
        resourceDictionary.Messages.StrNotLen = "The string is %1 characters long, but must be %2 characters long.";
        resourceDictionary.Messages.IntNtVld = "The value is not a valid integer.";
        resourceDictionary.Messages.ValNonNum = "The value contains a non-numerical character.";
        resourceDictionary.Messages.ValAtLst = "The value must be at least %s.";
        resourceDictionary.Messages.ValAtMst = "The value must be at most %s.";
	    var gCurrentRadioName;

      function checkFBT(obj) {
        if(obj.checked == true) {
           
             var sel_radio = document.forms['update-container'].elements['radioInterface'].selectedIndex;
           
           var sel_vap = obj.name.split('.')[1];

           var fbt_bssid = "wlan" + sel_radio + "ftvap" + sel_vap;
           
             if (fbt_bssid == "wlan0ftvap0") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap1") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap2") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap3") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap4") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap5") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap6") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap7") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap8") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap9") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap10") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap11") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap12") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap13") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap14") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap15") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap0") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap1") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap2") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap3") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap4") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap5") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap6") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap7") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap8") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap9") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap10") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap11") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap12") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap13") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap14") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap15") {
                ft_mode = "off";
             }
           

           if((ft_mode == "on") && (obj.name.indexOf("preauthentication") > 0)) {
              alert("Pre-authentication is not allowed when Fast Transition Mode is enabled.");
               obj.checked = false;
               return false;
           }

           if( ft_mode == "on" ) {
               alert("WPA-TKIP and MFP configurations are not allowed when Fast Transition Mode is enabled.");
               obj.checked = false;
               return false;
           }
        }
      }                

      function checkMfpFBT(obj) {
        if(obj.checked != true) {
           
             var sel_radio = document.forms['update-container'].elements['radioInterface'].selectedIndex;
           
           var sel_vap = obj.name.split('.')[1];

           var fbt_bssid = "wlan" + sel_radio + "ftvap" + sel_vap;
           
             if (fbt_bssid == "wlan0ftvap0") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap1") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap2") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap3") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap4") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap5") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap6") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap7") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap8") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap9") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap10") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap11") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap12") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap13") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap14") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan0ftvap15") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap0") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap1") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap2") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap3") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap4") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap5") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap6") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap7") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap8") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap9") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap10") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap11") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap12") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap13") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap14") {
                ft_mode = "off";
             }
           
             if (fbt_bssid == "wlan1ftvap15") {
                ft_mode = "off";
             }
           

           if((ft_mode == "on") && (obj.name.indexOf("preauthentication") > 0)) {
              alert("Pre-authentication is not allowed when Fast Transition Mode is enabled.");
               obj.checked = false;
               return false;
           }

           if( ft_mode == "on" ) {
               alert("WPA-TKIP and MFP configurations are not allowed when Fast Transition Mode is enabled.");
               obj.checked = true;
               return false;
           }
        }
      }

                function validateURL(value)
                {
                    lengthValue = value;
                    if(lengthValue.length != 0)
                    {
                        var charset = new RegExp();
                        charset.compile("^[A-Za-z]+://[A-Za-z0-9-]+\.[A-Za-z0-9]+");
                        if (!charset.test(lengthValue))
                        {
                           return false;
                        }
                        return true;
                    }
                    return false;
                }

                function alphanumericsymbols(value)
                {
                  var numaric = value;
                  if(numaric.length == 0)
                      return false;
               
	              numaric = value.replace(/^\s+|\s+$/g,"");
                  if(numaric.length == 0)
                      return false;

                  for(var i=0; i<numaric.length; i++)
                  {
                    var alphaa = numaric.charAt(i);
                    var c = alphaa.charCodeAt(0);
                    if(!(c > 31 && c < 127 && c != 34))
                      return false;
                  }
                  return true;
                }
             function isValidSsid(ssid_name)
             {
                var msg = "";   /* Return message */

	        if (ssid_name.charAt(0) == ' ' || ssid_name.charAt(ssid_name.length - 1) == ' ')
                {
	           msg = "Invalid SSID. Leading and trailing spaces are not allowed in SSID name.";
	           return msg;
                }
 
               if (!(ssid_name.length >= 1 && ssid_name.length <= 32))
               {
                  msg = "Invalid SSID. SSID name should be in the range 1 to 32 characters.";
                  return msg;
               }
              return msg; 
            }
            // Performance issue on msie 
            // var oldForm;
            function validateVlanIds() {
              var message = "";
              var prefix = '';
              if (gCurrentRadioName == "wlan1")
                  prefix = 'wlan1';
              else if (gCurrentRadioName == "wlan2")
                  prefix = 'wlan2';
              for( var i = 0; i < 16; i++ )
              {
                var vwn_enabled = document.getElementById( prefix + 'vwn_enabled_' + i );
                if( vwn_enabled.checked )
                {
                  var vlanid = document.getElementById( prefix + 'vwn_id_' + i ).value;
                  var gvlanid = document.getElementById( prefix + 'vwn_general_vlan_id_' + i ).value;
                  var ssid = document.getElementById( prefix + 'vwn_ssid_'  + i).value;
                  message = isValidSsid(ssid);
                  if(message)
                  {
                     return message + "\n";
                  }
                  if (!isVlanIdValid(vlanid))
                  {
                    var format = "The VLAN ID for VAP %1 is invalid: %2";
                    var reason = getInvalidVlanIdReason(vlanid);
                    message = formatOrderedResourceString(format, new Array(i, reason));
                    return message + "\n";
                  }
                  else if (!StringUtils.isNumeric(vlanid))
                  {
                    var format = "The VLAN ID for VAP %1 is invalid: %2";
                    var reason = "The value contains a non-numerical character.";
                    message = formatOrderedResourceString(format, new Array(i, reason));
                    return message + "\n";
                  }
                  if (!isVlanIdValid(gvlanid))
                  {
                    var format = "The General VLAN ID for VAP %1 is invalid: %2";
                    var reason = getInvalidVlanIdReason(gvlanid);
                    message = formatOrderedResourceString(format, new Array(i, reason));
                    return message + "\n";
                  }
                  else if (!StringUtils.isNumeric(gvlanid))
                  {
                    var format = "The General VLAN ID for VAP %1 is invalid: %2";
                    var reason = "The value contains a non-numerical character.";
                    message = formatOrderedResourceString(format, new Array(i, reason));
                    return message + "\n";
                  }
                }
              }
              return "";
            }
            
            function validateSecurity() {
              var valid = "";
              var validateFunc;
              var prefix = '';
              if (gCurrentRadioName == "wlan1")
                  prefix = 'wlan1';
              else if (gCurrentRadioName == "wlan2")
                  prefix = 'wlan2';
              for( var i = 0; i < 16; i++ ) {
					var vwn_enabled = document.getElementById( prefix + 'vwn_enabled_' + i );
					var param = gCurrentRadioName + " VAP " + i;
					if( vwn_enabled.checked ) {
					validateFunc = null;
					var mode = document.getElementById( prefix + 'security-mode-id' + i ).value;
                   if( mode == "static-wep" ) {
                      if( i == "0" ) {
                          validateFunc = gCurrentRadioName + "validateStaticWep";
                      } else {
                          validateFunc = gCurrentRadioName + "vap" + i + "validateStaticWep";
                      }
                   }
                   else if( mode == "wpa-personal" ) {
					validateFunc = prefix + "wpavlans" + i + "validateWpaPsk";
                   }
                   else if( mode == "dot1x" ) {
					validateFunc = prefix + "dot1xvlans" + i + "validate1x";
                   }
                   else if( mode == "wpa-enterprise" ) {
					validateFunc = prefix + "wparadiusvlans" + i + "validateWpaEnterprise";
                   }
                   if( validateFunc ) {
                     var msg;
                     eval( "msg = " + validateFunc + "(\'" + param + "\')" );
                     if( msg ) {
                         valid = valid + msg + "\n";
                         break;
                     }
                  }
                }
              }

              return valid;
            }

            function validateWDS() {
              var msg = "";
              
              var prefix = '';
              if (gCurrentRadioName == "wlan1")
                  prefix = 'wlan1';
              else if (gCurrentRadioName == "wlan2")
                  prefix = 'wlan2';
              var vwn0_enabled = document.getElementById(prefix + 'vwn_enabled_0');
              var wds = {};
              
                  
              
                  
              
                  
              
                  
              
                  
              
                  
              
                  
              
                  
              
              
              if(gCurrentRadioName in wds && !vwn0_enabled.checked) {
                msg = msg + "Cannot switch off VAP 0 while WDS is up";
              }

              return msg;
            }

            
            function validateGrsIpv4()
            {
              /* Global Radius settings validation */
              var id, id1,id2,id3;
              id =  document.getElementById('vapsettingsgrs-ip-id' ).value;
              id1 =  document.getElementById('vapsettingsgrs-ip-id1' ).value;
              id2 =  document.getElementById('vapsettingsgrs-ip-id2' ).value;
              id3 =  document.getElementById('vapsettingsgrs-ip-id3' ).value;
              key_0 = document.getElementById('vapsettingsgrs-key-id').value;
              key_1 = document.getElementById('vapsettingsgrs-key-id1').value;
              key_2 = document.getElementById('vapsettingsgrs-key-id2').value;
              key_3 = document.getElementById('vapsettingsgrs-key-id3').value;
              if(document.getElementById('update.device.global-radius-server.radius-ip-network-ipv4').checked == true)
               {
                   if(!((id != "" && key_0 != "")|| (id1 != "" && key_1 != "") || (id2 != "" && key_2 != "") || (id3 != "" && key_3 != "")))
                    {
                          var message ="In order for RADIUS SERVER to be effective, at least one IP Address and corresponding key must be configured." ;
                          return message;
                     }
               }
  
              var msg = "";
              if(id != "")
              {
              msg = isValidIPAddress(id);
              if(msg != "") 
              {
                 var message = "Invalid RADIUS IP Address: " + msg;
                 return message + "\n";
              }
              }
              if(id1 != "")
              { 
              msg = isValidIPAddress(id1);
              if(msg != "") 
              {
                 var message = "Invalid RADIUS IP Address 1: " + msg; 
                 return message + "\n";
              }
              }
              if(id2 != "")
              {
              msg = isValidIPAddress(id2);  
              if(msg != "") 
              {
                 var message = "Invalid RADIUS IP Address 2: " + msg;
                 return message + "\n";
              }
              }
              if(id3 != "")
              { 
              msg = isValidIPAddress(id3);
              if(msg != "") 
              {
                 var message = "Invalid RADIUS IP Address 3: " + msg;
                 return message + "\n";
              }
              }  
              return "";
            }

            function validateGrsIpv6()
            {
              var valid = "";

              /* Global Radius settings validation */
              var id, id1,id2,id3;
              id =  document.getElementById('vapsettingsgrs-ip6-id' ).value;
              id1 =  document.getElementById('vapsettingsgrs-ip6-id1' ).value;
              id2 =  document.getElementById('vapsettingsgrs-ip6-id2' ).value;
              id3 =  document.getElementById('vapsettingsgrs-ip6-id3' ).value;
              key_0 = document.getElementById('vapsettingsgrs-key-id').value;
              key_1 = document.getElementById('vapsettingsgrs-key-id1').value;
              key_2 = document.getElementById('vapsettingsgrs-key-id2').value;
              key_3 = document.getElementById('vapsettingsgrs-key-id3').value;

              if(document.getElementById('update.device.global-radius-server.radius-ip-network-ipv4').checked == false)
                   {
                       if(!((id != "" && key_0 != "")|| (id1 != "" && key_1 != "") || (id2 != "" && key_2 != "") || (id3 != "" && key_3 != "")))
                         {
                            var message ="In order for RADIUS SERVER to be effective, at least one IP Address and corresponding key must be configured." ;
                            return message;
                         }
                   }

              var msg= "";
              if(id != "")
              {
              	msg  = isValidIpv6Address(id);
	        if(msg != "")
        	 {
                   msg = "Invalid RADIUS IPv6 Address: " + msg;
                 }
              
              }
              if(msg == "" && id1 != ""){
               msg = isValidIpv6Address(id1);
               if(msg != "")
                 {
                   msg = "Invalid RADIUS IPv6 Address 1: " + msg;
                 }
 
              }
              if(msg == "" && id2 != "") {
              msg = isValidIpv6Address(id2);
              if(msg != "")
                 {
                   msg = "Invalid RADIUS IPv6 Address 2: " + msg;
                 }
 
              } 
              if(msg == "" && id3 != ""){
               msg = isValidIpv6Address(id3);
               if(msg != "")
                 {
                   msg = "Invalid RADIUS IPv6 Address 3: " + msg;
                 }

              }
              if(msg != "")
                    valid = msg+"\n";
     
              return valid;
            }

            function validateRADIUSKeys(id_prefix, ip_type_is_v4)
            {
              var id, id1, id2, id3;
              var key, labels, vap_index;

              if (id_prefix != "")
              {
                labels = id_prefix.split("dot1xvlans");
                if (labels.length > 1)
                {
                  vap_index = labels[1];
                }
                else
                {
                  labels = id_prefix.split("wparadiusvlans");
                  if (labels.length > 1)
                  {
                    vap_index = labels[1];
                  }
                  else
                  {
                    vap_index = "0";
                  }
                }
              }

              if (document.getElementById(ip_type_is_v4).checked)
              {
                if (id_prefix != "")
                {
                  id =  document.getElementById(id_prefix + 'radius-ip').value;
                  id1 =  document.getElementById(id_prefix + 'radius-backupone-ip').value;
                  id2 =  document.getElementById(id_prefix + 'radius-backuptwo-ip').value;
                  id3 =  document.getElementById(id_prefix + 'radius-backupthree-ip').value;
                }
                else
                {
                  id =  document.getElementById('vapsettingsgrs-ip-id').value;
                  id1 =  document.getElementById('vapsettingsgrs-ip-id1').value;
                  id2 =  document.getElementById('vapsettingsgrs-ip-id2').value;
                  id3 =  document.getElementById('vapsettingsgrs-ip-id3').value;
                }
              }
              else
              {
                if (id_prefix != "")
                {
                  id =  document.getElementById(id_prefix + 'radius-ipv6').value;
                  id1 =  document.getElementById(id_prefix + 'radius-backupone-ipv6').value;
                  id2 =  document.getElementById(id_prefix + 'radius-backuptwo-ipv6').value;
                  id3 =  document.getElementById(id_prefix + 'radius-backupthree-ipv6').value;
                }
                else
                {
                  id =  document.getElementById('vapsettingsgrs-ip6-id').value;
                  id1 =  document.getElementById('vapsettingsgrs-ip6-id1').value;
                  id2 =  document.getElementById('vapsettingsgrs-ip6-id2').value;
                  id3 =  document.getElementById('vapsettingsgrs-ip6-id3').value;
                }
              }

              var i, id_tmp, key_index;
              var key_suffix = "";
              for (i = 0; i < 4; i++)
              {
                switch(i)
                {
                  case 0:
                    id_tmp = id;
                    break;
                  case 1:
                    id_tmp = id1;
                    break;
                  case 2:
                    id_tmp = id2;
                    break;
                  case 3:
                    id_tmp = id3;
                    break;
                  default:
                }

                key_index = i + 1;
                if (id_prefix != "")
                {
                  key = document.getElementById(id_prefix + 'key-field' + key_suffix).value;
                }
                else
                {
                  key = document.getElementById('vapsettingsgrs-key-id' + key_suffix).value;
                }
                if (id_tmp != null && id_tmp.length != 0)
                {
                  if (key == null || key.length == 0 || !isValidRADIUSKey(key))
                  {
                    if (id_prefix != "")
                    {
                      var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
                      var message = formatResourceString(format, new Array(key_index.toString(), vap_index));
                    }
                    else
                    {
                      var format = "Invalid Global RADIUS Key %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
                      var message = formatResourceString(format, new Array(key_index.toString()));
                    }
                    return message + "\n";
                  }
                }
                else if (!isValidRADIUSKey(key))
                {
                  if (id_prefix != "")
                  {
                    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
                    var message = formatResourceString(format, new Array(key_index.toString(), vap_index));
                  }
                  else
                  {
                    var format = "Invalid Global RADIUS Key %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
                    var message = formatResourceString(format, new Array(key_index.toString()));
                  }
                  return message + "\n";
                }
                key_suffix = key_index.toString();
              }

              return "";
            }
            
/* Replicates the [broadcast|session]key-refresh-rate present in dot1x/wpa-personal to 
             * wpa-personal/dot1x respectively */
            function RefreshRate ()
            {
              var argv = RefreshRate.arguments;
              var argc = argv.length;
              var parseStr = argv[0];
              var newStr1, newStr2;
              var isBcast = argv[1];
              
              if (argv[0].match("dot1x"))
              {
                newStr1 = parseStr.replace (/dot1x/, "wparadius");
                newStr2 = parseStr.replace (/dot1x/, "wpa");
              }
              else if (argv[0].match("wparadius"))
              {
                newStr1 = parseStr.replace (/wparadius/, "dot1x");
                newStr2 = parseStr.replace (/wparadius/, "wpa");
              }
              else if (argv[0].match("wpa"))
              {
                newStr1 = parseStr.replace (/wpa/, "dot1x");
                newStr2 = parseStr.replace (/wpa/, "wparadius");
              }
              if (isBcast == "1")
              {
                if (document.getElementById(newStr1 + 'broadcast-key-refresh-rate'))
                  document.getElementById(newStr1 + 'broadcast-key-refresh-rate').value = document.getElementById(argv[0] + 'broadcast-key-refresh-rate').value;
                if (document.getElementById(newStr2 + 'broadcast-key-refresh-rate'))
                  document.getElementById(newStr2 + 'broadcast-key-refresh-rate').value = document.getElementById(argv[0] + 'broadcast-key-refresh-rate').value;
              }
              else
              {
                if (document.getElementById(newStr1 + 'session-key-refresh-rate'))
                  document.getElementById(newStr1 + 'session-key-refresh-rate').value = document.getElementById(argv[0] + 'session-key-refresh-rate').value;
                if (document.getElementById(newStr2 + 'session-key-refresh-rate'))
                  document.getElementById(newStr2 + 'session-key-refresh-rate').value = document.getElementById(argv[0] + 'session-key-refresh-rate').value;
              }
            }

            function validate() {
                var msg = "";
                var domain = document.getElementById('vapsettingsgrs-domain-id' ).value;
                var error = checkDomainName(domain);
                if (domain.length && error.length)
                  msg = 'Invalid RADIUS Domain: ' + error + "\n";
                msg += validateGrsIpv4();
                if(msg == "")
                {
                 
                 msg += validateGrsIpv6();
                 
                 if(msg == "")
                 {  
                   msg += validateRADIUSKeys("", 'update.device.global-radius-server.radius-ip-network-ipv4');
                   if(msg == "")
                   msg += validateVlanIds();
                   if(msg == "")
                   msg += validateSecurity();
                   if(msg == "")
                   msg += validateWDS();
                 }
                }
                if(msg.length) msg = msg + "\n";

                if (msg.length > 0) {
		    alert(msg);
                    return false;
                } else {
                    return true;
                }
            }
    	    function onRadioChange(radio) {
                gCurrentRadioNumber = radio.value;
	        	var s_radio = "wlan" + (radio.value -1);
                gCurrentRadioName = s_radio;
                document.getElementById("selected-radio").value = s_radio;
                document.getElementById("div_wlan0").style.visiblity = (s_radio == "wlan0") ? "visible" : "hidden";
                document.getElementById("div_wlan0").style.display = (s_radio == "wlan0") ? "block" : "none";
                
                document.getElementById("div_wlan1").style.visiblity = (s_radio == "wlan1") ? "visible" : "hidden";
                document.getElementById("div_wlan1").style.display = (s_radio == "wlan1") ? "block" : "none";
                
                
                disableCCMPFields();
                disableWPA2Fields();
            }
            function cleanup() {
                // Performance issue on msie 
                // if (formChanged(oldForm)) {
                var ok = confirm('Your wireless settings are about to be updated. You may be disconnected.');
                if (ok == false) return false;
                // }
            }
			function disableSecuritySettings(prefix, i, active){
				var securitySelection = document.getElementById( prefix + 'security-mode-id' + i );
				var wepPanel = document.getElementById( prefix + 'wep-settings-panel' + i );
				var dot11Panel = document.getElementById( prefix + 'dot1x-settings-panel' + i );
				var wpaPanel = document.getElementById( prefix + 'wpa-settings-panel' + i );
				var wpaRadiusPanel = document.getElementById( prefix + 'wparadius-settings-panel' + i );

				if (active && !securitySelection.disabled && securitySelection.value != "plain-text") {
					if( securitySelection.value != "static-wep" )
						disableChildren( wepPanel );
					if( securitySelection.value != "dot1x" )
						disableChildren( dot11Panel );
					if( securitySelection.value != "wpa-personal" ) 
						disableChildren( wpaPanel );
					if( securitySelection.value != "wpa-enterprise" ) 
						disableChildren( wpaRadiusPanel );
				}
				else {
					disableChildren( wepPanel );
					disableChildren( dot11Panel );
					disableChildren( wpaPanel );
					disableChildren( wpaRadiusPanel );
				}
			}
            function onSubmit() {
              var ok;
              var good = validate();
              if( good ) {
                /* for those vwn entries being updated, disable security settings unrelated to the selected settings */
                /* this way we avoid posting values that we do not need to update and reduce the update time of the page. */

				for( var i = 0; i < 16; i++ ) 
				{
					disableSecuritySettings ('', i, gCurrentRadioName == "wlan0");
					
					disableSecuritySettings ('wlan1', i, gCurrentRadioName == "wlan1");
					
					
				}
				ok = cleanup();
                if(ok == false)
                {
                  document.location='/admin.cgi?action=vwn';
                  return false;
                }
                enableCCMPFieldsForSubmit();
                enableWPA2FieldsForSubmit();
              }
              
                createCookie("radioIndex",document.forms['update-container'].radioInterface.selectedIndex,null);
              
              return good;
            }

            function disableCCMPFields()
            {
              for( var i = 0; i < 16; i++ )
              {
                
                  document.getElementById('wpavlans' + i + 'wpa-cipher-ccmp').disabled = true;
                  document.getElementById('wparadiusvlans' + i + 'wpa-cipher-ccmp').disabled = true;
                
                
                  document.getElementById('wlan1wpavlans' + i + 'wpa-cipher-ccmp').disabled = true;
                  document.getElementById('wlan1wparadiusvlans' + i + 'wpa-cipher-ccmp').disabled = true;
                
                
              }
            }
          function wpaPersonalMFPChanges()
            {
              for( var i = 0; i < 16; i++ )
              {
                if (document.getElementById('wpavlans' + i + 'wpa_version2_id').checked == true &&
                    document.getElementById('wpavlans' + i + 'wpa_version1_id').checked == false )
                {
                   document.getElementById('wpavlans' + i + 'mfp').style.display = "";
                   document.getElementById('wpavlans' + i + 'mfp').disabled = false;
                } 
                else
                {
                   document.getElementById('wpavlans' + i +'mfp').style.display = "none";
                   document.getElementById('wpavlans' + i +'mfp').disabled = true;
                }
                
                 if (document.getElementById('wlan1wpavlans' + i + 'wpa_version2_id').checked == true &&
                     document.getElementById('wlan1wpavlans' + i + 'wpa_version1_id').checked == false)
                {
                   document.getElementById('wlan1wpavlans' + i +'mfp').style.display = "";
                   document.getElementById('wlan1wpavlans' + i +'mfp').disabled = false;
                }
                else
                {
                   document.getElementById('wlan1wpavlans' + i +'mfp').style.display = "none";
                   document.getElementById('wlan1wpavlans' + i +'mfp').disabled = true;
                }
                
                
              }
            }
            function wpaEntMFPChanges()
            {
               /* Special case! For now we don't want show user required mode
                    in Enterprise werefication because many clients don't want
                    worck with it correctly. */
               for( var i = 0; i < 16; i++ )
               {
                 if (document.getElementById('wparadiusvlans' + i + 'wpa_version2_id').checked == true &&
                    document.getElementById('wparadiusvlans' + i + 'wpa_version1_id').checked == false)
                 {
                   var mfp = document.getElementById('wparadiusvlans' + i +'mfp');
                   mfp.style.display = "";
                   mfp.disabled = false;

                   var mfp_req = mfp.getElementsByTagName("td")[3];
                   mfp_req.style.display = "none";
                   mfp_req.disabled = false;
                   // document.getElementById('wparadiusvlans' + i +'mfp').style.display = "";
                   // document.getElementById('wparadiusvlans' + i +'mfp').disabled = false;
                 }
                 else
                 {
                   var mfp = document.getElementById('wparadiusvlans' + i +'mfp');
                   mfp.style.display = "none";
                   mfp.disabled = true;

                   var mfp_req = mfp.getElementsByTagName("td")[3];
                   mfp_req.style.display = "none";
                   mfp_req.disabled = false;
                   // document.getElementById('wparadiusvlans' + i +'mfp').style.display = "none";
                   // document.getElementById('wparadiusvlans' + i +'mfp').disabled = true;
                 }
                 
                 if (document.getElementById('wlan1wparadiusvlans' + i + 'wpa_version2_id').checked == true &&
                     document.getElementById('wlan1wparadiusvlans' + i + 'wpa_version1_id').checked == false) 
                 {
                   var mfp = document.getElementById('wlan1wparadiusvlans' + i +'mfp');
                   mfp.style.display = "";
                   mfp.disabled = false;

                   var mfp_req = mfp.getElementsByTagName("td")[3];
                   mfp_req.style.display = "none";
                   mfp_req.disabled = false;
                   // document.getElementById('wlan1wparadiusvlans' + i +'mfp').style.display = "";
                   // document.getElementById('wlan1wparadiusvlans' + i +'mfp').disabled = false;
                 }
                 else
                 {
                   var mfp = document.getElementById('wlan1wparadiusvlans' + i +'mfp');
                   mfp.style.display = "none";
                   mfp.disabled = true;

                   var mfp_req = mfp.getElementsByTagName("td")[3];
                   mfp_req.style.display = "none";
                   mfp_req.disabled = false;
                   // document.getElementById('wlan1wparadiusvlans' + i +'mfp').style.display = "none";
                   // document.getElementById('wlan1wparadiusvlans' + i +'mfp').disabled = true;
                 }
                 
                 
               }
            }
       
            function enableCCMPFieldsForSubmit()
            {
              for (var i = 0; i < 16; i++)
              {
                var securitySelection;
                if (gCurrentRadioName == "wlan0")
                {
                  
                    securitySelection = document.getElementById('security-mode-id' + i);
                    if (!securitySelection.disabled &&
                      ((securitySelection.value == "wpa-personal") || (securitySelection.value == "wpa-enterprise")))
                    {
                      document.getElementById('wpavlans' + i + 'wpa-cipher-ccmp').disabled = false;
                      document.getElementById('wparadiusvlans' + i + 'wpa-cipher-ccmp').disabled = false;
                    }
                  
                }
                else if (gCurrentRadioName == "wlan1")
                {
                  
                    securitySelection = document.getElementById('wlan1security-mode-id' + i);
                    if (!securitySelection.disabled &&
                      ((securitySelection.value == "wpa-personal") || (securitySelection.value == "wpa-enterprise")))
                    {
                      document.getElementById('wlan1wpavlans' + i + 'wpa-cipher-ccmp').disabled = false;
                      document.getElementById('wlan1wparadiusvlans' + i + 'wpa-cipher-ccmp').disabled = false;
                    }
                  
                }
                else if (gCurrentRadioName == "wlan2")
                {
                  
                }
              }
            }

            function disableWPA2Fields()
            {
              for( var i = 0; i < 16; i++ )
              {
                document.getElementById('wpavlans' + i + 'wpa_version2_id').disabled = true;
                document.getElementById('wparadiusvlans' + i + 'wpa_version2_id').disabled = true;
                
                
                  document.getElementById('wlan1wpavlans' + i + 'wpa_version2_id').disabled = true;
                  document.getElementById('wlan1wparadiusvlans' + i + 'wpa_version2_id').disabled = true;
                
                
              }
            }

            function enableWPA2FieldsForSubmit()
            {
              for (var i = 0; i < 16; i++)
              {
                var securitySelection;
                if (gCurrentRadioName == "wlan0")
                {
                  securitySelection = document.getElementById('security-mode-id' + i);
                  if (!securitySelection.disabled &&
                      ((securitySelection.value == "wpa-personal") || (securitySelection.value == "wpa-enterprise")))
                  {
                      document.getElementById('wpavlans' + i + 'wpa_version2_id').disabled = false;
                      document.getElementById('wparadiusvlans' + i + 'wpa_version2_id').disabled = false;
                  }
                }
                else if (gCurrentRadioName == "wlan1")
                {
                  
                    securitySelection = document.getElementById('wlan1security-mode-id' + i);
                    if (!securitySelection.disabled &&
                      ((securitySelection.value == "wpa-personal") || (securitySelection.value == "wpa-enterprise")))
                    {
                      document.getElementById('wlan1wpavlans' + i + 'wpa_version2_id').disabled = false;
                      document.getElementById('wlan1wparadiusvlans' + i + 'wpa_version2_id').disabled = false;
                    }
                  
                }
                else if (gCurrentRadioName == "wlan2")
                {
                  
                }
              }
            }

            function init() {
              
                var cookie = readCookie("radioIndex");
                var radioIndex = cookie ? cookie : 0;
                deleteCookie("radioIndex");
                gCurrentRadioNumber = radioIndex;
                gCurrentRadioNumber++;
                gCurrentRadioName = "wlan" + radioIndex;
                document.forms['update-container'].elements['radioInterface'].selectedIndex = radioIndex;
                onRadioChange(document.forms['update-container'].elements['radioInterface']);
              

              var vwnDisabled = ("up" != "up"); // serverside generated status value.
              if( vwnDisabled ) {
                disableChildren( document.getElementById( "update-container-id" ) );
              }
              // Performance issue on msie 
              // oldForm = saveForm();
              disableCCMPFields();
              disableWPA2Fields();
              wpaPersonalMFPChanges();
              wpaEntMFPChanges();
            }


        </script>

<!--- ...vwn.html -->
</head>

<!--- vwn.html... -->


<!--- ...vwn.html -->
<body onload="init();" style="margin: 0px;">
<table class="nav-content" width="100%" height="500" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td class="nav-client-content" align="left" valign="top" width="80%">
<table width="100%" border="0" cellpadding="0" cellspacing="0" height="100%">
<tbody><tr>
<td valign="top">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<!-- call:print_page_title() -->

        
            
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                      <tbody><tr><td id="page-title" class="page-title" align="left" width="100%" height="1">Modify Virtual Access Point settings</td></tr>
                      <tr><td>&nbsp;</td></tr>
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
            
        

<tr>
<td valign="top">

<!--- vwn.html... -->








<form id="update-container-id" name="ap3" method="POST" action="../ap3.php">
<table>
  <tbody><tr>
    <td>
      
  <script type="text/javascript" language="javascript"> 
    function setGRSAccountingvapsettings() {
      document.getElementById('vapsettingsgrs-accounting-input-id').value = document.getElementById('vapsettingsgrs-accounting-display-id').checked? "on" : "off";
    }
    addOnLoadHandler( setGRSAccountingvapsettings );
  </script>

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      Global RADIUS Server Settings
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">RADIUS Domain:&nbsp;</td>
      <td>
        <input id="vapsettingsgrs-domain-id" type="text" class="input-text" name="grs.radius-domain" value="root">
      </td>
  </tr>
  <tr>
    <td class="label" nowrap="">RADIUS IP Address Type:&nbsp;</td>
      <td>
  <script type="text/javascript" language="javascript"> 
    function grsRadioEnable(val) {

        if (val == "ipv4") {
            document.getElementById('v4row').style.display = "";
            document.getElementById('v4row1').style.display = "";
            document.getElementById('v4row2').style.display = "";
            document.getElementById('v4row3').style.display = "";
            document.getElementById('v6row').style.display = "none";
            document.getElementById('v6row1').style.display = "none";
            document.getElementById('v6row2').style.display = "none";
            document.getElementById('v6row3').style.display = "none";
         } else {
            document.getElementById('v4row').style.display = "none";
            document.getElementById('v4row1').style.display = "none";
            document.getElementById('v4row2').style.display = "none";
            document.getElementById('v4row3').style.display = "none";
            
            document.getElementById('v6row').style.display = "";
            document.getElementById('v6row1').style.display = "";
            document.getElementById('v6row2').style.display = "";
            document.getElementById('v6row3').style.display = "";
         }

       }
    function grsVapRadiusRadioEnable(val,rowName,id_prefix) {

        
        if (val == "ipv4") {
            document.getElementById("ipv6"+rowName).style.display = "none";
            document.getElementById("ipv4"+rowName).style.display = "";
  

            document.getElementById("ipv6"+rowName+"1").style.display = "none";
            document.getElementById("ipv4"+rowName+"1").style.display = "";

            document.getElementById("ipv6"+rowName+"2").style.display = "none";
            document.getElementById("ipv4"+rowName+"2").style.display = "";

            document.getElementById("ipv6"+rowName+"3").style.display = "none";
            document.getElementById("ipv4"+rowName+"3").style.display = "";

            if((id_prefix != null) && (id_prefix != undefined) && (id_prefix != "")) {
               document.getElementById(id_prefix+"radius-ipv6").disabled = true;
               document.getElementById(id_prefix+"radius-backupone-ipv6").disabled = true;
               document.getElementById(id_prefix+"radius-backuptwo-ipv6").disabled = true;
               document.getElementById(id_prefix+"radius-backupthree-ipv6").disabled = true;

               document.getElementById(id_prefix+"radius-ip").disabled = false;
               document.getElementById(id_prefix+"radius-backupone-ip").disabled = false;
               document.getElementById(id_prefix+"radius-backuptwo-ip").disabled = false;
               document.getElementById(id_prefix+"radius-backupthree-ip").disabled = false;
            }
         } else {
            document.getElementById("ipv4"+rowName).style.display = "none";
            document.getElementById("ipv6"+rowName).style.display = "";
  

            document.getElementById("ipv4"+rowName+"1").style.display = "none";
            document.getElementById("ipv6"+rowName+"1").style.display = "";

            document.getElementById("ipv4"+rowName+"2").style.display = "none";
            document.getElementById("ipv6"+rowName+"2").style.display = "";

            document.getElementById("ipv4"+rowName+"3").style.display = "none";
            document.getElementById("ipv6"+rowName+"3").style.display = "";

            if((id_prefix != null) && (id_prefix != undefined) && (id_prefix != "")) {
               document.getElementById(id_prefix+"radius-ipv6").disabled = false;
               document.getElementById(id_prefix+"radius-backupone-ipv6").disabled = false;
               document.getElementById(id_prefix+"radius-backuptwo-ipv6").disabled = false;
               document.getElementById(id_prefix+"radius-backupthree-ipv6").disabled = false;

               document.getElementById(id_prefix+"radius-ip").disabled = true;
               document.getElementById(id_prefix+"radius-backupone-ip").disabled = true;
               document.getElementById(id_prefix+"radius-backuptwo-ip").disabled = true;
               document.getElementById(id_prefix+"radius-backupthree-ip").disabled = true;
            }
         }
     
    }
  </script>
  <?php session_start() ?>
<input class="value" type="radio" name="update.device.global-radius-server.radius-ip-network" id="update.device.global-radius-server.radius-ip-network-ipv4" value="ipv4" checked="" onclick="grsRadioEnable(this.value)">
        IPv4
        
        <input class="value" type="radio" name="update.device.global-radius-server.radius-ip-network" id="update.device.global-radius-server.radius-ip-network-ipv6" value="ipv6" onclick="grsRadioEnable(this.value)">
        IPv6
        
      </td>
  </tr>
  <tr id="v4row">
    <td class="label" nowrap="">RADIUS IP Address:&nbsp;</td>
      <td>
      <input type="text" class="formtext" name="radius_ip3" value="<?=(isset($_SESSION['radius']['ip3'])?$_SESSION['radius']['ip3']:$_SESSION['radius']['ip3'])?>" />
      </td>
  </tr>

  <tr id="v6row" style="display: none;">
    <td class="label" nowrap="">RADIUS IPv6 Address:&nbsp;</td>
      <td>
      <input id="vapsettingsgrs-ip6-id" type="text" name="grs.radius-ipv6" value="::" maxlength="39" size="40">
      </td>
  </tr>
 
<script>
obj = document.getElementById('update.device.global-radius-server.radius-ip-network-ipv4');
if (obj.checked)
  grsRadioEnable('ipv4');
else
  grsRadioEnable('ipv6');
</script>
  <tr>
    <td class="label" nowrap="">RADIUS Key:&nbsp;</td>
      <td>
         <input type="text" class="formtext" name="radius_secret3" value="<?=(isset($_SESSION['radius']['secret3'])?$_SESSION['radius']['secret3']:'')?>"/>
      </td>
  </tr>
  
  <tr>
    <td class="label" nowrap="">RADIUS Port:&nbsp;</td>
      <td>
         <input type="text" class="formtext" name="radius_port3" value="<?=(isset($_SESSION['radius']['port3'])?$_SESSION['radius']['port3']:'')?>"/>
      </td>
  </tr>

<script type="text/javascript" language="javascript">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.31.51";
  var encrypted_key = "3865393138613733643132653739396361323461623066666664356634393932343432646264343233643232633836653638306662646332663133373931633335623137643461343631633864316162316433346531316333316466396434373962343339313362666239643233633262643036626239323039653433386636";
  var key = "vapsettingsgrs-key-id";

  if(!is_ipv4)
    ip = "::";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "vapsettingsgrs-key-id1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "vapsettingsgrs-key-id2";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "vapsettingsgrs-key-id3";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }
</script>

  <tr>
    <td class="label" colspan="3" nowrap="">
      <input type="checkbox" id="vapsettingsgrs-accounting-display-id" onclick="setGRSAccountingvapsettings();" checked="">
      <input type="hidden" id="vapsettingsgrs-accounting-input-id" name="grs.radius-accounting" value="on">
        Enable RADIUS Accounting
    </td>
  </tr>
  </tbody></table>
<input id="grs-pass-flag" type="hidden" name="pass-flag" value="0">
<input id="grs-pass-flag1" type="hidden" name="pass-flag1" value="0">
<input id="grs-pass-flag2" type="hidden" name="pass-flag2" value="0">
<input id="grs-pass-flag3" type="hidden" name="pass-flag3" value="0">

    </td>
  </tr>
</tbody></table>
<table border="0">
  
    <tbody><tr><td>&nbsp;</td></tr>
    <tr align="center">
      <td align="center">
        <table>
          <tbody><tr>
            <td class="label" align="center">Radio</td>
            
  <td>&nbsp;</td>

            <td class="value">
                <select name="radioInterface" onchange="onRadioChange(this)">
                
                
                <option value="1">
                1
                
                
                </option><option value="2">
                2
                
                
              </option></select>
            </td>
          </tr>
        </tbody></table>
      </td>
    </tr>
  
</tbody></table>
<input id="selected-radio" type="hidden" name="radios.myselected-radio" value="wlan0">
<script type="text/javascript" language="javascript">
  function clickBssDcspPrio(i) {
    var check = document.getElementById( 'vwn_dscp_prio_'+i ).checked;
    document.getElementById( 'bss_dscp_prio_'+i ).value = check ? '1' : '0';
  }
</script>
<div id="div_wlan0" style="visiblity:visible;display:block">
<table><tbody><tr><td width="1">
  <table class="sectioned">
  <tbody><tr><td>&nbsp;</td></tr>
    <tr>
      <td class="section-header" align="left" nowrap="">
        VAP
      </td>
      <td class="section-header" align="center" nowrap="">
        Enabled
      </td>
      <td class="section-header" align="left" nowrap="">
        VLAN ID
      </td>
      <td class="section-header" align="left" nowrap="">
        SSID
      </td>
      <td class="section-header" align="center" nowrap="">
        Broadcast SSID
      </td>
      <td class="section-header" align="center" nowrap="">
        Station Isolation
      </td>

      
      
      <td class="section-header" align="center" nowrap="">
        Band Steer
      </td>
      

      <td class="section-header" align="center" nowrap="">
        802.11k
      </td>
      <td class="section-header" align="center" nowrap="">
        DSCP Priority
      </td>
      <td class="section-header" align="center" nowrap="">
        VLAN Trunk
      </td>
      <td class="section-header" align="center" nowrap="">
        General Mode
      </td>
      <td class="section-header" align="center" nowrap="">
        General VLAN ID
      </td>
      <td class="section-header" align="center" nowrap="">
        VLAN Priority
      </td>
      <td class="section-header" align="left" nowrap="">
        Security
      </td>
      <td class="section-header" align="left" nowrap="">
        MAC Auth Type              <!-- LVL7 -->
      </td>
      <td class="section-header">&nbsp;</td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        1
      </td>
      	
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setEntryEnabledStates0() {
            var enabledCheckBox = document.getElementById( 'vwn_enabled_0' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan0hstatus_0' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan0hstatus_0' ).value = "up";
            }
            document.getElementById( 'vwn_id_0' ).disabled = disabled;
            document.getElementById( 'vwn_ssid_0' ).disabled = disabled;
            document.getElementById( 'vwn_broadcast_ssid_0' ).disabled = disabled;
            document.getElementById( 'vwn_dscp_prio_0' ).disabled = disabled;
            document.getElementById( 'bss_dscp_prio_0' ).disabled = disabled;
            document.getElementById( 'vwn_tagged_sta_mode_0' ).disabled = disabled;
            document.getElementById( 'vwn_general_vlan_mode_0' ).disabled = disabled;
            document.getElementById( 'vwn_general_vlan_id_0' ).disabled = disabled;
            document.getElementById( 'vwn_station_isolation_0' ).disabled = disabled;
            document.getElementById( 'vwn_prio_0' ).disabled = disabled;

            
            
              document.getElementById( 'vwn_band_steer_0' ).disabled = disabled;
            

            document.getElementById( 'vwn_rrm_mode_0' ).disabled = disabled;
            document.getElementById( 'security-mode-id0' ).disabled = disabled;
            document.getElementById( 'vwn_mac_auth_type_0' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wep-settings-panel0' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'dot1x-settings-panel0' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wpa-settings-panel0' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wparadius-settings-panel0' );
            var expander = document.getElementById( 'expand0' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showSecuritySettings0("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setEntryEnabledStates0 );
        </script>

          <?php 
            session_start()
          
          
          ?>
        <input class="input-checkbox" type="checkbox" id="vwn_enabled_0" name="wlan0vlans.0.bss.status" value="up" onclick="setEntryEnabledStates0(1);" checked=""> 
  
        <input type="hidden" name="wlan0vlans.0.bss.row" value="0">
        <input type="hidden" id="vwn_wlan0hstatus_0" name="wlan0vlans.0.bss.hstatus" value="up">
      </td>
      <td class="section-cell" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="vwn_id_0" name="wlan0vlans.0.interface.vlan-id" value="1">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="ssid3" name="ssid3" value="<?=(isset($_SESSION['ap']['SSID3'])?$_SESSION['ap']['SSID3']:'')?>">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_broadcast_ssid_0" name="wlan0vlans.0.bss.ignore-broadcast-ssid" value="off" onclick="setBroadcastSSID0(1);" checked="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_station_isolation_0" name="wlan0vlans.0.bss.station-isolation" value="on">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_band_steer_0" name="wlan0vlans.0.vap.band-steer-mode" value="up" onclick="setwlan0EntryBandSteerMode0(1);" checked="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_rrm_mode_0" name="wlan0vlans.0.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_dscp_prio_0" onclick="clickBssDcspPrio(&#39;0&#39;)">
        <input type="hidden" id="bss_dscp_prio_0" name="wlan0vlans.0.bss.dscp-prio" value="0">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_tagged_sta_mode_0" name="wlan0vlans.0.bss.tagged-sta-mode" value="on">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_general_vlan_mode_0" name="wlan0vlans.0.bss.general-vlan-mode" value="on">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="vwn_general_vlan_id_0" name="wlan0vlans.0.bss.general-vlan-id" value="1">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="vwn_prio_0" name="wlan0vlans.0.interface.vlan-prio">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan0EntryBandSteerMode0() {
            var bandsteerCheckBox = document.getElementById( 'vwn_band_steer_0' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_band_steer_0' ).value = "down";
            } else {
              document.getElementById( 'vwn_band_steer_0' ).value = "up";
            }
      }
      
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan0"))
        {
          if ((wps_vap == 0) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 0) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 0) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 0) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wparadius-settings-panel' + i );
          img = document.getElementById( 'expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 0 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 0 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showMacAuthSettings0(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan0"))
        {
          if ((wps_vap == 0) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('vwn_tagged_sta_mode_0').onclick = function() {
        var general_vlan = document.getElementById( 'vwn_general_vlan_mode_0' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('vwn_general_vlan_mode_0').onclick = function() {
        var vlan_trunk = document.getElementById( 'vwn_tagged_sta_mode_0' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="security-mode-id0" name="enc3"
        
         >
          <option value="plain-text" <?php if (isset($_SESSION['ap']['enc3'])) { if ($_SESSION['ap']['enc3'] == 'none'){ echo 'selected';}}?>>
          None1
          </option>
          
          <option value="wpa_psk" <?php if (isset($_SESSION['ap']['enc3'])) { if ($_SESSION['ap']['enc3'] == 'wpa_psk'){ echo 'selected';}}?>>
          WPA Personal
          </option>
          <option value="wpa_802.1x" <?php if (isset($_SESSION['ap']['enc3'])) { if ($_SESSION['ap']['enc3'] == 'wpa_802.1x'){ echo 'selected';}}?>>
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="vwn_mac_auth_type_0" name="wlan0vlans.0.bss.mac-acl-auth-type" onchange="showMacAuthSettings0(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
    <td align="left" valign="middle">
      <input type="hidden" name="hid_vap_id" id="hid_vap_id" value="">
      <input type="hidden" name="hid_radio" id="hid_radio" value="">
      <img id="expand0" src="./collapse.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src = &#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if( this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;security-mode-id0&#39; ); showSecuritySettings0(s.options[s.selectedIndex].value); this.src = &#39;collapse.gif&#39;; } else { showSecuritySettings0(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wpa-settings-panel0" style="">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wpavlans0validateWpaPsk(title) {
    var key = document.getElementById( 'wpavlans0wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wpavlans0broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewpavlans0() {
  var preAuth = document.getElementById( 'wpavlans0pre_auth_container_id' );

  document.getElementById( 'wpavlans0wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewpavlans0()
{
  var mfp = document.getElementById( 'wpavlans0mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewpavlans0() {
  var mfp = document.getElementById( 'wpavlans0mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewpavlans0 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewpavlans0(); if( !this.checked ) {setPreAuthEnabledStatewpavlans0(); document.getElementById(&#39;wpavlans0wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wpavlans0wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewpavlans0();} else if( this.checked ) {document.getElementById(&#39;wpavlans0wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wpavlans0wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewpavlans0();}" name="wlan0vlans.0.wpa-allowed" id="wpavlans0wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewpavlans0(); if( !this.checked ) document.getElementById(&#39;wpavlans0wpa_version1_id&#39;).checked = true;" name="wlan0vlans.0.wpa2-allowed" id="wpavlans0wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wpavlans0wpa-cipher-tkip" name="wlan0vlans.0.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wpavlans0wpa-cipher-ccmp" name="wlan0vlans.0.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>

  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wpavlans0wpa-personal-key" maxlength="63" name="passwordpsk"  value="<?=(isset($_SESSION['radius']['secret'])?$_SESSION['radius']['secret']:'')?>">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wpavlans0broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wpavlans0&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan0vlans.0.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wpavlans0mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wpavlans0mfp_not_reqd" name="wlan0vlans.0.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wpavlans0mfp_capable&#39;).checked = false; document.getElementById(&#39;wpavlans0mfp_capable&#39;).disabled = false; document.getElementById(&#39;wpavlans0mfp_reqd&#39;).checked = false; document.getElementById(&#39;wpavlans0mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wpavlans0mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wpavlans0mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wpavlans0mfp_capable&#39;).checked=true; document.getElementById(&#39;wpavlans0mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wpavlans0mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wpavlans0mfp_not_req_flag" type="hidden" name="wlan0vlans.0.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wpavlans0mfp_capable" name="wlan0vlans.0.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wpavlans0mfp_reqd&#39;).checked = false; document.getElementById(&#39;wpavlans0mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wpavlans0mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wpavlans0mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wpavlans0mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wpavlans0mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wpavlans0mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wpavlans0mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wpavlans0mfp_capable_flag" type="hidden" name="wlan0vlans.0.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wpavlans0mfp_reqd" name="wlan0vlans.0.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wpavlans0mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wpavlans0mfp_capable&#39;).checked = true; document.getElementById(&#39;wpavlans0mfp_capable&#39;).disabled=true; document.getElementById(&#39;wpavlans0mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wpavlans0mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wpavlans0mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wpavlans0mfp_capable&#39;).disabled=false;document.getElementById(&#39;wpavlans0mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wpavlans0mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wpavlans0mfp_req_flag" type="hidden" name="wlan0vlans.0.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wparadius-settings-panel0" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wparadiusvlans0validateWpaPsk(title) {
    var key = document.getElementById( 'wparadiusvlans0wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wparadiusvlans0broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewparadiusvlans0() {
  var preAuth = document.getElementById( 'wparadiusvlans0pre_auth_container_id' );

  document.getElementById( 'wparadiusvlans0wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewparadiusvlans0()
{
  var mfp = document.getElementById( 'wparadiusvlans0mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewparadiusvlans0() {
  var mfp = document.getElementById( 'wparadiusvlans0mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewparadiusvlans0 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewparadiusvlans0(); if( !this.checked ) {setPreAuthEnabledStatewparadiusvlans0(); document.getElementById(&#39;wparadiusvlans0wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wparadiusvlans0wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewparadiusvlans0();} else if( this.checked ) {document.getElementById(&#39;wparadiusvlans0wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wparadiusvlans0wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewparadiusvlans0();}" name="wlan0vlans.0.wpa-allowed" id="wparadiusvlans0wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewparadiusvlans0(); if( !this.checked ) document.getElementById(&#39;wparadiusvlans0wpa_version1_id&#39;).checked = true;" name="wlan0vlans.0.wpa2-allowed" id="wparadiusvlans0wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wparadiusvlans0pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan0vlans.0.rsn-preauthentication" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wparadiusvlans0wpa-cipher-tkip" name="wlan0vlans.0.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wparadiusvlans0wpa-cipher-ccmp" name="wlan0vlans.0.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wparadiusvlans0mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wparadiusvlans0mfp_not_reqd" name="wlan0vlans.0.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wparadiusvlans0mfp_capable&#39;).checked = false; document.getElementById(&#39;wparadiusvlans0mfp_capable&#39;).disabled = false; document.getElementById(&#39;wparadiusvlans0mfp_reqd&#39;).checked = false; document.getElementById(&#39;wparadiusvlans0mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wparadiusvlans0mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wparadiusvlans0mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wparadiusvlans0mfp_capable&#39;).checked=true; document.getElementById(&#39;wparadiusvlans0mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wparadiusvlans0mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wparadiusvlans0mfp_not_req_flag" type="hidden" name="wlan0vlans.0.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wparadiusvlans0mfp_capable" name="wlan0vlans.0.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wparadiusvlans0mfp_reqd&#39;).checked = false; document.getElementById(&#39;wparadiusvlans0mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wparadiusvlans0mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wparadiusvlans0mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wparadiusvlans0mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wparadiusvlans0mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wparadiusvlans0mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wparadiusvlans0mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wparadiusvlans0mfp_capable_flag" type="hidden" name="wlan0vlans.0.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wparadiusvlans0mfp_reqd" name="wlan0vlans.0.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wparadiusvlans0mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wparadiusvlans0mfp_capable&#39;).checked = true; document.getElementById(&#39;wparadiusvlans0mfp_capable&#39;).disabled=true; document.getElementById(&#39;wparadiusvlans0mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wparadiusvlans0mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wparadiusvlans0mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wparadiusvlans0mfp_capable&#39;).disabled=false;document.getElementById(&#39;wparadiusvlans0mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wparadiusvlans0mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wparadiusvlans0mfp_req_flag" type="hidden" name="wlan0vlans.0.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywparadiusvlans0() {
      var rs = document.getElementById( 'wparadiusvlans0radius-settings-grs' );
      document.getElementById('wparadiusvlans0use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wparadiusvlans0use-grs-input').value = document.getElementById('wparadiusvlans0use-grs-display').checked? "on" : "off";
     }




function wparadiusvlans0validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wparadiusvlans0broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wparadiusvlans0session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wparadiusvlans0use-grs-display').checked)
    {
       var domain = document.getElementById('wparadiusvlans0radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan0vlans.0.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wparadiusvlans0radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wparadiusvlans0radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wparadiusvlans0radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wparadiusvlans0radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wparadiusvlans0key-field').value;
	    var key_1 = document.getElementById('wparadiusvlans0key-field1').value;
	    var key_2 = document.getElementById('wparadiusvlans0key-field2').value;
	    var key_3 = document.getElementById('wparadiusvlans0key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wparadiusvlans0key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wparadiusvlans0key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wparadiusvlans0key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wparadiusvlans0key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wparadiusvlans0radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wparadiusvlans0radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wparadiusvlans0radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wparadiusvlans0radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wparadiusvlans0key-field').value;
	    var key_1 = document.getElementById('wparadiusvlans0key-field1').value;
	    var key_2 = document.getElementById('wparadiusvlans0key-field2').value;
	    var key_3 = document.getElementById('wparadiusvlans0key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wparadiusvlans0','wlan0vlans.0.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywparadiusvlans0 );
   </script>

<input id="wparadiusvlans0radius-key-flag" type="hidden" name="wlan0vlans.0.radius-key-flag" value="0">
<input id="wparadiusvlans0radius-key-flag1" type="hidden" name="wlan0vlans.0.radius-key-flag1" value="0">
<input id="wparadiusvlans0radius-key-flag2" type="hidden" name="wlan0vlans.0.radius-key-flag2" value="0">
<input id="wparadiusvlans0radius-key-flag3" type="hidden" name="wlan0vlans.0.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wparadiusvlans0use-grs-display" onclick="setRadiusSettingsDisplaywparadiusvlans0();" checked="">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wparadiusvlans0use-grs-input" name="wlan0vlans.0.global-radius" value="on">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wparadiusvlans0radius-settings-grs">
       <tbody style="color: rgb(128, 128, 128);"><tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Domain:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
         <input id="wparadiusvlans0radius-domain" type="text" class="text-input" name="radius_domain3" value="root" disabled="">
        </td>
       </tr>
       <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address Type:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
<input class="value" type="radio" name="wlan0vlans.0.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan0vlans.0.wpa-type2&#39;,&#39;wparadiusvlans0&#39;)" id="wlan0vlans.0.wparadius-ip-network-type2_ipv4" checked="" disabled="">
        IPv4
        <input class="value" type="radio" name="wlan0vlans.0.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan0vlans.0.wpa-type2&#39;,&#39;wparadiusvlans0&#39;)" id="wlan0vlans.0.wparadius-ip-network-type2_ipv6" disabled="">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan0vlans.0.wpa-type2" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="radius_ip3" type="text" class="text-input" name="radius_ip3" value="<?=(isset($_SESSION['radius']['ip3'])?$_SESSION['radius']['ip3']:'')?>" disabled="">
        </td>
      </tr>
      <tr id="ipv4wlan0vlans.0.wpa-type21" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans0radius-backupone-ip" type="text" class="text-input" name="wlan0vlans.0.radius-backupone-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan0vlans.0.wpa-type22" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans0radius-backuptwo-ip" type="text" class="text-input" name="wlan0vlans.0.radius-backuptwo-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan0vlans.0.wpa-type23" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans0radius-backupthree-ip" type="text" class="text-input" name="wlan0vlans.0.radius-backupthree-ip" value="" disabled="">
        </td>
      </tr>
     
      <tr id="ipv6wlan0vlans.0.wpa-type2" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans0radius-ipv6" type="text" name="wlan0vlans.0.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan0vlans.0.wpa-type21" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans0radius-backupone-ipv6" type="text" name="wlan0vlans.0.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan0vlans.0.wpa-type22" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans0radius-backuptwo-ipv6" type="text" name="wlan0vlans.0.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan0vlans.0.wpa-type23" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans0radius-backupthree-ipv6" type="text" name="wlan0vlans.0.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans0key-field1" type="password" name="wlan0vlans.0.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wparadiusvlans0radius-key-flag1&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans0key-field2" type="password" name="wlan0vlans.0.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wparadiusvlans0radius-key-flag2&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans0key-field3" type="password" name="wlan0vlans.0.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wparadiusvlans0radius-key-flag3&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript" style="color: rgb(128, 128, 128);">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.31.51";
  var encrypted_key = "6130383339306265343636323033326636383635353735373565633162626230333262653637366565653331363830386436306363613238613131303131393531666161346434626338666262653036396336653764663236383961643932316534396631653761633361303561313538363631663331343064386236346134";
  var key = "wparadiusvlans0key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wparadiusvlans0key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wparadiusvlans0key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wparadiusvlans0key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" colspan="3" nowrap="" style="color: rgb(128, 128, 128);">
          <input type="checkbox" name="wlan0vlans.0.radius-accounting" checked="" disabled="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan0vlans.0.radius-current" size="1">
       <option value="primary" selected="">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wparadiusvlans0broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wparadiusvlans0&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan0vlans.0.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Raate &nbsp;</td>
        <td>
        <input id="wparadiusvlans0session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wparadiusvlans0&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan0vlans.0.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan0vlans.0."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan0vlans.0."+"wpa"+"-type2","wparadiusvlans0");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan0vlans.0."+"wpa"+"-type2","wparadiusvlans0");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        2
      </td>
      	
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setEntryEnabledStates1() {
            var enabledCheckBox = document.getElementById( 'vwn_enabled_1' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan0hstatus_1' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan0hstatus_1' ).value = "up";
            }
            document.getElementById( 'vwn_id_1' ).disabled = disabled;
            document.getElementById( 'vwn_ssid_1' ).disabled = disabled;
            document.getElementById( 'vwn_broadcast_ssid_1' ).disabled = disabled;
            document.getElementById( 'vwn_dscp_prio_1' ).disabled = disabled;
            document.getElementById( 'bss_dscp_prio_1' ).disabled = disabled;
            document.getElementById( 'vwn_tagged_sta_mode_1' ).disabled = disabled;
            document.getElementById( 'vwn_general_vlan_mode_1' ).disabled = disabled;
            document.getElementById( 'vwn_general_vlan_id_1' ).disabled = disabled;
            document.getElementById( 'vwn_station_isolation_1' ).disabled = disabled;
            document.getElementById( 'vwn_prio_1' ).disabled = disabled;

            
            
              document.getElementById( 'vwn_band_steer_1' ).disabled = disabled;
            

            document.getElementById( 'vwn_rrm_mode_1' ).disabled = disabled;
            document.getElementById( 'security-mode-id1' ).disabled = disabled;
            document.getElementById( 'vwn_mac_auth_type_1' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wep-settings-panel1' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'dot1x-settings-panel1' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wpa-settings-panel1' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wparadius-settings-panel1' );
            var expander = document.getElementById( 'expand1' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showSecuritySettings1("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setEntryEnabledStates1 );
        </script>

        <input class="input-checkbox" type="checkbox" id="vwn_enabled_1" name="wlan0vlans.1.bss.status" value="up" onclick="setEntryEnabledStates1(1);" checked=""> 
  
        <input type="hidden" name="wlan0vlans.1.bss.row" value="1">
        <input type="hidden" id="vwn_wlan0hstatus_1" name="wlan0vlans.1.bss.hstatus" value="up">
      </td>
      <td class="section-cell" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="vwn_id_1" name="wlan0vlans.1.interface.vlan-id" value="1">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="vwn_ssid_1" name="wlan0vlans.1.interface.ssid" value="yurxanwifi">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_broadcast_ssid_1" name="wlan0vlans.1.bss.ignore-broadcast-ssid" value="off" onclick="setBroadcastSSID1(1);" checked="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_station_isolation_1" name="wlan0vlans.1.bss.station-isolation" value="on">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_band_steer_1" name="wlan0vlans.1.vap.band-steer-mode" value="up" onclick="setwlan0EntryBandSteerMode1(1);" checked="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_rrm_mode_1" name="wlan0vlans.1.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_dscp_prio_1" onclick="clickBssDcspPrio(&#39;1&#39;)">
        <input type="hidden" id="bss_dscp_prio_1" name="wlan0vlans.1.bss.dscp-prio" value="0">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_tagged_sta_mode_1" name="wlan0vlans.1.bss.tagged-sta-mode" value="on">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_general_vlan_mode_1" name="wlan0vlans.1.bss.general-vlan-mode" value="on">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="vwn_general_vlan_id_1" name="wlan0vlans.1.bss.general-vlan-id" value="1">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="vwn_prio_1" name="wlan0vlans.1.interface.vlan-prio">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan0EntryBandSteerMode1() {
            var bandsteerCheckBox = document.getElementById( 'vwn_band_steer_1' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_band_steer_1' ).value = "down";
            } else {
              document.getElementById( 'vwn_band_steer_1' ).value = "up";
            }
      }
      

      function setBroadcastSSID1()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan0"))
        {
          var broadcast_ssid = document.getElementById( 'vwn_broadcast_ssid_1' ).checked;
          if ((wps_vap == 1) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showSecuritySettings1(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan0"))
        {
          if ((wps_vap == 1) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 1) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 1) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 1) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wparadius-settings-panel' + i );
          img = document.getElementById( 'expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 1 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 1 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showMacAuthSettings1(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan0"))
        {
          if ((wps_vap == 1) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('vwn_tagged_sta_mode_1').onclick = function() {
        var general_vlan = document.getElementById( 'vwn_general_vlan_mode_1' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('vwn_general_vlan_mode_1').onclick = function() {
        var vlan_trunk = document.getElementById( 'vwn_tagged_sta_mode_1' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="security-mode-id1" name="wlan0vlans.1.security" onchange="showSecuritySettings1(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);">
          <option value="plain-text">
          None
          </option>
          
          <option value="wpa-personal">
          WPA Personal
          </option>
          <option value="wpa-enterprise" selected="">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="vwn_mac_auth_type_1" name="wlan0vlans.1.bss.mac-acl-auth-type" onchange="showMacAuthSettings1(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
    <td align="left" valign="middle">
      <input type="hidden" name="hid_vap_id" id="hid_vap_id" value="">
      <input type="hidden" name="hid_radio" id="hid_radio" value="">
      <img id="expand1" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src = &#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if( this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;security-mode-id1&#39; ); showSecuritySettings1(s.options[s.selectedIndex].value); this.src = &#39;collapse.gif&#39;; } else { showSecuritySettings1(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wpa-settings-panel1" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wpavlans1validateWpaPsk(title) {
    var key = document.getElementById( 'wpavlans1wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wpavlans1broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewpavlans1() {
  var preAuth = document.getElementById( 'wpavlans1pre_auth_container_id' );

  document.getElementById( 'wpavlans1wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewpavlans1()
{
  var mfp = document.getElementById( 'wpavlans1mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewpavlans1() {
  var mfp = document.getElementById( 'wpavlans1mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewpavlans1 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewpavlans1(); if( !this.checked ) {setPreAuthEnabledStatewpavlans1(); document.getElementById(&#39;wpavlans1wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wpavlans1wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewpavlans1();} else if( this.checked ) {document.getElementById(&#39;wpavlans1wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wpavlans1wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewpavlans1();}" name="wlan0vlans.1.wpa-allowed" id="wpavlans1wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewpavlans1(); if( !this.checked ) document.getElementById(&#39;wpavlans1wpa_version1_id&#39;).checked = true;" name="wlan0vlans.1.wpa2-allowed" id="wpavlans1wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wpavlans1wpa-cipher-tkip" name="wlan0vlans.1.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wpavlans1wpa-cipher-ccmp" name="wlan0vlans.1.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wpavlans1wpa-personal-key" maxlength="63" name="wlan0vlans.1.wpa-personal-key" value="qwerty123">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wpavlans1broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wpavlans1&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan0vlans.1.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wpavlans1mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wpavlans1mfp_not_reqd" name="wlan0vlans.1.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wpavlans1mfp_capable&#39;).checked = false; document.getElementById(&#39;wpavlans1mfp_capable&#39;).disabled = false; document.getElementById(&#39;wpavlans1mfp_reqd&#39;).checked = false; document.getElementById(&#39;wpavlans1mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wpavlans1mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wpavlans1mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wpavlans1mfp_capable&#39;).checked=true; document.getElementById(&#39;wpavlans1mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wpavlans1mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wpavlans1mfp_not_req_flag" type="hidden" name="wlan0vlans.1.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wpavlans1mfp_capable" name="wlan0vlans.1.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wpavlans1mfp_reqd&#39;).checked = false; document.getElementById(&#39;wpavlans1mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wpavlans1mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wpavlans1mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wpavlans1mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wpavlans1mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wpavlans1mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wpavlans1mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wpavlans1mfp_capable_flag" type="hidden" name="wlan0vlans.1.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wpavlans1mfp_reqd" name="wlan0vlans.1.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wpavlans1mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wpavlans1mfp_capable&#39;).checked = true; document.getElementById(&#39;wpavlans1mfp_capable&#39;).disabled=true; document.getElementById(&#39;wpavlans1mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wpavlans1mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wpavlans1mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wpavlans1mfp_capable&#39;).disabled=false;document.getElementById(&#39;wpavlans1mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wpavlans1mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wpavlans1mfp_req_flag" type="hidden" name="wlan0vlans.1.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wparadius-settings-panel1" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wparadiusvlans1validateWpaPsk(title) {
    var key = document.getElementById( 'wparadiusvlans1wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wparadiusvlans1broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewparadiusvlans1() {
  var preAuth = document.getElementById( 'wparadiusvlans1pre_auth_container_id' );

  document.getElementById( 'wparadiusvlans1wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewparadiusvlans1()
{
  var mfp = document.getElementById( 'wparadiusvlans1mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewparadiusvlans1() {
  var mfp = document.getElementById( 'wparadiusvlans1mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewparadiusvlans1 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewparadiusvlans1(); if( !this.checked ) {setPreAuthEnabledStatewparadiusvlans1(); document.getElementById(&#39;wparadiusvlans1wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wparadiusvlans1wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewparadiusvlans1();} else if( this.checked ) {document.getElementById(&#39;wparadiusvlans1wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wparadiusvlans1wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewparadiusvlans1();}" name="wlan0vlans.1.wpa-allowed" id="wparadiusvlans1wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewparadiusvlans1(); if( !this.checked ) document.getElementById(&#39;wparadiusvlans1wpa_version1_id&#39;).checked = true;" name="wlan0vlans.1.wpa2-allowed" id="wparadiusvlans1wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wparadiusvlans1pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan0vlans.1.rsn-preauthentication" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wparadiusvlans1wpa-cipher-tkip" name="wlan0vlans.1.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wparadiusvlans1wpa-cipher-ccmp" name="wlan0vlans.1.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wparadiusvlans1mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wparadiusvlans1mfp_not_reqd" name="wlan0vlans.1.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wparadiusvlans1mfp_capable&#39;).checked = false; document.getElementById(&#39;wparadiusvlans1mfp_capable&#39;).disabled = false; document.getElementById(&#39;wparadiusvlans1mfp_reqd&#39;).checked = false; document.getElementById(&#39;wparadiusvlans1mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wparadiusvlans1mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wparadiusvlans1mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wparadiusvlans1mfp_capable&#39;).checked=true; document.getElementById(&#39;wparadiusvlans1mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wparadiusvlans1mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wparadiusvlans1mfp_not_req_flag" type="hidden" name="wlan0vlans.1.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wparadiusvlans1mfp_capable" name="wlan0vlans.1.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wparadiusvlans1mfp_reqd&#39;).checked = false; document.getElementById(&#39;wparadiusvlans1mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wparadiusvlans1mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wparadiusvlans1mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wparadiusvlans1mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wparadiusvlans1mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wparadiusvlans1mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wparadiusvlans1mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wparadiusvlans1mfp_capable_flag" type="hidden" name="wlan0vlans.1.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wparadiusvlans1mfp_reqd" name="wlan0vlans.1.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wparadiusvlans1mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wparadiusvlans1mfp_capable&#39;).checked = true; document.getElementById(&#39;wparadiusvlans1mfp_capable&#39;).disabled=true; document.getElementById(&#39;wparadiusvlans1mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wparadiusvlans1mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wparadiusvlans1mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wparadiusvlans1mfp_capable&#39;).disabled=false;document.getElementById(&#39;wparadiusvlans1mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wparadiusvlans1mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wparadiusvlans1mfp_req_flag" type="hidden" name="wlan0vlans.1.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywparadiusvlans1() {
      var rs = document.getElementById( 'wparadiusvlans1radius-settings-grs' );
      document.getElementById('wparadiusvlans1use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wparadiusvlans1use-grs-input').value = document.getElementById('wparadiusvlans1use-grs-display').checked? "on" : "off";
     }




function wparadiusvlans1validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wparadiusvlans1broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wparadiusvlans1session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wparadiusvlans1use-grs-display').checked)
    {
       var domain = document.getElementById('wparadiusvlans1radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan0vlans.1.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wparadiusvlans1radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wparadiusvlans1radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wparadiusvlans1radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wparadiusvlans1radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wparadiusvlans1key-field').value;
	    var key_1 = document.getElementById('wparadiusvlans1key-field1').value;
	    var key_2 = document.getElementById('wparadiusvlans1key-field2').value;
	    var key_3 = document.getElementById('wparadiusvlans1key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wparadiusvlans1key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wparadiusvlans1key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wparadiusvlans1key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wparadiusvlans1key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wparadiusvlans1radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wparadiusvlans1radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wparadiusvlans1radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wparadiusvlans1radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wparadiusvlans1key-field').value;
	    var key_1 = document.getElementById('wparadiusvlans1key-field1').value;
	    var key_2 = document.getElementById('wparadiusvlans1key-field2').value;
	    var key_3 = document.getElementById('wparadiusvlans1key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wparadiusvlans1','wlan0vlans.1.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywparadiusvlans1 );
   </script>

<input id="wparadiusvlans1radius-key-flag" type="hidden" name="wlan0vlans.1.radius-key-flag" value="0">
<input id="wparadiusvlans1radius-key-flag1" type="hidden" name="wlan0vlans.1.radius-key-flag1" value="0">
<input id="wparadiusvlans1radius-key-flag2" type="hidden" name="wlan0vlans.1.radius-key-flag2" value="0">
<input id="wparadiusvlans1radius-key-flag3" type="hidden" name="wlan0vlans.1.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wparadiusvlans1use-grs-display" onclick="setRadiusSettingsDisplaywparadiusvlans1();">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wparadiusvlans1use-grs-input" name="wlan0vlans.1.global-radius" value="off">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wparadiusvlans1radius-settings-grs">
       <tbody><tr>
        <td class="label" nowrap="">RADIUS Domain:&nbsp;</td>
        <td>
         <input id="wparadiusvlans1radius-domain" type="text" class="text-input" name="wlan0vlans.1.radius-domain" value="root">
        </td>
       </tr>
       <tr>
        <td class="label" nowrap="">RADIUS IP Address Type:&nbsp;</td>
        <td>
<input class="value" type="radio" name="wlan0vlans.1.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan0vlans.1.wpa-type2&#39;,&#39;wparadiusvlans1&#39;)" id="wlan0vlans.1.wparadius-ip-network-type2_ipv4" checked="">
        IPv4
        <input class="value" type="radio" name="wlan0vlans.1.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan0vlans.1.wpa-type2&#39;,&#39;wparadiusvlans1&#39;)" id="wlan0vlans.1.wparadius-ip-network-type2_ipv6">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan0vlans.1.wpa-type2">
        <td class="label" nowrap="">RADIUS IP Address:&nbsp;</td>
        <td>
        <input id="wparadiusvlans1radius-ip" type="text" class="text-input" name="wlan0vlans.1.radius-ip" value="192.168.31.90">
        </td>
      </tr>
      <tr id="ipv4wlan0vlans.1.wpa-type21">
        <td class="label" nowrap="">RADIUS IP Address-1:&nbsp;</td>
        <td>
        <input id="wparadiusvlans1radius-backupone-ip" type="text" class="text-input" name="wlan0vlans.1.radius-backupone-ip" value="">
        </td>
      </tr>
       <tr id="ipv4wlan0vlans.1.wpa-type22">
        <td class="label" nowrap="">RADIUS IP Address-2:&nbsp;</td>
        <td>
        <input id="wparadiusvlans1radius-backuptwo-ip" type="text" class="text-input" name="wlan0vlans.1.radius-backuptwo-ip" value="">
        </td>
      </tr>
       <tr id="ipv4wlan0vlans.1.wpa-type23">
        <td class="label" nowrap="">RADIUS IP Address-3:&nbsp;</td>
        <td>
        <input id="wparadiusvlans1radius-backupthree-ip" type="text" class="text-input" name="wlan0vlans.1.radius-backupthree-ip" value="">
        </td>
      </tr>
     
      <tr id="ipv6wlan0vlans.1.wpa-type2" style="display: none;">
        <td class="label" nowrap="">RADIUS IPv6 Address:&nbsp;</td>
        <td>
        <input id="wparadiusvlans1radius-ipv6" type="text" name="wlan0vlans.1.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan0vlans.1.wpa-type21" style="display: none;">
        <td class="label" nowrap="">RADIUS IPv6 Address-1:&nbsp;</td>
        <td>
        <input id="wparadiusvlans1radius-backupone-ipv6" type="text" name="wlan0vlans.1.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan0vlans.1.wpa-type22" style="display: none;">
        <td class="label" nowrap="">RADIUS IPv6 Address-2:&nbsp;</td>
        <td>
        <input id="wparadiusvlans1radius-backuptwo-ipv6" type="text" name="wlan0vlans.1.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan0vlans.1.wpa-type23" style="display: none;">
        <td class="label" nowrap="">RADIUS IPv6 Address-3:&nbsp;</td>
        <td>
        <input id="wparadiusvlans1radius-backupthree-ipv6" type="text" name="wlan0vlans.1.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr>
        <td class="label" nowrap="">RADIUS Key:&nbsp;</td>
        <td>
        <input id="wparadiusvlans1key-field" type="password" name="wlan0vlans.1.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wparadiusvlans1radius-key-flag&#39;).value = &#39;1&#39;;">
        </td>
      </tr>
      <tr>
        <td class="label" nowrap="">RADIUS Key-1:&nbsp;</td>
        <td>
        <input id="wparadiusvlans1key-field1" type="password" name="wlan0vlans.1.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wparadiusvlans1radius-key-flag1&#39;).value = &#39;1&#39;;">
        </td>
      </tr>
      <tr>
        <td class="label" nowrap="">RADIUS Key-2:&nbsp;</td>
        <td>
        <input id="wparadiusvlans1key-field2" type="password" name="wlan0vlans.1.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wparadiusvlans1radius-key-flag2&#39;).value = &#39;1&#39;;">
        </td>
      </tr>
      <tr>
        <td class="label" nowrap="">RADIUS Key-3:&nbsp;</td>
        <td>
        <input id="wparadiusvlans1key-field3" type="password" name="wlan0vlans.1.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wparadiusvlans1radius-key-flag3&#39;).value = &#39;1&#39;;">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.31.90";
  var encrypted_key = "6130383339306265343636323033326636383635353735373565633162626230376163386264336630616131316562346235626430646266396137383766373764356437613932653036616139343935306639363331613039373937353161333636396264353934666663313663383933636235323833363439303630656238";
  var key = "wparadiusvlans1key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wparadiusvlans1key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wparadiusvlans1key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wparadiusvlans1key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr>
        <td class="label" colspan="3" nowrap="">
          <input type="checkbox" name="wlan0vlans.1.radius-accounting" checked="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan0vlans.1.radius-current" size="1">
       <option value="primary" selected="">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wparadiusvlans1broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wparadiusvlans1&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan0vlans.1.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wparadiusvlans1session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wparadiusvlans1&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan0vlans.1.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan0vlans.1."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan0vlans.1."+"wpa"+"-type2","wparadiusvlans1");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan0vlans.1."+"wpa"+"-type2","wparadiusvlans1");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        3
      </td>
      	
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setEntryEnabledStates2() {
            var enabledCheckBox = document.getElementById( 'vwn_enabled_2' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan0hstatus_2' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan0hstatus_2' ).value = "up";
            }
            document.getElementById( 'vwn_id_2' ).disabled = disabled;
            document.getElementById( 'vwn_ssid_2' ).disabled = disabled;
            document.getElementById( 'vwn_broadcast_ssid_2' ).disabled = disabled;
            document.getElementById( 'vwn_dscp_prio_2' ).disabled = disabled;
            document.getElementById( 'bss_dscp_prio_2' ).disabled = disabled;
            document.getElementById( 'vwn_tagged_sta_mode_2' ).disabled = disabled;
            document.getElementById( 'vwn_general_vlan_mode_2' ).disabled = disabled;
            document.getElementById( 'vwn_general_vlan_id_2' ).disabled = disabled;
            document.getElementById( 'vwn_station_isolation_2' ).disabled = disabled;
            document.getElementById( 'vwn_prio_2' ).disabled = disabled;

            
            
              document.getElementById( 'vwn_band_steer_2' ).disabled = disabled;
            

            document.getElementById( 'vwn_rrm_mode_2' ).disabled = disabled;
            document.getElementById( 'security-mode-id2' ).disabled = disabled;
            document.getElementById( 'vwn_mac_auth_type_2' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wep-settings-panel2' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'dot1x-settings-panel2' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wpa-settings-panel2' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wparadius-settings-panel2' );
            var expander = document.getElementById( 'expand2' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showSecuritySettings2("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setEntryEnabledStates2 );
        </script>

        <input class="input-checkbox" type="checkbox" id="vwn_enabled_2" name="wlan0vlans.2.bss.status" value="up" onclick="setEntryEnabledStates2(1);" checked=""> 
  
        <input type="hidden" name="wlan0vlans.2.bss.row" value="2">
        <input type="hidden" id="vwn_wlan0hstatus_2" name="wlan0vlans.2.bss.hstatus" value="up">
      </td>
      <td class="section-cell" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="vwn_id_2" name="wlan0vlans.2.interface.vlan-id" value="1">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="vwn_ssid_2" name="wlan0vlans.2.interface.ssid" value="iktb17mwifi">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_broadcast_ssid_2" name="wlan0vlans.2.bss.ignore-broadcast-ssid" value="off" onclick="setBroadcastSSID2(1);" checked="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_station_isolation_2" name="wlan0vlans.2.bss.station-isolation" value="on">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_band_steer_2" name="wlan0vlans.2.vap.band-steer-mode" value="up" onclick="setwlan0EntryBandSteerMode2(1);" checked="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_rrm_mode_2" name="wlan0vlans.2.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_dscp_prio_2" onclick="clickBssDcspPrio(&#39;2&#39;)">
        <input type="hidden" id="bss_dscp_prio_2" name="wlan0vlans.2.bss.dscp-prio" value="0">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_tagged_sta_mode_2" name="wlan0vlans.2.bss.tagged-sta-mode" value="on">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="vwn_general_vlan_mode_2" name="wlan0vlans.2.bss.general-vlan-mode" value="on">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="vwn_general_vlan_id_2" name="wlan0vlans.2.bss.general-vlan-id" value="1">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="vwn_prio_2" name="wlan0vlans.2.interface.vlan-prio">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan0EntryBandSteerMode2() {
            var bandsteerCheckBox = document.getElementById( 'vwn_band_steer_2' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_band_steer_2' ).value = "down";
            } else {
              document.getElementById( 'vwn_band_steer_2' ).value = "up";
            }
      }
      

      function setBroadcastSSID2()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan0"))
        {
          var broadcast_ssid = document.getElementById( 'vwn_broadcast_ssid_2' ).checked;
          if ((wps_vap == 2) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showSecuritySettings2(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan0"))
        {
          if ((wps_vap == 2) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 2) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 2) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 2) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wparadius-settings-panel' + i );
          img = document.getElementById( 'expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 2 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 2 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showMacAuthSettings2(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan0"))
        {
          if ((wps_vap == 2) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('vwn_tagged_sta_mode_2').onclick = function() {
        var general_vlan = document.getElementById( 'vwn_general_vlan_mode_2' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('vwn_general_vlan_mode_2').onclick = function() {
        var vlan_trunk = document.getElementById( 'vwn_tagged_sta_mode_2' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="security-mode-id2" name="wlan0vlans.2.security" onchange="showSecuritySettings2(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);">
          <option value="plain-text" selected="">
          None
          </option>
          
          <option value="wpa-personal">
          WPA Personal
          </option>
          <option value="wpa-enterprise">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="vwn_mac_auth_type_2" name="wlan0vlans.2.bss.mac-acl-auth-type" onchange="showMacAuthSettings2(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
    <td align="left" valign="middle">
      <input type="hidden" name="hid_vap_id" id="hid_vap_id" value="">
      <input type="hidden" name="hid_radio" id="hid_radio" value="">
      <img id="expand2" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src = &#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if( this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;security-mode-id2&#39; ); showSecuritySettings2(s.options[s.selectedIndex].value); this.src = &#39;collapse.gif&#39;; } else { showSecuritySettings2(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wpa-settings-panel2" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wpavlans2validateWpaPsk(title) {
    var key = document.getElementById( 'wpavlans2wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wpavlans2broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewpavlans2() {
  var preAuth = document.getElementById( 'wpavlans2pre_auth_container_id' );

  document.getElementById( 'wpavlans2wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewpavlans2()
{
  var mfp = document.getElementById( 'wpavlans2mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewpavlans2() {
  var mfp = document.getElementById( 'wpavlans2mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewpavlans2 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewpavlans2(); if( !this.checked ) {setPreAuthEnabledStatewpavlans2(); document.getElementById(&#39;wpavlans2wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wpavlans2wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewpavlans2();} else if( this.checked ) {document.getElementById(&#39;wpavlans2wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wpavlans2wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewpavlans2();}" name="wlan0vlans.2.wpa-allowed" id="wpavlans2wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewpavlans2(); if( !this.checked ) document.getElementById(&#39;wpavlans2wpa_version1_id&#39;).checked = true;" name="wlan0vlans.2.wpa2-allowed" id="wpavlans2wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wpavlans2wpa-cipher-tkip" name="wlan0vlans.2.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wpavlans2wpa-cipher-ccmp" name="wlan0vlans.2.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wpavlans2wpa-personal-key" maxlength="63" name="wlan0vlans.2.wpa-personal-key" value="32200322">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wpavlans2broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wpavlans2&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan0vlans.2.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wpavlans2mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wpavlans2mfp_not_reqd" name="wlan0vlans.2.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wpavlans2mfp_capable&#39;).checked = false; document.getElementById(&#39;wpavlans2mfp_capable&#39;).disabled = false; document.getElementById(&#39;wpavlans2mfp_reqd&#39;).checked = false; document.getElementById(&#39;wpavlans2mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wpavlans2mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wpavlans2mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wpavlans2mfp_capable&#39;).checked=true; document.getElementById(&#39;wpavlans2mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wpavlans2mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wpavlans2mfp_not_req_flag" type="hidden" name="wlan0vlans.2.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wpavlans2mfp_capable" name="wlan0vlans.2.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wpavlans2mfp_reqd&#39;).checked = false; document.getElementById(&#39;wpavlans2mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wpavlans2mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wpavlans2mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wpavlans2mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wpavlans2mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wpavlans2mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wpavlans2mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wpavlans2mfp_capable_flag" type="hidden" name="wlan0vlans.2.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wpavlans2mfp_reqd" name="wlan0vlans.2.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wpavlans2mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wpavlans2mfp_capable&#39;).checked = true; document.getElementById(&#39;wpavlans2mfp_capable&#39;).disabled=true; document.getElementById(&#39;wpavlans2mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wpavlans2mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wpavlans2mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wpavlans2mfp_capable&#39;).disabled=false;document.getElementById(&#39;wpavlans2mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wpavlans2mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wpavlans2mfp_req_flag" type="hidden" name="wlan0vlans.2.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wparadius-settings-panel2" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wparadiusvlans2validateWpaPsk(title) {
    var key = document.getElementById( 'wparadiusvlans2wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wparadiusvlans2broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewparadiusvlans2() {
  var preAuth = document.getElementById( 'wparadiusvlans2pre_auth_container_id' );

  document.getElementById( 'wparadiusvlans2wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewparadiusvlans2()
{
  var mfp = document.getElementById( 'wparadiusvlans2mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewparadiusvlans2() {
  var mfp = document.getElementById( 'wparadiusvlans2mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewparadiusvlans2 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewparadiusvlans2(); if( !this.checked ) {setPreAuthEnabledStatewparadiusvlans2(); document.getElementById(&#39;wparadiusvlans2wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wparadiusvlans2wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewparadiusvlans2();} else if( this.checked ) {document.getElementById(&#39;wparadiusvlans2wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wparadiusvlans2wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewparadiusvlans2();}" name="wlan0vlans.2.wpa-allowed" id="wparadiusvlans2wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewparadiusvlans2(); if( !this.checked ) document.getElementById(&#39;wparadiusvlans2wpa_version1_id&#39;).checked = true;" name="wlan0vlans.2.wpa2-allowed" id="wparadiusvlans2wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wparadiusvlans2pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan0vlans.2.rsn-preauthentication" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wparadiusvlans2wpa-cipher-tkip" name="wlan0vlans.2.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wparadiusvlans2wpa-cipher-ccmp" name="wlan0vlans.2.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wparadiusvlans2mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wparadiusvlans2mfp_not_reqd" name="wlan0vlans.2.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wparadiusvlans2mfp_capable&#39;).checked = false; document.getElementById(&#39;wparadiusvlans2mfp_capable&#39;).disabled = false; document.getElementById(&#39;wparadiusvlans2mfp_reqd&#39;).checked = false; document.getElementById(&#39;wparadiusvlans2mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wparadiusvlans2mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wparadiusvlans2mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wparadiusvlans2mfp_capable&#39;).checked=true; document.getElementById(&#39;wparadiusvlans2mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wparadiusvlans2mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wparadiusvlans2mfp_not_req_flag" type="hidden" name="wlan0vlans.2.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wparadiusvlans2mfp_capable" name="wlan0vlans.2.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wparadiusvlans2mfp_reqd&#39;).checked = false; document.getElementById(&#39;wparadiusvlans2mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wparadiusvlans2mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wparadiusvlans2mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wparadiusvlans2mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wparadiusvlans2mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wparadiusvlans2mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wparadiusvlans2mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wparadiusvlans2mfp_capable_flag" type="hidden" name="wlan0vlans.2.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wparadiusvlans2mfp_reqd" name="wlan0vlans.2.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wparadiusvlans2mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wparadiusvlans2mfp_capable&#39;).checked = true; document.getElementById(&#39;wparadiusvlans2mfp_capable&#39;).disabled=true; document.getElementById(&#39;wparadiusvlans2mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wparadiusvlans2mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wparadiusvlans2mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wparadiusvlans2mfp_capable&#39;).disabled=false;document.getElementById(&#39;wparadiusvlans2mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wparadiusvlans2mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wparadiusvlans2mfp_req_flag" type="hidden" name="wlan0vlans.2.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywparadiusvlans2() {
      var rs = document.getElementById( 'wparadiusvlans2radius-settings-grs' );
      document.getElementById('wparadiusvlans2use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wparadiusvlans2use-grs-input').value = document.getElementById('wparadiusvlans2use-grs-display').checked? "on" : "off";
     }




function wparadiusvlans2validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wparadiusvlans2broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wparadiusvlans2session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wparadiusvlans2use-grs-display').checked)
    {
       var domain = document.getElementById('wparadiusvlans2radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan0vlans.2.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wparadiusvlans2radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wparadiusvlans2radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wparadiusvlans2radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wparadiusvlans2radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wparadiusvlans2key-field').value;
	    var key_1 = document.getElementById('wparadiusvlans2key-field1').value;
	    var key_2 = document.getElementById('wparadiusvlans2key-field2').value;
	    var key_3 = document.getElementById('wparadiusvlans2key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wparadiusvlans2key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wparadiusvlans2key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wparadiusvlans2key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wparadiusvlans2key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wparadiusvlans2radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wparadiusvlans2radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wparadiusvlans2radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wparadiusvlans2radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wparadiusvlans2key-field').value;
	    var key_1 = document.getElementById('wparadiusvlans2key-field1').value;
	    var key_2 = document.getElementById('wparadiusvlans2key-field2').value;
	    var key_3 = document.getElementById('wparadiusvlans2key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wparadiusvlans2','wlan0vlans.2.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywparadiusvlans2 );
   </script>

<input id="wparadiusvlans2radius-key-flag" type="hidden" name="wlan0vlans.2.radius-key-flag" value="0">
<input id="wparadiusvlans2radius-key-flag1" type="hidden" name="wlan0vlans.2.radius-key-flag1" value="0">
<input id="wparadiusvlans2radius-key-flag2" type="hidden" name="wlan0vlans.2.radius-key-flag2" value="0">
<input id="wparadiusvlans2radius-key-flag3" type="hidden" name="wlan0vlans.2.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wparadiusvlans2use-grs-display" onclick="setRadiusSettingsDisplaywparadiusvlans2();" checked="">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wparadiusvlans2use-grs-input" name="wlan0vlans.2.global-radius" value="on">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wparadiusvlans2radius-settings-grs">
       <tbody style="color: rgb(128, 128, 128);"><tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Domain:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
         <input id="wparadiusvlans2radius-domain" type="text" class="text-input" name="wlan0vlans.2.radius-domain" value="root" disabled="">
        </td>
       </tr>
       <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address Type:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
<input class="value" type="radio" name="wlan0vlans.2.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan0vlans.2.wpa-type2&#39;,&#39;wparadiusvlans2&#39;)" id="wlan0vlans.2.wparadius-ip-network-type2_ipv4" checked="" disabled="">
        IPv4
        <input class="value" type="radio" name="wlan0vlans.2.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan0vlans.2.wpa-type2&#39;,&#39;wparadiusvlans2&#39;)" id="wlan0vlans.2.wparadius-ip-network-type2_ipv6" disabled="">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan0vlans.2.wpa-type2" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans2radius-ip" type="text" class="text-input" name="wlan0vlans.2.radius-ip" value="192.168.1.1" disabled="">
        </td>
      </tr>
      <tr id="ipv4wlan0vlans.2.wpa-type21" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans2radius-backupone-ip" type="text" class="text-input" name="wlan0vlans.2.radius-backupone-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan0vlans.2.wpa-type22" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans2radius-backuptwo-ip" type="text" class="text-input" name="wlan0vlans.2.radius-backuptwo-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan0vlans.2.wpa-type23" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans2radius-backupthree-ip" type="text" class="text-input" name="wlan0vlans.2.radius-backupthree-ip" value="" disabled="">
        </td>
      </tr>
     
      <tr id="ipv6wlan0vlans.2.wpa-type2" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans2radius-ipv6" type="text" name="wlan0vlans.2.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan0vlans.2.wpa-type21" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans2radius-backupone-ipv6" type="text" name="wlan0vlans.2.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan0vlans.2.wpa-type22" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans2radius-backuptwo-ipv6" type="text" name="wlan0vlans.2.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan0vlans.2.wpa-type23" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans2radius-backupthree-ipv6" type="text" name="wlan0vlans.2.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans2key-field" type="password" name="wlan0vlans.2.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wparadiusvlans2radius-key-flag&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans2key-field1" type="password" name="wlan0vlans.2.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wparadiusvlans2radius-key-flag1&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans2key-field2" type="password" name="wlan0vlans.2.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wparadiusvlans2radius-key-flag2&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wparadiusvlans2key-field3" type="password" name="wlan0vlans.2.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wparadiusvlans2radius-key-flag3&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript" style="color: rgb(128, 128, 128);">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.1.1";
  var encrypted_key = "3934376431376265643536346339393666653765376536616238373032643361663138636235333032663964353737623266313364353634313138393734393166633535646137396134396364623937643839383761353965333864656566373532663039336461643565313939636463613332376363363466303534643762";
  var key = "wparadiusvlans2key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wparadiusvlans2key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wparadiusvlans2key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wparadiusvlans2key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" colspan="3" nowrap="" style="color: rgb(128, 128, 128);">
          <input type="checkbox" name="wlan0vlans.2.radius-accounting" disabled="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan0vlans.2.radius-current" size="1">
       <option value="primary" selected="">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wparadiusvlans2broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wparadiusvlans2&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan0vlans.2.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wparadiusvlans2session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wparadiusvlans2&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan0vlans.2.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan0vlans.2."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan0vlans.2."+"wpa"+"-type2","wparadiusvlans2");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan0vlans.2."+"wpa"+"-type2","wparadiusvlans2");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
  </tbody></table>
</td><td width="100%"></td></tr>
    
        
            
        
        <tr> 
           <td align="left" colspan="2"><br> Click “Update“ to save the new settings. <br> </td>
        </tr>       
        <!-- submit button for this page -->
        <tr>
            <td align="left" colspan="3">
                <input type="hidden" name="page" value="vwn">
                <input type="submit"  name="save_emul_elastix" value="Updates">
            </td>
        </tr>

</tbody></table>
</div>
<script type="text/javascript" language="javascript">
  function clickWlan1BssDcspPrio(i) {
    var check = document.getElementById( 'wlan1vwn_dscp_prio_'+i ).checked;
    document.getElementById( 'wlan1bss_dscp_prio_'+i ).value = check ? '1' : '0';
  }
</script>

<div id="div_wlan1" style="visiblity:hidden;display:none">
<table><tbody><tr><td width="1">
  <table class="sectioned">
  <tbody><tr><td>&nbsp;</td></tr>
    <tr>
      <td class="section-header" align="left" nowrap="">
        VAP
      </td>
      <td class="section-header" align="center" nowrap="">
        Enabled
      </td>
      <td class="section-header" align="left" nowrap="">
        VLAN ID
      </td>
      <td class="section-header" align="left" nowrap="">
        SSID
      </td>
      <td class="section-header" align="center" nowrap="">
        Broadcast SSID
      </td>
      <td class="section-header" align="center" nowrap="">
        Station Isolation
      </td>
      
      
      <td class="section-header" align="center" nowrap="">
        Band Steer
      </td>
       
      <td class="section-header" align="center" nowrap="">
        802.11k
      </td>
      <td class="section-header" align="center" nowrap="">
        DSCP Priority
      </td>
      <td class="section-header" align="center" nowrap="">
        VLAN Trunk
      </td>
      <td class="section-header" align="center" nowrap="">
        General Mode
      </td>
      <td class="section-header" align="center" nowrap="">
        General VLAN ID
      </td>
      <td class="section-header" align="center" nowrap="">
        VLAN Priority
      </td>
      <td class="section-header" align="left" nowrap="">
        Security
      </td>
      <td class="section-header" align="left" nowrap="">
        MAC Auth Type              <!-- LVL7 -->
      </td>   
      <td class="section-header">&nbsp;</td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        0
      </td>
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setwlan1EntryEnabledStates0() {
            var enabledCheckBox = document.getElementById( 'wlan1vwn_enabled_0' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan1hstatus_0' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan1hstatus_0' ).value = "up";
            }
            document.getElementById( 'wlan1vwn_id_0' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_ssid_0' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_broadcast_ssid_0' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_dscp_prio_0' ).disabled = disabled;
            document.getElementById( 'wlan1bss_dscp_prio_0' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_tagged_sta_mode_0' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_mode_0' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_id_0' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_station_isolation_0' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_prio_0' ).disabled = disabled;

            
            
              document.getElementById( 'wlan1vwn_band_steer_0' ).disabled = disabled;
            

            document.getElementById( 'wlan1vwn_rrm_mode_0' ).disabled = disabled;
            document.getElementById( 'wlan1security-mode-id0' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_mac_auth_type_0' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wlan1wep-settings-panel0' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'wlan1dot1x-settings-panel0' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wlan1wpa-settings-panel0' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wlan1wparadius-settings-panel0' );
            var expander = document.getElementById( 'wlan1expand0' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showwlan1SecuritySettings0("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setwlan1EntryEnabledStates0 );
        </script>

        <input class="input-checkbox" type="checkbox" id="wlan1vwn_enabled_0" name="wlan1vlans.0.bss.status" value="up" onclick="setwlan1EntryEnabledStates0(1);" checked=""> 

        <input type="hidden" name="wlan1vlans.0.bss.row" value="0">
        <input type="hidden" id="vwn_wlan1hstatus_0" name="wlan1vlans.0.bss.hstatus" value="up">
      </td>
      <td class="section-cell" width="1">
        
        
        
          
        
          
            
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_id_0" name="wlan1vlans.0.interface.vlan-id" value="1">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="wlan1vwn_ssid_0" name="wlan1vlans.0.interface.ssid" value="yurxanwifi">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_broadcast_ssid_0" name="wlan1vlans.0.bss.ignore-broadcast-ssid" value="off" onclick="setWlan1BroadcastSSID0(1);" checked="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_station_isolation_0" name="wlan1vlans.0.bss.station-isolation" value="on">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        
        
          
        
          
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_band_steer_0" name="wlan1vlans.0.vap.band-steer-mode" value="up" onclick="setwlan1EntryBandSteerMode0(1);" checked="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_rrm_mode_0" name="wlan1vlans.0.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_dscp_prio_0" onclick="clickWlan1BssDcspPrio(&#39;0&#39;)">
        <input type="hidden" id="wlan1bss_dscp_prio_0" name="wlan1vlans.0.bss.dscp-prio" value="0">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_tagged_sta_mode_0" name="wlan1vlans.0.bss.tagged-sta-mode" value="on">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_general_vlan_mode_0" name="wlan1vlans.0.bss.general-vlan-mode" value="on">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_general_vlan_id_0" name="wlan1vlans.0.bss.general-vlan-id" value="1">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="wlan1vwn_prio_0" name="wlan1vlans.0.interface.vlan-prio">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan1EntryBandSteerMode0() {
            var bandsteerCheckBox = document.getElementById( 'wlan1vwn_band_steer_0' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'wlan1vwn_band_steer_0' ).value = "down";
            } else {
              document.getElementById( 'wlan1vwn_band_steer_0' ).value = "up";
            }
      }
      

      function setWlan1BroadcastSSID0()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          var broadcast_ssid = document.getElementById( 'wlan1vwn_broadcast_ssid_0' ).checked;
          if ((wps_vap == 0) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showwlan1SecuritySettings0(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 0) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 0) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 0) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 0) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wlan1wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wlan1wparadius-settings-panel' + i );
          img = document.getElementById( 'wlan1expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 0 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 0 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showWlan1MacAuthSettings0(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 0) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('wlan1vwn_tagged_sta_mode_0').onclick = function() {
        var general_vlan = document.getElementById( 'wlan1vwn_general_vlan_mode_0' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('wlan1vwn_general_vlan_mode_0').onclick = function() {
        var vlan_trunk = document.getElementById( 'wlan1vwn_tagged_sta_mode_0' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="wlan1security-mode-id0" name="wlan1vlans.0.security" onchange="showwlan1SecuritySettings0(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);">
          <option value="plain-text" <?php if (isset($_SESSION['ap']['enc3'])) { if ($_SESSION['ap']['enc3'] == 'wpa2_802.1x'){ echo 'selected';}}?>>
          None
          </option>
          
          <option value="wpa-personal">
          WPA Personal
          </option>
          <option value="wpa-enterprise" selected="">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="wlan1vwn_mac_auth_type_0" name="wlan1vlans.0.bss.mac-acl-auth-type" onchange="showWlan1MacAuthSettings0(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
      <td align="left" valign="middle">
      <img id="wlan1expand0" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src =&#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if(this.src.indexOf(&#39;expand&#39;) != -1) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if(this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;wlan1security-mode-id0&#39; ); showwlan1SecuritySettings0(s.options[s.selectedIndex].value); this.src =&#39;collapse.gif&#39;; } else { showwlan1SecuritySettings0(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wlan1wpa-settings-panel0" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wpavlans0validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wpavlans0wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wpavlans0broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wpavlans0() {
  var preAuth = document.getElementById( 'wlan1wpavlans0pre_auth_container_id' );

  document.getElementById( 'wlan1wpavlans0wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wpavlans0()
{
  var mfp = document.getElementById( 'wlan1wpavlans0mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wpavlans0() {
  var mfp = document.getElementById( 'wlan1wpavlans0mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wpavlans0 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wpavlans0(); if( !this.checked ) {setPreAuthEnabledStatewlan1wpavlans0(); document.getElementById(&#39;wlan1wpavlans0wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wpavlans0wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wpavlans0();} else if( this.checked ) {document.getElementById(&#39;wlan1wpavlans0wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wpavlans0wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wpavlans0();}" name="wlan1vlans.0.wpa-allowed" id="wlan1wpavlans0wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wpavlans0(); if( !this.checked ) document.getElementById(&#39;wlan1wpavlans0wpa_version1_id&#39;).checked = true;" name="wlan1vlans.0.wpa2-allowed" id="wlan1wpavlans0wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wpavlans0wpa-cipher-tkip" name="wlan1vlans.0.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wpavlans0wpa-cipher-ccmp" name="wlan1vlans.0.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <!-- <input type="password" id="wlan1wpavlans0wpa-personal-key" maxlength="63" name="passwordpsk" value="<?=(isset($_SESSION['radius']['secret'])?$_SESSION['radius']['secret']:$_SESSION['radius']['secret'])?>"> -->
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wlan1wpavlans0broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wpavlans0&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.0.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wpavlans0mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wpavlans0mfp_not_reqd" name="wlan1vlans.0.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans0mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans0mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wpavlans0mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans0mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans0mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans0mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans0mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wpavlans0mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans0mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans0mfp_not_req_flag" type="hidden" name="wlan1vlans.0.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wpavlans0mfp_capable" name="wlan1vlans.0.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans0mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans0mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans0mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wpavlans0mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wpavlans0mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans0mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wpavlans0mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans0mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans0mfp_capable_flag" type="hidden" name="wlan1vlans.0.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wlan1wpavlans0mfp_reqd" name="wlan1vlans.0.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wpavlans0mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans0mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wpavlans0mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wpavlans0mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wpavlans0mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans0mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wpavlans0mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wpavlans0mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans0mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wpavlans0mfp_req_flag" type="hidden" name="wlan1vlans.0.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wlan1wparadius-settings-panel0" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wparadiusvlans0validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wparadiusvlans0wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wparadiusvlans0broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wparadiusvlans0() {
  var preAuth = document.getElementById( 'wlan1wparadiusvlans0pre_auth_container_id' );

  document.getElementById( 'wlan1wparadiusvlans0wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wparadiusvlans0()
{
  var mfp = document.getElementById( 'wlan1wparadiusvlans0mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wparadiusvlans0() {
  var mfp = document.getElementById( 'wlan1wparadiusvlans0mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wparadiusvlans0 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wparadiusvlans0(); if( !this.checked ) {setPreAuthEnabledStatewlan1wparadiusvlans0(); document.getElementById(&#39;wlan1wparadiusvlans0wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wparadiusvlans0wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wparadiusvlans0();} else if( this.checked ) {document.getElementById(&#39;wlan1wparadiusvlans0wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wparadiusvlans0wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wparadiusvlans0();}" name="wlan1vlans.0.wpa-allowed" id="wlan1wparadiusvlans0wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wparadiusvlans0(); if( !this.checked ) document.getElementById(&#39;wlan1wparadiusvlans0wpa_version1_id&#39;).checked = true;" name="wlan1vlans.0.wpa2-allowed" id="wlan1wparadiusvlans0wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wlan1wparadiusvlans0pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan1vlans.0.rsn-preauthentication" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wparadiusvlans0wpa-cipher-tkip" name="wlan1vlans.0.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wparadiusvlans0wpa-cipher-ccmp" name="wlan1vlans.0.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wparadiusvlans0mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wparadiusvlans0mfp_not_reqd" name="wlan1vlans.0.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans0mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans0mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wparadiusvlans0mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans0mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans0mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans0mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans0mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wparadiusvlans0mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans0mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans0mfp_not_req_flag" type="hidden" name="wlan1vlans.0.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wparadiusvlans0mfp_capable" name="wlan1vlans.0.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans0mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans0mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans0mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wparadiusvlans0mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans0mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans0mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wparadiusvlans0mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans0mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans0mfp_capable_flag" type="hidden" name="wlan1vlans.0.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wlan1wparadiusvlans0mfp_reqd" name="wlan1vlans.0.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wparadiusvlans0mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans0mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wparadiusvlans0mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wparadiusvlans0mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wparadiusvlans0mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans0mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wparadiusvlans0mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wparadiusvlans0mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans0mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wparadiusvlans0mfp_req_flag" type="hidden" name="wlan1vlans.0.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywlan1wparadiusvlans0() {
      var rs = document.getElementById( 'wlan1wparadiusvlans0radius-settings-grs' );
      document.getElementById('wlan1wparadiusvlans0use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wlan1wparadiusvlans0use-grs-input').value = document.getElementById('wlan1wparadiusvlans0use-grs-display').checked? "on" : "off";
     }




function wlan1wparadiusvlans0validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wlan1wparadiusvlans0broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wlan1wparadiusvlans0session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wlan1wparadiusvlans0use-grs-display').checked)
    {
       var domain = document.getElementById('wlan1wparadiusvlans0radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan1vlans.0.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wlan1wparadiusvlans0radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wlan1wparadiusvlans0radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wlan1wparadiusvlans0radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wlan1wparadiusvlans0radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans0key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans0key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans0key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans0key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans0key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans0key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans0key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans0key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wlan1wparadiusvlans0radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wlan1wparadiusvlans0radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wlan1wparadiusvlans0radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wlan1wparadiusvlans0radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans0key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans0key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans0key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans0key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wlan1wparadiusvlans0','wlan1vlans.0.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywlan1wparadiusvlans0 );
   </script>

<input id="wlan1wparadiusvlans0radius-key-flag" type="hidden" name="wlan1vlans.0.radius-key-flag" value="0">
<input id="wlan1wparadiusvlans0radius-key-flag1" type="hidden" name="wlan1vlans.0.radius-key-flag1" value="0">
<input id="wlan1wparadiusvlans0radius-key-flag2" type="hidden" name="wlan1vlans.0.radius-key-flag2" value="0">
<input id="wlan1wparadiusvlans0radius-key-flag3" type="hidden" name="wlan1vlans.0.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wlan1wparadiusvlans0use-grs-display" onclick="setRadiusSettingsDisplaywlan1wparadiusvlans0();">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wlan1wparadiusvlans0use-grs-input" name="wlan1vlans.0.global-radius" value="off">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wlan1wparadiusvlans0radius-settings-grs">
       <tbody><tr>
        <td class="label" nowrap="">RADIUS Domain:&nbsp;</td>
        <td>
         <input id="wlan1wparadiusvlans0radius-domain" type="text" class="text-input" name="wlan1vlans.0.radius-domain" value="root">
        </td>
       </tr>
       <tr>
        <td class="label" nowrap="">RADIUS IP Address Type:&nbsp;</td>
        <td>
<input class="value" type="radio" name="wlan1vlans.0.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan1vlans.0.wpa-type2&#39;,&#39;wlan1wparadiusvlans0&#39;)" id="wlan1vlans.0.wparadius-ip-network-type2_ipv4" checked="">
        IPv4
        <input class="value" type="radio" name="wlan1vlans.0.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan1vlans.0.wpa-type2&#39;,&#39;wlan1wparadiusvlans0&#39;)" id="wlan1vlans.0.wparadius-ip-network-type2_ipv6">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan1vlans.0.wpa-type2">
        <td class="label" nowrap="">RADIUS IP Address:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans0radius-ip" type="text" class="text-input" name="wlan1vlans.0.radius-ip" value="192.168.31.90"> 
        </td>
      </tr>
      <tr id="ipv4wlan1vlans.0.wpa-type21">
        <td class="label" nowrap="">RADIUS IP Address-1:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans0radius-backupone-ip" type="text" class="text-input" name="wlan1vlans.0.radius-backupone-ip" value="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.0.wpa-type22">
        <td class="label" nowrap="">RADIUS IP Address-2:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans0radius-backuptwo-ip" type="text" class="text-input" name="wlan1vlans.0.radius-backuptwo-ip" value="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.0.wpa-type23">
        <td class="label" nowrap="">RADIUS IP Address-3:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans0radius-backupthree-ip" type="text" class="text-input" name="wlan1vlans.0.radius-backupthree-ip" value="">
        </td>
      </tr>
     
      <tr id="ipv6wlan1vlans.0.wpa-type2" style="display: none;">
        <td class="label" nowrap="">RADIUS IPv6 Address:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans0radius-ipv6" type="text" name="wlan1vlans.0.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan1vlans.0.wpa-type21" style="display: none;">
        <td class="label" nowrap="">RADIUS IPv6 Address-1:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans0radius-backupone-ipv6" type="text" name="wlan1vlans.0.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.0.wpa-type22" style="display: none;">
        <td class="label" nowrap="">RADIUS IPv6 Address-2:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans0radius-backuptwo-ipv6" type="text" name="wlan1vlans.0.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.0.wpa-type23" style="display: none;">
        <td class="label" nowrap="">RADIUS IPv6 Address-3:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans0radius-backupthree-ipv6" type="text" name="wlan1vlans.0.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr>
        <td class="label" nowrap="">RADIUS Key:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans0key-field" type="password" name="wlan1vlans.0.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans0radius-key-flag&#39;).value = &#39;1&#39;;">
        </td>
      </tr>
      <tr>
        <td class="label" nowrap="">RADIUS Key-1:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans0key-field1" type="password" name="wlan1vlans.0.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans0radius-key-flag1&#39;).value = &#39;1&#39;;">
        </td>
      </tr>
      <tr>
        <td class="label" nowrap="">RADIUS Key-2:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans0key-field2" type="password" name="wlan1vlans.0.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans0radius-key-flag2&#39;).value = &#39;1&#39;;">
        </td>
      </tr>
      <tr>
        <td class="label" nowrap="">RADIUS Key-3:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans0key-field3" type="password" name="wlan1vlans.0.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans0radius-key-flag3&#39;).value = &#39;1&#39;;">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.31.90";
  var encrypted_key = "6130383339306265343636323033326636383635353735373565633162626230333262653637366565653331363830386436306363613238613131303131393531666161346434626338666262653036396336653764663236383961643932313965656138626132636365373564383665666663383236343130336363383430";
  var key = "wlan1wparadiusvlans0key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans0key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans0key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans0key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr>
        <td class="label" colspan="3" nowrap="">
          <input type="checkbox" name="wlan1vlans.0.radius-accounting" checked="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan1vlans.0.radius-current" size="1">
       <option value="primary" selected="">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans0broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans0&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.0.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans0session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans0&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan1vlans.0.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan1vlans.0."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan1vlans.0."+"wpa"+"-type2","wlan1wparadiusvlans0");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan1vlans.0."+"wpa"+"-type2","wlan1wparadiusvlans0");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        1
      </td>
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setwlan1EntryEnabledStates1() {
            var enabledCheckBox = document.getElementById( 'wlan1vwn_enabled_1' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan1hstatus_1' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan1hstatus_1' ).value = "up";
            }
            document.getElementById( 'wlan1vwn_id_1' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_ssid_1' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_broadcast_ssid_1' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_dscp_prio_1' ).disabled = disabled;
            document.getElementById( 'wlan1bss_dscp_prio_1' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_tagged_sta_mode_1' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_mode_1' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_id_1' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_station_isolation_1' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_prio_1' ).disabled = disabled;

            
            
              document.getElementById( 'wlan1vwn_band_steer_1' ).disabled = disabled;
            

            document.getElementById( 'wlan1vwn_rrm_mode_1' ).disabled = disabled;
            document.getElementById( 'wlan1security-mode-id1' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_mac_auth_type_1' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wlan1wep-settings-panel1' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'wlan1dot1x-settings-panel1' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wlan1wpa-settings-panel1' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wlan1wparadius-settings-panel1' );
            var expander = document.getElementById( 'wlan1expand1' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showwlan1SecuritySettings1("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setwlan1EntryEnabledStates1 );
        </script>

        <input class="input-checkbox" type="checkbox" id="wlan1vwn_enabled_1" name="wlan1vlans.1.bss.status" value="up" onclick="setwlan1EntryEnabledStates1(1);" checked=""> 

        <input type="hidden" name="wlan1vlans.1.bss.row" value="1">
        <input type="hidden" id="vwn_wlan1hstatus_1" name="wlan1vlans.1.bss.hstatus" value="up">
      </td>
      <td class="section-cell" width="1">
        
        
        
          
        
          
        
          
        
          
            
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_id_1" name="wlan1vlans.1.interface.vlan-id" value="1">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="wlan1vwn_ssid_1" name="wlan1vlans.1.interface.ssid" value="iktb17mwifi">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_broadcast_ssid_1" name="wlan1vlans.1.bss.ignore-broadcast-ssid" value="off" onclick="setWlan1BroadcastSSID1(1);" checked="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_station_isolation_1" name="wlan1vlans.1.bss.station-isolation" value="on">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        
        
          
        
          
        
          
        
          
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_band_steer_1" name="wlan1vlans.1.vap.band-steer-mode" value="up" onclick="setwlan1EntryBandSteerMode1(1);" checked="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_rrm_mode_1" name="wlan1vlans.1.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_dscp_prio_1" onclick="clickWlan1BssDcspPrio(&#39;1&#39;)">
        <input type="hidden" id="wlan1bss_dscp_prio_1" name="wlan1vlans.1.bss.dscp-prio" value="0">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_tagged_sta_mode_1" name="wlan1vlans.1.bss.tagged-sta-mode" value="on">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_general_vlan_mode_1" name="wlan1vlans.1.bss.general-vlan-mode" value="on">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_general_vlan_id_1" name="wlan1vlans.1.bss.general-vlan-id" value="1">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="wlan1vwn_prio_1" name="wlan1vlans.1.interface.vlan-prio">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan1EntryBandSteerMode1() {
            var bandsteerCheckBox = document.getElementById( 'wlan1vwn_band_steer_1' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'wlan1vwn_band_steer_1' ).value = "down";
            } else {
              document.getElementById( 'wlan1vwn_band_steer_1' ).value = "up";
            }
      }
      

      function setWlan1BroadcastSSID1()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          var broadcast_ssid = document.getElementById( 'wlan1vwn_broadcast_ssid_1' ).checked;
          if ((wps_vap == 1) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showwlan1SecuritySettings1(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 1) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 1) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 1) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 1) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wlan1wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wlan1wparadius-settings-panel' + i );
          img = document.getElementById( 'wlan1expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 1 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 1 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showWlan1MacAuthSettings1(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 1) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('wlan1vwn_tagged_sta_mode_1').onclick = function() {
        var general_vlan = document.getElementById( 'wlan1vwn_general_vlan_mode_1' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('wlan1vwn_general_vlan_mode_1').onclick = function() {
        var vlan_trunk = document.getElementById( 'wlan1vwn_tagged_sta_mode_1' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="wlan1security-mode-id1" name="wlan1vlans.1.security" onchange="showwlan1SecuritySettings1(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);">
          <option value="plain-text" selected="">
          None
          </option>
          
          <option value="wpa-personal">
          WPA Personal
          </option>
          <option value="wpa-enterprise">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="wlan1vwn_mac_auth_type_1" name="wlan1vlans.1.bss.mac-acl-auth-type" onchange="showWlan1MacAuthSettings1(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
      <td align="left" valign="middle">
      <img id="wlan1expand1" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src =&#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if(this.src.indexOf(&#39;expand&#39;) != -1) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if(this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;wlan1security-mode-id1&#39; ); showwlan1SecuritySettings1(s.options[s.selectedIndex].value); this.src =&#39;collapse.gif&#39;; } else { showwlan1SecuritySettings1(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wlan1wpa-settings-panel1" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wpavlans1validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wpavlans1wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wpavlans1broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wpavlans1() {
  var preAuth = document.getElementById( 'wlan1wpavlans1pre_auth_container_id' );

  document.getElementById( 'wlan1wpavlans1wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wpavlans1()
{
  var mfp = document.getElementById( 'wlan1wpavlans1mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wpavlans1() {
  var mfp = document.getElementById( 'wlan1wpavlans1mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wpavlans1 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wpavlans1(); if( !this.checked ) {setPreAuthEnabledStatewlan1wpavlans1(); document.getElementById(&#39;wlan1wpavlans1wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wpavlans1wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wpavlans1();} else if( this.checked ) {document.getElementById(&#39;wlan1wpavlans1wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wpavlans1wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wpavlans1();}" name="wlan1vlans.1.wpa-allowed" id="wlan1wpavlans1wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wpavlans1(); if( !this.checked ) document.getElementById(&#39;wlan1wpavlans1wpa_version1_id&#39;).checked = true;" name="wlan1vlans.1.wpa2-allowed" id="wlan1wpavlans1wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wpavlans1wpa-cipher-tkip" name="wlan1vlans.1.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wpavlans1wpa-cipher-ccmp" name="wlan1vlans.1.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wlan1wpavlans1wpa-personal-key" maxlength="63" name="wlan1vlans.1.wpa-personal-key" value="32200322">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wlan1wpavlans1broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wpavlans1&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.1.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wpavlans1mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wpavlans1mfp_not_reqd" name="wlan1vlans.1.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans1mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans1mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wpavlans1mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans1mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans1mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans1mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans1mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wpavlans1mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans1mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans1mfp_not_req_flag" type="hidden" name="wlan1vlans.1.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wpavlans1mfp_capable" name="wlan1vlans.1.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans1mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans1mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans1mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wpavlans1mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wpavlans1mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans1mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wpavlans1mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans1mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans1mfp_capable_flag" type="hidden" name="wlan1vlans.1.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wlan1wpavlans1mfp_reqd" name="wlan1vlans.1.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wpavlans1mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans1mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wpavlans1mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wpavlans1mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wpavlans1mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans1mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wpavlans1mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wpavlans1mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans1mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wpavlans1mfp_req_flag" type="hidden" name="wlan1vlans.1.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wlan1wparadius-settings-panel1" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wparadiusvlans1validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wparadiusvlans1wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wparadiusvlans1broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wparadiusvlans1() {
  var preAuth = document.getElementById( 'wlan1wparadiusvlans1pre_auth_container_id' );

  document.getElementById( 'wlan1wparadiusvlans1wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wparadiusvlans1()
{
  var mfp = document.getElementById( 'wlan1wparadiusvlans1mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wparadiusvlans1() {
  var mfp = document.getElementById( 'wlan1wparadiusvlans1mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wparadiusvlans1 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wparadiusvlans1(); if( !this.checked ) {setPreAuthEnabledStatewlan1wparadiusvlans1(); document.getElementById(&#39;wlan1wparadiusvlans1wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wparadiusvlans1wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wparadiusvlans1();} else if( this.checked ) {document.getElementById(&#39;wlan1wparadiusvlans1wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wparadiusvlans1wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wparadiusvlans1();}" name="wlan1vlans.1.wpa-allowed" id="wlan1wparadiusvlans1wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wparadiusvlans1(); if( !this.checked ) document.getElementById(&#39;wlan1wparadiusvlans1wpa_version1_id&#39;).checked = true;" name="wlan1vlans.1.wpa2-allowed" id="wlan1wparadiusvlans1wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wlan1wparadiusvlans1pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan1vlans.1.rsn-preauthentication" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wparadiusvlans1wpa-cipher-tkip" name="wlan1vlans.1.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wparadiusvlans1wpa-cipher-ccmp" name="wlan1vlans.1.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wparadiusvlans1mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wparadiusvlans1mfp_not_reqd" name="wlan1vlans.1.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans1mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans1mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wparadiusvlans1mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans1mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans1mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans1mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans1mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wparadiusvlans1mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans1mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans1mfp_not_req_flag" type="hidden" name="wlan1vlans.1.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wparadiusvlans1mfp_capable" name="wlan1vlans.1.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans1mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans1mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans1mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wparadiusvlans1mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans1mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans1mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wparadiusvlans1mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans1mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans1mfp_capable_flag" type="hidden" name="wlan1vlans.1.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wlan1wparadiusvlans1mfp_reqd" name="wlan1vlans.1.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wparadiusvlans1mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans1mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wparadiusvlans1mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wparadiusvlans1mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wparadiusvlans1mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans1mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wparadiusvlans1mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wparadiusvlans1mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans1mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wparadiusvlans1mfp_req_flag" type="hidden" name="wlan1vlans.1.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywlan1wparadiusvlans1() {
      var rs = document.getElementById( 'wlan1wparadiusvlans1radius-settings-grs' );
      document.getElementById('wlan1wparadiusvlans1use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wlan1wparadiusvlans1use-grs-input').value = document.getElementById('wlan1wparadiusvlans1use-grs-display').checked? "on" : "off";
     }




function wlan1wparadiusvlans1validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wlan1wparadiusvlans1broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wlan1wparadiusvlans1session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wlan1wparadiusvlans1use-grs-display').checked)
    {
       var domain = document.getElementById('wlan1wparadiusvlans1radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan1vlans.1.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wlan1wparadiusvlans1radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wlan1wparadiusvlans1radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wlan1wparadiusvlans1radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wlan1wparadiusvlans1radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans1key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans1key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans1key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans1key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans1key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans1key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans1key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans1key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wlan1wparadiusvlans1radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wlan1wparadiusvlans1radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wlan1wparadiusvlans1radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wlan1wparadiusvlans1radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans1key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans1key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans1key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans1key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wlan1wparadiusvlans1','wlan1vlans.1.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywlan1wparadiusvlans1 );
   </script>

<input id="wlan1wparadiusvlans1radius-key-flag" type="hidden" name="wlan1vlans.1.radius-key-flag" value="0">
<input id="wlan1wparadiusvlans1radius-key-flag1" type="hidden" name="wlan1vlans.1.radius-key-flag1" value="0">
<input id="wlan1wparadiusvlans1radius-key-flag2" type="hidden" name="wlan1vlans.1.radius-key-flag2" value="0">
<input id="wlan1wparadiusvlans1radius-key-flag3" type="hidden" name="wlan1vlans.1.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wlan1wparadiusvlans1use-grs-display" onclick="setRadiusSettingsDisplaywlan1wparadiusvlans1();" checked="">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wlan1wparadiusvlans1use-grs-input" name="wlan1vlans.1.global-radius" value="on">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wlan1wparadiusvlans1radius-settings-grs">
       <tbody style="color: rgb(128, 128, 128);"><tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Domain:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
         <input id="wlan1wparadiusvlans1radius-domain" type="text" class="text-input" name="wlan1vlans.1.radius-domain" value="root" disabled="">
        </td>
       </tr>
       <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address Type:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
<input class="value" type="radio" name="wlan1vlans.1.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan1vlans.1.wpa-type2&#39;,&#39;wlan1wparadiusvlans1&#39;)" id="wlan1vlans.1.wparadius-ip-network-type2_ipv4" checked="" disabled="">
        IPv4
        <input class="value" type="radio" name="wlan1vlans.1.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan1vlans.1.wpa-type2&#39;,&#39;wlan1wparadiusvlans1&#39;)" id="wlan1vlans.1.wparadius-ip-network-type2_ipv6" disabled="">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan1vlans.1.wpa-type2" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans1radius-ip" type="text" class="text-input" name="wlan1vlans.1.radius-ip" value="127.0.0.2" disabled="">
        </td>
      </tr>
      <tr id="ipv4wlan1vlans.1.wpa-type21" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans1radius-backupone-ip" type="text" class="text-input" name="wlan1vlans.1.radius-backupone-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.1.wpa-type22" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans1radius-backuptwo-ip" type="text" class="text-input" name="wlan1vlans.1.radius-backuptwo-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.1.wpa-type23" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans1radius-backupthree-ip" type="text" class="text-input" name="wlan1vlans.1.radius-backupthree-ip" value="" disabled="">
        </td>
      </tr>
     
      <tr id="ipv6wlan1vlans.1.wpa-type2" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans1radius-ipv6" type="text" name="wlan1vlans.1.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan1vlans.1.wpa-type21" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans1radius-backupone-ipv6" type="text" name="wlan1vlans.1.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.1.wpa-type22" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans1radius-backuptwo-ipv6" type="text" name="wlan1vlans.1.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.1.wpa-type23" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans1radius-backupthree-ipv6" type="text" name="wlan1vlans.1.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans1key-field" type="password" name="wlan1vlans.1.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans1radius-key-flag&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans1key-field1" type="password" name="wlan1vlans.1.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans1radius-key-flag1&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans1key-field2" type="password" name="wlan1vlans.1.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans1radius-key-flag2&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans1key-field3" type="password" name="wlan1vlans.1.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans1radius-key-flag3&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript" style="color: rgb(128, 128, 128);">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "127.0.0.2";
  var encrypted_key = "6130383339306265343636323033326636383635353735373565633162626230353834363435653538633333353762306631656532663730646437386139393963643465653534633634626565316631376366343132656664326630363035613435633665663036626661363931333362636236366430356534643431376465";
  var key = "wlan1wparadiusvlans1key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans1key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans1key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans1key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" colspan="3" nowrap="" style="color: rgb(128, 128, 128);">
          <input type="checkbox" name="wlan1vlans.1.radius-accounting" checked="" disabled="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan1vlans.1.radius-current" size="1">
       <option value="primary" selected="">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans1broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans1&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.1.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans1session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans1&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan1vlans.1.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan1vlans.1."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan1vlans.1."+"wpa"+"-type2","wlan1wparadiusvlans1");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan1vlans.1."+"wpa"+"-type2","wlan1wparadiusvlans1");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        2
      </td>
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setwlan1EntryEnabledStates2() {
            var enabledCheckBox = document.getElementById( 'wlan1vwn_enabled_2' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan1hstatus_2' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan1hstatus_2' ).value = "up";
            }
            document.getElementById( 'wlan1vwn_id_2' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_ssid_2' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_broadcast_ssid_2' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_dscp_prio_2' ).disabled = disabled;
            document.getElementById( 'wlan1bss_dscp_prio_2' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_tagged_sta_mode_2' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_mode_2' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_id_2' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_station_isolation_2' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_prio_2' ).disabled = disabled;

            
            
              document.getElementById( 'wlan1vwn_band_steer_2' ).disabled = disabled;
            

            document.getElementById( 'wlan1vwn_rrm_mode_2' ).disabled = disabled;
            document.getElementById( 'wlan1security-mode-id2' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_mac_auth_type_2' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wlan1wep-settings-panel2' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'wlan1dot1x-settings-panel2' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wlan1wpa-settings-panel2' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wlan1wparadius-settings-panel2' );
            var expander = document.getElementById( 'wlan1expand2' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showwlan1SecuritySettings2("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setwlan1EntryEnabledStates2 );
        </script>

        <input class="input-checkbox" type="checkbox" id="wlan1vwn_enabled_2" name="wlan1vlans.2.bss.status" value="up" onclick="setwlan1EntryEnabledStates2(1);" checked=""> 

        <input type="hidden" name="wlan1vlans.2.bss.row" value="2">
        <input type="hidden" id="vwn_wlan1hstatus_2" name="wlan1vlans.2.bss.hstatus" value="up">
      </td>
      <td class="section-cell" width="1">
        
        
        
          
        
          
        
          
        
          
        
          
        
          
            
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_id_2" name="wlan1vlans.2.interface.vlan-id" value="1">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="wlan1vwn_ssid_2" name="wlan1vlans.2.interface.ssid" value="IKTB17m">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_broadcast_ssid_2" name="wlan1vlans.2.bss.ignore-broadcast-ssid" value="off" onclick="setWlan1BroadcastSSID2(1);" checked="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_station_isolation_2" name="wlan1vlans.2.bss.station-isolation" value="on">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        
        
          
        
          
        
          
        
          
        
          
        
          
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_band_steer_2" name="wlan1vlans.2.vap.band-steer-mode" value="up" onclick="setwlan1EntryBandSteerMode2(1);" checked="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_rrm_mode_2" name="wlan1vlans.2.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_dscp_prio_2" onclick="clickWlan1BssDcspPrio(&#39;2&#39;)">
        <input type="hidden" id="wlan1bss_dscp_prio_2" name="wlan1vlans.2.bss.dscp-prio" value="0">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_tagged_sta_mode_2" name="wlan1vlans.2.bss.tagged-sta-mode" value="on">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_general_vlan_mode_2" name="wlan1vlans.2.bss.general-vlan-mode" value="on">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_general_vlan_id_2" name="wlan1vlans.2.bss.general-vlan-id" value="1">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="wlan1vwn_prio_2" name="wlan1vlans.2.interface.vlan-prio">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan1EntryBandSteerMode2() {
            var bandsteerCheckBox = document.getElementById( 'wlan1vwn_band_steer_2' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'wlan1vwn_band_steer_2' ).value = "down";
            } else {
              document.getElementById( 'wlan1vwn_band_steer_2' ).value = "up";
            }
      }
      

      function setWlan1BroadcastSSID2()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          var broadcast_ssid = document.getElementById( 'wlan1vwn_broadcast_ssid_2' ).checked;
          if ((wps_vap == 2) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showwlan1SecuritySettings2(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 2) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 2) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 2) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 2) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wlan1wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wlan1wparadius-settings-panel' + i );
          img = document.getElementById( 'wlan1expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 2 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 2 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showWlan1MacAuthSettings2(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 2) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('wlan1vwn_tagged_sta_mode_2').onclick = function() {
        var general_vlan = document.getElementById( 'wlan1vwn_general_vlan_mode_2' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('wlan1vwn_general_vlan_mode_2').onclick = function() {
        var vlan_trunk = document.getElementById( 'wlan1vwn_tagged_sta_mode_2' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="wlan1security-mode-id2" name="wlan1vlans.2.security" onchange="showwlan1SecuritySettings2(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);">
          <option value="plain-text" selected="">
          None
          </option>
          
          <option value="wpa-personal">
          WPA Personal
          </option>
          <option value="wpa-enterprise">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="wlan1vwn_mac_auth_type_2" name="wlan1vlans.2.bss.mac-acl-auth-type" onchange="showWlan1MacAuthSettings2(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
      <td align="left" valign="middle">
      <img id="wlan1expand2" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src =&#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if(this.src.indexOf(&#39;expand&#39;) != -1) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if(this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;wlan1security-mode-id2&#39; ); showwlan1SecuritySettings2(s.options[s.selectedIndex].value); this.src =&#39;collapse.gif&#39;; } else { showwlan1SecuritySettings2(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wlan1wpa-settings-panel2" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wpavlans2validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wpavlans2wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wpavlans2broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wpavlans2() {
  var preAuth = document.getElementById( 'wlan1wpavlans2pre_auth_container_id' );

  document.getElementById( 'wlan1wpavlans2wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wpavlans2()
{
  var mfp = document.getElementById( 'wlan1wpavlans2mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wpavlans2() {
  var mfp = document.getElementById( 'wlan1wpavlans2mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wpavlans2 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wpavlans2(); if( !this.checked ) {setPreAuthEnabledStatewlan1wpavlans2(); document.getElementById(&#39;wlan1wpavlans2wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wpavlans2wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wpavlans2();} else if( this.checked ) {document.getElementById(&#39;wlan1wpavlans2wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wpavlans2wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wpavlans2();}" name="wlan1vlans.2.wpa-allowed" id="wlan1wpavlans2wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wpavlans2(); if( !this.checked ) document.getElementById(&#39;wlan1wpavlans2wpa_version1_id&#39;).checked = true;" name="wlan1vlans.2.wpa2-allowed" id="wlan1wpavlans2wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wpavlans2wpa-cipher-tkip" name="wlan1vlans.2.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wpavlans2wpa-cipher-ccmp" name="wlan1vlans.2.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wlan1wpavlans2wpa-personal-key" maxlength="63" name="wlan1vlans.2.wpa-personal-key" value="qwerty123">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wlan1wpavlans2broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wpavlans2&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.2.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wpavlans2mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wpavlans2mfp_not_reqd" name="wlan1vlans.2.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans2mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans2mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wpavlans2mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans2mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans2mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans2mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans2mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wpavlans2mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans2mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans2mfp_not_req_flag" type="hidden" name="wlan1vlans.2.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wpavlans2mfp_capable" name="wlan1vlans.2.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans2mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans2mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans2mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wpavlans2mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wpavlans2mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans2mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wpavlans2mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans2mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans2mfp_capable_flag" type="hidden" name="wlan1vlans.2.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wlan1wpavlans2mfp_reqd" name="wlan1vlans.2.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wpavlans2mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans2mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wpavlans2mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wpavlans2mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wpavlans2mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans2mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wpavlans2mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wpavlans2mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans2mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wpavlans2mfp_req_flag" type="hidden" name="wlan1vlans.2.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wlan1wparadius-settings-panel2" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wparadiusvlans2validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wparadiusvlans2wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wparadiusvlans2broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wparadiusvlans2() {
  var preAuth = document.getElementById( 'wlan1wparadiusvlans2pre_auth_container_id' );

  document.getElementById( 'wlan1wparadiusvlans2wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wparadiusvlans2()
{
  var mfp = document.getElementById( 'wlan1wparadiusvlans2mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wparadiusvlans2() {
  var mfp = document.getElementById( 'wlan1wparadiusvlans2mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wparadiusvlans2 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wparadiusvlans2(); if( !this.checked ) {setPreAuthEnabledStatewlan1wparadiusvlans2(); document.getElementById(&#39;wlan1wparadiusvlans2wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wparadiusvlans2wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wparadiusvlans2();} else if( this.checked ) {document.getElementById(&#39;wlan1wparadiusvlans2wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wparadiusvlans2wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wparadiusvlans2();}" name="wlan1vlans.2.wpa-allowed" id="wlan1wparadiusvlans2wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wparadiusvlans2(); if( !this.checked ) document.getElementById(&#39;wlan1wparadiusvlans2wpa_version1_id&#39;).checked = true;" name="wlan1vlans.2.wpa2-allowed" id="wlan1wparadiusvlans2wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wlan1wparadiusvlans2pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan1vlans.2.rsn-preauthentication" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wparadiusvlans2wpa-cipher-tkip" name="wlan1vlans.2.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wparadiusvlans2wpa-cipher-ccmp" name="wlan1vlans.2.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wparadiusvlans2mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wparadiusvlans2mfp_not_reqd" name="wlan1vlans.2.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans2mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans2mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wparadiusvlans2mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans2mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans2mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans2mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans2mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wparadiusvlans2mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans2mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans2mfp_not_req_flag" type="hidden" name="wlan1vlans.2.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wparadiusvlans2mfp_capable" name="wlan1vlans.2.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans2mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans2mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans2mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wparadiusvlans2mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans2mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans2mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wparadiusvlans2mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans2mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans2mfp_capable_flag" type="hidden" name="wlan1vlans.2.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wlan1wparadiusvlans2mfp_reqd" name="wlan1vlans.2.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wparadiusvlans2mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans2mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wparadiusvlans2mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wparadiusvlans2mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wparadiusvlans2mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans2mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wparadiusvlans2mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wparadiusvlans2mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans2mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wparadiusvlans2mfp_req_flag" type="hidden" name="wlan1vlans.2.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywlan1wparadiusvlans2() {
      var rs = document.getElementById( 'wlan1wparadiusvlans2radius-settings-grs' );
      document.getElementById('wlan1wparadiusvlans2use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wlan1wparadiusvlans2use-grs-input').value = document.getElementById('wlan1wparadiusvlans2use-grs-display').checked? "on" : "off";
     }




function wlan1wparadiusvlans2validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wlan1wparadiusvlans2broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wlan1wparadiusvlans2session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wlan1wparadiusvlans2use-grs-display').checked)
    {
       var domain = document.getElementById('wlan1wparadiusvlans2radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan1vlans.2.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wlan1wparadiusvlans2radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wlan1wparadiusvlans2radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wlan1wparadiusvlans2radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wlan1wparadiusvlans2radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans2key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans2key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans2key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans2key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans2key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans2key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans2key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans2key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wlan1wparadiusvlans2radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wlan1wparadiusvlans2radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wlan1wparadiusvlans2radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wlan1wparadiusvlans2radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans2key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans2key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans2key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans2key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wlan1wparadiusvlans2','wlan1vlans.2.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywlan1wparadiusvlans2 );
   </script>

<input id="wlan1wparadiusvlans2radius-key-flag" type="hidden" name="wlan1vlans.2.radius-key-flag" value="0">
<input id="wlan1wparadiusvlans2radius-key-flag1" type="hidden" name="wlan1vlans.2.radius-key-flag1" value="0">
<input id="wlan1wparadiusvlans2radius-key-flag2" type="hidden" name="wlan1vlans.2.radius-key-flag2" value="0">
<input id="wlan1wparadiusvlans2radius-key-flag3" type="hidden" name="wlan1vlans.2.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wlan1wparadiusvlans2use-grs-display" onclick="setRadiusSettingsDisplaywlan1wparadiusvlans2();" checked="">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wlan1wparadiusvlans2use-grs-input" name="wlan1vlans.2.global-radius" value="on">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wlan1wparadiusvlans2radius-settings-grs">
       <tbody style="color: rgb(128, 128, 128);"><tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Domain:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
         <input id="wlan1wparadiusvlans2radius-domain" type="text" class="text-input" name="wlan1vlans.2.radius-domain" value="root" disabled="">
        </td>
       </tr>
       <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address Type:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
<input class="value" type="radio" name="wlan1vlans.2.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan1vlans.2.wpa-type2&#39;,&#39;wlan1wparadiusvlans2&#39;)" id="wlan1vlans.2.wparadius-ip-network-type2_ipv4" checked="" disabled="">
        IPv4
        <input class="value" type="radio" name="wlan1vlans.2.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan1vlans.2.wpa-type2&#39;,&#39;wlan1wparadiusvlans2&#39;)" id="wlan1vlans.2.wparadius-ip-network-type2_ipv6" disabled="">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan1vlans.2.wpa-type2" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans2radius-ip" type="text" class="text-input" name="wlan1vlans.2.radius-ip" value="192.168.31.51" disabled="">
        </td>
      </tr>
      <tr id="ipv4wlan1vlans.2.wpa-type21" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans2radius-backupone-ip" type="text" class="text-input" name="wlan1vlans.2.radius-backupone-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.2.wpa-type22" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans2radius-backuptwo-ip" type="text" class="text-input" name="wlan1vlans.2.radius-backuptwo-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.2.wpa-type23" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans2radius-backupthree-ip" type="text" class="text-input" name="wlan1vlans.2.radius-backupthree-ip" value="" disabled="">
        </td>
      </tr>
     
      <tr id="ipv6wlan1vlans.2.wpa-type2" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans2radius-ipv6" type="text" name="wlan1vlans.2.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan1vlans.2.wpa-type21" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans2radius-backupone-ipv6" type="text" name="wlan1vlans.2.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.2.wpa-type22" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans2radius-backuptwo-ipv6" type="text" name="wlan1vlans.2.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.2.wpa-type23" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans2radius-backupthree-ipv6" type="text" name="wlan1vlans.2.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans2key-field" type="password" name="wlan1vlans.2.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans2radius-key-flag&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans2key-field1" type="password" name="wlan1vlans.2.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans2radius-key-flag1&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans2key-field2" type="password" name="wlan1vlans.2.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans2radius-key-flag2&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans2key-field3" type="password" name="wlan1vlans.2.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans2radius-key-flag3&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript" style="color: rgb(128, 128, 128);">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.31.51";
  var encrypted_key = "3934383135396338363336333532346566383730363633663366396231376163643031323766646263613263626234643866373932613632633164616561333934373736656363393239363832356235336439333362376239636134663865366535343964666431616233633666326465333038346166303230303364346530";
  var key = "wlan1wparadiusvlans2key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans2key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans2key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans2key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" colspan="3" nowrap="" style="color: rgb(128, 128, 128);">
          <input type="checkbox" name="wlan1vlans.2.radius-accounting" checked="" disabled="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan1vlans.2.radius-current" size="1">
       <option value="primary" selected="">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans2broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans2&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.2.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans2session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans2&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan1vlans.2.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan1vlans.2."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan1vlans.2."+"wpa"+"-type2","wlan1wparadiusvlans2");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan1vlans.2."+"wpa"+"-type2","wlan1wparadiusvlans2");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        3
      </td>
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setwlan1EntryEnabledStates3() {
            var enabledCheckBox = document.getElementById( 'wlan1vwn_enabled_3' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan1hstatus_3' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan1hstatus_3' ).value = "up";
            }
            document.getElementById( 'wlan1vwn_id_3' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_ssid_3' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_broadcast_ssid_3' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_dscp_prio_3' ).disabled = disabled;
            document.getElementById( 'wlan1bss_dscp_prio_3' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_tagged_sta_mode_3' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_mode_3' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_id_3' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_station_isolation_3' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_prio_3' ).disabled = disabled;

            
            
              document.getElementById( 'wlan1vwn_band_steer_3' ).disabled = disabled;
            

            document.getElementById( 'wlan1vwn_rrm_mode_3' ).disabled = disabled;
            document.getElementById( 'wlan1security-mode-id3' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_mac_auth_type_3' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wlan1wep-settings-panel3' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'wlan1dot1x-settings-panel3' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wlan1wpa-settings-panel3' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wlan1wparadius-settings-panel3' );
            var expander = document.getElementById( 'wlan1expand3' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showwlan1SecuritySettings3("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setwlan1EntryEnabledStates3 );
        </script>

        <input class="input-checkbox" type="checkbox" id="wlan1vwn_enabled_3" name="wlan1vlans.3.bss.status" value="up" onclick="setwlan1EntryEnabledStates3(1);"> 

        <input type="hidden" name="wlan1vlans.3.bss.row" value="3">
        <input type="hidden" id="vwn_wlan1hstatus_3" name="wlan1vlans.3.bss.hstatus" value="down">
      </td>
      <td class="section-cell" width="1">
        
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_id_3" name="wlan1vlans.3.interface.vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="wlan1vwn_ssid_3" name="wlan1vlans.3.interface.ssid" value="EnterpriseWifi" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_broadcast_ssid_3" name="wlan1vlans.3.bss.ignore-broadcast-ssid" value="off" onclick="setWlan1BroadcastSSID3(1);" checked="" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_station_isolation_3" name="wlan1vlans.3.bss.station-isolation" value="on" disabled="">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_band_steer_3" name="wlan1vlans.3.vap.band-steer-mode" value="up" onclick="setwlan1EntryBandSteerMode3(1);" checked="" disabled="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_rrm_mode_3" name="wlan1vlans.3.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_dscp_prio_3" onclick="clickWlan1BssDcspPrio(&#39;3&#39;)" disabled="">
        <input type="hidden" id="wlan1bss_dscp_prio_3" name="wlan1vlans.3.bss.dscp-prio" value="0" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_tagged_sta_mode_3" name="wlan1vlans.3.bss.tagged-sta-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_general_vlan_mode_3" name="wlan1vlans.3.bss.general-vlan-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_general_vlan_id_3" name="wlan1vlans.3.bss.general-vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="wlan1vwn_prio_3" name="wlan1vlans.3.interface.vlan-prio" disabled="">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan1EntryBandSteerMode3() {
            var bandsteerCheckBox = document.getElementById( 'wlan1vwn_band_steer_3' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'wlan1vwn_band_steer_3' ).value = "down";
            } else {
              document.getElementById( 'wlan1vwn_band_steer_3' ).value = "up";
            }
      }
      

      function setWlan1BroadcastSSID3()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          var broadcast_ssid = document.getElementById( 'wlan1vwn_broadcast_ssid_3' ).checked;
          if ((wps_vap == 3) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showwlan1SecuritySettings3(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 3) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 3) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 3) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 3) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wlan1wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wlan1wparadius-settings-panel' + i );
          img = document.getElementById( 'wlan1expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 3 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 3 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showWlan1MacAuthSettings3(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 3) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('wlan1vwn_tagged_sta_mode_3').onclick = function() {
        var general_vlan = document.getElementById( 'wlan1vwn_general_vlan_mode_3' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('wlan1vwn_general_vlan_mode_3').onclick = function() {
        var vlan_trunk = document.getElementById( 'wlan1vwn_tagged_sta_mode_3' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="wlan1security-mode-id3" name="wlan1vlans.3.security" onchange="showwlan1SecuritySettings3(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="plain-text">
          None
          </option>
          
          <option value="wpa-personal">
          WPA Personal
          </option>
          <option value="wpa-enterprise" selected="">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="wlan1vwn_mac_auth_type_3" name="wlan1vlans.3.bss.mac-acl-auth-type" onchange="showWlan1MacAuthSettings3(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
      <td align="left" valign="middle">
      <img id="wlan1expand3" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src =&#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if(this.src.indexOf(&#39;expand&#39;) != -1) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if(this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;wlan1security-mode-id3&#39; ); showwlan1SecuritySettings3(s.options[s.selectedIndex].value); this.src =&#39;collapse.gif&#39;; } else { showwlan1SecuritySettings3(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wlan1wpa-settings-panel3" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wpavlans3validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wpavlans3wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wpavlans3broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wpavlans3() {
  var preAuth = document.getElementById( 'wlan1wpavlans3pre_auth_container_id' );

  document.getElementById( 'wlan1wpavlans3wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wpavlans3()
{
  var mfp = document.getElementById( 'wlan1wpavlans3mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wpavlans3() {
  var mfp = document.getElementById( 'wlan1wpavlans3mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wpavlans3 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wpavlans3(); if( !this.checked ) {setPreAuthEnabledStatewlan1wpavlans3(); document.getElementById(&#39;wlan1wpavlans3wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wpavlans3wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wpavlans3();} else if( this.checked ) {document.getElementById(&#39;wlan1wpavlans3wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wpavlans3wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wpavlans3();}" name="wlan1vlans.3.wpa-allowed" id="wlan1wpavlans3wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wpavlans3(); if( !this.checked ) document.getElementById(&#39;wlan1wpavlans3wpa_version1_id&#39;).checked = true;" name="wlan1vlans.3.wpa2-allowed" id="wlan1wpavlans3wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wpavlans3wpa-cipher-tkip" name="wlan1vlans.3.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wpavlans3wpa-cipher-ccmp" name="wlan1vlans.3.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wlan1wpavlans3wpa-personal-key" maxlength="63" name="wlan1vlans.3.wpa-personal-key" value="">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wlan1wpavlans3broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wpavlans3&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.3.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wpavlans3mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wpavlans3mfp_not_reqd" name="wlan1vlans.3.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans3mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans3mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wpavlans3mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans3mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans3mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans3mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans3mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wpavlans3mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans3mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans3mfp_not_req_flag" type="hidden" name="wlan1vlans.3.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wpavlans3mfp_capable" name="wlan1vlans.3.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans3mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans3mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans3mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wpavlans3mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wpavlans3mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans3mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wpavlans3mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans3mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans3mfp_capable_flag" type="hidden" name="wlan1vlans.3.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wlan1wpavlans3mfp_reqd" name="wlan1vlans.3.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wpavlans3mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans3mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wpavlans3mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wpavlans3mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wpavlans3mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans3mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wpavlans3mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wpavlans3mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans3mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wpavlans3mfp_req_flag" type="hidden" name="wlan1vlans.3.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wlan1wparadius-settings-panel3" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wparadiusvlans3validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wparadiusvlans3wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wparadiusvlans3broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wparadiusvlans3() {
  var preAuth = document.getElementById( 'wlan1wparadiusvlans3pre_auth_container_id' );

  document.getElementById( 'wlan1wparadiusvlans3wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wparadiusvlans3()
{
  var mfp = document.getElementById( 'wlan1wparadiusvlans3mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wparadiusvlans3() {
  var mfp = document.getElementById( 'wlan1wparadiusvlans3mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wparadiusvlans3 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wparadiusvlans3(); if( !this.checked ) {setPreAuthEnabledStatewlan1wparadiusvlans3(); document.getElementById(&#39;wlan1wparadiusvlans3wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wparadiusvlans3wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wparadiusvlans3();} else if( this.checked ) {document.getElementById(&#39;wlan1wparadiusvlans3wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wparadiusvlans3wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wparadiusvlans3();}" name="wlan1vlans.3.wpa-allowed" id="wlan1wparadiusvlans3wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wparadiusvlans3(); if( !this.checked ) document.getElementById(&#39;wlan1wparadiusvlans3wpa_version1_id&#39;).checked = true;" name="wlan1vlans.3.wpa2-allowed" id="wlan1wparadiusvlans3wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wlan1wparadiusvlans3pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan1vlans.3.rsn-preauthentication" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wparadiusvlans3wpa-cipher-tkip" name="wlan1vlans.3.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wparadiusvlans3wpa-cipher-ccmp" name="wlan1vlans.3.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wparadiusvlans3mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wparadiusvlans3mfp_not_reqd" name="wlan1vlans.3.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans3mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans3mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wparadiusvlans3mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans3mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans3mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans3mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans3mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wparadiusvlans3mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans3mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans3mfp_not_req_flag" type="hidden" name="wlan1vlans.3.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wparadiusvlans3mfp_capable" name="wlan1vlans.3.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans3mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans3mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans3mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wparadiusvlans3mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans3mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans3mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wparadiusvlans3mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans3mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans3mfp_capable_flag" type="hidden" name="wlan1vlans.3.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wlan1wparadiusvlans3mfp_reqd" name="wlan1vlans.3.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wparadiusvlans3mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans3mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wparadiusvlans3mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wparadiusvlans3mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wparadiusvlans3mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans3mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wparadiusvlans3mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wparadiusvlans3mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans3mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wparadiusvlans3mfp_req_flag" type="hidden" name="wlan1vlans.3.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywlan1wparadiusvlans3() {
      var rs = document.getElementById( 'wlan1wparadiusvlans3radius-settings-grs' );
      document.getElementById('wlan1wparadiusvlans3use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wlan1wparadiusvlans3use-grs-input').value = document.getElementById('wlan1wparadiusvlans3use-grs-display').checked? "on" : "off";
     }




function wlan1wparadiusvlans3validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wlan1wparadiusvlans3broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wlan1wparadiusvlans3session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wlan1wparadiusvlans3use-grs-display').checked)
    {
       var domain = document.getElementById('wlan1wparadiusvlans3radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan1vlans.3.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wlan1wparadiusvlans3radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wlan1wparadiusvlans3radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wlan1wparadiusvlans3radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wlan1wparadiusvlans3radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans3key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans3key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans3key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans3key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans3key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans3key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans3key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans3key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wlan1wparadiusvlans3radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wlan1wparadiusvlans3radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wlan1wparadiusvlans3radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wlan1wparadiusvlans3radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans3key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans3key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans3key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans3key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wlan1wparadiusvlans3','wlan1vlans.3.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywlan1wparadiusvlans3 );
   </script>

<input id="wlan1wparadiusvlans3radius-key-flag" type="hidden" name="wlan1vlans.3.radius-key-flag" value="0">
<input id="wlan1wparadiusvlans3radius-key-flag1" type="hidden" name="wlan1vlans.3.radius-key-flag1" value="0">
<input id="wlan1wparadiusvlans3radius-key-flag2" type="hidden" name="wlan1vlans.3.radius-key-flag2" value="0">
<input id="wlan1wparadiusvlans3radius-key-flag3" type="hidden" name="wlan1vlans.3.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wlan1wparadiusvlans3use-grs-display" onclick="setRadiusSettingsDisplaywlan1wparadiusvlans3();">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wlan1wparadiusvlans3use-grs-input" name="wlan1vlans.3.global-radius" value="off">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wlan1wparadiusvlans3radius-settings-grs">
       <tbody><tr>
        <td class="label" nowrap="">RADIUS Domain:&nbsp;</td>
        <td>
         <input id="wlan1wparadiusvlans3radius-domain" type="text" class="text-input" name="wlan1vlans.3.radius-domain" value="root">
        </td>
       </tr>
       <tr>
        <td class="label" nowrap="">RADIUS IP Address Type:&nbsp;</td>
        <td>
<input class="value" type="radio" name="wlan1vlans.3.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan1vlans.3.wpa-type2&#39;,&#39;wlan1wparadiusvlans3&#39;)" id="wlan1vlans.3.wparadius-ip-network-type2_ipv4" checked="">
        IPv4
        <input class="value" type="radio" name="wlan1vlans.3.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan1vlans.3.wpa-type2&#39;,&#39;wlan1wparadiusvlans3&#39;)" id="wlan1vlans.3.wparadius-ip-network-type2_ipv6">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan1vlans.3.wpa-type2">
        <td class="label" nowrap="">RADIUS IP Address:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans3radius-ip" type="text" class="text-input" name="wlan1vlans.3.radius-ip" value="192.168.31.51">
        </td>
      </tr>
      <tr id="ipv4wlan1vlans.3.wpa-type21">
        <td class="label" nowrap="">RADIUS IP Address-1:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans3radius-backupone-ip" type="text" class="text-input" name="wlan1vlans.3.radius-backupone-ip" value="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.3.wpa-type22">
        <td class="label" nowrap="">RADIUS IP Address-2:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans3radius-backuptwo-ip" type="text" class="text-input" name="wlan1vlans.3.radius-backuptwo-ip" value="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.3.wpa-type23">
        <td class="label" nowrap="">RADIUS IP Address-3:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans3radius-backupthree-ip" type="text" class="text-input" name="wlan1vlans.3.radius-backupthree-ip" value="">
        </td>
      </tr>
     
      <tr id="ipv6wlan1vlans.3.wpa-type2" style="display: none;">
        <td class="label" nowrap="">RADIUS IPv6 Address:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans3radius-ipv6" type="text" name="wlan1vlans.3.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan1vlans.3.wpa-type21" style="display: none;">
        <td class="label" nowrap="">RADIUS IPv6 Address-1:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans3radius-backupone-ipv6" type="text" name="wlan1vlans.3.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.3.wpa-type22" style="display: none;">
        <td class="label" nowrap="">RADIUS IPv6 Address-2:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans3radius-backuptwo-ipv6" type="text" name="wlan1vlans.3.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.3.wpa-type23" style="display: none;">
        <td class="label" nowrap="">RADIUS IPv6 Address-3:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans3radius-backupthree-ipv6" type="text" name="wlan1vlans.3.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr>
        <td class="label" nowrap="">RADIUS Key:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans3key-field" type="password" name="wlan1vlans.3.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans3radius-key-flag&#39;).value = &#39;1&#39;;">
        </td>
      </tr>
      <tr>
        <td class="label" nowrap="">RADIUS Key-1:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans3key-field1" type="password" name="wlan1vlans.3.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans3radius-key-flag1&#39;).value = &#39;1&#39;;">
        </td>
      </tr>
      <tr>
        <td class="label" nowrap="">RADIUS Key-2:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans3key-field2" type="password" name="wlan1vlans.3.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans3radius-key-flag2&#39;).value = &#39;1&#39;;">
        </td>
      </tr>
      <tr>
        <td class="label" nowrap="">RADIUS Key-3:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans3key-field3" type="password" name="wlan1vlans.3.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans3radius-key-flag3&#39;).value = &#39;1&#39;;">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.31.51";
  var encrypted_key = "3934383135396338363336333532346566383730363633663366396231376163316666646331316336373433636238376566306538393763313966366633363266346238366538393630636364353539353232356262633133313462393632633234366133656362646632303837323232333064313065313463636633656265";
  var key = "wlan1wparadiusvlans3key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans3key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans3key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans3key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr>
        <td class="label" colspan="3" nowrap="">
          <input type="checkbox" name="wlan1vlans.3.radius-accounting" checked="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan1vlans.3.radius-current" size="1">
       <option value="primary" selected="">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans3broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans3&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.3.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans3session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans3&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan1vlans.3.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan1vlans.3."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan1vlans.3."+"wpa"+"-type2","wlan1wparadiusvlans3");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan1vlans.3."+"wpa"+"-type2","wlan1wparadiusvlans3");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        4
      </td>
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setwlan1EntryEnabledStates4() {
            var enabledCheckBox = document.getElementById( 'wlan1vwn_enabled_4' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan1hstatus_4' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan1hstatus_4' ).value = "up";
            }
            document.getElementById( 'wlan1vwn_id_4' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_ssid_4' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_broadcast_ssid_4' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_dscp_prio_4' ).disabled = disabled;
            document.getElementById( 'wlan1bss_dscp_prio_4' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_tagged_sta_mode_4' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_mode_4' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_id_4' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_station_isolation_4' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_prio_4' ).disabled = disabled;

            
            
              document.getElementById( 'wlan1vwn_band_steer_4' ).disabled = disabled;
            

            document.getElementById( 'wlan1vwn_rrm_mode_4' ).disabled = disabled;
            document.getElementById( 'wlan1security-mode-id4' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_mac_auth_type_4' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wlan1wep-settings-panel4' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'wlan1dot1x-settings-panel4' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wlan1wpa-settings-panel4' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wlan1wparadius-settings-panel4' );
            var expander = document.getElementById( 'wlan1expand4' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showwlan1SecuritySettings4("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setwlan1EntryEnabledStates4 );
        </script>

        <input class="input-checkbox" type="checkbox" id="wlan1vwn_enabled_4" name="wlan1vlans.4.bss.status" value="up" onclick="setwlan1EntryEnabledStates4(1);"> 

        <input type="hidden" name="wlan1vlans.4.bss.row" value="4">
        <input type="hidden" id="vwn_wlan1hstatus_4" name="wlan1vlans.4.bss.hstatus" value="down">
      </td>
      <td class="section-cell" width="1">
        
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_id_4" name="wlan1vlans.4.interface.vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="wlan1vwn_ssid_4" name="wlan1vlans.4.interface.ssid" value="SentinelWPA3" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_broadcast_ssid_4" name="wlan1vlans.4.bss.ignore-broadcast-ssid" value="off" onclick="setWlan1BroadcastSSID4(1);" checked="" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_station_isolation_4" name="wlan1vlans.4.bss.station-isolation" value="on" disabled="">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_band_steer_4" name="wlan1vlans.4.vap.band-steer-mode" value="up" onclick="setwlan1EntryBandSteerMode4(1);" checked="" disabled="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_rrm_mode_4" name="wlan1vlans.4.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_dscp_prio_4" onclick="clickWlan1BssDcspPrio(&#39;4&#39;)" disabled="">
        <input type="hidden" id="wlan1bss_dscp_prio_4" name="wlan1vlans.4.bss.dscp-prio" value="0" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_tagged_sta_mode_4" name="wlan1vlans.4.bss.tagged-sta-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_general_vlan_mode_4" name="wlan1vlans.4.bss.general-vlan-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_general_vlan_id_4" name="wlan1vlans.4.bss.general-vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="wlan1vwn_prio_4" name="wlan1vlans.4.interface.vlan-prio" disabled="">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan1EntryBandSteerMode4() {
            var bandsteerCheckBox = document.getElementById( 'wlan1vwn_band_steer_4' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'wlan1vwn_band_steer_4' ).value = "down";
            } else {
              document.getElementById( 'wlan1vwn_band_steer_4' ).value = "up";
            }
      }
      

      function setWlan1BroadcastSSID4()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          var broadcast_ssid = document.getElementById( 'wlan1vwn_broadcast_ssid_4' ).checked;
          if ((wps_vap == 4) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showwlan1SecuritySettings4(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 4) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 4) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 4) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 4) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wlan1wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wlan1wparadius-settings-panel' + i );
          img = document.getElementById( 'wlan1expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 4 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 4 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showWlan1MacAuthSettings4(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 4) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('wlan1vwn_tagged_sta_mode_4').onclick = function() {
        var general_vlan = document.getElementById( 'wlan1vwn_general_vlan_mode_4' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('wlan1vwn_general_vlan_mode_4').onclick = function() {
        var vlan_trunk = document.getElementById( 'wlan1vwn_tagged_sta_mode_4' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="wlan1security-mode-id4" name="wlan1vlans.4.security" onchange="showwlan1SecuritySettings4(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="plain-text">
          None
          </option>
          
          <option value="wpa-personal" selected="">
          WPA Personal
          </option>
          <option value="wpa-enterprise">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="wlan1vwn_mac_auth_type_4" name="wlan1vlans.4.bss.mac-acl-auth-type" onchange="showWlan1MacAuthSettings4(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
      <td align="left" valign="middle">
      <img id="wlan1expand4" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src =&#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if(this.src.indexOf(&#39;expand&#39;) != -1) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if(this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;wlan1security-mode-id4&#39; ); showwlan1SecuritySettings4(s.options[s.selectedIndex].value); this.src =&#39;collapse.gif&#39;; } else { showwlan1SecuritySettings4(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wlan1wpa-settings-panel4" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wpavlans4validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wpavlans4wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wpavlans4broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wpavlans4() {
  var preAuth = document.getElementById( 'wlan1wpavlans4pre_auth_container_id' );

  document.getElementById( 'wlan1wpavlans4wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wpavlans4()
{
  var mfp = document.getElementById( 'wlan1wpavlans4mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wpavlans4() {
  var mfp = document.getElementById( 'wlan1wpavlans4mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wpavlans4 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wpavlans4(); if( !this.checked ) {setPreAuthEnabledStatewlan1wpavlans4(); document.getElementById(&#39;wlan1wpavlans4wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wpavlans4wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wpavlans4();} else if( this.checked ) {document.getElementById(&#39;wlan1wpavlans4wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wpavlans4wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wpavlans4();}" name="wlan1vlans.4.wpa-allowed" id="wlan1wpavlans4wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wpavlans4(); if( !this.checked ) document.getElementById(&#39;wlan1wpavlans4wpa_version1_id&#39;).checked = true;" name="wlan1vlans.4.wpa2-allowed" id="wlan1wpavlans4wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wpavlans4wpa-cipher-tkip" name="wlan1vlans.4.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wpavlans4wpa-cipher-ccmp" name="wlan1vlans.4.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wlan1wpavlans4wpa-personal-key" maxlength="63" name="wlan1vlans.4.wpa-personal-key" value="pwd4wifi">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wlan1wpavlans4broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wpavlans4&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.4.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wpavlans4mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wpavlans4mfp_not_reqd" name="wlan1vlans.4.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans4mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans4mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wpavlans4mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans4mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans4mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans4mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans4mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wpavlans4mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans4mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans4mfp_not_req_flag" type="hidden" name="wlan1vlans.4.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wpavlans4mfp_capable" name="wlan1vlans.4.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans4mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans4mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans4mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wpavlans4mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wpavlans4mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans4mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wpavlans4mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans4mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans4mfp_capable_flag" type="hidden" name="wlan1vlans.4.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wlan1wpavlans4mfp_reqd" name="wlan1vlans.4.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wpavlans4mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans4mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wpavlans4mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wpavlans4mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wpavlans4mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans4mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wpavlans4mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wpavlans4mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans4mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wpavlans4mfp_req_flag" type="hidden" name="wlan1vlans.4.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wlan1wparadius-settings-panel4" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wparadiusvlans4validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wparadiusvlans4wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wparadiusvlans4broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wparadiusvlans4() {
  var preAuth = document.getElementById( 'wlan1wparadiusvlans4pre_auth_container_id' );

  document.getElementById( 'wlan1wparadiusvlans4wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wparadiusvlans4()
{
  var mfp = document.getElementById( 'wlan1wparadiusvlans4mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wparadiusvlans4() {
  var mfp = document.getElementById( 'wlan1wparadiusvlans4mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wparadiusvlans4 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wparadiusvlans4(); if( !this.checked ) {setPreAuthEnabledStatewlan1wparadiusvlans4(); document.getElementById(&#39;wlan1wparadiusvlans4wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wparadiusvlans4wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wparadiusvlans4();} else if( this.checked ) {document.getElementById(&#39;wlan1wparadiusvlans4wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wparadiusvlans4wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wparadiusvlans4();}" name="wlan1vlans.4.wpa-allowed" id="wlan1wparadiusvlans4wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wparadiusvlans4(); if( !this.checked ) document.getElementById(&#39;wlan1wparadiusvlans4wpa_version1_id&#39;).checked = true;" name="wlan1vlans.4.wpa2-allowed" id="wlan1wparadiusvlans4wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wlan1wparadiusvlans4pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan1vlans.4.rsn-preauthentication" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wparadiusvlans4wpa-cipher-tkip" name="wlan1vlans.4.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wparadiusvlans4wpa-cipher-ccmp" name="wlan1vlans.4.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wparadiusvlans4mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wparadiusvlans4mfp_not_reqd" name="wlan1vlans.4.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans4mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans4mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wparadiusvlans4mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans4mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans4mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans4mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans4mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wparadiusvlans4mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans4mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans4mfp_not_req_flag" type="hidden" name="wlan1vlans.4.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wparadiusvlans4mfp_capable" name="wlan1vlans.4.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans4mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans4mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans4mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wparadiusvlans4mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans4mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans4mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wparadiusvlans4mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans4mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans4mfp_capable_flag" type="hidden" name="wlan1vlans.4.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wlan1wparadiusvlans4mfp_reqd" name="wlan1vlans.4.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wparadiusvlans4mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans4mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wparadiusvlans4mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wparadiusvlans4mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wparadiusvlans4mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans4mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wparadiusvlans4mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wparadiusvlans4mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans4mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wparadiusvlans4mfp_req_flag" type="hidden" name="wlan1vlans.4.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywlan1wparadiusvlans4() {
      var rs = document.getElementById( 'wlan1wparadiusvlans4radius-settings-grs' );
      document.getElementById('wlan1wparadiusvlans4use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wlan1wparadiusvlans4use-grs-input').value = document.getElementById('wlan1wparadiusvlans4use-grs-display').checked? "on" : "off";
     }




function wlan1wparadiusvlans4validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wlan1wparadiusvlans4broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wlan1wparadiusvlans4session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wlan1wparadiusvlans4use-grs-display').checked)
    {
       var domain = document.getElementById('wlan1wparadiusvlans4radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan1vlans.4.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wlan1wparadiusvlans4radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wlan1wparadiusvlans4radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wlan1wparadiusvlans4radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wlan1wparadiusvlans4radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans4key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans4key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans4key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans4key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans4key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans4key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans4key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans4key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wlan1wparadiusvlans4radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wlan1wparadiusvlans4radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wlan1wparadiusvlans4radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wlan1wparadiusvlans4radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans4key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans4key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans4key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans4key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wlan1wparadiusvlans4','wlan1vlans.4.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywlan1wparadiusvlans4 );
   </script>

<input id="wlan1wparadiusvlans4radius-key-flag" type="hidden" name="wlan1vlans.4.radius-key-flag" value="0">
<input id="wlan1wparadiusvlans4radius-key-flag1" type="hidden" name="wlan1vlans.4.radius-key-flag1" value="0">
<input id="wlan1wparadiusvlans4radius-key-flag2" type="hidden" name="wlan1vlans.4.radius-key-flag2" value="0">
<input id="wlan1wparadiusvlans4radius-key-flag3" type="hidden" name="wlan1vlans.4.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wlan1wparadiusvlans4use-grs-display" onclick="setRadiusSettingsDisplaywlan1wparadiusvlans4();" checked="">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wlan1wparadiusvlans4use-grs-input" name="wlan1vlans.4.global-radius" value="on">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wlan1wparadiusvlans4radius-settings-grs">
       <tbody style="color: rgb(128, 128, 128);"><tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Domain:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
         <input id="wlan1wparadiusvlans4radius-domain" type="text" class="text-input" name="wlan1vlans.4.radius-domain" value="root" disabled="">
        </td>
       </tr>
       <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address Type:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
<input class="value" type="radio" name="wlan1vlans.4.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan1vlans.4.wpa-type2&#39;,&#39;wlan1wparadiusvlans4&#39;)" id="wlan1vlans.4.wparadius-ip-network-type2_ipv4" checked="" disabled="">
        IPv4
        <input class="value" type="radio" name="wlan1vlans.4.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan1vlans.4.wpa-type2&#39;,&#39;wlan1wparadiusvlans4&#39;)" id="wlan1vlans.4.wparadius-ip-network-type2_ipv6" disabled="">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan1vlans.4.wpa-type2" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans4radius-ip" type="text" class="text-input" name="wlan1vlans.4.radius-ip" value="192.168.1.1" disabled="">
        </td>
      </tr>
      <tr id="ipv4wlan1vlans.4.wpa-type21" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans4radius-backupone-ip" type="text" class="text-input" name="wlan1vlans.4.radius-backupone-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.4.wpa-type22" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans4radius-backuptwo-ip" type="text" class="text-input" name="wlan1vlans.4.radius-backuptwo-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.4.wpa-type23" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans4radius-backupthree-ip" type="text" class="text-input" name="wlan1vlans.4.radius-backupthree-ip" value="" disabled="">
        </td>
      </tr>
     
      <tr id="ipv6wlan1vlans.4.wpa-type2" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans4radius-ipv6" type="text" name="wlan1vlans.4.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan1vlans.4.wpa-type21" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans4radius-backupone-ipv6" type="text" name="wlan1vlans.4.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.4.wpa-type22" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans4radius-backuptwo-ipv6" type="text" name="wlan1vlans.4.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.4.wpa-type23" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans4radius-backupthree-ipv6" type="text" name="wlan1vlans.4.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans4key-field" type="password" name="wlan1vlans.4.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans4radius-key-flag&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans4key-field1" type="password" name="wlan1vlans.4.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans4radius-key-flag1&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans4key-field2" type="password" name="wlan1vlans.4.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans4radius-key-flag2&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans4key-field3" type="password" name="wlan1vlans.4.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans4radius-key-flag3&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript" style="color: rgb(128, 128, 128);">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.1.1";
  var encrypted_key = "393437643137626564353634633939366665376537653661623837303264336133333465363234633630653639303761336531613166316130376635393738323235306563383336303137323965646332303863383163366137663834613962623863323264333162393162316136373032663165306335343938306566343200";
  var key = "wlan1wparadiusvlans4key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans4key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans4key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans4key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" colspan="3" nowrap="" style="color: rgb(128, 128, 128);">
          <input type="checkbox" name="wlan1vlans.4.radius-accounting" disabled="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan1vlans.4.radius-current" size="1">
       <option value="primary" selected="">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans4broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans4&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.4.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans4session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans4&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan1vlans.4.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan1vlans.4."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan1vlans.4."+"wpa"+"-type2","wlan1wparadiusvlans4");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan1vlans.4."+"wpa"+"-type2","wlan1wparadiusvlans4");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        5
      </td>
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setwlan1EntryEnabledStates5() {
            var enabledCheckBox = document.getElementById( 'wlan1vwn_enabled_5' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan1hstatus_5' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan1hstatus_5' ).value = "up";
            }
            document.getElementById( 'wlan1vwn_id_5' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_ssid_5' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_broadcast_ssid_5' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_dscp_prio_5' ).disabled = disabled;
            document.getElementById( 'wlan1bss_dscp_prio_5' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_tagged_sta_mode_5' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_mode_5' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_id_5' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_station_isolation_5' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_prio_5' ).disabled = disabled;

            
            
              document.getElementById( 'wlan1vwn_band_steer_5' ).disabled = disabled;
            

            document.getElementById( 'wlan1vwn_rrm_mode_5' ).disabled = disabled;
            document.getElementById( 'wlan1security-mode-id5' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_mac_auth_type_5' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wlan1wep-settings-panel5' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'wlan1dot1x-settings-panel5' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wlan1wpa-settings-panel5' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wlan1wparadius-settings-panel5' );
            var expander = document.getElementById( 'wlan1expand5' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showwlan1SecuritySettings5("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setwlan1EntryEnabledStates5 );
        </script>

        <input class="input-checkbox" type="checkbox" id="wlan1vwn_enabled_5" name="wlan1vlans.5.bss.status" value="up" onclick="setwlan1EntryEnabledStates5(1);"> 

        <input type="hidden" name="wlan1vlans.5.bss.row" value="5">
        <input type="hidden" id="vwn_wlan1hstatus_5" name="wlan1vlans.5.bss.hstatus" value="down">
      </td>
      <td class="section-cell" width="1">
        
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_id_5" name="wlan1vlans.5.interface.vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="wlan1vwn_ssid_5" name="wlan1vlans.5.interface.ssid" value="SentinelWPA" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_broadcast_ssid_5" name="wlan1vlans.5.bss.ignore-broadcast-ssid" value="off" onclick="setWlan1BroadcastSSID5(1);" checked="" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_station_isolation_5" name="wlan1vlans.5.bss.station-isolation" value="on" disabled="">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_band_steer_5" name="wlan1vlans.5.vap.band-steer-mode" value="up" onclick="setwlan1EntryBandSteerMode5(1);" checked="" disabled="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_rrm_mode_5" name="wlan1vlans.5.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_dscp_prio_5" onclick="clickWlan1BssDcspPrio(&#39;5&#39;)" disabled="">
        <input type="hidden" id="wlan1bss_dscp_prio_5" name="wlan1vlans.5.bss.dscp-prio" value="0" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_tagged_sta_mode_5" name="wlan1vlans.5.bss.tagged-sta-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_general_vlan_mode_5" name="wlan1vlans.5.bss.general-vlan-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_general_vlan_id_5" name="wlan1vlans.5.bss.general-vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="wlan1vwn_prio_5" name="wlan1vlans.5.interface.vlan-prio" disabled="">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan1EntryBandSteerMode5() {
            var bandsteerCheckBox = document.getElementById( 'wlan1vwn_band_steer_5' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'wlan1vwn_band_steer_5' ).value = "down";
            } else {
              document.getElementById( 'wlan1vwn_band_steer_5' ).value = "up";
            }
      }
      

      function setWlan1BroadcastSSID5()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          var broadcast_ssid = document.getElementById( 'wlan1vwn_broadcast_ssid_5' ).checked;
          if ((wps_vap == 5) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showwlan1SecuritySettings5(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 5) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 5) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 5) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 5) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wlan1wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wlan1wparadius-settings-panel' + i );
          img = document.getElementById( 'wlan1expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 5 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 5 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showWlan1MacAuthSettings5(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 5) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('wlan1vwn_tagged_sta_mode_5').onclick = function() {
        var general_vlan = document.getElementById( 'wlan1vwn_general_vlan_mode_5' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('wlan1vwn_general_vlan_mode_5').onclick = function() {
        var vlan_trunk = document.getElementById( 'wlan1vwn_tagged_sta_mode_5' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="wlan1security-mode-id5" name="wlan1vlans.5.security" onchange="showwlan1SecuritySettings5(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="plain-text">
          None
          </option>
          
          <option value="wpa-personal" selected="">
          WPA Personal
          </option>
          <option value="wpa-enterprise">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="wlan1vwn_mac_auth_type_5" name="wlan1vlans.5.bss.mac-acl-auth-type" onchange="showWlan1MacAuthSettings5(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
      <td align="left" valign="middle">
      <img id="wlan1expand5" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src =&#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if(this.src.indexOf(&#39;expand&#39;) != -1) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if(this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;wlan1security-mode-id5&#39; ); showwlan1SecuritySettings5(s.options[s.selectedIndex].value); this.src =&#39;collapse.gif&#39;; } else { showwlan1SecuritySettings5(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wlan1wpa-settings-panel5" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wpavlans5validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wpavlans5wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wpavlans5broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wpavlans5() {
  var preAuth = document.getElementById( 'wlan1wpavlans5pre_auth_container_id' );

  document.getElementById( 'wlan1wpavlans5wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wpavlans5()
{
  var mfp = document.getElementById( 'wlan1wpavlans5mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wpavlans5() {
  var mfp = document.getElementById( 'wlan1wpavlans5mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wpavlans5 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wpavlans5(); if( !this.checked ) {setPreAuthEnabledStatewlan1wpavlans5(); document.getElementById(&#39;wlan1wpavlans5wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wpavlans5wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wpavlans5();} else if( this.checked ) {document.getElementById(&#39;wlan1wpavlans5wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wpavlans5wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wpavlans5();}" name="wlan1vlans.5.wpa-allowed" id="wlan1wpavlans5wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wpavlans5(); if( !this.checked ) document.getElementById(&#39;wlan1wpavlans5wpa_version1_id&#39;).checked = true;" name="wlan1vlans.5.wpa2-allowed" id="wlan1wpavlans5wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wpavlans5wpa-cipher-tkip" name="wlan1vlans.5.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wpavlans5wpa-cipher-ccmp" name="wlan1vlans.5.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wlan1wpavlans5wpa-personal-key" maxlength="63" name="wlan1vlans.5.wpa-personal-key" value="pwd4wifi">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wlan1wpavlans5broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wpavlans5&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.5.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wpavlans5mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wpavlans5mfp_not_reqd" name="wlan1vlans.5.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans5mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans5mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wpavlans5mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans5mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans5mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans5mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans5mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wpavlans5mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans5mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans5mfp_not_req_flag" type="hidden" name="wlan1vlans.5.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wpavlans5mfp_capable" name="wlan1vlans.5.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans5mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans5mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans5mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wpavlans5mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wpavlans5mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans5mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wpavlans5mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans5mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans5mfp_capable_flag" type="hidden" name="wlan1vlans.5.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wlan1wpavlans5mfp_reqd" name="wlan1vlans.5.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wpavlans5mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans5mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wpavlans5mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wpavlans5mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wpavlans5mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans5mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wpavlans5mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wpavlans5mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans5mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wpavlans5mfp_req_flag" type="hidden" name="wlan1vlans.5.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wlan1wparadius-settings-panel5" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wparadiusvlans5validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wparadiusvlans5wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wparadiusvlans5broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wparadiusvlans5() {
  var preAuth = document.getElementById( 'wlan1wparadiusvlans5pre_auth_container_id' );

  document.getElementById( 'wlan1wparadiusvlans5wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wparadiusvlans5()
{
  var mfp = document.getElementById( 'wlan1wparadiusvlans5mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wparadiusvlans5() {
  var mfp = document.getElementById( 'wlan1wparadiusvlans5mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wparadiusvlans5 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wparadiusvlans5(); if( !this.checked ) {setPreAuthEnabledStatewlan1wparadiusvlans5(); document.getElementById(&#39;wlan1wparadiusvlans5wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wparadiusvlans5wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wparadiusvlans5();} else if( this.checked ) {document.getElementById(&#39;wlan1wparadiusvlans5wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wparadiusvlans5wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wparadiusvlans5();}" name="wlan1vlans.5.wpa-allowed" id="wlan1wparadiusvlans5wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wparadiusvlans5(); if( !this.checked ) document.getElementById(&#39;wlan1wparadiusvlans5wpa_version1_id&#39;).checked = true;" name="wlan1vlans.5.wpa2-allowed" id="wlan1wparadiusvlans5wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wlan1wparadiusvlans5pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan1vlans.5.rsn-preauthentication" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wparadiusvlans5wpa-cipher-tkip" name="wlan1vlans.5.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wparadiusvlans5wpa-cipher-ccmp" name="wlan1vlans.5.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wparadiusvlans5mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wparadiusvlans5mfp_not_reqd" name="wlan1vlans.5.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans5mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans5mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wparadiusvlans5mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans5mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans5mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans5mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans5mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wparadiusvlans5mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans5mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans5mfp_not_req_flag" type="hidden" name="wlan1vlans.5.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wparadiusvlans5mfp_capable" name="wlan1vlans.5.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans5mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans5mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans5mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wparadiusvlans5mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans5mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans5mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wparadiusvlans5mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans5mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans5mfp_capable_flag" type="hidden" name="wlan1vlans.5.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wlan1wparadiusvlans5mfp_reqd" name="wlan1vlans.5.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wparadiusvlans5mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans5mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wparadiusvlans5mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wparadiusvlans5mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wparadiusvlans5mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans5mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wparadiusvlans5mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wparadiusvlans5mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans5mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wparadiusvlans5mfp_req_flag" type="hidden" name="wlan1vlans.5.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywlan1wparadiusvlans5() {
      var rs = document.getElementById( 'wlan1wparadiusvlans5radius-settings-grs' );
      document.getElementById('wlan1wparadiusvlans5use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wlan1wparadiusvlans5use-grs-input').value = document.getElementById('wlan1wparadiusvlans5use-grs-display').checked? "on" : "off";
     }




function wlan1wparadiusvlans5validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wlan1wparadiusvlans5broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wlan1wparadiusvlans5session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wlan1wparadiusvlans5use-grs-display').checked)
    {
       var domain = document.getElementById('wlan1wparadiusvlans5radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan1vlans.5.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wlan1wparadiusvlans5radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wlan1wparadiusvlans5radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wlan1wparadiusvlans5radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wlan1wparadiusvlans5radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans5key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans5key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans5key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans5key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans5key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans5key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans5key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans5key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wlan1wparadiusvlans5radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wlan1wparadiusvlans5radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wlan1wparadiusvlans5radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wlan1wparadiusvlans5radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans5key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans5key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans5key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans5key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wlan1wparadiusvlans5','wlan1vlans.5.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywlan1wparadiusvlans5 );
   </script>

<input id="wlan1wparadiusvlans5radius-key-flag" type="hidden" name="wlan1vlans.5.radius-key-flag" value="0">
<input id="wlan1wparadiusvlans5radius-key-flag1" type="hidden" name="wlan1vlans.5.radius-key-flag1" value="0">
<input id="wlan1wparadiusvlans5radius-key-flag2" type="hidden" name="wlan1vlans.5.radius-key-flag2" value="0">
<input id="wlan1wparadiusvlans5radius-key-flag3" type="hidden" name="wlan1vlans.5.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wlan1wparadiusvlans5use-grs-display" onclick="setRadiusSettingsDisplaywlan1wparadiusvlans5();" checked="">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wlan1wparadiusvlans5use-grs-input" name="wlan1vlans.5.global-radius" value="on">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wlan1wparadiusvlans5radius-settings-grs">
       <tbody style="color: rgb(128, 128, 128);"><tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Domain:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
         <input id="wlan1wparadiusvlans5radius-domain" type="text" class="text-input" name="wlan1vlans.5.radius-domain" value="root" disabled="">
        </td>
       </tr>
       <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address Type:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
<input class="value" type="radio" name="wlan1vlans.5.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan1vlans.5.wpa-type2&#39;,&#39;wlan1wparadiusvlans5&#39;)" id="wlan1vlans.5.wparadius-ip-network-type2_ipv4" checked="" disabled="">
        IPv4
        <input class="value" type="radio" name="wlan1vlans.5.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan1vlans.5.wpa-type2&#39;,&#39;wlan1wparadiusvlans5&#39;)" id="wlan1vlans.5.wparadius-ip-network-type2_ipv6" disabled="">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan1vlans.5.wpa-type2" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans5radius-ip" type="text" class="text-input" name="wlan1vlans.5.radius-ip" value="192.168.31.90" disabled="">
        </td>
      </tr>
      <tr id="ipv4wlan1vlans.5.wpa-type21" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans5radius-backupone-ip" type="text" class="text-input" name="wlan1vlans.5.radius-backupone-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.5.wpa-type22" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans5radius-backuptwo-ip" type="text" class="text-input" name="wlan1vlans.5.radius-backuptwo-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.5.wpa-type23" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans5radius-backupthree-ip" type="text" class="text-input" name="wlan1vlans.5.radius-backupthree-ip" value="" disabled="">
        </td>
      </tr>
     
      <tr id="ipv6wlan1vlans.5.wpa-type2" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans5radius-ipv6" type="text" name="wlan1vlans.5.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan1vlans.5.wpa-type21" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans5radius-backupone-ipv6" type="text" name="wlan1vlans.5.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.5.wpa-type22" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans5radius-backuptwo-ipv6" type="text" name="wlan1vlans.5.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.5.wpa-type23" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans5radius-backupthree-ipv6" type="text" name="wlan1vlans.5.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans5key-field" type="password" name="wlan1vlans.5.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans5radius-key-flag&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans5key-field1" type="password" name="wlan1vlans.5.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans5radius-key-flag1&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans5key-field2" type="password" name="wlan1vlans.5.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans5radius-key-flag2&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans5key-field3" type="password" name="wlan1vlans.5.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans5radius-key-flag3&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript" style="color: rgb(128, 128, 128);">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.31.90";
  var encrypted_key = "6333313830323361613064363839666235393762636438313566386464636139376130636334396636353031343861643861303265396266383562336339363763356537396266396165333933306236613431323661663234623065373535396336383638353435366463353061356434303564396465613435343764326463";
  var key = "wlan1wparadiusvlans5key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans5key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans5key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans5key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" colspan="3" nowrap="" style="color: rgb(128, 128, 128);">
          <input type="checkbox" name="wlan1vlans.5.radius-accounting" checked="" disabled="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan1vlans.5.radius-current" size="1">
       <option value="primary" selected="">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans5broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans5&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.5.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans5session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans5&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan1vlans.5.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan1vlans.5."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan1vlans.5."+"wpa"+"-type2","wlan1wparadiusvlans5");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan1vlans.5."+"wpa"+"-type2","wlan1wparadiusvlans5");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        6
      </td>
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setwlan1EntryEnabledStates6() {
            var enabledCheckBox = document.getElementById( 'wlan1vwn_enabled_6' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan1hstatus_6' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan1hstatus_6' ).value = "up";
            }
            document.getElementById( 'wlan1vwn_id_6' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_ssid_6' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_broadcast_ssid_6' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_dscp_prio_6' ).disabled = disabled;
            document.getElementById( 'wlan1bss_dscp_prio_6' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_tagged_sta_mode_6' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_mode_6' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_id_6' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_station_isolation_6' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_prio_6' ).disabled = disabled;

            
            
              document.getElementById( 'wlan1vwn_band_steer_6' ).disabled = disabled;
            

            document.getElementById( 'wlan1vwn_rrm_mode_6' ).disabled = disabled;
            document.getElementById( 'wlan1security-mode-id6' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_mac_auth_type_6' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wlan1wep-settings-panel6' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'wlan1dot1x-settings-panel6' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wlan1wpa-settings-panel6' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wlan1wparadius-settings-panel6' );
            var expander = document.getElementById( 'wlan1expand6' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showwlan1SecuritySettings6("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setwlan1EntryEnabledStates6 );
        </script>

        <input class="input-checkbox" type="checkbox" id="wlan1vwn_enabled_6" name="wlan1vlans.6.bss.status" value="up" onclick="setwlan1EntryEnabledStates6(1);" checked=""> 

        <input type="hidden" name="wlan1vlans.6.bss.row" value="6">
        <input type="hidden" id="vwn_wlan1hstatus_6" name="wlan1vlans.6.bss.hstatus" value="up">
      </td>
      <td class="section-cell" width="1">
        
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_id_6" name="wlan1vlans.6.interface.vlan-id" value="1">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="wlan1vwn_ssid_6" name="wlan1vlans.6.interface.ssid" value="SuperGeyorgy">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_broadcast_ssid_6" name="wlan1vlans.6.bss.ignore-broadcast-ssid" value="off" onclick="setWlan1BroadcastSSID6(1);" checked="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_station_isolation_6" name="wlan1vlans.6.bss.station-isolation" value="on">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_band_steer_6" name="wlan1vlans.6.vap.band-steer-mode" value="up" onclick="setwlan1EntryBandSteerMode6(1);" checked="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_rrm_mode_6" name="wlan1vlans.6.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_dscp_prio_6" onclick="clickWlan1BssDcspPrio(&#39;6&#39;)">
        <input type="hidden" id="wlan1bss_dscp_prio_6" name="wlan1vlans.6.bss.dscp-prio" value="0">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_tagged_sta_mode_6" name="wlan1vlans.6.bss.tagged-sta-mode" value="on">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_general_vlan_mode_6" name="wlan1vlans.6.bss.general-vlan-mode" value="on">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_general_vlan_id_6" name="wlan1vlans.6.bss.general-vlan-id" value="1">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="wlan1vwn_prio_6" name="wlan1vlans.6.interface.vlan-prio">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan1EntryBandSteerMode6() {
            var bandsteerCheckBox = document.getElementById( 'wlan1vwn_band_steer_6' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'wlan1vwn_band_steer_6' ).value = "down";
            } else {
              document.getElementById( 'wlan1vwn_band_steer_6' ).value = "up";
            }
      }
      

      function setWlan1BroadcastSSID6()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          var broadcast_ssid = document.getElementById( 'wlan1vwn_broadcast_ssid_6' ).checked;
          if ((wps_vap == 6) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showwlan1SecuritySettings6(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 6) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 6) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 6) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 6) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wlan1wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wlan1wparadius-settings-panel' + i );
          img = document.getElementById( 'wlan1expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 6 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 6 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showWlan1MacAuthSettings6(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 6) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('wlan1vwn_tagged_sta_mode_6').onclick = function() {
        var general_vlan = document.getElementById( 'wlan1vwn_general_vlan_mode_6' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('wlan1vwn_general_vlan_mode_6').onclick = function() {
        var vlan_trunk = document.getElementById( 'wlan1vwn_tagged_sta_mode_6' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="wlan1security-mode-id6" name="wlan1vlans.6.security" onchange="showwlan1SecuritySettings6(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);">
          <option value="plain-text">
          None
          </option>
          
          <option value="wpa-personal">
          WPA Personal
          </option>
          <option value="wpa-enterprise" selected="">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="wlan1vwn_mac_auth_type_6" name="wlan1vlans.6.bss.mac-acl-auth-type" onchange="showWlan1MacAuthSettings6(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
      <td align="left" valign="middle">
      <img id="wlan1expand6" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src =&#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if(this.src.indexOf(&#39;expand&#39;) != -1) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if(this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;wlan1security-mode-id6&#39; ); showwlan1SecuritySettings6(s.options[s.selectedIndex].value); this.src =&#39;collapse.gif&#39;; } else { showwlan1SecuritySettings6(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wlan1wpa-settings-panel6" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wpavlans6validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wpavlans6wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wpavlans6broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wpavlans6() {
  var preAuth = document.getElementById( 'wlan1wpavlans6pre_auth_container_id' );

  document.getElementById( 'wlan1wpavlans6wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wpavlans6()
{
  var mfp = document.getElementById( 'wlan1wpavlans6mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wpavlans6() {
  var mfp = document.getElementById( 'wlan1wpavlans6mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wpavlans6 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wpavlans6(); if( !this.checked ) {setPreAuthEnabledStatewlan1wpavlans6(); document.getElementById(&#39;wlan1wpavlans6wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wpavlans6wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wpavlans6();} else if( this.checked ) {document.getElementById(&#39;wlan1wpavlans6wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wpavlans6wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wpavlans6();}" name="wlan1vlans.6.wpa-allowed" id="wlan1wpavlans6wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wpavlans6(); if( !this.checked ) document.getElementById(&#39;wlan1wpavlans6wpa_version1_id&#39;).checked = true;" name="wlan1vlans.6.wpa2-allowed" id="wlan1wpavlans6wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wpavlans6wpa-cipher-tkip" name="wlan1vlans.6.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wpavlans6wpa-cipher-ccmp" name="wlan1vlans.6.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wlan1wpavlans6wpa-personal-key" maxlength="63" name="wlan1vlans.6.wpa-personal-key" value="">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wlan1wpavlans6broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wpavlans6&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.6.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wpavlans6mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wpavlans6mfp_not_reqd" name="wlan1vlans.6.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans6mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans6mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wpavlans6mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans6mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans6mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans6mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans6mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wpavlans6mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans6mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans6mfp_not_req_flag" type="hidden" name="wlan1vlans.6.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wpavlans6mfp_capable" name="wlan1vlans.6.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans6mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans6mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans6mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wpavlans6mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wpavlans6mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans6mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wpavlans6mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans6mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans6mfp_capable_flag" type="hidden" name="wlan1vlans.6.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wlan1wpavlans6mfp_reqd" name="wlan1vlans.6.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wpavlans6mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans6mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wpavlans6mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wpavlans6mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wpavlans6mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans6mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wpavlans6mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wpavlans6mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans6mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wpavlans6mfp_req_flag" type="hidden" name="wlan1vlans.6.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wlan1wparadius-settings-panel6" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wparadiusvlans6validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wparadiusvlans6wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wparadiusvlans6broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wparadiusvlans6() {
  var preAuth = document.getElementById( 'wlan1wparadiusvlans6pre_auth_container_id' );

  document.getElementById( 'wlan1wparadiusvlans6wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wparadiusvlans6()
{
  var mfp = document.getElementById( 'wlan1wparadiusvlans6mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wparadiusvlans6() {
  var mfp = document.getElementById( 'wlan1wparadiusvlans6mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wparadiusvlans6 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wparadiusvlans6(); if( !this.checked ) {setPreAuthEnabledStatewlan1wparadiusvlans6(); document.getElementById(&#39;wlan1wparadiusvlans6wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wparadiusvlans6wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wparadiusvlans6();} else if( this.checked ) {document.getElementById(&#39;wlan1wparadiusvlans6wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wparadiusvlans6wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wparadiusvlans6();}" name="wlan1vlans.6.wpa-allowed" id="wlan1wparadiusvlans6wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wparadiusvlans6(); if( !this.checked ) document.getElementById(&#39;wlan1wparadiusvlans6wpa_version1_id&#39;).checked = true;" name="wlan1vlans.6.wpa2-allowed" id="wlan1wparadiusvlans6wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wlan1wparadiusvlans6pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan1vlans.6.rsn-preauthentication" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wparadiusvlans6wpa-cipher-tkip" name="wlan1vlans.6.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wparadiusvlans6wpa-cipher-ccmp" name="wlan1vlans.6.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wparadiusvlans6mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wparadiusvlans6mfp_not_reqd" name="wlan1vlans.6.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans6mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans6mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wparadiusvlans6mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans6mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans6mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans6mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans6mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wparadiusvlans6mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans6mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans6mfp_not_req_flag" type="hidden" name="wlan1vlans.6.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wparadiusvlans6mfp_capable" name="wlan1vlans.6.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans6mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans6mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans6mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wparadiusvlans6mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans6mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans6mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wparadiusvlans6mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans6mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans6mfp_capable_flag" type="hidden" name="wlan1vlans.6.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wlan1wparadiusvlans6mfp_reqd" name="wlan1vlans.6.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wparadiusvlans6mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans6mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wparadiusvlans6mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wparadiusvlans6mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wparadiusvlans6mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans6mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wparadiusvlans6mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wparadiusvlans6mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans6mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wparadiusvlans6mfp_req_flag" type="hidden" name="wlan1vlans.6.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywlan1wparadiusvlans6() {
      var rs = document.getElementById( 'wlan1wparadiusvlans6radius-settings-grs' );
      document.getElementById('wlan1wparadiusvlans6use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wlan1wparadiusvlans6use-grs-input').value = document.getElementById('wlan1wparadiusvlans6use-grs-display').checked? "on" : "off";
     }




function wlan1wparadiusvlans6validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wlan1wparadiusvlans6broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wlan1wparadiusvlans6session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wlan1wparadiusvlans6use-grs-display').checked)
    {
       var domain = document.getElementById('wlan1wparadiusvlans6radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan1vlans.6.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wlan1wparadiusvlans6radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wlan1wparadiusvlans6radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wlan1wparadiusvlans6radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wlan1wparadiusvlans6radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans6key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans6key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans6key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans6key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans6key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans6key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans6key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans6key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wlan1wparadiusvlans6radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wlan1wparadiusvlans6radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wlan1wparadiusvlans6radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wlan1wparadiusvlans6radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans6key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans6key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans6key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans6key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wlan1wparadiusvlans6','wlan1vlans.6.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywlan1wparadiusvlans6 );
   </script>

<input id="wlan1wparadiusvlans6radius-key-flag" type="hidden" name="wlan1vlans.6.radius-key-flag" value="0">
<input id="wlan1wparadiusvlans6radius-key-flag1" type="hidden" name="wlan1vlans.6.radius-key-flag1" value="0">
<input id="wlan1wparadiusvlans6radius-key-flag2" type="hidden" name="wlan1vlans.6.radius-key-flag2" value="0">
<input id="wlan1wparadiusvlans6radius-key-flag3" type="hidden" name="wlan1vlans.6.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wlan1wparadiusvlans6use-grs-display" onclick="setRadiusSettingsDisplaywlan1wparadiusvlans6();">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wlan1wparadiusvlans6use-grs-input" name="wlan1vlans.6.global-radius" value="off">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wlan1wparadiusvlans6radius-settings-grs">
       <tbody><tr>
        <td class="label" nowrap="">RADIUS Domain:&nbsp;</td>
        <td>
         <input id="wlan1wparadiusvlans6radius-domain" type="text" class="text-input" name="wlan1vlans.6.radius-domain" value="root">
        </td>
       </tr>
       <tr>
        <td class="label" nowrap="">RADIUS IP Address Type:&nbsp;</td>
        <td>
<input class="value" type="radio" name="wlan1vlans.6.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan1vlans.6.wpa-type2&#39;,&#39;wlan1wparadiusvlans6&#39;)" id="wlan1vlans.6.wparadius-ip-network-type2_ipv4" checked="">
        IPv4
        <input class="value" type="radio" name="wlan1vlans.6.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan1vlans.6.wpa-type2&#39;,&#39;wlan1wparadiusvlans6&#39;)" id="wlan1vlans.6.wparadius-ip-network-type2_ipv6">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan1vlans.6.wpa-type2">
        <td class="label" nowrap="">RADIUS IP Address:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans6radius-ip" type="text" class="text-input" name="wlan1vlans.6.radius-ip" value="192.168.31.90">
        </td>
      </tr>
      <tr id="ipv4wlan1vlans.6.wpa-type21">
        <td class="label" nowrap="">RADIUS IP Address-1:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans6radius-backupone-ip" type="text" class="text-input" name="wlan1vlans.6.radius-backupone-ip" value="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.6.wpa-type22">
        <td class="label" nowrap="">RADIUS IP Address-2:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans6radius-backuptwo-ip" type="text" class="text-input" name="wlan1vlans.6.radius-backuptwo-ip" value="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.6.wpa-type23">
        <td class="label" nowrap="">RADIUS IP Address-3:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans6radius-backupthree-ip" type="text" class="text-input" name="wlan1vlans.6.radius-backupthree-ip" value="">
        </td>
      </tr>
     
      <tr id="ipv6wlan1vlans.6.wpa-type2" style="display: none;">
        <td class="label" nowrap="">RADIUS IPv6 Address:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans6radius-ipv6" type="text" name="wlan1vlans.6.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan1vlans.6.wpa-type21" style="display: none;">
        <td class="label" nowrap="">RADIUS IPv6 Address-1:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans6radius-backupone-ipv6" type="text" name="wlan1vlans.6.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.6.wpa-type22" style="display: none;">
        <td class="label" nowrap="">RADIUS IPv6 Address-2:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans6radius-backuptwo-ipv6" type="text" name="wlan1vlans.6.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.6.wpa-type23" style="display: none;">
        <td class="label" nowrap="">RADIUS IPv6 Address-3:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans6radius-backupthree-ipv6" type="text" name="wlan1vlans.6.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr>
        <td class="label" nowrap="">RADIUS Key:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans6key-field" type="password" name="wlan1vlans.6.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans6radius-key-flag&#39;).value = &#39;1&#39;;">
        </td>
      </tr>
      <tr>
        <td class="label" nowrap="">RADIUS Key-1:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans6key-field1" type="password" name="wlan1vlans.6.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans6radius-key-flag1&#39;).value = &#39;1&#39;;">
        </td>
      </tr>
      <tr>
        <td class="label" nowrap="">RADIUS Key-2:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans6key-field2" type="password" name="wlan1vlans.6.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans6radius-key-flag2&#39;).value = &#39;1&#39;;">
        </td>
      </tr>
      <tr>
        <td class="label" nowrap="">RADIUS Key-3:&nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans6key-field3" type="password" name="wlan1vlans.6.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans6radius-key-flag3&#39;).value = &#39;1&#39;;">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.31.90";
  var encrypted_key = "6130383339306265343636323033326636383635353735373565633162626230373765333962613561353534613466636534653036643031363035613638363130646230616638393662376162386437386234346336366361616663316663336261366462626439643330353931636565376335343837346663373538313131";
  var key = "wlan1wparadiusvlans6key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans6key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans6key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans6key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr>
        <td class="label" colspan="3" nowrap="">
          <input type="checkbox" name="wlan1vlans.6.radius-accounting" checked="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan1vlans.6.radius-current" size="1">
       <option value="primary" selected="">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans6broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans6&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.6.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans6session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans6&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan1vlans.6.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan1vlans.6."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan1vlans.6."+"wpa"+"-type2","wlan1wparadiusvlans6");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan1vlans.6."+"wpa"+"-type2","wlan1wparadiusvlans6");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        7
      </td>
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setwlan1EntryEnabledStates7() {
            var enabledCheckBox = document.getElementById( 'wlan1vwn_enabled_7' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan1hstatus_7' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan1hstatus_7' ).value = "up";
            }
            document.getElementById( 'wlan1vwn_id_7' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_ssid_7' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_broadcast_ssid_7' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_dscp_prio_7' ).disabled = disabled;
            document.getElementById( 'wlan1bss_dscp_prio_7' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_tagged_sta_mode_7' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_mode_7' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_id_7' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_station_isolation_7' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_prio_7' ).disabled = disabled;

            
            
              document.getElementById( 'wlan1vwn_band_steer_7' ).disabled = disabled;
            

            document.getElementById( 'wlan1vwn_rrm_mode_7' ).disabled = disabled;
            document.getElementById( 'wlan1security-mode-id7' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_mac_auth_type_7' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wlan1wep-settings-panel7' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'wlan1dot1x-settings-panel7' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wlan1wpa-settings-panel7' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wlan1wparadius-settings-panel7' );
            var expander = document.getElementById( 'wlan1expand7' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showwlan1SecuritySettings7("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setwlan1EntryEnabledStates7 );
        </script>

        <input class="input-checkbox" type="checkbox" id="wlan1vwn_enabled_7" name="wlan1vlans.7.bss.status" value="up" onclick="setwlan1EntryEnabledStates7(1);" checked=""> 

        <input type="hidden" name="wlan1vlans.7.bss.row" value="7">
        <input type="hidden" id="vwn_wlan1hstatus_7" name="wlan1vlans.7.bss.hstatus" value="up">
      </td>
      <td class="section-cell" width="1">
        
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_id_7" name="wlan1vlans.7.interface.vlan-id" value="1">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="wlan1vwn_ssid_7" name="wlan1vlans.7.interface.ssid" value="NetAtaka">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_broadcast_ssid_7" name="wlan1vlans.7.bss.ignore-broadcast-ssid" value="off" onclick="setWlan1BroadcastSSID7(1);" checked="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_station_isolation_7" name="wlan1vlans.7.bss.station-isolation" value="on">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_band_steer_7" name="wlan1vlans.7.vap.band-steer-mode" value="up" onclick="setwlan1EntryBandSteerMode7(1);" checked="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_rrm_mode_7" name="wlan1vlans.7.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_dscp_prio_7" onclick="clickWlan1BssDcspPrio(&#39;7&#39;)">
        <input type="hidden" id="wlan1bss_dscp_prio_7" name="wlan1vlans.7.bss.dscp-prio" value="0">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_tagged_sta_mode_7" name="wlan1vlans.7.bss.tagged-sta-mode" value="on">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_general_vlan_mode_7" name="wlan1vlans.7.bss.general-vlan-mode" value="on">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_general_vlan_id_7" name="wlan1vlans.7.bss.general-vlan-id" value="1">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="wlan1vwn_prio_7" name="wlan1vlans.7.interface.vlan-prio">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan1EntryBandSteerMode7() {
            var bandsteerCheckBox = document.getElementById( 'wlan1vwn_band_steer_7' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'wlan1vwn_band_steer_7' ).value = "down";
            } else {
              document.getElementById( 'wlan1vwn_band_steer_7' ).value = "up";
            }
      }
      

      function setWlan1BroadcastSSID7()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          var broadcast_ssid = document.getElementById( 'wlan1vwn_broadcast_ssid_7' ).checked;
          if ((wps_vap == 7) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showwlan1SecuritySettings7(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 7) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 7) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 7) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 7) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wlan1wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wlan1wparadius-settings-panel' + i );
          img = document.getElementById( 'wlan1expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 7 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 7 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showWlan1MacAuthSettings7(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 7) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('wlan1vwn_tagged_sta_mode_7').onclick = function() {
        var general_vlan = document.getElementById( 'wlan1vwn_general_vlan_mode_7' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('wlan1vwn_general_vlan_mode_7').onclick = function() {
        var vlan_trunk = document.getElementById( 'wlan1vwn_tagged_sta_mode_7' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="wlan1security-mode-id7" name="wlan1vlans.7.security" onchange="showwlan1SecuritySettings7(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);">
          <option value="plain-text">
          None
          </option>
          
          <option value="wpa-personal" selected="">
          WPA Personal
          </option>
          <option value="wpa-enterprise">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="wlan1vwn_mac_auth_type_7" name="wlan1vlans.7.bss.mac-acl-auth-type" onchange="showWlan1MacAuthSettings7(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
      <td align="left" valign="middle">
      <img id="wlan1expand7" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src =&#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if(this.src.indexOf(&#39;expand&#39;) != -1) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if(this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;wlan1security-mode-id7&#39; ); showwlan1SecuritySettings7(s.options[s.selectedIndex].value); this.src =&#39;collapse.gif&#39;; } else { showwlan1SecuritySettings7(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wlan1wpa-settings-panel7" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wpavlans7validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wpavlans7wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wpavlans7broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wpavlans7() {
  var preAuth = document.getElementById( 'wlan1wpavlans7pre_auth_container_id' );

  document.getElementById( 'wlan1wpavlans7wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wpavlans7()
{
  var mfp = document.getElementById( 'wlan1wpavlans7mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wpavlans7() {
  var mfp = document.getElementById( 'wlan1wpavlans7mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wpavlans7 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wpavlans7(); if( !this.checked ) {setPreAuthEnabledStatewlan1wpavlans7(); document.getElementById(&#39;wlan1wpavlans7wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wpavlans7wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wpavlans7();} else if( this.checked ) {document.getElementById(&#39;wlan1wpavlans7wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wpavlans7wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wpavlans7();}" name="wlan1vlans.7.wpa-allowed" id="wlan1wpavlans7wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wpavlans7(); if( !this.checked ) document.getElementById(&#39;wlan1wpavlans7wpa_version1_id&#39;).checked = true;" name="wlan1vlans.7.wpa2-allowed" id="wlan1wpavlans7wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wpavlans7wpa-cipher-tkip" name="wlan1vlans.7.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wpavlans7wpa-cipher-ccmp" name="wlan1vlans.7.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wlan1wpavlans7wpa-personal-key" maxlength="63" name="wlan1vlans.7.wpa-personal-key" value="pwd4wifi">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wlan1wpavlans7broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wpavlans7&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.7.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wpavlans7mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wpavlans7mfp_not_reqd" name="wlan1vlans.7.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans7mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans7mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wpavlans7mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans7mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans7mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans7mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans7mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wpavlans7mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans7mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans7mfp_not_req_flag" type="hidden" name="wlan1vlans.7.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wpavlans7mfp_capable" name="wlan1vlans.7.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans7mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans7mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans7mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wpavlans7mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wpavlans7mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans7mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wpavlans7mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans7mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans7mfp_capable_flag" type="hidden" name="wlan1vlans.7.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wlan1wpavlans7mfp_reqd" name="wlan1vlans.7.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wpavlans7mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans7mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wpavlans7mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wpavlans7mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wpavlans7mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans7mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wpavlans7mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wpavlans7mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans7mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wpavlans7mfp_req_flag" type="hidden" name="wlan1vlans.7.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wlan1wparadius-settings-panel7" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wparadiusvlans7validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wparadiusvlans7wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wparadiusvlans7broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wparadiusvlans7() {
  var preAuth = document.getElementById( 'wlan1wparadiusvlans7pre_auth_container_id' );

  document.getElementById( 'wlan1wparadiusvlans7wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wparadiusvlans7()
{
  var mfp = document.getElementById( 'wlan1wparadiusvlans7mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wparadiusvlans7() {
  var mfp = document.getElementById( 'wlan1wparadiusvlans7mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wparadiusvlans7 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wparadiusvlans7(); if( !this.checked ) {setPreAuthEnabledStatewlan1wparadiusvlans7(); document.getElementById(&#39;wlan1wparadiusvlans7wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wparadiusvlans7wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wparadiusvlans7();} else if( this.checked ) {document.getElementById(&#39;wlan1wparadiusvlans7wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wparadiusvlans7wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wparadiusvlans7();}" name="wlan1vlans.7.wpa-allowed" id="wlan1wparadiusvlans7wpa_version1_id">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wparadiusvlans7(); if( !this.checked ) document.getElementById(&#39;wlan1wparadiusvlans7wpa_version1_id&#39;).checked = true;" name="wlan1vlans.7.wpa2-allowed" id="wlan1wparadiusvlans7wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wlan1wparadiusvlans7pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan1vlans.7.rsn-preauthentication" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wparadiusvlans7wpa-cipher-tkip" name="wlan1vlans.7.wpa-cipher-tkip" value="off" disabled="disable">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wparadiusvlans7wpa-cipher-ccmp" name="wlan1vlans.7.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wparadiusvlans7mfp">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wparadiusvlans7mfp_not_reqd" name="wlan1vlans.7.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans7mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans7mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wparadiusvlans7mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans7mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans7mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans7mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans7mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wparadiusvlans7mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans7mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans7mfp_not_req_flag" type="hidden" name="wlan1vlans.7.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wparadiusvlans7mfp_capable" name="wlan1vlans.7.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans7mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans7mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans7mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wparadiusvlans7mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans7mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans7mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wparadiusvlans7mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans7mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans7mfp_capable_flag" type="hidden" name="wlan1vlans.7.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wlan1wparadiusvlans7mfp_reqd" name="wlan1vlans.7.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wparadiusvlans7mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans7mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wparadiusvlans7mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wparadiusvlans7mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wparadiusvlans7mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans7mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wparadiusvlans7mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wparadiusvlans7mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans7mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wparadiusvlans7mfp_req_flag" type="hidden" name="wlan1vlans.7.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywlan1wparadiusvlans7() {
      var rs = document.getElementById( 'wlan1wparadiusvlans7radius-settings-grs' );
      document.getElementById('wlan1wparadiusvlans7use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wlan1wparadiusvlans7use-grs-input').value = document.getElementById('wlan1wparadiusvlans7use-grs-display').checked? "on" : "off";
     }




function wlan1wparadiusvlans7validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wlan1wparadiusvlans7broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wlan1wparadiusvlans7session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wlan1wparadiusvlans7use-grs-display').checked)
    {
       var domain = document.getElementById('wlan1wparadiusvlans7radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan1vlans.7.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wlan1wparadiusvlans7radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wlan1wparadiusvlans7radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wlan1wparadiusvlans7radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wlan1wparadiusvlans7radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans7key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans7key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans7key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans7key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans7key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans7key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans7key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans7key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wlan1wparadiusvlans7radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wlan1wparadiusvlans7radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wlan1wparadiusvlans7radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wlan1wparadiusvlans7radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans7key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans7key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans7key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans7key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wlan1wparadiusvlans7','wlan1vlans.7.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywlan1wparadiusvlans7 );
   </script>

<input id="wlan1wparadiusvlans7radius-key-flag" type="hidden" name="wlan1vlans.7.radius-key-flag" value="0">
<input id="wlan1wparadiusvlans7radius-key-flag1" type="hidden" name="wlan1vlans.7.radius-key-flag1" value="0">
<input id="wlan1wparadiusvlans7radius-key-flag2" type="hidden" name="wlan1vlans.7.radius-key-flag2" value="0">
<input id="wlan1wparadiusvlans7radius-key-flag3" type="hidden" name="wlan1vlans.7.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wlan1wparadiusvlans7use-grs-display" onclick="setRadiusSettingsDisplaywlan1wparadiusvlans7();" checked="">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wlan1wparadiusvlans7use-grs-input" name="wlan1vlans.7.global-radius" value="on">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wlan1wparadiusvlans7radius-settings-grs">
       <tbody style="color: rgb(128, 128, 128);"><tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Domain:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
         <input id="wlan1wparadiusvlans7radius-domain" type="text" class="text-input" name="wlan1vlans.7.radius-domain" value="root" disabled="">
        </td>
       </tr>
       <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address Type:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
<input class="value" type="radio" name="wlan1vlans.7.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan1vlans.7.wpa-type2&#39;,&#39;wlan1wparadiusvlans7&#39;)" id="wlan1vlans.7.wparadius-ip-network-type2_ipv4" checked="" disabled="">
        IPv4
        <input class="value" type="radio" name="wlan1vlans.7.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan1vlans.7.wpa-type2&#39;,&#39;wlan1wparadiusvlans7&#39;)" id="wlan1vlans.7.wparadius-ip-network-type2_ipv6" disabled="">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan1vlans.7.wpa-type2" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans7radius-ip" type="text" class="text-input" name="wlan1vlans.7.radius-ip" value="192.168.1.1" disabled="">
        </td>
      </tr>
      <tr id="ipv4wlan1vlans.7.wpa-type21" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans7radius-backupone-ip" type="text" class="text-input" name="wlan1vlans.7.radius-backupone-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.7.wpa-type22" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans7radius-backuptwo-ip" type="text" class="text-input" name="wlan1vlans.7.radius-backuptwo-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.7.wpa-type23" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans7radius-backupthree-ip" type="text" class="text-input" name="wlan1vlans.7.radius-backupthree-ip" value="" disabled="">
        </td>
      </tr>
     
      <tr id="ipv6wlan1vlans.7.wpa-type2" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans7radius-ipv6" type="text" name="wlan1vlans.7.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan1vlans.7.wpa-type21" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans7radius-backupone-ipv6" type="text" name="wlan1vlans.7.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.7.wpa-type22" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans7radius-backuptwo-ipv6" type="text" name="wlan1vlans.7.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.7.wpa-type23" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans7radius-backupthree-ipv6" type="text" name="wlan1vlans.7.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans7key-field" type="password" name="wlan1vlans.7.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans7radius-key-flag&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans7key-field1" type="password" name="wlan1vlans.7.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans7radius-key-flag1&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans7key-field2" type="password" name="wlan1vlans.7.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans7radius-key-flag2&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans7key-field3" type="password" name="wlan1vlans.7.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans7radius-key-flag3&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript" style="color: rgb(128, 128, 128);">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.1.1";
  var encrypted_key = "393437643137626564353634633939366665376537653661623837303264336133333465363234633630653639303761336531613166316130376635393738323235306563383336303137323965646332303863383163366137663834613962623863323264333162393162316136373032663165306335343938306566343200";
  var key = "wlan1wparadiusvlans7key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans7key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans7key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans7key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" colspan="3" nowrap="" style="color: rgb(128, 128, 128);">
          <input type="checkbox" name="wlan1vlans.7.radius-accounting" disabled="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan1vlans.7.radius-current" size="1">
       <option value="primary" selected="">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans7broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans7&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.7.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans7session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans7&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan1vlans.7.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan1vlans.7."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan1vlans.7."+"wpa"+"-type2","wlan1wparadiusvlans7");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan1vlans.7."+"wpa"+"-type2","wlan1wparadiusvlans7");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        8
      </td>
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setwlan1EntryEnabledStates8() {
            var enabledCheckBox = document.getElementById( 'wlan1vwn_enabled_8' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan1hstatus_8' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan1hstatus_8' ).value = "up";
            }
            document.getElementById( 'wlan1vwn_id_8' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_ssid_8' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_broadcast_ssid_8' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_dscp_prio_8' ).disabled = disabled;
            document.getElementById( 'wlan1bss_dscp_prio_8' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_tagged_sta_mode_8' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_mode_8' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_id_8' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_station_isolation_8' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_prio_8' ).disabled = disabled;

            
            
              document.getElementById( 'wlan1vwn_band_steer_8' ).disabled = disabled;
            

            document.getElementById( 'wlan1vwn_rrm_mode_8' ).disabled = disabled;
            document.getElementById( 'wlan1security-mode-id8' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_mac_auth_type_8' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wlan1wep-settings-panel8' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'wlan1dot1x-settings-panel8' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wlan1wpa-settings-panel8' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wlan1wparadius-settings-panel8' );
            var expander = document.getElementById( 'wlan1expand8' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showwlan1SecuritySettings8("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setwlan1EntryEnabledStates8 );
        </script>

        <input class="input-checkbox" type="checkbox" id="wlan1vwn_enabled_8" name="wlan1vlans.8.bss.status" value="up" onclick="setwlan1EntryEnabledStates8(1);"> 

        <input type="hidden" name="wlan1vlans.8.bss.row" value="8">
        <input type="hidden" id="vwn_wlan1hstatus_8" name="wlan1vlans.8.bss.hstatus" value="down">
      </td>
      <td class="section-cell" width="1">
        
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_id_8" name="wlan1vlans.8.interface.vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="wlan1vwn_ssid_8" name="wlan1vlans.8.interface.ssid" value="third-dec-test" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_broadcast_ssid_8" name="wlan1vlans.8.bss.ignore-broadcast-ssid" value="off" onclick="setWlan1BroadcastSSID8(1);" checked="" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_station_isolation_8" name="wlan1vlans.8.bss.station-isolation" value="on" disabled="">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_band_steer_8" name="wlan1vlans.8.vap.band-steer-mode" value="up" onclick="setwlan1EntryBandSteerMode8(1);" checked="" disabled="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_rrm_mode_8" name="wlan1vlans.8.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_dscp_prio_8" onclick="clickWlan1BssDcspPrio(&#39;8&#39;)" disabled="">
        <input type="hidden" id="wlan1bss_dscp_prio_8" name="wlan1vlans.8.bss.dscp-prio" value="0" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_tagged_sta_mode_8" name="wlan1vlans.8.bss.tagged-sta-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_general_vlan_mode_8" name="wlan1vlans.8.bss.general-vlan-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_general_vlan_id_8" name="wlan1vlans.8.bss.general-vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="wlan1vwn_prio_8" name="wlan1vlans.8.interface.vlan-prio" disabled="">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan1EntryBandSteerMode8() {
            var bandsteerCheckBox = document.getElementById( 'wlan1vwn_band_steer_8' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'wlan1vwn_band_steer_8' ).value = "down";
            } else {
              document.getElementById( 'wlan1vwn_band_steer_8' ).value = "up";
            }
      }
      

      function setWlan1BroadcastSSID8()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          var broadcast_ssid = document.getElementById( 'wlan1vwn_broadcast_ssid_8' ).checked;
          if ((wps_vap == 8) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showwlan1SecuritySettings8(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 8) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 8) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 8) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 8) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wlan1wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wlan1wparadius-settings-panel' + i );
          img = document.getElementById( 'wlan1expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 8 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 8 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showWlan1MacAuthSettings8(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 8) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('wlan1vwn_tagged_sta_mode_8').onclick = function() {
        var general_vlan = document.getElementById( 'wlan1vwn_general_vlan_mode_8' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('wlan1vwn_general_vlan_mode_8').onclick = function() {
        var vlan_trunk = document.getElementById( 'wlan1vwn_tagged_sta_mode_8' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="wlan1security-mode-id8" name="wlan1vlans.8.security" onchange="showwlan1SecuritySettings8(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="plain-text" selected="">
          None
          </option>
          
          <option value="wpa-personal">
          WPA Personal
          </option>
          <option value="wpa-enterprise">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="wlan1vwn_mac_auth_type_8" name="wlan1vlans.8.bss.mac-acl-auth-type" onchange="showWlan1MacAuthSettings8(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
      <td align="left" valign="middle">
      <img id="wlan1expand8" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src =&#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if(this.src.indexOf(&#39;expand&#39;) != -1) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if(this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;wlan1security-mode-id8&#39; ); showwlan1SecuritySettings8(s.options[s.selectedIndex].value); this.src =&#39;collapse.gif&#39;; } else { showwlan1SecuritySettings8(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wlan1wpa-settings-panel8" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wpavlans8validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wpavlans8wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wpavlans8broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wpavlans8() {
  var preAuth = document.getElementById( 'wlan1wpavlans8pre_auth_container_id' );

  document.getElementById( 'wlan1wpavlans8wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wpavlans8()
{
  var mfp = document.getElementById( 'wlan1wpavlans8mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wpavlans8() {
  var mfp = document.getElementById( 'wlan1wpavlans8mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wpavlans8 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wpavlans8(); if( !this.checked ) {setPreAuthEnabledStatewlan1wpavlans8(); document.getElementById(&#39;wlan1wpavlans8wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wpavlans8wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wpavlans8();} else if( this.checked ) {document.getElementById(&#39;wlan1wpavlans8wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wpavlans8wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wpavlans8();}" name="wlan1vlans.8.wpa-allowed" id="wlan1wpavlans8wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wpavlans8(); if( !this.checked ) document.getElementById(&#39;wlan1wpavlans8wpa_version1_id&#39;).checked = true;" name="wlan1vlans.8.wpa2-allowed" id="wlan1wpavlans8wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wpavlans8wpa-cipher-tkip" name="wlan1vlans.8.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wpavlans8wpa-cipher-ccmp" name="wlan1vlans.8.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wlan1wpavlans8wpa-personal-key" maxlength="63" name="wlan1vlans.8.wpa-personal-key" value="">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wlan1wpavlans8broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wpavlans8&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.8.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wpavlans8mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wpavlans8mfp_not_reqd" name="wlan1vlans.8.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans8mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans8mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wpavlans8mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans8mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans8mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans8mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans8mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wpavlans8mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans8mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans8mfp_not_req_flag" type="hidden" name="wlan1vlans.8.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wpavlans8mfp_capable" name="wlan1vlans.8.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans8mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans8mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans8mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wpavlans8mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wpavlans8mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans8mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wpavlans8mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans8mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans8mfp_capable_flag" type="hidden" name="wlan1vlans.8.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wlan1wpavlans8mfp_reqd" name="wlan1vlans.8.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wpavlans8mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans8mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wpavlans8mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wpavlans8mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wpavlans8mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans8mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wpavlans8mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wpavlans8mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans8mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wpavlans8mfp_req_flag" type="hidden" name="wlan1vlans.8.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wlan1wparadius-settings-panel8" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wparadiusvlans8validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wparadiusvlans8wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wparadiusvlans8broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wparadiusvlans8() {
  var preAuth = document.getElementById( 'wlan1wparadiusvlans8pre_auth_container_id' );

  document.getElementById( 'wlan1wparadiusvlans8wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wparadiusvlans8()
{
  var mfp = document.getElementById( 'wlan1wparadiusvlans8mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wparadiusvlans8() {
  var mfp = document.getElementById( 'wlan1wparadiusvlans8mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wparadiusvlans8 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wparadiusvlans8(); if( !this.checked ) {setPreAuthEnabledStatewlan1wparadiusvlans8(); document.getElementById(&#39;wlan1wparadiusvlans8wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wparadiusvlans8wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wparadiusvlans8();} else if( this.checked ) {document.getElementById(&#39;wlan1wparadiusvlans8wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wparadiusvlans8wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wparadiusvlans8();}" name="wlan1vlans.8.wpa-allowed" id="wlan1wparadiusvlans8wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wparadiusvlans8(); if( !this.checked ) document.getElementById(&#39;wlan1wparadiusvlans8wpa_version1_id&#39;).checked = true;" name="wlan1vlans.8.wpa2-allowed" id="wlan1wparadiusvlans8wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wlan1wparadiusvlans8pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan1vlans.8.rsn-preauthentication" checked="" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wparadiusvlans8wpa-cipher-tkip" name="wlan1vlans.8.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wparadiusvlans8wpa-cipher-ccmp" name="wlan1vlans.8.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wparadiusvlans8mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wparadiusvlans8mfp_not_reqd" name="wlan1vlans.8.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans8mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans8mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wparadiusvlans8mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans8mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans8mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans8mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans8mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wparadiusvlans8mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans8mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans8mfp_not_req_flag" type="hidden" name="wlan1vlans.8.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wparadiusvlans8mfp_capable" name="wlan1vlans.8.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans8mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans8mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans8mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wparadiusvlans8mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans8mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans8mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wparadiusvlans8mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans8mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans8mfp_capable_flag" type="hidden" name="wlan1vlans.8.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wlan1wparadiusvlans8mfp_reqd" name="wlan1vlans.8.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wparadiusvlans8mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans8mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wparadiusvlans8mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wparadiusvlans8mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wparadiusvlans8mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans8mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wparadiusvlans8mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wparadiusvlans8mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans8mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wparadiusvlans8mfp_req_flag" type="hidden" name="wlan1vlans.8.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywlan1wparadiusvlans8() {
      var rs = document.getElementById( 'wlan1wparadiusvlans8radius-settings-grs' );
      document.getElementById('wlan1wparadiusvlans8use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wlan1wparadiusvlans8use-grs-input').value = document.getElementById('wlan1wparadiusvlans8use-grs-display').checked? "on" : "off";
     }




function wlan1wparadiusvlans8validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wlan1wparadiusvlans8broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wlan1wparadiusvlans8session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wlan1wparadiusvlans8use-grs-display').checked)
    {
       var domain = document.getElementById('wlan1wparadiusvlans8radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan1vlans.8.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wlan1wparadiusvlans8radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wlan1wparadiusvlans8radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wlan1wparadiusvlans8radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wlan1wparadiusvlans8radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans8key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans8key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans8key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans8key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans8key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans8key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans8key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans8key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wlan1wparadiusvlans8radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wlan1wparadiusvlans8radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wlan1wparadiusvlans8radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wlan1wparadiusvlans8radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans8key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans8key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans8key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans8key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wlan1wparadiusvlans8','wlan1vlans.8.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywlan1wparadiusvlans8 );
   </script>

<input id="wlan1wparadiusvlans8radius-key-flag" type="hidden" name="wlan1vlans.8.radius-key-flag" value="0">
<input id="wlan1wparadiusvlans8radius-key-flag1" type="hidden" name="wlan1vlans.8.radius-key-flag1" value="0">
<input id="wlan1wparadiusvlans8radius-key-flag2" type="hidden" name="wlan1vlans.8.radius-key-flag2" value="0">
<input id="wlan1wparadiusvlans8radius-key-flag3" type="hidden" name="wlan1vlans.8.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wlan1wparadiusvlans8use-grs-display" onclick="setRadiusSettingsDisplaywlan1wparadiusvlans8();" checked="">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wlan1wparadiusvlans8use-grs-input" name="wlan1vlans.8.global-radius" value="on">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wlan1wparadiusvlans8radius-settings-grs">
       <tbody style="color: rgb(128, 128, 128);"><tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Domain:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
         <input id="wlan1wparadiusvlans8radius-domain" type="text" class="text-input" name="wlan1vlans.8.radius-domain" value="root" disabled="">
        </td>
       </tr>
       <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address Type:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
<input class="value" type="radio" name="wlan1vlans.8.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan1vlans.8.wpa-type2&#39;,&#39;wlan1wparadiusvlans8&#39;)" id="wlan1vlans.8.wparadius-ip-network-type2_ipv4" checked="" disabled="">
        IPv4
        <input class="value" type="radio" name="wlan1vlans.8.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan1vlans.8.wpa-type2&#39;,&#39;wlan1wparadiusvlans8&#39;)" id="wlan1vlans.8.wparadius-ip-network-type2_ipv6" disabled="">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan1vlans.8.wpa-type2" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans8radius-ip" type="text" class="text-input" name="wlan1vlans.8.radius-ip" value="192.168.1.1" disabled="">
        </td>
      </tr>
      <tr id="ipv4wlan1vlans.8.wpa-type21" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans8radius-backupone-ip" type="text" class="text-input" name="wlan1vlans.8.radius-backupone-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.8.wpa-type22" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans8radius-backuptwo-ip" type="text" class="text-input" name="wlan1vlans.8.radius-backuptwo-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.8.wpa-type23" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans8radius-backupthree-ip" type="text" class="text-input" name="wlan1vlans.8.radius-backupthree-ip" value="" disabled="">
        </td>
      </tr>
     
      <tr id="ipv6wlan1vlans.8.wpa-type2" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans8radius-ipv6" type="text" name="wlan1vlans.8.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan1vlans.8.wpa-type21" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans8radius-backupone-ipv6" type="text" name="wlan1vlans.8.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.8.wpa-type22" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans8radius-backuptwo-ipv6" type="text" name="wlan1vlans.8.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.8.wpa-type23" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans8radius-backupthree-ipv6" type="text" name="wlan1vlans.8.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans8key-field" type="password" name="wlan1vlans.8.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans8radius-key-flag&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans8key-field1" type="password" name="wlan1vlans.8.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans8radius-key-flag1&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans8key-field2" type="password" name="wlan1vlans.8.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans8radius-key-flag2&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans8key-field3" type="password" name="wlan1vlans.8.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans8radius-key-flag3&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript" style="color: rgb(128, 128, 128);">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.1.1";
  var encrypted_key = "393437643137626564353634633939366665376537653661623837303264336133333465363234633630653639303761336531613166316130376635393738323235306563383336303137323965646332303863383163366137663834613962623863323264333162393162316136373032663165306335343938306566343200";
  var key = "wlan1wparadiusvlans8key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans8key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans8key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans8key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" colspan="3" nowrap="" style="color: rgb(128, 128, 128);">
          <input type="checkbox" name="wlan1vlans.8.radius-accounting" disabled="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan1vlans.8.radius-current" size="1">
       <option value="primary" selected="">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans8broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans8&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.8.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans8session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans8&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan1vlans.8.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan1vlans.8."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan1vlans.8."+"wpa"+"-type2","wlan1wparadiusvlans8");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan1vlans.8."+"wpa"+"-type2","wlan1wparadiusvlans8");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        9
      </td>
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setwlan1EntryEnabledStates9() {
            var enabledCheckBox = document.getElementById( 'wlan1vwn_enabled_9' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan1hstatus_9' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan1hstatus_9' ).value = "up";
            }
            document.getElementById( 'wlan1vwn_id_9' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_ssid_9' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_broadcast_ssid_9' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_dscp_prio_9' ).disabled = disabled;
            document.getElementById( 'wlan1bss_dscp_prio_9' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_tagged_sta_mode_9' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_mode_9' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_id_9' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_station_isolation_9' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_prio_9' ).disabled = disabled;

            
            
              document.getElementById( 'wlan1vwn_band_steer_9' ).disabled = disabled;
            

            document.getElementById( 'wlan1vwn_rrm_mode_9' ).disabled = disabled;
            document.getElementById( 'wlan1security-mode-id9' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_mac_auth_type_9' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wlan1wep-settings-panel9' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'wlan1dot1x-settings-panel9' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wlan1wpa-settings-panel9' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wlan1wparadius-settings-panel9' );
            var expander = document.getElementById( 'wlan1expand9' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showwlan1SecuritySettings9("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setwlan1EntryEnabledStates9 );
        </script>

        <input class="input-checkbox" type="checkbox" id="wlan1vwn_enabled_9" name="wlan1vlans.9.bss.status" value="up" onclick="setwlan1EntryEnabledStates9(1);"> 

        <input type="hidden" name="wlan1vlans.9.bss.row" value="9">
        <input type="hidden" id="vwn_wlan1hstatus_9" name="wlan1vlans.9.bss.hstatus" value="down">
      </td>
      <td class="section-cell" width="1">
        
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_id_9" name="wlan1vlans.9.interface.vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="wlan1vwn_ssid_9" name="wlan1vlans.9.interface.ssid" value="Virtual Access Point 9" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_broadcast_ssid_9" name="wlan1vlans.9.bss.ignore-broadcast-ssid" value="off" onclick="setWlan1BroadcastSSID9(1);" checked="" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_station_isolation_9" name="wlan1vlans.9.bss.station-isolation" value="on" checked="" disabled="">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_band_steer_9" name="wlan1vlans.9.vap.band-steer-mode" value="down" onclick="setwlan1EntryBandSteerMode9(1);" disabled="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_rrm_mode_9" name="wlan1vlans.9.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_dscp_prio_9" checked="" onclick="clickWlan1BssDcspPrio(&#39;9&#39;)" disabled="">
        <input type="hidden" id="wlan1bss_dscp_prio_9" name="wlan1vlans.9.bss.dscp-prio" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_tagged_sta_mode_9" name="wlan1vlans.9.bss.tagged-sta-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_general_vlan_mode_9" name="wlan1vlans.9.bss.general-vlan-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_general_vlan_id_9" name="wlan1vlans.9.bss.general-vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="wlan1vwn_prio_9" name="wlan1vlans.9.interface.vlan-prio" disabled="">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan1EntryBandSteerMode9() {
            var bandsteerCheckBox = document.getElementById( 'wlan1vwn_band_steer_9' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'wlan1vwn_band_steer_9' ).value = "down";
            } else {
              document.getElementById( 'wlan1vwn_band_steer_9' ).value = "up";
            }
      }
      

      function setWlan1BroadcastSSID9()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          var broadcast_ssid = document.getElementById( 'wlan1vwn_broadcast_ssid_9' ).checked;
          if ((wps_vap == 9) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showwlan1SecuritySettings9(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 9) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 9) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 9) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 9) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wlan1wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wlan1wparadius-settings-panel' + i );
          img = document.getElementById( 'wlan1expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 9 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 9 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showWlan1MacAuthSettings9(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 9) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('wlan1vwn_tagged_sta_mode_9').onclick = function() {
        var general_vlan = document.getElementById( 'wlan1vwn_general_vlan_mode_9' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('wlan1vwn_general_vlan_mode_9').onclick = function() {
        var vlan_trunk = document.getElementById( 'wlan1vwn_tagged_sta_mode_9' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="wlan1security-mode-id9" name="wlan1vlans.9.security" onchange="showwlan1SecuritySettings9(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="plain-text" selected="">
          None
          </option>
          
          <option value="wpa-personal">
          WPA Personal
          </option>
          <option value="wpa-enterprise">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="wlan1vwn_mac_auth_type_9" name="wlan1vlans.9.bss.mac-acl-auth-type" onchange="showWlan1MacAuthSettings9(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
      <td align="left" valign="middle">
      <img id="wlan1expand9" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src =&#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if(this.src.indexOf(&#39;expand&#39;) != -1) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if(this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;wlan1security-mode-id9&#39; ); showwlan1SecuritySettings9(s.options[s.selectedIndex].value); this.src =&#39;collapse.gif&#39;; } else { showwlan1SecuritySettings9(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wlan1wpa-settings-panel9" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wpavlans9validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wpavlans9wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wpavlans9broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wpavlans9() {
  var preAuth = document.getElementById( 'wlan1wpavlans9pre_auth_container_id' );

  document.getElementById( 'wlan1wpavlans9wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wpavlans9()
{
  var mfp = document.getElementById( 'wlan1wpavlans9mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wpavlans9() {
  var mfp = document.getElementById( 'wlan1wpavlans9mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wpavlans9 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wpavlans9(); if( !this.checked ) {setPreAuthEnabledStatewlan1wpavlans9(); document.getElementById(&#39;wlan1wpavlans9wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wpavlans9wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wpavlans9();} else if( this.checked ) {document.getElementById(&#39;wlan1wpavlans9wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wpavlans9wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wpavlans9();}" name="wlan1vlans.9.wpa-allowed" id="wlan1wpavlans9wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wpavlans9(); if( !this.checked ) document.getElementById(&#39;wlan1wpavlans9wpa_version1_id&#39;).checked = true;" name="wlan1vlans.9.wpa2-allowed" id="wlan1wpavlans9wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wpavlans9wpa-cipher-tkip" name="wlan1vlans.9.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wpavlans9wpa-cipher-ccmp" name="wlan1vlans.9.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wlan1wpavlans9wpa-personal-key" maxlength="63" name="wlan1vlans.9.wpa-personal-key" value="">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wlan1wpavlans9broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wpavlans9&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.9.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wpavlans9mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wpavlans9mfp_not_reqd" name="wlan1vlans.9.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans9mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans9mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wpavlans9mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans9mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans9mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans9mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans9mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wpavlans9mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans9mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans9mfp_not_req_flag" type="hidden" name="wlan1vlans.9.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wpavlans9mfp_capable" name="wlan1vlans.9.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans9mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans9mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans9mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wpavlans9mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wpavlans9mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans9mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wpavlans9mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans9mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans9mfp_capable_flag" type="hidden" name="wlan1vlans.9.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wlan1wpavlans9mfp_reqd" name="wlan1vlans.9.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wpavlans9mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans9mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wpavlans9mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wpavlans9mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wpavlans9mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans9mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wpavlans9mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wpavlans9mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans9mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wpavlans9mfp_req_flag" type="hidden" name="wlan1vlans.9.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wlan1wparadius-settings-panel9" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wparadiusvlans9validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wparadiusvlans9wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wparadiusvlans9broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wparadiusvlans9() {
  var preAuth = document.getElementById( 'wlan1wparadiusvlans9pre_auth_container_id' );

  document.getElementById( 'wlan1wparadiusvlans9wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wparadiusvlans9()
{
  var mfp = document.getElementById( 'wlan1wparadiusvlans9mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wparadiusvlans9() {
  var mfp = document.getElementById( 'wlan1wparadiusvlans9mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wparadiusvlans9 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wparadiusvlans9(); if( !this.checked ) {setPreAuthEnabledStatewlan1wparadiusvlans9(); document.getElementById(&#39;wlan1wparadiusvlans9wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wparadiusvlans9wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wparadiusvlans9();} else if( this.checked ) {document.getElementById(&#39;wlan1wparadiusvlans9wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wparadiusvlans9wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wparadiusvlans9();}" name="wlan1vlans.9.wpa-allowed" id="wlan1wparadiusvlans9wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wparadiusvlans9(); if( !this.checked ) document.getElementById(&#39;wlan1wparadiusvlans9wpa_version1_id&#39;).checked = true;" name="wlan1vlans.9.wpa2-allowed" id="wlan1wparadiusvlans9wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wlan1wparadiusvlans9pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan1vlans.9.rsn-preauthentication" checked="" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wparadiusvlans9wpa-cipher-tkip" name="wlan1vlans.9.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wparadiusvlans9wpa-cipher-ccmp" name="wlan1vlans.9.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wparadiusvlans9mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wparadiusvlans9mfp_not_reqd" name="wlan1vlans.9.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans9mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans9mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wparadiusvlans9mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans9mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans9mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans9mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans9mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wparadiusvlans9mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans9mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans9mfp_not_req_flag" type="hidden" name="wlan1vlans.9.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wparadiusvlans9mfp_capable" name="wlan1vlans.9.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans9mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans9mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans9mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wparadiusvlans9mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans9mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans9mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wparadiusvlans9mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans9mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans9mfp_capable_flag" type="hidden" name="wlan1vlans.9.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wlan1wparadiusvlans9mfp_reqd" name="wlan1vlans.9.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wparadiusvlans9mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans9mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wparadiusvlans9mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wparadiusvlans9mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wparadiusvlans9mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans9mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wparadiusvlans9mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wparadiusvlans9mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans9mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wparadiusvlans9mfp_req_flag" type="hidden" name="wlan1vlans.9.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywlan1wparadiusvlans9() {
      var rs = document.getElementById( 'wlan1wparadiusvlans9radius-settings-grs' );
      document.getElementById('wlan1wparadiusvlans9use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wlan1wparadiusvlans9use-grs-input').value = document.getElementById('wlan1wparadiusvlans9use-grs-display').checked? "on" : "off";
     }




function wlan1wparadiusvlans9validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wlan1wparadiusvlans9broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wlan1wparadiusvlans9session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wlan1wparadiusvlans9use-grs-display').checked)
    {
       var domain = document.getElementById('wlan1wparadiusvlans9radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan1vlans.9.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wlan1wparadiusvlans9radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wlan1wparadiusvlans9radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wlan1wparadiusvlans9radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wlan1wparadiusvlans9radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans9key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans9key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans9key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans9key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans9key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans9key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans9key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans9key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wlan1wparadiusvlans9radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wlan1wparadiusvlans9radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wlan1wparadiusvlans9radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wlan1wparadiusvlans9radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans9key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans9key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans9key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans9key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wlan1wparadiusvlans9','wlan1vlans.9.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywlan1wparadiusvlans9 );
   </script>

<input id="wlan1wparadiusvlans9radius-key-flag" type="hidden" name="wlan1vlans.9.radius-key-flag" value="0">
<input id="wlan1wparadiusvlans9radius-key-flag1" type="hidden" name="wlan1vlans.9.radius-key-flag1" value="0">
<input id="wlan1wparadiusvlans9radius-key-flag2" type="hidden" name="wlan1vlans.9.radius-key-flag2" value="0">
<input id="wlan1wparadiusvlans9radius-key-flag3" type="hidden" name="wlan1vlans.9.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wlan1wparadiusvlans9use-grs-display" onclick="setRadiusSettingsDisplaywlan1wparadiusvlans9();" checked="">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wlan1wparadiusvlans9use-grs-input" name="wlan1vlans.9.global-radius" value="on">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wlan1wparadiusvlans9radius-settings-grs">
       <tbody style="color: rgb(128, 128, 128);"><tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Domain:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
         <input id="wlan1wparadiusvlans9radius-domain" type="text" class="text-input" name="wlan1vlans.9.radius-domain" value="" disabled="">
        </td>
       </tr>
       <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address Type:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
<input class="value" type="radio" name="wlan1vlans.9.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan1vlans.9.wpa-type2&#39;,&#39;wlan1wparadiusvlans9&#39;)" id="wlan1vlans.9.wparadius-ip-network-type2_ipv4" checked="" disabled="">
        IPv4
        <input class="value" type="radio" name="wlan1vlans.9.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan1vlans.9.wpa-type2&#39;,&#39;wlan1wparadiusvlans9&#39;)" id="wlan1vlans.9.wparadius-ip-network-type2_ipv6" disabled="">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan1vlans.9.wpa-type2" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans9radius-ip" type="text" class="text-input" name="wlan1vlans.9.radius-ip" value="192.168.1.1" disabled="">
        </td>
      </tr>
      <tr id="ipv4wlan1vlans.9.wpa-type21" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans9radius-backupone-ip" type="text" class="text-input" name="wlan1vlans.9.radius-backupone-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.9.wpa-type22" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans9radius-backuptwo-ip" type="text" class="text-input" name="wlan1vlans.9.radius-backuptwo-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.9.wpa-type23" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans9radius-backupthree-ip" type="text" class="text-input" name="wlan1vlans.9.radius-backupthree-ip" value="" disabled="">
        </td>
      </tr>
     
      <tr id="ipv6wlan1vlans.9.wpa-type2" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans9radius-ipv6" type="text" name="wlan1vlans.9.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan1vlans.9.wpa-type21" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans9radius-backupone-ipv6" type="text" name="wlan1vlans.9.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.9.wpa-type22" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans9radius-backuptwo-ipv6" type="text" name="wlan1vlans.9.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.9.wpa-type23" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans9radius-backupthree-ipv6" type="text" name="wlan1vlans.9.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans9key-field" type="password" name="wlan1vlans.9.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans9radius-key-flag&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans9key-field1" type="password" name="wlan1vlans.9.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans9radius-key-flag1&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans9key-field2" type="password" name="wlan1vlans.9.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans9radius-key-flag2&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans9key-field3" type="password" name="wlan1vlans.9.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans9radius-key-flag3&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript" style="color: rgb(128, 128, 128);">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.1.1";
  var encrypted_key = "393437643137626564353634633939366665376537653661623837303264336133333465363234633630653639303761336531613166316130376635393738323235306563383336303137323965646332303863383163366137663834613962623863323264333162393162316136373032663165306335343938306566343200";
  var key = "wlan1wparadiusvlans9key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans9key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans9key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans9key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" colspan="3" nowrap="" style="color: rgb(128, 128, 128);">
          <input type="checkbox" name="wlan1vlans.9.radius-accounting" disabled="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan1vlans.9.radius-current" size="1">
       <option value="primary">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans9broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans9&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.9.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans9session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans9&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan1vlans.9.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan1vlans.9."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan1vlans.9."+"wpa"+"-type2","wlan1wparadiusvlans9");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan1vlans.9."+"wpa"+"-type2","wlan1wparadiusvlans9");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        10
      </td>
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setwlan1EntryEnabledStates10() {
            var enabledCheckBox = document.getElementById( 'wlan1vwn_enabled_10' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan1hstatus_10' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan1hstatus_10' ).value = "up";
            }
            document.getElementById( 'wlan1vwn_id_10' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_ssid_10' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_broadcast_ssid_10' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_dscp_prio_10' ).disabled = disabled;
            document.getElementById( 'wlan1bss_dscp_prio_10' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_tagged_sta_mode_10' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_mode_10' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_id_10' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_station_isolation_10' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_prio_10' ).disabled = disabled;

            
            
              document.getElementById( 'wlan1vwn_band_steer_10' ).disabled = disabled;
            

            document.getElementById( 'wlan1vwn_rrm_mode_10' ).disabled = disabled;
            document.getElementById( 'wlan1security-mode-id10' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_mac_auth_type_10' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wlan1wep-settings-panel10' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'wlan1dot1x-settings-panel10' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wlan1wpa-settings-panel10' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wlan1wparadius-settings-panel10' );
            var expander = document.getElementById( 'wlan1expand10' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showwlan1SecuritySettings10("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setwlan1EntryEnabledStates10 );
        </script>

        <input class="input-checkbox" type="checkbox" id="wlan1vwn_enabled_10" name="wlan1vlans.10.bss.status" value="up" onclick="setwlan1EntryEnabledStates10(1);"> 

        <input type="hidden" name="wlan1vlans.10.bss.row" value="10">
        <input type="hidden" id="vwn_wlan1hstatus_10" name="wlan1vlans.10.bss.hstatus" value="down">
      </td>
      <td class="section-cell" width="1">
        
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_id_10" name="wlan1vlans.10.interface.vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="wlan1vwn_ssid_10" name="wlan1vlans.10.interface.ssid" value="Virtual Access Point 10" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_broadcast_ssid_10" name="wlan1vlans.10.bss.ignore-broadcast-ssid" value="off" onclick="setWlan1BroadcastSSID10(1);" checked="" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_station_isolation_10" name="wlan1vlans.10.bss.station-isolation" value="on" checked="" disabled="">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_band_steer_10" name="wlan1vlans.10.vap.band-steer-mode" value="down" onclick="setwlan1EntryBandSteerMode10(1);" disabled="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_rrm_mode_10" name="wlan1vlans.10.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_dscp_prio_10" checked="" onclick="clickWlan1BssDcspPrio(&#39;10&#39;)" disabled="">
        <input type="hidden" id="wlan1bss_dscp_prio_10" name="wlan1vlans.10.bss.dscp-prio" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_tagged_sta_mode_10" name="wlan1vlans.10.bss.tagged-sta-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_general_vlan_mode_10" name="wlan1vlans.10.bss.general-vlan-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_general_vlan_id_10" name="wlan1vlans.10.bss.general-vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="wlan1vwn_prio_10" name="wlan1vlans.10.interface.vlan-prio" disabled="">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan1EntryBandSteerMode10() {
            var bandsteerCheckBox = document.getElementById( 'wlan1vwn_band_steer_10' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'wlan1vwn_band_steer_10' ).value = "down";
            } else {
              document.getElementById( 'wlan1vwn_band_steer_10' ).value = "up";
            }
      }
      

      function setWlan1BroadcastSSID10()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          var broadcast_ssid = document.getElementById( 'wlan1vwn_broadcast_ssid_10' ).checked;
          if ((wps_vap == 10) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showwlan1SecuritySettings10(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 10) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 10) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 10) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 10) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wlan1wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wlan1wparadius-settings-panel' + i );
          img = document.getElementById( 'wlan1expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 10 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 10 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showWlan1MacAuthSettings10(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 10) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('wlan1vwn_tagged_sta_mode_10').onclick = function() {
        var general_vlan = document.getElementById( 'wlan1vwn_general_vlan_mode_10' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('wlan1vwn_general_vlan_mode_10').onclick = function() {
        var vlan_trunk = document.getElementById( 'wlan1vwn_tagged_sta_mode_10' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="wlan1security-mode-id10" name="wlan1vlans.10.security" onchange="showwlan1SecuritySettings10(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="plain-text" selected="">
          None
          </option>
          
          <option value="wpa-personal">
          WPA Personal
          </option>
          <option value="wpa-enterprise">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="wlan1vwn_mac_auth_type_10" name="wlan1vlans.10.bss.mac-acl-auth-type" onchange="showWlan1MacAuthSettings10(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
      <td align="left" valign="middle">
      <img id="wlan1expand10" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src =&#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if(this.src.indexOf(&#39;expand&#39;) != -1) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if(this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;wlan1security-mode-id10&#39; ); showwlan1SecuritySettings10(s.options[s.selectedIndex].value); this.src =&#39;collapse.gif&#39;; } else { showwlan1SecuritySettings10(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wlan1wpa-settings-panel10" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wpavlans10validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wpavlans10wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wpavlans10broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wpavlans10() {
  var preAuth = document.getElementById( 'wlan1wpavlans10pre_auth_container_id' );

  document.getElementById( 'wlan1wpavlans10wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wpavlans10()
{
  var mfp = document.getElementById( 'wlan1wpavlans10mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wpavlans10() {
  var mfp = document.getElementById( 'wlan1wpavlans10mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wpavlans10 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wpavlans10(); if( !this.checked ) {setPreAuthEnabledStatewlan1wpavlans10(); document.getElementById(&#39;wlan1wpavlans10wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wpavlans10wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wpavlans10();} else if( this.checked ) {document.getElementById(&#39;wlan1wpavlans10wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wpavlans10wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wpavlans10();}" name="wlan1vlans.10.wpa-allowed" id="wlan1wpavlans10wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wpavlans10(); if( !this.checked ) document.getElementById(&#39;wlan1wpavlans10wpa_version1_id&#39;).checked = true;" name="wlan1vlans.10.wpa2-allowed" id="wlan1wpavlans10wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wpavlans10wpa-cipher-tkip" name="wlan1vlans.10.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wpavlans10wpa-cipher-ccmp" name="wlan1vlans.10.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wlan1wpavlans10wpa-personal-key" maxlength="63" name="wlan1vlans.10.wpa-personal-key" value="">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wlan1wpavlans10broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wpavlans10&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.10.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wpavlans10mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wpavlans10mfp_not_reqd" name="wlan1vlans.10.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans10mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans10mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wpavlans10mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans10mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans10mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans10mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans10mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wpavlans10mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans10mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans10mfp_not_req_flag" type="hidden" name="wlan1vlans.10.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wpavlans10mfp_capable" name="wlan1vlans.10.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans10mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans10mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans10mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wpavlans10mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wpavlans10mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans10mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wpavlans10mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans10mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans10mfp_capable_flag" type="hidden" name="wlan1vlans.10.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wlan1wpavlans10mfp_reqd" name="wlan1vlans.10.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wpavlans10mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans10mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wpavlans10mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wpavlans10mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wpavlans10mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans10mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wpavlans10mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wpavlans10mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans10mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wpavlans10mfp_req_flag" type="hidden" name="wlan1vlans.10.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wlan1wparadius-settings-panel10" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wparadiusvlans10validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wparadiusvlans10wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wparadiusvlans10broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wparadiusvlans10() {
  var preAuth = document.getElementById( 'wlan1wparadiusvlans10pre_auth_container_id' );

  document.getElementById( 'wlan1wparadiusvlans10wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wparadiusvlans10()
{
  var mfp = document.getElementById( 'wlan1wparadiusvlans10mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wparadiusvlans10() {
  var mfp = document.getElementById( 'wlan1wparadiusvlans10mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wparadiusvlans10 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wparadiusvlans10(); if( !this.checked ) {setPreAuthEnabledStatewlan1wparadiusvlans10(); document.getElementById(&#39;wlan1wparadiusvlans10wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wparadiusvlans10wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wparadiusvlans10();} else if( this.checked ) {document.getElementById(&#39;wlan1wparadiusvlans10wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wparadiusvlans10wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wparadiusvlans10();}" name="wlan1vlans.10.wpa-allowed" id="wlan1wparadiusvlans10wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wparadiusvlans10(); if( !this.checked ) document.getElementById(&#39;wlan1wparadiusvlans10wpa_version1_id&#39;).checked = true;" name="wlan1vlans.10.wpa2-allowed" id="wlan1wparadiusvlans10wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wlan1wparadiusvlans10pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan1vlans.10.rsn-preauthentication" checked="" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wparadiusvlans10wpa-cipher-tkip" name="wlan1vlans.10.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wparadiusvlans10wpa-cipher-ccmp" name="wlan1vlans.10.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wparadiusvlans10mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wparadiusvlans10mfp_not_reqd" name="wlan1vlans.10.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans10mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans10mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wparadiusvlans10mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans10mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans10mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans10mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans10mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wparadiusvlans10mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans10mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans10mfp_not_req_flag" type="hidden" name="wlan1vlans.10.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wparadiusvlans10mfp_capable" name="wlan1vlans.10.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans10mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans10mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans10mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wparadiusvlans10mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans10mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans10mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wparadiusvlans10mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans10mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans10mfp_capable_flag" type="hidden" name="wlan1vlans.10.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wlan1wparadiusvlans10mfp_reqd" name="wlan1vlans.10.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wparadiusvlans10mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans10mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wparadiusvlans10mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wparadiusvlans10mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wparadiusvlans10mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans10mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wparadiusvlans10mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wparadiusvlans10mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans10mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wparadiusvlans10mfp_req_flag" type="hidden" name="wlan1vlans.10.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywlan1wparadiusvlans10() {
      var rs = document.getElementById( 'wlan1wparadiusvlans10radius-settings-grs' );
      document.getElementById('wlan1wparadiusvlans10use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wlan1wparadiusvlans10use-grs-input').value = document.getElementById('wlan1wparadiusvlans10use-grs-display').checked? "on" : "off";
     }




function wlan1wparadiusvlans10validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wlan1wparadiusvlans10broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wlan1wparadiusvlans10session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wlan1wparadiusvlans10use-grs-display').checked)
    {
       var domain = document.getElementById('wlan1wparadiusvlans10radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan1vlans.10.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wlan1wparadiusvlans10radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wlan1wparadiusvlans10radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wlan1wparadiusvlans10radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wlan1wparadiusvlans10radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans10key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans10key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans10key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans10key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans10key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans10key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans10key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans10key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wlan1wparadiusvlans10radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wlan1wparadiusvlans10radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wlan1wparadiusvlans10radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wlan1wparadiusvlans10radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans10key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans10key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans10key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans10key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wlan1wparadiusvlans10','wlan1vlans.10.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywlan1wparadiusvlans10 );
   </script>

<input id="wlan1wparadiusvlans10radius-key-flag" type="hidden" name="wlan1vlans.10.radius-key-flag" value="0">
<input id="wlan1wparadiusvlans10radius-key-flag1" type="hidden" name="wlan1vlans.10.radius-key-flag1" value="0">
<input id="wlan1wparadiusvlans10radius-key-flag2" type="hidden" name="wlan1vlans.10.radius-key-flag2" value="0">
<input id="wlan1wparadiusvlans10radius-key-flag3" type="hidden" name="wlan1vlans.10.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wlan1wparadiusvlans10use-grs-display" onclick="setRadiusSettingsDisplaywlan1wparadiusvlans10();" checked="">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wlan1wparadiusvlans10use-grs-input" name="wlan1vlans.10.global-radius" value="on">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wlan1wparadiusvlans10radius-settings-grs">
       <tbody style="color: rgb(128, 128, 128);"><tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Domain:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
         <input id="wlan1wparadiusvlans10radius-domain" type="text" class="text-input" name="wlan1vlans.10.radius-domain" value="" disabled="">
        </td>
       </tr>
       <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address Type:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
<input class="value" type="radio" name="wlan1vlans.10.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan1vlans.10.wpa-type2&#39;,&#39;wlan1wparadiusvlans10&#39;)" id="wlan1vlans.10.wparadius-ip-network-type2_ipv4" checked="" disabled="">
        IPv4
        <input class="value" type="radio" name="wlan1vlans.10.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan1vlans.10.wpa-type2&#39;,&#39;wlan1wparadiusvlans10&#39;)" id="wlan1vlans.10.wparadius-ip-network-type2_ipv6" disabled="">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan1vlans.10.wpa-type2" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans10radius-ip" type="text" class="text-input" name="wlan1vlans.10.radius-ip" value="192.168.1.1" disabled="">
        </td>
      </tr>
      <tr id="ipv4wlan1vlans.10.wpa-type21" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans10radius-backupone-ip" type="text" class="text-input" name="wlan1vlans.10.radius-backupone-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.10.wpa-type22" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans10radius-backuptwo-ip" type="text" class="text-input" name="wlan1vlans.10.radius-backuptwo-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.10.wpa-type23" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans10radius-backupthree-ip" type="text" class="text-input" name="wlan1vlans.10.radius-backupthree-ip" value="" disabled="">
        </td>
      </tr>
     
      <tr id="ipv6wlan1vlans.10.wpa-type2" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans10radius-ipv6" type="text" name="wlan1vlans.10.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan1vlans.10.wpa-type21" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans10radius-backupone-ipv6" type="text" name="wlan1vlans.10.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.10.wpa-type22" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans10radius-backuptwo-ipv6" type="text" name="wlan1vlans.10.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.10.wpa-type23" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans10radius-backupthree-ipv6" type="text" name="wlan1vlans.10.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans10key-field" type="password" name="wlan1vlans.10.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans10radius-key-flag&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans10key-field1" type="password" name="wlan1vlans.10.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans10radius-key-flag1&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans10key-field2" type="password" name="wlan1vlans.10.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans10radius-key-flag2&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans10key-field3" type="password" name="wlan1vlans.10.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans10radius-key-flag3&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript" style="color: rgb(128, 128, 128);">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.1.1";
  var encrypted_key = "393437643137626564353634633939366665376537653661623837303264336133333465363234633630653639303761336531613166316130376635393738323235306563383336303137323965646332303863383163366137663834613962623863323264333162393162316136373032663165306335343938306566343200";
  var key = "wlan1wparadiusvlans10key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans10key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans10key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans10key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" colspan="3" nowrap="" style="color: rgb(128, 128, 128);">
          <input type="checkbox" name="wlan1vlans.10.radius-accounting" disabled="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan1vlans.10.radius-current" size="1">
       <option value="primary">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans10broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans10&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.10.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans10session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans10&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan1vlans.10.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan1vlans.10."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan1vlans.10."+"wpa"+"-type2","wlan1wparadiusvlans10");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan1vlans.10."+"wpa"+"-type2","wlan1wparadiusvlans10");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        11
      </td>
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setwlan1EntryEnabledStates11() {
            var enabledCheckBox = document.getElementById( 'wlan1vwn_enabled_11' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan1hstatus_11' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan1hstatus_11' ).value = "up";
            }
            document.getElementById( 'wlan1vwn_id_11' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_ssid_11' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_broadcast_ssid_11' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_dscp_prio_11' ).disabled = disabled;
            document.getElementById( 'wlan1bss_dscp_prio_11' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_tagged_sta_mode_11' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_mode_11' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_id_11' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_station_isolation_11' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_prio_11' ).disabled = disabled;

            
            
              document.getElementById( 'wlan1vwn_band_steer_11' ).disabled = disabled;
            

            document.getElementById( 'wlan1vwn_rrm_mode_11' ).disabled = disabled;
            document.getElementById( 'wlan1security-mode-id11' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_mac_auth_type_11' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wlan1wep-settings-panel11' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'wlan1dot1x-settings-panel11' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wlan1wpa-settings-panel11' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wlan1wparadius-settings-panel11' );
            var expander = document.getElementById( 'wlan1expand11' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showwlan1SecuritySettings11("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setwlan1EntryEnabledStates11 );
        </script>

        <input class="input-checkbox" type="checkbox" id="wlan1vwn_enabled_11" name="wlan1vlans.11.bss.status" value="up" onclick="setwlan1EntryEnabledStates11(1);"> 

        <input type="hidden" name="wlan1vlans.11.bss.row" value="11">
        <input type="hidden" id="vwn_wlan1hstatus_11" name="wlan1vlans.11.bss.hstatus" value="down">
      </td>
      <td class="section-cell" width="1">
        
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_id_11" name="wlan1vlans.11.interface.vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="wlan1vwn_ssid_11" name="wlan1vlans.11.interface.ssid" value="Virtual Access Point 11" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_broadcast_ssid_11" name="wlan1vlans.11.bss.ignore-broadcast-ssid" value="off" onclick="setWlan1BroadcastSSID11(1);" checked="" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_station_isolation_11" name="wlan1vlans.11.bss.station-isolation" value="on" checked="" disabled="">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_band_steer_11" name="wlan1vlans.11.vap.band-steer-mode" value="down" onclick="setwlan1EntryBandSteerMode11(1);" disabled="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_rrm_mode_11" name="wlan1vlans.11.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_dscp_prio_11" checked="" onclick="clickWlan1BssDcspPrio(&#39;11&#39;)" disabled="">
        <input type="hidden" id="wlan1bss_dscp_prio_11" name="wlan1vlans.11.bss.dscp-prio" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_tagged_sta_mode_11" name="wlan1vlans.11.bss.tagged-sta-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_general_vlan_mode_11" name="wlan1vlans.11.bss.general-vlan-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_general_vlan_id_11" name="wlan1vlans.11.bss.general-vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="wlan1vwn_prio_11" name="wlan1vlans.11.interface.vlan-prio" disabled="">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan1EntryBandSteerMode11() {
            var bandsteerCheckBox = document.getElementById( 'wlan1vwn_band_steer_11' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'wlan1vwn_band_steer_11' ).value = "down";
            } else {
              document.getElementById( 'wlan1vwn_band_steer_11' ).value = "up";
            }
      }
      

      function setWlan1BroadcastSSID11()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          var broadcast_ssid = document.getElementById( 'wlan1vwn_broadcast_ssid_11' ).checked;
          if ((wps_vap == 11) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showwlan1SecuritySettings11(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 11) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 11) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 11) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 11) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wlan1wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wlan1wparadius-settings-panel' + i );
          img = document.getElementById( 'wlan1expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 11 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 11 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showWlan1MacAuthSettings11(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 11) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('wlan1vwn_tagged_sta_mode_11').onclick = function() {
        var general_vlan = document.getElementById( 'wlan1vwn_general_vlan_mode_11' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('wlan1vwn_general_vlan_mode_11').onclick = function() {
        var vlan_trunk = document.getElementById( 'wlan1vwn_tagged_sta_mode_11' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="wlan1security-mode-id11" name="wlan1vlans.11.security" onchange="showwlan1SecuritySettings11(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="plain-text" selected="">
          None
          </option>
          
          <option value="wpa-personal">
          WPA Personal
          </option>
          <option value="wpa-enterprise">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="wlan1vwn_mac_auth_type_11" name="wlan1vlans.11.bss.mac-acl-auth-type" onchange="showWlan1MacAuthSettings11(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
      <td align="left" valign="middle">
      <img id="wlan1expand11" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src =&#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if(this.src.indexOf(&#39;expand&#39;) != -1) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if(this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;wlan1security-mode-id11&#39; ); showwlan1SecuritySettings11(s.options[s.selectedIndex].value); this.src =&#39;collapse.gif&#39;; } else { showwlan1SecuritySettings11(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wlan1wpa-settings-panel11" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wpavlans11validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wpavlans11wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wpavlans11broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wpavlans11() {
  var preAuth = document.getElementById( 'wlan1wpavlans11pre_auth_container_id' );

  document.getElementById( 'wlan1wpavlans11wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wpavlans11()
{
  var mfp = document.getElementById( 'wlan1wpavlans11mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wpavlans11() {
  var mfp = document.getElementById( 'wlan1wpavlans11mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wpavlans11 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wpavlans11(); if( !this.checked ) {setPreAuthEnabledStatewlan1wpavlans11(); document.getElementById(&#39;wlan1wpavlans11wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wpavlans11wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wpavlans11();} else if( this.checked ) {document.getElementById(&#39;wlan1wpavlans11wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wpavlans11wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wpavlans11();}" name="wlan1vlans.11.wpa-allowed" id="wlan1wpavlans11wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wpavlans11(); if( !this.checked ) document.getElementById(&#39;wlan1wpavlans11wpa_version1_id&#39;).checked = true;" name="wlan1vlans.11.wpa2-allowed" id="wlan1wpavlans11wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wpavlans11wpa-cipher-tkip" name="wlan1vlans.11.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wpavlans11wpa-cipher-ccmp" name="wlan1vlans.11.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wlan1wpavlans11wpa-personal-key" maxlength="63" name="wlan1vlans.11.wpa-personal-key" value="">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wlan1wpavlans11broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wpavlans11&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.11.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wpavlans11mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wpavlans11mfp_not_reqd" name="wlan1vlans.11.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans11mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans11mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wpavlans11mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans11mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans11mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans11mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans11mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wpavlans11mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans11mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans11mfp_not_req_flag" type="hidden" name="wlan1vlans.11.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wpavlans11mfp_capable" name="wlan1vlans.11.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans11mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans11mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans11mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wpavlans11mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wpavlans11mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans11mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wpavlans11mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans11mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans11mfp_capable_flag" type="hidden" name="wlan1vlans.11.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wlan1wpavlans11mfp_reqd" name="wlan1vlans.11.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wpavlans11mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans11mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wpavlans11mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wpavlans11mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wpavlans11mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans11mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wpavlans11mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wpavlans11mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans11mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wpavlans11mfp_req_flag" type="hidden" name="wlan1vlans.11.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wlan1wparadius-settings-panel11" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wparadiusvlans11validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wparadiusvlans11wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wparadiusvlans11broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wparadiusvlans11() {
  var preAuth = document.getElementById( 'wlan1wparadiusvlans11pre_auth_container_id' );

  document.getElementById( 'wlan1wparadiusvlans11wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wparadiusvlans11()
{
  var mfp = document.getElementById( 'wlan1wparadiusvlans11mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wparadiusvlans11() {
  var mfp = document.getElementById( 'wlan1wparadiusvlans11mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wparadiusvlans11 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wparadiusvlans11(); if( !this.checked ) {setPreAuthEnabledStatewlan1wparadiusvlans11(); document.getElementById(&#39;wlan1wparadiusvlans11wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wparadiusvlans11wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wparadiusvlans11();} else if( this.checked ) {document.getElementById(&#39;wlan1wparadiusvlans11wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wparadiusvlans11wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wparadiusvlans11();}" name="wlan1vlans.11.wpa-allowed" id="wlan1wparadiusvlans11wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wparadiusvlans11(); if( !this.checked ) document.getElementById(&#39;wlan1wparadiusvlans11wpa_version1_id&#39;).checked = true;" name="wlan1vlans.11.wpa2-allowed" id="wlan1wparadiusvlans11wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wlan1wparadiusvlans11pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan1vlans.11.rsn-preauthentication" checked="" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wparadiusvlans11wpa-cipher-tkip" name="wlan1vlans.11.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wparadiusvlans11wpa-cipher-ccmp" name="wlan1vlans.11.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wparadiusvlans11mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wparadiusvlans11mfp_not_reqd" name="wlan1vlans.11.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans11mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans11mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wparadiusvlans11mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans11mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans11mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans11mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans11mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wparadiusvlans11mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans11mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans11mfp_not_req_flag" type="hidden" name="wlan1vlans.11.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wparadiusvlans11mfp_capable" name="wlan1vlans.11.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans11mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans11mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans11mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wparadiusvlans11mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans11mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans11mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wparadiusvlans11mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans11mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans11mfp_capable_flag" type="hidden" name="wlan1vlans.11.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wlan1wparadiusvlans11mfp_reqd" name="wlan1vlans.11.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wparadiusvlans11mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans11mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wparadiusvlans11mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wparadiusvlans11mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wparadiusvlans11mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans11mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wparadiusvlans11mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wparadiusvlans11mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans11mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wparadiusvlans11mfp_req_flag" type="hidden" name="wlan1vlans.11.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywlan1wparadiusvlans11() {
      var rs = document.getElementById( 'wlan1wparadiusvlans11radius-settings-grs' );
      document.getElementById('wlan1wparadiusvlans11use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wlan1wparadiusvlans11use-grs-input').value = document.getElementById('wlan1wparadiusvlans11use-grs-display').checked? "on" : "off";
     }




function wlan1wparadiusvlans11validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wlan1wparadiusvlans11broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wlan1wparadiusvlans11session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wlan1wparadiusvlans11use-grs-display').checked)
    {
       var domain = document.getElementById('wlan1wparadiusvlans11radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan1vlans.11.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wlan1wparadiusvlans11radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wlan1wparadiusvlans11radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wlan1wparadiusvlans11radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wlan1wparadiusvlans11radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans11key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans11key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans11key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans11key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans11key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans11key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans11key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans11key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wlan1wparadiusvlans11radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wlan1wparadiusvlans11radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wlan1wparadiusvlans11radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wlan1wparadiusvlans11radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans11key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans11key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans11key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans11key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wlan1wparadiusvlans11','wlan1vlans.11.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywlan1wparadiusvlans11 );
   </script>

<input id="wlan1wparadiusvlans11radius-key-flag" type="hidden" name="wlan1vlans.11.radius-key-flag" value="0">
<input id="wlan1wparadiusvlans11radius-key-flag1" type="hidden" name="wlan1vlans.11.radius-key-flag1" value="0">
<input id="wlan1wparadiusvlans11radius-key-flag2" type="hidden" name="wlan1vlans.11.radius-key-flag2" value="0">
<input id="wlan1wparadiusvlans11radius-key-flag3" type="hidden" name="wlan1vlans.11.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wlan1wparadiusvlans11use-grs-display" onclick="setRadiusSettingsDisplaywlan1wparadiusvlans11();" checked="">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wlan1wparadiusvlans11use-grs-input" name="wlan1vlans.11.global-radius" value="on">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wlan1wparadiusvlans11radius-settings-grs">
       <tbody style="color: rgb(128, 128, 128);"><tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Domain:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
         <input id="wlan1wparadiusvlans11radius-domain" type="text" class="text-input" name="wlan1vlans.11.radius-domain" value="" disabled="">
        </td>
       </tr>
       <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address Type:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
<input class="value" type="radio" name="wlan1vlans.11.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan1vlans.11.wpa-type2&#39;,&#39;wlan1wparadiusvlans11&#39;)" id="wlan1vlans.11.wparadius-ip-network-type2_ipv4" checked="" disabled="">
        IPv4
        <input class="value" type="radio" name="wlan1vlans.11.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan1vlans.11.wpa-type2&#39;,&#39;wlan1wparadiusvlans11&#39;)" id="wlan1vlans.11.wparadius-ip-network-type2_ipv6" disabled="">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan1vlans.11.wpa-type2" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans11radius-ip" type="text" class="text-input" name="wlan1vlans.11.radius-ip" value="192.168.1.1" disabled="">
        </td>
      </tr>
      <tr id="ipv4wlan1vlans.11.wpa-type21" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans11radius-backupone-ip" type="text" class="text-input" name="wlan1vlans.11.radius-backupone-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.11.wpa-type22" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans11radius-backuptwo-ip" type="text" class="text-input" name="wlan1vlans.11.radius-backuptwo-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.11.wpa-type23" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans11radius-backupthree-ip" type="text" class="text-input" name="wlan1vlans.11.radius-backupthree-ip" value="" disabled="">
        </td>
      </tr>
     
      <tr id="ipv6wlan1vlans.11.wpa-type2" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans11radius-ipv6" type="text" name="wlan1vlans.11.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan1vlans.11.wpa-type21" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans11radius-backupone-ipv6" type="text" name="wlan1vlans.11.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.11.wpa-type22" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans11radius-backuptwo-ipv6" type="text" name="wlan1vlans.11.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.11.wpa-type23" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans11radius-backupthree-ipv6" type="text" name="wlan1vlans.11.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans11key-field" type="password" name="wlan1vlans.11.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans11radius-key-flag&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans11key-field1" type="password" name="wlan1vlans.11.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans11radius-key-flag1&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans11key-field2" type="password" name="wlan1vlans.11.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans11radius-key-flag2&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans11key-field3" type="password" name="wlan1vlans.11.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans11radius-key-flag3&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript" style="color: rgb(128, 128, 128);">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.1.1";
  var encrypted_key = "393437643137626564353634633939366665376537653661623837303264336133333465363234633630653639303761336531613166316130376635393738323235306563383336303137323965646332303863383163366137663834613962623863323264333162393162316136373032663165306335343938306566343200";
  var key = "wlan1wparadiusvlans11key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans11key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans11key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans11key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" colspan="3" nowrap="" style="color: rgb(128, 128, 128);">
          <input type="checkbox" name="wlan1vlans.11.radius-accounting" disabled="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan1vlans.11.radius-current" size="1">
       <option value="primary">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans11broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans11&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.11.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans11session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans11&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan1vlans.11.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan1vlans.11."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan1vlans.11."+"wpa"+"-type2","wlan1wparadiusvlans11");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan1vlans.11."+"wpa"+"-type2","wlan1wparadiusvlans11");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        12
      </td>
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setwlan1EntryEnabledStates12() {
            var enabledCheckBox = document.getElementById( 'wlan1vwn_enabled_12' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan1hstatus_12' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan1hstatus_12' ).value = "up";
            }
            document.getElementById( 'wlan1vwn_id_12' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_ssid_12' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_broadcast_ssid_12' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_dscp_prio_12' ).disabled = disabled;
            document.getElementById( 'wlan1bss_dscp_prio_12' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_tagged_sta_mode_12' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_mode_12' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_id_12' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_station_isolation_12' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_prio_12' ).disabled = disabled;

            
            
              document.getElementById( 'wlan1vwn_band_steer_12' ).disabled = disabled;
            

            document.getElementById( 'wlan1vwn_rrm_mode_12' ).disabled = disabled;
            document.getElementById( 'wlan1security-mode-id12' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_mac_auth_type_12' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wlan1wep-settings-panel12' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'wlan1dot1x-settings-panel12' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wlan1wpa-settings-panel12' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wlan1wparadius-settings-panel12' );
            var expander = document.getElementById( 'wlan1expand12' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showwlan1SecuritySettings12("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setwlan1EntryEnabledStates12 );
        </script>

        <input class="input-checkbox" type="checkbox" id="wlan1vwn_enabled_12" name="wlan1vlans.12.bss.status" value="up" onclick="setwlan1EntryEnabledStates12(1);"> 

        <input type="hidden" name="wlan1vlans.12.bss.row" value="12">
        <input type="hidden" id="vwn_wlan1hstatus_12" name="wlan1vlans.12.bss.hstatus" value="down">
      </td>
      <td class="section-cell" width="1">
        
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_id_12" name="wlan1vlans.12.interface.vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="wlan1vwn_ssid_12" name="wlan1vlans.12.interface.ssid" value="Virtual Access Point 12" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_broadcast_ssid_12" name="wlan1vlans.12.bss.ignore-broadcast-ssid" value="off" onclick="setWlan1BroadcastSSID12(1);" checked="" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_station_isolation_12" name="wlan1vlans.12.bss.station-isolation" value="on" checked="" disabled="">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
          
        
          
        
          
        
          
        
          
        
          
        
          
        
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_band_steer_12" name="wlan1vlans.12.vap.band-steer-mode" value="down" onclick="setwlan1EntryBandSteerMode12(1);" disabled="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_rrm_mode_12" name="wlan1vlans.12.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_dscp_prio_12" checked="" onclick="clickWlan1BssDcspPrio(&#39;12&#39;)" disabled="">
        <input type="hidden" id="wlan1bss_dscp_prio_12" name="wlan1vlans.12.bss.dscp-prio" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_tagged_sta_mode_12" name="wlan1vlans.12.bss.tagged-sta-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_general_vlan_mode_12" name="wlan1vlans.12.bss.general-vlan-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_general_vlan_id_12" name="wlan1vlans.12.bss.general-vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="wlan1vwn_prio_12" name="wlan1vlans.12.interface.vlan-prio" disabled="">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan1EntryBandSteerMode12() {
            var bandsteerCheckBox = document.getElementById( 'wlan1vwn_band_steer_12' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'wlan1vwn_band_steer_12' ).value = "down";
            } else {
              document.getElementById( 'wlan1vwn_band_steer_12' ).value = "up";
            }
      }
      

      function setWlan1BroadcastSSID12()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          var broadcast_ssid = document.getElementById( 'wlan1vwn_broadcast_ssid_12' ).checked;
          if ((wps_vap == 12) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showwlan1SecuritySettings12(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 12) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 12) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 12) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 12) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wlan1wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wlan1wparadius-settings-panel' + i );
          img = document.getElementById( 'wlan1expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 12 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 12 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showWlan1MacAuthSettings12(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 12) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('wlan1vwn_tagged_sta_mode_12').onclick = function() {
        var general_vlan = document.getElementById( 'wlan1vwn_general_vlan_mode_12' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('wlan1vwn_general_vlan_mode_12').onclick = function() {
        var vlan_trunk = document.getElementById( 'wlan1vwn_tagged_sta_mode_12' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="wlan1security-mode-id12" name="wlan1vlans.12.security" onchange="showwlan1SecuritySettings12(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="plain-text" selected="">
          None
          </option>
          
          <option value="wpa-personal">
          WPA Personal
          </option>
          <option value="wpa-enterprise">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="wlan1vwn_mac_auth_type_12" name="wlan1vlans.12.bss.mac-acl-auth-type" onchange="showWlan1MacAuthSettings12(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
      <td align="left" valign="middle">
      <img id="wlan1expand12" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src =&#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if(this.src.indexOf(&#39;expand&#39;) != -1) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if(this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;wlan1security-mode-id12&#39; ); showwlan1SecuritySettings12(s.options[s.selectedIndex].value); this.src =&#39;collapse.gif&#39;; } else { showwlan1SecuritySettings12(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wlan1wpa-settings-panel12" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wpavlans12validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wpavlans12wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wpavlans12broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wpavlans12() {
  var preAuth = document.getElementById( 'wlan1wpavlans12pre_auth_container_id' );

  document.getElementById( 'wlan1wpavlans12wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wpavlans12()
{
  var mfp = document.getElementById( 'wlan1wpavlans12mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wpavlans12() {
  var mfp = document.getElementById( 'wlan1wpavlans12mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wpavlans12 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wpavlans12(); if( !this.checked ) {setPreAuthEnabledStatewlan1wpavlans12(); document.getElementById(&#39;wlan1wpavlans12wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wpavlans12wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wpavlans12();} else if( this.checked ) {document.getElementById(&#39;wlan1wpavlans12wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wpavlans12wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wpavlans12();}" name="wlan1vlans.12.wpa-allowed" id="wlan1wpavlans12wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wpavlans12(); if( !this.checked ) document.getElementById(&#39;wlan1wpavlans12wpa_version1_id&#39;).checked = true;" name="wlan1vlans.12.wpa2-allowed" id="wlan1wpavlans12wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wpavlans12wpa-cipher-tkip" name="wlan1vlans.12.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wpavlans12wpa-cipher-ccmp" name="wlan1vlans.12.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wlan1wpavlans12wpa-personal-key" maxlength="63" name="wlan1vlans.12.wpa-personal-key" value="">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wlan1wpavlans12broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wpavlans12&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.12.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wpavlans12mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wpavlans12mfp_not_reqd" name="wlan1vlans.12.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans12mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans12mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wpavlans12mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans12mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans12mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans12mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans12mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wpavlans12mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans12mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans12mfp_not_req_flag" type="hidden" name="wlan1vlans.12.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wpavlans12mfp_capable" name="wlan1vlans.12.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans12mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans12mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans12mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wpavlans12mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wpavlans12mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans12mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wpavlans12mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans12mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans12mfp_capable_flag" type="hidden" name="wlan1vlans.12.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wlan1wpavlans12mfp_reqd" name="wlan1vlans.12.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wpavlans12mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans12mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wpavlans12mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wpavlans12mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wpavlans12mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans12mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wpavlans12mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wpavlans12mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans12mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wpavlans12mfp_req_flag" type="hidden" name="wlan1vlans.12.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wlan1wparadius-settings-panel12" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wparadiusvlans12validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wparadiusvlans12wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wparadiusvlans12broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wparadiusvlans12() {
  var preAuth = document.getElementById( 'wlan1wparadiusvlans12pre_auth_container_id' );

  document.getElementById( 'wlan1wparadiusvlans12wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wparadiusvlans12()
{
  var mfp = document.getElementById( 'wlan1wparadiusvlans12mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wparadiusvlans12() {
  var mfp = document.getElementById( 'wlan1wparadiusvlans12mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wparadiusvlans12 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wparadiusvlans12(); if( !this.checked ) {setPreAuthEnabledStatewlan1wparadiusvlans12(); document.getElementById(&#39;wlan1wparadiusvlans12wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wparadiusvlans12wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wparadiusvlans12();} else if( this.checked ) {document.getElementById(&#39;wlan1wparadiusvlans12wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wparadiusvlans12wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wparadiusvlans12();}" name="wlan1vlans.12.wpa-allowed" id="wlan1wparadiusvlans12wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wparadiusvlans12(); if( !this.checked ) document.getElementById(&#39;wlan1wparadiusvlans12wpa_version1_id&#39;).checked = true;" name="wlan1vlans.12.wpa2-allowed" id="wlan1wparadiusvlans12wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wlan1wparadiusvlans12pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan1vlans.12.rsn-preauthentication" checked="" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wparadiusvlans12wpa-cipher-tkip" name="wlan1vlans.12.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wparadiusvlans12wpa-cipher-ccmp" name="wlan1vlans.12.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wparadiusvlans12mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wparadiusvlans12mfp_not_reqd" name="wlan1vlans.12.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans12mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans12mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wparadiusvlans12mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans12mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans12mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans12mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans12mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wparadiusvlans12mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans12mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans12mfp_not_req_flag" type="hidden" name="wlan1vlans.12.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wparadiusvlans12mfp_capable" name="wlan1vlans.12.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans12mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans12mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans12mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wparadiusvlans12mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans12mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans12mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wparadiusvlans12mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans12mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans12mfp_capable_flag" type="hidden" name="wlan1vlans.12.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wlan1wparadiusvlans12mfp_reqd" name="wlan1vlans.12.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wparadiusvlans12mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans12mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wparadiusvlans12mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wparadiusvlans12mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wparadiusvlans12mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans12mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wparadiusvlans12mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wparadiusvlans12mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans12mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wparadiusvlans12mfp_req_flag" type="hidden" name="wlan1vlans.12.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywlan1wparadiusvlans12() {
      var rs = document.getElementById( 'wlan1wparadiusvlans12radius-settings-grs' );
      document.getElementById('wlan1wparadiusvlans12use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wlan1wparadiusvlans12use-grs-input').value = document.getElementById('wlan1wparadiusvlans12use-grs-display').checked? "on" : "off";
     }




function wlan1wparadiusvlans12validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wlan1wparadiusvlans12broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wlan1wparadiusvlans12session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wlan1wparadiusvlans12use-grs-display').checked)
    {
       var domain = document.getElementById('wlan1wparadiusvlans12radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan1vlans.12.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wlan1wparadiusvlans12radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wlan1wparadiusvlans12radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wlan1wparadiusvlans12radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wlan1wparadiusvlans12radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans12key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans12key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans12key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans12key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans12key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans12key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans12key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans12key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wlan1wparadiusvlans12radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wlan1wparadiusvlans12radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wlan1wparadiusvlans12radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wlan1wparadiusvlans12radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans12key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans12key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans12key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans12key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wlan1wparadiusvlans12','wlan1vlans.12.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywlan1wparadiusvlans12 );
   </script>

<input id="wlan1wparadiusvlans12radius-key-flag" type="hidden" name="wlan1vlans.12.radius-key-flag" value="0">
<input id="wlan1wparadiusvlans12radius-key-flag1" type="hidden" name="wlan1vlans.12.radius-key-flag1" value="0">
<input id="wlan1wparadiusvlans12radius-key-flag2" type="hidden" name="wlan1vlans.12.radius-key-flag2" value="0">
<input id="wlan1wparadiusvlans12radius-key-flag3" type="hidden" name="wlan1vlans.12.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wlan1wparadiusvlans12use-grs-display" onclick="setRadiusSettingsDisplaywlan1wparadiusvlans12();" checked="">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wlan1wparadiusvlans12use-grs-input" name="wlan1vlans.12.global-radius" value="on">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wlan1wparadiusvlans12radius-settings-grs">
       <tbody style="color: rgb(128, 128, 128);"><tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Domain:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
         <input id="wlan1wparadiusvlans12radius-domain" type="text" class="text-input" name="wlan1vlans.12.radius-domain" value="" disabled="">
        </td>
       </tr>
       <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address Type:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
<input class="value" type="radio" name="wlan1vlans.12.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan1vlans.12.wpa-type2&#39;,&#39;wlan1wparadiusvlans12&#39;)" id="wlan1vlans.12.wparadius-ip-network-type2_ipv4" checked="" disabled="">
        IPv4
        <input class="value" type="radio" name="wlan1vlans.12.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan1vlans.12.wpa-type2&#39;,&#39;wlan1wparadiusvlans12&#39;)" id="wlan1vlans.12.wparadius-ip-network-type2_ipv6" disabled="">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan1vlans.12.wpa-type2" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans12radius-ip" type="text" class="text-input" name="wlan1vlans.12.radius-ip" value="192.168.1.1" disabled="">
        </td>
      </tr>
      <tr id="ipv4wlan1vlans.12.wpa-type21" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans12radius-backupone-ip" type="text" class="text-input" name="wlan1vlans.12.radius-backupone-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.12.wpa-type22" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans12radius-backuptwo-ip" type="text" class="text-input" name="wlan1vlans.12.radius-backuptwo-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.12.wpa-type23" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans12radius-backupthree-ip" type="text" class="text-input" name="wlan1vlans.12.radius-backupthree-ip" value="" disabled="">
        </td>
      </tr>
     
      <tr id="ipv6wlan1vlans.12.wpa-type2" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans12radius-ipv6" type="text" name="wlan1vlans.12.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan1vlans.12.wpa-type21" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans12radius-backupone-ipv6" type="text" name="wlan1vlans.12.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.12.wpa-type22" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans12radius-backuptwo-ipv6" type="text" name="wlan1vlans.12.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.12.wpa-type23" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans12radius-backupthree-ipv6" type="text" name="wlan1vlans.12.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans12key-field" type="password" name="wlan1vlans.12.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans12radius-key-flag&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans12key-field1" type="password" name="wlan1vlans.12.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans12radius-key-flag1&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans12key-field2" type="password" name="wlan1vlans.12.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans12radius-key-flag2&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans12key-field3" type="password" name="wlan1vlans.12.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans12radius-key-flag3&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript" style="color: rgb(128, 128, 128);">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.1.1";
  var encrypted_key = "393437643137626564353634633939366665376537653661623837303264336133333465363234633630653639303761336531613166316130376635393738323235306563383336303137323965646332303863383163366137663834613962623863323264333162393162316136373032663165306335343938306566343200";
  var key = "wlan1wparadiusvlans12key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans12key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans12key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans12key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" colspan="3" nowrap="" style="color: rgb(128, 128, 128);">
          <input type="checkbox" name="wlan1vlans.12.radius-accounting" disabled="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan1vlans.12.radius-current" size="1">
       <option value="primary">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans12broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans12&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.12.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans12session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans12&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan1vlans.12.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan1vlans.12."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan1vlans.12."+"wpa"+"-type2","wlan1wparadiusvlans12");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan1vlans.12."+"wpa"+"-type2","wlan1wparadiusvlans12");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        13
      </td>
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setwlan1EntryEnabledStates13() {
            var enabledCheckBox = document.getElementById( 'wlan1vwn_enabled_13' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan1hstatus_13' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan1hstatus_13' ).value = "up";
            }
            document.getElementById( 'wlan1vwn_id_13' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_ssid_13' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_broadcast_ssid_13' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_dscp_prio_13' ).disabled = disabled;
            document.getElementById( 'wlan1bss_dscp_prio_13' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_tagged_sta_mode_13' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_mode_13' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_id_13' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_station_isolation_13' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_prio_13' ).disabled = disabled;

            
            
              document.getElementById( 'wlan1vwn_band_steer_13' ).disabled = disabled;
            

            document.getElementById( 'wlan1vwn_rrm_mode_13' ).disabled = disabled;
            document.getElementById( 'wlan1security-mode-id13' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_mac_auth_type_13' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wlan1wep-settings-panel13' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'wlan1dot1x-settings-panel13' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wlan1wpa-settings-panel13' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wlan1wparadius-settings-panel13' );
            var expander = document.getElementById( 'wlan1expand13' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showwlan1SecuritySettings13("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setwlan1EntryEnabledStates13 );
        </script>

        <input class="input-checkbox" type="checkbox" id="wlan1vwn_enabled_13" name="wlan1vlans.13.bss.status" value="up" onclick="setwlan1EntryEnabledStates13(1);"> 

        <input type="hidden" name="wlan1vlans.13.bss.row" value="13">
        <input type="hidden" id="vwn_wlan1hstatus_13" name="wlan1vlans.13.bss.hstatus" value="down">
      </td>
      <td class="section-cell" width="1">
        
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
            
          
        
          
        
          
        
          
        
          
        
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_id_13" name="wlan1vlans.13.interface.vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="wlan1vwn_ssid_13" name="wlan1vlans.13.interface.ssid" value="Virtual Access Point 13" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_broadcast_ssid_13" name="wlan1vlans.13.bss.ignore-broadcast-ssid" value="off" onclick="setWlan1BroadcastSSID13(1);" checked="" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_station_isolation_13" name="wlan1vlans.13.bss.station-isolation" value="on" checked="" disabled="">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
          
        
          
        
          
        
          
        
          
        
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_band_steer_13" name="wlan1vlans.13.vap.band-steer-mode" value="down" onclick="setwlan1EntryBandSteerMode13(1);" disabled="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_rrm_mode_13" name="wlan1vlans.13.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_dscp_prio_13" checked="" onclick="clickWlan1BssDcspPrio(&#39;13&#39;)" disabled="">
        <input type="hidden" id="wlan1bss_dscp_prio_13" name="wlan1vlans.13.bss.dscp-prio" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_tagged_sta_mode_13" name="wlan1vlans.13.bss.tagged-sta-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_general_vlan_mode_13" name="wlan1vlans.13.bss.general-vlan-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_general_vlan_id_13" name="wlan1vlans.13.bss.general-vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="wlan1vwn_prio_13" name="wlan1vlans.13.interface.vlan-prio" disabled="">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan1EntryBandSteerMode13() {
            var bandsteerCheckBox = document.getElementById( 'wlan1vwn_band_steer_13' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'wlan1vwn_band_steer_13' ).value = "down";
            } else {
              document.getElementById( 'wlan1vwn_band_steer_13' ).value = "up";
            }
      }
      

      function setWlan1BroadcastSSID13()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          var broadcast_ssid = document.getElementById( 'wlan1vwn_broadcast_ssid_13' ).checked;
          if ((wps_vap == 13) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showwlan1SecuritySettings13(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 13) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 13) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 13) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 13) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wlan1wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wlan1wparadius-settings-panel' + i );
          img = document.getElementById( 'wlan1expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 13 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 13 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showWlan1MacAuthSettings13(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 13) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('wlan1vwn_tagged_sta_mode_13').onclick = function() {
        var general_vlan = document.getElementById( 'wlan1vwn_general_vlan_mode_13' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('wlan1vwn_general_vlan_mode_13').onclick = function() {
        var vlan_trunk = document.getElementById( 'wlan1vwn_tagged_sta_mode_13' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="wlan1security-mode-id13" name="wlan1vlans.13.security" onchange="showwlan1SecuritySettings13(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="plain-text" selected="">
          None
          </option>
          
          <option value="wpa-personal">
          WPA Personal
          </option>
          <option value="wpa-enterprise">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="wlan1vwn_mac_auth_type_13" name="wlan1vlans.13.bss.mac-acl-auth-type" onchange="showWlan1MacAuthSettings13(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
      <td align="left" valign="middle">
      <img id="wlan1expand13" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src =&#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if(this.src.indexOf(&#39;expand&#39;) != -1) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if(this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;wlan1security-mode-id13&#39; ); showwlan1SecuritySettings13(s.options[s.selectedIndex].value); this.src =&#39;collapse.gif&#39;; } else { showwlan1SecuritySettings13(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wlan1wpa-settings-panel13" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wpavlans13validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wpavlans13wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wpavlans13broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wpavlans13() {
  var preAuth = document.getElementById( 'wlan1wpavlans13pre_auth_container_id' );

  document.getElementById( 'wlan1wpavlans13wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wpavlans13()
{
  var mfp = document.getElementById( 'wlan1wpavlans13mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wpavlans13() {
  var mfp = document.getElementById( 'wlan1wpavlans13mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wpavlans13 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wpavlans13(); if( !this.checked ) {setPreAuthEnabledStatewlan1wpavlans13(); document.getElementById(&#39;wlan1wpavlans13wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wpavlans13wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wpavlans13();} else if( this.checked ) {document.getElementById(&#39;wlan1wpavlans13wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wpavlans13wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wpavlans13();}" name="wlan1vlans.13.wpa-allowed" id="wlan1wpavlans13wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wpavlans13(); if( !this.checked ) document.getElementById(&#39;wlan1wpavlans13wpa_version1_id&#39;).checked = true;" name="wlan1vlans.13.wpa2-allowed" id="wlan1wpavlans13wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wpavlans13wpa-cipher-tkip" name="wlan1vlans.13.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wpavlans13wpa-cipher-ccmp" name="wlan1vlans.13.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wlan1wpavlans13wpa-personal-key" maxlength="63" name="wlan1vlans.13.wpa-personal-key" value="">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wlan1wpavlans13broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wpavlans13&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.13.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wpavlans13mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wpavlans13mfp_not_reqd" name="wlan1vlans.13.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans13mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans13mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wpavlans13mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans13mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans13mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans13mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans13mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wpavlans13mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans13mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans13mfp_not_req_flag" type="hidden" name="wlan1vlans.13.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wpavlans13mfp_capable" name="wlan1vlans.13.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans13mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans13mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans13mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wpavlans13mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wpavlans13mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans13mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wpavlans13mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans13mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans13mfp_capable_flag" type="hidden" name="wlan1vlans.13.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wlan1wpavlans13mfp_reqd" name="wlan1vlans.13.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wpavlans13mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans13mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wpavlans13mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wpavlans13mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wpavlans13mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans13mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wpavlans13mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wpavlans13mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans13mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wpavlans13mfp_req_flag" type="hidden" name="wlan1vlans.13.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wlan1wparadius-settings-panel13" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wparadiusvlans13validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wparadiusvlans13wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wparadiusvlans13broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wparadiusvlans13() {
  var preAuth = document.getElementById( 'wlan1wparadiusvlans13pre_auth_container_id' );

  document.getElementById( 'wlan1wparadiusvlans13wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wparadiusvlans13()
{
  var mfp = document.getElementById( 'wlan1wparadiusvlans13mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wparadiusvlans13() {
  var mfp = document.getElementById( 'wlan1wparadiusvlans13mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wparadiusvlans13 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wparadiusvlans13(); if( !this.checked ) {setPreAuthEnabledStatewlan1wparadiusvlans13(); document.getElementById(&#39;wlan1wparadiusvlans13wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wparadiusvlans13wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wparadiusvlans13();} else if( this.checked ) {document.getElementById(&#39;wlan1wparadiusvlans13wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wparadiusvlans13wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wparadiusvlans13();}" name="wlan1vlans.13.wpa-allowed" id="wlan1wparadiusvlans13wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wparadiusvlans13(); if( !this.checked ) document.getElementById(&#39;wlan1wparadiusvlans13wpa_version1_id&#39;).checked = true;" name="wlan1vlans.13.wpa2-allowed" id="wlan1wparadiusvlans13wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wlan1wparadiusvlans13pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan1vlans.13.rsn-preauthentication" checked="" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wparadiusvlans13wpa-cipher-tkip" name="wlan1vlans.13.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wparadiusvlans13wpa-cipher-ccmp" name="wlan1vlans.13.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wparadiusvlans13mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wparadiusvlans13mfp_not_reqd" name="wlan1vlans.13.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans13mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans13mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wparadiusvlans13mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans13mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans13mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans13mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans13mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wparadiusvlans13mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans13mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans13mfp_not_req_flag" type="hidden" name="wlan1vlans.13.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wparadiusvlans13mfp_capable" name="wlan1vlans.13.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans13mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans13mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans13mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wparadiusvlans13mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans13mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans13mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wparadiusvlans13mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans13mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans13mfp_capable_flag" type="hidden" name="wlan1vlans.13.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wlan1wparadiusvlans13mfp_reqd" name="wlan1vlans.13.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wparadiusvlans13mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans13mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wparadiusvlans13mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wparadiusvlans13mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wparadiusvlans13mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans13mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wparadiusvlans13mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wparadiusvlans13mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans13mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wparadiusvlans13mfp_req_flag" type="hidden" name="wlan1vlans.13.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywlan1wparadiusvlans13() {
      var rs = document.getElementById( 'wlan1wparadiusvlans13radius-settings-grs' );
      document.getElementById('wlan1wparadiusvlans13use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wlan1wparadiusvlans13use-grs-input').value = document.getElementById('wlan1wparadiusvlans13use-grs-display').checked? "on" : "off";
     }




function wlan1wparadiusvlans13validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wlan1wparadiusvlans13broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wlan1wparadiusvlans13session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wlan1wparadiusvlans13use-grs-display').checked)
    {
       var domain = document.getElementById('wlan1wparadiusvlans13radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan1vlans.13.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wlan1wparadiusvlans13radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wlan1wparadiusvlans13radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wlan1wparadiusvlans13radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wlan1wparadiusvlans13radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans13key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans13key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans13key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans13key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans13key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans13key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans13key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans13key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wlan1wparadiusvlans13radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wlan1wparadiusvlans13radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wlan1wparadiusvlans13radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wlan1wparadiusvlans13radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans13key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans13key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans13key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans13key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wlan1wparadiusvlans13','wlan1vlans.13.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywlan1wparadiusvlans13 );
   </script>

<input id="wlan1wparadiusvlans13radius-key-flag" type="hidden" name="wlan1vlans.13.radius-key-flag" value="0">
<input id="wlan1wparadiusvlans13radius-key-flag1" type="hidden" name="wlan1vlans.13.radius-key-flag1" value="0">
<input id="wlan1wparadiusvlans13radius-key-flag2" type="hidden" name="wlan1vlans.13.radius-key-flag2" value="0">
<input id="wlan1wparadiusvlans13radius-key-flag3" type="hidden" name="wlan1vlans.13.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wlan1wparadiusvlans13use-grs-display" onclick="setRadiusSettingsDisplaywlan1wparadiusvlans13();" checked="">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wlan1wparadiusvlans13use-grs-input" name="wlan1vlans.13.global-radius" value="on">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wlan1wparadiusvlans13radius-settings-grs">
       <tbody style="color: rgb(128, 128, 128);"><tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Domain:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
         <input id="wlan1wparadiusvlans13radius-domain" type="text" class="text-input" name="wlan1vlans.13.radius-domain" value="" disabled="">
        </td>
       </tr>
       <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address Type:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
<input class="value" type="radio" name="wlan1vlans.13.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan1vlans.13.wpa-type2&#39;,&#39;wlan1wparadiusvlans13&#39;)" id="wlan1vlans.13.wparadius-ip-network-type2_ipv4" checked="" disabled="">
        IPv4
        <input class="value" type="radio" name="wlan1vlans.13.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan1vlans.13.wpa-type2&#39;,&#39;wlan1wparadiusvlans13&#39;)" id="wlan1vlans.13.wparadius-ip-network-type2_ipv6" disabled="">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan1vlans.13.wpa-type2" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans13radius-ip" type="text" class="text-input" name="wlan1vlans.13.radius-ip" value="192.168.1.1" disabled="">
        </td>
      </tr>
      <tr id="ipv4wlan1vlans.13.wpa-type21" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans13radius-backupone-ip" type="text" class="text-input" name="wlan1vlans.13.radius-backupone-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.13.wpa-type22" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans13radius-backuptwo-ip" type="text" class="text-input" name="wlan1vlans.13.radius-backuptwo-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.13.wpa-type23" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans13radius-backupthree-ip" type="text" class="text-input" name="wlan1vlans.13.radius-backupthree-ip" value="" disabled="">
        </td>
      </tr>
     
      <tr id="ipv6wlan1vlans.13.wpa-type2" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans13radius-ipv6" type="text" name="wlan1vlans.13.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan1vlans.13.wpa-type21" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans13radius-backupone-ipv6" type="text" name="wlan1vlans.13.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.13.wpa-type22" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans13radius-backuptwo-ipv6" type="text" name="wlan1vlans.13.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.13.wpa-type23" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans13radius-backupthree-ipv6" type="text" name="wlan1vlans.13.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans13key-field" type="password" name="wlan1vlans.13.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans13radius-key-flag&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans13key-field1" type="password" name="wlan1vlans.13.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans13radius-key-flag1&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans13key-field2" type="password" name="wlan1vlans.13.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans13radius-key-flag2&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans13key-field3" type="password" name="wlan1vlans.13.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans13radius-key-flag3&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript" style="color: rgb(128, 128, 128);">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.1.1";
  var encrypted_key = "393437643137626564353634633939366665376537653661623837303264336133333465363234633630653639303761336531613166316130376635393738323235306563383336303137323965646332303863383163366137663834613962623863323264333162393162316136373032663165306335343938306566343200";
  var key = "wlan1wparadiusvlans13key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans13key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans13key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans13key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" colspan="3" nowrap="" style="color: rgb(128, 128, 128);">
          <input type="checkbox" name="wlan1vlans.13.radius-accounting" disabled="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan1vlans.13.radius-current" size="1">
       <option value="primary">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans13broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans13&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.13.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans13session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans13&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan1vlans.13.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan1vlans.13."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan1vlans.13."+"wpa"+"-type2","wlan1wparadiusvlans13");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan1vlans.13."+"wpa"+"-type2","wlan1wparadiusvlans13");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        14
      </td>
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setwlan1EntryEnabledStates14() {
            var enabledCheckBox = document.getElementById( 'wlan1vwn_enabled_14' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan1hstatus_14' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan1hstatus_14' ).value = "up";
            }
            document.getElementById( 'wlan1vwn_id_14' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_ssid_14' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_broadcast_ssid_14' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_dscp_prio_14' ).disabled = disabled;
            document.getElementById( 'wlan1bss_dscp_prio_14' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_tagged_sta_mode_14' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_mode_14' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_id_14' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_station_isolation_14' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_prio_14' ).disabled = disabled;

            
            
              document.getElementById( 'wlan1vwn_band_steer_14' ).disabled = disabled;
            

            document.getElementById( 'wlan1vwn_rrm_mode_14' ).disabled = disabled;
            document.getElementById( 'wlan1security-mode-id14' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_mac_auth_type_14' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wlan1wep-settings-panel14' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'wlan1dot1x-settings-panel14' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wlan1wpa-settings-panel14' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wlan1wparadius-settings-panel14' );
            var expander = document.getElementById( 'wlan1expand14' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showwlan1SecuritySettings14("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setwlan1EntryEnabledStates14 );
        </script>

        <input class="input-checkbox" type="checkbox" id="wlan1vwn_enabled_14" name="wlan1vlans.14.bss.status" value="up" onclick="setwlan1EntryEnabledStates14(1);"> 

        <input type="hidden" name="wlan1vlans.14.bss.row" value="14">
        <input type="hidden" id="vwn_wlan1hstatus_14" name="wlan1vlans.14.bss.hstatus" value="down">
      </td>
      <td class="section-cell" width="1">
        
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
            
          
        
          
        
          
        
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_id_14" name="wlan1vlans.14.interface.vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="wlan1vwn_ssid_14" name="wlan1vlans.14.interface.ssid" value="Virtual Access Point 14" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_broadcast_ssid_14" name="wlan1vlans.14.bss.ignore-broadcast-ssid" value="off" onclick="setWlan1BroadcastSSID14(1);" checked="" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_station_isolation_14" name="wlan1vlans.14.bss.station-isolation" value="on" checked="" disabled="">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
          
        
          
        
          
        
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_band_steer_14" name="wlan1vlans.14.vap.band-steer-mode" value="down" onclick="setwlan1EntryBandSteerMode14(1);" disabled="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_rrm_mode_14" name="wlan1vlans.14.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_dscp_prio_14" checked="" onclick="clickWlan1BssDcspPrio(&#39;14&#39;)" disabled="">
        <input type="hidden" id="wlan1bss_dscp_prio_14" name="wlan1vlans.14.bss.dscp-prio" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_tagged_sta_mode_14" name="wlan1vlans.14.bss.tagged-sta-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_general_vlan_mode_14" name="wlan1vlans.14.bss.general-vlan-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_general_vlan_id_14" name="wlan1vlans.14.bss.general-vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="wlan1vwn_prio_14" name="wlan1vlans.14.interface.vlan-prio" disabled="">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan1EntryBandSteerMode14() {
            var bandsteerCheckBox = document.getElementById( 'wlan1vwn_band_steer_14' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'wlan1vwn_band_steer_14' ).value = "down";
            } else {
              document.getElementById( 'wlan1vwn_band_steer_14' ).value = "up";
            }
      }
      

      function setWlan1BroadcastSSID14()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          var broadcast_ssid = document.getElementById( 'wlan1vwn_broadcast_ssid_14' ).checked;
          if ((wps_vap == 14) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showwlan1SecuritySettings14(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 14) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 14) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 14) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 14) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wlan1wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wlan1wparadius-settings-panel' + i );
          img = document.getElementById( 'wlan1expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 14 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 14 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showWlan1MacAuthSettings14(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 14) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('wlan1vwn_tagged_sta_mode_14').onclick = function() {
        var general_vlan = document.getElementById( 'wlan1vwn_general_vlan_mode_14' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('wlan1vwn_general_vlan_mode_14').onclick = function() {
        var vlan_trunk = document.getElementById( 'wlan1vwn_tagged_sta_mode_14' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="wlan1security-mode-id14" name="wlan1vlans.14.security" onchange="showwlan1SecuritySettings14(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="plain-text" selected="">
          None
          </option>
          
          <option value="wpa-personal">
          WPA Personal
          </option>
          <option value="wpa-enterprise">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="wlan1vwn_mac_auth_type_14" name="wlan1vlans.14.bss.mac-acl-auth-type" onchange="showWlan1MacAuthSettings14(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
      <td align="left" valign="middle">
      <img id="wlan1expand14" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src =&#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if(this.src.indexOf(&#39;expand&#39;) != -1) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if(this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;wlan1security-mode-id14&#39; ); showwlan1SecuritySettings14(s.options[s.selectedIndex].value); this.src =&#39;collapse.gif&#39;; } else { showwlan1SecuritySettings14(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wlan1wpa-settings-panel14" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wpavlans14validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wpavlans14wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wpavlans14broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wpavlans14() {
  var preAuth = document.getElementById( 'wlan1wpavlans14pre_auth_container_id' );

  document.getElementById( 'wlan1wpavlans14wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wpavlans14()
{
  var mfp = document.getElementById( 'wlan1wpavlans14mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wpavlans14() {
  var mfp = document.getElementById( 'wlan1wpavlans14mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wpavlans14 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wpavlans14(); if( !this.checked ) {setPreAuthEnabledStatewlan1wpavlans14(); document.getElementById(&#39;wlan1wpavlans14wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wpavlans14wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wpavlans14();} else if( this.checked ) {document.getElementById(&#39;wlan1wpavlans14wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wpavlans14wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wpavlans14();}" name="wlan1vlans.14.wpa-allowed" id="wlan1wpavlans14wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wpavlans14(); if( !this.checked ) document.getElementById(&#39;wlan1wpavlans14wpa_version1_id&#39;).checked = true;" name="wlan1vlans.14.wpa2-allowed" id="wlan1wpavlans14wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wpavlans14wpa-cipher-tkip" name="wlan1vlans.14.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wpavlans14wpa-cipher-ccmp" name="wlan1vlans.14.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wlan1wpavlans14wpa-personal-key" maxlength="63" name="wlan1vlans.14.wpa-personal-key" value="">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wlan1wpavlans14broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wpavlans14&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.14.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wpavlans14mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wpavlans14mfp_not_reqd" name="wlan1vlans.14.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans14mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans14mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wpavlans14mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans14mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans14mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans14mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans14mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wpavlans14mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans14mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans14mfp_not_req_flag" type="hidden" name="wlan1vlans.14.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wpavlans14mfp_capable" name="wlan1vlans.14.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans14mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans14mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans14mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wpavlans14mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wpavlans14mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans14mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wpavlans14mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans14mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans14mfp_capable_flag" type="hidden" name="wlan1vlans.14.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wlan1wpavlans14mfp_reqd" name="wlan1vlans.14.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wpavlans14mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans14mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wpavlans14mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wpavlans14mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wpavlans14mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans14mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wpavlans14mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wpavlans14mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans14mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wpavlans14mfp_req_flag" type="hidden" name="wlan1vlans.14.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wlan1wparadius-settings-panel14" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wparadiusvlans14validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wparadiusvlans14wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wparadiusvlans14broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wparadiusvlans14() {
  var preAuth = document.getElementById( 'wlan1wparadiusvlans14pre_auth_container_id' );

  document.getElementById( 'wlan1wparadiusvlans14wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wparadiusvlans14()
{
  var mfp = document.getElementById( 'wlan1wparadiusvlans14mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wparadiusvlans14() {
  var mfp = document.getElementById( 'wlan1wparadiusvlans14mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wparadiusvlans14 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wparadiusvlans14(); if( !this.checked ) {setPreAuthEnabledStatewlan1wparadiusvlans14(); document.getElementById(&#39;wlan1wparadiusvlans14wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wparadiusvlans14wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wparadiusvlans14();} else if( this.checked ) {document.getElementById(&#39;wlan1wparadiusvlans14wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wparadiusvlans14wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wparadiusvlans14();}" name="wlan1vlans.14.wpa-allowed" id="wlan1wparadiusvlans14wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wparadiusvlans14(); if( !this.checked ) document.getElementById(&#39;wlan1wparadiusvlans14wpa_version1_id&#39;).checked = true;" name="wlan1vlans.14.wpa2-allowed" id="wlan1wparadiusvlans14wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wlan1wparadiusvlans14pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan1vlans.14.rsn-preauthentication" checked="" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wparadiusvlans14wpa-cipher-tkip" name="wlan1vlans.14.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wparadiusvlans14wpa-cipher-ccmp" name="wlan1vlans.14.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wparadiusvlans14mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wparadiusvlans14mfp_not_reqd" name="wlan1vlans.14.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans14mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans14mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wparadiusvlans14mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans14mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans14mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans14mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans14mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wparadiusvlans14mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans14mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans14mfp_not_req_flag" type="hidden" name="wlan1vlans.14.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wparadiusvlans14mfp_capable" name="wlan1vlans.14.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans14mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans14mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans14mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wparadiusvlans14mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans14mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans14mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wparadiusvlans14mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans14mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans14mfp_capable_flag" type="hidden" name="wlan1vlans.14.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wlan1wparadiusvlans14mfp_reqd" name="wlan1vlans.14.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wparadiusvlans14mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans14mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wparadiusvlans14mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wparadiusvlans14mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wparadiusvlans14mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans14mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wparadiusvlans14mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wparadiusvlans14mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans14mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wparadiusvlans14mfp_req_flag" type="hidden" name="wlan1vlans.14.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywlan1wparadiusvlans14() {
      var rs = document.getElementById( 'wlan1wparadiusvlans14radius-settings-grs' );
      document.getElementById('wlan1wparadiusvlans14use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wlan1wparadiusvlans14use-grs-input').value = document.getElementById('wlan1wparadiusvlans14use-grs-display').checked? "on" : "off";
     }




function wlan1wparadiusvlans14validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wlan1wparadiusvlans14broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wlan1wparadiusvlans14session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wlan1wparadiusvlans14use-grs-display').checked)
    {
       var domain = document.getElementById('wlan1wparadiusvlans14radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan1vlans.14.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wlan1wparadiusvlans14radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wlan1wparadiusvlans14radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wlan1wparadiusvlans14radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wlan1wparadiusvlans14radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans14key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans14key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans14key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans14key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans14key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans14key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans14key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans14key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wlan1wparadiusvlans14radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wlan1wparadiusvlans14radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wlan1wparadiusvlans14radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wlan1wparadiusvlans14radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans14key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans14key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans14key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans14key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wlan1wparadiusvlans14','wlan1vlans.14.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywlan1wparadiusvlans14 );
   </script>

<input id="wlan1wparadiusvlans14radius-key-flag" type="hidden" name="wlan1vlans.14.radius-key-flag" value="0">
<input id="wlan1wparadiusvlans14radius-key-flag1" type="hidden" name="wlan1vlans.14.radius-key-flag1" value="0">
<input id="wlan1wparadiusvlans14radius-key-flag2" type="hidden" name="wlan1vlans.14.radius-key-flag2" value="0">
<input id="wlan1wparadiusvlans14radius-key-flag3" type="hidden" name="wlan1vlans.14.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wlan1wparadiusvlans14use-grs-display" onclick="setRadiusSettingsDisplaywlan1wparadiusvlans14();" checked="">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wlan1wparadiusvlans14use-grs-input" name="wlan1vlans.14.global-radius" value="on">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wlan1wparadiusvlans14radius-settings-grs">
       <tbody style="color: rgb(128, 128, 128);"><tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Domain:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
         <input id="wlan1wparadiusvlans14radius-domain" type="text" class="text-input" name="wlan1vlans.14.radius-domain" value="" disabled="">
        </td>
       </tr>
       <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address Type:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
<input class="value" type="radio" name="wlan1vlans.14.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan1vlans.14.wpa-type2&#39;,&#39;wlan1wparadiusvlans14&#39;)" id="wlan1vlans.14.wparadius-ip-network-type2_ipv4" checked="" disabled="">
        IPv4
        <input class="value" type="radio" name="wlan1vlans.14.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan1vlans.14.wpa-type2&#39;,&#39;wlan1wparadiusvlans14&#39;)" id="wlan1vlans.14.wparadius-ip-network-type2_ipv6" disabled="">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan1vlans.14.wpa-type2" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans14radius-ip" type="text" class="text-input" name="wlan1vlans.14.radius-ip" value="192.168.1.1" disabled="">
        </td>
      </tr>
      <tr id="ipv4wlan1vlans.14.wpa-type21" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans14radius-backupone-ip" type="text" class="text-input" name="wlan1vlans.14.radius-backupone-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.14.wpa-type22" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans14radius-backuptwo-ip" type="text" class="text-input" name="wlan1vlans.14.radius-backuptwo-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.14.wpa-type23" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans14radius-backupthree-ip" type="text" class="text-input" name="wlan1vlans.14.radius-backupthree-ip" value="" disabled="">
        </td>
      </tr>
     
      <tr id="ipv6wlan1vlans.14.wpa-type2" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans14radius-ipv6" type="text" name="wlan1vlans.14.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan1vlans.14.wpa-type21" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans14radius-backupone-ipv6" type="text" name="wlan1vlans.14.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.14.wpa-type22" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans14radius-backuptwo-ipv6" type="text" name="wlan1vlans.14.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.14.wpa-type23" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans14radius-backupthree-ipv6" type="text" name="wlan1vlans.14.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans14key-field" type="password" name="wlan1vlans.14.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans14radius-key-flag&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans14key-field1" type="password" name="wlan1vlans.14.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans14radius-key-flag1&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans14key-field2" type="password" name="wlan1vlans.14.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans14radius-key-flag2&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans14key-field3" type="password" name="wlan1vlans.14.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans14radius-key-flag3&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript" style="color: rgb(128, 128, 128);">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.1.1";
  var encrypted_key = "393437643137626564353634633939366665376537653661623837303264336133333465363234633630653639303761336531613166316130376635393738323235306563383336303137323965646332303863383163366137663834613962623863323264333162393162316136373032663165306335343938306566343200";
  var key = "wlan1wparadiusvlans14key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans14key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans14key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans14key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" colspan="3" nowrap="" style="color: rgb(128, 128, 128);">
          <input type="checkbox" name="wlan1vlans.14.radius-accounting" disabled="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan1vlans.14.radius-current" size="1">
       <option value="primary">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans14broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans14&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.14.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans14session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans14&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan1vlans.14.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan1vlans.14."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan1vlans.14."+"wpa"+"-type2","wlan1wparadiusvlans14");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan1vlans.14."+"wpa"+"-type2","wlan1wparadiusvlans14");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
    <tr class="single-select-row" valign="top">
      <td class="section-cell" width="1">
        15
      </td>
	
        
	
      <td class="section-cell" align="center" width="1">
        <script language="javascript" type="text/javascript">
          function setwlan1EntryEnabledStates15() {
            var enabledCheckBox = document.getElementById( 'wlan1vwn_enabled_15' );
            if( enabledCheckBox.disabled ) return;
            var disabled = !enabledCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'vwn_wlan1hstatus_15' ).value = "down";
            } else {
              document.getElementById( 'vwn_wlan1hstatus_15' ).value = "up";
            }
            document.getElementById( 'wlan1vwn_id_15' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_ssid_15' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_broadcast_ssid_15' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_dscp_prio_15' ).disabled = disabled;
            document.getElementById( 'wlan1bss_dscp_prio_15' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_tagged_sta_mode_15' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_mode_15' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_general_vlan_id_15' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_station_isolation_15' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_prio_15' ).disabled = disabled;

            
            
              document.getElementById( 'wlan1vwn_band_steer_15' ).disabled = disabled;
            

            document.getElementById( 'wlan1vwn_rrm_mode_15' ).disabled = disabled;
            document.getElementById( 'wlan1security-mode-id15' ).disabled = disabled;
            document.getElementById( 'wlan1vwn_mac_auth_type_15' ).disabled = disabled;
            //[Remove to improve performance] var wep_settings = document.getElementById( 'wlan1wep-settings-panel15' );
            //[Remove to improve performance] var dot1x_settings = document.getElementById( 'wlan1dot1x-settings-panel15' );
            //[Remove to improve performance] var wpa_settings = document.getElementById( 'wlan1wpa-settings-panel15' );
            //[Remove to improve performance] var wparadius_settings = document.getElementById( 'wlan1wparadius-settings-panel15' );
            var expander = document.getElementById( 'wlan1expand15' );
            
            if( disabled ) {
              expander.ds_onclick = expander.onclick;
              expander.onclick = function() {};
              //[Do this check so page loads quicker]
              if (arguments[0] == 1) {
                  showwlan1SecuritySettings15("close-all");
              }
            }
            else if( expander.ds_onclick ) {
              expander.onclick = expander.ds_onclick;
            }
          }
          addOnLoadHandler( setwlan1EntryEnabledStates15 );
        </script>

        <input class="input-checkbox" type="checkbox" id="wlan1vwn_enabled_15" name="wlan1vlans.15.bss.status" value="up" onclick="setwlan1EntryEnabledStates15(1);"> 

        <input type="hidden" name="wlan1vlans.15.bss.row" value="15">
        <input type="hidden" id="vwn_wlan1hstatus_15" name="wlan1vlans.15.bss.hstatus" value="down">
      </td>
      <td class="section-cell" width="1">
        
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
            
          
        
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_id_15" name="wlan1vlans.15.interface.vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" width="1">
        
        <input class="input-text" type="text" size="28" maxlength="32" id="wlan1vwn_ssid_15" name="wlan1vlans.15.interface.ssid" value="Virtual Access Point 15" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_broadcast_ssid_15" name="wlan1vlans.15.bss.ignore-broadcast-ssid" value="off" onclick="setWlan1BroadcastSSID15(1);" checked="" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_station_isolation_15" name="wlan1vlans.15.bss.station-isolation" value="on" checked="" disabled="">
      </td>
      
      
      <td class="section-cell" align="center" width="1">
        
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
        
          
            
          
        
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_band_steer_15" name="wlan1vlans.15.vap.band-steer-mode" value="down" onclick="setwlan1EntryBandSteerMode15(1);" disabled="">
      </td>
      
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_rrm_mode_15" name="wlan1vlans.15.bss.rrm-mode" value="off" onclick="this.value = this.checked? &#39;on&#39; : &#39;off&#39;" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_dscp_prio_15" checked="" onclick="clickWlan1BssDcspPrio(&#39;15&#39;)" disabled="">
        <input type="hidden" id="wlan1bss_dscp_prio_15" name="wlan1vlans.15.bss.dscp-prio" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_tagged_sta_mode_15" name="wlan1vlans.15.bss.tagged-sta-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-checkbox" type="checkbox" id="wlan1vwn_general_vlan_mode_15" name="wlan1vlans.15.bss.general-vlan-mode" value="on" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <input class="input-text" type="text" size="4" maxlength="4" id="wlan1vwn_general_vlan_id_15" name="wlan1vlans.15.bss.general-vlan-id" value="1" disabled="">
      </td>
      <td class="section-cell" align="center" width="1">
        <select id="wlan1vwn_prio_15" name="wlan1vlans.15.interface.vlan-prio" disabled="">
            <option value="0" selected="">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <script type="text/javascript" language="javascript">
      
      
      function setwlan1EntryBandSteerMode15() {
            var bandsteerCheckBox = document.getElementById( 'wlan1vwn_band_steer_15' );
            if( bandsteerCheckBox.disabled ) return;
            var disabled = !bandsteerCheckBox.checked;

            if( disabled ) {
              document.getElementById( 'wlan1vwn_band_steer_15' ).value = "down";
            } else {
              document.getElementById( 'wlan1vwn_band_steer_15' ).value = "up";
            }
      }
      

      function setWlan1BroadcastSSID15()
      {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          var broadcast_ssid = document.getElementById( 'wlan1vwn_broadcast_ssid_15' ).checked;
          if ((wps_vap == 15) && (broadcast_ssid != true))
          {
            alert("Disabling broadcast ssid on this WPS enabled VAP will operationally disable WPS");
          }
        }
        return true;
      }
      function showwlan1SecuritySettings15(val) {
        var wep;
        var wpa;
        var img;
        var i;
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 15) && (val == "plain-text"))
          {
            alert("Setting security to open is not a recommended configuration");
          }
          else if ((wps_vap == 15) && (val == "static-wep"))
          {
            alert("Setting security to WEP on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 15) && (val == "dot1x"))
          {
            alert("Setting security to 802.1x on this WPS enabled VAP will operationally disable WPS");
          }
          else if ((wps_vap == 15) && (val == "wpa-enterprise"))
          {
            alert("Setting security to WPA Enterprise on this WPS enabled VAP will operationally disable WPS");
          }
        }
        for( i = 0; i < 16; i++ ) {
          
          wpa = document.getElementById( 'wlan1wpa-settings-panel' + i );
          wparadius = document.getElementById( 'wlan1wparadius-settings-panel' + i );
          img = document.getElementById( 'wlan1expand' + i );
      
          
          if( wpa ) wpa.style.display = (i != 15 || arguments[0] != "wpa-personal") ? "none" : "";
          if( wparadius ) wparadius.style.display = (i != 15 || arguments[0] != "wpa-enterprise") ? "none" : "";
        
          if( wpa.style.display == "none" &&
              
              wparadius.style.display == "none" ) {
            img.src = "expand.gif";
          }
          else {
            img.src = "collapse.gif";
          }
        }
      }
      function showWlan1MacAuthSettings15(val) {
        var wps_vap = document.getElementById ('hid_vap_id').value;
        var wps_radio = document.getElementById ('hid_radio').value;
        if ((wps_vap != "") && (wps_radio == "wlan1"))
        {
          if ((wps_vap == 15) && (val != "disable"))
          {
            alert("Enabling MAC Auth on this WPS enabled VAP will operationally disable WPS");
          }
        }
      }
      document.getElementById('wlan1vwn_tagged_sta_mode_15').onclick = function() {
        var general_vlan = document.getElementById( 'wlan1vwn_general_vlan_mode_15' );
        if(general_vlan != undefined)
        {
          if(this.checked == false)
            general_vlan.checked = false;
        }
        return true;
      }
      document.getElementById('wlan1vwn_general_vlan_mode_15').onclick = function() {
        var vlan_trunk = document.getElementById( 'wlan1vwn_tagged_sta_mode_15' );
        if(vlan_trunk != undefined)
        {
          if(this.checked == true)
            vlan_trunk.checked = true;
        }
        return true;
      };
    </script>
        <select id="wlan1security-mode-id15" name="wlan1vlans.15.security" onchange="showwlan1SecuritySettings15(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="plain-text" selected="">
          None
          </option>
          
          <option value="wpa-personal">
          WPA Personal
          </option>
          <option value="wpa-enterprise">
          WPA Enterprise
          </option>
        </select>
      </td>
      <td class="section-cell" width="1">
        <select id="wlan1vwn_mac_auth_type_15" name="wlan1vlans.15.bss.mac-acl-auth-type" onchange="showWlan1MacAuthSettings15(this.selectedIndex &gt;= 0 ? this.options[this.selectedIndex].value : foo);" disabled="">
          <option value="disable" selected="">
          Disabled                             <!-- LVL7 -->
          </option>
          <option value="local">
          Local                                  <!-- LVL7 -->
          </option>
          <option value="radius">
          RADIUS                                <!-- LVL7 -->
          </option>
        </select>
      </td>
      <td align="left" valign="middle">
      <img id="wlan1expand15" src="./expand.gif" align="left" onmouseover="if( this.src.indexOf(&#39;expand&#39;) != -1 ) this.src =&#39;expand-over.gif&#39;; else this.src = &#39;collapse-over.gif&#39;;" onmouseout="if(this.src.indexOf(&#39;expand&#39;) != -1) this.src = &#39;expand.gif&#39;; else this.src = &#39;collapse.gif&#39;;" onclick="if(this.src.indexOf( &#39;expand&#39; ) != -1 ) { var s = document.getElementById( &#39;wlan1security-mode-id15&#39; ); showwlan1SecuritySettings15(s.options[s.selectedIndex].value); this.src =&#39;collapse.gif&#39;; } else { showwlan1SecuritySettings15(); this.src = &#39;expand.gif&#39;; }">
    </td>
  </tr>
  <tr>
      <td class="section-cell" align="left" colspan="4"></td>
      <td class="section-cell" align="left" colspan="5">
        <table><tbody><tr><td>
        
        <div class="default-box" id="wlan1wpa-settings-panel15" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wpavlans15validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wpavlans15wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wpavlans15broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wpavlans15() {
  var preAuth = document.getElementById( 'wlan1wpavlans15pre_auth_container_id' );

  document.getElementById( 'wlan1wpavlans15wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wpavlans15()
{
  var mfp = document.getElementById( 'wlan1wpavlans15mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wpavlans15() {
  var mfp = document.getElementById( 'wlan1wpavlans15mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wpavlans15 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wpavlans15(); if( !this.checked ) {setPreAuthEnabledStatewlan1wpavlans15(); document.getElementById(&#39;wlan1wpavlans15wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wpavlans15wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wpavlans15();} else if( this.checked ) {document.getElementById(&#39;wlan1wpavlans15wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wpavlans15wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wpavlans15();}" name="wlan1vlans.15.wpa-allowed" id="wlan1wpavlans15wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wpavlans15(); if( !this.checked ) document.getElementById(&#39;wlan1wpavlans15wpa_version1_id&#39;).checked = true;" name="wlan1vlans.15.wpa2-allowed" id="wlan1wpavlans15wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wpavlans15wpa-cipher-tkip" name="wlan1vlans.15.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wpavlans15wpa-cipher-ccmp" name="wlan1vlans.15.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
  <tr>
    <td colspan="99">
      &nbsp;
    </td>
  </tr>
  <tr>
    <td class="label">
    Key:&nbsp;
    </td>
    <td class="label" colspan="3">
    <input type="password" id="wlan1wpavlans15wpa-personal-key" maxlength="63" name="wlan1vlans.15.wpa-personal-key" value="">
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
    <td colspan="3" nowrap="">
    <input id="wlan1wpavlans15broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wpavlans15&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.15.broadcast-key-refresh-rate" value="0">
                &nbsp;<span>(Range:0-86400)</span>               
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wpavlans15mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wpavlans15mfp_not_reqd" name="wlan1vlans.15.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans15mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans15mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wpavlans15mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans15mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans15mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans15mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans15mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wpavlans15mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans15mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans15mfp_not_req_flag" type="hidden" name="wlan1vlans.15.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wpavlans15mfp_capable" name="wlan1vlans.15.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wpavlans15mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans15mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wpavlans15mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wpavlans15mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wpavlans15mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wpavlans15mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wpavlans15mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans15mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wpavlans15mfp_capable_flag" type="hidden" name="wlan1vlans.15.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label">
             <input type="checkbox" id="wlan1wpavlans15mfp_reqd" name="wlan1vlans.15.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wpavlans15mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wpavlans15mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wpavlans15mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wpavlans15mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wpavlans15mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans15mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wpavlans15mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wpavlans15mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wpavlans15mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wpavlans15mfp_req_flag" type="hidden" name="wlan1vlans.15.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

        </div>
        <div class="default-box" id="wlan1wparadius-settings-panel15" style="display: none;">
            
<script type="text/javascript" language="javascript">

// needed localizable resource strings
resourceDictionary.Messages.StrLenRng = "The string is %1 characters long, but must be between %2 and %3 characters long.";
resourceDictionary.Messages.CharsNotAllwd = "The following characters are not allowed: %s";

function wlan1wparadiusvlans15validateWpaPsk(title) {
    var key = document.getElementById( 'wlan1wparadiusvlans15wpa-personal-key' ).value;
    var msg = "";
    if (! isValidWpaPskPassPhrase(key)) {
       var format = "The WPA-PSK key is incorrect: %1";
       var param = new Array(); param[0] = getInvalidWpaPskPassPhraseReason(key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        msg = "There is a problem with the WPA-PSK key:\n" + msg;
    }

    var b_key = document.getElementById( 'wlan1wparadiusvlans15broadcast-key-refresh-rate' ).value;
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (msg.length > 0) {
        if( title )
          msg = title + "\n" + msg;
    }
    return msg;
}

function setPreAuthEnabledStatewlan1wparadiusvlans15() {
  var preAuth = document.getElementById( 'wlan1wparadiusvlans15pre_auth_container_id' );

  document.getElementById( 'wlan1wparadiusvlans15wpa_version2_id' ).checked ? revertDisableChildren( preAuth ) : disableChildren( preAuth );
}

function setMFPEnablewlan1wparadiusvlans15()
{
  var mfp = document.getElementById( 'wlan1wparadiusvlans15mfp' );
  mfp.style.display = "";
  mfp.disabled = false;
}

function setMFPDisablewlan1wparadiusvlans15() {
  var mfp = document.getElementById( 'wlan1wparadiusvlans15mfp' );
  mfp.style.display = "none";
  mfp.disabled = true;
}

addOnLoadHandler( setPreAuthEnabledStatewlan1wparadiusvlans15 );
</script>

<table border="0" cellspacing="0" cellpadding="0">
  
  <tbody><tr>
    <td class="label">
    WPA Versions:&nbsp;
    </td>
    <td class="label" colspan="3">
      <input type="checkbox" onclick="checkFBT(this);setPreAuthEnabledStatewlan1wparadiusvlans15(); if( !this.checked ) {setPreAuthEnabledStatewlan1wparadiusvlans15(); document.getElementById(&#39;wlan1wparadiusvlans15wpa-cipher-tkip&#39;).value = &#39;off&#39;;document.getElementById(&#39;wlan1wparadiusvlans15wpa-cipher-tkip&#39;).disabled=true;setMFPEnablewlan1wparadiusvlans15();} else if( this.checked ) {document.getElementById(&#39;wlan1wparadiusvlans15wpa-cipher-tkip&#39;).value = &#39;on&#39;;document.getElementById(&#39;wlan1wparadiusvlans15wpa-cipher-tkip&#39;).disabled=false;setMFPDisablewlan1wparadiusvlans15();}" name="wlan1vlans.15.wpa-allowed" id="wlan1wparadiusvlans15wpa_version1_id" checked="">WPA-TKIP
	
	<span style="margin:30px">&nbsp;</span>
      <input type="checkbox" onclick="setPreAuthEnabledStatewlan1wparadiusvlans15(); if( !this.checked ) document.getElementById(&#39;wlan1wparadiusvlans15wpa_version1_id&#39;).checked = true;" name="wlan1vlans.15.wpa2-allowed" id="wlan1wparadiusvlans15wpa_version2_id" checked="" disabled="">WPA2-AES
    </td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td class="label" id="wlan1wparadiusvlans15pre_auth_container_id" colspan="3">
    <input type="checkbox" name="wlan1vlans.15.rsn-preauthentication" checked="" onclick="checkFBT(this);">
    Enable Pre-authentication
    </td>
  </tr>
  
  
  <tr>
    <td class="label" style="display:none">
    Cipher Suites:&nbsp;
    </td>
    <td class="label">
    <input type="hidden" id="wlan1wparadiusvlans15wpa-cipher-tkip" name="wlan1vlans.15.wpa-cipher-tkip" value="on">
    </td>
    <td class="label" colspan="2">
    <input type="hidden" id="wlan1wparadiusvlans15wpa-cipher-ccmp" name="wlan1vlans.15.wpa-cipher-ccmp" value="on" disabled="">
    </td>
  </tr>
  
<!-- this is needed for both wpa-personal/wpa-enterprise hence no interface check -->
 <tr id="wlan1wparadiusvlans15mfp" style="display: none;">
           <td class="label">MFP</td>
           <td class="label">
             
             <input type="checkbox" id="wlan1wparadiusvlans15mfp_not_reqd" name="wlan1vlans.15.ui-mfp-not-reqd" checked="" onclick="checkMfpFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans15mfp_capable&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans15mfp_capable&#39;).disabled = false; document.getElementById(&#39;wlan1wparadiusvlans15mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans15mfp_not_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans15mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans15mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans15mfp_capable&#39;).checked=true; document.getElementById(&#39;wlan1wparadiusvlans15mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans15mfp_capable_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans15mfp_not_req_flag" type="hidden" name="wlan1vlans.15.mfp-not-req-flag" value="0"> 

              Not Required
		   </td>
		   <td class="label">		 
             <input type="checkbox" id="wlan1wparadiusvlans15mfp_capable" name="wlan1vlans.15.ui-mfp-capable" onclick="checkFBT(this); if(this.checked){document.getElementById(&#39;wlan1wparadiusvlans15mfp_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans15mfp_not_reqd&#39;).checked = false; document.getElementById(&#39;wlan1wparadiusvlans15mfp_capable_flag&#39;).value = &#39;1&#39;; document.getElementById(&#39;wlan1wparadiusvlans15mfp_not_req_flag&#39;).value =&#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans15mfp_req_flag&#39;).value = &#39;0&#39;;} else{document.getElementById(&#39;wlan1wparadiusvlans15mfp_not_reqd&#39;).checked =true; document.getElementById(&#39;wlan1wparadiusvlans15mfp_capable_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans15mfp_not_req_flag&#39;).value = &#39;1&#39;;}">
              <input id="wlan1wparadiusvlans15mfp_capable_flag" type="hidden" name="wlan1vlans.15.mfp-capable-flag" value="0"> 

                 Capable
		   </td>
		   <td class="label" style="display: none;">
             <input type="checkbox" id="wlan1wparadiusvlans15mfp_reqd" name="wlan1vlans.15.ui-mfp-reqd" onclick="checkFBT(this); if(this.checked) {document.getElementById(&#39;wlan1wparadiusvlans15mfp_req_flag&#39;).value = &#39;1&#39;;document.getElementById(&#39;wlan1wparadiusvlans15mfp_capable&#39;).checked = true; document.getElementById(&#39;wlan1wparadiusvlans15mfp_capable&#39;).disabled=true; document.getElementById(&#39;wlan1wparadiusvlans15mfp_not_reqd&#39;).checked=false; document.getElementById(&#39;wlan1wparadiusvlans15mfp_not_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans15mfp_capable_flag&#39;).value = &#39;0&#39;} else{document.getElementById(&#39;wlan1wparadiusvlans15mfp_capable&#39;).disabled=false;document.getElementById(&#39;wlan1wparadiusvlans15mfp_req_flag&#39;).value = &#39;0&#39;; document.getElementById(&#39;wlan1wparadiusvlans15mfp_capable_flag&#39;).value = &#39;1&#39;}">

              <input id="wlan1wparadiusvlans15mfp_req_flag" type="hidden" name="wlan1vlans.15.mfp-req-flag" value="0"> 

                 Required
           </td>
           <td></td>
 </tr>
</tbody></table>

            
   <script type="text/javascript" language="javascript"> 
     function setRadiusSettingsDisplaywlan1wparadiusvlans15() {
      var rs = document.getElementById( 'wlan1wparadiusvlans15radius-settings-grs' );
      document.getElementById('wlan1wparadiusvlans15use-grs-display').checked ? disableChildren( rs ) : revertDisableChildren( rs );
       document.getElementById('wlan1wparadiusvlans15use-grs-input').value = document.getElementById('wlan1wparadiusvlans15use-grs-display').checked? "on" : "off";
     }




function wlan1wparadiusvlans15validateWpaEnterprise(title) {
    var b_key = document.getElementById( 'wlan1wparadiusvlans15broadcast-key-refresh-rate' ).value;
    var s_key = document.getElementById( 'wlan1wparadiusvlans15session-key-refresh-rate' ).value;
    var msg = "";
    if (! isValidKeyRefreshRate(b_key)) {
       var format = "The Broadcast Key Refresh Rate is incorrect:  The value should be in the range of 0 - 86400.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(b_key);
       msg += formatOrderedResourceString( format, param );
    }

    if (! isValidSessionKeyRefreshRate (s_key)) {
       var format = "The Session Key Refresh Rate is incorrect:  The value should be in the range of 30 - 86400.0 to disable session key refresh.";
       var param = new Array(); param[0] = getInvalidKeyRefreshRateReason(s_key);
       msg += formatOrderedResourceString( format, param );
    }
    if (msg.length > 0) {
        msg = "There is a problem with the Key Refresh Rate:\n" + msg;
        if( title )
          msg = title + "\n" + msg;
    }
    if(!document.getElementById('wlan1wparadiusvlans15use-grs-display').checked)
    {
       var domain = document.getElementById('wlan1wparadiusvlans15radius-domain').value;
       var err = checkDomainName(domain);
       if (domain.length && err.length) {
           message = "Invalid RADIUS Domain for " + title + ": " + err;
           return message;
       }
       if(document.getElementById('wlan1vlans.15.' + 'wpa' + 'radius-ip-network-type2_ipv4').checked) {
	    var ipv_addr =  document.getElementById('wlan1wparadiusvlans15radius-ip').value;
	    var ipv_addr1 =  document.getElementById('wlan1wparadiusvlans15radius-backupone-ip').value;
	    var ipv_addr2 =  document.getElementById('wlan1wparadiusvlans15radius-backuptwo-ip').value;
	    var ipv_addr3 =  document.getElementById('wlan1wparadiusvlans15radius-backupthree-ip').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans15key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans15key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans15key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans15key-field3').value;


	    if(!((ipv_addr != "" && key_0 != "") ||( ipv_addr1 != "" && key_1 != "") || (ipv_addr2 != "" &&  key_2 != "") || (ipv_addr3 == "" && key_3 != "" )))
	    {
		    message = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return message;
	    }

	    var ipv4Msg = "";
	    if(ipv_addr != ""){
		    ipv4Msg = isValidIPAddress(ipv_addr);
		    if(ipv4Msg != "")
		    {
			    var message = "Invalid RADIUS IP Address: " + ipv4Msg ; 
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr1);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 1: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr2);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 2: " + ipv4Msg ;
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != "") {
		    ipv4Msg = isValidIPAddress(ipv_addr3);
		    if(ipv4Msg != "")
		    {
			    var format = "Local RADIUS IP Address %s of %s is invalid";
			    var message = "Invalid RADIUS IP Address 3: " + ipv4Msg ;
			    return message + "\n"; 
		    }
	    }
	    if(ipv_addr != null && ipv_addr.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans15key-field').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("1", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr1 != null && ipv_addr1.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans15key-field1').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("2", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr2 != null && ipv_addr2.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans15key-field2').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("3", title) );
			    return message + "\n";
		    }
	    }
	    if(ipv_addr3 != null && ipv_addr3.length != 0)
	    {
		    var key = document.getElementById('wlan1wparadiusvlans15key-field3').value;
		    if(key == null || key.length == 0)
		    {
			    var format = "Invalid Local RADIUS Key %s on VAP %s. The valid key range is from 1 to 64 characters and cannot contain leading or trailing spaces.";
			    var message = formatResourceString( format, new Array("4", title) );
			    return message + "\n";
		    }
	    }
        }
        else {
	    
	    var ipv6_addr =  document.getElementById('wlan1wparadiusvlans15radius-ipv6').value;
	    var ipv6_addr1 =  document.getElementById('wlan1wparadiusvlans15radius-backupone-ipv6').value;
	    var ipv6_addr2 =  document.getElementById('wlan1wparadiusvlans15radius-backuptwo-ipv6').value;
	    var ipv6_addr3 =  document.getElementById('wlan1wparadiusvlans15radius-backupthree-ipv6').value;
	    var key_0 = document.getElementById('wlan1wparadiusvlans15key-field').value;
	    var key_1 = document.getElementById('wlan1wparadiusvlans15key-field1').value;
	    var key_2 = document.getElementById('wlan1wparadiusvlans15key-field2').value;
	    var key_3 = document.getElementById('wlan1wparadiusvlans15key-field3').value;

	    if(!((ipv6_addr != "" && key_0 != "") ||( ipv6_addr1 != "" && key_1 != "") || (ipv6_addr2 != "" &&  key_2 != "") || (ipv6_addr3 == "" && key_3 != "" )))
	    {
		    msg = "In order for WPA Enterprise Security to be effective, at least one IP Address and corresponding key must be configured for "+title+"." ;
		    return msg;
	    }

	    var msgIPv6 = "";  

	    if(ipv6_addr != "")
	    {
		    msgIPv6 = isValidIpv6Address(ipv6_addr);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address: " + msgIPv6 ;
	    } 
	    if(msgIPv6 =="" && ipv6_addr1 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr1);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 1: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr2 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr2);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 2: " + msgIPv6 ;
	    }
	    if(msgIPv6 =="" && ipv6_addr3 != ""){
		    msgIPv6 = isValidIpv6Address(ipv6_addr3);
		    if(msgIPv6 != "") msgIPv6 = "Invalid RADIUS IPv6 Address 3: " + msgIPv6 ;
	    }
	    if(msgIPv6!= "")
	    {
		    msg = msgIPv6 +"\n"+msg;
		    return msg;
	    }


	    
        }
	msg += validateRADIUSKeys('wlan1wparadiusvlans15','wlan1vlans.15.' + 'wpa' + 'radius-ip-network-type2_ipv4');
	return msg;
    }
    return msg;
}


    addOnLoadHandler( setRadiusSettingsDisplaywlan1wparadiusvlans15 );
   </script>

<input id="wlan1wparadiusvlans15radius-key-flag" type="hidden" name="wlan1vlans.15.radius-key-flag" value="0">
<input id="wlan1wparadiusvlans15radius-key-flag1" type="hidden" name="wlan1vlans.15.radius-key-flag1" value="0">
<input id="wlan1wparadiusvlans15radius-key-flag2" type="hidden" name="wlan1vlans.15.radius-key-flag2" value="0">
<input id="wlan1wparadiusvlans15radius-key-flag3" type="hidden" name="wlan1vlans.15.radius-key-flag3" value="0">

  <table class="default-box" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr class="section-header">
    <td class="label" colspan="3" nowrap="">
      
      <input type="checkbox" id="wlan1wparadiusvlans15use-grs-display" onclick="setRadiusSettingsDisplaywlan1wparadiusvlans15();" checked="">
      Use Global RADIUS Server Settings
      <input type="hidden" id="wlan1wparadiusvlans15use-grs-input" name="wlan1vlans.15.global-radius" value="on">
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <table id="wlan1wparadiusvlans15radius-settings-grs">
       <tbody style="color: rgb(128, 128, 128);"><tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Domain:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
         <input id="wlan1wparadiusvlans15radius-domain" type="text" class="text-input" name="wlan1vlans.15.radius-domain" value="" disabled="">
        </td>
       </tr>
       <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address Type:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
<input class="value" type="radio" name="wlan1vlans.15.wparadius-ip-network" value="ipv4" onclick="grsVapRadiusRadioEnable(&#39;ipv4&#39;,&#39;wlan1vlans.15.wpa-type2&#39;,&#39;wlan1wparadiusvlans15&#39;)" id="wlan1vlans.15.wparadius-ip-network-type2_ipv4" checked="" disabled="">
        IPv4
        <input class="value" type="radio" name="wlan1vlans.15.wparadius-ip-network" value="ipv6" onclick="grsVapRadiusRadioEnable(&#39;ipv6&#39;,&#39;wlan1vlans.15.wpa-type2&#39;,&#39;wlan1wparadiusvlans15&#39;)" id="wlan1vlans.15.wparadius-ip-network-type2_ipv6" disabled="">
        IPv6
        </td>
      </tr>

      <tr id="ipv4wlan1vlans.15.wpa-type2" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans15radius-ip" type="text" class="text-input" name="wlan1vlans.15.radius-ip" value="192.168.1.1" disabled="">
        </td>
      </tr>
      <tr id="ipv4wlan1vlans.15.wpa-type21" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans15radius-backupone-ip" type="text" class="text-input" name="wlan1vlans.15.radius-backupone-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.15.wpa-type22" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans15radius-backuptwo-ip" type="text" class="text-input" name="wlan1vlans.15.radius-backuptwo-ip" value="" disabled="">
        </td>
      </tr>
       <tr id="ipv4wlan1vlans.15.wpa-type23" style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IP Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans15radius-backupthree-ip" type="text" class="text-input" name="wlan1vlans.15.radius-backupthree-ip" value="" disabled="">
        </td>
      </tr>
     
      <tr id="ipv6wlan1vlans.15.wpa-type2" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans15radius-ipv6" type="text" name="wlan1vlans.15.radius-ipv6" value="::" maxlength="39" size="40" disabled="">
        </td>
      </tr>
      <tr id="ipv6wlan1vlans.15.wpa-type21" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans15radius-backupone-ipv6" type="text" name="wlan1vlans.15.radius-backupone-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.15.wpa-type22" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans15radius-backuptwo-ipv6" type="text" name="wlan1vlans.15.radius-backuptwo-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
       <tr id="ipv6wlan1vlans.15.wpa-type23" style="display: none; color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS IPv6 Address-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans15radius-backupthree-ipv6" type="text" name="wlan1vlans.15.radius-backupthree-ipv6" value="" maxlength="39" size="40" disabled="">
        </td>
      </tr>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans15key-field" type="password" name="wlan1vlans.15.radius-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans15radius-key-flag&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-1:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans15key-field1" type="password" name="wlan1vlans.15.radius-backupone-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans15radius-key-flag1&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-2:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans15key-field2" type="password" name="wlan1vlans.15.radius-backuptwo-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans15radius-key-flag2&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      <tr style="color: rgb(128, 128, 128);">
        <td class="label" nowrap="" style="color: rgb(128, 128, 128);">RADIUS Key-3:&nbsp;</td>
        <td style="color: rgb(128, 128, 128);">
        <input id="wlan1wparadiusvlans15key-field3" type="password" name="wlan1vlans.15.radius-backupthree-key" maxlength="64" value="********" onchange="javascript:document.getElementById(&#39;wlan1wparadiusvlans15radius-key-flag3&#39;).value = &#39;1&#39;;" disabled="">
        </td>
      </tr>
      
      
<script type="text/javascript" language="javascript" style="color: rgb(128, 128, 128);">
  var is_ipv4 = 1;

  if("ipv4" == "ipv6")
     is_ipv4 = 0;

  var ip = "192.168.1.1";
  var encrypted_key = "393437643137626564353634633939366665376537653661623837303264336133333465363234633630653639303761336531613166316130376635393738323235306563383336303137323965646332303863383163366137663834613962623863323264333162393162316136373032663165306335343938306566343200";
  var key = "wlan1wparadiusvlans15key-field";

  if(!is_ipv4)
    ip = "::";
 
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
    document.getElementById(key).value = "";
  }

  if(is_ipv4)
    ip = "";
  else
    ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans15key-field1";

  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans15key-field2";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  if(is_ipv4)
	ip = "";
  else
	ip = "";

  encrypted_key = "";
  key = "wlan1wparadiusvlans15key-field3";
  
  if((ip == null || ip.length == 0 ) || (encrypted_key == null || encrypted_key.length == 0))
  {
	document.getElementById(key).value = "";
  }

  </script>
     

      <tr style="color: rgb(128, 128, 128);">
        <td class="label" colspan="3" nowrap="" style="color: rgb(128, 128, 128);">
          <input type="checkbox" name="wlan1vlans.15.radius-accounting" disabled="">
          Enable RADIUS Accounting
        </td>
      </tr>

      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="label" nowrap="">Active Server:&nbsp;</td>
     <td>
      <select name="wlan1vlans.15.radius-current" size="1">
       <option value="primary">RADIUS IP Address</option>
       <option value="backupone">RADIUS IP Address-1</option>
        <option value="backuptwo">RADIUS IP Address-2</option>
        <option value="backupthree">RADIUS IP Address-3</option>
     </select>
    </td>
  </tr>
      <tr>
        <td class="label" nowrap="">Broadcast Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans15broadcast-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans15&#39;, &#39;1&#39;)" type="text" class="broadcast-key-refresh-rate" name="wlan1vlans.15.broadcast-key-refresh-rate" value="0">
 </td><td>&nbsp;<span>(Range:0-86400)</span></td>                
 
      </tr>
      <tr>
        <td class="label" nowrap="">Session Key Refresh Rate &nbsp;</td>
        <td>
        <input id="wlan1wparadiusvlans15session-key-refresh-rate" maxlength="5" onkeyup="RefreshRate (&#39;wlan1wparadiusvlans15&#39;, &#39;0&#39;)" type="text" class="session-key-refresh-rate" name="wlan1vlans.15.session-key-refresh-rate" value="0">
 </td><td nowrap="nowrap">&nbsp;<span>(Range:30-86400, 0 Disables)</span></td>                
        
      </tr>
</tbody></table>

        </div>
        <script>
         obj = document.getElementById("wlan1vlans.15."+"wpa"+"radius-ip-network-type2_ipv4");
         if (obj.checked)
           grsVapRadiusRadioEnable('ipv4',"wlan1vlans.15."+"wpa"+"-type2","wlan1wparadiusvlans15");
         else
          grsVapRadiusRadioEnable('ipv6',"wlan1vlans.15."+"wpa"+"-type2","wlan1wparadiusvlans15");
        </script>
        </td></tr></tbody></table>
      </td>
    </tr>
    
  </tbody></table>
</td><td width="100%"></td></tr>
    
        
            
        
        <tr> 
           <td align="left" colspan="2"><br> Click “Update“ to save the new settings. <br> </td>
        </tr>       
        <!-- submit button for this page -->
        <tr>
            <td align="left" colspan="3">
                <input type="hidden" name="page" value="vwn">
                <input type="submit" class="input-submit" name="save_emul_elastix" value="Update">
            </td>
        </tr>

</tbody></table>
</div>


</form>

<!--- ...vwn.html -->

</td>
</tr>
</tbody></table>
</td>
<td width="4">&nbsp;</td>
<!-- call:print_page_help() -->

    
  
  
      
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
                
                    
                
                
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
      
  
  <td class="page-help" align="left" valign="top" width="20%">
    <img src="./page_help.gif" border="0" style="cursor: pointer;" onclick="window.open(&#39;admin.cgi?action=vwn_help&#39;, &#39;_blank&#39;, &#39;dependent=yes,resizable=yes,toolbar=no,status=no,menubar=no,height=675,width=675,scrollbars=yes&#39;); return false;">
    Use this page to configure Virtual Access Point settings. <br><br>By configuring VLANs here, you can create additional wireless networks on the same radio. For each new network, specify an SSID, VLAN ID, and Security mode. <br><br> <a href="http://192.168.31.108/admin.cgi?action=vwn#null" onclick="window.open(&#39; admin.cgi?action=vwn_help &#39;, &#39;_blank&#39;, &#39;dependent=yes,resizable=yes,toolbar=no,status=no,menubar=no,height=675,width=675,scrollbars=yes&#39;); return false">More</a> ...
  </td>

</tr>
</tbody></table>
</td>
</tr>
</tbody></table>




</body></html>
