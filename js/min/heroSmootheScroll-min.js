jQuery("document").ready(function(){jQuery(function(){var t=$("html,body");jQuery(".perseus").on("click",function(e){e.preventDefault(),e.stopPropagation(),t.stop().animate({scrollTop:$($(this).attr("href")).offset().top},2e3)})})});