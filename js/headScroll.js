$(document).ready(function() {
 
    var div = $('header');
    var logo = $('.logo-img');
    var header = $('.page-header-section');
    var start = $(div).offset().top;
 
    $.event.add(window, "scroll", function() {
        var p = $(window).scrollTop();
        $(div).css('position',((p)>start) ? 'fixed' : 'static');
        $(div).css('top',((p)>start) ? '0px' : '');
        $(div).css('z-index',((p)>start) ? '999999' : '');
        $(div).css('box-shadow',((p)>start) ? '0 2px 3px rgba(0,0,0,.3)' : '');
        $(div).css('-webkit-box-shadow',((p)>start) ? '0 2px 3px rgba(0,0,0,.3)' : '');
        $(div).css('-moz-box-shadow',((p)>start) ? '0 2px 3px rgba(0,0,0,.3)' : '');
        $(div).css('-ms-box-shadow',((p)>start) ? '0 2px 3px rgba(0,0,0,.3)' : '');
        $(logo).css('max-width',((p)>start) ? '200px' : '');
        $(logo).css('min-width',((p)>start) ? '200px' : '');
        $(logo).css('transition',((p)>start) ? '0.3s ease' : '');
        $(header).css('padding',((p)>start) ? '10px 10px' : '');
        
    });
 
});
