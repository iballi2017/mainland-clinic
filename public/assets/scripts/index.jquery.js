$(document).ready(function () {
  $(".hero-owl-slider").owlCarousel({
    loop: true,
    autoplay: true,
    smartSpeed: 1500,
    animateOut: "fadeOut",
    animateOut: "slideOutDown",
    animateIn: "flipInX",
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
      1000: {
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

  // const myDropdown = document.getElementById("myDropdown");
  // myDropdown.addEventListener("mouseenter", (event) => {
  //   if ($("#myDropdown div:last-child").hasClass("show")) return null;
  //   $("#myDropdown div:last-child").addClass("show");
  // });

  // myDropdown.addEventListener("mouseleave", (event) => {
  //   console.log($("#myDropdown").hasClass("show"));
  //   if ($("#myDropdown div:last-child").hasClass("show"))
  //     return $("#myDropdown div:last-child").removeClass("show");
  // });

  /* Get Rating value */
  var $rateYo;

  if ($("#rateYo")) {
    $rateYo = $("#rateYo").rateYo({
      starWidth: "45px",
      normalFill: "#D9D9D9",
    });
  }
  $("#getRating").click(function () {
    /* get rating */
    var rating = $rateYo.rateYo("rating");

    window.alert("Its " + rating + " Yo!");
  });

  $("#setRating").click(function () {
    /* set rating */
    var rating = getRandomRating();
    $rateYo.rateYo("rating", rating);
  });
  /** */

  /**Product details image preview toggle */
  var x = $("#product-images");
  if (!x) return;
  x.children().click(function (e) {
    var q = $(e.target).attr("src");
    addImag(q);
  });

  function addImag(data) {
    var a = $("#preview").children().children("img");
    // console.log("a: ", a);
    a.attr("src", data);
  }
  /** */

  /**Product item quantity count control */

  $(".qty-add").click(function (e) {
    var qty = $(e.target).parent().siblings(".qty-val");
    var qtyVal = qty.html();
    qtyVal++;
    $(e.target).parent().siblings(".qty-val").html(qtyVal);
  });

  $(".qty-remove").click(function (e) {
    var qty = $(e.target).parent().siblings(".qty-val");
    var qtyVal = qty.html();
    qtyVal--;
    if (qtyVal > 0) {
      $(e.target).parent().siblings(".qty-val").html(qtyVal);
    } else {
      return;
    }
  });
});
