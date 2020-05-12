/**
 * Literary Mutilator - Tier III
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