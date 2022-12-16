$("document").ready(function(e) {
$('#ap').submit(function(){
	var mac = $('input[name="mac"]').val();
	var pass = $('input[name="key"]').val();
	var mode = $('select[name="enc"]').val();
	var ip = $('input[name="ip"]').val();
	var regex = /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/;
	var regex1 = /^[a-zA-Z0-9]+$/;
	var regex2 = /^(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])(\.(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])){3}$/;
	if (regex.test(mac) && regex2.test(ip) && (mode == 'wpa_802.1x' || mode == 'wpa2_802.1x' || mode == 'none')){
		return true;
	}
	else
	{
	if (regex.test(mac) && regex1.test(pass) && regex2.test(ip) && pass.length >= 8){
		return true;
	}
	else{
		if (!regex2.test(ip)){
			alert("Введите ip-адрес в виде: xxx.xxx.xxx.xxx, где x - десятичная цифра");
			return false;
		}
		if (!regex.test(mac)){
			alert("Введите MAC-адрес в формате xx:xx:xx:xx:xx:xx");
			return false;
		}
		if (!regex1.test(pass) || pass.length < 8){
			alert("Пароль должен состоять из строчных или прописных латинских букв и цифр и быть 8 больше или больше символов");
			return false;
		}
	}
	}
});
})
