// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation({
  sticky_class : 'sticky',
  custom_back_text: true, // Set this to false and it will pull the top level link name as the back text
  back_text: 'Back', // Define what you want your custom back text to be if custom_back_text: true
  is_hover: true,
  mobile_show_parent_link: false, // will copy parent links into dropdowns for mobile navigation
  scrolltop : true // jump to top when sticky nav menu toggle is clicked
});

// @codekit-prepend "../bower_components/jquery/dist/jquery.min.js";"../bower_components/foundation/js/foundation.min.js";"../bower_components/foundation/js/foundation/foundation.topbar.js";"../bower_components/foundation/foundation.equalizer.js"
// TODO "../slick_slideshow/slick/slick.min.js";
