
<!-- saved from url=(0014)about:internet -->
<html><!--- associations.html... --><!--- ...associations.html --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
	
	<link type="text/css" rel="stylesheet" title="dss3" href="./ds3.css" media="screen,projection">
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
	selectTabInMenu("associations");
	</script>
	<style type="text/css">
	.A {
		padding: 0px 6px 0px 6px;
	}
	</style>


<!--- associations.html... -->


<script language="javascript" type="text/javascript">
function resize()
{
  var rows = 0;
  
  
    rows++;
  
  

  if (parseInt(navigator.appVersion)>3) 
  {
    if (navigator.appName=="Netscape")
    {
      h = window.innerHeight;
    }
    if (navigator.appName.indexOf("Microsoft")!=-1)
    {
      h = document.body.offsetHeight;
    }
  }

  h = h-250+"px";

  document.getElementById('scrollArea').style.width = "0px";
  document.getElementById('scrollArea').style.height = "0px";
  document.getElementById('scrollArea').style.width = document.getElementById('page-title').offsetWidth+"px";
  document.getElementById('scrollArea').style.height = h;
  document.getElementById('scrollArea').style.overflow = (rows>0)?"auto":"hidden";
}

function toggleClientInfo(id)
{
  var spans = document.getElementsByTagName("span");
  for (var i = spans.length; i;) {
    var span = spans[--i];
    if (span.id.indexOf("StaStatistics") > -1 && span.id != id) {
        span.style = 'display: none; position: absolute; width: 750px; height: 400px; background-color: #ffffff; border: 1px solid #000000; overflow: auto';
    }
  }
  toggleVisibility(id);
}

</script>
  <link type="text/css" rel="stylesheet" href="./radio.css" media="screen,projection">
    <script type="text/javascript">
    function init()
    {
      var count = 0;
      
        count++;
      
       document.getElementById("total-clients").innerHTML = count;
    }
    </script>

<!--- ...associations.html -->
</head>

<!--- associations.html... -->


<!--- ...associations.html -->
<body onload="init(),resize();" onresize="resize();" style="margin: 0px;">
<table class="nav-content" width="100%" height="500" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td class="nav-client-content" align="left" valign="top" width="80%">
<table width="100%" border="0" cellpadding="0" cellspacing="0" height="100%">
<tbody><tr>
<td valign="top">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<!-- call:print_page_title() -->
                 
                      <tbody><tr><td id="page-title" class="page-title" align="left" width="100%" height="1">View list of currently associated client stations</td></tr>
                      <tr><td>&nbsp;</td></tr>

<tr>
<td valign="top">

<!--- associations.html... -->

<table>

        
            
        
        <tbody><tr> 
           <td align="left" colspan="2"><br> Click “Refresh“ button to refresh the page. </td>
        </tr>       
        <tr>
            <td align="left" colspan="3">
            <form><input class="button" type="button" value="Refresh" onclick="window.location.replace(window.location.href)">
            </form>
            </td>
        </tr>

</tbody></table>

<table>
  <tbody><tr>
  <td>
    &nbsp;
  </td>
  </tr>
  <tr>
   <!-- Total Number of Associated Clients -->
    <td class="label"> 
        Total Number of Associated Clients 
    </td>
    
  <td>&nbsp;</td>

    <td class="first_table_right" name="total-clients">
      <label id="total-clients">1</label>
      <!-- <input class="value" type=text READONLY
        name="total-clients" id="total-clients" value="0"> -->
    </td>
    </tr>
  <tr>
  <td>
    &nbsp;
  </td>
  </tr>
  <tr>
  </tr></tbody></table>

<div id="scrollArea" style="width: 1318px; height: 629px; overflow: auto;">
<div id="relative">
<table class="sectioned" cellpadding="0" cellspacing="0">
  <tbody><tr class="section-row">
    <td class="section-header-super" align="center">SSID</td>
    <td class="section-header-super" align="center">Station</td>
    <td class="section-header-super" align="center">IP Address</td>
  </tr>
  <tr class="section-row">
    <td class="section-header"></td>
    <td class="section-header"></td>
    <td class="section-header"></td>
  </tr>
  
  <tr class="eventablerow">
    
    <td width="200" class="section-cell" align="center">
        <?php
          session_start();
          echo $_SESSION['ap']['SSID3'];
        ?>
    </td>
    <td width="200" class="section-cell" align="center">
        <?php
          session_start();
          echo $_SESSION['ap']['mac3'];
        ?>
      </button>
    </td>
    <td width="200" class="section-cell" align="center">
        <?php
          session_start();
          echo $_SESSION['ap']['ip3'];
        ?>
    </td>
  </tr>
  
</tbody></table>
</div></div>

<!--- ...associations.html -->

</td>
</tr>
</tbody></table>
</td>
<td width="4">&nbsp;</td>
<!-- call:print_page_help() -->

    
  
  
      
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
              
                
                    
                
                
              
          
              
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
      
  
  <td class="page-help" align="left" valign="top" width="20%">
    <img src="./page_help.gif" border="0" style="cursor: pointer;" onclick="window.open(&#39;admin.cgi?action=associations_help&#39;, &#39;_blank&#39;, &#39;dependent=yes,resizable=yes,toolbar=no,status=no,menubar=no,height=675,width=675,scrollbars=yes&#39;); return false;">
    The associated stations are displayed along with information about packet traffic transmitted and received for each station.<br><br><a href="http://192.168.31.108/admin.cgi?action=associations#null" onclick="window.open(&#39; admin.cgi?action=associations_help &#39;, &#39;_blank&#39;, &#39;dependent,dependent=yes,resizable=yes,toolbar=no,status=no,menubar=no,height=675,width=675,scrollbars=yes&#39;); return false">More</a> ...
  </td>

</tr>
</tbody></table>
</td>
</tr>
</tbody></table>




</body></html>