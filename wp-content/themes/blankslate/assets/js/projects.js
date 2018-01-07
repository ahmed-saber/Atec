(function (window, $) {
    // wait for the document ready
    $(document).ready(function () {
        // Filter projects according to categories
        var selectedClass = "";
        $(".filters-button-group .button").click(function () {
            $(".filters-button-group .button").removeClass('is-checked');
            $(this).addClass("is-checked");
            selectedClass = $(this).attr("data-filter");
            $(".projects_container").fadeTo(100, 0.1);
            $(".projects_container div").fadeOut().addClass('scale-anm');
            setTimeout(function () {
                $("." + selectedClass).fadeIn().removeClass('scale-anm');
                $(".projects_container").fadeTo(300, 1);
            }, 500);

        });


        //// project gallery
        $('.project_unit').on('click', function (e) {
            e.preventDefault();
            var projNum = $(this).data('project');
            var theGallery = $('.gallery_' + projNum);
            var theSelector = theGallery.find('li');
            var $lg = theGallery.lightGallery({
                selector: theSelector
            });
            theSelector.trigger('click');
            $lg.data('lightGallery').slide(0);
        });
    });
})(window, jQuery);