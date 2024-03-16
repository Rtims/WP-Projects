jQuery(function(){
	
    jQuery(window).scroll(function() {
        if ($(window).scrollTop() > 50) {
            $('#masthead').addClass('header-fixed');
            } else {
            $('#masthead').removeClass('header-fixed');
        }
    });

    (function($){
        $.fn.chunk = function(size) {
        var arr = [];
        for (var i = 0; i < this.length; i += size) {
            arr.push(this.slice(i, i + size));
        }
        return this.pushStack(arr, "chunk", size);
    }})(jQuery);

    $("#eq-inner .eq-count").chunk(3).wrap('<div class="carousel-item"><div class="row"></div></div>');
    $("#team-members .member-cont").chunk(2).wrap('<div class="carousel-item"><div class="row"></div></div>');

    $('#eq-inner .carousel-item').each(function(i) {
        if ( i === 0 ) {
           $(this).addClass('active');
        }
    });

    $('#team-members .carousel-item').each(function(i) {
        if ( i == 0 ) {
           $(this).addClass('active');
        }
    });

    $(document).ready(function ($) {
        $('img').removeAttr('width').removeAttr('height');
    });

    $('.rl-basicgrid-gallery').addClass('row');

    $('.home .rl-gallery-item').addClass('col-md-6').addClass('col-sm-12');
    $('.page-id-123 .rl-gallery-item').addClass('col-md-4').addClass('col-sm-12');

});
