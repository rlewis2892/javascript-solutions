/**
 * Permutations - Outputs all possible letter combinations of user given words
 *
 * Warning: Expensive function - input length restricted to 15 chars
 *
 * Based off of: http://codereview.stackexchange.com/questions/57161/generate-all-possible-combinations-of-letters-in-a-word
 *
 * Edited and commented for clarity by @rlewis2892
 *
 * Based off of Heap's Algorithm.
 * See https://en.wikipedia.org/wiki/Heap%27s_algorithm
 **/
function swapLetters(chars, i, j) {
	var tmp = chars[i];
	chars[i] = chars[j];
	chars[j] = tmp;
}

function permutations() {
	//grab user input
	var input = document.getElementById("perms-input").value;

	//create a counter array to help us loop over letters
	var counter = [];

	//create an array to hold all of the anagrams
	var allPermutations = [];

	//split the user input into an array of letters
	var chars = input.split('');

	//create a variable that holds the length of the user input
	var length = chars.length;

	//create an iterator to use in our loops
	var i;

	//create an index in the counter array for each letter in the user input. Set each index to hold int 0.
	for (i = 0; i < length; i++) {
		counter[i] = 0;
	}

	//we're just gonna make the first result in the anagrams array the same as the user input, k?
	allPermutations.push("<div class=\"h3 perms-title\">" + input + "</div>");

	//reset i to 0
	i = 0;

	/**
	 * The LOOP
	 **/
	while (i < length) {

		if (counter[i] < i) {

			var index;
			if(i % 2 === 1){
				index = counter[i];
			} else {
				index = 0;
			}

			swapLetters(chars, index, i);

			counter[i]++;
			i = 0;

			allPermutations.push(chars.join(''));

		} else {

			counter[i] = 0;
			i++;

		}//end if/else
	}//end while loop

	//convert the anagrams array to a string, each word contained in a <li>
	allPermutations = allPermutations.join("</li><li>");

	//output anagrams to the empty output-list in the output area div
	document.getElementById("perms-output").className = "alert alert-success m-t-1";
	document.getElementById("perms-list").innerHTML = allPermutations;
}