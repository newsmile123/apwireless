$("document").ready(function(e) {
	//Инкапсуляция
		var arrowsDrawer2 = $cArrows('.process', { render : { strokeStyle: '#949494'}, arrow: {arrowType: 'arrow'}});
		var arrowsDrawer1 = $cArrows('.process', { render : { strokeStyle: '#949494'}, arrow: {arrowType: 'line'}});
			arrowsDrawer1.arrow('#e-iv', '#arrow-iv-packet', { arrow: { connectionType: 'rectangleAngle', angleFrom: 273, angleTo: 226}});
  			arrowsDrawer2.arrow('#arrow-iv-packet', '#e-packet', { arrow: { connectionType: 'rectangleAngle', angleFrom: -5, angleTo: 234}});
  			arrowsDrawer2.arrow('#e-iv', '#e-prng', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 185}});
			arrowsDrawer2.arrow('#e-key', '#e-prng', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 175}});
			arrowsDrawer2.arrow('#before', '#e-checksum', { arrow: { connectionType: 'rectangleAngle', angleFrom: 44.3, angleTo: 180}});
			arrowsDrawer2.arrow('#before', '#e-encryption', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 183.4}});
			arrowsDrawer2.arrow('#e-checksum', '#e-encryption', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 129}});
			arrowsDrawer2.arrow('#e-encryption', '#e-packet', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 168.3}});
			arrowsDrawer2.arrow('#e-encryption', '#e-packet', { arrow: { connectionType: 'rectangleAngle', angleFrom: 60, angleTo: 128.5}});
			arrowsDrawer2.arrow('#e-prng', '#e-encryption', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 234.4}});
	//Декапсуляция
	$("#next").click(function(e) {
        $("#decapsulation").show();
		$(this).hide();
        $.scrollTo('#d-packet', {duration:1000});
		var arrowsDrawer3 = $cArrows('.d-process', { render : { strokeStyle: '#949494'}, arrow: {arrowType: 'arrow'}});
			arrowsDrawer3.arrow('#d-key', '#d-conc', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 190}});
			arrowsDrawer3.arrow('#d-dec', '#d-conc', { arrow: { connectionType: 'rectangleAngle', angleFrom: 310, angleTo: 170}});
			arrowsDrawer3.arrow('#d-conc', '#d-prng', { arrow: { connectionType: 'rectangleAngle', angleFrom: 355, angleTo: 180}});
			arrowsDrawer3.arrow('#d-prng', '#d-encryption', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 231}});
			arrowsDrawer3.arrow('#d-dec', '#d-encryption', { arrow: { connectionType: 'rectangleAngle', angleFrom: 350, angleTo: 125.5}});
			arrowsDrawer3.arrow('#d-encryption', '#d-checksum', { arrow: { connectionType: 'rectangleAngle', angleFrom: 308.1, angleTo: 177}});
			arrowsDrawer3.arrow('#d-encryption', '#after', { arrow: { connectionType: 'rectangleAngle', angleFrom:55, angleTo: 208}});
			arrowsDrawer3.arrow('#e-prng', '#e-encryption', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 0}});
	});
});