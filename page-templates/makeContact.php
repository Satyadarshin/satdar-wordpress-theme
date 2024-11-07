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
            
                        <div class="panel contact-social-network">
                            <p>
                                <a href="https://www.facebook.com/satyadarshin.is.interested.in/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook-logo-colour.png" title="" alt="Facebook icon">
                                <a href="https://www.linkedin.com/in/satyadarshin/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/LI-In-Bug.png" title="" alt="LinkedIn icon">
                                <a href="https://www.instagram.com/satyadarshin/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/glyph-logo_May2016.png" title="Personal, mainly street art documentary project" alt="Instagram icon"></a>
                                <!-- <a href="https://github.com/Satyadarshin"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/GitHub-Mark-64px.png" title="Visit GitHub for portfolio code projects" alt="GitHub icon"> -->
                                <!-- <a href="https://open.spotify.com/user/21yu26kcdadiqgozb3o7tnvra"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spotify-logo-colour.png" title="" alt="Spotify icon"> -->
                            </p>
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
