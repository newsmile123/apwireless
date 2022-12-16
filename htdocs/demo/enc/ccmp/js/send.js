$("document").ready(function(e) {
    $("#send1").click(function(e) {
		$("#right1").show();
		$("#left1").show();
		var arrow1 = $cArrows('#arrow1');
  		arrow1.arrow('#right1', '#left1');
		$("#success1").fadeIn();
    });
	$("#send2").click(function(e) {
		$("#right2").show();
		$("#left2").show();
		var arrow1 = $cArrows('#arrow2');
  		arrow1.arrow('#left2', '#right2');
		$("#success2").fadeIn();
    });
	$("#send3").click(function(e) {
		$("#right3").show();
		$("#left3").show();
		var arrow1 = $cArrows('#arrow3');
  		arrow1.arrow('#right3', '#left3');
		$("#success3").fadeIn();
    });
	$("#send4").click(function(e) {
		$("#right4").show();
		$("#left4").show();
		var arrow1 = $cArrows('#arrow4');
  		arrow1.arrow('#left4', '#right4');
		$("#success4").fadeIn();
    });
});