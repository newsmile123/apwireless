$("document").ready(function(e) {
$('#ip_form').submit(function(){
	var ip = $('input[name="ip"]').val();
	var regex2 = /^(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])(\.(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])){3}$/;
	if (regex2.test(ip)){
		return true;
	}
	else{
		if (!regex2.test(ip)){
			alert("Введите ip-адрес в виде: xxx.xxx.xxx.xxx, где x - десятичная цифра");
			return false;
		}
	}
});
})