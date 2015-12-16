function progress(percent, $element){
	var progressBarWidth = percent * $element.width() / 100;
	$element.find('div').animate({ width: progressBarWidth }, 1000, "easeOutBounce").html(percent + "% ");
}