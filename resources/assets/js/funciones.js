$(document).ready(function(){
	$('.tabsJs a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})
	var statusDropDown = false;
	$('.dropdown.keep-open').on({
	    "shown.bs.dropdown": function() { statusDropDown = false; },
	    "click":             function() { statusDropDown = true; },
	    "hide.bs.dropdown":  function() { return statusDropDown; }
	});
	$(".colpase-menu").click(function(){
		status = $(this).attr('data');
		if(status == 1){
			$("body").removeClass("expandido").addClass("colapsado");
			$(".navmenu").css("width", "50px");
			$(".navmenu ul li a span").hide();
			$(".navmenu .menuTit span").hide();
			$(".colpase-menu span").hide();
			$(".wrapp-colapse-menu").css("width", "50px");
			$(".wrapp-colapse-menu").css("text-align", "center");
			$(".colpase-menu i").removeClass('fa-angle-double-left').addClass('fa-angle-double-right');
			status = 0;
		}else if(status == 0){
			$("body").removeClass("colapsado").addClass("expandido");
			$(".navmenu").css("width", "240px");
			$(".navmenu ul li a span").show();
			$(".navmenu .menuTit span").show();
			$(".colpase-menu span").show();
			$(".wrapp-colapse-menu").css("width", "240px");
			$(".wrapp-colapse-menu").css("text-align", "right");
			$(".colpase-menu i").removeClass('fa-angle-double-right').addClass('fa-angle-double-left');
			status = 1;
		}
		$(this).attr('data', status);
	});
});