$(document).ready(function () {
  $(".hero-owl-slider").owlCarousel({
    loop: true,
    autoplay: true,
    smartSpeed: 1500,
    // animateOut: "fadeOut",
    // animateOut: "slideOutDown",
    // animateIn: "flipInX",
    items: 1,
    // navText: ['<i data-feather="menu"></i>', ' <i data-feather="menu"></i>'],
  });


  $(".reviews-owl-slider").owlCarousel({
    loop: true,
    autoplay: true,
    nav: false,
    lazyLoad: true,
    //
    animateOut: "fadeOut",
    animateOut: "slideOutDown",
    animateIn: "flipInX",
    margin: 30,
    smartSpeed: 450,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
    },
  });

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".sticky-top").css("top", "0px");
    } else {
      $(".sticky-top").css("top", "-100px");
    }
  });
});
