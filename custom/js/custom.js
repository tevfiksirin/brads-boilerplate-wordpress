jQuery(document).ready(function ($) {
        
  const lightbox = GLightbox({
    selector: ".knowHowGallery",
    touchNavigation: true,
    loop: true,
    zoomable: true,
  });
  const lightboxVideoSingle = GLightbox({
    selector: ".knowHowVideo",

  });  

});
    jQuery('.carousel').slick({
      slidesToShow: 1,
      dots:false,
      autoplay: true,
      autoplaySpeed: 4000,
      prevArrow: false,
      nextArrow: false
      });

      const swiper = new Swiper('.metal', {
        slidesPerView: 1,
        spaceBetween: 30,
        autoplay: {
          delay: 5000,
        },
        loop: true,
        keyboard: {
          enabled: true,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          dynamicBullets: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
      window.document.onkeydown = function(e) {
        if (!e) {
          e = event;
        }
        if (e.keyCode == 27) {
          lightbox_close();
        }
      }
      
      function lightbox_open() {
        var lightBoxVideo = document.getElementById("VisaChipCardVideo");
        window.scrollTo(0, 0);
        document.getElementById('light').style.display = 'block';
        document.getElementById('fade').style.display = 'block';
        lightBoxVideo.play();
      }
      
      function lightbox_close() {
        var lightBoxVideo = document.getElementById("VisaChipCardVideo");
        document.getElementById('light').style.display = 'none';
        document.getElementById('fade').style.display = 'none';
        lightBoxVideo.pause();
      }
