$("document").ready(function(e) {
	$("#save").click(function(e){
			$.post("handlers/check.php", {})
			.done(function(data) {
				var obj = jQuery.parseJSON(data);
    			$ap_ip = obj.ap_ip;
				$secret = obj.secret;
				var secret = $('input[name*="shared-secret"]').val();
				var client = $('input[name*="client"]').val();
				var shortname = $('input[name*="shortname"]').val();
				var nastype = $('input[name*="nastype"]').val();
				if ($ap_ip != client){
					alert("Такого NAS не сущетсвует");
				}
				else{
					$.post("handlers/clients.php", { secret: secret, client: client, shortname: shortname, nastype: nastype})
					.done(function(data) {
						alert("Сохранено");
						});
					}
				})
})})