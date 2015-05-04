<?php
/*
Template Name: Blog
http://foundation.zurb.com/templates/blog.html
*/

get_header();
get_template_part('navigation');
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

		<div class="row">
			<div class="large-12 columns">
				<div class="nav-bar right">
					<ul class="button-group">
						<li><a href="#" class="button">Link 1</a></li>
						<li><a href="#" class="button">Link 2</a></li>
						<li><a href="#" class="button">Link 3</a></li>
						<li><a href="#" class="button">Link 4</a></li>
					</ul>
				</div>
				<h1>Blog <small>This is my blog. It's awesome.</small></h1>
			</div>
		</div>

		<div class="row">
			<div class="large-9 columns" role="content">
				<article>
					<h3><a href="#">Blog Post Title</a></h3>
					<h6>Written by <a href="#">John Smith</a> on August 12, 2012.</h6>
					<div class="row">
						<div class="large-6 columns">
							<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa.</p>
							<p>Boudin aliqua adipisicing rump corned beef. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
						</div>
						<div class="large-6 columns">
							<img src="http://placehold.it/400x240&text=[img]"/>
						</div>
					</div>
					<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
					<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
				</article>
				<article>
					<h3><a href="#">Blog Post Title</a></h3>
					<h6>Written by <a href="#">John Smith</a> on August 12, 2012.</h6>
					<div class="row">
						<div class="large-6 columns">
							<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa.</p>
							<p>Boudin aliqua adipisicing rump corned beef. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
						</div>
						<div class="large-6 columns">
							<img src="http://placehold.it/400x240&text=[img]"/>
						</div>
					</div>
					<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
					<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
				</article>
			</div>
			<aside class="large-3 columns">
				<h5>Categories</h5>
				<ul class="side-nav">
					<li><a href="#">News</a></li>
					<li><a href="#">Code</a></li>
					<li><a href="#">Design</a></li>
					<li><a href="#">Fun</a></li>
					<li><a href="#">Weasels</a></li>
				</ul>
				<div class="panel">
					<h5>Featured</h5>
					<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow.</p>
					<a href="#">Read More &rarr;</a>
				</div>
			</aside>
		</div>

	<?php
		endwhile;

		else :

		echo '<p>No content found</p>';

		endif;

		get_footer();
	?>
