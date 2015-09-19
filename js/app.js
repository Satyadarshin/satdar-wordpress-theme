// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

var doc = document.documentElement;
doc.setAttribute('data-useragent', navigator.userAgent);

 $(document).ready(function(){
      $('.multiple-items').slick({
		  dots: true,
	   autoplay: true,
  autoplaySpeed: 3000,
  slidesToShow:1,
  slidesToScroll: 1

		  });
 });

$('.tertiary-nav .search-icon').click(function(event) {
      if ($('.inline-list li.search-field').hasClass('open')){
        $('.inline-list li.search-field').animate({width: "0px", margin: "0px"}, 500).removeClass('open')
        $('.inline-list').style({margin: "0 -10px 0 0"})
      } else {
        $('.inline-list li.search-field').animate({width: "160px", margin: "0 0 0 10px"}, 500).addClass('open')
      }
  });
