$("document").ready(function(e) {
$("#connect5").click(function(e){
		
			var posting = $.post("set/check/ip_bridge.php", {})
			posting.done(function(data) {
				var obj = jQuery.parseJSON(data);
				ap_ip1 = obj.ap_ip1;
				ap_ip21 = obj.ap_ip21;
				ap_ip3 = obj.ap_ip3;
				ap_ip4 = obj.ap_ip4;
				ap_ip12 = obj.ap_ip12;
				ap_ip22 = obj.ap_ip22;
				ap_ip32 = obj.ap_ip32;
				ap_ip42 = obj.ap_ip42;
			
					ap_ip = obj.ap_ip;
					ap_ip2 = obj.ap_ip2;
			if (ap_ip1 == ap_ip12 && ap_ip21 == ap_ip22 && ap_ip3 == ap_ip32 && ap_ip4 != ap_ip42){
					$.post("set/bridge_client_connect.php", { output4: "bridge_ok1"});
							
				return true;
			}
			else{
				$.post("set/bridge_client_connect.php", { output4: "bridge_not1"});
		
					alert ("IP-адреса точек доступа должны быть из одной подсети.");
				return false;
			}
				});
		}
)})