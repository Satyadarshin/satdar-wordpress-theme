<?php 
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
<div class="social-platform-set">
<?php if ( $curauth->linkedin ): ?>
    <div class="panel social-platform">
        <span> 
            <a href="<?php echo $curauth->linkedin; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin-logo-aluminium.png" title="" alt="LinkedIn icon" /></a>
        </span>
        <p>Follow me for more on my work history.</p>
    </div>
    <?php endif; ?>
    <?php if ( $curauth->facebook ): ?>
    <div class="panel social-platform">
       <span>
           <a href="<?php echo $curauth->facebook; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook-logo-aluminium.png" title="" alt="Facebook icon" /></a>
       </span> 
        <p>Follow me for a diverse range of cultural interests: links to books, films, music and gigs, video essays, and podcasts that inspired me, and might move you too.</p>
    </div>
   <?php endif; ?>
   <?php if ( $curauth->instagram ): ?>
    <div class="panel social-platform">
        <span>
            <a href="<?php echo $curauth->instagram; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram-logo-aluminium.png" title="Personal, mainly street art documentary project" alt="Instagram icon"></a>
        </span>
        <p>Follow me for my documentary project about streeat art, mainly in Bristol.</p>
    </div> 
    <?php endif; ?>
    <?php if ( $curauth->user_url ): ?>
    <div class="panel social-platform">
        <span>
            <a href="<?php echo $curauth->user_url; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/github-logo-aluminium.png" title="Visit GitHub for portfolio projects" alt="GitHub icon" /></a> 
        </span>
        <p>My public Github repos.</p>
    </div> 
    <?php endif; ?>
</div>