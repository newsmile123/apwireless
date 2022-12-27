
<!-- saved from url=(0014)about:internet -->
<html><!--- interfaces.html... --><!--- ...interfaces.html --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
	selectTabInMenu("interfaces");
	</script>
	<style type="text/css">
	.A {
		padding: 0px 6px 0px 6px;
	}
	</style>


<!--- interfaces.html... -->

  <script type="text/javascript" charset="utf-8">
    function toggleTable(textID, tableID)
    {
      var table = document.getElementById(tableID);
      var text = document.getElementById(textID);
      if(table) {
        if( table.style.display == 'none' ) {
          table.style.display = '';
          text.innerHTML = "Hide interfaces table";
        }
        else {
          table.style.display = 'none';
          text.innerHTML = "Show interfaces table";
        }
      }
    }
  </script>


<!--- ...interfaces.html -->
</head>

<!--- interfaces.html... -->


<!--- ...interfaces.html -->
<body onload="" style="margin: 0px;">
<table class="nav-content" width="100%" height="500" border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td class="nav-client-content" align="left" valign="top" width="80%">
<table width="100%" border="0" cellpadding="0" cellspacing="0" height="100%">
<tbody><tr>
<td valign="top">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<!-- call:print_page_title() -->

        
            
                
            
        
            
                
                    
                      <tbody><tr><td id="page-title" class="page-title" align="left" width="100%" height="1">View settings for network interfaces</td></tr>
                      <tr><td>&nbsp;</td></tr>
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
                    
                
                    
                
            
        
            
                
                    
                
                    
                
            
        

<tr>
<td valign="top">

<!--- interfaces.html... -->

 <br><table>
 
        
            
        
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
  <table border="0" cellpadding="0" cellspacing="2" align="left">
    <tbody><tr>
      <td class="page-header3">Wired Settings</td>
      <td>&nbsp;</td>
      <td> (<a href="http://192.168.31.108/admin.cgi?action=system">
        Edit
        </a>) </td>
    </tr>
    <tr>
      <td class="page-header4">
        Internal Interface</td>
      <td> </td>
    </tr>
    <tr>
      <td> 
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
      <td> 
        VLAN ID  
      </td>
      <td>&nbsp;</td>
      <td>
	1
      </td>
    </tr>
    
    <tr>
      <td> 
        IP Address   
      </td>
      <td>&nbsp;</td>
      <td>
        <?php
          session_start();
          echo $_SESSION['ap']['ip3'];
        ?>
      </td>
    </tr>
    <tr>
      <td> 
        Subnet Mask   
      </td>
      <td>&nbsp;</td>
      <td>
        255.255.255.0
      </td>
    </tr>
     
    <tr>
      <td> 
        IPv6 Address   
      </td>
      <td>&nbsp;</td>
      <td>
        ::
      </td>
    </tr>
    <tr>
      <td>
        IPv6 Address Status
      </td>
      <td>&nbsp;</td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td valign="TOP">
        IPv6 Autoconfigured Global Addresses
      </td>
      <td>&nbsp;</td>
      <td valign="TOP">
          <pre></pre>
      </td>
    </tr>
    <tr>
      <td> 
        IPv6 Link Local Address   
      </td>
      <td>&nbsp;</td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>
        IPv6-DNS-1
      </td>
      <td>&nbsp;</td>
      <td>
        ::
      </td>
    </tr>
    <tr>
      <td>
        IPv6-DNS-2
      </td>
      <td>&nbsp;</td>
      <td>
        ::
      </td>
    </tr>

    <tr>
      <td>
        DNS-1
      </td>
      <td>&nbsp;</td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>
        DNS-2
      </td>
      <td>&nbsp;</td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>
        Default Gateway
      </td>
      <td>&nbsp;</td>
      <td>
        
      </td>
    </tr>
     
      
  
    <tr>
      <td>
        <a id="LANText" onclick="toggleTable(&#39;LANText&#39;,&#39;LANTable&#39;);" style="cursor:pointer;color:blue;text-decoration:underline;">Show interfaces table</a>
      </td>
    </tr>
    <tr>
      <td colspan="10">
      <table id="LANTable" align="left" class="sectioned" border="0" cellspacing="0" cellpadding="0" style="display:none;">
        <tbody class="section-body">
          
  <tr class="section-row" style="font-size: 12px;">
    <td class="section-header-super">Interface&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td class="section-header-super">Status</td>
    <td class="section-header-super">MAC Address&nbsp;&nbsp;&nbsp;</td>
    <td class="section-header-super">VLAN ID</td>
    <td class="section-header-super">Name (SSID)</td>
  </tr>

          <tr class="section-row eventablerow">
            <td class="section-cell">
              LAN
            </td>
            <td class="section-cell">up</td>
            <td class="section-cell">
              <?php
                session_start();
                echo $_SESSION['ap']['mac3'];
              ?>
            </td>
            <td class="section-cell" align="center">
              1
            </td>
            <td class="section-cell" align="center">
              <?php
                session_start();
                echo $_SESSION['ap']['SSID3'];
              ?>
            </td>
          </tr>
        
        </tbody>
      </table>
      </td>
    </tr>
    
    
    <!-- page section separator -->
    <tr>
        <td colspan="4">
            <div class="page-divider"></div>
        </td>
    </tr>

    <tr>
      <td class="page-header3"> Wireless Settings </td>
      <td>&nbsp;</td>
      <td> (<a href="http://192.168.31.108/admin.cgi?action=wireless">
        Edit
        </a>) </td>
    </tr>
    
    


    <tr>
      <td class="page-header4"> Radio
        
        One
        
      </td>
      <td>&nbsp; </td>
    </tr>

    <tr>
      <td class="label">Status</td>
      <td>&nbsp;</td>
    
      <td>On</td>
    
    </tr><tr>

    
    <!-- mac address -->
    </tr><tr>
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
      <td> 
        Mode 
      </td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    
    
    <tr>
      <td> 
        Channel 
      </td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
     
       <tr>
         <td> Operational Bandwidth, MHz</td>
         <td> &nbsp; </td>
         <td></td>
       </tr>
     
     
    <tr>
       <td> Transmit Power Output, dBm</td>
       <td> &nbsp; </td>
       <td></td>
    </tr>
    
    <tr>
      <td>
        <a id="WLAN0Text" onclick="toggleTable(&#39;WLAN0Text&#39;,&#39;WLAN0Table&#39;);" style="cursor:pointer;color:blue;text-decoration:underline;">Show interfaces table</a>
      </td> 
    </tr>
    <tr>
      <td colspan="10">
        <table align="left" class="sectioned" border="0" cellspacing="0" cellpadding="0" id="WLAN0Table" style="display:none;">
          <tbody class="section-body">
            
  <tr class="section-row" style="font-size: 12px;">
    <td class="section-header-super" align="center">Interface&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td class="section-header-super" align="center">Status</td>
    <td class="section-header-super" align="center">MAC Address&nbsp;&nbsp;&nbsp;</td>
    <td class="section-header-super" align="center">VLAN ID</td>
    <td class="section-header-super" align="center">Name (SSID)</td>
  </tr>
           
                  <tr class="section-row eventablerow">
                
              
                <td class="section-cell" align="center">
                  wlan0:vap0
                </td>
                <td class="section-cell" align="center">
                  up
                </td>
                <td class="section-cell" align="center">
                  <?php
                    session_start();
                    echo $_SESSION['ap']['mac3'];
                  ?>
                </td>
                <td class="section-cell" align="center">
                  1
                </td>
                <td class="section-cell">
                   <pre style="margin:0px;font-family:arial;">
                    <?php
                      session_start();
                      echo $_SESSION['ap']['SSID3'];
                    ?>
                   </pre>
                </td>
              </tr>
          </tbody>
        </table>
      </td>
    </tr>

    
    
    <!-- horizontal white space -->
    
        
    
    <tr>
        <td colspan="3">
            &nbsp;
        </td>
    </tr>

    <tr>
      <td class="page-header4"> 
        Radio Two 
      </td>
      <td>&nbsp; </td>
    </tr>
    
    <tr>
      <td class="label">Status</td>
      <td>&nbsp;</td>
    
      <td>On</td>
    
    </tr><tr>

    
    <!-- mac address -->
    </tr><tr>
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
      <td> 
        Mode 
      </td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    
    
    <tr>
      <td> 
        Channel 
      </td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    
    <tr>
       <td> Operational Bandwidth, MHz</td>
       <td> &nbsp; </td>
       <td></td>
    </tr>
    
    
    <tr>
       <td> Transmit Power Output, dBm</td>
       <td> &nbsp; </td>
       <td></td>
    </tr>
    
    <tr>
      <td>
        <a id="WLAN1Text" onclick="toggleTable(&#39;WLAN1Text&#39;,&#39;WLAN1Table&#39;);" style="cursor:pointer;color:blue;text-decoration:underline;">Show interfaces table</a>
      </td>
    </tr>
    <tr>
      <td colspan="10">
        <table align="left" class="sectioned" border="0" cellspacing="0" cellpadding="0" id="WLAN1Table" style="display:none;">
          <tbody class="section-body">
          
  <tr class="section-row" style="font-size: 12px;">
    <td class="section-header-super" align="center">Interface&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td class="section-header-super" align="center">Status</td>
    <td class="section-header-super" align="center">MAC Address&nbsp;&nbsp;&nbsp;</td>
    <td class="section-header-super" align="center">VLAN ID</td>
    <td class="section-header-super" align="center">Name (SSID)</td>
  </tr>        
              
                <tr class="section-row eventablerow">
              <td class="section-cell" align="center">
                wlan1:vap0
              </td>
              <td class="section-cell" align="center">
                up
              </td>
              <td class="section-cell" align="center">
                <?php
                  session_start();
                  echo $_SESSION['ap']['mac3'];
                ?>
              </td>
              <td class="section-cell" align="center">
                1
              </td>
              <td class="section-cell" align="center">
                <pre style="margin:0px;font-family:arial;">
                  <?php
                    session_start();
                    echo $_SESSION['ap']['SSID3'];
                  ?>
                </pre>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    

    
    
    
    <!-- page section separator -->
    <tr>
        <td colspan="4">
            <div class="page-divider"></div>
        </td>
    </tr>


    
  </tbody></table>


<!--- ...interfaces.html -->

</td>
</tr>
</tbody></table>
</td>
<td width="4">&nbsp;</td>
<!-- call:print_page_help() -->

    
  
  
      
          
      
  
      
        
            
        
        
      
  
      
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
              
          
              
          
      
  
      
          
              
          
              
          
      
  
  <td class="page-help" align="left" valign="top" width="20%">
    <img src="./page_help.gif" border="0" style="cursor: pointer;" onclick="window.open(&#39;admin.cgi?action=interfaces_help&#39;, &#39;_blank&#39;, &#39;dependent=yes,resizable=yes,toolbar=no,status=no,menubar=no,height=675,width=675,scrollbars=yes&#39;); return false;">
    This page displays current Ethernet (Wired) and Wireless settings on the access point. <br><br>To configure Ethernet Settings, go to the <a href="http://192.168.31.108/admin.cgi?action=system">Ethernet (Wired) Settings</a> tab. <br><br>To configure Wireless Settings, go to the <a href="http://192.168.31.108/admin.cgi?action=wireless">Wireless Settings</a> tab. <br><br><a href="http://192.168.31.108/admin.cgi?action=interfaces#null" onclick="window.open(&#39; admin.cgi?action=interfaces_help &#39;, &#39;_blank&#39;, &#39;dependent,dependent=yes,resizable=yes,toolbar=no,status=no,menubar=no,height=675,width=675,scrollbars=yes&#39;); return false">More</a> ...
  </td>

</tr>
</tbody></table>
</td>
</tr>
</tbody></table>




</body></html>