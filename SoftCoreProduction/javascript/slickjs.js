          $(document).ready(function() {

    $('.as').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 2000,
      pauseOnFocus: false,
      pauseOnHover: false,
      pauseOnDotsHover: false,
      slidesToShow: 3,
      slidesToScroll: 1,

      responsive: [
    
        {
         breakpoint: 991,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1
         }
        },
       {
         breakpoint: 700,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1
         }
       },
       {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1
         }
       }
       // You can unslick at a given breakpoint now by adding:
       // settings: "unslick"
       // instead of a settings object
     ]
   
    });
   

  
    $('.asa').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 3000,
      pauseOnFocus: false,
      pauseOnHover: false,
      pauseOnDotsHover: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      cssEase: 'linear'
    });
  
  });

  
        