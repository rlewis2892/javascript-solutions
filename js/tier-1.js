/**
 * JavaScript Assignment - Tier I
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
 * Background Color Changer - Highlight Paragraph
 * Changes the color of the text background
 **/
function highlight() {
	document.getElementById("bg-color").style.backgroundColor = "yellow";
}

/**
 * Background Color Reset - Highlight Paragraph
 * Reset the color of the text background
 **/
function resetBgColor() {
	document.getElementById("bg-color").style.backgroundColor = "";
}