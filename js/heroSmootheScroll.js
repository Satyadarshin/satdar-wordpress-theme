//When you enqueue script that is dependent on jQuery, note that the jQuery in WordPress runs in noConflict mode, which means you cannot use the common $ alias. You must use the full jQuery instead. Alternately, place your code using the $ shortcut inside a noConflict wrapper.
//https://developer.wordpress.org/reference/functions/wp_enqueue_script/
jQuery( 'document' ).ready(function() {
    jQuery(function() {
        var webpage = $('html,body');
        jQuery('.perseus').on('click', function(evt) {
            evt.preventDefault();
            evt.stopPropagation();
            webpage.stop().animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 2000);
        }); 
    });
});