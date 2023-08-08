import './bootstrap';
import 'bootstrap/dist/js/bootstrap.min.js';
import './hamburger';
import './accordion';

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});


$('.autoplay').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });