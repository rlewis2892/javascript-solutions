$(document).ready(function() {

	$.ajax({
		method: "GET",
		url: "data/cats.json"
	}).done(function(reply) {

		var cats = reply["cat"];

		$.each(cats, function(key, value) {
			$("#kitty-list").append("<li class=\"h3\">" + value.name + ", " + value.followers + " followers</li>");
		});
	});

});
