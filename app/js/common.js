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

	//************* MagnificPopup ***********

	$('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,
        
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });

	//************* MagnificPopup ***********

    $('.selectpicker1').selectpicker({
	  style: 'btn-info',
	  size: 4
	});



});
