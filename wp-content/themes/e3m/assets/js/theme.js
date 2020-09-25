jQuery(document).ready(function () {
  $("#nav-icon1").click(function () {
    $(this).toggleClass("open");
    $("#mySidenav").toggleClass("active");
  });

  $("#nav_mobile").click(function () {
    $(this).toggleClass("open");
    $(".sidenav-mobile").toggleClass("active");
    $("body").toggleClass("fixed");
  });

  $(".grid").masonry({
    itemSelector: ".grid-item",
    columnWidth: 1,
    percentPosition: true,
    horizontalOrder: true,
  });
  $(window).on("load scroll", function () {
    var parallaxElement = $("#translate-item"),
      parallaxQuantity = parallaxElement.length;
    window.requestAnimationFrame(function () {
      for (var i = 0; i < parallaxQuantity; i++) {
        var currentElement = parallaxElement.eq(i),
          windowTop = $(window).scrollTop(),
          elementTop = currentElement.offset().top,
          elementHeight = currentElement.height(),
          viewPortHeight = window.innerHeight * 0.5 - elementHeight * 0.5,
          scrolled = windowTop - elementTop + viewPortHeight;
        currentElement.css({
          transform: "translate3d(0," + scrolled * +0.05 + "px, 0)",
        });
      }
    });
  });
  $(window).on("load scroll", function () {
    var parallaxElement = $("#translate-item2"),
      parallaxQuantity = parallaxElement.length;
    window.requestAnimationFrame(function () {
      for (var i = 0; i < parallaxQuantity; i++) {
        var currentElement = parallaxElement.eq(i),
          windowTop = $(window).scrollTop(),
          elementTop = currentElement.offset().top,
          elementHeight = currentElement.height(),
          viewPortHeight = window.innerHeight * 0.5 - elementHeight * 0.5,
          scrolled = windowTop - elementTop + viewPortHeight;
        currentElement.css({
          transform: "translate3d(0," + scrolled * +0.05 + "px, 0)",
        });
      }
    });
  });

  $(window).scroll(function () {
    var topHeight = $("#back-to-top");
    if ($(this).scrollTop() > 1000) {
      $(topHeight).addClass("visible");
    } else {
      $(topHeight).removeClass("visible");
    }
  });
});
