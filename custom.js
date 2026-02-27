
// text/x-generic custom.js ( ASCII text )
jQuery(document).ready(function($) {
    $('.hederBottomNav .elementor-clickable .hfe-nav-menu-icon').click(function() {
        $('.headerBottom > .e-con-inner').toggleClass('eConInner22');
        $('.headerBottom').toggleClass('headerBottom22');
    });
});



jQuery(document).ready(function($) {
  var header = $('.headerBottom');
  var headerHeight = header.outerHeight();
  $(window).scroll(function() {
    if ($(this).scrollTop() > headerHeight) {
      $('body').addClass('sticky-header-main');
    } else {
      $('body').removeClass('sticky-header-main');
    }
  });
});
jQuery(function($){
    $('#datepicker').datetimepicker({
        dateFormat: 'mm-dd-yy',
        timeFormat: 'hh:mm'
    });
});


// jQuery(document).ready(function($) {
//   $('.logo-Slider').slick({
//     autoplay: true,
//     autoplaySpeed: 2000,
//     infinite: true,
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     arrows: false,
//     dots: false,
//     responsive: [
//     {
//       breakpoint: 1000,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 1,
//         infinite: true
//       }
//     },
//     {
//       breakpoint: 800,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 2
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 2
//       }
//     },
//     {
//       breakpoint: 320,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     }
//   ]
//   });
// });

$(document).ready(function(){
    // When the open modal button is clicked
    $(".whatsAppIcon  .elementor-icon").click(function(){
        // Show the modal
        $("#myModal").css('display','flex');
    });

    // When the close button or anywhere outside the modal is clicked
    $(".close, .modal").click(function(){
        // Hide the modal
        $("#myModal").css('display','none');
    });

    // Prevent clicks inside the modal from closing it
    $(".modal-content").click(function(e){
        e.stopPropagation();
    });
});

(function () {
  "use strict";

  var $projects = $(".projects");

  $projects.isotope({
    itemSelector: ".item",
    layoutMode: "fitRows"
  });

  $("ul.filters > li").on("click", function (e) {
    e.preventDefault();

    var filter = $(this).attr("data-filter");

    $("ul.filters > li").removeClass("active");
    $(this).addClass("active");

    $projects.isotope({
      filter: filter
    });
  });

  $(".project")
    .mouseenter(function () {
      $(this)
        .find(".project-overlay")
        .css({
          top: "-100%"
        });
      $(this)
        .find(".project-hover")
        .css({
          top: "0"
        });
    })
    .mouseleave(function () {
      $(this)
        .find(".project-overlay")
        .css({
          top: "0"
        });
      $(this)
        .find(".project-hover")
        .css({
          top: "100%"
        });
    });
})(jQuery);