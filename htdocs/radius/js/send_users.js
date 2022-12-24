$("document").ready(function(e) {
	$("#save").click(function(e){
		$.post("handlers/check.php", {})
			.done(function(data) {
				var obj = jQuery.parseJSON(data);
    			$ap_ip = obj.ap_ip;
				$mac = obj.mac;
				var user = $('input[name*="user"]').val();
				var auth = $('input[name*="auth"]').val();
				var pass = $('input[name*="pass"]').val();
				var service = $('input[name*="service"]').val();
				var ip = $('input[name*="ip"]').val();
				var priority = $('input[name*="priority"]').val();
				console.log(user)
				if ($ap_ip == ip && user == $mac){
					$.post("handlers/users.php", { user: user, auth: auth, pass: pass, service: service, ip: ip, priority: priority})
					.done(function(data) {
						alert("Сохранено");
				});
				}
				else{
					if ($mac != user){
						
						alert("Такого пользователя не существffует");
					}
					if ($ap_ip != ip){
						alert("Такого NAS не существет");
					}
				}
		});
})})