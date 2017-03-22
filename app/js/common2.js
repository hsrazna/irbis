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
});
