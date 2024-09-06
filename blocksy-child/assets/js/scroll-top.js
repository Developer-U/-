jQuery (function($) { 
    // Скролл меню в хедере
    $(window).scroll(function(){
    if(($(this).scrollTop()>=200) && $(this).width()>=768) {
      $('.header').css({
        'background-color':'rgba(0, 0, 0, 0.6)'        
      });

    } else {
      $('.header').css({
        'background-color':''        
      });
    }
  });

});