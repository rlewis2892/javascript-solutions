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

		<div class="container">
			<h2>jQuery Flavored Bacon</h2>
			<button id="getJqueryBacon" class="btn btn-lg btn-danger">Gimme Bacon</button>
			<div class="m-t-1" id="jqueryBacon"></div>

			<h2>XMLHttpRequest Flavored Bacon</h2>
			<button id="getJsBacon" class="btn btn-lg btn-danger" onclick="jsBaconRequest();">Gimme Moar Bacon</button>
			<div class="m-t-1" id="jsBacon"></div>
		</div>

	</body>
</html>