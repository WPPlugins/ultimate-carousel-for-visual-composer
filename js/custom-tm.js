// Slick Carousal Slider
jQuery(document).on('ready', function() {
  jQuery(".tdt-slider").slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
    /*{
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },*/
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  	]
  });
});