<?php
/*
Template Name: Marketing
http://foundation.zurb.com/templates/marketing.html
*/
?>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">

	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Foundation Template | Marketing</title>
		<meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more."/>
		<meta name="author" content="ZURB, inc. ZURB network also includes zurb.com"/>
		<meta name="copyright" content="ZURB, inc. Copyright (c) 2015"/>
		<link rel="stylesheet" href="../assets/css/templates/foundation.css"/>
		<script src="../assets/js/modernizr.js"></script>
	</head>

	<body>

		<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<li class="name"><h1><a href="#">Top Bar Title</a></h1></li>
				<li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
			</ul>
			<section class="top-bar-section">
				<ul class="right">
					<li class="divider"></li>
					<li class="has-dropdown">
						<a href="#">Main Item 1</a>
						<ul class="dropdown">
							<li><label>Section Name</label></li>
							<li class="has-dropdown">
								<a href="#" class="">Has Dropdown, Level 1</a>
								<ul class="dropdown">
									<li><a href="#">Dropdown Options</a></li>
									<li><a href="#">Dropdown Options</a></li>
									<li><a href="#">Level 2</a></li>
									<li><a href="#">Subdropdown Option</a></li>
									<li><a href="#">Subdropdown Option</a></li>
									<li><a href="#">Subdropdown Option</a></li>
								</ul>
							</li>
							<li><a href="#">Dropdown Option</a></li>
							<li><a href="#">Dropdown Option</a></li>
							<li class="divider"></li>
							<li><label>Section Name</label></li>
							<li><a href="#">Dropdown Option</a></li>
							<li><a href="#">Dropdown Option</a></li>
							<li><a href="#">Dropdown Option</a></li>
							<li class="divider"></li>
							<li><a href="#">See all &rarr;</a></li>
						</ul>
					</li>
					<li class="divider"></li>
					<li><a href="#">Main Item 2</a></li>
					<li class="divider"></li>
					<li class="has-dropdown">
						<a href="#">Main Item 3</a>
						<ul class="dropdown">
							<li><a href="#">Dropdown Option</a></li>
							<li><a href="#">Dropdown Option</a></li>
							<li><a href="#">Dropdown Option</a></li>
							<li class="divider"></li>
							<li><a href="#">See all &rarr;</a></li>
						</ul>
					</li>
				</ul>
			</section>
		</nav>

		<div class="row">
			<div class="large-12 columns">
				<div class="row">
					<div class="large-12 hide-for-small">
						<div id="featured" data-orbit>
						<img src="http://placehold.it/1200x500&text=Slide Image 1" alt="slide image">
						<img src="http://placehold.it/1200x500&text=Slide Image 2" alt="slide image">
						<img src="http://placehold.it/1200x500&text=Slide Image 3" alt="slide image">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns show-for-small">
						<img src="http://placehold.it/1200x700&text=Mobile Header">
					</div>
				</div>
				<br>

				<div class="row">
					<div class="large-12 columns">

						<div class="row">
							<div class="large-4 small-6 columns">
								<h4>Upcoming Shows</h4><hr>

								<div class="row">
									<div class="large-1 column">
										<img src="http://placehold.it/50x50&amp;text=[img]">
									</div>
									<div class="large-9 columns">
										<h5><a href="#">Venue Name</a></h5>
										<h6 class="subheader show-for-small">Doors at 00:00pm</h6>
									</div>
								</div><hr>
								<div class="hide-for-small">

									<div class="row">
										<div class="large-1 column">
											<img src="http://placehold.it/50x50&amp;text=[img]">
										</div>
										<div class="large-9 columns">
											<h5 class="subheader"><a href="#">Venue Name</a></h5>
										</div>
									</div>
									<hr>

									<div class="row">
										<div class="large-1 column">
											<img src="http://placehold.it/50x50&amp;text=[img]">
										</div>
										<div class="large-9 columns">
											<h5 class="subheader"><a href="#">Venue Name</a></h5>
										</div>
									</div>
									<hr>

									<div class="row">
										<div class="large-1 column">
											<img src="http://placehold.it/50x50&amp;text=[img]">
										</div>
										<div class="large-9 columns">
											<h5 class="subheader"><a href="#">Venue Name</a></h5>
										</div>
									</div>

								</div>

							</div>

							<div class="large-4 small-6 columns">
								<img src="http://placehold.it/300x465&amp;text=Image">
							</div>

							<div class="large-4 small-12 columns">
								<h4>Blog</h4><hr>
							<div class="panel">
								<h5><a href="#">Post Title 1</a></h5>
								<h6 class="subheader">Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Suspendisse ultrices ornare tempor...</h6>
								<h6><a href="#">Read More »</a></h6>
							</div>
							<div class="panel hide-for-small">
								<h5><a href="#">Post Title 2 »</a></h5>
							</div>
							<div class="panel hide-for-small">
								<h5><a href="#">Post Title 3 »</a></h5>
							</div>
								<a href="#" class="right">Go To Blog »</a>
							</div>

						</div>

					</div>

				</div>

				<footer class="row">
					<div class="large-12 columns"><hr>
						<div class="row">
							<div class="large-6 columns">
								<p>&copy; Copyright no one at all. Go to town.</p>
							</div>
							<div class="large-6 small-12 columns">
								<ul class="inline-list right">
									<li><a href="#">Link 1</a></li>
									<li><a href="#">Link 2</a></li>
									<li><a href="#">Link 3</a></li>
									<li><a href="#">Link 4</a></li>
								</ul>
							</div>
						</div>
					</div>
				</footer>

			</div>

		</div>

		<script>
		  document.write('<script src=js/vendor/' +
		  ('__proto__' in {} ? 'zepto' : 'jquery') +
		  '.js><\/script>')
		  </script>
		<script src="../../assets/js/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		  </script>
		<script src="../assets/js/templates/jquery.js"></script>
		<script src="../assets/js/templates/foundation.js"></script>
		<script>
			  $(document).foundation();

			  var doc = document.documentElement;
			  doc.setAttribute('data-useragent', navigator.userAgent);
		</script>
	</body>
</html>
