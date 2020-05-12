<!DOCTYPE html>
<html>
	<head>
		<!-- LOAD ALL DEPENDENCY LINKS FROM FILE -->
		<?php require_once("lib/head-utils.php");?>
		<title>Literary Mutilator | Tier II</title>
	</head>
	<body>

		<!-- LOAD NAVBAR FROM FILE -->
		<?php require_once("lib/navbar.php"); ?>

		<main>
			<div class="container">

				<h1 class="pacifico--font">Tier II</h1>
				<hr class="mt-5 bg-secondary">

				<!-- find/replace -->
				<section>
					<div id="find-replace">
						<h2>Find &amp; Replace with RegEx =^. .^=</h2>
						<p>Human give me attention meow hide from vacuum cleaner human give me attention meow. Bathe private parts with tongue then lick owner's face walk on car leaving trail of paw prints on hood and windshield. Stare at the wall, play with food and get confused by dust soft kitty warm kitty little ball of furr, and eat owner's food loves cheeseburgers mew chase the pig around the house. Attack dog, run away and pretend to be victim hunt by meowing loudly at 5am next to human slave food dispenser but jump launch to pounce upon little yarn mouse, bare fangs at toy run hide in litter box until treats are fed who's the baby, yet jump around on couch, meow constantly until given food. Soft kitty warm kitty little ball of furr missing until dinner time always hungry. Chase after silly colored fish toys around the house. Shake treat bag.</p>
					</div><!-- /#find-replace -->

					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="txt-find">Find</label>
								<input type="text" class="form-control" id="txt-find" maxlength="25">
							</div>
							<div class="form-group">
								<label for="txt-replace">Replace</label>
								<input type="text" class="form-control" id="txt-replace" maxlength="25">
							</div>
							<button type="button" class="btn btn-primary" onclick="findReplace();">Go!</button>

						</div>
					</div>
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

				<!-- random shuffle -->
				<section>
					<div class="text-center">
						<h1>Corporate Shuffle</h1>
						<button id="btn-shuffle" class="btn btn-danger btn-lg m-t-1" onclick="shufflize();">(ノ°▽°)ノ︵┻━┻</button>
					</div>
					<p id="shuffle" class="well lead m-t-1">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment. Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
				</section>

				<!-- keyboard event -->
				<section>
					<h2 id="keypress-title">Tell Us What You Really Think...</h2>
					<textarea id="keypress" class="custom-panel w-100" onkeydown="keydown();" onkeyup="keyup();" maxlength="2000" placeholder="your opinion here"></textarea>
					<div class="clear"></div>
				</section>
			</div>
		</main>

		<!-- JavaScript - Tier II -->
		<script src="js/tier-2.js"></script>
	</body>
</html>