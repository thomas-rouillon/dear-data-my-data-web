
window.onbeforeunload = function(){ window.scrollTo(0,0); }

// reset scroll on load
window.scrollTo(0,0);

var current_slide_id = 'intro-texte1';

$(function(){
  setTimeout(function(){
    showsection();
  }, 2000);

  $('#scrollbtn').on('click', function(){
    $('html, body').animate({
        scrollTop: $('#scroll').offset().top
    }, 'slow', function(){
      // après le scroll
    })
  })
})


    function showsection() {

      var $current_slide = $('#' + current_slide_id),
        $next_slide = $current_slide.next('.slide');

      if($next_slide.length){
        $current_slide.removeClass('current');
        $next_slide.addClass('current');
        var next_duration = parseInt($next_slide.attr('data-duration')) * 1000;
        current_slide_id = $next_slide.attr('id');
        setTimeout(function(){
          showsection();
        }, next_duration)
      } else {
        $('body').removeClass('locked');
        $('#scrollbtn').addClass('visible');
      }

    };
