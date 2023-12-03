$(document).ready(function () {

  console.log('load')


  $('.container-items').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 2,
    // prevArrow:' <span aria-hidden="true"><i class="bx bx-radio-circle-marked prev"></i></span>',
    // nextArrow:' <span aria-hidden="true"><i class="bx bx-radio-circle-marked next"></i></span>',
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ],
  });


});