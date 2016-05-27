$(document).ready(function(){
	$('.tabsJs a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})
});