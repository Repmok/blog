$(document).ready(function() {
	$('#logo > a').on('click', function(){
		$('#page-wrapper, nav').toggleClass("moved");
		return false;
	});

	$('#options > a').on('click', function(){
		$('#page-wrapper, aside').toggleClass("moved-left");
		return false;
	});

	$('nav, aside').on('click', function(event){
		event.stopPropagation();
	});

	$(document).on('click', '#page-wrapper.moved, #page-wrapper.moved-left', function(){
		$('#page-wrapper, nav').removeClass("moved");
		$('#page-wrapper, aside').removeClass("moved-left");
		return false;
	});
});