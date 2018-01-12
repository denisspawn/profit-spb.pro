$(document).ready(function() {
	var owl = $('.owl-carousel');
	owl.owlCarousel({
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
    owl.trigger('next.owl.carousel');
	});
	// Go to the previous item
	$('.prev').click(function() {
    owl.trigger('prev.owl.carousel');
	});
});