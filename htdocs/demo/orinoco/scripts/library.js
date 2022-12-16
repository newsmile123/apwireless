// These are the functions that allow modification to text fields selections and entries.


function modify(obj)
{	 	
	 obj.name = obj.name + '.*s';	
}	 

function modifys(obj)
{	 	
	 obj.name = obj.name + '.0*s';	
}	 

// This function is for adding table indices to variables
function modifyEntry(obj, selIndx, index)
{	 
	var myname = new String(obj.name);
	var whatname = myname.split(".");
       
       if(whatname[0] != "")
       {
           obj.name = whatname[0];
       }
	 obj.name = obj.name + '.' +selIndx + '.' + index + '.*s';
}	 

// This is for handling vlanids in tables
function vlanidChangeEntry(obj, hiddenObjName,selIndx, index) 
{
	var idVal = obj.value;
	var hiddenObj = document.getElementById(hiddenObjName);

     if (idVal == "untagged") {
        hiddenObj.value=-1;
     }
     else{
        hiddenObj.value=idVal;
     }


	  if (idVal == -1) {
			obj.value  = "untagged";
		}

	if(selIndx == 0)
	{
		modify(hiddenObj);
	}
	else
	{
		modifyEntry(hiddenObj, selIndx, index);
	}
} 


function updateVlanValue(objname, value)
{
	var obj = document.getElementById(objname);

	if(value == -1)
	{
		obj.value = "untagged";
	}
	else
	{
		obj.value = value;
	}

}

function updateDisplay(objName, value)
{
	var obj = document.getElementById(objName);
	obj.value = value;
}

// For radius profile add/edit page
function checkDnsStatus(dnsState, obj, priIndx, secIndx, addOrEdit)
{
	if(dnsState == 2) /* dns is disabled */
	{
		if(obj.selectedIndex != 0) /* Name */
			{
				window.alert("DNS is disabled. \nEnable DNS to use server name.");
				obj.selectedIndex = 0;
				return;
			}
	}
	if(addOrEdit == 1) /* Add an entry */
	{
		modify(obj);
	}
	else
	{
		modifyEntry(obj, priIndx,secIndx);
	}
}

// These are the functions that allow modification to text fields selections and entries
// and alerts for reboot confirmation.

function alertReboots(obj)
{	 	
	var msg =  'The modifications that have been made will take effect only after the device is rebooted.'

	if ( confirm (msg) ) {
		obj.name = obj.name + '.0*s';
		document.forms[0].submit()
	}
	document.location.reload()
}

// Transmit function with Confirmation
function transmitReset() {

	var msg = 'Warning! This action will reset your configuration to factory defaults.'
	if ( confirm(msg) ) {
			document.forms[0].submit()
	}	
}

// Transmit function with Confirmation for TFTP operation 
function transmitRebootTFTP(value,updtfiletype) {

	var msg =  'The download operation performed will only take effect after the device is rebooted.'; 
	var climsg = 'This operation will configure the device with the contents of the batch file.';
	var sshmsg = 'Both the public and private keys should be downloaded for SSH to work.';
	var yesno = 0;
	if( value == 2 ) { /* download operation */
		switch(updtfiletype)
		{
			case '1':
			case '2':
			case '3':
			case '4':
			case '5':
			case '6':
				if ( confirm(msg) ) yesno = 1;
				break;
			case '7':
			case '8':
				yesno = 1;
				window.alert(sshmsg);
				break;
			case '9':
				if ( confirm(climsg) ) yesno = 1;
				break;
			default:
				window.alert('This filetype is not supported');
				break;
		}

		if(1==yesno) document.forms[0].submit();
	}
	else if (value == 1) { /* upload operation */
		document.forms[0].submit()
	}
	else {
		window.alert('Operation not supported');
	}
} 

// Transmit function with Reboot Confirmation
function transmitReboot() {
var flag = 0;
var msg = 'The modifications that have been made will only take effect after the device is rebooted.'
	for ( var i=0; i<document.forms[0].length - 1; i++ ) {
		var obj1 = document.forms[0][i]
		var obj2 = document.forms[0][i+1]
		
		if( document.forms[0].name != "securityEncryption") { 
			
			if ( ( obj1.type == "password" ) && ( obj2.type == "password" ) ) {

				i++;
				if ( obj1.value != obj2.value ) {
				
					flag = 1;
					window.alert( 'The passwords entered do not match.' )
				}
			}
		}
	}

	if ( flag == 0 ) {	
		if ( confirm(msg) ) {
			document.forms[0].submit()
//			document.location.reload()
		}
	}	
}

// This cancels or *resets* the form
function cancel()
{
	document.forms[0].reset()
}

// This function first checks if passwords match and if so submits the changes.

function transmit() {
var flag = 0;

	for ( var i=0; i<document.forms[0].length - 1; i++ ) {
		var obj1 = document.forms[0][i]
		var obj2 = document.forms[0][i+1]
		
		if( document.forms[0].name != "securityEncryption") { 
			
			if ( ( obj1.type == "password" ) && ( obj2.type == "password" ) ) {

				i++;
				if ( obj1.value != obj2.value ) {
				
					flag = 1;
					window.alert( 'The passwords entered do not match.' )
				}
			}
		}
	}

	if ( flag == 0 ) {
		document.forms[0].submit()
//		document.location.reload()
	}
}

function transmitForm1() {
var flag = 0;

	for ( var i=0; i<document.forms[1].length - 1; i++ ) {
		var obj1 = document.forms[1][i]
		var obj2 = document.forms[1][i+1]
		
		if( document.forms[1].name != "securityEncryption") { 
			
			if ( ( obj1.type == "password" ) && ( obj2.type == "password" ) ) {

				i++;
				if ( obj1.value != obj2.value ) {
				
					flag = 1;
					window.alert( 'The passwords entered do not match.' )
				}
			}
		}
	}

	if ( flag == 0 ) {
		document.forms[1].submit()
//		document.location.reload()
	}
}

// This function is specific for the radius page;  makes sure shared secrets are correct

function transmitRadius() {

var flag = 0;
var count = 0;
var objSecName = 'secret';
var objProfileName = 'profile';
var profileMessage = "Correct the following errors before submitting:\n"

var objProfile = document.getElementById(objProfileName);

var objSec1 = document.getElementById(objSecName+'1');
var objSec1c = document.getElementById(objSecName+'1c');

var objSec2 = document.getElementById(objSecName+'2');
var objSec2c = document.getElementById(objSecName+'2c');

	if(objProfile)
	{
		if(objProfile.value == "")
		{
			flag = 1;
			count++;
			profileMessage = profileMessage + "\n " + count +". Profile name is empty.";
		}
	}
	
	if(objSec1 && objSec1c)
	{
		if (( objSec1.type == "password" ) && ( objSec1c.type == "password" ))
			if ( objSec1.value != objSec1c.value ) {
				
			flag = 1;
			count++;
			profileMessage = profileMessage + "\n " + count +". The shared secrets entered for primary server do not match.";
			}

	}

	if(objSec2 && objSec2c)
	{
		if (( objSec2.type == "password" ) && ( objSec2c.type == "password" ))
			if ( objSec2.value != objSec2c.value ) {
				
			flag = 1;
			count++;
			profileMessage = profileMessage + "\n " + count +". The shared secrets entered for backup server do not match.";
			}

	}

	if ( flag == 0 ) {
		document.forms[0].submit();
	}
	else
	{
		window.alert(profileMessage);
	}
}

function callOK() {
		window.close(self)
}


// The following functions are to add table rows.



// The following functions are to edit selected table rows.


// This function selects all the radio buttons

function SelectAll()
{
	for (var i=0;i<document.forms[0].length;i++)
	{
		var obj = document.forms[0][i]
		if (obj.type=="checkbox") obj.checked = true
	}
}

// This function deselects all the radio buttons

function DeselectAll()
{
	for (var i=0;i<document.forms[0].length;i++)
	{
		var obj = document.forms[0][i]
		if (obj.type=="checkbox") obj.checked = false
	}
}

// This function populates the dropdown menu with appropriate interface values

function nameInterface(option)
{
	switch(option)
		{
			case 0:
			case 2:	
				document.write('Disable');
				break;
				
			case 1 :
			case 3 :	
				document.write('Ethernet Only');
				break;
				
			case 4 :
			case 6:	
				document.write('Wireless Only');
				break;
				
			case 7:
			case 5:	
				document.write('All Interfaces');
				break;
								
			default:
				document.write('Undefined');
				break;
		}
}

function nameInterfaceAlpha(option)
{
	switch(option)
		{
			case 15:
			case 13:	
				document.write('All Interfaces');
				break;
				
			case 1 :
			case 3 :	
				document.write('Ethernet');
				break;
				
			case 4 :
			case 6:	
				document.write('Wireless - Slot A');
				break;
				
			case 8 :
			case 10:	
				document.write('Wireless - Slot B');
				break;
				
			default:
				document.write('Undefined');
				break;
		}
}

// This function populates the dropdown menu with appropriate interface values for port Filtering

function portBasedFilternameInterface(option)
{
	switch(option)
		{
			case 0 :
			case 2 :
				document.write('None');
				break;
			case 1 :
			case 3 :
				document.write('Ethernet');
				break;
			case 4 :
			case 6 :
				document.write('Slot A');
				break;
			case 5 :
			case 7 :
				document.write('Slot A and Ethernet');
				break;
			case 8 :
			case 10 :
				document.write('Slot B');
				break;
			case 9 :
			case 11 :
				document.write('Slot B and Ethernet');
				break;
			case 14 :
			case 12 :
				document.write('Slot A and Slot B');
				break;
			case 13 :
			case 15 :
				document.write('All Interfaces');
				break;
			default:
				document.write('All Interfaces');
		}
}


// This function populates the dropdown menu with appropriate status values for port Filtering

function portFiltertableStatus(option)
{
	switch(option)
		{
			case 1 :
				document.write('Enable');
				break;
			case 2 :
				document.write('Disable');
				break;
			case 3 :
				document.write('Delete');
				break;
			default:
				document.write('Enable');
		}
}

// This function populates the dropdown menu with appropriate portType values for port Filtering

function portBasedFilterPortType(option)
{
	switch(option)
		{
			case 1 :
				document.write('TCP');
				break;
			case 2 :
				document.write('UDP');
				break;
			case 3 :
				document.write('TCP/UDP');
				break;
			default:
				document.write('TCP');
		}
}

function MSSInterface(option)
{
	switch(option)
		{
			case 3 :
				document.write('CARD A');
				break;
			case 4 :
				document.write('CARD B');
				break;
			
		}
}

function MSSStationType(option)
{
	switch(option)
		{
			case 6 :
				document.write('MESH');
				break;		
			case 2 :
				document.write('WDS');
				break;
			case 1 :
				document.write('STA');
				break;
		}
}

function MSSStationProt(option)
{
	/*1: ieee802dot11(1) 
 	2: ieee802dot11a(2) 
 	3: ieee802dot11b(3) */

	switch(option)
		{
/*			case 0:
				document.write('WDS');
				break;*/
			case 1 :
				document.write('802.11');
				break;
			case 2 :
				document.write('802.11a');
				break;
			case 3:
				document.write('802.11b');
				break;
			case 5:
				document.write('802.11g');
				break;
		}
}

// This is the function for the ADD/EDIT tables

function tableStatus(option)
{
	switch(option)
		{
			case 1 :
				document.write('Enable');
				break;
			case 2 :
				document.write('Disable');
				break;
			case 3 :
				document.write('Partial');
				break;
			default:
				document.write('Undefined');
		}
}

function blackListStatus(option)
{
	switch(option)
		{
			case 1 :
				document.write('Enable');
				break;
			case 2 :
				document.write('Disable');
				break;
				
			default:
				document.write('Undefined');
		}
}

function radarListStatus(option)
{
	switch(option)
		{
			case 1 :
				document.write('TRUE');
				break;
			case 2 :
				document.write('FALSE');
				break;
				
			default:
				document.write('Undefined');
		}
}


// This is the function for displaying table status, special case for Spanning
// Tree Status

function stptableState(option)
{
	switch(option)
		{
			case 1 :
				document.write('Disabled');
				break;
			case 2 :
				document.write('Blocking');
				break;
			case 3 :
			    document.write('Listening');
				break;
			case 4 :
			    document.write('Learning');
				break;
			case 5 :
				document.write('Forwarding');
				break;
			default:
				document.write('Broken');
		}
}

function stptableStatus(option)
{
	switch(option)
		{
			case 1 :
				document.write('Enabled');
				break;
			case 2 :
				document.write('Disabled');
				break;

		}
}


// This is the function for status ENABLE/DISABLE 

function Status( option )
{
	document.write('<OPTION VALUE=1');
	if(option == 1) {
		document.write(' SELECTED ');
	}
	document.write('>Enable<OPTION VALUE=2');
	if(option == 2) {
		document.write(' SELECTED ');
	}
	document.write('>Disable');  

}

// This function takes in the system up time in time ticks and modifies
// it to this format DD:HH:MM:SS

function timeDisplay( ticks )
{

    var days = 0;
	var hours = 0;
	var minutes = 0;
	var seconds = 0;    

    ticks = ticks/100;
    days = parseInt( ticks/86400 );

    ticks = ticks%86400;
	hours = parseInt( ticks/3600 );

    ticks = ticks%3600;
	minutes = parseInt( ticks/60 );

    ticks = ticks%60;
	seconds = parseInt( ticks );

    if ( days < 10 )
	{
	    days = '0' + days;
    }

    if ( hours < 10 )
	{
	    hours = '0' + hours;
    }

    if ( minutes < 10 )
	{
	    minutes = '0' + minutes;
    }

    if ( seconds < 10 )
	{
	    seconds = '0' + seconds;
    }

    document.write( days + ':' + hours + ':' + minutes + ':' + seconds );

}

//
// This function checks for the Encryption capabilities of the card and
// provides the appropriate values in the drop down menu.
// 
// cardprofile: the profile of the the wireless interface card
// option:		the value set for the key length
//

function checkCardProfile( cardprofile, option )
{

	switch( cardprofile )
	{
	    // Silver Card - Only 40 Bit Encryption Keys
	    // so, we present the user with a 64-bit key option
		case '1':
		{
	        document.write( '<OPTION VALUE=1' );
		    if( option == 1 ) 
		    {
		        document.write( ' SELECTED ');
		    }
		    document.write( '>64 Bits' );
		}
		break;
		
		// Gold Card - 64 and 128 Bit Encryption Keys
		case '3':
		{
	        document.write( '<OPTION VALUE=1' );
		    if( option == 1 ) 
		    {
		        document.write( ' SELECTED ' );
		    }
		    document.write( '>64 Bits<OPTION VALUE=2' );
		    if(option == 2)
			{
			    document.write( ' SELECTED ' );
		    }
		    document.write( '>128 Bits' );
		}
		break;

		// Atheros card - 64  128 and 152 Bit Encryption Keys
		case '7':
		{
	        document.write( '<OPTION VALUE=1' );
		    if( option == 1 ) 
		    {
		        document.write( ' SELECTED ');
		    }
		    document.write( '>64 Bits<OPTION VALUE=2' );
		    if(option == 2)
			{
			    document.write( ' SELECTED ' );
		    }
		    document.write( '>128 Bits');
		    
		}
		break;
		
		
		default:
		{
		    document.write( 'Invalid Card Profile' );
		}

	}
}

//
// This function populates a dropdown menu with the frequencies channels
// supported by the wireless interface card
//
// allowedfrequencies:	the allowed frequency channels supported by the card
//                      1-11, 1-13, 1-14, and 10-13
// option:				the currently configured frequency channel
//

function displayFrequency( allowedfrequencies, option )
{
	var temp = 0;

	temp = allowedfrequencies.length;
		
	switch( temp )
	{
	/*for MR 12909*/
	/*for MR 12798*/
	case 29:
    	{
		    document.write('<OPTION VALUE=4');
			if(option == 4) {
			document.write(' SELECTED ');
			}
			
			document.write('>4 - 2.427 GHz<OPTION VALUE=5');
			if(option == 5) {
			document.write(' SELECTED ');
			}
			document.write('>5 - 2.432 GHz<OPTION VALUE=6');
			if(option == 6) {
			document.write(' SELECTED ');
			}
			document.write('>6 - 2.437 GHz<OPTION VALUE=7');
			if(option == 7) {
			document.write(' SELECTED ');
			}
			document.write('>7 - 2.442 GHz<OPTION VALUE=8');
			if(option == 8) {
			document.write(' SELECTED ');
			}
			document.write('>8 - 2.447 GHz');
			    }
		break;
	
	
	    case 35:
        {
	    	document.write('<OPTION VALUE=10');
			if(option == 10) {
			document.write(' SELECTED ');
			}
			document.write('>10 - 2.457 GHz<OPTION VALUE=11');
			if(option == 11){ 
			document.write(' SELECTED ');
			}
			document.write('>11 - 2.462 GHz<OPTION VALUE=12');
			if(option == 12){ 
			document.write(' SELECTED ');
			}
			document.write('>12 - 2.467 GHz<OPTION VALUE=13');
			if(option == 13){ 
			document.write(' SELECTED ');
			}
			document.write('>13 - 2.472 GHz');
    	}
		break;
	
		case 71:
    	{
		    document.write('<OPTION VALUE=1');
			if(option == 1) {
			document.write(' SELECTED ');
			}
			document.write('>1 - 2.412 GHz<OPTION VALUE=2');
			if(option == 2) {
			document.write(' SELECTED ');
			}
			document.write('>2 - 2.417 GHz<OPTION VALUE=3');
				if(option == 3) {
			document.write(' SELECTED ');
			}
			document.write('>3 - 2.422 GHz<OPTION VALUE=4');
			if(option == 4) {
			document.write(' SELECTED ');
			}
			document.write('>4 - 2.427 GHz<OPTION VALUE=5');
			if(option == 5) {
			document.write(' SELECTED ');
			}
			document.write('>5 - 2.432 GHz<OPTION VALUE=6');
			if(option == 6) {
			document.write(' SELECTED ');
			}
			document.write('>6 - 2.437 GHz<OPTION VALUE=7');
			if(option == 7) {
			document.write(' SELECTED ');
			}
			document.write('>7 - 2.442 GHz<OPTION VALUE=8');
			if(option == 8) {
			document.write(' SELECTED ');
			}
			document.write('>8 - 2.447 GHz<OPTION VALUE=9');
			if(option == 9) {
			document.write(' SELECTED ');
			}
			document.write('>9 - 2.452 GHz<OPTION VALUE=10');
			if(option == 10) {
			document.write(' SELECTED ');
			}
			document.write('>10 - 2.457 GHz<OPTION VALUE=11');
			if(option == 11){ 
			document.write(' SELECTED ');
			}
			document.write('>11 - 2.462 GHz');
	    }
		break;
	
		case 89:
		{
		    document.write('<OPTION VALUE=1');
			if(option == 1) {
			document.write(' SELECTED ');
			}
			document.write('>1 - 2.412 GHz<OPTION VALUE=2');
			if(option == 2) {
			document.write(' SELECTED ');
			}
			document.write('>2 - 2.417 GHz<OPTION VALUE=3');
			if(option == 3) {
			document.write(' SELECTED ');
			}
			document.write('>3 - 2.422 GHz<OPTION VALUE=4');
			if(option == 4) {
			document.write(' SELECTED ');
			}
			document.write('>4 - 2.427 GHz<OPTION VALUE=5');
			if(option == 5) {
			document.write(' SELECTED ');
			}
			document.write('>5 - 2.432 GHz<OPTION VALUE=6');
			if(option == 6) {
			document.write(' SELECTED ');
			}
			document.write('>6 - 2.437 GHz<OPTION VALUE=7');
			if(option == 7) {
			document.write(' SELECTED ');
			}
			document.write('>7 - 2.442 GHz<OPTION VALUE=8');
			if(option == 8) {
			document.write(' SELECTED ');
			}
			document.write('>8 - 2.447 GHz<OPTION VALUE=9');
			if(option == 9) {
			document.write(' SELECTED ');
			}
			document.write('>9 - 2.452 GHz<OPTION VALUE=10');
			if(option == 10) {
			document.write(' SELECTED ');
			}
			document.write('>10 - 2.457 GHz<OPTION VALUE=11');
			if(option == 11){ 
			document.write(' SELECTED ');
			}
			document.write('>11 - 2.462 GHz<OPTION VALUE=12');
			if(option == 12){
			document.write( ' SELECTED ' );
			}
			document.write('>12 - 2.467 GHz<OPTION VALUE=13');
			if(option == 13){
			document.write( ' SELECTED ' );
			}
			document.write('>13 - 2.472 GHz');
   		}
		break;
	
		case 98:
		{
		    document.write('<OPTION VALUE=1');
			if(option == 1) {
			document.write(' SELECTED ');
			}
			document.write('>1 - 2.412 GHz<OPTION VALUE=2');
			if(option == 2) {
			document.write(' SELECTED ');
			}
			document.write('>2 - 2.417 GHz<OPTION VALUE=3');
			if(option == 3) {
			document.write(' SELECTED ');
			}
			document.write('>3 - 2.422 GHz<OPTION VALUE=4');
			if(option == 4) {
			document.write(' SELECTED ');
			}
			document.write('>4 - 2.427 GHz<OPTION VALUE=5');
			if(option == 5) {
			document.write(' SELECTED ');
			}
			document.write('>5 - 2.432 GHz<OPTION VALUE=6');
			if(option == 6) {
			document.write(' SELECTED ');
			}
			document.write('>6 - 2.437 GHz<OPTION VALUE=7');
			if(option == 7) {
			document.write(' SELECTED ');
			}
			document.write('>7 - 2.442 GHz<OPTION VALUE=8');
			if(option == 8) {
			document.write(' SELECTED ');
			}
			document.write('>8 - 2.447 GHz<OPTION VALUE=9');
			if(option == 9) {
			document.write(' SELECTED ');
			}
			document.write('>9 - 2.452 GHz<OPTION VALUE=10');
			if(option == 10) {
			document.write(' SELECTED ');
			}
			document.write('>10 - 2.457 GHz<OPTION VALUE=11');
			if(option == 11){ 
			document.write(' SELECTED ');
			}
			document.write('>11 - 2.462 GHz<OPTION VALUE=12');
			if(option == 12){ 
			document.write(' SELECTED ');
			}
			document.write('>12 - 2.467 GHz<OPTION VALUE=13');
			if(option == 13){ 
			document.write(' SELECTED ');
			}
			document.write('>13 - 2.472 GHz<OPTION VALUE=14');
			if(option == 14){ 
			document.write(' SELECTED ');
			}
			document.write('>14 - 2.484 GHz');
	    }
		break;
	
		default:
		{
		    document.write('<OPTION VALUE=1');
			if(option == 1) {
			document.write(' SELECTED ');
			}
			document.write('>1 - 2.412 GHz<OPTION VALUE=2');
			if(option == 2) {
			document.write(' SELECTED ');
			}
			document.write('>2 - 2.417 GHz<OPTION VALUE=3');
				if(option == 3) {
			document.write(' SELECTED ');
			}
			document.write('>3 - 2.422 GHz<OPTION VALUE=4');
			if(option == 4) {
			document.write(' SELECTED ');
			}
			document.write('>4 - 2.427 GHz<OPTION VALUE=5');
			if(option == 5) {
			document.write(' SELECTED ');
			}
			document.write('>5 - 2.432 GHz<OPTION VALUE=6');
			if(option == 6) {
			document.write(' SELECTED ');
			}
			document.write('>6 - 2.437 GHz<OPTION VALUE=7');
			if(option == 7) {
			document.write(' SELECTED ');
			}
			document.write('>7 - 2.442 GHz<OPTION VALUE=8');
			if(option == 8) {
			document.write(' SELECTED ');
			}
			document.write('>8 - 2.447 GHz<OPTION VALUE=9');
			if(option == 9) {
			document.write(' SELECTED ');
			}
			document.write('>9 - 2.452 GHz<OPTION VALUE=10');
			if(option == 10) {
			document.write(' SELECTED ');
			}
			document.write('>10 - 2.457 GHz<OPTION VALUE=11');
			if(option == 11){ 
			document.write(' SELECTED ');
			}
			document.write('>11 - 2.462 GHz');
	    }
	}
}

function commonHandleSecurityChange(interfaceNumber, SSID_Action, ctx) {
       
  var MAX_MODES=7;
  var MAX_CONDITIONS = 9;
  
  var MODIFY_SSID = 1;     
  var ADD_SSID_12 = 2;     
  var EDIT_SSID_12 = 3;    
  var ADD_SSID_34 = 4;     
  var EDIT_SSID_34 = 5;    
  
  var NONE = 1;
  var DOT1X = 2;
  var MIXED = 3;
  var WPA = 4;
  var WPA_PSK = 5;
  var WEP = 6;
  var DEFAULT =7;
 
  var KEY0   = 0;
  var KEY1   = 1;
  var KEY2   = 2;
  var KEY3   = 3;
  var TX     = 4;
  var TXLEN  = 5;
  var REKEY  = 6;
  var PSKVAL = 7;
  var PSKPASS= 8;
 
  var key0NameString =  new String( "encryptionKey0Id"); 
  var key1NameString =  new String( "encryptionKey1Id"); 
  var key2NameString =  new String( "encryptionKey2Id"); 
  var key3NameString =  new String( "encryptionKey3Id"); 
  var txkeyNameString =  new String( "encryptionTxKeyId");
  var txkeyLenString =  new String( "encryptionTxKeyLengthId");
  var rekeyString =  new String( "rekeyingIntervalId");
  //var PSKValueString =  new String( "PSKValueId");
  var PSKPassString =  new String( "PSKPassPhraseId");
  var secProfileIdString = new String("secProfileId");
 
 
  SSIDModeConditions = new Array(MAX_MODES);
 
  SSIDModeConditions[NONE]   = new Array(1,1,1,1,1,1,1,1,1);
  SSIDModeConditions[DOT1X]  = new Array(1,1,1,1,1,0,0,1,1);
  SSIDModeConditions[MIXED]  = new Array(0,1,1,1,1,0,0,1,1);
  SSIDModeConditions[WPA]    = new Array(1,1,1,1,1,1,0,1,1);
  SSIDModeConditions[WPA_PSK]= new Array(1,1,1,1,1,1,0,0,0);
  SSIDModeConditions[WEP]    = new Array(0,1,1,1,1,1,1,1,1);
  SSIDModeConditions[DEFAULT]= new Array(1,1,1,1,1,1,1,1,1);
 
  context=eval(ctx);
    
  if (SSID_Action == EDIT_SSID_34) {
  
    var selectedModeName = new String (context.name);
  
    indexPosition = selectedModeName.indexOf("."+interfaceNumber+".") + 3;
  
    if (selectedModeName.charAt(indexPosition + 1 ) == '.') {
       index = selectedModeName.charAt(indexPosition);
    }
    else {
       index = selectedModeName.substring(indexPosition,indexPosition+2);
    } 
                  
    key0NameString = key0NameString + index; 
    key1NameString = key1NameString + index; 
    key2NameString = key2NameString + index; 
    key3NameString = key3NameString + index; 
    txkeyNameString= txkeyNameString + index;
    txkeyLenString = txkeyLenString  + index;
    rekeyString    = rekeyString     + index;
    // PSKValueString = PSKValueString  + index;
    PSKPassString  = PSKPassString   + index;
  } 
     
  var key0Obj = document.getElementById(key0NameString);
  var key1Obj=document.getElementById(key1NameString);  
  var key2Obj=document.getElementById(key2NameString);  
  var key3Obj=document.getElementById(key3NameString);  
  var txKeyObj=document.getElementById(txkeyNameString);
  var txKeyLenObj=document.getElementById(txkeyLenString); 
  var rekeyObj=document.getElementById(rekeyString);       
  //var PSKValueObj=document.getElementById(PSKValueString); 
  var PSKPassObj=document.getElementById(PSKPassString);
  var secProfileIdObj = document.getElementById(secProfileIdString);
        
  var  requiredMode = DEFAULT;
  var securityValue = parseInt(context.value);

  switch (securityValue) {
  case NONE:  
  case DOT1X:
  case MIXED:
  case WEP:
       requiredMode = securityValue;
       break;
  
  case WPA:
  case WPA_PSK:
       if (SSID_Action != MODIFY_SSID) 
            requiredMode = securityValue;
       else
            requiredMode = DEFAULT;
       break;
  
  default: 
       requiredMode = DEFAULT;
       break;
  }
     
     if (requiredMode != DEFAULT) {
     
        if ((SSID_Action != EDIT_SSID_34) && (SSID_Action != ADD_SSID_34) && (securityValue == WEP )) {

             if (key0Obj) {
                 key0Obj.disabled=0;
             }
            
             // set the encryption key 1 object to the required state, if it exists 
            
             if (key1Obj) {
                key1Obj.disabled=0;
             }
            
             // set the encryption key 2 object to the required state, if it exists 
            
             if (key2Obj) {
                key2Obj.disabled=0;
             }
            
             // set the encryption key 3 object to the required state, if it exists 
            
             if (key3Obj) {
                key3Obj.disabled=0;
             } 

             if (txKeyObj) {
                txKeyObj.disabled=0;  
             }
        }
        else {
       
     // set the encryption key 0 object to the required state, if it exists 

     if (key0Obj) {
         key0Obj.disabled=SSIDModeConditions[requiredMode][KEY0];
     }

     // set the encryption key 1 object to the required state, if it exists 

     if (key1Obj) {
        key1Obj.disabled=SSIDModeConditions[requiredMode][KEY1];
     }

     // set the encryption key 2 object to the required state, if it exists 

     if (key2Obj) {
        key2Obj.disabled=SSIDModeConditions[requiredMode][KEY2];
     }

     // set the encryption key 3 object to the required state, if it exists 

     if (key3Obj) {
        key3Obj.disabled=SSIDModeConditions[requiredMode][KEY3];
     }

     if (txKeyObj) {
                txKeyObj.disabled=SSIDModeConditions[requiredMode][TX];;  
             } 
     }

     // set the transmit key object length to the required state, if it exists
     // and the 152 bit option depending on security mode setting

     if (txKeyLenObj) {
        txKeyLenObj.disabled=SSIDModeConditions[requiredMode][TXLEN];
        
        if (securityValue == WEP) {
           // WEP selected 
           if (txKeyLenObj.options.length != 3) {
              // WEP not previous selected 
              var opt = new Option("152 Bits","3");
              txKeyLenObj.options[2]=opt;
           }
        }
        else {
           // WEP not selected
          if (txKeyLenObj.options.length == 3) {
             // WEP was previous selection
             txKeyLenObj.options[2]=null;
          }
        } 
     }
     
     // set the rekey object to the required state, if it exists

     if (rekeyObj) {
        rekeyObj.disabled=SSIDModeConditions[requiredMode][REKEY];
     }
    
     // set the psk value object to the required state, if it exists

    // if (PSKValueObj) {
    //    PSKValueObj.disabled=SSIDModeConditions[requiredMode][PSKVAL];
    // }

     // set the psk pass object to the required state, if it exists

     if (PSKPassObj) {
        PSKPassObj.disabled=SSIDModeConditions[requiredMode][PSKPASS];
     }
    }

      /* Only for interface pages disable security profile */
	if(secProfileIdObj) {
		secProfileIdObj.disabled = 1;
	}

     // force the objects to update


      window.resizeBy(1,1);
      window.resizeBy(-1,-1);  
}


