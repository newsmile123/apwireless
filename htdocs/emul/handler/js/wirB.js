$("document").ready(function(e) {
$('#wirelessB').submit(function(){
	var mac = $('input[name="mac"]').val();
	var ssid = $('input[name="ssid"]').val();
	var regex = /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/;
	var regex1 = /^[a-zA-Z0-9/\s/]+$/;
	if (regex.test(mac) && regex1.test(ssid)){
		return true;
	}
	else{
		if (!regex.test(mac)){
			alert("Введите MAC-адрес в формате xx:xx:xx:xx:xx:xx. Используйте только шестнадцатиричные символы.");
			return false;
		}
		if (!regex1.test(ssid)){
			alert("SSID должен состоять из строчных или прописных латинских букв и цифр.");
			return false;
		}
	}
});
})