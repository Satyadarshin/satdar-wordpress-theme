<?php
/**
 * Template Name: GrandDesigner 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package SatDar
 */

get_header();
get_header('blog-hero');
get_template_part('navigation');

$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
<div class="row">
    <div class="large-8 columns" role="content">
        <article id="post-<?php
			//TODO from id onwards placed to pass the the them checker test
			the_ID(); ?>" <?php post_class();
        ?>>
            <h2>About <?php echo $curauth->first_name . ' ' . $curauth->last_name; ?></h2>
            <div class="gravatar">
                <?php echo get_avatar( get_the_author_meta(), $ize='150' ); ?>
                <p><?php echo $curauth->user_description; ?></p>
            </div>
            <?php get_template_part('partials/social-media-buttons-partial'); ?>
        </article>
	</div>
	<div class="large-4 columns" role="content">
        <aside class="author-aside">
            <h3>Skills &amp; experience</h3>
            <p>This website serves to evidence the skills and experience I've acquired.</p>
            <?php include('partials/cv-skills-list.php'); ?>
        </aside>
	</div>
</div>

<?php
	get_footer('display');
	get_footer();
?>
