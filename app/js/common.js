$(function() {

	$('.ah-sliderbox').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:true,
	    autoplay:false,
	    smartSpeed:1000,
	    autoplayTimeout:2000,
	    dots: true,
	    navText:['<span class="prev_arrs1"></span>', '<span class="next_arrs1"></span>'],
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});




});
