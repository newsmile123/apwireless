
<!-- saved from url=(0014)about:internet -->
<html><!--- basic_setup.html... --><!--- ...basic_setup.html --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
	selectTabInMenu("basic_settings");
	</script>
	<style type="text/css">
	.A {
		padding: 0px 6px 0px 6px;
	}
	</style>


<!--- basic_setup.html... -->

<script language="javascript" type="text/javascript">
var ipallocation = "manual";

setMainForm("basic_setup");

function alphanumericAndHyphen( alphane )
{
    var numaric = alphane;
    var char_present = 0;
    var hyphen_present = 0;
    if(numaric.charCodeAt(0) == 45  || numaric.charCodeAt(numaric.length-1) == 45 || (numaric.charCodeAt(0) == 32))
        return false;

    for (var j = 0; j < numaric.length; j++)
    {
        var alphaa = numaric.charAt(j);
        var hh = alphaa.charCodeAt(0);
        if ((hh > 47 && hh < 58) || (hh > 64 && hh < 91) || (hh > 96 && hh < 123))
        {
            char_present = 1;
        }
        else if (hh == 45 || hh == 95)
        {
            hyphen_present = 1;
        }
        else
        {
            return false;
        }
    }
    if (char_present)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function alphanumericsymbols(value){
    var numaric = value;
    for(var i=0; i<numaric.length; i++){
        var alphaa = numaric.charAt(i);
        var c = alphaa.charCodeAt(0);
        if(!(c > 31 && c < 127 && c != 34))
            return false;
    }
    return true;
}
function init() {

    var pwd_err = readCookie("pwd_err");
    if((pwd_err != null) && (pwd_err != undefined) && (pwd_err != "")) {
        document.getElementById("err_pwd").innerHTML = '<div class="input-text-error">'+pwd_err+'</div>';
    }
        
    formElements = getMainForm().elements;
    for( var i = 0; i < formElements.length; i++ ) {
        formElements[i].valid = true;
    }
    deleteCookie("pwd_err");
}

function indicateIPAllocation() {
    if( ipallocation == "manual" ) {
    } else {
    }
}

function selectedValue( selector ) {
    var index = selector.selectedIndex;
    var item = selector.options[index];
    return item.value;
}

function selectAuthentication( selector ) {
    var value = selectedValue( selector );
    if( value == "local" ) {
        showUserFields();
    } else if( value == "radius" ) {
        showRadiusFields();
    } else if( value == "psk" ) {
        showPSKFields();
    }
}
function validate() {
    var input_system_name = document.getElementById("system_name").value;
    if((input_system_name.length == 0 || input_system_name.length >63)||(input_system_name.length >0 && alphanumericAndHyphen(input_system_name) == false))
    {
        alert("Invalid System name. The valid name is from 1 to 63 characters and can include letters, digits, hyphens and space.");
        return false;
    }

    var input_system_contact = document.getElementById("system_contact").value;
    if(alphanumericsymbols(input_system_contact) == false)
    {
        alert("Invalid input for System Contact");
        return false;
    }

    var input_system_location = document.getElementById("system_location").value;
    if(alphanumericsymbols(input_system_location) == false)
    {
        alert("Invalid input for System Location");
        return false;
    }
    ajaxBasicSettingsPOST();
    return true;                        
}    
// Define the validator object
function validator() {
    this.setField = setField;
    this.check = check;
    this.cross = cross;
    this.standard = standard;
    this.specific = specific;
    this.validate = dovalidate
}

// check the field using whatever the specific method is
// and mark the field with a check or cross accordingly.
function dovalidate( field ) {
    if( this.specific( field ) ) {
        check( field );
        field.valid = true;
        setFormState( formValid() );
    } else {
        cross( field );
        field.valid = false;
        setFormState( formValid() );
    }
}

function formValid() {
    formElements = getMainForm().elements;
    for( var i = 0; i < formElements.length; i++ ) {
        if( !formElements[i].valid ) {
            return false;
        }
    }
    return true;
}

function setFormState( valid ) {
    if( valid ) {
        document.forms["basic_setup"].elements["updatesettings"].disabled = false;
        document.getElementById("updatehint").style.visibility = "hidden";
    }
    else {
        document.forms["basic_setup"].elements["updatesettings"].disabled = true;
        document.getElementById("updatehint").style.visibility = "visible";
    }                                
}

// apply the specific validation function for a given field, or the standard one if
// there is none specified.
function specific( field ) {
    if( this[field.name] ) {
        return this[field.name]( field );
    } else {
        return this.standard( field );
    }
}

// basic validation function
function standard( field ) {
    return (field.value.length > 0);
}

// method used to add validation functions for specific fields
function setField( fieldname, method ) {
    this[ fieldname ] = method;
}

// create the validator instance
var v = new validator();

// add a validator for the first admin field
function v_adminpw( field ) {
    return this.standard( field ) && (field.value == formValue("adminpassword.0.confirm"));
}

v.setField("adminpw", v_adminpw );

function v_adminpw2( field ) {
    return this.standard( field ) && (field.value == formValue("adminpassword.0"));
}

v.setField("adminpw2", v_adminpw2 );

var ps;

function ajaxBasicSettingsPOST ()
{
    var xmlhttp;

    if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest ();
        if (xmlhttp.overrideMimeType)
        {
            xmlhttp.overrideMimeType('text/html');
        }
    }
    else if (window.ActiveXObject)
    {
        try
        {
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e)
        {
            try
            {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {}
        }
    }

    if (typeof xmlhttp != "undefined")
    {
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4)
            {
                if (xmlhttp.status == 200 ) {
                    var resp = xmlhttp.responseText;
                    if((resp !== null) && (resp !== undefined) && (resp.indexOf('<div class="input-text-error">') > 0)) {
                        var html_text = resp.split('<div class="input-text-error">');
                        if(html_text.length == 5) {
                            var div = html_text[4].split('</div>');
                            var error = div[0];
                            createCookie("pwd_err", error, null);
                        }
                    }
                
                    location.reload();
                }
            }
        };

        try
        {
            xmlhttp.open ("POST", "/admin.cgi?action=basic_settings", true);
            xmlhttp.setRequestHeader ("If-Modified-Since","0");
        }
        catch (e)
        {
            alert ("open error ajaxPasswordPOST:" + e);
        }
        try
        {
            xmlhttp.setRequestHeader ("Content-Type", "application/x-www-form-urlencoded");
            generateActionParams();
            xmlhttp.send (ps);
        }
        catch (e)
        {
            alert ("send error ajaxPasswordPOST:" + e);
        }
    }
    else
        alert ("Your browser doesnot support ajax");

    return xmlhttp;
}

function generateActionParams ()
{
    var f = document.forms['basic_setup'];
    ps = "username.0="+escape(f.elements['username.0'].value);
    ps = ps+"&adminpassword.0="+escape(f.elements['adminpassword.0'].value);
    ps = ps+"&adminpassword.0.confirm="+escape(f.elements['adminpassword.0.confirm'].value);
    ps = ps+"&update.device.serial.baud-rate="+escape(f.elements['update.device.serial.baud-rate'].value);
    ps = ps+"&update.device.host.id="+escape(f.elements['update.device.host.id'].value);
    ps = ps+"&update.device.system.system-contact="+escape(f.elements['update.device.system.system-contact'].value);
    ps = ps+"&update.device.system.system-location="+escape(f.elements['update.device.system.system-location'].value);
    ps = ps+"&updatesettings=Update";
    ps = ps.split('+').join("%2B");
}

function doUpdate()
{
  aps_list_update_progress = true;
  document.getElementById("refresh_button").disabled = true;
  var xmlhttp = ajaxUpdateCpuMemoryUsage();
}

function ajaxUpdateCpuMemoryUsage()
{
  var xmlhttp;

  if (window.XMLHttpRequest)
  {
    xmlhttp = new XMLHttpRequest ();
    if (xmlhttp.overrideMimeType)
    {
      xmlhttp.overrideMimeType('text/html');
    }
  }
  else if (window.ActiveXObject)
  {
    try
    {
      xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch (e)
    {
      try
      {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e) {}
    }
  }

  if (typeof xmlhttp != "undefined")
  {
    var timeout = setTimeout( function() {
      xmlhttp.abort();
      alert("Request time over");
      document.getElementById("refresh_button").disabled = false;
    }, 12000);
    xmlhttp.onreadystatechange = function ()
    {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200 )
      {
        clearTimeout(timeout);
        var resp = xmlhttp.responseText;
        var parser = new DOMParser();
        if((resp !== null) && (resp !== undefined) && parser != null)
        {
          var doc = parser.parseFromString(resp, "text/html");
          if(doc != null)
          {
            var old_uptime = document.getElementById('system_uptime');
            if(old_uptime)
            {
              var new_uptime = doc.getElementById('system_uptime');
              if(new_uptime)
              {
                old_uptime.innerHTML = new_uptime.innerHTML;
              }
            }
            var old_cpu_usage = document.getElementById('cpu_usage');
            if(old_cpu_usage)
            {
              var new_cpu_usage = doc.getElementById('cpu_usage');
              if(new_cpu_usage)
              {
                old_cpu_usage.innerHTML = new_cpu_usage.innerHTML;
              }
            }
            var old_memory_usage = document.getElementById('memory_usage');
            if(old_memory_usage)
            {
              var new_memory_usage = doc.getElementById('memory_usage');
              if(new_memory_usage)
              {
                old_memory_usage.innerHTML = new_memory_usage.innerHTML;
              }
            }
          }
          else
          {
            console.log("ajaxUpdateAPsSignal(): Can't get new APs list for " + table_id);
          }
        }
        else
        {
          console.log("ajaxUpdateAPsSignal(): Can't parse recieved data.");
        }
        document.getElementById("refresh_button").disabled = false;
      }
    };

    try
    {
      xmlhttp.open ("GET", "/admin.cgi?action=basic_settings", true);
      xmlhttp.setRequestHeader ("If-Modified-Since","0");
    }
    catch (e)
    {
      alert ("open error ajaxUpdateAPsSignal:" + e);
    }
    try
    {
      xmlhttp.setRequestHeader ("Content-Type", "application/x-www-form-urlencoded");
      xmlhttp.send ("update_it=update_it");
    }
    catch (e)
    {
      alert ("send error ajaxUpdateAPsSignal:" + e);
    }
  }
  else
    alert ("Your browser doesnot support ajax");

  return xmlhttp;
}
</script>


<!--- ...basic_setup.html -->
</head>

<!--- basic_setup.html... -->


<!--- ...basic_setup.html -->
<body onload="init();" style="margin: 0px;">
<table class="nav-content" width="100%" height="500" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td class="nav-client-content" align="left" valign="top" width="80%">
<table width="100%" border="0" cellpadding="0" cellspacing="0" height="100%">
<tbody><tr>
<td valign="top">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<!-- call:print_page_title() -->

        
            
              <tbody><tr><td id="page-title" class="page-title" align="left" width="100%" height="1">Provide basic settings</td></tr>
              <tr><td>&nbsp;</td></tr>
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
            
        

<tr>
<td valign="top">

<!--- basic_setup.html... -->

<!-- this section include some informtive text regarding this page on a grey background  -->


  <table border="0" cellspacing="0" cellpadding="0">
    <tbody><tr> 
      <td valign="top">  
        <!-- THIS IS WHERE THE MAIN CONTENT GOES -->
        <form name="basic_setup" method="post" action="http://192.168.31.108/admin.cgi?action=basic_settings" onsubmit="">
          <!-- SECTION 1 -->
          <br>
          <table cellspacing="5">
            <tbody><tr> 
              <td valign="middle" width="10"><img id="i_step1" src="./1lit.gif"></td>
              <td class="page-header1" valign="middle" colspan="2">Review Description of this Access Point ...</td>
            </tr>
            <tr> 
              <td> </td>
              <td colspan="2">These fields show information specific to this access point.<br><br></td>
            </tr>
            <tr> 
              <td> </td>
              <td class="label">IP Address:</td>
              <td align="left" class="label">
                <?php
                  session_start();
                  echo $_SESSION['ap']['ip3'];
                ?>
              </td>
            </tr>
          
            
         
            <tr> 
              <td> </td>
              <td class="label">MAC Address:</td>
              <td align="left" class="label"> 
                <?php
                  session_start();
                  echo $_SESSION['ap']['mac3'];
                ?>
              </td>
            </tr>
            <tr> 
              <td> </td>
              <td class="label">Firmware Version:</td>
              <td align="left" class="label"> 
                1.19.0.28
              </td>
            </tr>
            <tr>
              <td> </td>
              <td class="label">Uptime:</td>
              <td align="left" class="label">
                <div id="system_uptime">
                
                </div>
              </td>
            </tr>
            <tr>
              <td> </td>
              <td class="label">CPU Usage:</td>
              <td align="left" class="label">
                <div id="cpu_usage">
                
                </div>
              </td>
            </tr>
            <tr>
              <td> </td>
              <td class="label">Memory Usage:</td>
              <td align="left" class="label" id="memory_usage">
                
              </td>
            </tr>
            <tr>
              <td> </td>
              <td align="left" class="label">
                  <input id="refresh_button" class="button" type="button" value="Refresh" onclick="doUpdate();">
              </td>
            </tr>
        <tr><td></td><td colspan="3">
            
            </td></tr>
            <tr>
              <td> </td>
        <!-- Disable cluster
              <td class="label">Location</td>
              <td> <input class="input-text" onKeyUp="v.validate( this )" value="" name="location" type="text" size="26" maxlength="128">
              </td>
        disable cluster end -->
              <td><img id="i_location" src="./blanksquare.gif"></td>
            </tr>
            
          </tbody></table>
          <!-- SECTION 1 -->
          <div class="page-divider"></div> 
          <table cellspacing="5">
            <tbody><tr> 
              <td valign="middle" width="10"><img id="i_step2" src="./2lit.gif"></td>
              <td class="page-header1" valign="middle" colspan="2">Device Information</td>
            </tr>
            <tr> 
              <td> </td>
              <td class="label">Product Identifier:</td>
              <td align="left" class="label"> 
                WLAN-EAP
              </td>
            </tr>
            <tr> 
              <td> </td>
              <td class="label">Hardware Version:</td>
              <td align="left" class="label"> 
                2v1
              </td>
            </tr>
            <tr> 
              <td> </td>
              <td class="label">Serial Number <!-- LVL7 -->:</td>
              <td align="left" class="label"> 
                WP12001662
              </td>
            </tr>
            <tr> 
              <td> </td>
              <td class="label">Device Name:</td>
              <td align="left" class="label"> 
                Eltex-AP
              </td>
            </tr>
            <tr> 
              <td> </td>
              <td class="label">Device Description:</td>
              <td align="left" class="label"> 
                WEP-2ac
              </td>
            </tr>
            
            <tr> 
              <td> </td>
            </tr>

         </tbody></table>  

          <div class="page-divider"></div>
          <!-- SECTION 2 -->
          <br>
          <table cellspacing="5">
            <tbody><tr> 
              <td valign="middle" width="10"><img id="i_step3" src="./3lit.gif"></td>
              <td class="page-header1" valign="middle" colspan="2">Provide Network Settings ...</td>
            </tr>
            <tr> 
              <td></td>
              <td colspan="2">These settings apply to this access point.<br> <br> </td>
            </tr>

            <tr>
              <td></td>
              <td id="err_pwd" colspan="3">
                
                
                
                
              </td>
            </tr>
            <tr>
              <td></td>
          <td colspan="3">
          <table>
            
            <tbody><tr>
              <td></td>
              <td class="label">New Password</td>
              <td>
                <input name="username.0" maxlength="32" value="admin" type="hidden">
                <input name="adminpassword.0" type="password" maxlength="32" value="">
              </td>
              <td><img id="i_adminpassword" src="./blanksquare.gif"></td>
            </tr>
            <tr> </tr>
            <tr> </tr>
            <tr>
              <td></td>
              <td class="label">Confirm new password</td>
              <td> <input name="adminpassword.0.confirm" type="password" maxlength="32" value="">
              </td>
              <td><img id="i_adminpasswordconfirm" src="./blanksquare.gif"></td>
            </tr>
            <tr>
              <td></td>
              <td><img id="i_ssid" src="./blanksquare.gif"></td>
            </tr>
            </tbody></table>
            </td>
          </tr></tbody></table>
      <!--
          <div class="page-divider"></div>
      -->
          <!-- SECTION 3 -->
      <!--
          <br>
          <table cellspacing=5>
            <tr>
              <td valign="middle" width="10"><img id="i_step3" src="3lit.gif"></td>
              <td class="page-header1" valign="middle" colspan=2><span><b>???</b></span><span name='loc_err_' class='error' style='position: absolute;' onmouseover='this.style.zIndex = 100;' onmouseout='this.style.zIndex = 99;'>resource error: resource Messages.BSStep3Title not found in: Messages.hdf, Messages_en.hdf, Messages_en_us.hdf, Messages_en_us_ds.hdf.</span> ...</td>
            </tr>
            <tr> 
              <td> </td>
              <td colspan=2 class="smallcontent"> <br> 
              <span><b>???</b></span><span name='loc_err_' class='error' style='position: absolute;' onmouseover='this.style.zIndex = 100;' onmouseout='this.style.zIndex = 99;'>resource error: resource Messages.BSStep3Txt not found in: Messages.hdf, Messages_en.hdf, Messages_en_us.hdf, Messages_en_us_ds.hdf.</span>
                <br> </td>
            </tr>
            <tr> 
              <td> </td>
              <td colspan="2" class="label">New Access Points
                              <select  name="clustermode">
                  <option  value="auto">are configured automatically</option>
                  <option selected value="ignore">are ignored</option>
                </select>
              </td>
            </tr>
            <tr>
              <td> </td>
              <td colspan="2" class="smallcontent">
                
              </td>
            </tr>
    <tr id="iprangefields">
        <td>
        </td>
        
        <td class="label">and use these IP addresses
        </td>
        <td nowrap>
            <input class="input-text" type="text" size="3">.
            <input class="input-text" type="text" size="3">.
            <input class="input-text" type="text" size="3">.
            <input class="input-text" type="text" size="3">
            &nbsp;-&nbsp;
            <input class="input-text" type="text" size="3">
        </td>
    </tr>
          </table>
    -->
    <div class="page-divider"></div>
    <br>
        <table cellspacing="5">
          <tbody><tr> 
            <td valign="middle" width="10"><img id="i_step4" src="./4lit.gif"></td>
            <td class="page-header1" valign="middle" colspan="2">Serial Settings ...</td>
          </tr>
          <tr>
          <td></td>
          <td colspan="3">
            <table>
              <tbody><tr>
                <td></td>
                <td class="label">Baud Rate          <!-- LVL7 --></td>
                <td>
      <select class="selectfield" name="update.device.serial.baud-rate" id="update.device.serial.baud-rate">
      <option class="selectfield" value="9600">
        9600
      </option>
      <option class="selectfield" value="19200">
        19200
      </option>
      <option class="selectfield" value="38400">
        38400
      </option>
      <option class="selectfield" value="57600">
        57600
      </option>
      <option class="selectfield" value="115200" selected="">
        115200
      </option>
     </select>      
     
      </td>
              </tr>
            </tbody></table>
          </td></tr>
        </tbody></table>
    
          <div class="page-divider"></div>
          <!-- SECTION 4 -->
          <br>
          <table cellspacing="5">
            <tbody><tr> 
              <td valign="middle" width="10"><img id="i_step5" src="./5lit.gif"></td>
              <td class="page-header1" valign="middle" colspan="2">System Settings ...</td>
            </tr>
            <tr>
                <td> </td>
                <td class="label">System Name          <!-- LVL7 --></td>
                <td class="section-cell"><input class="input-text" type="text" size="32" maxlength="64" id="system_name" name="update.device.host.id" value="WEP-2ac"> </td>
            </tr>
            <tr>
                <td> </td>
                <td class="label">System Contact    <!-- LVL7 --> </td>
                <td class="section-cell"><input class="input-text" type="text" size="32" maxlength="255" id="system_contact" name="update.device.system.system-contact" value="admin@example.com"></td>
            </tr>
            <tr>
                <td> </td>
                <td class="label">System Location  <!-- LVL7 --> </td>
                <td class="section-cell"><input class="input-text" type="text" size="32" maxlength="255" id="system_location" name="update.device.system.system-location" value="Default"></td>
            </tr> 
            <tr> 
              <td></td>
              <td colspan="2"><br> Click “Update“ to save the new settings. <br> </td>
            </tr>
            <tr> 
              <td> </td>
              <td align="left" colspan="2">
                <!-- if there is an error, disable the submit button. -->
          
                  <input class="input-submit" type="button" name="updatesettings" value="Update" onclick="return validate();">
                

                <div id="updatehint" style="visibility: hidden;">(check for errors before trying to update.)</div>
              </td>
            </tr>
          </tbody></table>
        </form>
        <!-- END MAIN CONTENT SECTION -->
      </td>
      <!-- end of icons section -->
    </tr>
  </tbody></table>


<!--- ...basic_setup.html -->

</td>
</tr>
</tbody></table>
</td>
<td width="4">&nbsp;</td>
<!-- call:print_page_help() -->

    
  
  
      
        
            
        
        
      
  
      
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
      
  
  <td class="page-help" align="left" valign="top" width="20%">
    <img src="./page_help.gif" border="0" style="cursor: pointer;" onclick="window.open(&#39;admin.cgi?action=basic_settings_help&#39;, &#39;_blank&#39;, &#39;dependent=yes,resizable=yes,toolbar=no,status=no,menubar=no,height=675,width=675,scrollbars=yes&#39;); return false;">
    Provide the minimal set of configuration information needed to set up the access point and start wireless networking as described in the numbered steps on this page.<br><br><font color="#B70024"><b>Caution:</b></font><br><b>If you do not have a DHCP server</b> on the network and do not plan to use one, the first thing you must do after bringing up the access point is change the Connection Type from DHCP to Static IP.<br><br>To change the Connection Type, go to the <a href="http://192.168.31.108/admin.cgi?action=system">Ethernet (Wired) Settings</a> tab.<br><br><a href="http://192.168.31.108/admin.cgi?action=basic_settings#null" onclick="window.open(&#39; admin.cgi?action=basic_settings_help &#39;, &#39;_blank&#39;, &#39;dependent=yes,resizable=yes,toolbar=no,status=no,menubar=no,height=675,width=675,scrollbars=yes&#39;); return false">More</a> ...
  </td>

</tr>
</tbody></table>
</td>
</tr>
</tbody></table>




</body></html>