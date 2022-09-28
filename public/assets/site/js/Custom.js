$(document).ready(function () {
  console.log($(".s").offset())
  // side menu
  $(".sideBtn").click(function () {
    $(this).toggleClass("active");
    $(".sideMenu").toggleClass("active");
  });
  //navbar ainmation
  $(window).scroll(function () {
    var appScroll = $(document).scrollTop();
    if (appScroll > 2 && appScroll < 99999999999) {
      $(".navbar").addClass("navAnimate");
    }
    if (appScroll > 0 && appScroll < 20) {
      $(".navbar").removeClass("navAnimate");
    }
  });
  // offerSlider
  var offerSlider = new Swiper(".offerSlider", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    navigation: {
      nextEl: ".offerNext",
      prevEl: ".offerPrev",
    },
    pagination: {
      el: ".offerPagination",
      dynamicBullets: true,
    },
    speed: 1500,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });
  // ////////////////// thumbs slider ///////////////////

  // // slider
  var thumbsSlider = new Swiper(".thumbsSlider", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,

  });
  // // View
  var thumbsView = new Swiper(".thumbsView", {
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: thumbsSlider,
    },
  });

  // ////////////////// thumbs slider ///////////////////
});
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
$(document).ready(function () {
  //spinner
  $(".spinner ").fadeOut("slow");
  //WOW js
  new WOW().init();
  // select2
  $(".select2search").select2();
  $(".select2").select2({
    minimumResultsForSearch: -1,
  });
  // img gallery
  // $("[data-fancybox]").fancybox({
  //   buttons: [
  //     "zoom",
  //     // "share",
  //     // "slideShow",
  //     "fullScreen",
  //     // "download",
  //     "thumbs",
  //     "close",
  //   ],
  //   transitionEffect: "slide",
  // });

  Fancybox.bind("[data-fancybox]", {
  });

  // odometer
  $(".odometer").appear(function (e) {
    var odo = $(".odometer");
    odo.each(function () {
      var countNumber = $(this).attr("data-count");
      $(this).html(countNumber);
    });
  });
  // tooltip
  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });
});
// *********************seclect**************
// $(document).ready(function() {
//   $('.js-example-basic-multiple').select2();
// })
