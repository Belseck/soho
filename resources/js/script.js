$(window).scroll(function (event) {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > 100) {
        $(".main-menu").addClass("bg-blue");
    }else{
        $(".main-menu").removeClass("bg-blue");
    }
});