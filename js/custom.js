jQuery(document).ready(function () {
  jQuery(function () {
    jQuery('#main-menu').smartmenus({
      mainMenuSubOffsetX: -1,
      mainMenuSubOffsetY: 4,
      subMenusSubOffsetX: 6,
      subMenusSubOffsetY: -6
    });
  });


  jQuery(window).scroll(function () {
    var nav = jQuery('.header-info');
    var top = 50;
    if (jQuery(window).scrollTop() >= top) {

      nav.addClass('fixed');

    } else {
      nav.removeClass('fixed');
    }
  });


  jQuery('.record-million-slider').owlCarousel({
    loop: true,
    center: false,
    items: 4,
    margin: 0,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    responsiveClass: true,
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      578: {
        items: 2
      },
      767: {
        items: 3
      },
      992: {
        items: 3
      },
      1100: {
        items: 3
      },
      1200: {
        items: 3
      },
      1300: {
        items: 4
      },
      1400: {
        items: 4
      },
      1500: {
        items: 4
      }
    }
  });

  jQuery('.about-us-slider').owlCarousel({
    loop: true,
    center: false,
    items: 1,
    margin: 0,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    responsiveClass: true,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1
      },
      578: {
        items: 1
      },
      767: {
        items: 1
      },
      992: {
        items: 1
      },
      1100: {
        items: 1
      },
      1200: {
        items: 1
      },
      1300: {
        items: 1
      },
      1400: {
        items: 1
      },
      1500: {
        items: 1
      }
    }
  });
	
  jQuery('.about-us-slider-2').owlCarousel({
    loop: true,
    center: false,
    items: 2,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    responsiveClass: true,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1
      },
      578: {
        items: 1
      },
      767: {
        items: 1
      },
      992: {
        items: 2
      },
      1100: {
        items: 2
      },
      1200: {
        items: 2
      },
      1300: {
        items: 2
      },
      1400: {
        items: 2
      },
      1500: {
        items: 2
      }
    }
  });

});



