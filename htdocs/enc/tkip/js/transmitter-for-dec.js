//Phase1
function phase1()
		{
			$.post("calculation/dec/check.php",
   				function(data) {
					var obj = jQuery.parseJSON(data);
					$mac_ap = obj.mac_ap;
					
			var ta = $('input[name*="ta"]').val();
			var tsc = $('input[name*="tsc"]').val();
			var tk = $('input[name*="tk"]').val();
			var regex = /^[a-fA-F0-9]+$/;
			if (ta == '' || tsc == '' || tk == ''){
				alert("Введите параметры фазы 1");
			}
			else{
				if (regex.test(tsc) && regex.test(tk)){
					if (ta == $mac_ap && tsc.length == 8 && tk.length == 32){
						$.post("calculation/dec/phase1.php", { ta: ta, tsc: tsc, tk: tk },
							function(result){
									$("#ttak").empty();
									$("#ttak").append(result);
							});
					}
					else{
							alert("Параметры введены неверно. Проверьте параметры на соответствие настройкам.");
					}
				}
				else{
					alert("Каждый параметр должен быть строкой шестнадцатиричных символов.");
				}
			}
			});
		}
function phase2()
				{
			$.post("calculation/dec/check.php",
   				function(data) {
					var obj = jQuery.parseJSON(data);
					$ttak_dec = obj.ttak_dec;
					$tk_dec = obj.tk_dec;
			var tk = $('input[name*="ph2_tk"]').val();
			var tsc = $('input[name*="ph2_tsc16"]').val();
			var ttak = $('input[name*="ph2_ttak"]').val();
			if (tsc == '' || ttak == '' || tk == ''){
				alert("Введите параметры фазы 2");
			}
			else{
					if (tk == $tk_dec && tsc.length == 4 && ttak == $ttak_dec){
						$.post("calculation/dec/phase2.php", { tk: tk, tsc: tsc, ttak: ttak },
							function(result){
									$("#seed").empty();
									$("#seed").append(result);
							});
					}
					else{
							alert("Параметры введены неверно. Проверьте параметры на соответствие настройкам.");
					}
				}
			});
		}		
//Message2
function michael()
		{
			$.post("calculation/dec/check.php",
   				function(data) {
					var obj = jQuery.parseJSON(data);
					$mac_ap = obj.mac_ap;
					$mac_client = obj.mac_client;
			var sa = $('input[name*="sa"]').val();
			var da = $('input[name*="da"]').val();
			var michael = $('input[name*="michael"]').val();
			var regex = /^[a-fA-F0-9]+$/;
			if (sa == '' || da == '' || michael == ''){
				alert("Введите параметры для расчета mic");
			}
			else{
					if (sa == $mac_ap && da == $mac_client && michael.length == 16 && regex.test(michael)){
						
						$.post("calculation/dec/michael.php", { sa: sa, da: da, michael: michael },
						
							function(result){
									$("#mic").empty();
									$("#mic").append(result);
							});
					}
					else{
							alert("Параметры введены неверно. Проверьте параметры на соответствие настройкам.");
					}
				}
			});
		}	
function rc4()
		{
			$.post("calculation/dec/check.php",
   				function(data) {
					var obj = jQuery.parseJSON(data);
					$key1 = obj.key1;
					$iv = obj.iv;
					
			var iv = $('input[name*="iv"]').val();
			var key = $('input[name*="arc4_key"]').val();
			if (iv == '' || key == ''){
				alert("Введите параметры для расчета mic");
			}
			else{
					if (iv == $iv && key == $key1){
						$.post("calculation/dec/decryption.php", { iv: iv, key: key },
							function(result){
									$("#plaintext").empty();
									$('#plaintext').html(result);
							});
					}
					else{
							alert("Параметры введены неверно");
					}
				}
			});
		}	