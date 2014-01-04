$(function() {
	$( "#step1" ).toggle();

	$( "#nextstep.start" ).click(function() {
		$( "#start" ).toggle();
		$( "#step1" ).toggle();
	});
	$( "#nextstep.one").click(function() {
		$( "#step1" ).toggle();
	});
});
