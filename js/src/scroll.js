export default () => {
    $('a[href*="#"]:not([href="#"])').click(function(e) {
      e.preventDefault()

      if (window.location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//,'') && window.location.hostname == this.hostname) {
        let target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });	
}