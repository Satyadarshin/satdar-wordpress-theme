<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package SatDar
 */

get_header();
get_template_part('navigation');
?>

<div class="row">
	<div class="large-9 columns" role="content">
		<article id="post-<?php
			//TODO from id onwards placed to pass the the them checker test
			the_ID(); ?>" <?php post_class();
					?>>
		<div class="row">
			<div class="large-12 columns">
				<?php
					$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
				?>
				<h2>About: <?php echo $curauth->nickname; ?></h2>
				<dl>
					<dt>Website</dt>
					<dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
					<dt>Profile</dt>
					<dd><?php echo $curauth->user_description; ?></dd>
				</dl>
				<h2>Posts by <?php echo $curauth->nickname; ?>:</h2>
				<ul>
				<!-- The Loop -->
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<li>
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
							<?php the_title(); ?></a>,
							<?php the_time('d M Y'); ?> in <?php the_category('&');?>
						</li>
					<?php endwhile; else: ?>
						<p><?php _e('No posts by this author.'); ?></p>
					<?php endif; ?>
				<!-- End Loop -->
			</div>
		</div>
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
