<div class="viewport-first-bar contain-to-grid ">
    <div class="page-top-bar">
        <div class="top-bar-left">
            <div class="badge">
                <a href="/">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Rocketship_branding_the_S.png"  
                    alt="<?php 
                        bloginfo('name'); 
                        echo ": "; 
                        bloginfo('description');
                        ?>
                    ">
                </a>
            </div>
        </div>    
        <div>
            <div class="top-bar-right">
                <?php get_search_form(); ?>
            </div>
        </div> 
    </div>
</div>