//Message1
function computePmk()
		{
			$.ajax({
				url: "calculation/pmk.php",
				cache: false,
				success: function(html){
					$("#pmk1").val(html);
					$("#pmk2").val(html);
				}
			});
		}
function computeAnonce()
		{
			$.ajax({
				url: "calculation/anonce.php",
				cache: false,
				success: function(html){
					$("#anonce").val(html);
					$("#anonce3").val(html);
				}
			});
		}		
//Message2
function computePtk1()
		{
			$.ajax({
				url: "calculation/ptk1.php",
				cache: false,
				success: function(html){
					$("#ptk1").val(html);
				}
			});
		}
function computeSnonce1()
		{
			$.ajax({
				url: "calculation/snonce.php",
				cache: false,
				success: function(html){
					$("#snonce").val(html);
				}
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


