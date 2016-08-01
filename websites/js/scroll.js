$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
          event.preventDefault();
          $(this).ekkoLightbox();
      });

      $(document).on('click', 'a[href^="#"]',function (e) {
          e.preventDefault();

          var target = this.hash;
          var $target = $(target);

          $('html, body').stop().animate({
              'scrollTop': $target.offset().top
          }, 900, 'swing', function () {
              window.location.hash = target;
              this.collapse;
          });
      });