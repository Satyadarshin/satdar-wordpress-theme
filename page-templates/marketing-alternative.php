<?php
/*
Template Name: Marketing 2
http://foundation.zurb.com/templates/marketing-2.html
*/

get_header();
get_template_part('navigation');
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>

		<header>
			<div class="row">
				<div class="large-12 column">
					<img src="http://placehold.it/1500x400&text=[stuff and img]">
				</div>
			</div>
		</header>

		<div class="row">
			<div class="medium-3 large-3 text-center columns">
				<img src="http://placehold.it/150x150&text=[things]">
				<h4>Title of Content</h4>
				<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit.</p>
			</div>
			<div class="medium-3 large-3 text-center column">
				<img src="http://placehold.it/150x150&text=[things]">
				<h4>Title of Content</h4>
				<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit.</p>
			</div>
			<div class="medium-3 large-3 text-center column">
				<img src="http://placehold.it/150x150&text=[things]">
				<h4>Title of Content</h4>
				<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit.</p>
			</div>
			<div class="medium-3 large-3 text-center column">
				<img src="http://placehold.it/150x150&text=[things]">
				<h4>Title of Content</h4>
				<p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit.</p>
			</div>
		</div>

		<ul class="example-orbit-content" data-orbit>
			<li data-orbit-slide="headline-1">
				<div class="text-center panel">
					<h2>Headline 1</h2>
					<h3>Subheadline</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos animi, nobis illo. Repellendus atque dolorem, officia recusandae autem, laudantium consectetur, neque!</p>
				</div>
			</li>
			<li data-orbit-slide="headline-2">
				<div class="text-center panel">
					<h2>Headline 2</h2>
					<h3>Subheadline</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos animi, nobis illo. Repellendus atque dolorem, officia recusandae autem, laudantium consectetur, neque!</p>
				</div>
			</li>
			<li data-orbit-slide="headline-3">
				<div class="text-center panel">
					<h2>Headline 3</h2>
					<h3>Subheadline</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos animi, nobis illo. Repellendus atque dolorem, officia recusandae autem, laudantium consectetur, neque!</p>
				</div>
			</li>
		</ul>

		<div class="row">
			<div class="large-12 columns">
				<h2>Secondary Header</h2>
			</div>
		</div>

		<div class="row">
			<div class="medium-4 large-4 columns">
				<h3>Title of Content</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illo debitis, enim qui nemo harum perspiciatis inventore, facere omnis neque ipsam.</p>
				<h3>Title of Content</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illo debitis, enim qui nemo harum perspiciatis inventore, facere omnis neque ipsam.</p>
				<h3>Title of Content</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illo debitis, enim qui nemo harum perspiciatis inventore, facere omnis neque ipsam.</p>
			</div>
			<div class="medium-4 large-4 columns">
				<h3>Title of Content</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illo debitis, enim qui nemo harum perspiciatis inventore, facere omnis neque ipsam.</p>
				<h3>Title of Content</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illo debitis, enim qui nemo harum perspiciatis inventore, facere omnis neque ipsam.</p>
				<h3>Title of Content</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illo debitis, enim qui nemo harum perspiciatis inventore, facere omnis neque ipsam.</p>
			</div>
			<div class="medium-4 large-4 columns text-center">
				<img src="http://placehold.it/300x500&text=[things]">
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns">
				<h2>Tertiary Header</h2>
			</div>
		</div>

		<div class="row">
			<div class="medium-4 large-4 columns text-center">
				<img src="http://placehold.it/300x250&text=[things]">
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate dicta hic ut suscipit molestias numquam ab unde nulla repellendus incidunt, magnam reiciendis odio, dolorum labore asperiores odit assumenda ex delectus.</p>
			</div>
			<div class="medium-4 large-4 columns text-center">
				<img src="http://placehold.it/300x250&text=[things]">
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate dicta hic ut suscipit molestias numquam ab unde nulla repellendus incidunt, magnam reiciendis odio, dolorum labore asperiores odit assumenda ex delectus.</p>
			</div>
			<div class="medium-4 large-4 columns text-center">
				<img src="http://placehold.it/300x250&text=[things]">
				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate dicta hic ut suscipit molestias numquam ab unde nulla repellendus incidunt, magnam reiciendis odio, dolorum labore asperiores odit assumenda ex delectus.</p>
			</div>
		</div>

		<div class="panel">
			<div class="row">
				<div class="medium-6 large-6 columns">&copy; Copyright no one at all. Go to town.</div>
				<div class="medium-6 large-6 columns">
					<ul class="inline-list right">
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
						<li><a href="#">link</a></li>
					</ul>
				</div>
			</div>
		</div>

	<?php
		endwhile;

		else :

		echo '<p>No content found</p>';

		endif;

		get_footer();
	?>
