$("document").ready(function(e) {
	$("#radius").click(function(e){
		var ip = $('input[name*="radius_ip"]').val();
		var mask = $('input[name*="radius_mask"]').val();
		var port = $('input[name*="radius_port"]').val();
		var secret = $('input[name*="secret"]').val();
		var regex = /^(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])(\.(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])){3}$/;
		if (!regex.test(ip)){
			alert("Введен неверный ip адрес. Введите ip-адрес в виде x.x.x.x, где x - десятичное число от 1 до 255.");
			return false;
		}
		else{
			var posting = $.post("set/check/ip.php", {})
			posting.done(function(data) {
				var obj = jQuery.parseJSON(data);
				ap_ip1 = obj.ap_ip1;
				ap_ip2 = obj.ap_ip2;
				ap_ip3 = obj.ap_ip3;
				ap_ip4 = obj.ap_ip4;
				radius_ip1 = obj.radius_ip1;
				radius_ip2 = obj.radius_ip2;
				radius_ip3 = obj.radius_ip3;
				radius_ip4 = obj.radius_ip4;
				ap_ip = obj.ap_ip;
			if (ap_ip1 == radius_ip1 && ap_ip2 == radius_ip2 && ap_ip3 == radius_ip3 && ap_ip4 != radius_ip4){
				return true;
			}
			else{
				alert("ip-адрес RADIUS-сервера должен быть из той же подсети, что и ip-адрес точки доступа.");
				return false;
			}
				});
		}
})})