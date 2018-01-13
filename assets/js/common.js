$(document).ready(function() {
	// main slider ***************************************
	var main_slider = $('#main-slider');
	main_slider.owlCarousel({
	    items:1,
	    loop:true,
	    margin:2,
	    nav:false,
	    navText: "",
	    autoplay:true,
	    autoplayTimeout:3000,
	    autoplayHoverPause:true
	});

	$('.next').click(function() {
    main_slider.trigger('next.owl.carousel');
	});
	// Go to the previous item
	$('.prev').click(function() {
    main_slider.trigger('prev.owl.carousel');
	});

	// brand slider ***************************************
	var brand_slider = $('#brand-slider');
	brand_slider.owlCarousel({
	    items:2,
	    loop:true,
	    margin:2,
	    nav:false,
	    navText: "",
	    autoplay:true,
	    autoplayTimeout:5000,
	    autoplayHoverPause:true
	});

	$('.next2').click(function() {
    brand_slider.trigger('next.owl.carousel');
	});
	// Go to the previous item
	$('.prev2').click(function() {
    brand_slider.trigger('prev.owl.carousel');
	});

});