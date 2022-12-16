//Phase1
function computePhase1()
		{
			$.ajax({
				url: "calculation/phase1.php",
				cache: false,
				success: function(html){
					$("#ph1_ttak").val(html);
					$("#ph2_ttak").val(html);
				}
			});
		}
function computePhase2()
		{
			$.ajax({
				url: "calculation/phase2.php",
				cache: false,
				dataType:"json",
				success: function(response){
					$("#seed").html(response.seed);
					$("#wep_iv").html(response.iv);
					$("#arc4_key").html(response.key);
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
		}


