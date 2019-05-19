<section class="hero <?php echo (is_front_page()) ? "jason" : "theseus"; ?>">
    <div class="row intro">
        <div class="small-centered medium-uncentered medium-6 large-6 columns">
            <h1><a <?php echo (is_front_page()) ? "class=\"perseus\"" : ""; ?> href="<?php echo (is_front_page()) ? "#nav-top" : "/"; ?>"><?php bloginfo('name'); ?></a></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
        <div class="small-centered medium-uncentered medium-6 large-6 columns">
            <div class="rocketman"><a <?php echo (is_front_page()) ? "class=\"perseus\"" : ""; ?> href="<?php echo (is_front_page()) ? "#nav-top" : "/"; ?>"></a></div>
        </div>
    </div>
</section>
