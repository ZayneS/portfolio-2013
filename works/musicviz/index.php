<?php 
	$path = $_SERVER['DOCUMENT_ROOT'];
	include($path . '/templates/header-nav.php'); 
?>

			<div class="main-column clearfix">
				<div class="header">
					<div class="header-wrapper clearfix">
						<div class="page-title">
							<h1 id="works">Works</h1>
						</div>
						<div class="header-nav">
							<ol class="button">
								<li><a id="return-to-works" href="/works/"></a></li>
								<li><a id="previous" href="/works/kidzibit/"></a></li>
								<li><a id="next" href="/works/yunimpact/"></a></li>
							</ol>
						</div>

					</div>
				</div>
				<div class="project-body">
					<div class="full-unit clearfix">
						<div class="year-tag">
							<p>2012</p>
						</div>
						<div class="full-unit-wrapper">
							<div class="project-title">
								<h3>CHART-VIZ</br>	
								Visualize hottest artists on Billboard Top 10</h3>
								<p>Tags: Data visualization, Interactive design
								</p>
							</div>
							<div class="project-thumb">
								<img src="music_0.jpg">
							</div>
							<!-- <div class="short-blank"></div>	 -->
						</div>
					</div>

					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noheight">
								<div class="project-text">
									<p>Music Chart Viz is the 2nd project in 
										<a href="https://graphics.stanford.edu/wikis/cs448b-12-fall/" target="_blank">CS448B Data Visualization</a>.
									It is done with Ningxia Zhang. You can play with it 
										<a href="http://ZayneS.github.com/Music-chart-vis/" target="_blank">Here</a>, 
									or find out the source code on 
										<a href="https://github.com/ZayneS/Music-chart-vis" target="_blank">Github</a>
									.</p>
									<h3>MOTIVATION...</h3>
									<p>Music is one of the most amazing part in human civilization. Study about and around music can reflect and reveal interesting truth about human from cultural, social and individual scale. </p>
									<p>The Billboard charts of relative weekly popularity of songs or albums in the United States, is one of the most influential ranking system in music industry. Billboard Hot 100 is the standard singles popularity chart of US music industry. Chart rankings are based on the weekly record of radio play and sales.</p>
									<h3>INTERACTION DESIGN...</h3>
									<p>We designed a concentric arcs chart to show artists that are top constants in ever-changing sea of pop music culture. We list artists along radius direction, and let artists of longer chart histories locale further from the centric. and put people of shorter chart histories and even "one-hit-wonder" in the condensed crowded central area.</p>
									<p>We use highest peak rank of all an artist's tracks to represent his/her/they achievement in each year, and encode it with the lightness of color to encode a single artists achievement. This encoding is very intuitive as people usually agree artists of higher impact leave more solid mark (here a low opacity color) in history (here the main chart).</p>
								</div>
							</div>
						</div>
						<div class="single-unit-end">
							<div class="single-unit-wrapper-noheight">
								<div class="project-highlight">
									<h3><a href="https://graphics.stanford.edu/wikis/cs448b-12-fall/A3-ZhangNingxiaShenZheng">Group project of CS448b Data Visualization >></a></h3>
								</div>
								<div class="project-tools">
									<h3>D3.js</h3>
									<h3>Jquery.js</h3>
									<h3>HTML</h3>
									<h3>CSS</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noline">
								<div class="pict">
									<img src="music_1.jpg"></img>
								</div>
							</div>
						</div>
						<div class="single-unit-end">
							<div class="single-unit-wrapper-noline">
								<div class="single-side-info">
									<div class="comments">
									The arc of an artist is highlighed to red when mouse is on, and provide click option for further inspection of this artist's personal chart history.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noline">
								<div class="pict">
									<img src="music_2.jpg"></img>
								</div>
							</div>
						</div>
						<div class="single-unit-end">
							<div class="single-unit-wrapper-noline">
								<div class="single-side-info">
									<div class="comments">
									Artist's personal chart history is demonstrated in polar flower chart.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noheight">
								<div class="project-text">
									<h3>DATA ANALYSIS</h3>
									<p>There are quite a lot cases of so-called "one hit wonder". This means many artists are with only one hit single in 23 years. The long-tail phenomenon is obvious here in pop music industry. This causes difficulty for us to realize our initial idea in a compact scale.</p>
								</div>
							</div>
						</div>
						<div class="single-unit-end">
							<div class="single-unit-wrapper-online">
							</div>
						</div>
					</div>
					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noline">
								<div class="pict">
									<img src="music_3.jpg"></img>
								</div>
							</div>
						</div>
						<div class="single-unit-end">
							<div class="single-unit-wrapper-noline">
								<div class="single-side-info">
									<div class="comments">
									The obvious "one hit wonder" phenomenon in billboard Top 100 chart.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noheight">
								<div class="project-text">
									<h3>SKETCHES</h3>
									<p>In the brainstorm, we eventually came to a different design of chart here: using polar coordinates instead of Cartesian coordinates. In this case, data can be represented in a more compact and also more attractive way. And this turned out to be our ultimate design.</p>
									<p>Picture 4 shows the sketches of so-called concentric arcs chart and its sub-chart: polar flower chart.</p>
								</div>
							</div>
						</div>
						<div class="single-unit-end">
							<div class="single-unit-wrapper-noline">
							</div>
						</div>
					</div>

					<div class="full-unit clearfix">
						<div class="three-unit">
							<div class="three-unit-wrapper-noline">
								<div class="pict">
									<img src="music_4.jpg"></img>
								</div>
							</div>
						</div>
						<div class="single-unit-end">
							<div class="single-unit-wrapper-noline">
								<div class="single-side-info">
									<div class="comments">
									Sketchs of concentric arcs chart and polar flower chart.
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
								<li><a id="return-to-works" href=""></a></li>
								<li><a id="previous" href=""></a></li>
								<li><a id="next" href=""></a></li>
							</ol>
						</div>
					</div>
				</div>			
			</div>
		
			
<?php include($path . "/templates/footer.php"); ?>