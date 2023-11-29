jQuery( 'document' ).ready(function() {
    jQuery( '.project span' ).hide();
    jQuery( '.project' ).hover(
        //Hover in 
        function(){
            var box = $( this ).find( 'p' );
            var dropdown = $( this ).width();
            var dropstop = $( this ).height();
            var title =  $( this ).find( 'span' );
            title.width( dropdown-5 );
            box.width( dropdown );
            box.stop().animate({
                opacity: 0.5,
                height: dropstop+2,
                }, 
                500, "swing", function() {
                    title.show(); 
            }); 
        },
        //Hover out
        function() {
            var box = $( this ).find( 'p' );
            var title =  $( this ).find( 'h5' );
            title.hide();  
            box.animate({
                opacity: 0,
                height: 0,
            }, 
            500, "swing"                 
        );
    });
});