$(document).ready(function() {
    $('.welcome-section').height($(window).height());
    $('.welcome-section .bg-layer').height($(window).height() + 200);
    
    $(window).resize(function() {
        $('.welcome-section').height($(window).height());
        $('.welcome-section .bg-layer').height($(window).height() + 200);
        
        console.log('window resized');
        /*
        if ($(window).width < 768) {
            $('#portfolio-slideshow').bjqs({
                'height' : 162,
                'width' : 288,
                'animtype' : 'slide',
                'animduration' : 450,
                'animspeed' : 3000,
                'automatic' : true,
                'showcontrols' : true,
                'centercontrols' : true,
                'showmarkers' : false,
                'responsive' : true
            });
        }
        */
    });
    
    $('#ratings-slideshow').bjqs({
        'height' : 140,
        'width' : 840,
        'animtype' : 'slide',
        'animduration' : 450,
        'animspeed' : 3000,
        'automatic' : true,
        'showcontrols' : true,
        'centercontrols' : true,
        'showmarkers' : false,
        'responsive' : true
    });
    
    $('#portfolio-slideshow').bjqs({
        'height' : 162,
        'width' : 864,
        'animtype' : 'slide',
        'animduration' : 450,
        'animspeed' : 3000,
        'automatic' : true,
        'showcontrols' : true,
        'centercontrols' : true,
        'showmarkers' : false,
        'responsive' : true
    });

    if(!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        var s = skrollr.init({
                edgeStrategy: 'set',
                smoothScrolling: false,
                easing: {
                    WTF: Math.random,
                    inverted: function(p) {
                        return 1-p;
                    }
                }
            });
    }
    
    var sections = new Array();
    $(".simple-section").each(function() {
        if ($(this).attr("id") != "") {
            sections[sections.length] = $(this).attr("id");
        }
    });
    
    var scroll_offset = 140;
    
    $("nav a").click(function() {
        $("html, body").animate({
            scrollTop: $($.attr(this, "href")).offset().top - scroll_offset
        }, 1000);

        return false;
    });
    
    $(window).scroll(function() {
        for (var i = 0; i < sections.length; i++) {
            if ($("#" + sections[i]).offset().top < $(window).scrollTop() + scroll_offset * 2) {
                var curr = $("nav a[href='#" + sections[i] + "']");
                if (!curr.hasClass("on")) {
                    $("nav a").removeClass("on");
                    curr.addClass("on");
                }
            }
        }
        
        if ($(window).scrollTop() > $(window).height() && !$('header').hasClass('fixed'))  {
            $('header').addClass('fixed');
            $('.header-spacer').show();
        } else if ($(window).scrollTop() < $(window).height()) {
            $('header').removeClass('fixed');
            $('.header-spacer').hide();
        }
    });
    
    /* animations */
    $('.welcome-phones, .app-store, .welcome-section .logo, .welcome-section h2').addClass('on');
})