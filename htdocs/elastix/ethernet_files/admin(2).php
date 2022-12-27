
<!-- saved from url=(0014)about:internet -->
<html><!--- system.html... --><!--- ...system.html --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
	selectTabInMenu("system");
	</script>
	<style type="text/css">
	.A {
		padding: 0px 6px 0px 6px;
	}
	</style>


<!--- system.html... -->

<script type="text/javascript">
            // make sure that needed localizable strings are avialable to external JavaScript.
            resourceDictionary.Messages.AddrBlnk = "Address is blank.";
            resourceDictionary.Messages.AddrDBcst = "Address is directed broadcast (host part is all ones).";
            resourceDictionary.Messages.AddrGW = "IP Address and Gateway are not on the same subnet.";
            resourceDictionary.Messages.AddrGW2 = "IP Address and Gateway are the same.";
            resourceDictionary.Messages.AddrLcl = "Address is on local network (0.x.x.x).";
            resourceDictionary.Messages.AddrLcl2 = "Address is on local network (network part is all zeros).";
            resourceDictionary.Messages.AddrLmt = "Address is limited broadcast (255.255.255.255).";
            resourceDictionary.Messages.AddrNtNum = "Address is network number (host part is all zeros).";
            resourceDictionary.Messages.AddrLoopBck = "Address is loopback (127.x.x.x).";
            resourceDictionary.Messages.AddrMltcst = "Address is multicast (224.x.x.x - 239.x.x.x).";
            resourceDictionary.Messages.AddrRsrvd = "Address is reserved for future use (240.x.x.x - 255.x.x.x).";
            resourceDictionary.Messages.CharLttr = "A single-character value must be a letter.";
            resourceDictionary.Messages.CharLttr2 = "The first character must be a letter.";
            resourceDictionary.Messages.CharLttr3 = "The last character must be a letter or digit.";
            resourceDictionary.Messages.CharLttr4 = "The middle characters must be letters, digits, or hyphens.";
            resourceDictionary.Messages.MskNC = "Mask is non-contiguous.";
            resourceDictionary.Messages.OctInvld = "Octet %1 is invalid: %2";
            resourceDictionary.Messages.StrNotLen2 = "The value must be at most %s characters long.";
            resourceDictionary.Messages.StrNotLen3 = "The value must be at least %s character long.";
            resourceDictionary.Messages.ValNonNum = "The value contains a non-numerical character.";
            resourceDictionary.Messages.CharNoSp = "spaces are not allowed.";

            var oldElements;
            var indices;
            var dynamicDns;
         var oldvalues;
            var oldvaluesarray;
            var newvalues,newvaluesarray;

	    function getConnectionTypeRelatedElements() {
		    var elements = new Array(22);
		    addIpElements(elements, 0, 'lan');
		    addQuadElements(elements, 8, 'dnsOne');
		    addQuadElements(elements, 12, 'dnsTwo');
		    addQuadElements(elements, 16, 'gateway');
		    elements[20] = document.forms['update-container'].elements['dynamicDns'][0];
		    elements[21] = document.forms['update-container'].elements['dynamicDns'][1];

		    return elements;
	    }

function getDnsElements() {
	var elements = new Array(8);
	addQuadElements(elements, 0, 'dnsOne');
	addQuadElements(elements, 4, 'dnsTwo');
	return elements;
}
function configureUntaggedStatus ()
{
	if (document.getElementById("radio-untagged-disable").checked) {
		document.getElementById("Untagged-VLan-id").disabled = true;
	}
	else {
		document.getElementById("Untagged-VLan-id").disabled = false;
	}
}

            function toggleConnectionType(indicator) {
                var relatedElements = getConnectionTypeRelatedElements();
                if (indicator.value == 'staticIp') {
                    /* turn everything on */
                    enableElements(relatedElements);
                    /* backup dynamicDns value */
                    dynamicDns = document.forms['update-container'].elements['dynamicDns'][0].checked;
                    /* set dynamicDns to manual */
                    document.forms['update-container'].elements['dynamicDns'][0].checked = false;
                    document.forms['update-container'].elements['dynamicDns'][1].checked = true;
                    /* turn off dynamicDns selection */
                    document.forms['update-container'].elements['dynamicDns'][0].disabled = true;
                    document.forms['update-container'].elements['dynamicDns'][1].disabled = true;
                } else {
                    /* turn everything off */
                    disableElements(relatedElements);
                    /* restore dynamicDns value */
                    document.forms['update-container'].elements['dynamicDns'][0].checked = dynamicDns;
                    document.forms['update-container'].elements['dynamicDns'][1].checked = ! dynamicDns;
                    /* turn on dynamicDns selection */
                    document.forms['update-container'].elements['dynamicDns'][0].disabled = false;
                    document.forms['update-container'].elements['dynamicDns'][1].disabled = false;
                    /* update its value */
                    toggleDns(document.forms['update-container'].elements['dynamicDns'][0]);
                }
            }
			
			

            function toggleDns(indicator) {
                if (indicator.disabled) {
                    return;
                }
                var dnsElements = getDnsElements();
                if ((indicator.value == 'on' && indicator.checked)
                    || (indicator.value == 'off' && ! indicator.checked)) {
                    disableElements(dnsElements);
                } else {
                    enableElements(dnsElements);
                }
            }
			

            var globalField_downStroke;
            function move_to_nextfield(fieldName,nextFieldName,fieldLength)
            {
                var myForm=document.forms[document.forms.length - 1];
                var myField=myForm.elements[fieldName];
                myField.nextField=myForm.elements[nextFieldName];
                myField.maxLength=fieldLength;
                myField.onkeydown=keyDownEventHandler;
                myField.onkeyup=keyUpEventHandler;
            }

            function keyDownEventHandler()
            {
                if(this.beforeLength == this.maxLength)
                   this.beforeLength--;
                else
                   this.beforeLength=this.value.length;
                globalField_downStroke=this;
            }

            function keyUpEventHandler()
            {
                if (
                (this == globalField_downStroke) && 
                (this.value.length > this.beforeLength) && 
                (this.value.length >= this.maxLength)
                )
                {
                    this.beforeLength = this.value.length;
                    this.nextField.focus();
                    this.nextField.select(); 
                }
                globalField_downStroke=null;
            }

            function init() {
                oldvalues= new Array(37);

                dynamicDns = document.forms['update-container'].elements['dynamicDns'][0].checked;
                toggleConnectionType(document.forms['update-container'].elements['lanConnectionType']);
                toggleDns(document.forms['update-container'].elements['dynamicDns'][0]);

                configureUntaggedStatus();
                oldvaluesarray=document.getElementsByTagName("input");
                for(var x=0;x<oldvaluesarray.length;x++)
                {
                  if(oldvaluesarray[x].type == 'radio')
                        oldvalues[x]=oldvaluesarray[x].checked;
                  else
                        oldvalues[x]=oldvaluesarray[x].value;

                }
                move_to_nextfield('lanIp0','lanIp1',3);
                move_to_nextfield('lanIp1','lanIp2',3);
                move_to_nextfield('lanIp2','lanIp3',3);
                move_to_nextfield('lanIp3','lanNetmask0',3);
                move_to_nextfield('lanNetmask0','lanNetmask1',3);
                move_to_nextfield('lanNetmask1','lanNetmask2',3);
                move_to_nextfield('lanNetmask2','lanNetmask3',3);
                move_to_nextfield('lanNetmask3','gateway0',3);
                move_to_nextfield('gateway0','gateway1',3);
                move_to_nextfield('gateway1','gateway2',3);
                move_to_nextfield('gateway2','gateway3',3);
                move_to_nextfield('gateway3','dnsOne0',3);
                move_to_nextfield('dnsOne0','dnsOne1',3);
                move_to_nextfield('dnsOne1','dnsOne2',3);
                move_to_nextfield('dnsOne2','dnsOne3',3);
                move_to_nextfield('dnsOne3','dnsTwo0',3);
                move_to_nextfield('dnsTwo0','dnsTwo1',3);
                move_to_nextfield('dnsTwo1','dnsTwo2',3);
                move_to_nextfield('dnsTwo2','dnsTwo3',3);
            }
            function validateAccessPointName() {
                if (! isDomainLabelValid(document.forms['update-container'].elements['update.device.host.id'].value)) {
                    var format = "The Hostname is invalid: %s";
                    var reason = getInvalidDomainLabelReason(document.forms['update-container'].elements['update.device.host.id'].value);
                    var params = new Array(); // in case 'reason' is a number.
                    params[0] = reason;
                    var message = formatResourceString( format, params );
                    return message + "\n";
                } else {
                    return "";
                }
            }



function toggleUntaggedEnabled(status) {
    if (status == true) {
	    document.getElementById("Untagged-VLan-id").disabled = false;
    }
    else {
	    document.getElementById("Untagged-VLan-id").disabled = true;
    }
}

function checkUntaggedValue () {
  if ((document.getElementById("Untagged-VLan-id").disabled == false) &&
      (document.getElementById("Untagged-VLan-id").value == "")) {
	  document.getElementById("Untagged-VLan-id").value =
	      document.getElementById("Mgmt-VLan-id").value;
  }

	validateUntaggedVlanId ();
}

function validateUntaggedVlanId() {
	// Doing this validation here as this function will get called in
	// case when user has clicked updated button.
	if (document.getElementById("Untagged-VLan-id").disabled == true) {
		// Untagged vlan should not get vlan id if it's status is down.
		document.getElementById("Untagged-VLan-id").value = "";
		return "";
	}
	else if (document.getElementById("Untagged-VLan-id").value == "") {
		document.getElementById("Untagged-VLan-id").value =
		    document.getElementById("Mgmt-VLan-id").value;
	}

	if (! isVlanIdValid(document.getElementById("Untagged-VLan-id").value)) {
		var format = "The Untagged VLAN ID is invalid: %s";
		var reason = getInvalidVlanIdReason(document.getElementById("Untagged-VLan-id").value);
		var params = new Array(); // in case 'reason' is a number.
		params[0] = reason;
		var message = formatResourceString( format, params );

		return message + "\n";
	} else {
		return "";
	}
}

function checkManagementValue () {
	validateMgmtVlanId ();
}

function validateMgmtVlanId() {
  if (! isVlanIdValid(document.getElementById("Mgmt-VLan-id").value)) {
    var format = "The Management VLAN ID is invalid: %s";
    var reason = getInvalidVlanIdReason(document.getElementById("Mgmt-VLan-id").value);
    var params = new Array(); // in case 'reason' is a number.
    params[0] = reason;
    var message = formatResourceString( format, params );

    return message + "\n";
  } else {
      return "";
  }

}
      


            function validateLanIp() {
                if (! document.forms['update-container'].elements['lanIp0'].disabled
                    && ! ipIsValidNotLoopback('lanIp')) {
                    var format = "The Internal static IP address is invalid: %s";
                    var reason = getInvalidIpOrLoopbackReason('lanIp');
                    var params = new Array(); // in case 'reason' is a number.
                    params[0] = reason;
                    var message = formatResourceString( format, params );
                    return message + "\n";
                } else {
                    return "";
                }
            }
            function validateLanNetmask() {
                if (! document.forms['update-container'].elements['lanNetmask0'].disabled
                    && ! maskIsValid('lanNetmask')) {
                    var format = "The %1 Subnet Mask is invalid: %2";
                    return formatOrderedResourceString( format, new Array( "Internal", getInvalidMaskReason('lanNetmask') ) ) + "\n";
                } else {
                    return "";
                }
            }
            function validateLanIpAndNetmask() {
                if (! document.forms['update-container'].elements['lanIp0'].disabled
                    && ! document.forms['update-container'].elements['lanNetmask0'].disabled
                    && ! ipAndMaskAreValidTogether('lanIp', 'lanNetmask')) {

                    var format = "The %1 Static IP Address and Subnet Mask are invalid together: %2";
                    return formatOrderedResourceString( format, new Array( "Internal", getInvalidIpAndMaskTogetherReason('lanIp', 'lanNetmask') ) ) + "\n";
                } else {
                    return "";
                }
            }
            function validateGateway() {
                if (! document.forms['update-container'].elements['gateway0'].disabled
                    && dottedDecimalToInt('gateway') != 0
                    && ! ipIsValidNotLoopback('gateway')) {

                    var format = "The %1 Default Gateway is invalid: %2";
                    return formatOrderedResourceString( format, new Array( "Internal", getInvalidIpOrLoopbackReason('gateway') ) ) + "\n";
                } else {
                    return "";
                }
            }
            function validateGatewayAndNetmask() {
                if (! document.forms['update-container'].elements['gateway0'].disabled
                    && ! document.forms['update-container'].elements['lanNetmask0'].disabled
                    && dottedDecimalToInt('gateway') != 0
                    && ! ipAndMaskAreValidTogether('gateway', 'lanNetmask')) {

                    var format = "The %1 Default Gateway and Subnet Mask are invalid together: %2";
                    return formatOrderedResourceString( format, new Array( "Internal", getInvalidIpAndMaskTogetherReason('gateway', 'lanNetmask') ) ) + "\n";
                } else {
                    return "";
                }
            }
            function validateLanIpAndGateway() {
                if (! document.forms['update-container'].elements['lanIp0'].disabled
                    && ! document.forms['update-container'].elements['gateway0'].disabled
                    && dottedDecimalToInt('gateway') != 0
                    && ! ipAndGatewayAreValidTogether('lanIp', 'lanNetmask', 'gateway')) {

                    var format = "The %1 Static IP Address and Default Gateway are invalid together: %2";
                    return formatOrderedResourceString( format, new Array( "Internal", getInvalidIpAndGatewayTogetherReason('lanIp', 'lanNetmask', 'gateway') ) ) + "\n";
                } else {
        return "";
                }
            }
            function validateDns() {
                var format;
                var msg = "";
                if (! document.forms['update-container'].elements['dnsOne0'].disabled &&
                    ! ipIsValidOrBlankNotLoopback('dnsOne')) {

                    format = "The first %1 DNS Nameserver is invalid: %2";
                    msg = msg + formatOrderedResourceString( format, new Array( "Internal", getInvalidIpOrBlankNotLoopbackReason('dnsOne') ) ) + "\n";
                }
                if (! document.forms['update-container'].elements['dnsOne0'].disabled &&
                    ! document.forms['update-container'].elements['lanIp0'].disabled &&
                    ! document.forms['update-container'].elements['lanNetmask0'].disabled &&
                    ! (dottedDecimalIsBlank('dnsOne') ||
                       serverIsValid('dnsOne','lanIp','lanNetmask'))) {

                    format = "The first %1 DNS Nameserver is invalid with the current IP Address and Netmask: %2";
                    msg = msg + formatOrderedResourceString( format, new Array( "Internal", getInvalidServerReason('dnsOne','lanIp','lanNetmask') ) ) + "\n";
                }
                if (! document.forms['update-container'].elements['dnsTwo0'].disabled &&
                    ! ipIsValidOrBlankNotLoopback('dnsTwo')) {

                    format = "The second %1 DNS Nameserver is invalid: %2";
                    msg = msg + formatOrderedResourceString( format, new Array( "Internal", getInvalidIpOrBlankNotLoopbackReason('dnsTwo') ) ) + "\n";
                }
                if (! document.forms['update-container'].elements['dnsTwo0'].disabled &&
                    ! document.forms['update-container'].elements['lanIp0'].disabled &&
                    ! document.forms['update-container'].elements['lanNetmask0'].disabled &&
                    ! (dottedDecimalIsBlank('dnsTwo') ||
                       serverIsValid('dnsTwo','lanIp','lanNetmask'))) {

                    format = "The second %1 DNS Nameserver is invalid with the current IP Address and Netmask: %2";
                    msg = msg + formatOrderedResourceString( format, new Array( "Internal", getInvalidServerReason('dnsTwo','lanIp','lanNetmask') ) ) + "\n";
		
                }
                return msg;
            }

      function validate() {
                var msg = "";
                msg = msg + validateAccessPointName(); 
                
                msg = msg + validateMgmtVlanId();  
                
                msg = msg + validateUntaggedVlanId();  
                msg = msg + validateLanIp();
                msg = msg + validateLanNetmask();
                msg = msg + validateLanIpAndNetmask();
                
                msg = msg + validateGateway();
                msg = msg + validateGatewayAndNetmask();  
                msg = msg + validateLanIpAndGateway(); 
                msg = msg + validateDns(); 
			
                if (msg.length > 0) {  
        alert(msg);    
                    return false;
                } else {
                    return true;
                }
            }
            function checkChanges(a,b)
            {

             for(var y=0;y<a.length;y++)
             {
               if(a[y] != b[y])
                 return true;
             }
             return false;
            }

            function onSubmit() {
                var ok;
                if (! validate()) {
                    return false;
                }
                newvalues = new Array(36);
		newvaluesarray = document.getElementsByTagName("input");
		for(var k=0;k<newvaluesarray.length;k++)
		{
			if(newvaluesarray[k].type=='radio')
				newvalues[k]=newvaluesarray[k].checked;
			else
				newvalues[k]=newvaluesarray[k].value;
 		}
                if (checkChanges(oldvalues,newvalues)) {
                    ok = confirm('Your wireless settings are about to be updated. You may be disconnected.');
                    if(ok == false)
                      return false;
                }
                else
                {
                    document.location='/admin.cgi?action=system';
                    return false;
                }
                return true;
            }
            function return2br(dataStr) {
                return dataStr.replace(/(\r\n|[\r\n])/g, "<br />");
            }
        </script>

<!--- ...system.html -->
</head>

<!--- system.html... -->


<!--- ...system.html -->
<body onload="init();" style="margin: 0px;">
<table class="nav-content" width="100%" height="500" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td class="nav-client-content" align="left" valign="top" width="80%">
<table width="100%" border="0" cellpadding="0" cellspacing="0" height="100%">
<tbody><tr>
<td valign="top">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<!-- call:print_page_title() -->

        
            
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                      <tbody><tr><td id="page-title" class="page-title" align="left" width="100%" height="1">Modify Ethernet (Wired) settings</td></tr>
                      <tr><td>&nbsp;</td></tr>
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
            
        

<tr>
<td valign="top">

<!--- system.html... -->

<form id="update-container-id" name="update-container" method="post" onsubmit="return onSubmit();">
  <table border="0" cellpadding="0" cellspacing="2" align="left">
    <tbody><tr>
      <td class="label">Hostname
      </td>
      <td>&nbsp;</td>
      <td class="value"><input class="input-text" type="text" name="update.device.host.id" size="20" maxlength="63" value="WEP-2ac"> (Range : 1 - 63 characters)
      </td>
    </tr>
	
    
    
        
    
    <!-- page section separator -->
    <tr>
        <td colspan="3">
            <div class="page-divider"></div>
        </td>
    </tr>

    <tr>
      <td class="page-header4" colspan="3">Internal
        Interface Settings
      </td>
    </tr>
    <tr>
      <td class="label">MAC Address
      </td>
      <td>&nbsp;</td>
      <td>
        <?php
            session_start();
            echo $_SESSION['ap']['mac3'];
        ?>
      </td>
    
	</tr><tr>
	    <td class="label">
		Management VLAN ID
	    </td>	
          <td>&nbsp;</td>		
          <td class="value">
    <input class="input-text" id="Mgmt-VLan-id" type="text" name="update.device.management.vlan-id" onblur="checkManagementValue()" size="4" maxlength="4" value="1"> (Range: 1 - 4094, Default: 1)
	</td>
	</tr>

     <tr>
        <td class="label"> Untagged VLAN <br>
        </td>
        <td>&nbsp;</td>
        <td class="value">
       <input class="input-radio" type="radio" id="radio-untagged-enable" value="up" name="update.device.untagged-vlan.status" onclick="toggleUntaggedEnabled(true)" checked="">
          Enabled

      <input class="input-radio" type="radio" id="radio-untagged-disable" value="down" name="update.device.untagged-vlan.status" onclick="toggleUntaggedEnabled(false)">
          Disabled
        </td>
      </tr>

  <tr>
      <td class="label">
    Untagged VLAN ID
      </td>  
          <td>&nbsp;</td>    
          <td class="value">
    <input class="input-text" id="Untagged-VLan-id" type="text" name="update.device.untagged-vlan.vlan-id" onblur="checkUntaggedValue()" size="4" maxlength="4" value="1"> (Range: 1 - 4094, Default: 1)
	</td>
	</tr>

    
    
      <tr><td>&nbsp;</td>
    </tr>
    <tr>
      <td class="label">Connection Type
      </td>
      <td>&nbsp;</td>
      <td class="value"><select name="lanConnectionType" onchange="toggleConnectionType(this)">
          <option value="dhcp" selected="">
          DHCP
          </option><option value="staticIp">
          Static IP
        </option></select>
      </td>
    </tr>
    <tr>
      <td class="label">Static IP Address
      </td>
      <td>&nbsp;</td>
      <td class="value">
    
    <input class="input-text" type="text" size="3" maxlength="3" name="lanIp0" value="192" disabled="">
.
    
    <input class="input-text" type="text" size="3" maxlength="3" name="lanIp1" value="168" disabled="">
.
    
    <input class="input-text" type="text" size="3" maxlength="3" name="lanIp2" value="1" disabled="">
.
    
    <input class="input-text" type="text" size="3" maxlength="3" name="lanIp3" value="10" disabled="">


      </td>
    </tr>
    <tr>
      <td class="label">Subnet Mask
      </td>
      <td>&nbsp;</td>
      <td class="value">
    
    <input class="input-text" type="text" size="3" maxlength="3" name="lanNetmask0" value="255" disabled="">
.
    
    <input class="input-text" type="text" size="3" maxlength="3" name="lanNetmask1" value="255" disabled="">
.
    
    <input class="input-text" type="text" size="3" maxlength="3" name="lanNetmask2" value="255" disabled="">
.
    
    <input class="input-text" type="text" size="3" maxlength="3" name="lanNetmask3" value="0" disabled="">


      </td>
    </tr>
    
    <!-- default gateway fields ... -->
        <tr>
            <td class="label">
                Default Gateway
            </td>
            <td>&nbsp;</td>
            <td class="value">
                
    
    <input class="input-text" type="text" size="3" maxlength="3" name="gateway0" value="192" disabled="">
.
    
    <input class="input-text" type="text" size="3" maxlength="3" name="gateway1" value="168" disabled="">
.
    
    <input class="input-text" type="text" size="3" maxlength="3" name="gateway2" value="1" disabled="">
.
    
    <input class="input-text" type="text" size="3" maxlength="3" name="gateway3" value="254" disabled="">


            </td>
        </tr>
  <!-- ... default gateway fields

    
    <!-- dns fields ... -->
        <tr>
            <td class="label">
                DNS Nameservers
            </td>
            <td>&nbsp;</td>
            <td class="value">
                 <input type="radio" value="on" onclick="toggleDns(this)" name="dynamicDns" checked="">Dynamic
                 <input type="radio" value="off" onclick="toggleDns(this)" name="dynamicDns">Manual
            </td>
        </tr>
        <tr>
            <td class="label">
                &nbsp;
            </td>
            <td>&nbsp;</td>
            <td class="value">
                
    
    <input class="input-text" type="text" size="3" maxlength="3" name="dnsOne0" value="" disabled="">
.
    
    <input class="input-text" type="text" size="3" maxlength="3" name="dnsOne1" value="" disabled="">
.
    
    <input class="input-text" type="text" size="3" maxlength="3" name="dnsOne2" value="" disabled="">
.
    
    <input class="input-text" type="text" size="3" maxlength="3" name="dnsOne3" value="" disabled="">


            </td>
        </tr>
        <tr>
            <td class="label">
                &nbsp;
            </td>
            <td>&nbsp;</td>
            <td class="value">
               
    
    <input class="input-text" type="text" size="3" maxlength="3" name="dnsTwo0" value="" disabled="">
.
    
    <input class="input-text" type="text" size="3" maxlength="3" name="dnsTwo1" value="" disabled="">
.
    
    <input class="input-text" type="text" size="3" maxlength="3" name="dnsTwo2" value="" disabled="">
.
    
    <input class="input-text" type="text" size="3" maxlength="3" name="dnsTwo3" value="" disabled="">


            </td>
        </tr>
    <!-- ... dns fields -->


    
        
        
            
        
        <tr> 
           <td align="left" colspan="2"><br> Click “Update“ to save the new settings. <br> </td>
        </tr>       
        <!-- submit button for this page -->
        <tr>
            <td align="left" colspan="3">
                <input type="hidden" name="page" value="system">
                <input type="submit" class="input-submit" name="Update" value="Update">
            </td>
        </tr>

  </tbody></table>
</form>

<!--- ...system.html -->

</td>
</tr>
</tbody></table>
</td>
<td width="4">&nbsp;</td>
<!-- call:print_page_help() -->

    
  
  
      
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
      
  
      
        
            
        
        
      
  
      
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
      
  
  <td class="page-help" align="left" valign="top" width="20%">
    <img src="./page_help.gif" border="0" style="cursor: pointer;" onclick="window.open(&#39;admin.cgi?action=system_help&#39;, &#39;_blank&#39;, &#39;dependent=yes,resizable=yes,toolbar=no,status=no,menubar=no,height=675,width=675,scrollbars=yes&#39;); return false;">
    Ethernet (Wired) settings describe the configuration of your Ethernet local area network (LAN), which is the Wired interface between the access point and the network. <br><br>Use this page to configure networks as virtual LANs (with VLAN IDs).<br><br>Specify the connection type (DHCP or Static IP addressing) for the network.<br><br><font color="#B70024"><b>Caution:</b></font><br> If you reconfigure the interfaces to use VLANs, you may lose connectivity to the access point. Verify that the switch and DHCP server can support VLANs, and then re-connect to the new IP address.<br><br><a href="http://192.168.31.108/admin.cgi?action=system#null" onclick="window.open(&#39; admin.cgi?action=system_help &#39;, &#39;_blank&#39;, &#39;dependent=yes,resizable=yes,toolbar=no,status=no,menubar=no,height=675,width=675,scrollbars=yes&#39;); return false">More</a> ...
  </td>

</tr>
</tbody></table>
</td>
</tr>
</tbody></table>




</body></html>