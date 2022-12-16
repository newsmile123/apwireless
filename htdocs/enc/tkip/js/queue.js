$("document").ready(function(e) {
	//Инкапсуляция
		var arrowsDrawer1 = $cArrows('#main', { render : { strokeStyle: '#949494'}, arrow: {arrowType: 'arrow'}});
		//var arrowsDrawer1 = $cArrows('.process', { render : { strokeStyle: '#949494'}, arrow: {arrowType: 'line'}});
			//arrowsDrawer1.arrow('#phase2', '#arrow-iv-packet', { arrow: { connectionType: 'rectangleAngle', angleFrom: 273, angleTo: 226}});
 			arrowsDrawer2.arrow('#phase1', '#phase2', { arrow: { connectionType: 'rectangleAngle', angleFrom: -5, angleTo: 234}});
  			arrowsDrawer2.arrow('#michael', '#encryption', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 185}});
			arrowsDrawer2.arrow('#e-key', '#e-prng', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 175}});
			arrowsDrawer2.arrow('#before', '#e-checksum', { arrow: { connectionType: 'rectangleAngle', angleFrom: 50, angleTo: 180}});
			arrowsDrawer2.arrow('#before', '#e-encryption', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 177}});
			arrowsDrawer2.arrow('#e-checksum', '#e-encryption', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 130}});
			arrowsDrawer2.arrow('#encryption', '#packet', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 177}});
			arrowsDrawer2.arrow('#e-encryption', '#e-packet', { arrow: { connectionType: 'rectangleAngle', angleFrom: 65.4, angleTo: 132}});
			arrowsDrawer2.arrow('#e-prng', '#e-encryption', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 0}});
/*	//Декапсуляция
	
		var arrowsDrawer3 = $cArrows('.d-process', { render : { strokeStyle: '#949494'}, arrow: {arrowType: 'arrow'}});
			arrowsDrawer3.arrow('#d-key', '#d-conc', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 210}});
			arrowsDrawer3.arrow('#d-dec', '#d-conc', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 175}});
			arrowsDrawer3.arrow('#d-conc', '#d-prng', { arrow: { connectionType: 'rectangleAngle', angleFrom: 50, angleTo: 180}});
			arrowsDrawer3.arrow('#d-prng', '#d-encryption', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 177}});
			arrowsDrawer3.arrow('#d-dec', '#d-encryption', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 130}});
			arrowsDrawer3.arrow('#d-encryption', '#d-checksum', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 177}});
			arrowsDrawer3.arrow('#e-encryption', '#e-packet', { arrow: { connectionType: 'rectangleAngle', angleFrom: 65.4, angleTo: 132}});
			arrowsDrawer3.arrow('#e-prng', '#e-encryption', { arrow: { connectionType: 'rectangleAngle', angleFrom: 0, angleTo: 0}});*/
	});
