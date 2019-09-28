$(document).ready(function () {
    $('#owl-articles').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        responsiveClass: true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false,
                margin: 20
            }
        }

    })
});
//loader  
$(window).on("load", function () {

    $("body").css("overflow", "auto");
    $(".overlay").fadeOut(2000);

});





 function toggleFavourite(heart) {
     var currentClass = $(heart).attr('class');
     if (currentClass.includes('first')) {
         $(heart).removeClass('first-heart').addClass('second-heart');
     } else {
        $(heart).removeClass('second-heart').addClass('first-heart');
     }
  }
 /* 1 carousel */
$('#carousel-1').carousel({
      interval: 4000,
      wrap: true,
      keyboard: true
 });
 
 
 /* 2 carousel */
 $('#carousel-2').carousel({
      interval: 6000,
      wrap: true,
      keyboard: true
 });
 
 
 /* 3 carousel */
 $('#carousel-3').carousel({
     interval: 8000,
     wrap: true,
     keyboard: true
 });

 /* 4 carousel example with jumbotron */
 $('#carousel-4').carousel({
     interval: 10000,
     wrap: true,
     keyboard: true
 });

 /* 5 carousel example */
 $('#carousel-5').carousel({
     interval: 6000,
     wrap: true,
     keyboard: true
 });

 /* 6 carousel example */
 $('#carousel-6').carousel({
     interval: 8000,
     wrap: true,
     keyboard: true
 });

 /* 7 carousel example */
 $('#carousel-7').carousel({
     interval: 4000,
     wrap: true,
     keyboard: true
 });

 /* 8 carousel example */
 $('#carousel-8').carousel({
     interval: 6000,
     wrap: true,
     keyboard: true
 });

 /* 9 carousel example */
 $('#carousel-9').carousel({
     interval: 8000,
     wrap: true,
     keyboard: true
 });

 /* 10 carousel example */
 $('#carousel-10').carousel({
     interval: 2000,
     wrap: true,
     keyboard: true
 });

 /* 11 carousel example */
 $('#carousel-11').carousel({
     interval: 4000,
     wrap: true,
     keyboard: true
 });

 /* 12 carousel example */
 $('#carousel-12').carousel({
     interval: 6000,
     wrap: true,
     keyboard: true
 });

 /* 13 carousel example */
 $('#carousel-13').carousel({
     interval: 8000,
     wrap: true,
     keyboard: true
 });


