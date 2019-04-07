jQuery(function ($) {
  var interval;
  var itemWidth = $(".item-wrapper").outerWidth(true);
  $(document).on("ready", function () {
    interval = setInterval(scrollRight, 3000);
  });
  $(".carousel-wrapper").find(".item-wrapper:first").before($(this).find(".item-wrapper:last"));
  $(".carousel-wrapper").css({marginLeft: -itemWidth});

  $("#Carousel").hover(
  function () {
    clearInterval(interval);
  },
  function () {
    interval = setInterval(scrollRight, 3000);
  });

  $(".left").click(function () {
    scrollLeft();
  });
  $(".right").click(function () {
    scrollRight();
  });

  function scrollLeft() {
    $("#Carousel .carousel-wrapper").animate({marginLeft: 0}, 1000, function () {
      $("#Carousel .carousel-wrapper .item-wrapper:first").before($("#Carousel .carousel-wrapper .item-wrapper:last"));
      $("#Carousel .carousel-wrapper").css({marginLeft: -itemWidth});
    });
  }

  function scrollRight() {
    $("#Carousel .carousel-wrapper").animate({marginLeft: -itemWidth * 2}, 1000, function () {
      $("#Carousel .carousel-wrapper .item-wrapper:last").after($("#Carousel .carousel-wrapper .item-wrapper:first"));
      $("#Carousel .carousel-wrapper").css({marginLeft: -itemWidth});
    });
  }
});
