$("document").ready(function(e) {
$('#point').submit(function(){
	var profile = $('input[name="profile"]').val();
	var upd = $('input[name="upd"]').val();
	var regex = /^([1-9])+$/;
	if (regex.test(profile) && regex.test(upd)){
		return true;
	}
	else{
		if (!regex.test(profile)){
			alert("Введите цифры");
			return false;
		}
		else{
			var posting = $.post("../../set/check.php", { id: 'sec-gen' })
				posting.done(function(data) {	
				alert (data);
    				count = data;
					if (profile > count){
						alert("Введенный номер профиля не соответствует количеству созданных");
						return false;
					}
				});
		}
		if (!regex.test(upd)){
			alert("Введите цифры");
			return false;
		}
	}
});
})