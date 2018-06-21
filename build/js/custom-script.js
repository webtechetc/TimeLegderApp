
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $(".container.body .col-md-3.left_col").css('position', 'fixed');
    } else {
        $(".container.body .col-md-3.left_col").css('position', 'absolute');
    }
});