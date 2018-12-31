(function($){

  $(window).scroll(function() {

    var heroHeight = 100;
    var scrollPosition = $(window).scrollTop();

    if(scrollPosition > heroHeight) {
      $('header').addClass('scrolled');
    } else {
      $('header').removeClass('scrolled');
    }
  });

})(jQuery);