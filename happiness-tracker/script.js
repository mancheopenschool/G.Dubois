$(document).ready(function(){
	$('#tabs').tabs();
	$('#datepicker').datepicker();
	$('#datepicker').datepicker($.datepicker.regional['fr']);
	$('#datepicker').datepicker('option','dateFormat','d MM yy');
	$('#slider-growth-code').slider({
		range: 'min', min: 1, max: 5, value: 3, slide: function(event, ui){
			$('#growth-code').val(ui.value);
		}
	});
	$('#slider-happiness-code').slider({
		range: 'min', min: 1, max: 5, value: 3, slide: function(event, ui){
			$('#happiness-code').val(ui.value);
		}
	});
	$('#slider-happiness-life').slider({
		range: 'min', min: 1, max: 5, value: 3, slide: function(event, ui){
			$('#happiness-life').val(ui.value);
		}
	}); 
	$('#growth-code').val($('#slider-growth-code').slider('value'));
	$('#happiness-code').val($('#slider-happiness-code').slider('value'));
	$('#happiness-life').val($('#slider-happiness-life').slider('value'));
	$('#slider-growth-code, #slider-happiness-code, #slider-happiness-life').on("slidestop", function(event, ui){
		var somme = $('#slider-growth-code').slider('value')
					+ $('#slider-happiness-code').slider('value')
					+ $('#slider-happiness-life').slider('value');
		if (somme < 5){
			$('img.mood').attr( "src", function() {
				return "images/smileys/1.jpg";
			});
		}
		else if (somme < 7){
			$('img.mood').attr( "src", function() {
				return "images/smileys/2.jpg";
			});
		}
		else if (somme < 9){
			$('img.mood').attr( "src", function() {
				return "images/smileys/3.jpg";
			});
		}
		else if (somme < 12){
			$('img.mood').attr( "src", function() {
				return "images/smileys/4.jpg";
			});
		}
		else if (somme < 14){
			$('img.mood').attr( "src", function() {
				return "images/smileys/5.jpg";
			});
		}
		else{
			$('img.mood').attr( "src", function() {
				return "images/smileys/6.jpg";
			});
		}
	});
	$('#accordion').accordion({
		collapsible: true, active: false, heightStyle: "content", animate: 100
	});
});