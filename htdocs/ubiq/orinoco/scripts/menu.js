
var grp = new Object();
grp[0] = new Link("status","Status","../index.html");
grp[1] = new Link("cfg","Configure","../cfg/splash.html");
grp[2] = new Link("version","Monitor","../mon/splash.html");
grp[3] = new Link("cmd","Commands","../cmd/splash.html");
grp[4] = new Link("help","Help","../help.html");
grp[5] = new Link("logoff","Exit","javascript:callOK();");
grp[6] = new Link("Reboot","Reboot","javascript:instantReboot();");


var subgrpHelp = new Object();
subgrpHelp[0] = new Link("help","Help","../help.html");


var subgrpCmd = new Object();
subgrpCmd[0] = new Link("Update AP","Update AP","../cmd/Update_AP.html");
subgrpCmd[1] = new Link("Retrieve File","Retrieve File","../cmd/Retrieve_AP.html");
subgrpCmd[2] = new Link("reboot","Reboot","../cmd/reboot.html");
subgrpCmd[3] = new Link("reset","Reset","../cmd/reset.html");
subgrpCmd[4] = new Link("help","Help Link","../cmd/help.html");

var subgrpStatus = new Object();
subgrpStatus[0] = new Link("status","Status","../index.html");

var subgrpCfg = new Object();
subgrpCfg[0] = new Link("system","System","../cfg/system.html");
subgrpCfg[1] = new Link("network","Network","../cfg/net-ipconf.html");
subgrpCfg[2] = new Link("ifcfg","Interfaces","../cfg/if-wir-opmode.html");
subgrpCfg[3] = new Link("mgt","Management","../cfg/mgt-passwords.html");
subgrpCfg[4] = new Link("filt","Filtering","../cfg/filt-eth.html");
subgrpCfg[5] = new Link("alarms","Alarms","../cfg/alarm-groups.html");
subgrpCfg[6] = new Link("bridge","Bridge","../cfg/bridge-spanning.html");
subgrpCfg[7] = new Link("qos","QoS","../cfg/QoSPolicies.html");
subgrpCfg[8] = new Link("radius","RADIUS Profiles","../cfg/rad-radius.html");
subgrpCfg[9] = new Link("vlan","SSID/VLAN/Security","../cfg/vlanGroups.html");


var subgrpMon = new Object();
subgrpMon[0] = new Link("version","Version","version.html");
subgrpMon[1] = new Link("icmp","ICMP","icmp.html");
subgrpMon[2] = new Link("iparp","IP ARP Table","iparp.html");
subgrpMon[3] = new Link("learn","Learn Table","learn.html");
subgrpMon[4] = new Link("iapp","IAPP","iapp.html");
subgrpMon[5] = new Link("radius","RADIUS","radius.html");
subgrpMon[6] = new Link("if","Interfaces","if-ethernet.html");
//subgrpMon[7] = new Link("linktest","Link Test","remotelink.html");
subgrpMon[7] = new Link("stationstat","Station Statistics","stationstat.html");
//subgrpMon[8] = new Link("qos","QoS","qos-wirA.html");
subgrpMon[8] = new Link("mesh","Mesh","meshtop.html");

var subgrpVLAN = new Object();
subgrpVLAN[0] = new Link("mvlanmgt","Mgmt VLAN","../cfg/vlanGroups.html");
subgrpVLAN[1] = new Link("secProfiles","Security Profile","../cfg/sec-Profiles.html");
subgrpVLAN[2] = new Link("secmacauth","MAC Access","../cfg/sec-macauth.html");


var subgrpNet = new Object();
subgrpNet[0] = new Link("ipconf","IP Configuration","../cfg/net-ipconf.html");
subgrpNet[1] = new Link("dhcp","DHCP Server","../cfg/net-dhcp.html");
// -- For fixing MR 17295. Add the menu items specific to AP2000/700/4000 later
//subgrpNet[2] = new Link("dhcprelay","DHCP Relay","../cfg/net-dhcpra.html");
//subgrpNet[3] = new Link("linkint","Link Integrity","../cfg/net-linkintegrity.html");


//subgrpNet[3] = new Link("vlan","VLAN","../cfg/net-vlan.html");

var subgrpMgt = new Object();

subgrpMgt[0] = new Link("passwd","Passwords","../cfg/mgt-passwords.html");
subgrpMgt[1] = new Link("ipacct","IP Access Table","../cfg/mgt-ipacctab.html");
subgrpMgt[2] = new Link("serv","Services","../cfg/mgt-serv.html");
subgrpMgt[3] = new Link("autocfg","AutoConfig","../cfg/mgt-autocfg.html");
subgrpMgt[4] = new Link("chrd","CHRD","../cfg/sec-chrd.html");

//subgrpMgt[4] = new Link("secmgt","SNMPv3","../cfg/mgt-secure.html");

var subgrpIF = new Object();

var subgrpFilt = new Object();
subgrpFilt[0] = new Link("filteth","Ethernet Protocol","../cfg/filt-eth.html");
subgrpFilt[1] = new Link("filtstat","Static MAC","../cfg/filt-static.html");
subgrpFilt[2] = new Link("filtadv","Advanced","../cfg/filt-advanced.html");
subgrpFilt[3] = new Link("filtport","TCP/UDP Port","../cfg/filt-port.html");

var subgrpAlarm = new Object();
subgrpAlarm[0] = new Link("groups","Groups","../cfg/alarm-groups.html");
subgrpAlarm[1] = new Link("traphost","Alarm Host Table","../cfg/alarm-traphost.html");
subgrpAlarm[2] = new Link("syslog","Syslog","../cfg/alarm-syslog.html");
subgrpAlarm[3] = new Link("secRogueAPDetect","RAD","../cfg/sec-RogueAPDetect.html");

var subgrpQoS = new Object();
subgrpQoS[0] = new Link("QoSPol","Policy","../cfg/QoSPolicies.html");
subgrpQoS[1] = new Link("QosMap","Priority Mapping","../cfg/QoSMapping.html");
subgrpQoS[2] = new Link("QoSEDCA","EDCA","../cfg/QoSEDCA.html");

var subgrpMonMesh = new Object();
subgrpMonMesh[0] = new Link("topology","Topology","meshtop.html");
subgrpMonMesh[1] = new Link("neighbor","Neighbors","meshneighbor.html");
subgrpMonMesh[2] = new Link("linkstat","Link Statistics","meshstats.html");
subgrpMonMesh[3] = new Link("meshlinktest","Link Test","meshtest.html");

var subgrpRad = new Object();
subgrpRad[0] = new Link("radauth","RADIUS Profile","../cfg/rad-radius.html");
// CHG_REL_2.4
// Added for Authentication servers per auth type support
//subgrpRad[1] = new Link("raddot1x","EAP/802.1x Auth","../cfg/rad-radius-dot1x.html");
//subgrpRad[2] = new Link("radacc","RADIUS Acct","../cfg/rad-radiusacc.html");
//subgrpRad[3] = new Link("radUserMgmt","User Mgmt","../cfg/rad-radius-UserMgmt.html");
// Old code
// subgrpRad[1] = new Link("radacc","RADIUS Acct","../cfg/rad-radiusacc.html");
// Will Add RADUIS/PPPoE later
// subgrpRad[2] = new Link("radpppoe","RADIUS PPPoE","../cfg/rad-pppoe.html");

/* Added for HTTP File Transfer */
var subgrpUpdateAP = new Object();
subgrpUpdateAP[0] = new Link("tftpUpdateAP","via TFTP","../cmd/Update_AP.html");
subgrpUpdateAP[1] = new Link("httpUpdateAP","via HTTP","../cmd/HTTP_Upload.html");

var subgrpRetrieveFromAP = new Object();
subgrpRetrieveFromAP[0] = new Link("tftpRetrieveFromAP","via TFTP","../cmd/Retrieve_AP.html");
subgrpRetrieveFromAP[1] = new Link("httpRetrieveFromAP","via HTTP","../cmd/HTTP_Download.html");
/* Added for HTTP File Transfer */

var subgrpBri = new Object();
subgrpBri[0] = new Link("brispan","Spanning Tree","../cfg/bridge-spanning.html");
subgrpBri[1] = new Link("bristorm","Storm Threshold","../cfg/bridge-storm.html");
subgrpBri[2] = new Link("ibss","Intra BSS","../cfg/bridge-intrabss.html");
subgrpBri[3] = new Link("pacfor","Pkt Fwd","../cfg/bridge-pacfor.html");

var subgrpLogoff = new Object();
subgrpLogoff[0] = new Link("logoff", "Exit", "../logoff.html");

var perRow =4;
var numGrps = 7;

var subNumArray = new Array(18);
var subgrpArray = new Array(18);

//comments by joe martin
//
// this is getting pretty hairy, so i'm gonna try to lay down the law here
// ok, initmenu gets run any time a page is loaded, as it is called by protohead
// it is used to dynamically change the items displayed in the toolbar based on 
// product, and in some cases, encryption mode
// the subgrp arrays contain the menu items for each subgrp, whether they are
// nested or not.  the grp array holds the buttons to be displayed on the left hand
// side.  It is important that the subNumArray holds a number corresponding to 
// the number of tabs to be displayed.  this does not have to equal the number of
// items in the array, as sometimes we truncate the list.
//
// Initmenu takes in the productId, to differentiate between ap2k and ap600, the
// phytype of slots A and B, and the security mode of slots a and b.
//
//

function InitMenu(ProductId, slotAcard, slotBcard,secModeA,secModeB)
{

	
	if((ProductId.indexOf("1.3.6.1.4.1.11898.2.4.10") !=-1)||(ProductId.indexOf("1.3.6.1.4.1.11898.2.4.13") !=-1))  {  // For things still left to merge
	  // this is alpha specific
         subgrpIF[0] = new Link("OpMode","Op Mode","../cfg/if-wir-opmode.html");
 	  subgrpIF[1] = new Link("ifwirA","Wireless","../cfg/if-wirA-detect.html");
 	  subgrpIF[2] = new Link("ifeth","Ethernet","../cfg/if-ethernet.html");
 	  subgrpIF[3] = new Link("ifmesh","Mesh","../cfg/if-mesh.html");
	  //subgrpSec[1] = new Link("secencrypt","Encryption & Auth.","../cfg/sec-encryption-alpha.html"); SI help
	  //subgrpSec[2] = new Link("Authentication","Authentication","../cfg/wpa.html");
     //    subgrpSec[2] = new Link("secRogueAPDetect","RAD","../cfg/sec-RogueAPDetect-alpha.html"); SI
     //    subgrpSec[3] = new Link("chrd","HARDWARE","../cfg/sec-chrd-alpha.html"); SI
	  subgrpVLAN[3] = new Link("ifwirA","Wireless","../cfg/sec-redirect-a.html");
	}
	else if((ProductId.indexOf("1.3.6.1.4.1.11898.2.4.6") !=-1) ||(ProductId.indexOf("1.3.6.1.4.1.11898.2.4.12") !=-1)||(ProductId.indexOf("1.3.6.1.4.1.11898.2.4.14") !=-1)) {  // For things still left to merge
          // this is AP2k specific
	   // we want to display both wireless A and B here
         subgrpIF[0] = new Link("OpMode","Op Mode","../cfg/if-wir-opmode.html");
      subgrpIF[1] = new Link("ifeth","Ethernet","../cfg/if-ethernet.html"); 
      subgrpIF[2] = new Link("ifeth","Mesh","../cfg/if-mesh.html"); 
			   // only display the Interface and Vlan Link for cards that are present- MR 15225

	   if(slotAcard!=' ') {
         subgrpIF[1] = new Link("ifwirA","Wireless - A","../cfg/if-wirA-detect.html");
		   subgrpVLAN[3] = new Link("ifwirA","Wireless - A","../cfg/sec-redirect-a.html");
         subgrpIF[2] = new Link("ifeth","Ethernet","../cfg/if-ethernet.html");	
         subgrpIF[3] = new Link("ifmesh","Mesh","../cfg/if-mesh.html");	
      }

		if(slotBcard!=' ') {
		  	if(slotAcard!=' ') {
            subgrpIF[2] = new Link("ifwirB","Wireless - B","../cfg/if-wirB-detect.html");
      		subgrpVLAN[4] = new Link("ifwirB","Wireless - B","../cfg/sec-redirect-b.html");
            subgrpIF[3] = new Link("ifeth","Ethernet","../cfg/if-ethernet.html");	
            subgrpIF[4] = new Link("ifmesh","Mesh","../cfg/if-mesh.html");	
         }
         else {
            subgrpIF[1] = new Link("ifwirB","Wireless - B","../cfg/if-wirB-detect.html");
	         subgrpVLAN[3] = new Link("ifwirB","Wireless - B","../cfg/sec-redirect-b.html");  
            subgrpIF[2] = new Link("ifeth","Ethernet","../cfg/if-ethernet.html");	
			subgrpIF[3] = new Link("ifmesh","Mesh","../cfg/if-mesh.html");	
	      }   
      }

   }


	if((ProductId.indexOf("1.3.6.1.4.1.11898.2.4.12") !=-1) || (ProductId.indexOf("1.3.6.1.4.1.11898.2.4.13") !=-1)|| (ProductId.indexOf("1.3.6.1.4.1.11898.2.4.14") !=-1)) 
	{
		// For AP4000 & AP700, replace RAD with RogueScan	
      subgrpAlarm[3] = new Link("secRogueScan","Rogue Scan","../cfg/sec-RogueScan.html");
		// For AP4000 & AP700, include DHCP Relay Agent
		subgrpNet[2] = new Link("dhcprelay","DHCP R A","../cfg/net-dhcpra.html");
		subgrpNet[3] = new Link("linkint","Link Integrity","../cfg/net-linkintegrity.html");
      subgrpNet[4] = new Link("sntp","SNTP","../cfg/net-sntp.html");
	}

	// -- MR 17295 
	if((ProductId.indexOf("1.3.6.1.4.1.11898.2.4.6") != -1) || (ProductId.indexOf("1.3.6.1.4.1.11898.2.4.10") != -1))
	{
		// For AP2000 and AP600, no DHCP relay page
		subgrpNet[2] = new Link("linkint","Link Integrity","../cfg/net-linkintegrity.html");
	}
	

	// here we want to remove the encryption tab from the Security submenu if the
	// security mode on either card is set to WPA, WPA-PSK, or 802.1x
	// both cards have to be set to 5, 2, 4, or ' ' 
	if(((secModeA==5) || (secModeA==2) || (secModeA==4)|| (secModeA=='')) &&
      ((secModeB==5) || (secModeB==2) || (secModeB==4)|| (secModeB=='')))
	{     
            // subgrpSec[1]=subgrpSec[2];   //steve consider this
            // subgrpSec[2]=subgrpSec[3];
	} 
	

	//here we reset the number of items under each subgroup.  look below to identify which subgrp
	//corresponds to which position in the array.
	subNumArray[0] = 1;
	subNumArray[1] = 10;
	subNumArray[2] = 9;
	subNumArray[3] = 5;
	subNumArray[4] = 1;
	subNumArray[5] = 1;

	if((ProductId.indexOf("1.3.6.1.4.1.11898.2.4.12") !=-1) || (ProductId.indexOf("1.3.6.1.4.1.11898.2.4.13") !=-1)|| (ProductId.indexOf("1.3.6.1.4.1.11898.2.4.14") !=-1)) 
	{
		subNumArray[6] = 5;
		subNumArray[17] = 4;
	} 
	if((ProductId.indexOf("1.3.6.1.4.1.11898.2.4.6") != -1) || (ProductId.indexOf("1.3.6.1.4.1.11898.2.4.10") != -1))
	{
		// No DHCP relay page for AP2000 and AP600
		subNumArray[6] = 3;
	}

	if((ProductId.indexOf("1.3.6.1.4.1.11898.2.4.10") !=-1)||(ProductId.indexOf("1.3.6.1.4.1.11898.2.4.13") !=-1))  {    //AP600 or AP700
		subNumArray[7] = 4;
		subNumArray[16] = 4;
	}
	else if((ProductId.indexOf("1.3.6.1.4.1.11898.2.4.6") !=-1) ||(ProductId.indexOf("1.3.6.1.4.1.11898.2.4.12") !=-1)||(ProductId.indexOf("1.3.6.1.4.1.11898.2.4.14") !=-1)) {  // AP2000 or AP4000
		subNumArray[7] = 3;
		subNumArray[16] = 3; //jm:  ok-  this is for the VLAN menu bar.  check to see if cards
                                     //are in slot A or slot B and adjust number of options accordingly
		if(slotAcard!=' '){   
         subNumArray[7]++;
			subNumArray[16]++;
      }

		if(slotBcard!=' ') {
         subNumArray[7]++;
         subNumArray[16]++;
      }
	}

	subNumArray[8] = 5;
	subNumArray[9] = 4;
	subNumArray[10] = 4;
	subNumArray[11] = 4;
	subNumArray[12] = 3;
	subNumArray[13] = 1;  //RBMA - Sujit
	subNumArray[14] = 2;
	subNumArray[15] = 2;
	
        if(((secModeA==5) || (secModeA==2) || (secModeA==4)|| (secModeA=='')) &&((secModeB==5) || (secModeB==2) || (secModeB==4)|| (secModeB=='')))
	//adjust the number of items in the Security sub-submenu if security mode is 802.1x, WPA, WPA-PSK
	subNumArray[12] = 5;
	
        //set up us the bomb
	//attach the subgroups to the subgrparray
	subgrpArray[0] = subgrpStatus;
	subgrpArray[1] = subgrpCfg;
	subgrpArray[2] = subgrpMon;
	subgrpArray[3] = subgrpCmd;
	subgrpArray[4] = subgrpHelp;
	subgrpArray[5] = subgrpLogoff;
	subgrpArray[6] = subgrpNet;
	subgrpArray[7] = subgrpIF;
	subgrpArray[8] = subgrpMgt;
	subgrpArray[9] = subgrpFilt;
	subgrpArray[10] = subgrpAlarm;
	subgrpArray[11] = subgrpBri;
	subgrpArray[12] = subgrpQoS;
	subgrpArray[13] = subgrpRad;
	subgrpArray[14] = subgrpUpdateAP;
	subgrpArray[15] = subgrpRetrieveFromAP;
	subgrpArray[16] = subgrpVLAN;
	subgrpArray[17] = subgrpMonMesh;
	
}

function Link(lbl,txt,url)
{
	this.label = lbl;
	this.text = txt;
	this.link = url;
}

function drawButtons(lynx,live)
{
	var count,theclass;
	for(count=0 ; count < numGrps ; count++)
	{
		if(count == live)
			theclass = "actbutton";
		else
			theclass = "cmdbutton";
		document.write('<TR><TD align="middle" class="',theclass,'">');
		document.write('<A class="',theclass,'" href="',lynx[count].link,'">');
		document.write(lynx[count].text);
		document.write('</A></TD></TR>');
	}
}

function drawTabRow(lynx,grpLive,live,start,finish,type,indents)
{
	var nbr = subNumArray[grpLive];
	var count,prefix,leftFlag,rightFlag,thisFlag,theEdge;

	var doLeft,doRight,forceInactive;
	var isNetscape = (navigator.appName == "Netscape");

	if( (live == -1) || (live < start) || (live > finish) )
	{
		forceInactive = 1;
	}
	for ( count = 0; count < indents; count++)
		document.write('<TD class="tab-indent">&nbsp;</TD>');

	for(count=start ; count <= finish ; count++)
	{
		// First define the link
		if( ! isNetscape)
			document.write('<A href="',lynx[count].link,'">');

		// determine if this is the active tab
		if(live == count)
		{
			prefix = "act-tab";
			thisFlag = "a";
			leftFlag = "i"
			rightFlag = "i"
		}
		else
		{
			prefix = "nav-tab";
			thisFlag = "i";
			leftFlag = "i"
			rightFlag = "i"
			if(forceInactive)
			{
				doRight = 1;
				doLeft = (count == start);
			}
			else
			{
				if(count > live)
				{
					doLeft = 0;
					doRight = 1;
				}
				else
				{
					doLeft = 1;
					doRight = 0;
				}
				if(live == (count - 1) )
					leftFlag = "a";
				if(live == (count + 1) )
					rightFlag = "a";
			}
		}

		if( type == 1 )
			prefix = "u-" + prefix;

		if(thisFlag == "a")
		{
			if(count == start)
			{
				theEdge = "act-tab-left";
				if(type == 4)
					theEdge = "sub-" + theEdge;
				document.write('<TD class="',theEdge,'">&nbsp;</TD>');
			}
			else
			{
				document.write('<TD class="act-tab-mid-i-a">&nbsp;</TD>');
			}
		}
		else
		{
			if(doLeft)
			{
				if(count == start)
					document.write('<TD class="',prefix,'-left">&nbsp;</TD>');
				else
					document.write('<TD class="',prefix,'-mid-',leftFlag,'-i-l">&nbsp;</TD>');
			}
		}

		// Now do the label
		document.write('<TD class="',prefix,'" align="middle">');
		if(isNetscape)
			document.write('<A href="',lynx[count].link,'" class="',prefix,'">');
		document.write(lynx[count].text);
		if(isNetscape)
			document.write('</A>');
		document.write('</TD>');

		// And the right edge
		if(thisFlag == "a")
		{
			if(count == finish)
			{
				theEdge = prefix + "-right";
				if(type == 2)
					theEdge = theEdge + "-low";
				document.write('<TD class="',theEdge,'">&nbsp;</TD>');
			}
			else
				document.write('<TD class="act-tab-mid-a-i">&nbsp;</TD>');
		}
		else
		{
			if(doRight)
			{
				if(count == finish)
				{
					theEdge = prefix + "-right";
					if(type == 2)
						theEdge = theEdge + "-low";
					document.write('<TD class="',theEdge,'">&nbsp;</TD>');
				}
				else
					document.write('<TD class="',prefix,'-mid-i-',rightFlag,'-r">&nbsp;</TD>');
			}
		}



		// last, close the link
		if(!isNetscape)
			document.write('</A>');
	}


}

function instantReboot()
{
		modifys(document.rebootform.rebootflag);
		document.rebootform.submit();
}


