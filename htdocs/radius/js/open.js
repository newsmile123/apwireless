 var myWindow;
  params = "menubar=yes,location=yes,resizable=no,scrollbars=yes,status=yes,width=650,height=500"
	function users()
	{
	myWindow = window.open("radius/users.conf.php","", params);
	}
	function clients()
	{
	myWindow = window.open("radius/clients.conf.php","", params);
	}