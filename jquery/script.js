$(document).ready(function(){
	$('.flexslider').flexslider({animation: "slide", slideshow: true, slideshowSpeed: 3000, animationSpeed: 500});
	$('#menu').accordion({collapsible: true, active: false});
	$('#tabs').tabs({collapsible: true});
	$('.fancybox-thumb').fancybox({
		prevEffect : 'none',
		nextEffect : 'none',
		closeBtn : false,
		helpers	:{
			title :{
				type: 'outside'
			},
			buttons	: {},
			thumbs :{
				width : 50,
				height : 50
			}
		}
	});
 });