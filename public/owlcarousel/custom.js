$('.owl-one').owlCarousel({
    rtl:true,
    loop:true,
    margin:0,
    nav:false,
    autoplay:true,
    autoplayTimeout:4000,
     autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        500:{
            items:2
        },
        800:{
            items:3
        },
        1200:{
            items:4
        }
    }
})

$('.owl-two').owlCarousel({
     rtl:true,
    loop:false,
     margin:70,
    nav:false,
    autoplay:false,
    responsive:{
        0:{
            items:3
        },
        
        
        600:{
            items:3
        },

    }
})

$('.owl-three').owlCarousel({
    rtl:true,
    loop:true,
     margin:110,
    nav:false,
    autoplay:false,

    responsive:{
        0:{
            items:1
        },
        500:{
            items:2
        },
        
        900:{
            items:3
        },
        
        1200:{
            items:4
        },
        
        

    }
})

$('.owl-four').owlCarousel({
    rtl:true,
    loop:true,
     margin:120,
    nav:false,
    autoplay:false,

    responsive:{
        0:{
            items:1
        },
        500:{
            items:2
        },
        
        700:{
            items:3
        },
        
        1000:{
            items:4
        },
        1200:{
            items:5
        },

    }
})

$('.owl-five').owlCarousel({
    rtl:false,
    loop:true,
     margin:25,
    nav:false,
    autoplay:false,

    responsive:{
        0:{
            items:1
        },
        400:{
            items:2
        },
        
        600:{
            items:3
        },
        
        800:{
            items:4
        },
        

    }
})

$('.owl-six').owlCarousel({
    rtl:false,
    loop:true,
    margin:60,
    nav:false,
    dots: false,
    autoplay:true,
    autoplayTimeout:3000,
    
    responsive:{
        0:{
            items:2
        },
        500:{
            items:3
        },
        750:{
            items:4
        },
        1000:{
            items:5
        },
        1200:{
            items:6
        },
        
    }
})

$('.owl-seven').owlCarousel({
    rtl:false,
    loop:true,
    margin:50,
    nav:false,
    autoplay:false,
    autoplayTimeout:4000,
     autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        500:{
            items:2
        },
        800:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

$('.owl-eight').owlCarousel({
    rtl:true,
    loop:true,
    margin:0,
    nav:true,
    autoplay:false,
    navText : ["<i class='fa fa-chevron-right'></i>","<i class='fa fa-chevron-left'></i>"],
    responsive:{
        0:{
            items:1
        },
    
        1000:{
            items:1
        }
    }
})