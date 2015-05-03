<?php
/*
Template Name: Grid
http://foundation.zurb.com/templates/grid.html
*/
?>
<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
	<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
		<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Foundation Template | Grid</title>
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
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>
			<section class="top-bar-section">
				<ul class="left">
					<li class="divider"></li>
					<li class="has-dropdown">
						<a class="active" href="#">Main Item 1</a>
						<ul class="dropdown">
							<li><label>Section Name</label></li>
							<li><a href="#" class="">Dropdown Level 1</a></li>
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
				<ul class="right">
					<li class="divider"></li>
					<li class="has-dropdown">
						<a href="#">Main Item 4</a>
						<ul class="dropdown">
							<li><label>Section Name</label></li>
							<li class="has-dropdown">
								<a href="#" class="">Has Dropdown, Level 1</a>
									<ul class="dropdown">
										<li><a href="#">Dropdown Options</a></li>
										<li><a href="#">Dropdown Options</a></li>
										<li class="has-dropdown">
											<a href="#">Has Dropdown, Level 2</a>
												<ul class="dropdown test">
													<li><a href="#">Subdropdown Option</a></li>
													<li><a href="#">Subdropdown Option</a></li>
													<li><a href="#">Subdropdown Option</a></li>
												</ul>
										</li>
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
					<li><a href="#">Main Item 5</a></li>
					<li class="divider"></li>
					<li class="has-dropdown">
						<a href="#">Main Item 6</a>
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
			<div class="large-3 columns">
				<div class="panel">
				<h5>Panel Title</h5>
				<p>This is a three columns grid panel with an arbitrary height.</p>
				</div>
			</div>
			<div class="large-6 columns">
				<div class="panel">
				<h5>Panel Title</h5>
				<p>This is a six columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami ham hock biltong ball tip drumstick sirloin pancetta meatball short loin.</p>
				</div>
			</div>
			<div class="large-3  columns">
				<div class="panel">
					<h5>Panel Title</h5>
					<p>This is a three columns grid panel with an arbitrary height.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="large-6 columns">
				<div class="panel">
					<h5>Panel Title</h5>
					<p>This is a six columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami ham hock biltong ball tip drumstick sirloin pancetta meatball short loin.</p>
				</div>
			</div>
			<div class="large-2 columns">
				<div class="panel">
					<p><img src="http://placehold.it/200x200"/></p>
				</div>
			</div>
			<div class="large-4 columns">
				<div class="panel">
					<h5>Panel Title</h5>
					<p>This is a four columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="large-4 columns">
				<div class="panel">
				<p><img src="http://placehold.it/400x300"/></p>
				</div>
			</div>
			<div class="large-4 columns">
				<div class="panel">
					<p><img src="http://placehold.it/400x300"/></p>
				</div>
			</div>
			<div class="large-4 columns">
				<div class="panel">
					<p><img src="http://placehold.it/400x300"/></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="large-6 columns">
				<div class="panel">
					<h5>Panel Title</h5>
					<p>This is a six columns grid panel with an arbitrary height. Bacon ipsum dolor sit amet salami ham hock biltong ball tip drumstick sirloin pancetta meatball short loin.</p>
				</div>
			</div>
			<div class="large-3 columns">
				<div class="panel">
					<h5>Panel Title</h5>
					<p>This is a three columns grid panel with an arbitrary height.</p>
				</div>
			</div>
			<div class="large-3 columns">
				<div class="panel">
					<h5>Panel Title</h5>
					<p>This is a three columns grid panel with an arbitrary height.</p>
				</div>
			</div>
		</div>

		<footer class="row">
			<div class="large-12 columns">
				<hr/>
				<div class="row">
					<div class="large-6 columns">
						<p>&copy; Copyright no one at all. Go to town.</p>
					</div>
					<div class="large-6 columns">
						<ul class="inline-list right">
							<li><a href="#">Section 1</a></li>
							<li><a href="#">Section 2</a></li>
							<li><a href="#">Section 3</a></li>
							<li><a href="#">Section 4</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

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
