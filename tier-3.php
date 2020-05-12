<!DOCTYPE html>
<html>
	<head>
		<!-- LOAD ALL DEPENDENCY LINKS FROM FILE -->
		<?php require_once("lib/head-utils.php");?>
		<title>Literary Mutilator | Tier III</title>
	</head>
	<body>

		<!-- LOAD NAVBAR FROM FILE -->
		<?php require_once("lib/navbar.php"); ?>

		<main>
			<div class="container">

				<h1 class="pacifico--font">Tier III</h1>
				<hr class="mt-5 bg-secondary">

				<!-- ROT13 -->
				<section>
					<h2>Commander Riker ROT13</h2>
					<p id="rot13">Well, that's certainly good to know. Some days you get the bear, and some days the bear gets you. Maybe if we felt any human loss as keenly as we feel one of those close to us, human history would be far less bloody. A lot of things can change in twelve years, Admiral. My oath is between Captain Kargan and myself. Your only concern is with how you obey my orders. Or do you prefer the rank of prisoner to that of lieutenant? Yes, absolutely, I do indeed concur, wholeheartedly! Sorry, Data. Damage report! Earl Grey tea, watercress sandwiches... and Bularian canapés? Are you up for promotion? Besides, you look good in a dress. This is not about revenge. This is about justice.</p>
					<button class="btn btn-primary" onclick="rot13();">ROT13!</button>
				</section>

				<!-- Anagrams! -->
				<section>
					<h2>Anagrams? Smargana!</h2>
					<p class="small">Push the button and flip the letters in each word :O</p>
					<p id="anagrams">The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee. Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price.</p>
					<button class="btn btn-primary" onclick="anagrams();">Flip that S**t!</button>
				</section>

				<!-- drag n drop -->
				<section>
					<h2>Drag &amp; Drop the Kitty into the Box!</h2>
					<div id="drag-kitty" class="custom-panel">
						<div class="row">
							<div class="col-6">
								<div class="box pull-left" ondragover="allowDragOver(event);" ondrop="dropKitty(event);">
									<img src="media/kitten.jpg" id="kitty" class="img-thumbnail rounded-circle" alt="kitty" draggable="true" ondragstart="dragKitty(event);">
								</div>
							</div>
							<div class="col-6">
								<div id="dropbox" class="box pull-right" ondragover="allowDragOver(event);" ondrop="dropKitty(event);"></div>
							</div>
						</div>
					</div>
				</section>

			</div><!--/.container -->
		</main>

		<!-- JavaScript - Tier III -->
		<script src="js/tier-3.js"></script>
	</body>
</html>