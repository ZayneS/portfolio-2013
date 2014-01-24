<?php 
	$path = $_SERVER['DOCUMENT_ROOT'];
	include($path . '/templates/header-nav.php'); 
?>

	<div class="main-column clearfix">
		<div class="header">
			<div class="header-wrapper clearfix">
				<div class="page-title">
					<h1 id="photography">PHOTOGRAPHY</h1>
				</div>
			</div>
		</div>
		<ol class="grid clearfix">
			<li class="full-unit clearfix">
				<div class="year-tag">
					<p>2012</p>
				</div>
				<div class="full-unit-wrapper">
					<div class="album-title">
						<h3>THE BARD</br>	
						Snap shots around the world
						</h3>
					</div>
					<div class="album-info">
						<p>Informal photographs that capture moments in time,<br /> 
						fix stories in frame, <br />
						and free imaginations in mind. </p>
					</div>
					<div class="multi-photos clearfix" name="bard">
						<a href="#" rel="./bard/se_1.jpg" class="large_pic" index="0"><img src="./bard/se_s_1.jpg"></a>
						<a href="#" rel="./bard/se_2.jpg" class="small_pic" index="1"><img src="./bard/se_s_2.jpg"></a>
						<a href="#" rel="./bard/sf_3.jpg" class="small_pic" index="2"><img src="./bard/sf_s_3.jpg"></a>
						<a href="#" rel="./bard/la_1.jpg" class="small_pic" index="4"><img src="./bard/la_s_1.jpg"></a>
						<a href="#" rel="./bard/se_7.jpg" class="small_pic" index="12"><img src="./bard/se_s_7.jpg"></a>
						<a href="#" rel="./bard/sf_7.jpg" class="small_pic" index="5"><img src="./bard/sf_s_7.jpg"></a>
						<a href="#" rel="./bard/sf_5.jpg" class="small_pic" index="6"><img src="./bard/sf_s_5.jpg"></a>
						<a href="#" rel="./bard/se_4.jpg" class="small_pic" index="7"><img src="./bard/se_s_4.jpg"></a>
						<a href="#" rel="./bard/la_2.jpg" class="small_pic" index="8"><img src="./bard/la_s_2.jpg"></a>
					</div>


<!-- 					<div class="photo-box">
						<a href="#" rel="./bard/la_1.jpg" name="bard" index="0">
							<img src="./bard/se_1.jpg" style="width:800px">
						</a>
					</div> -->
				</div>
			</li>
			<li class="full-unit clearfix">
				<div class="year-tag">
					<p>2011</p>
				</div>
				<div class="full-unit-wrapper">
					<div class="album-title">
						<h3>ACROSS AMERICAN</br>	
						Magnificent Landscapes
						</h3>
					</div>
					<div class="album-info">
						<p>Cruise down the road<br />
						eat, drink and run<br />
						and ecstasy of photos. </p>
					</div>
					<div class="multi-photos clearfix" name="aa">
						<a href="#" rel="./aa/aa_1.jpg" class="large_pic" index="0"><img src="./aa/aa_s_1.jpg"></a>
						<a href="#" rel="./aa/aa_2.jpg" class="small_pic" index="1"><img src="./aa/aa_s_2.jpg"></a>
						<a href="#" rel="./aa/aa_3.jpg" class="small_pic" index="2"><img src="./aa/aa_s_3.jpg"></a>
						<a href="#" rel="./aa/aa_12.jpg" class="small_pic" index="12"><img src="./aa/aa_s_12.jpg"></a>
						<a href="#" rel="./aa/aa_5.jpg" class="small_pic" index="4"><img src="./aa/aa_s_5.jpg"></a>
						<a href="#" rel="./aa/aa_6.jpg" class="small_pic" index="5"><img src="./aa/aa_s_6.jpg"></a>
						<a href="#" rel="./aa/aa_7.jpg" class="small_pic" index="6"><img src="./aa/aa_s_7.jpg"></a>
						<a href="#" rel="./aa/aa_8.jpg" class="small_pic" index="7"><img src="./aa/aa_s_8.jpg"></a>
						<a href="#" rel="./aa/aa_9.jpg" class="small_pic" index="8"><img src="./aa/aa_s_9.jpg"></a>
					</div>
					<!-- <div class="photo-box">
						<a href="#" rel="./aa/aa_1.jpg" name="aa" index="0">
							<img src="./aa/aa_1.jpg" style="width:800px">
						</a>
					</div> -->
				</div>
			</li>
			<li class="full-unit clearfix">
				<div class="year-tag">
					<p>2010</p>
				</div>
				<div class="full-unit-wrapper">
					<div class="album-title">
						<h3>MY BEIJING</br>	
						The city I lived for six years
						</h3>
					</div>
					<div class="album-info">
						<p>Red wall<br />
						college<br />
						memory</p>
					</div>
					<div class="photo-box">
						<a href="#" rel="./3_b.jpg" name="bj" index="0">
							<img src="./3_b.jpg" style="width:800px">
						</a>
					</div>
				</div>
			</li>
			<li class="blank clearfix">
			</li>
		</ol>
		<div class="image_lightbox">
	        <div class="image_full">
	            <img src="./1_b.jpg" id="pic">
	        </div>
	        <div class="image_description">
	            Blablablablablablabla
	        </div>
	    <div id="arrow_left" class="arrow_hide"></div>
        <div id="arrow_right" class="arrow_hide"></div>
        <a href="" id="exit"><p>Go back</p></a>
	        <div class="nav-thumb-wrapper">
	        	<div id="nav-thumb-strip">
	        	</div>
	        </div>
	    </div>	
	</div>
<?php include($path . "/templates/footer.php"); ?>
