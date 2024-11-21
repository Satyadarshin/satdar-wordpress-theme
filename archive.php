<?php
/**
 * Template Name: Tag Archive
 *
 * @package WordPress
 */

get_header();
get_header('portfolio-hero');
get_template_part('navigation');
?>
<main>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="portfolio_type">  
        <?php 
            $hero = get_term_by( 'slug', $term, 'jetpack-portfolio-type');
            //print_r($hero);
            $the_taxonomy = $hero->taxonomy;
            $taxonomy_name = $hero->name;
            $taxonomy_id = $hero->term_id;
            $taxonomy_parent = $hero->parent;
            $term_slug = $hero->slug;
            $term_type_image = get_option( 'project_type_image_data_' . $term_slug );
    
            //Using this function ensures that title prefixes like Category: are removed
            echo '<p class="the_skill">Skill</p>';
            echo "<h2>". single_cat_title( '', false ) . "</h2>";
            the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
    </div>
    <!-- pagination links -->
    <div id="pagination_bar">
        <?php
            echo paginate_links(
                array(
                'before_page_number' => '<i class="paginator">',
                'after_page_number' => '</i>',
                )
            ); 
        ?>
    </div>
</article>
<aside>
    <h3>Projects applying this skill</h3>
    <?php
        //Initialise a counter
        $row = 0;
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
            //Establish If we need to build a new row
            echo ($row == 0) ? '<div class="row">' : '';
            echo '<div class="large-6 medium-6 small-12 columns">';
            echo '<div class="project">';
            echo '<a href="'; 
            echo the_permalink(); 
            echo '">';
            //Check the post has a Post Thumbnail assigned to it; drop a default if not.
            if ( has_post_thumbnail() ) { 
                the_post_thumbnail('project-thumb');
            } 
            else {
                echo '<img src="'. get_stylesheet_directory_uri() .'/images/image-placeholder.jpg" />';
            } 
            echo  the_title( '<h5>', '</h5>');
            echo '</a>';
            echo '</div>'; //Close the .project
            echo '</div>'; //Close the content block
            if ($row === 3 ) {
                echo '</div>';
                $row = 0;
            } else {
                $row++;
            }
        endwhile;
        else :
            echo '<div class="row"><div class="large-12 columns">'; //Open the column / row
            echo '<p>There are no projects associated with this category yet.</p>';
            echo '</div></div>'; //Close the column / row
            
        endif;
        ?>
    </aside>
</main>            
<?php
	get_footer('display');
	get_footer();
?>
