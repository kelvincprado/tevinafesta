$(document).ready(function() {
    'use strict';
    /*-----------------------------------------------------------------------------------*/
    /*	STICKY HEADER
    /*-----------------------------------------------------------------------------------*/
    var options = {
        offset: 350,
        offsetSide: 'top',
        classes: {
            clone: 'banner--clone fixed',
            stick: 'banner--stick',
            unstick: 'banner--unstick'
        },
        onStick: function() {
            $($.SmartMenus.Bootstrap.init);
        }
    };
    var banner = new Headhesive('.navbar', options);
    /*-----------------------------------------------------------------------------------*/
    /*	HAMBURGER MENU ICON
    /*-----------------------------------------------------------------------------------*/
    $(".nav-bars").on( "click", function() {
        $(".nav-bars").toggleClass("is-active");
    });
    /*-----------------------------------------------------------------------------------*/
    /*	IMAGE ICON HOVER
    /*-----------------------------------------------------------------------------------*/
    $('.overlay a').prepend('<span class="over"><span></span></span>');
    /*-----------------------------------------------------------------------------------*/
    /*	REVOLUTION
    /*-----------------------------------------------------------------------------------*/
    $("#slider1").revolution({
        sliderType: "standard",
        sliderLayout: "fullscreen",
        fullScreenOffsetContainer: ".mode-md .navbar:not(.fixed)",
        spinner: "spinner",
        delay: 9000,
        shadow: 0,
        gridwidth:[1240, 1024, 778, 480],
        responsiveLevels: [868, 716.8, 778, 480],
        navigation: {
            arrows: {
                enable: true,
                hide_onleave: true
            },
            touch: {
                touchenabled: "on",
            },
            bullets: {
                enable: true,
                hide_onleave: true,
                h_align: "center",
                v_align: "bottom",
                space: 6,
                h_offset: 0,
                v_offset: 20,
                tmp: ''
            }
        }
    });
    $("#slider2").revolution({
        sliderType: "standard",
        sliderLayout: "auto",
        spinner: "spinner",
        delay: 9000,
        shadow: 0,
        gridwidth:[1170, 1024, 778, 480],
		gridheight:[600, 525, 400, 250],
        responsiveLevels: [1240, 1024, 778, 480],
        navigation: {
            arrows: {
                enable: true,
                hide_onleave: true
            },
            touch: {
                touchenabled: "on",
            },
            bullets: {
                enable: true,
                hide_onleave: true,
                h_align: "center",
                v_align: "bottom",
                space: 6,
                h_offset: 0,
                v_offset: 20,
                tmp: ''
            }
        }
    });
    /*-----------------------------------------------------------------------------------*/
    /*	LIGHTGALLERY
	/*-----------------------------------------------------------------------------------*/
    $('.light-gallery').lightGallery({
        thumbnail: false,
        selector: '.lgitem',
        animateThumb: true,
        showThumbByDefault: false,
        download: false,
        autoplayControls: false,
        zoom: false,
	    fullScreen: false,
        thumbWidth: 100,
        thumbContHeight: 80,
        hash: false,
        videoMaxWidth: '1000px'
    });
    /*-----------------------------------------------------------------------------------*/
    /*	TAB COLLAPSE
    /*-----------------------------------------------------------------------------------*/
    $('#tab1').tabCollapse({
        tabsClass: 'hidden-sm hidden-xs',
        accordionClass: 'visible-sm visible-xs'
    });
    $('#tab1').on('shown-accordion.bs.tabcollapse', function() {
        $('.panel-group').find('.panel-default:has(".in")').addClass('panel-active');
        $('.panel-group').on('shown.bs.collapse', function(e) {
            $(e.target).closest('.panel-default').addClass(' panel-active');
        }).on('hidden.bs.collapse', function(e) {
            $(e.target).closest('.panel-default').removeClass(' panel-active');
        });
    });
    /*-----------------------------------------------------------------------------------*/
    /*	TOGGLE
    /*-----------------------------------------------------------------------------------*/
    $('.panel-group').find('.panel-default:has(".in")').addClass('panel-active');
    $('.panel-group').on('shown.bs.collapse', function(e) {
        $(e.target).closest('.panel-default').addClass(' panel-active');
    }).on('hidden.bs.collapse', function(e) {
        $(e.target).closest('.panel-default').removeClass(' panel-active');
    });
    /*-----------------------------------------------------------------------------------*/
    /*	PROGRESS BAR
    /*-----------------------------------------------------------------------------------*/
    $('.progress-list .progress .bar').progressBar({
        shadow: false,
        percentage: false,
        animation: true,
        height: 12
    });
    /*-----------------------------------------------------------------------------------*/
    /*	DATA REL
    /*-----------------------------------------------------------------------------------*/
    $('a[data-rel]').each(function() {
        $(this).attr('rel', $(this).data('rel'));
    });
    /*-----------------------------------------------------------------------------------*/
    /*	TOOLTIP
    /*-----------------------------------------------------------------------------------*/
    if ($("[rel=tooltip]").length) {
        $("[rel=tooltip]").tooltip();
    }
    /*-----------------------------------------------------------------------------------*/
    /*	PRETTIFY
    /*-----------------------------------------------------------------------------------*/
    window.prettyPrint && prettyPrint();
    /*-----------------------------------------------------------------------------------*/
    /*	LOADER
    /*-----------------------------------------------------------------------------------*/
    $(".pageloader").lsPreloader({

        backgroundColor: "#FFF",
        logoImage: "style/images/logo.png",
        minimumTime: .5,
        progressHeight: "0",
        progressColor: "#404040",
        percentFontSize: "18px"

    });
    /*-----------------------------------------------------------------------------------*/
    /*	VANILLA
    /*-----------------------------------------------------------------------------------*/
    var myForm;
    myForm = new VanillaForm($("form.vanilla-form"));
	/*-----------------------------------------------------------------------------------*/
	/* WIDTH CLASS
	/*-----------------------------------------------------------------------------------*/
	checkWidth(true); 
	function checkWidth(init)
	{
	    if ($(window).width() < 1271) {
	        $('body').addClass('mode-md');
	    }
	    else {
	        if (!init) {
	            $('body').removeClass('mode-md');
	        }
	    }
	}
	$(window).resize(function() {
	    checkWidth(false);
	});
	
    /*-----------------------------------------------------------------------------------*/
    /*	COUNTER UP
    /*-----------------------------------------------------------------------------------*/
    $('.fcounter').counterUp({
        delay: 50,
        time: 1000
    });
    /*-----------------------------------------------------------------------------------*/
    /*	COLLAGEPLUS
    /*-----------------------------------------------------------------------------------*/
    collage();


    function collage() {
        $('#collage-large').removeWhitespace().collagePlus({
            'fadeSpeed': 5000,
            'targetHeight': 400,
            'effect': 'effect-2',
            'direction': 'vertical',
            'allowPartialLastRow': true
        });
        $('#collage-medium').removeWhitespace().collagePlus({
            'fadeSpeed': 5000,
            'targetHeight': 300,
            'effect': 'effect-2',
            'direction': 'vertical',
            'allowPartialLastRow': true
        });
    };
    
    
    
    // This is just for the case that the browser window is resized
    var resizeTimer = null;
    $(window).on('resize', function() {
        // hide all the images until we resize them
        $('.collage .collage-image-wrapper').css("opacity", 0);
        // set a timer to re-apply the plugin
        if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(collage, 200);
    });

});
	

let totalSlides = document.querySelectorAll('.slider--item').length;
let currentSlide = 0;

let sliderWidth = document.querySelector('.slider').clientWidth;

//document.querySelector('.slider--width').style.width = `calc(100vw * ${totalSlides})`;
document.querySelector('.slider--width').style.width = `${sliderWidth * totalSlides}px`;

//document.querySelector('.slider--controls').style.height = `${document.querySelector('.slider').clientHeight}px`;
document.querySelector('.slider--controls').style.width = `${sliderWidth}px`;

function goPrev() {
    currentSlide--;
    if (currentSlide < 0) {
        currentSlide = totalSlides - 1;
    }
    updateMargin();
}

function goNext() {
    currentSlide++;
    if(currentSlide > (totalSlides - 1)) {
        currentSlide = 0;
    }
    updateMargin();
}

function updateMargin() {
    let sliderItemWidth = document.querySelector('.slider--item').clientWidth;
    let newMargin = (currentSlide * sliderItemWidth);
    document.querySelector('.slider--width').style.marginLeft = `-${newMargin}px`;
}

setInterval(goNext, 5000);

currentImageIndex = 0;
imgSlide = document.querySelectorAll('#slider-propaganda img, #conteudo-lateral img');
max = imgSlide.length;

function nextImage() {
    imgSlide[currentImageIndex].classList.remove("selected");
    currentImageIndex++;
    if(currentImageIndex >= max) {
        currentImageIndex = 0;
    }
    imgSlide[currentImageIndex].classList.add("selected");
}

function start() {
    setInterval(()=>{
        nextImage();
    }, 2000);
}

window.addEventListener("load", start);



// Propaganda noticia
currentDivIndex = 0;
divSlide = document.querySelectorAll('.banner--noticia div');
max = divSlide.length;

function nextDiv() {
    divSlide[currentDivIndex].classList.remove("selected");
    currentDivIndex++;
    if(currentDivIndex >= max) {
        currentDivIndex = 0;
    }
    divSlide[currentDivIndex].classList.add("selected");
}

function startPropaganda() {
    setInterval(()=>{
        nextDiv();
    }, 2000);
}

window.addEventListener("load", startPropaganda);