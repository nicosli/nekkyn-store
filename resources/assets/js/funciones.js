$(document).ready(function(){
	$('#tabsCatalogo a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})
});