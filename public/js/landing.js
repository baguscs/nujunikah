window.addEventListener("scroll", function () {
    var navbar = document.querySelector("nav");
    if (window.scrollY > 100) {
        navbar.classList.add("bg-white");
        navbar.classList.add("shadow-sm");
    } else {
        navbar.classList.remove("bg-white");
        navbar.classList.remove("shadow-sm");
    }
});

$(window).bind("scroll", function () {
    var currentTop = $(window).scrollTop();
    var elems = $(".scrollspy");
    elems.each(function (index) {
        var elemTop = $(this).offset().top;
        var elemBottom = elemTop + $(this).height();
        if (currentTop >= elemTop && currentTop <= elemBottom) {
            var id = $(this).attr("id");
            var navElem = $('a[href="#' + id + '"]');
            navElem
                .parent()
                .addClass("active")
                .siblings()
                .removeClass("active");
        }
    });
});
