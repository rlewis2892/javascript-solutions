/**
* Literary Mutilator - Tier II
* @author Rochelle Lewis rlewis37@cnm.edu
**/

/**
 * Find and Replace
 * This uses RegEx
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
 * Highlight Word
 **/
function highlightWord(){
	//grab text content of paragraph AND the word to highlight
	var txt = document.getElementById("highlight-word").textContent;
	var findWord = document.getElementById("txt-highlight-word").value;

	//create regex to search with the word to highlight. global and case insensitive
	var re = new RegExp(findWord, "gi");

	//create a string that surrounds the chosen highlight word with a <span>
	var replaceWord = "<span class=\"highlight\">" + findWord + "</span>";

	//find that word and replace it with the string
	var highlightTxt = txt.replace(re, replaceWord);

	//output new highlighted text - highlight color styled in the CSS file
	document.getElementById("highlight-word").innerHTML = highlightTxt;
}

/**
 * Scroll Magic
 **/
function scrollMagic(){
	//grab the paragraph text
	var txt = document.getElementById("scroll-text").textContent;

	//split text into and array of words on the empty space
	var words = txt.split(" ");

	//remove the first element from the words array
	words.shift();

	//rejoin the words array, and replace the paragraph text
	document.getElementById("scroll-text").textContent = words.join(" ");
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

/**
 * Counter Closure
 * A simple counter that returns a number between 0 and a max value which is passed in.
 * @param int max the number at which to reset the counter to 0
 **/
var count = (function (max) {
	var i = 0;
	return function (max) {
		i += 1;
		if(i >= max){ i = 0; }
		return i;
	}
})();

/**
 * Keydown Event
 * Changes the text and background color of the textarea
 * on keydown for a fabuluous rainbow treat :D
 **/
function keydown() {
	//grab the textarea for our conveniance
	var textarea = document.getElementById("keypress");

	//create an array of fabulousness
	var colors = ["red", "orange", "yellow", "limegreen", "lightskyblue", "orchid"];

	//apply a background color from the array of colors - IN ORDER of teh rainbow!
	textarea.style.backgroundColor=colors[count(colors.length)];
	textarea.style.color="white";
}

/**
 * Keyup Event
 * Resets the text and background color of the textarea on keyup
 **/
function keyup() {
	//grab the textarea for our conveniance
	var textarea = document.getElementById("keypress");

	//reset textarea colors on key up
	textarea.style.backgroundColor="";
	textarea.style.color="";
}
