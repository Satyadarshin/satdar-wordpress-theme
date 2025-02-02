<footer class="upper_footer">
    <div class="row">
        <div class="small-12 medium-6 large-6 columns">
            <div class="category_cloud">
                <h3>Portfolio categories</h3>
                <p class="footer_tags_categories">
                    <?php             
                        $terms = get_terms( 'jetpack-portfolio-type', array(
                            'hide_empty' => false,
                            ) );
                            foreach ( $terms as $term ){
                                echo '&bull; <a href="' . get_term_link( $term ) . '">' . $term->name . '</a>  ';
                            } 
                            ?>
                </p>
            </div>
        </div>
        <div class="small-12 medium-6 large-6 columns">  
            <div class="skills_cloud">
                <h3>Portfolio skills</h3>
                <p class="footer_tags_categories">Each project is tagged with the skills used to create it.</p>
                <p class="footer_tags_categories">
                <?php 
                    $args = array(
                        'smallest'  => 1, 
                        'largest'   => 1,
                        'unit'      => 'rem', 
                        'format'    => 'array',
                        'link'      => 'view', 
                        'taxonomy'  => 'jetpack-portfolio-tag'
                    );
                    $tags = wp_tag_cloud( $args ); 
                    for ( $i = 0; $i <= count($tags); $i++ ){
                        echo '&bull; ' . $tags[$i] . ' ';
                    }
                ?>
                </p>
            </div>  
        </div>
    </div>
</footer>
<footer class="lower_footer" >
	<div class="row">
		<div class="small-12 medium-3 large-5 columns" >
           <a href="/portfolio/case-study-content-design/"><img class="rocketship" src="<?php echo get_stylesheet_directory_uri(); ?>/images/rocketship.png" /></a>
		</div>
		<div class="small-12 medium-3 large-3 columns">
            <div class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-core-buttons-is-layout-1 wp-block-buttons-is-layout-flex">
                <div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="/contact-me/">Contact me</a></div>
            </div>
            <div class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-core-buttons-is-layout-1 wp-block-buttons-is-layout-flex">
                <div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="/gallery/">The gallery</a></div>
            </div>
                <div class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-core-buttons-is-layout-1 wp-block-buttons-is-layout-flex">
            <div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="/articles/">Articles</a></div>
            </div>
		</div>
		<div class="small-12 medium-6 large-4 columns satdar-credits">
		<?php 
            //TODO pull the URLs dynamically from the author profile.
            //$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
        ?>
			<p class="about">This website was built with <a href="https://wordpress.org/">WordPress</a>.</p>
			<p class="about"><a href="<?php echo home_url(); ?>/portfolio/satdar-wordpress-theme">SatDar</a> is an original <a href="https://codex.wordpress.org/Theme_Development">Theme</a> based on the <a href="http://foundation.zurb.com/">Foundation</a> front-end framework.</p> 
            <p class="social-media-buttons">
                <span><a href="https://www.linkedin.com/in/satyadarshin/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin-logo-aluminium.png" title="" alt="LinkedIn icon"></a></span>
                <span><a href="https://www.facebook.com/satyadarshin.is.interested.in"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook-logo-aluminium.png" title="" alt="Facebook icon"></a></span>
                <span><a href="https://www.instagram.com/satyadarshin/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram-logo-aluminium.png" title="Personal, mainly street art documentary project" alt="Instagram icon"></a></span>
                <span><a href="https://github.com/Satyadarshin"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/github-logo-aluminium.png" title="Visit GitHub for portfolio code projects" alt="GitHub icon"></a></span>
            </p>
			<p class="copyright">© <?php echo get_bloginfo( 'name' ); echo " " . date('Y');?><br />Designed &amp; programmed by <a href="<?php echo home_url(); ?>/author/granddesigner/">Satyadarshin</a>.<br />I care about your <a href="<?php echo home_url(); ?>/privacy">privacy</a>.</p>
		</div>
	</div>
</footer>
