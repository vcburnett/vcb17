$( document ).ready(function() {

	var root = $("html, body");
	var browserWindow = $(window);

	var siteNav = $("nav");

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

		//Slider
		slideWidth = slide.width();
	}

	// ON RESIZE
	browserWindow.on("resize", function() {
		updateElements();
	}).trigger("resize");

	// Slider
	function sliderBtn() {
		$("#slider-pagination a.pag-selected").removeClass("pag-selected");
		$(this).addClass("pag-selected");
	};
	function sliderSlide() {

		slideWrapper.css( "left", ((slideNumber-1) * slideWidth) +"px" );
		console.log("slideWrapper = " + slideWrapper + " and slideWidth = " + slideWidth);
	}
	btnSlider1.on("click", function() {
		sliderBtn();
		sliderNumber = 1;
		sliderSlide();
	});
	btnSlider2.on("click", function() {
		sliderBtn();
		sliderNumber = 2;
		sliderSlide();
	});
	btnSlider3.on("click", function() {
		sliderBtn();
		sliderNumber = 3;
		sliderSlide();
	});
	btnSlider4.on("click", function() {
		sliderBtn();
		sliderNumber = 4;
		sliderSlide();
	});
	btnSlider5.on("click", function() {
		sliderBtn();
		sliderNumber = 5;
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

});