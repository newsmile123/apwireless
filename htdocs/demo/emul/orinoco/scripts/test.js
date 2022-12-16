// Joe Martin, April 2002
// Agere Systems
// various javascripts used for interactive content on the web pages for summer 02 release


//an array that correlates the index of "distance between APs" with available choices for multicast rate
		var APandRateArray = new Array(
					new Array(
					new Array ("1 Mbit/Sec",2),
					new Array ("2 Mbit/Sec",4)
					),
					new Array(
					new Array ("1 Mbit/Sec",2),
					new Array ("2 Mbit/Sec",4),
					new Array ("5.5 Mbit/Sec",11)
					),
					new Array(
					new Array ("1 Mbit/Sec",2),
					new Array ("2 Mbit/Sec",4),
					new Array ("5.5 Mbit/Sec",11),
					new Array ("11 Mbit/Sec",22)
					),
					new Array(
					new Array ("1 Mbit/Sec",2),
					new Array ("2 Mbit/Sec",4),
					new Array ("5.5 Mbit/Sec",11),
					new Array ("11 Mbit/Sec",22)
					),
					new Array(
					new Array ("1 Mbit/Sec",2),
					new Array ("2 Mbit/Sec",4),
					new Array ("5.5 Mbit/Sec",11),
					new Array ("11 Mbit/Sec",22)
					)
				);

var splitArray=new Array();
var splitindex = 0;


//splits a string using DELIMITER into a global array, splitArray.
//since it will be used for the pull down menu which requires a value and text field,
//which may differ in some instances, it will create multi-dimensionality to the array
//splitArray as it parses the string.
function splits(string,delimiter) {
   var strLength = string.length, txtLength = delimiter.length;
   
   if ((strLength == 0) || (txtLength == 0)) return;

   var i = string.indexOf(delimiter);
   if ((!i) && (delimiter != string.substring(0,txtLength))) return;
   if (i == -1) {
   	splitArray[splitindex]=new Array();
       splitArray[splitindex] [0] = string;
	splitArray[splitindex++][1]=string;
	   return;
   }

   splitArray[splitindex]=new Array();
   splitArray[splitindex] [1] = string.substring(0,i);
	splitArray[splitindex++][0] = string.substring(0,i);

   if (i+txtLength < strLength)
       splits(string.substring(i+txtLength,strLength),delimiter);

   return;
}



//sorts the multiDimensional global splitArray
function sort(arrayName) {
   for (var i=0; i<(splitindex-1); i++)
       for (var j=i+1; j<splitindex; j++)
           if (parseInt(arrayName[j][0]) < parseInt(arrayName[i][0])) {
               var dummyname = arrayName[i][0];
	        var dummyvalue = arrayName[i][1];
               arrayName[i][0] = arrayName[j][0];
		 arrayName[i][1] = arrayName[j][1];
		 arrayName[j][1] = dummyvalue;
               arrayName[j][0] = dummyname;
           }
}


// assigns the GHz value to the channel pull down box
function GHzize(chanarray,opmode)
{
   if (opmode == "6") {
      opmode = 6;
   }

   if (opmode == 6) {
      for(var i=0; i<splitindex;i++) {
         var chan=parseInt(chanarray[i][1]);
         var chanstring = chanarray[i][0];

         if( chan % 10 == 0) {
            freq = 4940 + chan /2;
            var newstring = chanstring + " - " + freq + " GHz";
   			chanarray[i] [0] =  newstring;        
         }
		   else {
            freq = 4940 + ((chan -1) /2);
            var newstring = chanstring + " - " + freq + ".5 GHz";
   			chanarray[i] [0] =  newstring;      
         }
      }
   }
   else {  
	if(parseInt(chanarray[0][1])<20)
		for(var i=0;i<splitindex;i++)
			{
			var chan=parseInt(chanarray[i][1]);
			var chanstring = chanarray[i][0];
   			if(chan!=14) {
	   			var freq = (2.407+((5*chan)/1000));
   			} else { // only for channel 14
	   			var freq = (2.407+((5*chan)/1000)) + 0.007; // offset for ch 14 only
			}
   			var newstring = chanstring + " - " + freq + " GHz";
   			chanarray[i] [0] =  newstring;
			}
	else	
		   for(var i=0; i<splitindex;i++) {
			var chan=parseInt(chanarray[i][1]);
			var chanstring = chanarray[i][0];
   			var freq = (((5000+((chan/4)*20)))/1000);
   			var newstring = chanstring + " - " + freq + " GHz";
   			chanarray[i] [0] =  newstring;
		}
}

}

// tags Mbps onto an array used for pulldown menus
function MBPSize(chanarray)
{
	for(var i=0; i<splitindex;i++)
		{
			if(chanarray[i][1]==0) {
				chanarray[i][0]= "Auto Fallback";
			} else {
				chanarray[i][0]= chanarray[i][0] + " Mbps";
			}
			chanarray[i][1] = chanarray[i][1]*2;
		}
}


// parseomatic -  overloadable function for breaking up strings returned by SNMP agent
// and using results to propagate pull-down menus.  sort is done automagically.
// value and text label are both assigned.
//		string -		the string you wish to parse
//		delimiter -	the delimeter used in the string (SNMP agent uses : and ' ')
//		pulldown-	the object of the pulldown menu
//		action - 		designate a specific action for type of menu being filled
//						1: channel list
//						2: rate box

function parseomatic(string,delimiter,pulldown,action, opmode) {
   splitindex=0;
   splits(string,delimiter);
   splitArray.length=splitindex;

   sort(splitArray);
  	switch(action){
  		case 1:
			GHzize(splitArray,opmode);
			break;
		case 2:
			MBPSize(splitArray);
			break;
  		}
   fillAPandRateArray(pulldown,splitArray);
}


//onLoad handler that fills in the defaults for the Wireless Slot A and B config pages;  makes sure that the proper
//multicast rates get filled in based on "distance from AP" and runs the ACS greyout script
function fillWlpageDefaults11b(chanarray,currentchan, opmode){

	parseomatic(chanarray,' ',document.forms[0].FreqChanSelect,1,opmode);		
	document.forms[0].FreqChanSelect.options[0].selected=true;  // set highlight to option 0
	selectProperChan(document.forms[0].FreqChanSelect,currentchan); //attempt to set to proper channel

	var objarray=new Array('FreqChanSelect');
	var numobjs=1;
	cbDisabler(document.forms[0].ACSbox,objarray,numobjs,'1');

	
	var oldsetting = document.forms[0].mcastRateBox.selectedIndex;
	fillAPandRateArray(document.forms[0].mcastRateBox,APandRateArray[document.forms[0].distAPbox.selectedIndex]);
	document.forms[0].mcastRateBox.selectedIndex = oldsetting;

	
}

//onLoad handler that fills in the defaults for the Wireless Slot A and B config pages;  makes sure that the proper
//multicast rates get filled in based on "distance from AP" and runs the ACS greyout script
function fillWlpageDefaults(chanarray,currentchan, opmode){

	parseomatic(chanarray,' ',document.forms[0].FreqChanSelect,1,opmode);		
	document.forms[0].FreqChanSelect.options[0].selected=true;  // set highlight to option 0
	selectProperChan(document.forms[0].FreqChanSelect,currentchan); //attempt to set to proper channel

	var objarray=new Array('FreqChanSelect');
	var numobjs=1;
	//cbDisabler(document.forms[0].ACSbox,objarray,numobjs,'1');

}


function fillDHCPpageDefaults(){
	var objarray=new Array('gwIPaddr','priDNSIPaddr','secDNSIPaddr');
	var numobjs=3;
	cbDisabler(document.forms[0].dhcpbox,objarray,numobjs,'0');
}

function linkintPageDefaults(meshMode){
	var objarray=new Array('pollint','pollret');
	var numobjs=2;

	if (meshMode==3){
		document.forms[0].pollint.disabled=true;
		document.forms[0].pollret.disabled=true;	
		}
	else {		 
	    cbDisabler(document.forms[0].linkintstat,objarray,numobjs,'0');
	}
	
}

function vlanPageDefaults(){
		var objarray=new Array('vlanmgtid');
	var numobjs=1;
	cbDisabler(document.forms[0].VLANstat,objarray,numobjs,'0');
}

function vlanPageDefaultsALPHA(){
		var objarray=new Array('vlanmgtid','vlanidA');
	var numobjs=2;
	cbDisabler(document.forms[0].VLANstat,objarray,numobjs,'0');
}


function handlePktFwd(){
	var objarray=new Array('pacint','pacmac');
	var numobjs=2;
	cbDisabler(document.forms[0].pktsts,objarray,numobjs,'0');
}

//handle the interactive checkbox on the Syslog page
function handleSyslogDefaults(){
	var objarray=new Array('logLowPri');
	var numobjs=1;
	cbDisabler(document.forms[0].syslog,objarray,numobjs,'0');
}


function filtadvPageDefaults(){
		var objarray=new Array('arpIPaddr','arpIPsubnet');
		var numobjs=2;
		cbDisabler(document.forms[0].IPARPfilt,objarray,numobjs,'0');
}

function servicesPageDefaults(){
	var objarray=new Array('telnetport','telnetlogin','telnetsession');
	var numobjs=3;
	cbDisabler(document.forms[0].telnetbox,objarray,numobjs,'0');
	var objarray2=new Array('httpport');
	var numobjs2=1;
	cbDisabler(document.forms[0].httpbox,objarray2,numobjs2,'0');
}

function radiusPageDefaults(){
	var objarray2=new Array('server1','ipaddr1','dest1','resp1','retrans1','secret1','secret1c');
	var numobjs2=7;
	cbDisabler(document.forms[0].radenable1,objarray2,numobjs2,'0');
	var objarray3=new Array('server2','ipaddr2','dest2','resp2','retrans2','secret2','secret2c');
	var numobjs3=7;
	cbDisabler(document.forms[0].radenable2,objarray3,numobjs3,'0');
}


function secPageDefaults(ProductId){
	var objarray=new Array('key1A','key2A','key3A','key4A','usekeyA');
	var numobjs=5;
	cbDisabler(document.forms[0].WEPenableA,objarray,numobjs,'0');
	if((ProductId.indexOf("1.3.6.1.4.1.11898.2.4.6") !=-1)||(ProductId.indexOf("1.3.6.1.4.1.11898.2.4.12") !=-1)||(ProductId.indexOf("1.3.6.1.4.1.11898.2.4.14") !=-1))  {
	var objarray2=new Array('key1B','key2B','key3B','key4B','usekeyB');
	var numobjs2=5;
	cbDisabler(document.forms[0].WEPenableB,objarray2,numobjs2,'0');
}
}

function secPageDefaultsALPHA(){
	var objarray=new Array('key1A','key2A','key3A','key4A','usekeyA');
	var numobjs=5;
	cbDisabler(document.forms[0].WEPenableA,objarray,numobjs,'0');
}

function secRADPageDefaults(){
	var objarray=new Array('Interval','IfBitmask');
	var numobjs=2;
	cbDisabler(document.forms[0].RADStatus,objarray,numobjs,'0');
}

function secRADPageDefaultsALPHA(){
	var objarray=new Array('Interval');
	var numobjs=1;
	cbDisabler(document.forms[0].RADStatus,objarray,numobjs,'0');
}

function spanningPageDefaults(){
		var objarray=new Array('bripri','hello','maxage','forward');
		var numobjs=4;
		cbDisabler(document.forms[0].SpanTreebox,objarray,numobjs,'0');
}

function setupwizIfPageDefaults(chanarray,currentchan,opmode){
var toBeLoaded=0;

	parseomatic(chanarray,' ',document.forms[0].FreqChanSelect,1,opmode);		
	document.forms[0].FreqChanSelect.options[0].selected=true;  // set highlight to option 0
	selectProperChan(document.forms[0].FreqChanSelect,currentchan); //attempt to set to proper channel

	var objarray=new Array('FreqChanSelect');
	var numobjs=1;
	cbDisabler(document.forms[0].ACSbox,objarray,numobjs,'1');
}

function setupwizIfPageDefaultsB(opmode){

        parseomatic(chanarray,' ',document.forms[0].FreqChanSelect,1,opmode);		
	document.forms[0].FreqChanSelect.options[0].selected=true;  // set highlight to option 0
	selectProperChan(document.forms[0].FreqChanSelect,currentchan); //attempt to set to proper channel

	var objarray=new Array('FreqChanSelect');
	var numobjs=1;
	cbDisabler(document.forms[0].ACSbox,objarray,numobjs,'1');

	
	var oldsetting = document.forms[0].mcastRateBox.selectedIndex;
	fillAPandRateArray(document.forms[0].mcastRateBox,APandRateArray[document.forms[0].distAPbox.selectedIndex]);
	document.forms[0].mcastRateBox.selectedIndex = oldsetting;
}

//propagates the Rate Array based on selected "distance from AP"
function fillAPandRateArray(selectCtrl, itemArray, goodPrompt, badPrompt, defaultItem) {

				
		var i, j;
		var prompt;
      var prevRate;
      var reqRate;
      var reqDist;

      prevRate = selectCtrl.value;
      reqRate =  prevRate;
      reqDist=itemArray.length; // a lengths of 2=large, 3=medium and 4= small, mini and micro 

      if (((prevRate==22) || (prevRate==11)) && (reqDist==2)){
         //if long and 11 or 5.5 Mbits per sec
         reqRate = 4;
      }
      if ((prevRate==22) && (reqDist==3)){
         // if medium and 11 Mbits per sec
         reqRate = 11;
      }

		// empty existing items
		for (i = selectCtrl.options.length; i >= 0; i--) {
			selectCtrl.options[i] = null; 
		}
		prompt = (itemArray != null) ? goodPrompt : badPrompt;
		if (prompt == null) {
			j = 0;
		}
		else {
			selectCtrl.options[0] = new Option(prompt);
			j = 1;
		}
		
		if (itemArray != null) {
		// add new items
		for (i = 0; i < itemArray.length; i++) {
			selectCtrl.options[j] = new Option(itemArray[i][0]);
		if (itemArray[i][1] != null) {
			selectCtrl.options[j].value = itemArray[i][1]; 
      if (selectCtrl.options[j].value==reqRate)
         selectCtrl.options[j].selected=true;
		}
		j++;
		}
		// select first item (prompt) for sub list
		//selectCtrl.options[3].selected = true;
  		 }
}


//greys out ip configuration information if "dynamic" is selected on ipconf page
//also handles the greyout of the DNS client box
function handleIPbox(ctx){
	context=eval(ctx);
	if(context.selectedIndex==0) {
		document.forms[0].ipBox.disabled=0;
		document.forms[0].gatewayBox.disabled=0;
		document.forms[0].subnetBox.disabled=0;
		}
	if(context.selectedIndex==1) {
		document.forms[0].ipBox.disabled=1;
		document.forms[0].gatewayBox.disabled=1;
		document.forms[0].subnetBox.disabled=1;
		}

	var objarray=new Array('priDNSIPaddr','secDNSIPaddr','defDNSdomain');
	var numobjs=3;
	cbDisabler(document.forms[0].dnssts,objarray,numobjs,'0');
	
}

function SetupWizHandleIPbox(ctx){
	context=eval(ctx);
	if(context.selectedIndex==0) {
		document.forms[0].ipBox.disabled=0;
		document.forms[0].gatewayBox.disabled=0;
		document.forms[0].subnetBox.disabled=0;
		}
	if(context.selectedIndex==1) {
		document.forms[0].ipBox.disabled=1;
		document.forms[0].gatewayBox.disabled=1;
		document.forms[0].subnetBox.disabled=1;
		}
}

//handles the security mode greyout on the 802.1x page
function handleModeboxA(ctx){
	context=eval(ctx);
	if(context.selectedIndex==0){
		document.forms[0].keylenA.disabled=1;
		document.forms[0].rekeyIntA.disabled=1;
		document.forms[0].presharedkeyA.disabled=1;
		document.forms[0].pskpassphraseA.disabled=1;	
		}
	if(context.selectedIndex==1){
		document.forms[0].presharedkeyA.disabled=1;
		document.forms[0].pskpassphraseA.disabled=1;	
		}
	if(context.selectedIndex==2){
 			document.forms[0].keylenA.disabled=1;
		document.forms[0].presharedkeyA.disabled=1;
		document.forms[0].pskpassphraseA.disabled=1;
		}
	if(context.selectedIndex==3){
 			document.forms[0].keylenA.disabled=1;
		document.forms[0].presharedkeyA.disabled=1;
		document.forms[0].pskpassphraseA.disabled=1;
		}
	if(context.selectedIndex==4){
		document.forms[0].keylenA.disabled=1;
	}
	
}

//handles the security mode greyout on the 802.1x page
function handleModeboxB(ctx){
	context=eval(ctx);
	if(context.selectedIndex==0){
		document.forms[0].keylenB.disabled=1;
		document.forms[0].rekeyIntB.disabled=1;
		document.forms[0].presharedkeyB.disabled=1;
		document.forms[0].pskpassphraseB.disabled=1;	
		}
	if(context.selectedIndex==1){
		document.forms[0].presharedkeyB.disabled=1;
		document.forms[0].pskpassphraseB.disabled=1;	
		}
	if(context.selectedIndex==2){
 			document.forms[0].keylenB.disabled=1;
		document.forms[0].presharedkeyB.disabled=1;
		document.forms[0].pskpassphraseB.disabled=1;
		}
	if(context.selectedIndex==3){
		document.forms[0].keylenB.disabled=1;
		document.forms[0].presharedkeyB.disabled=1;
		document.forms[0].pskpassphraseB.disabled=1;
		}
	if(context.selectedIndex==4){
		document.forms[0].keylenB.disabled=1;
	}
	
}

function handleModeboxALPHA(ctx){

	//jm:  has this been deprecated?
	
	context=eval(ctx);
	if(context.selectedIndex==0){
		document.forms[0].keylenA.disabled=1;
		document.forms[0].rekeyIntA.disabled=1;
		document.forms[0].presharedkeyA.disabled=1;
		document.forms[0].pskpassphraseA.disabled=1;	
		}
	if(context.selectedIndex==1){
		document.forms[0].presharedkeyA.disabled=1;
		document.forms[0].pskpassphraseA.disabled=1;	
		}
	if(context.selectedIndex==2){
			document.forms[0].keylenA.disabled=1;
		document.forms[0].presharedkeyA.disabled=1;
		document.forms[0].pskpassphraseA.disabled=1;
		}
	if(context.selectedIndex==3){
		document.forms[0].keylenA.disabled=1;
		document.forms[0].presharedkeyA.disabled=1;
		document.forms[0].pskpassphraseA.disabled=1;
	}

}


//this function searches through the channel pulldown menu and attempts to set the selected chan
//to the actual channel.

function selectProperChan(context,currentchan){
	var count=0;

	for(count=0;count<context.options.length;count++)
		if(currentchan==context.options[count].value)
			context.options[count].selected=true;
		
}


//this function will enable/disable any object names in objarray when called, depending on the value of the context
//polarity=1 will cause disable of options if checkbox is ENABLED

function cbDisabler(context,objarray,numobj,polarity){
	var count;
	var change;
	var header="document.forms[0].";

	if(context.value=="1"){
		for(count=0; count<numobj; count++){
			change=eval(header+objarray[count])
			if(polarity=="1")
				change.disabled=1;
			else
				change.disabled=0;
					}
			}
	if(context.value=="2"){
		for(count=0;count<numobj;count++){
			change=eval(header+objarray[count])
			if(polarity=="1")
				change.disabled=0;
			else
				change.disabled=1;
			}
		}
}



function SubmitTurboCB(context,hiddenbox) {
	if(context.checked==true){
		hiddenbox.value="1";
		}
	if(context.checked==false){
		hiddenbox.value="2";
		}
	modify(hiddenbox);
	transmit();
}


//handles setting the value for a hidden field when a checkbox is pressed, if included in a onClick event
function doCB(context,hiddenbox){
	
	if(context.checked==true){
		hiddenbox.value="1";
		}
	if(context.checked==false){
		hiddenbox.value="2";
		}
	modify(hiddenbox);
}

//handles setting the value for a hidden field when a checkbox is pressed, if included in a onClick event
// THIS IS FOR SCALARS
function doCBS(context,hiddenbox){
	
	if(context.checked==true){
		hiddenbox.value="1";
		}
	if(context.checked==false){
		hiddenbox.value="2";
		}
	modifys(hiddenbox);
}

//hey ho here we go... this is a special checkbox for the .11a "enable turbo mode" which binds the onClick handler for 
//changing the transmit rate and channel allowed boxes.
function turbomodeCB(name,hidboxname,option,currentchan,regdomain,variant,hide){

	if(hide==1)
			document.write('<INPUT type="hidden" id="fake'+hidboxname+'">');
	else
		{
		document.write('<TR><TD>Enable '+name+' </TD><TD>');
		document.write('<INPUT type="checkbox" id="fake'+hidboxname+'" onClick="SubmitTurboCB(this,document.forms[0].'+hidboxname+');" ');
		if(option==1){
			document.write(' CHECKED');
			}
		document.write('></TD></TR>');
		}
}

//create a checkbox when passed in the label, the name of a hidden type box to store the return value to the snmp agent,
//and the current value of this MIB object.  the hidden box creation wont work here because of namespace lookup issues

function createCB(name,hidboxname,option){
	document.write('<TR><TD>Enable '+name+' </TD><TD>');
	document.write('<INPUT type="checkbox" id="fake'+hidboxname+'" onClick="doCB(this,document.forms[0].'+hidboxname+')" ');
	if(option==1){
		document.write(' CHECKED');
		}
	document.write('></TD></TR>');
}


//same function, except for checkboxes with Scalar returns
function createCBS(name,hidboxname,option){
	document.write('<TR><TD>Enable '+name+' </TD><TD>');
	document.write('<INPUT type="checkbox" id="fake'+hidboxname+'" onClick="doCBS(this,document.forms[0].'+hidboxname+')" ');
	if(option==1){
		document.write(' CHECKED');
		}
	document.write('></TD></TR>');
}

//create an interactive checkbox, objarray is list of object names to disable/enable 
function createInterCB(name,hidboxname,option,objarray,numobjs,polarity){
	document.write('<TR><TD>Enable '+name+' </TD><TD>');
	document.write('<INPUT type="checkbox" id="fake'+hidboxname+'" onClick="doCB(this,document.forms[0].'+hidboxname+');cbDisabler(document.forms[0].'+hidboxname+',objarray,numobjs,polarity)"');
	if(option==1){
		document.write(' CHECKED');
		}
	document.write('></TD></TR>');
}

function createInterCB3(name,hidboxname,option,objarray3,numobjs3,polarity3){
	document.write('<TR><TD>Enable '+name+' </TD><TD>');
	document.write('<INPUT type="checkbox" id="fake'+hidboxname+'" onClick="doCB(this,document.forms[0].'+hidboxname+');cbDisabler(document.forms[0].'+hidboxname+',objarray3,numobjs3,polarity3)"');
	if(option==1){
		document.write(' CHECKED');
		}
	document.write('></TD></TR>');
}

function createInterCB2(name,hidboxname,option,objarray2,numobjs2,polarity2){
	document.write('<TR><TD>Enable '+name+' </TD><TD>');
	document.write('<INPUT type="checkbox" id="fake'+hidboxname+'" onClick="doCB(this,document.forms[0].'+hidboxname+');cbDisabler(document.forms[0].'+hidboxname+',objarray2,numobjs2,polarity2)"');
	if(option==1){
		document.write(' CHECKED');
		}
	document.write('></TD></TR>');
}

//create an interactive checkbox, objarray is list of object names to disable/enable 
function createInterCBScalar(name,hidboxname,option,objarray,numobjs,polarity){
	document.write('<TR><TD>Enable '+name+' </TD><TD>');
	document.write('<INPUT type="checkbox" id="fake'+hidboxname+'" onClick="doCBS(this,document.forms[0].'+hidboxname+');cbDisabler(document.forms[0].'+hidboxname+',objarray,numobjs,polarity)"');
	if(option==1){
		document.write(' CHECKED');
		}
	document.write('></TD></TR>');
}

//create an interactive checkbox, objarray is list of object names to disable/enable 
function createInterCBScalar2(name,hidboxname,option,objarray2,numobjs2,polarity2){
	document.write('<TR><TD>Enable '+name+' </TD><TD>');
	document.write('<INPUT type="checkbox" id="fake'+hidboxname+'" onClick="doCBS(this,document.forms[0].'+hidboxname+');cbDisabler(document.forms[0].'+hidboxname+',objarray2,numobjs2,polarity2)"');
	if(option==1){
		document.write(' CHECKED');
		}
	document.write('></TD></TR>');
}

//Auto Configuration
function mgtAutoConfig(option){
	var objarray=new Array('autocfgfile','autocfgtftp')
	var numobjs=2;
	cbDisablerAutoConfig(document.forms[0].AutoConfigEnable,option,objarray,numobjs,'0');
}
function createInterCBScalarAutoConfig(name,hidboxname,option1,option2,objarray,numobjs,polarity){
	document.write('<TR><TD>Enable '+name+' </TD><TD>');
	document.write('<INPUT type="checkbox" id="fake'+hidboxname+'" onClick="doCBS(this,document.forms[0].'+hidboxname+');cbDisablerAutoConfig(document.forms[0].'+hidboxname+',option2,objarray,numobjs,polarity)"');
	if(option1==1){
		document.write(' CHECKED');
		}
	document.write('></TD></TR>');
}

function cbDisablerAutoConfig(context,option2,objarray,numobj,polarity){
	var count;
	var change;
	var header="document.forms[0].";

	if(context.value=="1" ){
		for(count=0; count<numobj; count++){
			change=eval(header+objarray[count])
			if(polarity=="1")
				change.disabled=1;
			else{
				if (option2==1)
					change.disabled=0;
				else
					change.disabled=1;
				}
			}
		}
	if(context.value=="2"){
		for(count=0;count<numobj;count++){
			change=eval(header+objarray[count])
			if(polarity=="1")
				change.disabled=0;
			else
				change.disabled=1;
			}
		}
}

function vlanid_change(obj, hiddenObj) 
	{
		var idVal = obj.value;

     if (idVal == "untagged") {
        hiddenObj.value=-1;
     }
     else{
        hiddenObj.value=idVal;
     }


	  if (idVal == -1) {
			obj.value  = "untagged";
		}

     if (hiddenObj.id !="hiddenVlanMgtId")
		modify(hiddenObj);
     else
        modifys(hiddenObj);

} 

var secPrfIdxSplitChar = '_'; /* This is used to retrieve the index from an object name i.e objname_1x0 gives 1x0 */
var secPrfSubIdxSplitChar = 'x'; /* This is used to split the index i.e 0x1 gives you 0 & 1 */
var NON_SEC_STA=0, WEP_STA=1, DOT1X_STA=2, WPA_STA=3, WPA_PSK_STA=4, DOT11I_STA=5, DOT11I_PSK_STA=6, MAX_STA=7;

/* This function is passed two arguments.
 *	secprofileidx is an number varying from 1..32 
 * 	secmodeidx which is a number varying from 1..7 
 */
function secModeEntryObj(secProfileIdx, secModeIdx)
{
	//alert("create secModeEntry secprf=" +secProfileIdx +" secMode=" + secModeIdx);
	var idxStr = secProfileIdx.toString() + secPrfSubIdxSplitChar + secModeIdx.toString();

	var staTypeNameString = new String( "fakestaType_");
	var key0NameString = new String( "key0_"); 
	var key1NameString = new String( "key1_"); 
	var key2NameString = new String( "key2_"); 
	var key3NameString = new String( "key3_"); 
	var txkeyNameString = new String( "txkey_");
	var txkeyLenString = new String( "encryptionKeyLengthId_");
	var rekeyString = new String( "rekey_");
	var PSKPassString =  new String( "PSKPassPhraseId_");

	staTypeNameString = staTypeNameString + idxStr;
	key0NameString = key0NameString + idxStr;
	key1NameString = key1NameString + idxStr;
	key2NameString = key2NameString + idxStr;
	key3NameString = key3NameString + idxStr;
	txkeyNameString= txkeyNameString + idxStr;
	txkeyLenString = txkeyLenString  + idxStr;
	rekeyString = rekeyString + idxStr;
	PSKPassString  = PSKPassString + idxStr;

	this.statusObj = document.getElementById(staTypeNameString);

	if(secModeIdx - 1 == WEP_STA)
	{
		this.key0Obj = document.getElementById(key0NameString);
		this.key1Obj = document.getElementById(key1NameString);  
		this.key2Obj = document.getElementById(key2NameString);  
		this.key3Obj = document.getElementById(key3NameString);  
		this.txKeyObj = document.getElementById(txkeyNameString);

		this.key0Obj.disabled = this.key1Obj.disabled = this.key2Obj.disabled = this.key3Obj.disabled 
		= this.txKeyObj.disabled =  !this.statusObj.checked;		
	}

	/* WEP Key determines the WEP Key Length and so the key length configuration  is not required */
//  if(secModeIdx - 1 == WEP_STA)
//	{
//		this.txKeyLenObj = document.getElementById(txkeyLenString); 
//		this.txKeyLenObj.disabled = 1;
//	}

	if(secModeIdx - 1 == DOT1X_STA)
	{
		this.txKeyLenObj = document.getElementById(txkeyLenString); 
		this.txKeyLenObj.disabled = !this.statusObj.checked;
	}

	if((secModeIdx - 1 == WPA_PSK_STA) || (secModeIdx - 1 == DOT11I_PSK_STA))
	{
		this.PSKPassObj = document.getElementById(PSKPassString); 
		this.PSKPassObj.disabled = !this.statusObj.checked;
	}

}

/* To handle security profile page changes */
function secProfileModifyHdl(secProfileIndexStr)
{
	/* alert("modify hdl profile=" + secProfileIndexStr); */

	/* Create secmode entry objects for each station type */
	var secModeEntryTbl =  new Array;
	for(var i=0;i<MAX_STA;i++)
		secModeEntryTbl[i] = new secModeEntryObj(parseInt(secProfileIndexStr),i + 1);


	/* Handle Mixed Mode Inter relations */

	/* For AP4000/AP700 don't allow non-secure + WPA modes & for AP2000/600 secondgen cards.
	 * For AP2000 don't allow WEP/802.1x + WPA modes for firstgen/agere
	 */

	// In WEP + 802.1x only allow key 0 configuration.
	if(secModeEntryTbl[WEP_STA].statusObj.checked && secModeEntryTbl[DOT1X_STA].statusObj.checked)
	{
		secModeEntryTbl[WEP_STA].key1Obj.disabled = 1;
		secModeEntryTbl[WEP_STA].key2Obj.disabled = 1;
		secModeEntryTbl[WEP_STA].key3Obj.disabled = 1;
	}
}

function createInterCBScalarMesh(name,hidboxname,option,objarray,numobjs,polarity,meshEnabled){
	document.write('<TR><TD>Enable '+name+' </TD><TD>');
	document.write('<INPUT type="checkbox" id="fake'+hidboxname+'" onClick="doCBS(this,document.forms[0].'+hidboxname+');cbDisabler(document.forms[0].'+hidboxname+',objarray,numobjs,polarity)"');
		
	if(option==1){
		document.write(' CHECKED');
		}

     if (meshEnabled==3) {
        document.write(' DISABLED');
        }
     
	document.write('></TD></TR>');
}

function createInterCBMeshIf(name,hidboxname,option,objarray,numobjs,polarity,meshEnabled,meshInterface, actualInterface){
	document.write('<TR><TD>Enable '+name+' </TD><TD>');	
	document.write('<INPUT type="checkbox" id="fake'+hidboxname+'" onClick="doCB(this,document.forms[0].'+hidboxname+');cbDisabler(document.forms[0].'+hidboxname+',objarray,numobjs,polarity)"');
	
		
	if(option==1){
		document.write(' CHECKED');
		}
/*
// This is blocked out for Mesh's single channel operation feature
    if ((meshEnabled==3)&&(meshInterface==actualInterface)) {
        document.write(' DISABLED');
        }
*/    
	document.write('></TD></TR>');
}

