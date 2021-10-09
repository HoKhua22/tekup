var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	var owl = $('.featured-carousel');

  $('.featured-carousel').owlCarousel({
  		animateOut: 'fadeOut',
      center: false,
      items: 1,
      loop: true,
      stagePadding: 0,
      margin: 0,
      smartSpeed: 1500,
      autoplay: false,
      dots: false,
      nav: false,
      navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
  });

  $('.thumbnail li').each(function(slide_index){
      $(this).click(function(e) {
          owl.trigger('to.owl.carousel',[slide_index,1500]);
          e.preventDefault();
      })
  })

  owl.on('changed.owl.carousel', function(event) {
      $('.thumbnail li').removeClass('active');
      $('.thumbnail li').eq(event.item.index - 2).addClass('active');
  })

})(jQuery);
