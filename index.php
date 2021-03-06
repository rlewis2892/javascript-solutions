<!DOCTYPE html>
<html>
	<head>
		<!-- LOAD ALL DEPENDENCY LINKS FROM FILE -->
		<?php require_once("lib/head-utils.php");?>
		<title>Literary Mutilator | Tier I</title>
	</head>
	<body>

		<!-- LOAD NAVBAR FROM FILE -->
		<?php require_once("lib/navbar.php"); ?>

		<main>
			<div class="container">

				<h1 class="pacifico--font">Tier I</h1>
				<hr class="mt-5 bg-secondary">

				<!-- changing text color onclick event -->
				<section>
					<div id="text-color">
						<h2>My Kitty :D</h2>
						<p>Spit up on light gray carpet instead of adjacent linoleum spot something, big eyes, big eyes, crouch, shake butt, prepare to pounce for eat prawns daintily with a claw then lick paws clean wash down prawns with a lap of carnation milk then retire to the warmest spot on the couch to claw at the fabric before taking a catnap but refuse to leave cardboard box. Touch water with paw then recoil in horror eat owner's food but lay on arms while you're using the keyboard for play time, yet immediately regret falling into bathtub i am the best.</p>
					</div>
					<button class="btn btn-primary" onclick="textColor();">Change Color</button>
					<button class="btn btn-primary" onclick="resetTextColor();">Reset Color</button>
				</section>

				<!-- changing font style on checkbox -->
				<section>
					<div id="font-style">
						<h2>Commander Riker</h2>
						<p class="lead">Well, that's certainly good to know. Some days you get the bear, and some days the bear gets you. Maybe if we felt any human loss as keenly as we feel one of those close to us, human history would be far less bloody. A lot of things can change in twelve years, Admiral. My oath is between Captain Kargan and myself. Your only concern is with how you obey my orders. Or do you prefer the rank of prisoner to that of lieutenant? Yes, absolutely, I do indeed concur, wholeheartedly! Sorry, Data. Damage report! Earl Grey tea, watercress sandwiches... and Bularian canapés? Are you up for promotion? Besides, you look good in a dress. This is not about revenge. This is about justice.</p>
					</div>
					<div class="checkbox">
						<label>
							<input id="change-font" type="checkbox" onchange="fontStyle();"> Make Fancy
						</label>
					</div>
				</section>

				<!-- highlight entire paragraph on mouseover -->
				<section>
					<div id="bg-color" class="custom-panel" onmouseover="highlight();" onmouseout="resetBgColor();">
						<h2>Mouseover. Beer Me. YOLO.</h2>
						<p>Kombucha crucifix ennui everyday carry 3 wolf moon. Organic fap mumblecore, authentic cardigan jean shorts celiac tilde ramps. Ugh retro truffaut hella keytar, lo-fi tofu aesthetic. XOXO leggings deep v, chambray YOLO mlkshk irony kickstarter +1 gentrify kinfolk fixie green juice migas. Retro listicle kale chips blue bottle, kinfolk sustainable ugh 8-bit scenester typewriter lumbersexual chartreuse. Chia irony chicharrones brunch, lo-fi selfies leggings bespoke deep v venmo migas hashtag mumblecore. Brooklyn DIY organic, bicycle rights sriracha ugh hashtag vinyl.</p>
					</div>
				</section>

			</div><!--/.container-->
		</main>

		<!-- JavaScript - Required Tier-->
		<script src="js/tier-1.js"></script>
	</body>
</html>