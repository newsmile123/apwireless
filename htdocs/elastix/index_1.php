<!-- <?php 
session_start();
error_reporting(0);
?> -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/DTD/loose.dtd">
<html>

<head>
<title>[NanoStation Loco M2] - Wireless</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Pragma" content="no-cache">
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
    <td class="section-header-super" align="center">Mask</td>
    <td class="section-header-super" align="center">Default Gateway</td>
  </tr>
  <tr class="section-row">
    <td class="section-header"></td>
    <td class="section-header"></td>
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
    <td width="200" class="section-cell" align="center">
        <?php
          session_start();
          echo $_SESSION['ap']['mask3'];
        ?>
    </td>
    <td width="200" class="section-cell" align="center">
        <?php
          session_start();
          echo $_SESSION['ap']['gateway3'];
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
</body>
</html>

