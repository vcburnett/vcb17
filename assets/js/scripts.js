$( document ).ready(function() {

	var root = $("html, body");
	var browserWindow = $(window);

	var siteNav = $("nav");
	var btnMobNav = $(".mobile-button");
	var navLinks = $("#nav-links");
	var navLinksA = $("#nav-links a");
	var navLogo1 = $("#nav-logo a .vcb-logo-part-1");
	var navLogo2 = $("#nav-logo a .vcb-logo-part-2");
	var navLogo3 = $("#nav-logo a .vcb-logo-part-3");
	var navScrollFix = $("nav.scrolled #nav-links")

	var sliderPagination = $("#slider-pagination");
	var btnSlider = $("#slider-pagination a");
	var slideWrapper = $("#slider-wrap ul");
	var slideNumber = 1;
	var slide = $("#slider-wrap ul li");
	var btnSlider1 = $("#slider-btn-1");
	var btnSlider2 = $("#slider-btn-2");
	var btnSlider3 = $("#slider-btn-3");
	var btnSlider4 = $("#slider-btn-4");
	var btnSlider5 = $("#slider-btn-5");

	var browserH, browserW, slideWidth;

	// Functions
	function updateElements() {
		browserH = browserWindow.height();
		browserW = browserWindow.width();

		// nav
		if (btnMobNav.hasClass("clicked") && browserW > 640) {
			closeOpenNav();
		};
		//Slider
		slideWidth = slide.width();
		slideWrapper.css( "left", -1*((slideNumber-1) * slideWidth) +"px" );
	}

	function closeOpenNav() {
		btnMobNav.removeClass("clicked");
		siteNav.css("background-color", "transparent");
		navLinks.css({
			"height":"0vh",
			"padding-top":"2.1em"
		});
		navLogo1.css("fill", "#ebebeb");
		navLogo2.css("fill", "#aaa");
		navLogo3.css("fill", "#fff");
	}

	// ON RESIZE
	browserWindow.on("resize", function() {
		updateElements();
	}).trigger("resize");

	// Slider
	function sliderBtn() {
		$("#slider-pagination a.pag-selected").removeClass("pag-selected");
	};
	
	function sliderSlide() {
		slideWrapper.fadeOut("fast", function () {
			slideWrapper.css( "left", -1*((slideNumber-1) * slideWidth) +"px" );
			slideWrapper.fadeIn("slow");
		});
		
		console.log("Slide number = " + slideNumber + " Slide wrapper = " + slideWrapper + " and slideWidth = " + slideWidth);
	}

	btnSlider1.on("click", function() {
		sliderBtn();
		$(this).addClass("pag-selected");
		slideNumber = 1;
		console.log("Slider number in button = " + slideNumber);
		sliderSlide();
	});
	btnSlider2.on("click", function() {
		sliderBtn();
		$(this).addClass("pag-selected");
		slideNumber = 2;
		console.log("Slider number in button = " + slideNumber);
		sliderSlide();
	});
	btnSlider3.on("click", function() {
		sliderBtn();
		$(this).addClass("pag-selected");
		slideNumber = 3;
		console.log("Slider number in button = " + slideNumber);
		sliderSlide();
	});
	btnSlider4.on("click", function() {
		sliderBtn();
		$(this).addClass("pag-selected");
		slideNumber = 4;
		console.log("Slider number in button = " + slideNumber);
		sliderSlide();
	});
	btnSlider5.on("click", function() {
		sliderBtn();
		$(this).addClass("pag-selected");
		slideNumber = 5;
		console.log("Slider number in button = " + slideNumber);
		sliderSlide();
	});


	// ON SCROLL
	$(window).on('scroll', function() {
	    var yScroll = window.pageYOffset;
	    var scrollTrigger = 135;	// set to whatever you want it to be

	    console.log("yScroll = " + yScroll);

	    if(yScroll > scrollTrigger) {
			siteNav.addClass("scrolled");
	    } else {
			siteNav.removeClass("scrolled");
	    }

	});

	// ON CLICK
	btnMobNav.on("click", function() {
		if ( $(this).hasClass("clicked") ) {
			$(this).removeClass("clicked");
			siteNav.css("background-color", "transparent");
			navLinks.css({
				"height":"0vh",
				"padding-top":"0"
			});
			navLogo1.css("fill", "#ebebeb");
			navLogo2.css("fill", "#aaa");
			navLogo3.css("fill", "#fff");
		} else {
			$(this).addClass("clicked");
			siteNav.css("background-color", "rgba(255,255,255,.94)");
			navLinks.css({
				"height":"100vh",
				"padding-top":"1.5em"
			});
			navLogo1.css("fill", "#414c61");
			navLogo2.css("fill", "#2e323b");
			navLogo3.css("fill", "#66728a");
		}
	});

	navLinksA.on("click", function() {
		if( btnMobNav.hasClass("clicked") ) {
			closeOpenNav();
		}
	});

	$('a[href^="#"]').click(function(event){
		event.preventDefault();
		
		var the_id = $(this).attr("href");

		$('html, body').animate({
			scrollTop:$(the_id).offset().top
		}, 'slow');
		return false;
	});


});