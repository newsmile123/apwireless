
<!-- saved from url=(0014)about:internet -->
<html><!--- aps.html... --><!--- ...aps.html --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
	selectTabInMenu("aps");
	</script>
	<style type="text/css">
	.A {
		padding: 0px 6px 0px 6px;
	}
	</style>


<!--- aps.html... -->


<script type="text/javascript" language="javascript">
  function formatSupportedRates() 
  {
    var elm, values, formattedValues, rate, fRate;
    var elmIndex = 1;
    
    while( elm = document.getElementById( "rates" + elmIndex + "Id" ) ) 
    {
      if( elm.innerHTML ) 
      {
        values = elm.innerHTML.split( new RegExp("[\\[\\]]", "gi") );
    
        formattedValues = "";
        if( values ) 
        {
          for( var i = 0; i < values.length; i++ ) 
          {
            if( values[i].length > 0 ) 
            {
              rate = parseInt( values[i], 16 );
              if( !isNaN( rate ) ) 
              {
                if(formattedValues.length > 0) formattedValues += ",";
                if (rate & 0x80)
                  formattedValues += "<b>";
                formattedValues += "" + ((rate & 0x7e) >> 1);
                if (rate & 0x01)
                  formattedValues += ".5";
                if (rate & 0x80)
                  formattedValues += "</b>";
              }
            }
          }
        }
        elm.innerHTML = formattedValues;
      }
      elm.style.display = "";
      elmIndex++;
    }
    
    
    elmIndex = 1;
    while( elm = document.getElementById( "rates_known" + elmIndex + "Id" ) ) 
    {
      if( elm.innerHTML ) 
      {
        values = elm.innerHTML.split( new RegExp("[\\[\\]]", "gi") );
    
        formattedValues = "";
        if( values ) 
        {
          for( var i = 0; i < values.length; i++ ) 
          {
            if( values[i].length > 0 ) 
            {
              rate = parseInt( values[i], 16 );
              if( !isNaN( rate ) ) 
              {
                if(formattedValues.length > 0) formattedValues += ",";
                if (rate & 0x80)
                  formattedValues += "<b>";
                formattedValues += "" + ((rate & 0x7e) >> 1);
                if (rate & 0x01)
                  formattedValues += ".5";
                if (rate & 0x80)
                  formattedValues += "</b>";
              }
            }
          }
        }
        elm.innerHTML = formattedValues;
      }
      elm.style.display = "";
      elmIndex++;
    }
    
  }

  function saveApList()
  {
    var form = document.getElementById('apListSaveForm');
    form.submit();
    return;
  }

  function importApListFile()
  {
    var input_field_file = document.getElementById( 'myfile' );
    if( !input_field_file.value || input_field_file.value.length == 0 ) 
    {
      alert(" Please specify the upload file" );
      document.getElementById('button').blur();
      return;
    }

    if( input_field_file.value.lastIndexOf(".cfg") == -1 && input_field_file.value.lastIndexOf(".txt") == -1)
    {                                                                                                    
     alert("Please upload only .cfg or .txt extention file");                                       
     document.getElementById('button').blur();                                                      
     return;                                            
    }   

    var obj = document.getElementById ('fileAction');
    obj.name = "apListImport";      // accessed in C
    var form = document.getElementById('retrieveForm');
    try
    {
      form.submit();
    }
    catch (err) 
    {
      alert('Invalid file specified');
    }
    obj.name = "none";
    return;
  }

  // delete a Mac from the known AP list
  function doDelete (index)
  {
	var obj = document.getElementById ('known_' + index);
    obj.name = "deletedMac";        // accessed in C
    var form = document.getElementById('apListForm');
    form.submit();
  }

          // process Grants
  function doGrant (index, prefix)
  {
    var obj = document.getElementById (prefix + 'mac_' + index);
    obj.name = "grantedMac";        // accessed in C
    var form = document.getElementById('apListForm');
    form.submit();
  }
  
          // clear list
  function doClear()
  {
	var obj = document.getElementById ('to_refresh');
	obj.name = "refreshing_it";
	obj.value = "refreshing_it";
    var form = document.getElementById('apListForm');
    form.submit();
    alert("AP lists are being updated. Please, wait...");
    
    setTimeout(function(){
    window.location.replace(window.location.href);
	}, 5000);
    
  }
  
   function doUpdate()
  {
	var obj = document.getElementById ('to_update');
	obj.name = "updating_it";
	obj.value = "updating_it";
    var form = document.getElementById('apListForm');
    form.submit();
    
    alert("AP lists are being updated. Please, wait...");
    setTimeout(function(){
    window.location.replace(window.location.href);
	}, 5000);
    
    
  }
  
  function web_action( seleMac, action )
  {
    document.apListForm.selectedMac.value = seleMac;
  }

  function rogueAPDetectionClick()
  {
    web_action(0, 2);
  }
  function onSubmit ()
  {
    var ok = true;
       

    if(ok == true) {
      ok = confirm('Your wireless settings are about to be updated. You may be disconnected.');
    }
    return ok;
  }

  addOnLoadHandler(formatSupportedRates);
</script>

<!--- ...aps.html -->
</head>

<!--- aps.html... -->


<!--- ...aps.html -->
<body style="margin: 0px;">
<table class="nav-content" width="100%" height="500" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td class="nav-client-content" align="left" valign="top" width="80%">
<table width="100%" border="0" cellpadding="0" cellspacing="0" height="100%">
<tbody><tr>
<td valign="top">
<br><table width="100%" border="0" cellpadding="0" cellspacing="0">
<!-- call:print_page_title() -->

        
            
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                      <tbody><tr><td id="page-title" class="page-title" align="left" width="100%" height="1">View Rogue AP Detection</td></tr>
                      <tr><td>&nbsp;</td></tr>
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
            
        

<tr>
<td valign="top">

<!--- aps.html... -->

  <script type="text/javascript" language="javascript" src="./domutils.js.загрузка"></script>

  
        </td></tr><tr> 
           <td align="left" colspan="2"><br> Click “Refresh“ button to refresh the page. </td>
        </tr>       
        <tr>
            <td align="left" colspan="3">
            <!-- <form><input class="button" type=button value="Refresh" onClick="window.location.replace(window.location.href)"> -->
            <form><input class="button" type="button" value="Refresh" onclick="doUpdate();">
            </form>
            </td>
        </tr>

   

  <form id="apListSaveForm" name="apListSaveForm" method="post" action="http://192.168.31.108/download.cgi?rogue-ap"></form>
    <input type="hidden" id="ap_list_save" name="ap_list_save" value="1">
  

  <form id="apDetectionForm" name="apDetectionForm" method="post" onsubmit="return onSubmit()"></form>
    <input type="hidden" id="actionType" name="none">
    <input type="hidden" id="selectedMac" name="none"> 
    </tbody></table><table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tbody><tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
          <table border="0" cellpadding="0" cellspacing="0" align="left">
            <tbody><tr>
              <td class="label">
                AP Detection for Radio 1
              </td>
              <td>&nbsp;</td>
              <td class="value"><input class="input-radio" type="radio" value="on" id="apDetectionRadio1EnabledId" name="apDetectionRadio1Enabled" checked="">
                Enabled
              </td>
              <td class="value"><input class="input-radio" type="radio" value="off" name="apDetectionRadio1Enabled">
                Disabled
              </td>
              <td>&nbsp;</td>
            </tr>
            
            <tr>
              <td class="label">
                 AP Detection for Radio 2
              </td>
              <td>&nbsp;</td>
              <td class="value"><input class="input-radio" type="radio" value="on" id="apDetectionRadio2EnabledId" name="apDetectionRadio2Enabled" checked="">
                Enabled
              </td>
              <td class="value"><input class="input-radio" type="radio" value="off" name="apDetectionRadio2Enabled">
                Disabled
              </td>
              <td>&nbsp;</td>
            </tr>
            
            
            <tr><td>
              </td></tr><tr> 
                <td align="left" colspan="2"><br> Click “Update“ to save the new settings. <br> </td>
              </tr>       
            <!-- submit button for this page -->
              <tr>
                <td align="left" colspan="">
                  <input type="hidden" name="page" value="">
		  <input onclick="rogueAPDetectionClick();" type="submit" class="input-submit" id="button" name="rogueAPDetection-link" value="Update">
                </td>
              </tr>
            </tbody></table>
          </td>
        </tr>
      </tbody></table>
  
  <form id="apListForm" name="apListForm" method="post">
    <input type="hidden" id="actionType" name="none">
    <input type="hidden" id="selectedMac" name="none"> 
	<input type="hidden" id="to_refresh" value="no">
	<input type="hidden" id="to_update" value="no">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tbody><tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        </tr><tr>
          <td class="subhead" colspan="7"><b>Detected Rogue AP List</b></td>
        </tr>
        <tr>
          <td align="left"> Click "Delete Old" to delete old entries from Detected Rogue AP List</td>
        </tr>
        <tr>
          <td align="left"><input class="button" type="button" value="Delete Old" id="refresh_btn" onclick="doClear();"></td>
        </tr>
        <tr>
          <td class="subhead" colspan="7"><b>Dangerous AP List</b></td>
        </tr>
        <tr>
          <td>
            <script type="text/javascript" language="javascript">
              if (dd.ie) document.write("<div  style=\"overflow: auto; height: 100%; width: 100%;\">");
            </script>
            <table class="sectioned" cellpadding="2" width="100%">
              <thead>
                <tr class="section-row">
                  <td class="section-header">Action</td>
                  <td class="section-header">MAC</td>
                  <td class="section-header">Radio</td>
                  <td class="section-header">Beacon Int.</td>
                  <td class="section-header">Type</td>
                  <td class="section-header">SSID</td>
                  <td class="section-header">Privacy</td>
                  <td class="section-header">WPA</td>
                  <td class="section-header">Band</td>
                  <td class="section-header" style="white-space: normal;">Channel [BandWidth]</td>
                  <td class="section-header">Channel Blocks</td>
                  <td class="section-header">Signal</td>
                  <td class="section-header">Beacons</td>
                  <td class="section-header">Last Beacon</td>
                  <td class="section-header">Rates</td>
                  <td class="section-header">&nbsp;&nbsp;&nbsp;</td>
                </tr>
              </thead>
              <tbody style="overflow: auto;  width: 100%;">
              
              
            </tbody>
          
        
        <tbody><tr><td>&nbsp;</td></tr> 
        <tr>
          <td class="subhead" colspan="7"><b>Unknown AP List</b></td>
        </tr>
        <tr>
          <td>
            </td></tr></tbody><thead>
              <script type="text/javascript" language="javascript">
                if (dd.ie) {
                  document.write("<tr class=\"section-row\" style=\"position: absolute; top: expression(this.offsetParent.scrollTop);\">");
                } else {
                  document.write("<tr class=\"section-row\">");
                }
              </script><tr class="section-row">
                <td class="section-header">Action</td>
                <td class="section-header">MAC</td>
                <td class="section-header">Radio</td>
                <td class="section-header">Beacon Int.</td>
                <td class="section-header">Type</td>
                <td class="section-header">SSID</td>
                <td class="section-header">Privacy</td>
                <td class="section-header">WPA</td>
                <td class="section-header">Band</td>
                <td class="section-header" style="white-space: normal;">Channel [BandWidth]</td>
                <td class="section-header">Channel Blocks</td>
                <td class="section-header">Signal</td>
                <td class="section-header">Beacons</td>
                <td class="section-header">Last Beacon</td>
                <td class="section-header">Rates</td>
                <td class="section-header">&nbsp;&nbsp;&nbsp;</td>
              </tr>
            </thead>
            
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
              
            
            <tbody style="overflow: auto; height: 100%; width: 100%;">
              
              <script type="text/javascript" language="javascript">
                if (dd.ie) // Dummy row to push first row below header
                {
                  document.write("<tr style=\"height: 20px;\"><td nowrap>&nbsp;</td></tr>");
                }
              </script>

              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(1, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9d:2f<input type="hidden" name="nothing" id="u_mac_1" value="00:22:be:92:9d:2f"></td>
                    <td nowrap="">wlan0</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">5</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("44".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("44" + " [40]");
                      else if("20" == 20)
                        document.write("44" + " [20]");
                      else
                        document.write("44");
                      </script>44 [20]
                    </td>
                    <td nowrap="" align="center">44</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-90</span></a>
                    </td>
                    <td nowrap="" align="center">4</td>
                    <td nowrap="">Fri Jan 21 10:59:15 2000</td>
                    <td nowrap=""><span id="rates1Id" style=""><b>6</b>,9,<b>12</b>,18,<b>24</b>,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(2, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9d:28<input type="hidden" name="nothing" id="u_mac_2" value="00:22:be:92:9d:28"></td>
                    <td nowrap="">wlan0</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">GUTNet</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">5</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("44".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("44" + " [40]");
                      else if("20" == 20)
                        document.write("44" + " [20]");
                      else
                        document.write("44");
                      </script>44 [20]
                    </td>
                    <td nowrap="" align="center">44</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-0.gif" style="visibility:visible" border="0"><span class="tip">-91</span></a>
                    </td>
                    <td nowrap="" align="center">4</td>
                    <td nowrap="">Fri Jan 21 10:59:15 2000</td>
                    <td nowrap=""><span id="rates2Id" style=""><b>6</b>,9,<b>12</b>,18,<b>24</b>,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(3, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9d:27<input type="hidden" name="nothing" id="u_mac_3" value="00:22:be:92:9d:27"></td>
                    <td nowrap="">wlan0</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch Lite</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">5</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("44".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("44" + " [40]");
                      else if("20" == 20)
                        document.write("44" + " [20]");
                      else
                        document.write("44");
                      </script>44 [20]
                    </td>
                    <td nowrap="" align="center">44</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-90</span></a>
                    </td>
                    <td nowrap="" align="center">3</td>
                    <td nowrap="">Fri Jan 21 10:59:15 2000</td>
                    <td nowrap=""><span id="rates3Id" style=""><b>6</b>,9,<b>12</b>,18,<b>24</b>,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(4, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9d:2a<input type="hidden" name="nothing" id="u_mac_4" value="00:22:be:92:9d:2a"></td>
                    <td nowrap="">wlan0</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">SPbGUT</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">5</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("44".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("44" + " [40]");
                      else if("20" == 20)
                        document.write("44" + " [20]");
                      else
                        document.write("44");
                      </script>44 [20]
                    </td>
                    <td nowrap="" align="center">44</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-88</span></a>
                    </td>
                    <td nowrap="" align="center">4</td>
                    <td nowrap="">Fri Jan 21 10:59:15 2000</td>
                    <td nowrap=""><span id="rates4Id" style=""><b>6</b>,9,<b>12</b>,18,<b>24</b>,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(5, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9d:2d<input type="hidden" name="nothing" id="u_mac_5" value="00:22:be:92:9d:2d"></td>
                    <td nowrap="">wlan0</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">5</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("44".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("44" + " [40]");
                      else if("20" == 20)
                        document.write("44" + " [20]");
                      else
                        document.write("44");
                      </script>44 [20]
                    </td>
                    <td nowrap="" align="center">44</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-0.gif" style="visibility:visible" border="0"><span class="tip">-91</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:15 2000</td>
                    <td nowrap=""><span id="rates5Id" style=""><b>6</b>,9,<b>12</b>,18,<b>24</b>,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(6, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9d:2b<input type="hidden" name="nothing" id="u_mac_6" value="00:22:be:92:9d:2b"></td>
                    <td nowrap="">wlan0</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">5</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("44".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("44" + " [40]");
                      else if("20" == 20)
                        document.write("44" + " [20]");
                      else
                        document.write("44");
                      </script>44 [20]
                    </td>
                    <td nowrap="" align="center">44</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-89</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:15 2000</td>
                    <td nowrap=""><span id="rates6Id" style=""><b>6</b>,9,<b>12</b>,18,<b>24</b>,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(7, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9d:2c<input type="hidden" name="nothing" id="u_mac_7" value="00:22:be:92:9d:2c"></td>
                    <td nowrap="">wlan0</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">5</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("44".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("44" + " [40]");
                      else if("20" == 20)
                        document.write("44" + " [20]");
                      else
                        document.write("44");
                      </script>44 [20]
                    </td>
                    <td nowrap="" align="center">44</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-0.gif" style="visibility:visible" border="0"><span class="tip">-92</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:15 2000</td>
                    <td nowrap=""><span id="rates7Id" style=""><b>6</b>,9,<b>12</b>,18,<b>24</b>,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(8, &#39;u_&#39;);"></td>
                    <td nowrap="">64:d8:14:87:61:2f<input type="hidden" name="nothing" id="u_mac_8" value="64:d8:14:87:61:2f"></td>
                    <td nowrap="">wlan0</td>
                    <td nowrap="" align="center">102</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">ZSS-corp</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">5</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("64".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("64" + " [40]");
                      else if("20" == 20)
                        document.write("64" + " [20]");
                      else
                        document.write("64");
                      </script>64 [20]
                    </td>
                    <td nowrap="" align="center">64</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-89</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:16 2000</td>
                    <td nowrap=""><span id="rates8Id" style=""><b>6</b>,9,<b>12</b>,18,<b>24</b>,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(9, &#39;u_&#39;);"></td>
                    <td nowrap="">60:a4:b7:f1:c5:93<input type="hidden" name="nothing" id="u_mac_9" value="60:a4:b7:f1:c5:93"></td>
                    <td nowrap="">wlan0</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Labnet_5G</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">5</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("80" == 80)
                        document.write("36/80".split('/')[0] + " [80]");
                      else if("80" == 40)
                        document.write("36/80" + " [40]");
                      else if("80" == 20)
                        document.write("36/80" + " [20]");
                      else
                        document.write("36/80");
                      </script>36 [80]
                    </td>
                    <td nowrap="" align="center">36 - 48</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-73</span></a>
                    </td>
                    <td nowrap="" align="center">4</td>
                    <td nowrap="">Fri Jan 21 10:59:20 2000</td>
                    <td nowrap=""><span id="rates9Id" style=""><b>6</b>,9,<b>12</b>,18,<b>24</b>,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(10, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:87:e8<input type="hidden" name="nothing" id="u_mac_10" value="00:22:be:92:87:e8"></td>
                    <td nowrap="">wlan0</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">GUTNet</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">5</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("36".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("36" + " [40]");
                      else if("20" == 20)
                        document.write("36" + " [20]");
                      else
                        document.write("36");
                      </script>36 [20]
                    </td>
                    <td nowrap="" align="center">36</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-87</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:20 2000</td>
                    <td nowrap=""><span id="rates10Id" style=""><b>6</b>,9,<b>12</b>,18,<b>24</b>,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(11, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:87:e7<input type="hidden" name="nothing" id="u_mac_11" value="00:22:be:92:87:e7"></td>
                    <td nowrap="">wlan0</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch Lite</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">5</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("36".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("36" + " [40]");
                      else if("20" == 20)
                        document.write("36" + " [20]");
                      else
                        document.write("36");
                      </script>36 [20]
                    </td>
                    <td nowrap="" align="center">36</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-86</span></a>
                    </td>
                    <td nowrap="" align="center">6</td>
                    <td nowrap="">Fri Jan 21 10:59:20 2000</td>
                    <td nowrap=""><span id="rates11Id" style=""><b>6</b>,9,<b>12</b>,18,<b>24</b>,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(12, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:87:ec<input type="hidden" name="nothing" id="u_mac_12" value="00:22:be:92:87:ec"></td>
                    <td nowrap="">wlan0</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">5</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("36".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("36" + " [40]");
                      else if("20" == 20)
                        document.write("36" + " [20]");
                      else
                        document.write("36");
                      </script>36 [20]
                    </td>
                    <td nowrap="" align="center">36</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-87</span></a>
                    </td>
                    <td nowrap="" align="center">3</td>
                    <td nowrap="">Fri Jan 21 10:59:20 2000</td>
                    <td nowrap=""><span id="rates12Id" style=""><b>6</b>,9,<b>12</b>,18,<b>24</b>,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(13, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:87:ea<input type="hidden" name="nothing" id="u_mac_13" value="00:22:be:92:87:ea"></td>
                    <td nowrap="">wlan0</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">SPbGUT</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">5</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("36".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("36" + " [40]");
                      else if("20" == 20)
                        document.write("36" + " [20]");
                      else
                        document.write("36");
                      </script>36 [20]
                    </td>
                    <td nowrap="" align="center">36</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-87</span></a>
                    </td>
                    <td nowrap="" align="center">3</td>
                    <td nowrap="">Fri Jan 21 10:59:20 2000</td>
                    <td nowrap=""><span id="rates13Id" style=""><b>6</b>,9,<b>12</b>,18,<b>24</b>,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(14, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:87:ef<input type="hidden" name="nothing" id="u_mac_14" value="00:22:be:92:87:ef"></td>
                    <td nowrap="">wlan0</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">5</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("36".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("36" + " [40]");
                      else if("20" == 20)
                        document.write("36" + " [20]");
                      else
                        document.write("36");
                      </script>36 [20]
                    </td>
                    <td nowrap="" align="center">36</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-88</span></a>
                    </td>
                    <td nowrap="" align="center">3</td>
                    <td nowrap="">Fri Jan 21 10:59:20 2000</td>
                    <td nowrap=""><span id="rates14Id" style=""><b>6</b>,9,<b>12</b>,18,<b>24</b>,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(15, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:87:ed<input type="hidden" name="nothing" id="u_mac_15" value="00:22:be:92:87:ed"></td>
                    <td nowrap="">wlan0</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">5</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("36".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("36" + " [40]");
                      else if("20" == 20)
                        document.write("36" + " [20]");
                      else
                        document.write("36");
                      </script>36 [20]
                    </td>
                    <td nowrap="" align="center">36</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-87</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:20 2000</td>
                    <td nowrap=""><span id="rates15Id" style=""><b>6</b>,9,<b>12</b>,18,<b>24</b>,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(16, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:87:eb<input type="hidden" name="nothing" id="u_mac_16" value="00:22:be:92:87:eb"></td>
                    <td nowrap="">wlan0</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">5</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("36".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("36" + " [40]");
                      else if("20" == 20)
                        document.write("36" + " [20]");
                      else
                        document.write("36");
                      </script>36 [20]
                    </td>
                    <td nowrap="" align="center">36</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-89</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:20 2000</td>
                    <td nowrap=""><span id="rates16Id" style=""><b>6</b>,9,<b>12</b>,18,<b>24</b>,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(17, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:87:e4<input type="hidden" name="nothing" id="u_mac_17" value="00:22:be:92:87:e4"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("6".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("6" + " [40]");
                      else if("20" == 20)
                        document.write("6" + " [20]");
                      else
                        document.write("6");
                      </script>6 [20]
                    </td>
                    <td nowrap="" align="center">4 - 8</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-3.gif" style="visibility:visible" border="0"><span class="tip">-67</span></a>
                    </td>
                    <td nowrap="" align="center">3</td>
                    <td nowrap="">Fri Jan 21 10:59:15 2000</td>
                    <td nowrap=""><span id="rates17Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(18, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:87:e5<input type="hidden" name="nothing" id="u_mac_18" value="00:22:be:92:87:e5"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">SPbGUT</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("6".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("6" + " [40]");
                      else if("20" == 20)
                        document.write("6" + " [20]");
                      else
                        document.write("6");
                      </script>6 [20]
                    </td>
                    <td nowrap="" align="center">4 - 8</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-3.gif" style="visibility:visible" border="0"><span class="tip">-67</span></a>
                    </td>
                    <td nowrap="" align="center">3</td>
                    <td nowrap="">Fri Jan 21 10:59:15 2000</td>
                    <td nowrap=""><span id="rates18Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(19, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:87:e8<input type="hidden" name="nothing" id="u_mac_19" value="00:22:be:92:87:e8"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch Lite</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("6".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("6" + " [40]");
                      else if("20" == 20)
                        document.write("6" + " [20]");
                      else
                        document.write("6");
                      </script>6 [20]
                    </td>
                    <td nowrap="" align="center">4 - 8</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-3.gif" style="visibility:visible" border="0"><span class="tip">-65</span></a>
                    </td>
                    <td nowrap="" align="center">3</td>
                    <td nowrap="">Fri Jan 21 10:59:15 2000</td>
                    <td nowrap=""><span id="rates19Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(20, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:81:28<input type="hidden" name="nothing" id="u_mac_20" value="00:22:be:92:81:28"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch Lite</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("6".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("6" + " [40]");
                      else if("20" == 20)
                        document.write("6" + " [20]");
                      else
                        document.write("6");
                      </script>6 [20]
                    </td>
                    <td nowrap="" align="center">4 - 8</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-73</span></a>
                    </td>
                    <td nowrap="" align="center">4</td>
                    <td nowrap="">Fri Jan 21 10:59:06 2000</td>
                    <td nowrap=""><span id="rates20Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(21, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:81:20<input type="hidden" name="nothing" id="u_mac_21" value="00:22:be:92:81:20"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("6".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("6" + " [40]");
                      else if("20" == 20)
                        document.write("6" + " [20]");
                      else
                        document.write("6");
                      </script>6 [20]
                    </td>
                    <td nowrap="" align="center">4 - 8</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-74</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:06 2000</td>
                    <td nowrap=""><span id="rates21Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(22, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:81:25<input type="hidden" name="nothing" id="u_mac_22" value="00:22:be:92:81:25"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">SPbGUT</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("6".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("6" + " [40]");
                      else if("20" == 20)
                        document.write("6" + " [20]");
                      else
                        document.write("6");
                      </script>6 [20]
                    </td>
                    <td nowrap="" align="center">4 - 8</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-74</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:06 2000</td>
                    <td nowrap=""><span id="rates22Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(23, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:81:27<input type="hidden" name="nothing" id="u_mac_23" value="00:22:be:92:81:27"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">GUTNet</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("6".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("6" + " [40]");
                      else if("20" == 20)
                        document.write("6" + " [20]");
                      else
                        document.write("6");
                      </script>6 [20]
                    </td>
                    <td nowrap="" align="center">4 - 8</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-73</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:06 2000</td>
                    <td nowrap=""><span id="rates23Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(24, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:87:e0<input type="hidden" name="nothing" id="u_mac_24" value="00:22:be:92:87:e0"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("6".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("6" + " [40]");
                      else if("20" == 20)
                        document.write("6" + " [20]");
                      else
                        document.write("6");
                      </script>6 [20]
                    </td>
                    <td nowrap="" align="center">4 - 8</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-3.gif" style="visibility:visible" border="0"><span class="tip">-62</span></a>
                    </td>
                    <td nowrap="" align="center">5</td>
                    <td nowrap="">Fri Jan 21 10:59:16 2000</td>
                    <td nowrap=""><span id="rates24Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(25, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:81:23<input type="hidden" name="nothing" id="u_mac_25" value="00:22:be:92:81:23"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("6".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("6" + " [40]");
                      else if("20" == 20)
                        document.write("6" + " [20]");
                      else
                        document.write("6");
                      </script>6 [20]
                    </td>
                    <td nowrap="" align="center">4 - 8</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-73</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:06 2000</td>
                    <td nowrap=""><span id="rates25Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(26, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:87:e7<input type="hidden" name="nothing" id="u_mac_26" value="00:22:be:92:87:e7"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">GUTNet</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("6".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("6" + " [40]");
                      else if("20" == 20)
                        document.write("6" + " [20]");
                      else
                        document.write("6");
                      </script>6 [20]
                    </td>
                    <td nowrap="" align="center">4 - 8</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-3.gif" style="visibility:visible" border="0"><span class="tip">-67</span></a>
                    </td>
                    <td nowrap="" align="center">3</td>
                    <td nowrap="">Fri Jan 21 10:59:15 2000</td>
                    <td nowrap=""><span id="rates26Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(27, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:87:e3<input type="hidden" name="nothing" id="u_mac_27" value="00:22:be:92:87:e3"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("6".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("6" + " [40]");
                      else if("20" == 20)
                        document.write("6" + " [20]");
                      else
                        document.write("6");
                      </script>6 [20]
                    </td>
                    <td nowrap="" align="center">4 - 8</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-68</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:16 2000</td>
                    <td nowrap=""><span id="rates27Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(28, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:81:22<input type="hidden" name="nothing" id="u_mac_28" value="00:22:be:92:81:22"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("6".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("6" + " [40]");
                      else if("20" == 20)
                        document.write("6" + " [20]");
                      else
                        document.write("6");
                      </script>6 [20]
                    </td>
                    <td nowrap="" align="center">4 - 8</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-74</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:06 2000</td>
                    <td nowrap=""><span id="rates28Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(29, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:87:e2<input type="hidden" name="nothing" id="u_mac_29" value="00:22:be:92:87:e2"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("6".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("6" + " [40]");
                      else if("20" == 20)
                        document.write("6" + " [20]");
                      else
                        document.write("6");
                      </script>6 [20]
                    </td>
                    <td nowrap="" align="center">4 - 8</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-3.gif" style="visibility:visible" border="0"><span class="tip">-67</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:06 2000</td>
                    <td nowrap=""><span id="rates29Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(30, &#39;u_&#39;);"></td>
                    <td nowrap="">60:a4:b7:f1:c5:91<input type="hidden" name="nothing" id="u_mac_30" value="60:a4:b7:f1:c5:91"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Labnet</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("8".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("8" + " [40]");
                      else if("20" == 20)
                        document.write("8" + " [20]");
                      else
                        document.write("8");
                      </script>8 [20]
                    </td>
                    <td nowrap="" align="center">6 - 10</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-4.gif" style="visibility:visible" border="0"><span class="tip">-57</span></a>
                    </td>
                    <td nowrap="" align="center">5</td>
                    <td nowrap="">Fri Jan 21 10:59:16 2000</td>
                    <td nowrap=""><span id="rates30Id" style=""><b>1</b>,<b>2</b>,<b>5.5</b>,6,9,<b>11</b>,12,18,24,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(31, &#39;u_&#39;);"></td>
                    <td nowrap="">ac:f1:df:a0:ba:f8<input type="hidden" name="nothing" id="u_mac_31" value="ac:f1:df:a0:ba:f8"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">ZSS-eng</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-69</span></a>
                    </td>
                    <td nowrap="" align="center">10</td>
                    <td nowrap="">Fri Jan 21 10:59:16 2000</td>
                    <td nowrap=""><span id="rates31Id" style=""><b>1</b>,<b>2</b>,<b>5.5</b>,6,9,<b>11</b>,12,18,24,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(32, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9d:20<input type="hidden" name="nothing" id="u_mac_32" value="00:22:be:92:9d:20"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-3.gif" style="visibility:visible" border="0"><span class="tip">-61</span></a>
                    </td>
                    <td nowrap="" align="center">4</td>
                    <td nowrap="">Fri Jan 21 10:59:16 2000</td>
                    <td nowrap=""><span id="rates32Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(33, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9d:25<input type="hidden" name="nothing" id="u_mac_33" value="00:22:be:92:9d:25"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">SPbGUT</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-3.gif" style="visibility:visible" border="0"><span class="tip">-61</span></a>
                    </td>
                    <td nowrap="" align="center">6</td>
                    <td nowrap="">Fri Jan 21 10:59:16 2000</td>
                    <td nowrap=""><span id="rates33Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(34, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9d:27<input type="hidden" name="nothing" id="u_mac_34" value="00:22:be:92:9d:27"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">GUTNet</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-3.gif" style="visibility:visible" border="0"><span class="tip">-61</span></a>
                    </td>
                    <td nowrap="" align="center">7</td>
                    <td nowrap="">Fri Jan 21 10:59:16 2000</td>
                    <td nowrap=""><span id="rates34Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(35, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9d:28<input type="hidden" name="nothing" id="u_mac_35" value="00:22:be:92:9d:28"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch Lite</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-3.gif" style="visibility:visible" border="0"><span class="tip">-61</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:16 2000</td>
                    <td nowrap=""><span id="rates35Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(36, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:98:c8<input type="hidden" name="nothing" id="u_mac_36" value="00:22:be:92:98:c8"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch Lite</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-80</span></a>
                    </td>
                    <td nowrap="" align="center">3</td>
                    <td nowrap="">Fri Jan 21 10:59:16 2000</td>
                    <td nowrap=""><span id="rates36Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(37, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:98:c3<input type="hidden" name="nothing" id="u_mac_37" value="00:22:be:92:98:c3"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-81</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:07 2000</td>
                    <td nowrap=""><span id="rates37Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(38, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9d:22<input type="hidden" name="nothing" id="u_mac_38" value="00:22:be:92:9d:22"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-3.gif" style="visibility:visible" border="0"><span class="tip">-62</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:07 2000</td>
                    <td nowrap=""><span id="rates38Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(39, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9d:24<input type="hidden" name="nothing" id="u_mac_39" value="00:22:be:92:9d:24"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-3.gif" style="visibility:visible" border="0"><span class="tip">-62</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:16 2000</td>
                    <td nowrap=""><span id="rates39Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(40, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:98:c7<input type="hidden" name="nothing" id="u_mac_40" value="00:22:be:92:98:c7"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">GUTNet</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-79</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:07 2000</td>
                    <td nowrap=""><span id="rates40Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(41, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:98:c2<input type="hidden" name="nothing" id="u_mac_41" value="00:22:be:92:98:c2"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-80</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:07 2000</td>
                    <td nowrap=""><span id="rates41Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(42, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9d:c2<input type="hidden" name="nothing" id="u_mac_42" value="00:22:be:92:9d:c2"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-80</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:07 2000</td>
                    <td nowrap=""><span id="rates42Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(43, &#39;u_&#39;);"></td>
                    <td nowrap="">7e:f8:b2:d5:28:7b<input type="hidden" name="nothing" id="u_mac_43" value="7e:f8:b2:d5:28:7b"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">MaximSapa</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-82</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:07 2000</td>
                    <td nowrap=""><span id="rates43Id" style=""><b>1</b>,<b>2</b>,5.5,6,9,11,12,18,24,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(44, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9c:d8<input type="hidden" name="nothing" id="u_mac_44" value="00:22:be:92:9c:d8"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch Lite</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-84</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:07 2000</td>
                    <td nowrap=""><span id="rates44Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(45, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9c:d0<input type="hidden" name="nothing" id="u_mac_45" value="00:22:be:92:9c:d0"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-83</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:07 2000</td>
                    <td nowrap=""><span id="rates45Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(46, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9d:c7<input type="hidden" name="nothing" id="u_mac_46" value="00:22:be:92:9d:c7"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">GUTNet</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-81</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:07 2000</td>
                    <td nowrap=""><span id="rates46Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(47, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9c:d7<input type="hidden" name="nothing" id="u_mac_47" value="00:22:be:92:9c:d7"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">GUTNet</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-83</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:07 2000</td>
                    <td nowrap=""><span id="rates47Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(48, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9c:d3<input type="hidden" name="nothing" id="u_mac_48" value="00:22:be:92:9c:d3"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-83</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:07 2000</td>
                    <td nowrap=""><span id="rates48Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(49, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:98:c5<input type="hidden" name="nothing" id="u_mac_49" value="00:22:be:92:98:c5"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">SPbGUT</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-79</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:07 2000</td>
                    <td nowrap=""><span id="rates49Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(50, &#39;u_&#39;);"></td>
                    <td nowrap="">00:1e:58:b1:b9:08<input type="hidden" name="nothing" id="u_mac_50" value="00:1e:58:b1:b9:08"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">ZSS-teach</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("13".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("13" + " [40]");
                      else if("20" == 20)
                        document.write("13" + " [20]");
                      else
                        document.write("13");
                      </script>13 [20]
                    </td>
                    <td nowrap="" align="center">11 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-4.gif" style="visibility:visible" border="0"><span class="tip">-40</span></a>
                    </td>
                    <td nowrap="" align="center">7</td>
                    <td nowrap="">Fri Jan 21 10:59:17 2000</td>
                    <td nowrap=""><span id="rates50Id" style=""><b>1</b>,<b>2</b>,<b>5.5</b>,6,9,<b>11</b>,12,18,24,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(51, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:85:27<input type="hidden" name="nothing" id="u_mac_51" value="00:22:be:92:85:27"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">GUTNet</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("1".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("1" + " [40]");
                      else if("20" == 20)
                        document.write("1" + " [20]");
                      else
                        document.write("1");
                      </script>1 [20]
                    </td>
                    <td nowrap="" align="center">1 - 3</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-71</span></a>
                    </td>
                    <td nowrap="" align="center">3</td>
                    <td nowrap="">Fri Jan 21 10:59:17 2000</td>
                    <td nowrap=""><span id="rates51Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(52, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:95:05<input type="hidden" name="nothing" id="u_mac_52" value="00:22:be:92:95:05"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">SPbGUT</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("1".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("1" + " [40]");
                      else if("20" == 20)
                        document.write("1" + " [20]");
                      else
                        document.write("1");
                      </script>1 [20]
                    </td>
                    <td nowrap="" align="center">1 - 3</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-73</span></a>
                    </td>
                    <td nowrap="" align="center">4</td>
                    <td nowrap="">Fri Jan 21 10:59:17 2000</td>
                    <td nowrap=""><span id="rates52Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(53, &#39;u_&#39;);"></td>
                    <td nowrap="">64:d8:14:87:61:20<input type="hidden" name="nothing" id="u_mac_53" value="64:d8:14:87:61:20"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">102</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">ZSS-corp</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("1".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("1" + " [40]");
                      else if("20" == 20)
                        document.write("1" + " [20]");
                      else
                        document.write("1");
                      </script>1 [20]
                    </td>
                    <td nowrap="" align="center">1 - 3</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-78</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:17 2000</td>
                    <td nowrap=""><span id="rates53Id" style=""><b>1</b>,<b>2</b>,<b>5.5</b>,<b>11</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(54, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:95:07<input type="hidden" name="nothing" id="u_mac_54" value="00:22:be:92:95:07"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">GUTNet</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("1".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("1" + " [40]");
                      else if("20" == 20)
                        document.write("1" + " [20]");
                      else
                        document.write("1");
                      </script>1 [20]
                    </td>
                    <td nowrap="" align="center">1 - 3</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-73</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:17 2000</td>
                    <td nowrap=""><span id="rates54Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(55, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:85:28<input type="hidden" name="nothing" id="u_mac_55" value="00:22:be:92:85:28"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch Lite</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("1".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("1" + " [40]");
                      else if("20" == 20)
                        document.write("1" + " [20]");
                      else
                        document.write("1");
                      </script>1 [20]
                    </td>
                    <td nowrap="" align="center">1 - 3</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-72</span></a>
                    </td>
                    <td nowrap="" align="center">3</td>
                    <td nowrap="">Fri Jan 21 10:59:17 2000</td>
                    <td nowrap=""><span id="rates55Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(56, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:95:08<input type="hidden" name="nothing" id="u_mac_56" value="00:22:be:92:95:08"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch Lite</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("1".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("1" + " [40]");
                      else if("20" == 20)
                        document.write("1" + " [20]");
                      else
                        document.write("1");
                      </script>1 [20]
                    </td>
                    <td nowrap="" align="center">1 - 3</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-73</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:17 2000</td>
                    <td nowrap=""><span id="rates56Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(57, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:95:02<input type="hidden" name="nothing" id="u_mac_57" value="00:22:be:92:95:02"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("1".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("1" + " [40]");
                      else if("20" == 20)
                        document.write("1" + " [20]");
                      else
                        document.write("1");
                      </script>1 [20]
                    </td>
                    <td nowrap="" align="center">1 - 3</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-72</span></a>
                    </td>
                    <td nowrap="" align="center">3</td>
                    <td nowrap="">Fri Jan 21 10:59:17 2000</td>
                    <td nowrap=""><span id="rates57Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(58, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:85:22<input type="hidden" name="nothing" id="u_mac_58" value="00:22:be:92:85:22"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("1".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("1" + " [40]");
                      else if("20" == 20)
                        document.write("1" + " [20]");
                      else
                        document.write("1");
                      </script>1 [20]
                    </td>
                    <td nowrap="" align="center">1 - 3</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-72</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:07 2000</td>
                    <td nowrap=""><span id="rates58Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(59, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:95:04<input type="hidden" name="nothing" id="u_mac_59" value="00:22:be:92:95:04"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("1".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("1" + " [40]");
                      else if("20" == 20)
                        document.write("1" + " [20]");
                      else
                        document.write("1");
                      </script>1 [20]
                    </td>
                    <td nowrap="" align="center">1 - 3</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-74</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:07 2000</td>
                    <td nowrap=""><span id="rates59Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(60, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:85:25<input type="hidden" name="nothing" id="u_mac_60" value="00:22:be:92:85:25"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">SPbGUT</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("1".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("1" + " [40]");
                      else if("20" == 20)
                        document.write("1" + " [20]");
                      else
                        document.write("1");
                      </script>1 [20]
                    </td>
                    <td nowrap="" align="center">1 - 3</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-72</span></a>
                    </td>
                    <td nowrap="" align="center">3</td>
                    <td nowrap="">Fri Jan 21 10:59:17 2000</td>
                    <td nowrap=""><span id="rates60Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(61, &#39;u_&#39;);"></td>
                    <td nowrap="">00:80:48:67:52:f3<input type="hidden" name="nothing" id="u_mac_61" value="00:80:48:67:52:f3"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("2".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("2" + " [40]");
                      else if("20" == 20)
                        document.write("2" + " [20]");
                      else
                        document.write("2");
                      </script>2 [20]
                    </td>
                    <td nowrap="" align="center">1 - 4</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-4.gif" style="visibility:visible" border="0"><span class="tip">-21</span></a>
                    </td>
                    <td nowrap="" align="center">3</td>
                    <td nowrap="">Fri Jan 21 10:59:17 2000</td>
                    <td nowrap=""><span id="rates61Id" style=""><b>1</b>,<b>2</b>,<b>5.5</b>,6,9,<b>11</b>,12,18,24,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(62, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:95:00<input type="hidden" name="nothing" id="u_mac_62" value="00:22:be:92:95:00"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("1".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("1" + " [40]");
                      else if("20" == 20)
                        document.write("1" + " [20]");
                      else
                        document.write("1");
                      </script>1 [20]
                    </td>
                    <td nowrap="" align="center">1 - 3</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-72</span></a>
                    </td>
                    <td nowrap="" align="center">4</td>
                    <td nowrap="">Fri Jan 21 10:59:17 2000</td>
                    <td nowrap=""><span id="rates62Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(63, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:85:20<input type="hidden" name="nothing" id="u_mac_63" value="00:22:be:92:85:20"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("1".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("1" + " [40]");
                      else if("20" == 20)
                        document.write("1" + " [20]");
                      else
                        document.write("1");
                      </script>1 [20]
                    </td>
                    <td nowrap="" align="center">1 - 3</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-71</span></a>
                    </td>
                    <td nowrap="" align="center">2</td>
                    <td nowrap="">Fri Jan 21 10:59:17 2000</td>
                    <td nowrap=""><span id="rates63Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(64, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:85:23<input type="hidden" name="nothing" id="u_mac_64" value="00:22:be:92:85:23"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("1".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("1" + " [40]");
                      else if("20" == 20)
                        document.write("1" + " [20]");
                      else
                        document.write("1");
                      </script>1 [20]
                    </td>
                    <td nowrap="" align="center">1 - 3</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-79</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:07 2000</td>
                    <td nowrap=""><span id="rates64Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(65, &#39;u_&#39;);"></td>
                    <td nowrap="">50:ff:20:2c:5b:e4<input type="hidden" name="nothing" id="u_mac_65" value="50:ff:20:2c:5b:e4"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Keenetic-1998</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("3".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("3" + " [40]");
                      else if("20" == 20)
                        document.write("3" + " [20]");
                      else
                        document.write("3");
                      </script>3 [20]
                    </td>
                    <td nowrap="" align="center">1 - 5</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-4.gif" style="visibility:visible" border="0"><span class="tip">-26</span></a>
                    </td>
                    <td nowrap="" align="center">8</td>
                    <td nowrap="">Fri Jan 21 10:59:17 2000</td>
                    <td nowrap=""><span id="rates65Id" style=""><b>1</b>,<b>2</b>,<b>5.5</b>,6,9,<b>11</b>,12,18,24,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(66, &#39;u_&#39;);"></td>
                    <td nowrap="">52:ff:20:1c:5b:e4<input type="hidden" name="nothing" id="u_mac_66" value="52:ff:20:1c:5b:e4"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">WifiWPA3</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("3".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("3" + " [40]");
                      else if("20" == 20)
                        document.write("3" + " [20]");
                      else
                        document.write("3");
                      </script>3 [20]
                    </td>
                    <td nowrap="" align="center">1 - 5</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-4.gif" style="visibility:visible" border="0"><span class="tip">-25</span></a>
                    </td>
                    <td nowrap="" align="center">7</td>
                    <td nowrap="">Fri Jan 21 10:59:17 2000</td>
                    <td nowrap=""><span id="rates66Id" style=""><b>1</b>,<b>2</b>,<b>5.5</b>,6,9,<b>11</b>,12,18,24,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(67, &#39;u_&#39;);"></td>
                    <td nowrap="">52:ff:20:4c:5b:e4<input type="hidden" name="nothing" id="u_mac_67" value="52:ff:20:4c:5b:e4"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("3".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("3" + " [40]");
                      else if("20" == 20)
                        document.write("3" + " [20]");
                      else
                        document.write("3");
                      </script>3 [20]
                    </td>
                    <td nowrap="" align="center">1 - 5</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-4.gif" style="visibility:visible" border="0"><span class="tip">-26</span></a>
                    </td>
                    <td nowrap="" align="center">4</td>
                    <td nowrap="">Fri Jan 21 10:59:17 2000</td>
                    <td nowrap=""><span id="rates67Id" style=""><b>1</b>,<b>2</b>,<b>5.5</b>,6,9,<b>11</b>,12,18,24,36,48,54</span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(68, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:98:c0<input type="hidden" name="nothing" id="u_mac_68" value="00:22:be:92:98:c0"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">Bonch</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-1.gif" style="visibility:visible" border="0"><span class="tip">-80</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:16 2000</td>
                    <td nowrap=""><span id="rates68Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="eventablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(69, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:9d:23<input type="hidden" name="nothing" id="u_mac_69" value="00:22:be:92:9d:23"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("11".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("11" + " [40]");
                      else if("20" == 20)
                        document.write("11" + " [20]");
                      else
                        document.write("11");
                      </script>11 [20]
                    </td>
                    <td nowrap="" align="center">9 - 13</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-3.gif" style="visibility:visible" border="0"><span class="tip">-62</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:16 2000</td>
                    <td nowrap=""><span id="rates69Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
                
                  <tr class="oddtablerow">
                    <td nowrap=""><input class="button" type="button" value="Grant" onclick="doGrant(70, &#39;u_&#39;);"></td>
                    <td nowrap="">00:22:be:92:95:03<input type="hidden" name="nothing" id="u_mac_70" value="00:22:be:92:95:03"></td>
                    <td nowrap="">wlan1</td>
                    <td nowrap="" align="center">100</td>
                    <td nowrap="">AP</td>
                    <td style="max-width: 200px; min-width: 140px; word-wrap:break-word; word-break: break-all;">(Non Broadcasting)</td>
                    <td nowrap="">On</td>
                    <td nowrap="">On</td>
                    <td nowrap="">2.4</td>
                    <td nowrap="" align="center">
                      <script type="text/javascript" language="javascript">
                      if("20" == 80)
                        document.write("1".split('/')[0] + " [80]");
                      else if("20" == 40)
                        document.write("1" + " [40]");
                      else if("20" == 20)
                        document.write("1" + " [20]");
                      else
                        document.write("1");
                      </script>1 [20]
                    </td>
                    <td nowrap="" align="center">1 - 3</td>
                    <td nowrap="">
                      
                        
                      
                      <a class="tooltipped" href="http://192.168.31.108/admin.cgi?action=aps#"><img src="./signal-2.gif" style="visibility:visible" border="0"><span class="tip">-72</span></a>
                    </td>
                    <td nowrap="" align="center">1</td>
                    <td nowrap="">Fri Jan 21 10:59:17 2000</td>
                    <td nowrap=""><span id="rates70Id" style="">1,2,5.5,6,9,<b>11</b>,12,18,24,36,48,<b>54</b></span></td>
                    <td nowrap="">&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                  
                
              
            </tbody>
          
        
        <tbody><tr><td>&nbsp;</td></tr> 
        <tr>
          <td class="subhead" colspan="7"><b>Known AP List</b></td>
        </tr>
        <tr>
          <td>
            </td></tr><tr class="section-row">
              <td class="section-header">Action</td>
              <td class="section-header">MAC</td>
              <td class="section-header">Radio</td>
              <td class="section-header">Beacon Int.</td>
              <td class="section-header">Type</td>
              <td class="section-header">SSID</td>
              <td class="section-header">Privacy</td>
              <td class="section-header">WPA</td>
              <td class="section-header">Band</td>
              <td class="section-header" style="white-space: normal;">Channel [BandWidth]</td>
              <td class="section-header">Channel Blocks</td>
              <td class="section-header">Signal</td>
              <td class="section-header">Beacons</td>
              <td class="section-header">Last Beacon</td>
              <td class="section-header">Rates</td>
              <td class="section-header">&nbsp;&nbsp;&nbsp;</td>
            </tr>
            
            
          
        
      </tbody></table>
      </td></tr><tr>
        </tr><tr><td>&nbsp;</td></tr>
        <tr><td class="subhead" colspan="2"><b>Save Known AP List to a file</b></td>
      </tr>
      <tr>
        <td colspan="2" align="left">
          <input type="button" class="button" onclick="saveApList();" name="saveApList-link" id="button" value="Save">
        </td>
      </tr>
  
  <form id="retrieveForm" name="retrieveForm" method="post" action="http://192.168.31.108/admin.cgi?action=aps" enctype="multipart/form-data"></form>
    <input type="hidden" id="fileAction" name="none">
      <tr>
        </tr><tr><td>&nbsp;</td></tr>
        <tr><td class="subhead" colspan="2"><b>Import Known AP List from a file</b></td>
      </tr>
      <tr>
        <td colspan="2" align="left">
          <input type="radio" name="merge_rogue_ap_list" value="replace" checked="checked">Replace&nbsp;
          <input type="radio" name="merge_rogue_ap_list" value="merge">Merge
        </td>
      </tr>
      <tr>
        <td colspan="2" align="left">
          <input class="browseButton" id="myfile" type="file" size="20" name="uploadfile"> &nbsp;&nbsp;
          <input class="button" name="importButton" type="button" value="Import" onclick="importApListFile();">
        </td>
      </tr>
    
    <script type="text/javascript" language="javascript">
      if (dd.ie) document.write("</div>");
    </script>
  </tbody></table>

<!--- ...aps.html -->

</form></td>
</tr>
</tbody></table>
</td>
<td width="4">&nbsp;</td>
<!-- call:print_page_help() -->

    
  
  
      
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
                
                    
                
                
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
      
  
  <td class="page-help" align="left" valign="top" width="20%">
    <img src="./page_help.gif" border="0" style="cursor: pointer;" onclick="window.open(&#39;admin.cgi?action=aps_help&#39;, &#39;_blank&#39;, &#39;dependent=yes,resizable=yes,toolbar=no,status=no,menubar=no,height=675,width=675,scrollbars=yes&#39;); return false;">
    This page shows configuration information and statistics on neighboring access points. <br><br>"Neighboring access points" are those which are within range of detection, whether they are on the same wireless network or not.<br><br><a href="http://192.168.31.108/admin.cgi?action=aps#null" onclick="window.open(&#39; admin.cgi?action=aps_help &#39;, &#39;_blank&#39;, &#39;dependent=yes,resizable=yes,toolbar=no,status=no,menubar=no,height=675,width=675,scrollbars=yes&#39;); return false">More</a> ...
  </td>

</tr>
</tbody></table>







</body></html>