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

	var initialMinimumValue = $("input#minCost").val();
	var initialMaximumValue = $("input#maxCost").val();

	jQuery("#az-slider").slider({
	    min: parseInt($("input#minCost").val()),
	    max: $("input#maxCost").val(),
	    values: [$("input#minCost").val(),$("input#maxCost").val()],
	    range: true,
	    stop: function(event, ui) {
				jQuery("input#minCost").val(jQuery("#az-slider").slider("values",0));//.width((jQuery("input#minCost").val().length+1)*8);
				jQuery("input#maxCost").val(jQuery("#az-slider").slider("values",1));//.width((jQuery("input#maxCost").val().length+1)*8);
				jQuery("span#minCost2").text(jQuery("#az-slider").slider("values",0));
				jQuery("span#maxCost2").text(jQuery("#az-slider").slider("values",1));
			},
			slide: function(event, ui){
				jQuery("input#minCost").val(jQuery("#az-slider").slider("values",0));//.width((jQuery("input#minCost").val().length+1)*8);
				jQuery("input#maxCost").val(jQuery("#az-slider").slider("values",1));//.width((jQuery("input#maxCost").val().length+1)*8);
				jQuery("span#minCost2").text(jQuery("#az-slider").slider("values",0));
				jQuery("span#maxCost2").text(jQuery("#az-slider").slider("values",1));
			}
	});

	$(".az-submit input[type=reset]").click(function(){
		jQuery("#az-slider").slider("values", 0, initialMinimumValue);
		jQuery("#az-slider").slider("values", 1, initialMaximumValue);
		jQuery("span#minCost2").text(jQuery("#az-slider").slider("values",0));
		jQuery("span#maxCost2").text(jQuery("#az-slider").slider("values",1));
	});

	$('.az-select').each(function(){
      var select = $(this);    
      var option = select.find('select option');
      var str = '<div class="az-options clearfix">';
      select.find('option').each(function(){
          str+= '<div data-val="' +$(this).val() + '">' + $(this).text() + '</div>'
      });
      str+= '</div>';
      select.html(select.html() + str);

      select.find('select').mousedown(function(){
          return false;
      });
      select.mouseup(function(){
          select.find('select').focus();
      });

      // select.find('select').keyup(function(e){
      //     if (e.keyCode == 13 || e.keyCode == 32) {
      //         alert(1);
      //         // e.preventDefault();
      //         return false;
      //     }
      // });
      select.find('.az-options div[data-val]').click(function(){
          select.find('select').val($(this).attr('data-val'));
      });
      select.find('select').focusout(function(){
          if(!select.is(':hover')){
              select.find('.az-options').slideUp(0);
              select.removeClass('az-select-focus');
          }
      });
      $(window).click(function(){
          if(!select.is(':hover')){
              select.find('.az-options').slideUp(0);
              select.removeClass('az-select-focus');
          }
      });
      select.find('select').on('focus', function(e) {
          this.blur();
          window.focus();
      });
  });

  $(".az-select").click(function(){
      $(this).find('.az-options').slideToggle(0);
      $(this).toggleClass('az-select-focus');
  });

  $(".az-grid").click(function(){
  	$(".az-rows").removeClass("active");
  	$(this).addClass("active");
  	$("#az-catalog").removeClass("list");
  	return false;
  });

  $(".az-rows").click(function(){
  	$(".az-grid").removeClass("active");
  	$(this).addClass("active");
  	$("#az-catalog").addClass("list");
  	return false;
  });

  $(".az-tab-inner").click(function(){
    $(".az-tab-inner").removeClass("active");
    $(this).addClass("active");
    $(".az-tabs-cont .az-tab-cont").slideUp(0);
    $(".az-tabs-cont .az-tab-cont").eq($(".az-tab-inner").index($(this))).slideDown(0);
  });

});
