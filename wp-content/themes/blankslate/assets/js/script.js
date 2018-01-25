(function(window,$){
    // wait for the document ready
    $(document).ready(function() {

        // fixed nav-bar on scroll
        var nav = $(".navbar-fixed-top");
        $(window).scroll(function() {
            if (nav.offset().top > 300) {
                nav.addClass("top-nav-expand");
            } else {
                nav.removeClass("top-nav-expand");
            }
        });

        // Contact form
        //=====================================================
        var txt = 'input[type="text"], input[type="email"], textarea';
        $(txt).each(function(){
            $(this).after('<div class="bar"/>');
        });
        $('.contact_form form').on('focus',txt,function() {
            var $this = $(this);
            $this.parents('p').addClass('focus');
        }).on('blur',txt,function() {
            var $this = $(this);
            if ($this.val()){
                $this.addClass('used');
            }else{
                $this.removeClass('used');
                $this.parents('p').removeClass('focus');
            }
        });

        $('.contact_form form input[type="submit"]').replaceWith('<button type="submit" class="wpcf7-form-control wpcf7-submit btn form_btn transition">'+$('.contact_form form input[type="submit"]').attr('value')+'</button>');

        //hamburger menu
        //=====================================================
        $(".hamburger").on('click',function(e){
            e.preventDefault();
            $(this).toggleClass('is-active');
        });
        $(".site-overlay, .menu-item").on('click',function(e){
            $('.hamburger').removeClass('is-active');
        });
    });
})(window,jQuery);