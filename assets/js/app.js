jQuery(document).ready(function($) {
    $(document).foundation();
    $("aside ul").addClass("menu vertical");
    //$("ul.menu ul").addClass("menu vertical");
    if($("html").attr("dir") === "ltr") {
        $(".top-bar-right li").each(function() {
            $(this).removeClass('opens-left');
            $(this).addClass('opens-right');
            console.log("tested");
        });
    }

    $(document).on( "click", ".search-trigger", function() {
        $(".header-search .search-form").toggleClass("opened");
    } );
});
