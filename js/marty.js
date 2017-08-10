//grab user input and push onto an array
function getInput() {
	var numbers = [];

	//user input must be parsed as integers before pushed into array
	numbers.push(
		parseFloat(document.getElementById("number1").value, 10),
		parseFloat(document.getElementById("number2").value, 10)
	);

	return numbers;
}

//print result to screen
function printResult(x) {
	document.getElementById("result").innerHTML = x;
}

//create math operation functions
function add() {
	function sum(a, b) {
		return a + b;
	}
	var num = getInput().reduce(sum);
	printResult(num);
}

function subtract() {
	function sub(a, b) {
		return a - b;
	}
	var num = getInput().reduce(sub);
	printResult(num);
}

function multiply() {
	function mult(a, b) {
		return a * b;
	}
	var num = getInput().reduce(mult);
	printResult(num);
}

function divide() {
	function div(a, b) {
		return a / b;
	}
	var num = getInput().reduce(div);
	printResult(num);
}