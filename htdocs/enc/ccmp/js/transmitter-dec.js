function open_aad()
{
var myWindow;
myWindow = window.open("dec-construct_aad.php","", "width=1000,height=400");
}
function open_nonce()
{
var myWindow;
myWindow = window.open("dec-construct_nonce.php","", "width=930,height=450");
}

function aad()
		{
					
			var fc = $('input[name*="fc"]').val();
			var a1 = $('input[name*="a1"]').val();
			var a2 = $('input[name*="a2"]').val();
			var a3 = $('input[name*="a3"]').val();
			var a4 = $('input[name*="a4"]').val();
			var sc = $('input[name*="sc"]').val();
			var qos = $('input[name*="qos"]').val();
			
			if (fc == 'Frame Control' && a1 == 'Address 1' && a2 == 'Address 2' && a3 == 'Address 3' && a4 == 'Address 4' && sc == 'Sequence Control' && qos == 'QoS Control'){
				alert("Параметры введены верно!");
				var posting = $.post("dec-aad.php", { fc: fc, a1: a1, a2: a2, a3: a3, a4: a4, sc: sc, qos: qos })
					posting.done(function(result){
									$("#key").empty();
									$('#key').html(result);
			});
			}
			else{
							alert("Параметры введены неверно.");
					}
		}
function nonce()
				{
					
			var fc = $('input[name*="fc"]').val();
			var a1 = $('input[name*="a1"]').val();
			var a2 = $('input[name*="a2"]').val();
			var a3 = $('input[name*="a3"]').val();
			var a4 = $('input[name*="a4"]').val();
			var sc = $('input[name*="sc"]').val();
			var qos = $('input[name*="qos"]').val();
			
			/*if (fc == 'Frame Control' && a1 == 'Address 1' && a2 == 'Address 2' && a3 == 'Address 3' && a4 == 'Address 4' && sc == 'Sequence Control' && qoc == 'QoS Control'){*/
				alert("Параметры введены верно!");
				$.post("add.php", { fc: fc, a1: a1, a2: a2, a3: a3, a4: a4, sc: sc, qos: qos },
							function(result){
							});
			/*}
			else{
							alert("Параметры введены неверно.");
					}*/
		}
//Message2
function ctr()
		{
			var cipherkey = $('input[name*="cipherkey"]').val();
			var regex = /^[a-fA-F0-9]+$/;
			if (cipherkey == ''){
				alert("Введите ключ шифрования");
			}
			else{
					if (regex.test(cipherkey) && cipherkey.length == 32){
						$.post("dec-ctr.php", { cipherkey: cipherkey },
							function(result){
									$("#plaintext").empty();
									$("#plaintext").append(result);
							});
					}
					else{
							alert("Параметры введены неверно. Проверьте параметры на соответствие настройкам.");
					}
				}
		}	
function cbc()
		{
			var cipherkey = $('input[name*="cipherkey"]').val();
			var regex = /^[a-fA-F0-9]+$/;
			if (cipherkey == ''){
				alert("Введите ключ шифрования");
			}
			else{
					if (regex.test(cipherkey) && cipherkey.length == 32){
			$.post("dec-cbcmac.php", { cipherkey: cipherkey },
				function(result){
					$("#mess").empty();
					$('#mess').html(result);
			});
					}
			}
		}	