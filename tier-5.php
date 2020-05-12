<!DOCTYPE html>
<html>
	<head>
		<!-- LOAD ALL DEPENDENCY LINKS FROM FILE -->
		<?php require_once("lib/head-utils.php");?>

		<!-- JavaScript - Marty Level JS-->
		<script src="js/calc.js"></script>

		<!-- JavaScript - Leonora's Challenge -->
		<script src="js/kitties.js"></script>

		<title>JavaScript Assignment | Unique Challenges</title>
	</head>
	<body>

		<!-- LOAD NAVBAR FROM FILE -->
		<?php require_once("lib/navbar.php"); ?>

		<main>
			<div class="container">

				<!-- permutations finder -->
				<section>
					<h2>Permutations Finder :D</h2>
					<div class="form-group">
						<input id="perms-input" class="form-control" type="text" maxlength="6" placeholder="Beer Me.">
					</div>
					<button class="btn btn-primary" onclick="permutations();">YOLO!</button>
					<div id="perms-output">
						<ol id="perms-list"></ol>
					</div>
				</section>

				<section>
					<!-- input -->
					<h1 class="pacifico--font">My Little Calculator From Hell</h1>
					<hr>
					<div class="row">
						<div class="col-sm-2">
							<label for="number1">Number #1</label>
							<input type="number" id="number1" class="form-control input-lg" value="0">
						</div>
						<div class="col-sm-2">
							<label for="number2">Number #2</label>
							<input type="number" id="number2" class="form-control input-lg" value="0">
						</div>
					</div>

					<!-- buttons -->
					<div class="row">
						<div class="col">
							<h2 class="mt-3">Choose an Operation</h2>
							<button id="add" class="btn btn-primary" onclick="add();"><i class="fa fa-plus fa-2x"></i></button>
							<button id="subtract" class="btn btn-primary" onclick="subtract();"><i class="fa fa-minus fa-2x"></i></button>
							<button id="multiply" class="btn btn-primary" onclick="multiply();"><i class="fa fa-times fa-2x"></i></button>
							<button id="divide" class="btn btn-primary" onclick="divide();"><i class="fa fa-2x"><strong>&divide;</strong></i></button>
						</div>
					</div>

					<!-- results -->
					<h2 class="mt-3">Result</h2>
					<div id="result" class="lead"></div>
				</section>

				<section>
					<h1 class="pacifico--font">JSON Data: Celebrity Kitties</h1>
					<hr>
					<ul id="kitty-list"></ul>
				</section>
			</div><!--/.container-->
		</main>
	</body>
</html>