<?php
/*
* Template Name: Contact
*
* @package SatDar
*/

get_header();
get_header('portfolio-hero');
get_template_part('navigation');
?>
	<div class="row">
		<div class="large-12 columns" role="content">
			<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
                <div class="row">
                    <div class="large-4 columns">
                         <div class="panel make-contact">
                            <ul class="make-contact">
                                <li><i class="fi-clock large"></i> My office hours are 09:30&ndash;17:30,<br /> Monday&ndash;Friday</li>
                                <li><i class="fi-telephone large"></i> +44 (0)7970 056 269</li>
                                <li><i class="fi-marker large"></i> I&rsquo;m based in Bristol, <abbr title="United Kingdom">UK</abbr></li>
                            </ul>
                            <?php
                            if ( have_posts() ) :
                                while ( have_posts() ) : the_post();
                                the_content();
                                endwhile;
                            else :
                                echo"<h4>Kerrrrr ... ash!</h4><hr>";
                                echo "<h5>This message is the programming equivalent of a red alert!</h5><hr>";
                                echo '<p>Something has gone horribly wrong with Wordpress, which is why you&rsquo;re seeing this not my email-contact form.<p></p>I&rsquo;d still love to hear from you ... but most especially because I&rsquo;d really like to know summat&rsquo;s up with my website!</p><p>Call me on my mobile number.</p>';
                            endif;

                            ?>
                        </div> 
                    </div>
                    <div class="large-8 columns">
                        <div class="bish-bash-circles">
                            <div class="button-panel">
                                <span>
                                    <a href="<?php echo site_url(); ?>/professional-services/web-content-designer/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bish.png" class="the-bish" alt="" /></a>
                                </span>
                                <div>
                                    <h4>Content design</h4>
                                    <p>Content design is a customer-centric approach to creating content that&rsquo;s easy to understand and use, and provides users with the information they need when they need it. Elements are presented in the right place and format, and supports the needs of the user. </p>
                                    <div class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-core-buttons-is-layout-1 wp-block-buttons-is-layout-flex">
                                        <div class="wp-block-button has-custom-width wp-block-button__width-100">
                                            <a class="wp-block-button__link wp-element-button" href="<?php echo site_url(); ?>/professional-services/web-content-designer/">More</a>
                                        </div>
                                        <div class="wp-block-button has-custom-width wp-block-button__width-50">
                                            <a class="wp-block-button__link wp-element-button" href="<?php echo site_url(); ?>/project-type/content-design/">Projects</a>
                                        </div>
                                        <div class="wp-block-button has-custom-width wp-block-button__width-50">
                                            <a class="wp-block-button__link wp-element-button" href="<?php echo site_url(); ?>/portfolio/case-study-content-design/">Case study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-panel">
                                <span>
                                    <a href="<?php echo site_url(); ?>/professional-services/web-developer/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bash.png" class="the-bash" alt="" /></a>
                                </span>
                                <div>
                                    <h4>Web development</h4>
                                    <p>A Web developer uses programming languages (HTML, CSS, JavaScript, and PHP in my case) to create websites, Web-based applications, and services. I have experience of front-end &mdash; user-facing layout &mdash; and back-end &mdash; behind-the-scenes mechanics &mdash; development.</p>
                                    <div class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-core-buttons-is-layout-1 wp-block-buttons-is-layout-flex">
                                        <div class="wp-block-button has-custom-width wp-block-button__width-100">
                                            <a class="wp-block-button__link wp-element-button" href="<?php echo site_url(); ?>/professional-services/web-developer/">More</a>
                                        </div>
                                        <div class="wp-block-button has-custom-width wp-block-button__width-50">
                                            <a class="wp-block-button__link wp-element-button" href="<?php echo site_url(); ?>/project-type/web-development">Projects</a>
                                        </div>
                                        <div class="wp-block-button has-custom-width wp-block-button__width-50">
                                            <a class="wp-block-button__link wp-element-button" href="<?php echo site_url(); ?>/portfolio/">Case study</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-panel">
                                <span>
                                    <a href="<?php echo site_url(); ?>/professional-services/graphic-designer/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bosh.png" class="the-bosh" alt="" /></a>
                                </span>
                                <div>
                                    <h4>Graphic design</h4>
                                    <p>As a graphic designer, I might be briefed to create all manner of visual communication products, usually for some mode of mass communication. It means combining text and image elements to clearly navigate, motivate, inform, or inspire.</p>
                                    <div class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-core-buttons-is-layout-1 wp-block-buttons-is-layout-flex">
                                        <div class="wp-block-button has-custom-width wp-block-button__width-100">
                                            <a class="wp-block-button__link wp-element-button" href="<?php echo site_url(); ?>/professional-services/graphic-designer/">More</a>
                                        </div>
                                        <div class="wp-block-button has-custom-width wp-block-button__width-50">
                                            <a class="wp-block-button__link wp-element-button" href="<?php echo site_url(); ?>/project-type/graphic-design">Projects</a>
                                        </div>
                                        <div class="wp-block-button has-custom-width wp-block-button__width-50">
                                            <a class="wp-block-button__link wp-element-button" href="<?php echo site_url(); ?>/portfolio/">Case study</a>
                                        </div>
                                    </div>
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
