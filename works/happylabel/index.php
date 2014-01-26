<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	include($path . '/templates/header-nav.php');
?>

			<div class="main-column clearfix">
				<div class="header">
					<div class="header-wrapper clearfix">
						<div class="page-title">
							<h1 id="works">Work</h1>
						</div>
						<div class="header-nav">
							<ol class="button">
								<li><a id="return-to-works" href="/works/"></a></li>
								<li><a id="previous" href="/works/happylabel/"></a></li>
								<li><a id="next" href="/works/connexus/"></a></li>
							</ol>
						</div>

					</div>
				</div>
				<div class="project-body">
					<div class="full-unit clearfix">
						<div class="year-tag">
							<p>2013</p>
						</div>
						<div class="full-unit-wrapper">
							<div class="project-title">
								<h3>HAPPYLABEL</br>
								A crowdsourcing game to label image with structured labels.
								</h3>
								<p>Tags: Interaction design, HCI research
								</p>
							</div>
							<div class="project-thumb">
								<img src="happylabel-f2.jpg">
							</div>
							<!-- <div class="short-blank"></div>	 -->
						</div>
					</div>

					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noheight">
								<div class="project-text">
									<h3>
										<a href="http://www.colorwork.com/" target="_blank">HAPPYLABEL</a>
									is...</h3>
									<p>a crowdsourcing image labeling game inspired by the Game with a Purpose (GWAP) , It is the project of CS376 Research Topics in Human Computer Interaction</p>
									<p><a href="/files/happylabel-3.pdf">Check out our paper</a>, or <a href="http://stanford.edu/~zhengs/happy_label/">play the demo</a></p>
								</div>
							</div>
						</div>
						<div class="single-unit-end">
							<div class="single-unit-wrapper-noheight">
								<div class="project-highlight">
									<h3>CS 376 Research Topics in HCI</h3>
								</div>
								<div class="project-tools">
									<h3>Mock up</h3>
									<h3>HTML/CSS/js</h3>
									<h3>Firebase</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noline">
								<div class="pict">
									<img src="happylabel-1.jpg"></img>
								</div>
							</div>
						</div>
					</div>
					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noheight">
								<div class="project-text">
									<h3>MOTIVATION</h3>
									<p>The game is designed to improve the "specificity" of image labels that are generated when people are playing.</p>
									<p>Previous study on ESP has shown the "obvious" issue: people tend to guess "obvious", easy words that provide less informative information for labeling. To solve this issue, we introduced a new hybrid design of ESP Game: It inherits the basic setting from ESP Game, and incorporates predefined category structure of labels. We intended to mix the effort of human computation from people who play the game with intelligence from domain experts who defined the category structure.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noline">
								<div class="pict pict-border">
									<img src="happylabel-2.jpg"></img>
								</div>
							</div>
						</div>
						<div class="single-unit-end">
							<div class="single-unit-wrapper-noline">
								<div class="single-side-info">
									<div class="comments">
									The "Obvious" problem of current ESP game
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noline">
								<div class="pict pict-border">
									<img src="happylabel-3.jpg"></img>
								</div>
							</div>
						</div>
						<div class="single-unit-end">
							<div class="single-unit-wrapper-noline">
								<div class="single-side-info">
									<div class="comments">
									Our hybrid approach tries to combine merits of ESP Game and category structure of labels
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noheight">
								<div class="project-text">
									<h3>IMPLEMENTATION</h3>
									<p>The example implementation is labeling car images with labels from "style-brand-model" structure. Similar implementation can be used in labeling images of fashion goods, animals etc.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noline">
								<div class="pict">
									<img src="happylabel-4.jpg"></img>
								</div>
							</div>
						</div>
						<div class="single-unit-end">
							<div class="single-unit-wrapper-noline">
								<div class="single-side-info">
									<div class="comments">
									The interface where people are playing games in pairs
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noline">
								<div class="pict">
									<img src="happylabel-5.jpg"></img>
								</div>
							</div>
						</div>
						<div class="single-unit-end">
							<div class="single-unit-wrapper-noline">
								<div class="single-side-info">
									<div class="comments">
									Predefined structure helps people to label image with deep and more specific information
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noheight">
								<div class="project-text">
									<h3>ENGINEERING</h3>
									<p>To test the game design, we implement HappyLabel as an online game. The client side was implemented using HTML5, CSS3 and Javascript. The backend was built using Firebase. We stored all the data (including game information, player information, leader-board information, image labels, category tree) in Firebase. Any changes (read or write) made to that data are automatically synchronized with the Firebase cloud and with all clients within milliseconds.
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noheight">
								<div class="project-text">
									<h3>TESTING</h3>
									<p>We tested the game online to see if it can improve the labelling efficiency, label quality and at the same still be fun to play. During the test, we had 872 people-time played this game.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noline">
								<div class="pict">
									<img src="happylabel-7.jpg"></img>
								</div>
							</div>
						</div>
						<div class="single-unit-end">
							<div class="single-unit-wrapper-noline">
								<div class="single-side-info">
									<div class="comments">
									During the test, we had 872 people-time played this game.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noline">
								<div class="pict">
									<img src="happylabel-8.jpg"></img>
								</div>
							</div>
						</div>
						<div class="single-unit-end">
							<div class="single-unit-wrapper-noline">
								<div class="single-side-info">
									<div class="comments">
									The result proved our hypothesis.
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>
				<div class="blank clearfix">
					<div class="blank-wrapper">
						<div class="bottom-nav">
							<ol class="button">
								<li><a id="return-to-works" href="/works/"></a></li>
								<li><a id="previous" href="/works/happylabel/"></a></li>
								<li><a id="next" href="/works/connexus/"></a></li>
							</ol>
						</div>
					</div>
				</div>
			</div>

<?php include($path . "/templates/footer.php"); ?>