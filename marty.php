<!DOCTYPE html>
<html>
	<head>
		<!-- LOAD ALL DEPENDENCY LINKS FROM FILE -->
		<?php require_once("lib/head-utils.php");?>

		<!-- JavaScript - Marty Level JS-->
		<script src="js/marty.js"></script>

		<!-- JavaScript - Leonora's Challenge -->
		<script src="js/leonora.js"></script>

		<title>JavaScript Assignment | Unique Challenges</title>
	</head>
	<body>

		<!-- LOAD NAVBAR FROM FILE -->
		<?php require_once("lib/navbar.php"); ?>

		<div class="container">

			<section>
				<!-- input -->
				<h1 class="pacifico--font">My Calculator From Hell</h1>
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
					<div class="col-xs-12">
						<h2>Choose an Operation</h2>
						<button id="add" class="btn btn-primary" onclick="add();"><i class="fa fa-plus fa-2x"></i></button>
						<button id="subtract" class="btn btn-primary" onclick="subtract();"><i class="fa fa-minus fa-2x"></i></button>
						<button id="multiply" class="btn btn-primary" onclick="multiply();"><i class="fa fa-times fa-2x"></i></button>
						<button id="divide" class="btn btn-primary" onclick="divide();"><i class="fa fa-2x"><strong>&divide;</strong></i></button>
					</div>
				</div>

				<!-- results -->
				<h2>Result</h2>
				<div id="result" class="lead"></div>
			</section>

			<section>
				<h1 class="pacifico--font">Celebrity Kitties</h1>
				<table class="table table-striped table-bordered">
					<tr>
						<th>Name</th>
						<th>Breed</th>
						<th>Color</th>
						<th>Followers</th>
					</tr>
				</table>
			</section>
		</div><!--/.container-->
	</body>
</html>