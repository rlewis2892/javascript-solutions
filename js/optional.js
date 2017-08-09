/**
 * Shufflize
 * Use the .map() Array method.
 * This is an implementation of the Fisher-Yates shuffle :D
 *
 * @author Rochelle Lewis rlewis37@cnm.edu
 **/
function shufflize() {
	//grab paragraph text
	var txt = document.getElementById("shuffle").textContent;

	//split text into an array of words on the empty spaces
	var words = txt.split(" ");

	words.map(function(t) {
		for(i = (words.length - 1); i > 0; i--){

			//create a random number, no greater than the max array index of words
			var j = Math.floor(Math.random() * (i + 1));

			//swap out each array index with the random number
			var temp = words[i];
			words[i] = words[j];
			words[j] = temp;
		}

		//join the randomized words and replace the original paragraph
		document.getElementById("shuffle").textContent = words.join(" ");
	});
}
