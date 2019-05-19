<?php
/*
Template Name: Contact
Based on http://foundation.zurb.com/templates/workspace.html
*/
get_header();
get_header('hero');
get_template_part('navigation');
?>
	<div class="row">

		<div class="large-12 columns" role="content">
            
			<article id="post-<?php
				//TODO from id onwards placed to pass the the them checker test
				the_ID(); ?>" <?php post_class();
					 ?>
			>
                <div class="row">
                    <div class="large-12 columns">
                        <div class="row">
                            <div class="large-4 columns">
                                <div class="panel">
                                    <div class="row">
                                        <div class="small-12 medium-6 large-12 columns">
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
                                         <div class="small-12 medium-6 large-12 columns">
                                            <div class="panel">
                                                <img src="http://www.satyadarshin.com/wp-content/uploads/2016/05/satyadarshin.png" alt="Portrait of Satyadarshin"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="large-8 columns">
                                <div class="panel radius">
                                    <div class="row">
                                        <div class="large-6 small-6 columns">
                                            <h4>Contact Satyadarshin</h4>
                                            <hr>
                                            <h5 class="subheader">You&rsquo;re very welcome to get in touch! Email is the most reliable way to make contact.</h5>
                                        </div>
                                        <div class="large-6 small-6 columns">
                                            <ul class="contact">
                                                <!-- TODO padding right on the <i> -->
                                                <li><i class="fi-clock large"></i> My office hours are 10:00&ndash;18:00, Monday&ndash;Friday</li>
                                                <li><i class="fi-mail large"></i> Fill in the contact form</li>
                                                <li><i class="fi-telephone large"></i> +44 (0)7970 056 269</li>
                                                <li><i class="fi-marker large"></i> I&rsquo;m based in Bristol</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="large-12 columns">
                                            <hr>
                                            <h4>Social Networks</h4>
                                            <h5 class="subheader">I can be found on the following sites... like me! follow me!</h5>
                                        </div>
                                    </div>
                                    <?php get_sidebar('two-column'); ?>
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
