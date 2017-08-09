/**
 * JavaScript Assignment - Adv/AJAX Tier
 *
 * Use jQuery and flat JavaScript to make AJAX call
 * to web APIs.
 *
 * @author Rochelle Lewis rlewis37@cnm.edu
 **/

/* jQuery AJAX Request */
$(document).ready(function() {
	$("#getJqueryBacon").click(function() {
		$.ajax({
			method: "GET",
			url: "https://baconipsum.com/api/?type=meat-and-filler"
		}).done(function(reply) {
			$("#jqueryBacon").html(reply);
			console.log("you have jquery flavored bacon!");
		});
	});
});

/* JavaScript AJAX Request */
function jsBaconRequest() {

	// URL of the API Endpoint
	var requestUrl = "https://baconipsum.com/api/?type=meat-and-filler";

	// create new request
	var httpRequest = new XMLHttpRequest();

	// if can't create httpRequest request, alert error message
	if (!httpRequest) {
		alert('Giving up :( Cannot create an XMLHTTP instance');
		return false;
	}

	// run function that prints out response onreadystatechange
	httpRequest.onreadystatechange = printJsBacon;

	// open the request
	httpRequest.open("GET", requestUrl, true);

	// send the request
	httpRequest.send();

	// this function prints the bacon response to the screen
	// or an error if an exception is thrown
	function printJsBacon() {
		try {
			if(httpRequest.readyState === XMLHttpRequest.DONE) {
				if (httpRequest.status === 200) {

					//parse JSON
					var bacon = JSON.parse(httpRequest.response);

					//put parsed JSON on screen
					document.getElementById("jsBacon").innerHTML = bacon;
					console.log("you have even more bacon!");
				}
			}
		} catch(e) {
			alert("Exception: " + e.description);
		}
	}
}
