$(document).ready(function() {

	$.ajax({
		method: "GET",
		url: "data/cats.json"
	}).done(function(reply) {
		//$("#jqueryBacon").html(reply);
		console.log(reply);
	});

});