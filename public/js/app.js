if ($( window ).width() >= 767) {
	$('#affix1').affix({
		offset: 99
	});
	$('#affix2').affix({
		offset: 450
	});
} else {
	$('#affix1').affix({
		offset: 280
	});
	$('#affix2').affix({
		offset: 400
	});
}