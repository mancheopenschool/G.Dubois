$(document).ready(function(){
	$('#couleur').click(function(){
		$('h1').toggleClass('couleur');
	});
	$('#masquer').click(function(){
		// console.log("hello");
		$('#bleu').toggle(250);
	});
	$('li:contains("Willy")').css('background-color','#08f').html("J'ai trouvé Willy");
	$('#ajouter').click(function(){
		$('ul').append('<li>Guillaume</li>');
	});
	$('img').each(function(){
		$(this).wrap('<a class="fancybox" rel="group" href="'+$(this).attr('src')+'"></a>');
	});
	$('.fancybox').fancybox();
	$('#navigation a').click(function(){
		$('#navigation a').removeClass('navigred');
		$(this).addClass('navigred');
		$('#masquer').trigger('click');
	});
	$('#datepicker').datepicker();
	$('#datepicker').datepicker($.datepicker.regional["fr"]);
	$('#datepicker').datepicker('option','dateFormat','DD d MM yy');
});