/**
 * Find and Replace
 **/
function findReplace() {

	//grab the original text
	var txt = document.getElementById("find-replace").innerHTML;

	//grab the words to find/replace
	var findWord = document.getElementById("txt-find").value;
	var replaceWord = document.getElementById("txt-replace").value;

	//create a new regex object to use to search for findWord
	//include the g and i modifiers: g is for global, i is for case insensitive
	var re = new RegExp(findWord, "gi");

	//find and replace words in original text using the regex we created
	var newText = txt.replace(re, replaceWord);

	//output the new text to the page
	document.getElementById("find-replace").innerHTML = newText;
}

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
