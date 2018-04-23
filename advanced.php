<!DOCTYPE html>
<html>
	<head>
		<!-- LOAD ALL DEPENDENCY LINKS FROM FILE -->
		<?php require_once("lib/head-utils.php");?>

		<!-- JavaScript - Required Tier-->
		<script src="js/advanced.js"></script>

		<title>JavaScript Assignment | Adv/AJAX Tier</title>
	</head>
	<body>

		<!-- LOAD NAVBAR FROM FILE -->
		<?php require_once("lib/navbar.php"); ?>

		<main class="mb-5">
			<div class="container">
				<h2>jQuery Flavored Bacon</h2>
				<button id="getJqueryBacon" class="btn btn-lg btn-danger">Gimme Bacon</button>
				<div class="m-t-1" id="jqueryBacon"></div>
				<hr class="my-3">

				<h2>XMLHttpRequest Flavored Bacon</h2>
				<button id="getJsBacon" class="btn btn-lg btn-danger" onclick="jsBaconRequest();">Gimme Moar Bacon</button>
				<div class="m-t-1" id="jsBacon"></div>
				<hr class="my-3">

				<h2>Fetch Flavored Bacon</h2>
				<button id="getFetchBacon" class="btn btn-lg btn-danger" onclick="fetchBacon();">Fetch Bacon Pls</button>
				<div class="m-t-1" id="fetchBacon"></div>
			</div>
		</main>

	</body>
</html>