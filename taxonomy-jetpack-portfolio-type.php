<?php
/**
 * The template for displaying Jetctpack portfolio taxonomy lists
 *
 * @package WordPress
 */

get_header();
get_header('portfolio-hero');
get_template_part('navigation');
?>
<div class="row">
    <div class="large-12 columns" role="content">
        <article id="post-<?php
            //TODO from id onwards placed to pass the the theme checker test
            the_ID(); ?>" <?php post_class();
             ?>
        >
            <div class="row">
                <div class="large-4 small-12 columns">
                    <div class="row ">
                        <div class="large-12 columns">
                            <div class="portfolio_type">  
                            <?php
                                //Using this function ensures that ttile prefixes like Category: are removed
                                echo '<p class="the_skill">Portfolio category</p>';
                                echo "<h2>". single_cat_title( '', false ) . "</h2>";
                                the_archive_description( '<div class="taxonomy-description">', '</div>' );
                            ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="large-8 columns">
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
                    ?>
                   
                    <?php
                    else :
                        echo '<div class="row"><div class="large-12 columns">'; //Open the column / row
                        echo '<p>There are no projects associated with this category yet.</p>';
                        echo '</div></div>'; //Close the column / row

                    endif;
                    //TODO placed to pass the the theme checker test
                    //Check whether paginate_lincks() better fits the test: if not why not?
                    //wp_link_pages();
                ?>
                <!-- pagination links -->
                <div class="row ">
                    <div class="large-12 columns">
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
                    </div>
                </div>
                </div>
            </div>
        </article>
    </div>
</div>
<?php
	get_footer('display');
	get_footer();
?>