
$(document).ready(function () {
$(window).scroll(function(){
        var window_top = $(window).scrollTop();
        var div_top = $('#checkdiv').offset().top;
        if (window_top >= div_top) {
                $('nav').addClass('stickydiv');
            } else {
                $('nav').removeClass('stickydiv');
            }
    });  

  $(document).on("scroll", onScroll);

$('a[href^="#"]').on('click', function (e) {
      e.preventDefault();
        $(document).off("scroll");
         $('a').each(function () {
            $(this).removeClass('actif');
        })
        $(this).addClass('actif');
         var target = this.hash,
         $target = $(target);
       $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 600, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#menu a').each(function () {
        var currLink = $(this);
       var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menu a').removeClass("actif");
            currLink.addClass("actif");
        }
        else{
            currLink.removeClass("actif");
        }
    });
}