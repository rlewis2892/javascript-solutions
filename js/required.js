/**
 * JavaScript Assignment - Required Tier
 * @author Rochelle Lewis rlewis37@cnm.edu
 **/

/**
 * Text Color Changer
 * Changes the color of the paragraph text
 **/
function textColor() {
	document.getElementById("text-color").style.color = "fuchsia";
}

/**
 * Reset Text Color
 * Resets the color of the paragraph text
 **/
function resetTextColor() {
	document.getElementById("text-color").style.color = "";
}

/**
 * Font Style Changer
 * Changes the font style of the paragraph text on checkbox option
 **/
function fontStyle() {
	//grab the paragraph, store it in a variable
	var text = document.getElementById("font-style");

	//if the font has been changed, set it back to the default
	//otherwise change font family to Pacifico on checkbox click
	if (text.style.fontFamily === "Pacifico") {
		text.style.fontFamily = "";
	} else {
		text.style.fontFamily = "Pacifico";
	}
}

/**
 * Background Color Changer
 * Changes the color of the text background
 **/
function highlight() {
	document.getElementById("bg-color").style.backgroundColor = "yellow";
}

/**
 * Background Color Reset
 * Reset the color of the text background
 **/
function resetBgColor() {
	document.getElementById("bg-color").style.backgroundColor = "";
}

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