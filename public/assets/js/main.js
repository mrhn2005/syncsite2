$(document).ready(function() {

    "use strict";

    $("[rel=smoothscroll], #home a, #blog a, nav ul li a").smoothScroll({
        speed: 1500
    });

    if ($(window).width() < 890) {
        $("header").addClass("mobile-header");
    }

    $(".mobile-menu").on("click", function() {
        $(this).toggleClass("open");
        $("header nav .menu").slideToggle("slow");
    });

    $(".switcher-open").on("click", function() {
        $(".style-switcher").toggleClass("openswitcher");
    });

    $("header nav .menu li a").on("click", function() {
        $(".mobile-header nav .menu").slideToggle("slow");
        $(".mobile-menu").toggleClass("open");
    });

    $("#to-top").on("click", function() {
        $("html, body").animate({
            scrollTop: 0
        }, 2000);
    });

    if ($("html").length == 1) {
        $(window).on("scroll", function() {
            if ($(this).scrollTop() > 500) {
                $("header").addClass("header-show");
            } else {
                $("header").removeClass("header-show");
            }
        });
    }

    if ($(window).width() < 767) {
        $("header").addClass("second-header");
    }

    var timerInit = false;
    $(".timer").each(function() {
        $(this).bind("inview", function(isInView) {
            var dataCount = parseInt($(this).attr("data-count"));
            if (isInView && timerInit == false) {
                $(this).countTo({
                    from: 0,
                    to: dataCount,
                    speed: 2500,
                    refreshInterval: 50,
                    formatter: function(value, options) {
                        return value.toFixed(options.decimals);
                    },
                    onUpdate: function(value) {
                        // console.debug(this);
                    },
                    onComplete: function(value) {
                        timerInit = true;
                    }
                });
            }
        });
    });

});


$(window).load(function() {

    "use strict";

    $('.work .work-posts').isotope({
        itemSelector: '.col-md-4'
    });

    $(function() {
        // init Isotope
        var $container = $('.work-posts').isotope({
            itemSelector: '.item'
        });
        // filter functions
        var filterFns = {
            // show if number is greater than 50
            numberGreaterThan50: function() {
                var number = $(this).find('.number').text();
                return parseInt(number, 10) > 50;
            },
            // show if name ends with -ium
            ium: function() {
                var name = $(this).find('.name').text();
                return name.match(/ium$/);
            }
        };
        // bind filter button click
        $('#filters').on('click', 'li', function() {
            var filterValue = $(this).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[filterValue] || filterValue;
            $container.isotope({
                filter: filterValue
            });
        });
        // change is-checked class on buttons
        $('.filters').each(function(i, buttonGroup) {
            var $buttonGroup = $(buttonGroup);
            $buttonGroup.on('click', 'li', function() {
                $buttonGroup.find('.active').removeClass('active');
                $(this).addClass('active');
            });
        });
    });

    $(".loader").fadeOut("slow")

});
