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
	    items:4,
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




	//show hidden form ************************************
	$('.popup').magnificPopup();

	//Email send ************************************
	//For hidden form
	$("#hidden_form").submit(function() {
		$.ajax({
			type: "POST",
			url: "/assets/mail/mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
			$("#hidden_form").trigger("reset");
		});
		return false;
	});

	//For footer form
	$("#footer_form").submit(function() {
		$.ajax({
			type: "POST",
			url: "/assets/mail/mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
			$("#footer_form").trigger("reset");
		});
		return false;
	});

	//Sales animation
	$(".sales").animate({'left':'0'},500);

	//Menu toogle
	$(".toggle-mnu").click(function() {
	  $(this).toggleClass("on");
	  $(".mobile-menu").slideToggle();
	  return false;
	});


});