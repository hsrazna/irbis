$(function() {
	$(".az-menu-icon").click(function(){
		$(this).next(".az-dropdawn-menu").toggleClass("open");
		return false;
	});
	$(".az-accordion>li>a").click(function(){
		if($(this).next().length>0&&$(this).next().css('display')=='none'){
			$(".az-accordion>li>a").removeClass("open").next().slideUp(300);
			$(this).addClass("open").next().slideDown(300);
		}else if($(this).next().length>0&&$(this).next().css('display')!='none'){
			$(this).removeClass("open").next().slideUp(300);
		}
		return false;
	});

	jQuery("#az-slider").slider({
	    min: parseInt($("input#minCost").val()),
	    max: $("input#maxCost").val(),
	    values: [$("input#minCost").val(),$("input#maxCost").val()],
	    range: true,
	    stop: function(event, ui) {
	      // alert(1);
			jQuery("input#minCost").val(jQuery("#az-slider").slider("values",0)).width((jQuery("input#minCost").val().length+1)*8);
			jQuery("input#maxCost").val(jQuery("#az-slider").slider("values",1)).width((jQuery("input#maxCost").val().length+1)*8);
		},
		slide: function(event, ui){
			jQuery("input#minCost").val(jQuery("#az-slider").slider("values",0)).width((jQuery("input#minCost").val().length+1)*8);
			jQuery("input#maxCost").val(jQuery("#az-slider").slider("values",1)).width((jQuery("input#maxCost").val().length+1)*8);
		}
	});

	// $('.selectpicker').selectpicker();

});
