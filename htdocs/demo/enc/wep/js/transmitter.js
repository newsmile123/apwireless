function RC4()
		{
			var key = $('input[name*="enc_key"]').val();
			var iv = $('input[name*="enc_iv"]').val();
			$.post("rc4.php", { key: key, iv: iv },
			function(data) {
     			$('#ciphertext').html(data);
				$(".checksumm").show();
   			});
		}
function RC4_dec()
		{
			var key = $('input[name*="key_for_dec"]').val();
			$.post("wep_decapsulation.php", { key: key },
			function(data) {
				$('#decrypt_text').show();
     			$('#decrypt_text').html(data);
   			});
		}
/*function computePhase2()
		{
			$.ajax({
				url: "calculation/phase2.php",
				cache: false,
				success: function(html){
					$("#ph2_seed").val(html);
				}
			});
		}		
//Message2
function computeMichael()
		{
			$.ajax({
				url: "calculation/michael.php",
				cache: false,
				success: function(html){
					$("#mic").val(html);
				}
			});
		}
function computeWep()
		{
			$.ajax({
				url: "calculation/encryption.php",
			});
		}
function computeMic1()
		{
			$.ajax({
				url: "calculation/mic1.php",
				cache: false,
				success: function(html){
					$("#mic1").val(html);
				}
			});
		}
//Message3
function computePtk2()
		{
			$.ajax({
				url: "calculation/ptk2.php",
				cache: false,
				success: function(html){
					$("#ptk2").val(html);
				}
			});
		}
function computeSnonce2()
		{
			$.ajax({
				url: "calculation/snonce2.php",
				cache: false,
				success: function(html){
					$("#snonce2").val(html);
				}
			});
		}
function computeMic2()
		{
			$.ajax({
				url: "calculation/mic2.php",
				cache: false,
				success: function(html){
					$("#mic2").val(html);
				}
			});
		}
//Message4
function computeMic3()
		{
			$.ajax({
				url: "calculation/mic3.php",
				cache: false,
				success: function(html){
					$("#mic3").val(html);
				}
			});
		}*/


