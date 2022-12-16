function aad()
{
var myWindow;
myWindow = window.open("calculation/construct_aad.php","", "width=1000,height=400");
}
function nonce()
{
var myWindow;
myWindow = window.open("calculation/construct_nonce.php","", "width=930,height=450");
}
/*function sendAad()
		{
			var fc = $('input[name="wait_fc"]').val();
			var a1 = $('input[name="wait_a1"]').val();
			var a2 = $('input[name="wait_a2"]').val();
			var a3 = $('input[name="wait_a3"]').val();
			var sc = $('input[name="wait_sc"]').val();
			var a4 = $('input[name="wait_a4"]').val();
			var qos = $('input[name="wait_qos"]').val();
			$.post("calculation/aad.php", { fc: fc, a1: a1, a2: a2, a3: a3, a4: a4, sc: sc, qos: qos },
			function(data) {
			$.ajax({
				type: "POST",
				dataType: 'json',
				url: "calculation/aad.php",
				data: 'fc='+fc+'&a1='+a1+'&a2='+a2+'&a3='+a3+'&a4='+a4+'&qos='+qos+'&sc='+sc, // какие угодно данные можете передавать
				success: function(data) {
				$("#wait_fc").hide();
				$(".show").show();}
   			});
		}*/