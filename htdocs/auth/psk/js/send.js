function send1(){
	$.post("calculation/check.php",
   			function(data) {
				var obj = jQuery.parseJSON(data);
				$anonce = obj.anonce;
				$pmk = obj.pmk;
				$ptk1 = obj.ptk1;
				$snonce = obj.snonce;
				$ptk2 = obj.ptk2;
				
		var pmk1 = $('input[name="pmk1"]').val();
		var pmk2 = $('input[name="pmk2"]').val();
		var anonce = $('input[name="anonce"]').val();
		if (anonce != $anonce){
			alert("Введенный Anonce не соответсвует рассчитанному");
			$("#mess1_hidden").hide();
			$("#next1").hide();
		}
		else{
			if (pmk2 == '' || pmk2 != $pmk){
				alert("Сообщение не передано, т.к. парный мастер-ключ на стороне точки доступа не введён или введён неверно.");
				$("#mess1_hidden").hide();
				$("#next1").hide();
			}
			else{
				if (pmk1 == '' || pmk1 != $pmk){
					$("#mess1_hidden").show();
					$("#right1").show();
					$("#left1").show();
					var arrow1 = $cArrows('#arrow1');
  					arrow1.arrow('#right1', '#left1');
					$("#mess1_success1").hide();
					$("#next1").hide();
					$("#mess1_success2").fadeIn();
				}
				else{
					$("#mess1_hidden").show();
					$("#mess1_success2").hide();
					$("#mess1_success1").fadeIn();
					$("#right1").show();
					$("#left1").show();
					$("#next1").show();
					var arrow1 = $cArrows('#arrow1');
  					arrow1.arrow('#right1', '#left1');
					
				}
			}	
		}
		});
}

function send2(){
	$.post("calculation/check.php",
   			function(data) {
				var obj = jQuery.parseJSON(data);
				$ptk2 = obj.ptk2;
				$snonce = obj.snonce;
				$mic2 = obj.mic2;
		var ptk2 = $('input[name="ptk2"]').val();
		var mic2 = $('input[name="mic2"]').val();
		var snonce = $('input[name="snonce"]').val();
		if (snonce != $snonce){
			alert("Введенный Snonce не соответсвует рассчитанному");
			$("#mess2_hidden").hide();
			$("#next2").hide();
		}
		else{
			if (ptk2 == '' || ptk2 != $ptk2){
				alert("Сообщение не передано, т.к. парный переходный ключ не введён или введён неверно.");
				$("#mess2_hidden").hide();
				$("#next2").hide();
			}
			else{
				if (mic2 == $mic2){
					$("#mess2_hidden").show();
					$("#right2").show();
					$("#left2").show();
					var arrow1 = $cArrows('#arrow2');
  					arrow1.arrow('#left2', '#right2');
					$("#next2").show();
					$("#mess2_success1").fadeIn();
				}
				else{
					alert("Код целостности сообщения не рассчитан или рассчитан не верно");
					$("#mess2_hidden").hide();
					$("#next2").hide();
				}
			}	
		}
		});
}

function send3(){
	$.post("calculation/check.php",
   			function(data) {
				var obj = jQuery.parseJSON(data);
				$anonce = obj.anonce;
				$ptk2 = obj.ptk2;
				$ptk3 = obj.ptk3;
				$mic3 = obj.mic3;
		var ptk3 = $('input[name="ptk3"]').val();
		var ptk3 = $('input[name="ptk3"]').val();
		var mic3 = $('input[name="mic3"]').val();
		var anonce3 = $('input[name="anonce3"]').val();
		if (anonce3 != $anonce){
			alert("Введенный Anonce должен быть как в первом сообщении");
			$("#mess3_hidden").hide();
			$("#next3").hide();
		}
		else{
			if (ptk3 == '' || ptk3 != $ptk3){
				alert("Сообщение не передано, т.к. парный переходный ключ не введён или введён неверно.");
				$("#mess3_hidden").hide();
				$("#next3").hide();
			}
			else{
				if (mic3 == $mic3){
					$("#mess3_hidden").show();
					$("#right3").show();
					$("#left3").show();
					var arrow1 = $cArrows('#arrow3');
  					arrow1.arrow('#right3', '#left3');
					$("#next3").show();
					$("#mess3_success1").fadeIn();
				}
				else{
					alert("Код целостности сообщения не рассчитан или рассчитан не верно");
					$("#mess3_hidden").hide();
					$("#next3").hide();
				}
			}	
		}
		});
}

function send4(){
	$.post("calculation/check.php",
   			function(data) {
				var obj = jQuery.parseJSON(data);
				$mic4 = obj.mic4;
				var mic4 = $('input[name="mic4"]').val();
				if (mic4 == $mic4){
					$("#mess4_hidden").show();
					$("#right4").show();
					$("#left4").show();
					var arrow1 = $cArrows('#arrow4');
  					arrow1.arrow('#left4', '#right4');
					$("#up").show();
					$("#mess4_success1").fadeIn();
				}
				else{
					alert("Код целостности сообщения не рассчитан или рассчитан не верно");
					$("#mess4_hidden").hide();
					$("#up").hide();
				}
		});
}