jQuery(document).ready(function () {

  
  
  jQuery('.carousel').carousel({
    // verander het cijfer bij interval om de post langer of korter te laten zien.
    // het gaat in milisecondes, dus 4000 = 4 seconde.
    interval: 1000000,
    pause: 'false'
  });
  
  

  jQuery('#carousel-example-generic').on('wheel', function (e) {
    if (e.originalEvent.deltaY >= 50) {
      jQuery(this).carousel('next');
    } else if (e.originalEvent.deltaY <= -50) {
      jQuery(this).carousel('prev');
    }
  });

  jQuery('.carousel').swipe({
// , distance, duration, , fingerData
    swipe: function (event, direction) {

      if (direction === 'up') {jQuery(this).carousel('next');}
      if (direction === 'down') {jQuery(this).carousel('prev');}

    },
    allowPageScroll: 'vertical'

  });

  jQuery('.navbar-toggle').on('click', function () {
    jQuery(this).toggleClass('active');
  });

  jQuery('.home .entry-content p, .category .entry-content p, .post-template-default .entry-content p').each(function () {
    var cal = jQuery(this);
    var texts = jQuery(this).text().split(' ');
    cal.empty();
    jQuery.each(texts, function (i, text) {
      cal.append('<span class="' + (i === 0 ? 'leftText' : 'rightText') + '" >' + text + '</span>');
    });
  });

  jQuery('.item').first().addClass('active');

  jQuery('.item:first-child').each(function (i) {
    if (i === 0) {
      jQuery(this).addClass('active');
    }
  });

});