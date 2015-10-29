$(document).ready(function(){
	$('#tabs').tabs();
	$('#datepicker').datepicker();
	$('#datepicker').datepicker($.datepicker.regional['fr']);
	$('#datepicker').datepicker('option','dateFormat','d MM yy');
});