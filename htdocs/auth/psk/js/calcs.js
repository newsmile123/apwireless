function anonce()
		{
			
			$.post("../calculation/check.php",
   			function(data) {
				var obj = jQuery.parseJSON(data);
				$mac_ap = obj.mac_ap;
				var mac = $('input[name="mac_ap"]').val();
				//var regex = /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/;
				//var test = regex.test(mac);
			if (mac != $mac_ap){
				alert ("MAC-адрес должен соответсвовать настройкам.");
				$( "#message" ).empty();
			}
			else{
			var posting = $.post("../calculation/anonce.php", { mac: mac })
			posting.done(function( html ) {
    			$( "#message" ).empty();
				$( "#message" ).append( html );
			});
			}
			});
		}
function pmk()
		{
			$.post("../calculation/check.php",
   			function(data) {
				var obj = jQuery.parseJSON(data);
					$ssid = obj.ssid;
					$pass = obj.pass;
				var ssid = $('input[name="ssid"]').val();
				var pass = $('input[name="pass"]').val();
				if (pass == ""){
					alert('Вы не ввели настройки точки доступа или используете аутентификацию по протоколу EAP, при которой PMK рассчитывается другим способом.');
				}
					else{
						if ((ssid == $ssid) && (pass == $pass)){
							var posting = $.post("../calculation/pmk.php", { ssid: ssid, pass: pass })
							posting.done(function( html ) {
    						$( "#message" ).empty();
							$( "#message" ).append( html );
							});
						}
						else{
							alert('Введенные параметры не соответсвуют настройкам.');
			/*ar regex = /^([a-z][0-9][A-Z])$/;
			var test = regex.test(pass);
			if (test == false){
				alert ("Пароль введен неверно.");
			}
			else{*/
			
			}
						}
			});
			}
		//}
function snonce()
		{
			$.post("../calculation/check.php",
   			function(data) {
				var obj = jQuery.parseJSON(data);
					$mac_client = obj.mac_client;
				var mac = $('input[name="mac_client"]').val();
				//var regex = /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/;
				//var test = regex.test(mac);
			if (mac != $mac_client){
				alert ("MAC-адрес должен соответсвовать настройкам.");
				$( "#message" ).empty();
			}
			else{
			var posting = $.post("../calculation/snonce.php", { mac: mac })
			posting.done(function( html ) {
    			$( "#message" ).empty();
				$( "#message" ).append( html );
			});
			}
			});
		}
function ptk2()
		{
			$.post("../calculation/check.php",
   			function(data) {
				var obj = jQuery.parseJSON(data);
					$anonce = obj.anonce;
					$pmk = obj.pmk;
					$snonce = obj.snonce;
					$mac_ap = obj.mac_ap;
					$mac_client = obj.mac_client;
			var mac_ap = $('input[name="mac_ap"]').val();
			var mac_client = $('input[name="mac_client"]').val();
			var pmk = $('input[name="pmk"]').val();
			var anonce = $('input[name="anonce"]').val();
			var snonce = $('input[name="snonce"]').val();
			//var regex = /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/;
			//if (regex.test(mac_ap) == false || regex.test(mac_client) == false){
			  if ((mac_ap == $mac_ap) && (mac_client == $mac_client) && (pmk == $pmk) && (anonce == $anonce) && (snonce == $snonce)){
				  var posting = $.post("../calculation/ptk2.php", { mac_ap: mac_ap, mac_client: mac_client, pmk: pmk, snonce: snonce, anonce: anonce })
					posting.done(function( html ) {
    					$( "#message" ).empty();
						$( "#message" ).append( html );
				  });
			  }
			  else{
				  if (mac_ap != $mac_ap){
						alert ("MAC-адрес точки доступа введен неверно.");
						$( "#message" ).empty();
				  }
				  if (mac_client != $mac_client){
						alert ("MAC-адрес клиента введен неверно.");
						$( "#message" ).empty();
				  }
				  if (pmk != $pmk){
						alert ("PMK введен неверно.");
						$( "#message" ).empty();
				  }
				  if (anonce != $anonce){
						alert ("ANonce введен неверно.");
						$( "#message" ).empty();
				  }
				  if (snonce != $snonce){
						alert ("SNonce введен неверно.");
						$( "#message" ).empty();
				  }
				}
			});
		}
function ptk3()
		{
			$.post("../calculation/check.php",
   			function(data) {
				var obj = jQuery.parseJSON(data);
					$anonce = obj.anonce;
					$pmk = obj.pmk;
					$snonce = obj.snonce;
					$mac_ap = obj.mac_ap;
					$mac_client = obj.mac_client;
			var mac_ap = $('input[name="mac_ap"]').val();
			var mac_client = $('input[name="mac_client"]').val();
			var pmk = $('input[name="pmk"]').val();
			var anonce = $('input[name="anonce"]').val();
			var snonce = $('input[name="snonce"]').val();
			if ((mac_ap == $mac_ap) && (mac_client == $mac_client) && (pmk == $pmk) && (anonce == $anonce) && (snonce == $snonce)){
				  var posting = $.post("../calculation/ptk3.php", { mac_ap: mac_ap, mac_client: mac_client, pmk: pmk, snonce: snonce, anonce: anonce })
					posting.done(function( html ) {
    					$( "#message" ).empty();
						$( "#message" ).append( html );
				  });
			  }
			  else{
				  if (mac_ap != $mac_ap){
						alert ("MAC-адрес точки доступа введен неверно.");
						$( "#message" ).empty();
				  }
				  if (mac_client != $mac_client){
						alert ("MAC-адрес клиента введен неверно.");
						$( "#message" ).empty();
				  }
				  if (pmk != $pmk){
						alert ("PMK введен неверно.");
						$( "#message" ).empty();
				  }
				  if (anonce != $anonce){
						alert ("ANonce введен неверно.");
						$( "#message" ).empty();
				  }
				  if (snonce != $snonce){
						alert ("SNonce введен неверно.");
						$( "#message" ).empty();
				  }
				}
			/*var regex = /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/;
			if (regex.test(mac_ap) == false || regex.test(mac_client) == false){
				alert ("MAC-адрес введен неверно. Введите MAC-адрес в формате: xx:xx:xx:xx:xx:xx.");
			}
			else{
				if (anonce.length != 64 || snonce.length != 64 || pmk.length != 64){
				alert ("Один из параметров PMK/Anonce/Snonce имеет неправильный размер");
				}
				else{
					var posting = $.post("../calculation/ptk3.php", { mac_ap: mac_ap, mac_client: mac_client, pmk: pmk, snonce: snonce, anonce: anonce })
					posting.done(function( html ) {
    					$( "#message" ).empty();
						$( "#message" ).append( html );
			});
			}
			}*/
			
			});
		}
function mic()
		{
			var number = $('select[name="number"]').val();
			$.post("../calculation/check.php",
			function(data) {
				var obj = jQuery.parseJSON(data);
				$anonce = obj.anonce;
				$ptk2 = obj.ptk2;
				$snonce = obj.snonce;
				$ptk3 = obj.ptk3;
			if (number == '2'){
				if ($ptk2 == '' || anonce == '' || snonce == ''){
					alert ("Рассчитайте ptk2/anonce/snonce");}
				else{
					var posting = $.post("../calculation/mic.php", { number: number })
						posting.done(function( html ) {
    					$( "#message" ).empty();
						$( "#message" ).append( html );
						});
				}
			}
				else{
					if ($ptk3 == '' || anonce == '' || snonce == ''){
						alert ("Рассчитайте ptk3/anonce/snonce");
					}
					else{
						var posting = $.post("../calculation/mic.php", { number: number })
						posting.done(function( html ) {
    					$( "#message" ).empty();
						$( "#message" ).append( html );
						});
					}
				}	
			});
		}
