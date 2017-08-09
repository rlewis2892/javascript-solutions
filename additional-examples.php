<!DOCTYPE html>
<html>
	<head>
		<!-- LOAD ALL DEPENDENCY LINKS FROM FILE -->
		<?php require_once("lib/head-utils.php");?>

		<!-- JavaScript - Required Tier-->
		<script src="js/additional.js"></script>

		<title>JavaScript Assignment | Additional Examples</title>
	</head>
	<body>

		<!-- LOAD NAVBAR FROM FILE -->
		<?php require_once("lib/navbar.php"); ?>

		<div class="container">

			<!-- ROT13 -->
			<section>
				<h2>Commander Riker ROT13</h2>
				<p id="rot13">Well, that's certainly good to know. Some days you get the bear, and some days the bear gets you. Maybe if we felt any human loss as keenly as we feel one of those close to us, human history would be far less bloody. A lot of things can change in twelve years, Admiral. My oath is between Captain Kargan and myself. Your only concern is with how you obey my orders. Or do you prefer the rank of prisoner to that of lieutenant? Yes, absolutely, I do indeed concur, wholeheartedly! Sorry, Data. Damage report! Earl Grey tea, watercress sandwiches... and Bularian canapés? Are you up for promotion? Besides, you look good in a dress. This is not about revenge. This is about justice.</p>
				<button class="btn btn-primary" onclick="rot13();">ROT13!</button>
			</section>

			<!-- highlight word -->
			<section>
				<h2>Commander Riker</h2>
				<p id="highlight-word">Well, that's certainly good to know. Some days you get the bear, and some days the bear gets you. Maybe if we felt any human loss as keenly as we feel one of those close to us, human history would be far less bloody. A lot of things can change
					in twelve years, Admiral. My oath is between Captain Kargan and myself. Your only concern is with how you obey my orders. Or do you prefer the rank of prisoner to that of lieutenant? Yes, absolutely, I do indeed concur, wholeheartedly! Sorry,
					Data. Damage report! Earl Grey tea, watercress sandwiches... and Bularian canapés? Are you up for promotion? Besides, you look good in a dress. This is not about revenge. This is about justice.</p>

				<!-- highlight word input -->
				<div class="form-group">
					<label class="sr-only" for="highlight-word">Highlight Word</label>
					<input type="text" class="form-control" id="txt-highlight-word" maxlength="25" placeholder="highlight word">
				</div>
				<button class="btn btn-default" onclick="highlightWord();">Highlight!</button>
			</section>

			<!-- scroll event magic -->
			<section>
				<h2>Scroll! YOLO.</h2>
				<div id="scroll-magic" class="custom-panel" onscroll="scrollMagic();">
					<p id="scroll-text">Kombucha crucifix ennui everyday carry 3 wolf moon. Organic fap mumblecore, authentic cardigan jean shorts celiac tilde ramps. Ugh retro truffaut hella keytar, lo-fi tofu aesthetic. XOXO leggings deep v, chambray YOLO mlkshk irony kickstarter +1 gentrify kinfolk fixie green juice migas. Retro listicle kale chips blue bottle, kinfolk sustainable ugh 8-bit scenester typewriter lumbersexual chartreuse. Chia irony chicharrones brunch, lo-fi selfies leggings bespoke deep v venmo migas hashtag mumblecore. Brooklyn DIY organic, bicycle rights sriracha ugh hashtag vinyl. Plaid XOXO next level tumblr tumeric. Blog chambray tilde, chicharrones whatever snackwave unicorn pop-up. Craft beer actually marfa umami subway tile irony austin portland migas la croix 8-bit fam sartorial. Yr neutra pickled portland semiotics raw denim +1 cardigan hella blue bottle fashion axe woke coloring book truffaut. Wayfarers tumeric pitchfork unicorn. Lyft master cleanse mustache chillwave four dollar toast, letterpress cliche flexitarian fixie. Banjo thundercats disrupt, occupy knausgaard health goth celiac cornhole mixtape DIY banh mi pinterest wolf bespoke. Taxidermy occupy gluten-free lomo hella. Tumblr sriracha hexagon farm-to-table kogi food truck. Offal chillwave austin poke chartreuse, kickstarter health goth single-origin coffee slow-carb you probably haven't heard of them shaman raw denim blue bottle. Pabst shoreditch DIY street art art party echo park green juice plaid marfa dreamcatcher etsy try-hard mlkshk. Meggings vexillologist plaid pug typewriter palo santo air plant banjo literally af austin lyft 3 wolf moon freegan. La croix green juice lomo DIY synth, microdosing kale chips.</p>
				</div>
			</section>

			<!-- keyboard event -->
			<section>
				<h2 id="keypress-title">Tell Us What You Really Think...</h2>
				<textarea id="keypress" class="custom-panel col-xs-12" onkeydown="keydown();" onkeyup="keyup();" maxlength="2000" placeholder="your opinion here"></textarea>
				<div class="clear"></div>
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
						<div class="col-xs-6">
							<div class="box pull-left" ondragover="allowDragOver(event);" ondrop="dropKitty(event);">
								<img src="media/kitten.jpg" id="kitty" class="img-thumbnail img-circle" alt="kitty" draggable="true" ondragstart="dragKitty(event);">
							</div>
						</div>
						<div class="col-xs-6">
							<div id="dropbox" class="box pull-right" ondragover="allowDragOver(event);" ondrop="dropKitty(event);"></div>
						</div>
					</div>
				</div>
			</section>

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
		</div><!--/.container -->

	</body>
</html>