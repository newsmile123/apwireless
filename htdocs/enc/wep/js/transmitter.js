function RC4()
		{
			var key = $('input[name*="enc_key"]').val();
			//var regex = /^([a-z][0-9][A-Z])$/;
			if (key == ''){
				alert("Введите ключ");
			}
			else{
				if (key.length == 10 /*&& regex.test(key)*/){
			$.post("wep_encapsulation.php", { key: key },
			function(data) {
				var obj = jQuery.parseJSON(data);
				ciphertext = obj.ciphertext;
				checksum = obj.checksum;
				if (checksum == 'error'){
					alert("Контрольная сумма не рассчитана");
				}
					else{
						$("#crc32").empty();
						$("#crc32").html(checksum);
						$("#e-ciphertext").empty();
						$('#e-ciphertext').html(ciphertext);
						$("#checksum").empty();
						$("#checksum").html(checksum);
					}
   			});
			}
			else{
				if (key.length != 10){
				alert("Длина ключа должна быть 40 бит");
				}
				/*if (!regex.test(key)){
					alert(!regex.test(key));
					alert(regex.test(key));	
				alert("Ключ должен состоять из шестнадцатиричных символов");	
				}*/
			}
			}
			
		}
function RC4_dec()
		{
			var key = $('input[name*="key_for_dec"]').val();
			if (key == ''){
				alert("Введите ключ");
			}
			else{
				if (key.length == 10 /*&& regex.test(key)*/){
			//var iv = $('input[name*="enc_iv"]').val();
			$.post("wep_decapsulation.php", { key: key },
			function(data) {
				var plaintext = data;
				$("#plaintext_after").empty();
				$('#plaintext_after').html(plaintext);
   			});
				}
				else{
				if (key.length != 10){
				alert("Длина ключа должна быть 40 бит");
				}
				}
			}
		}
