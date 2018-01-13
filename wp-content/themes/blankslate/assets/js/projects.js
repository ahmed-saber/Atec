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
    });
})(window, jQuery);