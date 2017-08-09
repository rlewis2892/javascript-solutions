/**
 * JavaScript Assignment - Additional Extras
 * @author Rochelle Lewis rlewis37@cnm.edu
 **/

/**
 * ROT13
 **/
function rot13() {
	//This is the alphabet array
	var alphabet = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];

	//this is the rot13 alphabet array
	var alphabetRot13 = ["N","O","P","Q","R","S","T","U","V","W","X","Y","Z","A","B","C","D","E","F","G","H","I","J","K","L","M","n","o","p","q","r","s","t","u","v","w","x","y","z","a","b","c","d","e","f","g","h","i","j","k","l","m"];

	//grab the paragraph text
	var text = document.getElementById("rot13").textContent;

	//empty string to hold our rot13 text
	var rot13Text = "";

	//loop through each letter in the paragraph text
	for (var i = 0; i < text.length; i++) {

		//then loop through each letter in the alphabet
		for (var j = 0; j < alphabet.length; j++) {

			//if a letter of the text matches a particular letter of the alphabet...
			if (text[i] === alphabet[j]) {

				//...then swap that letter out with it's corresponding rot13 character
				rot13Text = rot13Text + alphabetRot13[j];
			}
		}

		//take the spaces into account!
		if (text[i] === " ") {
			rot13Text = rot13Text + " ";
		}
	}

	//after the loops are done, output the rot13 text
	document.getElementById("rot13").textContent = rot13Text;
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

/**
 * Anagrams
 * This function flips all the letters in each word in the paragraph.
 **/
function anagrams(){
	//grab the paragraph text
	var txt = document.getElementById("anagrams").textContent;

	//split the text on the space character - now we have an array of words
	txt = txt.split(" ");

	//create a variable to hold the reversed words
	var revTxt = [];

	//loop through each word - each index in the txt array
	for(var i = 0; i < txt.length; i++) {

		//split, reverse, join each index in the txt array, then
		var tmp = txt[i].split("").reverse().join("");
		revTxt[i] = tmp;

	}

	//create a string from the revTxt array, and join with a space
	var newTxt = revTxt.toString().split(",").join(" ");

	document.getElementById("anagrams").textContent = newTxt;

}

/**
 * Drag and Drop
 * see https://developer.mozilla.org/en-US/docs/Web/API/HTML_Drag_and_Drop_API
 **/

/**
 * Create a Sound for the Drag and Drop
 * see http://www.w3schools.com/games/game_sound.asp
 * @param string src the path or URL to the sound file
 **/
function sound(src) {
	this.sound = document.createElement("audio");
	this.sound.src = src;
	this.sound.setAttribute("preload", "auto");
	this.sound.setAttribute("controls", "none");
	this.sound.style.display = "none";
	document.body.appendChild(this.sound);
	this.play = function(){
		this.sound.play();
	}
}

/*allow drag event - prevent the default behavior which prevents the drop*/
function allowDragOver(ev) {
	ev.preventDefault();
}

/*grab the kitty on drag*/
function dragKitty(ev) {
	ev.dataTransfer.setData("text", ev.target.id);
}

/*transfer the kitty on drop*/
function dropKitty(ev) {
	ev.preventDefault();
	var data = ev.dataTransfer.getData("text");
	ev.target.appendChild(document.getElementById(data));

	//create an audible meow when kitty is dropped!
	var meow = new sound("media/kitten.mp3");
	meow.play();
}

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