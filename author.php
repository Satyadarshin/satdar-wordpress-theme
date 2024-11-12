<?php
/**
 * Template Name: Author
 *
 * @package SatDar
 */

get_header();
get_header('blog-hero');
get_template_part('navigation');

$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<div class="row">
	<div class="large-6 columns">
		<h2>About <?php echo $curauth->first_name; ?></h2>
	</div>
</div>
<div class="row">
	<div class="large-12 columns" role="content">
		<article id="post-<?php
			//TODO from id onwards placed to pass the the them checker test
			the_ID(); ?>" <?php post_class();
		?>>
			<p><?php echo $curauth->user_description; ?></p>
			<?php
			//TODO placed to pass the the them checker test
			wp_link_pages();
			?>
		</article>
	</div>
</div>

<?php
	get_footer('display');
	get_footer();
?>
