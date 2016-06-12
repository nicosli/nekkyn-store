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
});