/*-------------------------------

	PRE_LOADER.JS

-------------------------------*/
$(window).on("load", function() {
  $(".preloader-icon")
    .delay(100)
    .fadeOut(),
    setTimeout(function() {
      $(".preloader").addClass("loaded"),
        setTimeout(function() {
          $(".preloader").hide();
        }, 1500);
    }, 800);
});

/*-------------------------------

	STICKY_MENU.JS

-------------------------------*/
$(window).on("scroll", function() {
  var wSize = $(window).width();
  if ($(this).scrollTop() > 100) {
    $(".main-nav").addClass("sticky_animate");
  } else {
    $(".main-nav").removeClass("sticky_animate");
  }
});

/*-------------------------------

	SCROLLBAR.JS

-------------------------------*/
(function($) {
  $(window).on("load", function() {
    $(".content-m").mCustomScrollbar({ theme: "minimal" });
  });
})(jQuery);

/*-------------------------------

	OUR COURSE_SLIDER.JS

-------------------------------*/

var boxslider = $(".box-slider");
$(".box-slider").owlCarousel({
  loop: true,
  margin: 15,
  dots: false,
  autoplayTimeout: 3000,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    768: {
      items: 2
    },
    992: {
      items: 3
    }
  }
});
$(".customPrevBtn").click(function() {
  boxslider.trigger("prev.owl.carousel");
});
$(".customNextBtn").click(function() {
  boxslider.trigger("next.owl.carousel");
});

/*-------------------------------

	OUR LEARN_SLIDER.JS

-------------------------------*/

var learnslider = $(".learn-slider");
$(".learn-slider").owlCarousel({
  loop: false,
  margin: 15,
  dots: false,
  autoplayTimeout: 3000,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    768: {
      items: 2
    },
    992: {
      items: 3
    }
  }
});
$(".customPrevBtn").click(function() {
  learnslider.trigger("prev.owl.carousel");
});
$(".customNextBtn").click(function() {
  learnslider.trigger("next.owl.carousel");
});

/*-------------------------------

	CAREER_SERVICES_SLIDER.JS

-------------------------------*/

var logoslider = $(".logo-slider");
$(".logo-slider").owlCarousel({
  loop: true,
  margin: 30,
  dots: false,
  autoplay: true,
  autoplayTimeout: 2500,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    768: {
      items: 2
    },
    992: {
      items: 4
    }
  }
});
$(".customPrevBtn1").click(function() {
  logoslider.trigger("prev.owl.carousel");
});
$(".customNextBtn1").click(function() {
  logoslider.trigger("next.owl.carousel");
});

/*-------------------------------

	TESTIMONIALS_SLIDER.JS

-------------------------------*/

var testimonialslider = $(".testimonial-slider");
$(".testimonial-slider").owlCarousel({
  loop: true,
  margin: 0,
  dots: false,
  autoplay: true,
  autoplayTimeout: 8000,
  autoplaySpeed: 800,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});
$(".customPrevBtn2").click(function() {
  testimonialslider.trigger("prev.owl.carousel");
});
$(".customNextBtn2").click(function() {
  testimonialslider.trigger("next.owl.carousel");
});
/*-------------------------------

	SELECT_DROPDOWN.JS

-------------------------------*/
$(".selectpicker").selectpicker();

/*-------------------------------

	CLASS FOR MAC OS.JS

-------------------------------*/
$(document).ready(function() {
  if (navigator.userAgent.indexOf("Mac") > 0) $("body").addClass("mac-os");
});

/*-------------------------------

	SEARCH_SECTION.JS

-------------------------------*/
$(document).ready(function() {
  $("#myOverlay").slideUp();
});
function openSearch() {
  // document.getElementById("myOverlay").style.display = "block";
  // document.getElementById("myOverlay").style.transition = "all 0.5s ease-in-out";
  // document.getElementById("myOverlay").style.height = "100%";
  $("#myOverlay").slideDown();
}

function closeSearch() {
  // document.getElementById("myOverlay").style.display = "none";
  // document.getElementById("myOverlay").style.transition = "all 0.5s ease-in-out";
  // document.getElementById("myOverlay").style.height = "0%";
  $("#myOverlay").slideUp();
}
