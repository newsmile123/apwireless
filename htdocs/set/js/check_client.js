$("document").ready(function(e) {
$("#client").submit(function(){
	var mac = $('input[name="mac"]').val();
	var ip = $('input[name="ip"]').val();
	var regex = /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/;
	var regex1 = /^(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])(\.(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])){3}$/;
	if (regex.test(mac) && regex1.test(ip)){
		return true;
	}
	else{
		if (!regex.test(mac)){
			alert("Введите MAC-адрес в формате xx:xx:xx:xx:xx:xx");
			return false;
		}
		if (!regex1.test(ip)){
			alert("Введен неверный ip адрес. IP адрес должне быть той же подсети, что и точка доступа.");
			return false;
		}
	}
});
})

$("document").ready(function(e) {
	var posting = $.post("set/check/check_connect.php", {})
			posting.done(function(data) {
				var obj = jQuery.parseJSON(data);
    			switcher = obj.switcher;
switcher2 = obj.switcher2;
				success = obj.success;
			success2 = obj.success2;
			Rip=obj.Rip;
				Rip2=obj.Rip2;
					secret=obj.secret;
				secret2=obj.secret2;
				password = obj.pass;
				password2 = obj.pass2;
				enc = obj.enc;
				enc2 = obj.enc2;
				ready = obj.ready;
				pass = obj.user_pass;
				run = obj.run;
				nas_secret = obj.nas_secret;
				radius_secret = obj.radius_secret;
				if (switcher == 1){
					$("#switcher").show();
				}
				if (switcher2 == 1){
					$("#switcher2").show();
				}
				if (success == 1){
					$("#connected").show();
				}
				else{
					$("#unsuccess").show();
				}
				if (success2 == 1){
					$("#connected2").show();
				}
				else{
					$("#unsuccess2").show();
				}
				
				
				$("#submit").click(function(e) {
					var key = $('input[name="connect"]').val();
					if (enc == 'wpa_802.1x' || enc == 'wpa2_802.1x'){
						if (run != '1'){
							alert("Запустите RADIUS-сервер");
						}
						else{
						if (ready == '0'){
						alert("Вы выбрали режим безопасности, использующий аутентификацию по стандарту 802.1x. Осуществите настройки сервера аутентификации.");
						window.location = "set_client.php#tabs-2";
						return false;
						}
						
						else{
							
							if( Rip != Rip2  ){
							$.post("set/radius_client_connect.php", { output: "ip_wrong"});
							window.location = "set_client.php#tabs-2";
								location.reload();
							return false;
							}
						else{
							
							if(  secret != secret2 ){
							$.post("set/radius_client_connect.php", { output: "options_wrong"});
							window.location = "set_client.php#tabs-2";
								location.reload();
							return false;
							}
							else {
							if (key != pass){
								$.post("set/radius_client_connect.php", { output: "pass_wrong"});
								window.location = "set_client.php#tabs-2";
								location.reload();
								return false;
							}
							else{
								if (nas_secret != radius_secret){
									$.post("set/radius_client_connect.php", { output: "secret_wrong"});
									window.location = "set_client.php#tabs-2";
									location.reload();
									return false;
								}
								else{
									$.post("set/radius_client_connect.php", { output: "secret_ok"});
									alert("Вы успешно настроили Radius-сервер.");
									window.location = "set_client.php#tabs-1";
								
									return true;
								}
							}
							}
						}
						}
					}
					}
					else{
                    if (key != password){
						alert("Вы ввели неправильный пароль");
						return false;
					}
					else{
						return true;
					}
					}
                });
			
				$("#submit2").click(function(e) {
					var key2 = $('input[name="connect2"]').val();
					if (enc2 == 'wpa_802.1x' || enc2 == 'wpa2_802.1x'){
						if (run != '1'){
							alert("Запустите RADIUS-сервер");
						}
						else{
						if (ready == '0'){
						alert("Вы выбрали режим безопасности, использующий аутентификацию по стандарту 802.1x. Осуществите настройки сервера аутентификации.");
						window.location = "set_client.php#tabs-2";
						return false;
						}
						else{
							if (key2 != pass2){
								$.post("set/radius_client_connect.php", { output: "pass_wrong"});
								window.location = "set_client.php#tabs-2";
								location.reload();
								return false;
							}
							else{
								if (nas_secret != radius_secret){
									$.post("set/radius_client_connect.php", { output: "secret_wrong"});
									window.location = "set_client.php#tabs-2";
									location.reload();
									return false;
								}
								else{
									$.post("set/radius_client_connect.php", { output: "secret_ok"});
									window.location = "set_client.php#tabs-2";
									location.reload();
									return false;
								}
							}
						}
						}
					}
					else{
                    if (key2 != password2){
						alert("Вы ввели неправильный пароль");
						return false;
					}
					else{
						return true;
					}
					}
                });
			});
})
