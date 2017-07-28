//карусель
$('.carousel').bxSlider({
  minSlides: 1,
  maxSlides: 4,
  slideWidth: 300,
  slideMargin: 10,
  pager: false
});
/*var carousel = $('.carousel');
var crs = function() {
  if ($(window).width() > 400) {
	carousel.bxSlider({
		minSlides: 1,
		maxSlides: 4,
		slideWidth: 320,
		slideMargin: 10,
		pager: false
	})
  } else {
	carousel.destroySlider();
  }
};
crs();
$(window).resize(crs);*/
//слайдер
$('.slider').bxSlider({
  pagerCustom: '#bx-pager'
});
//Мобильное меню
// $('.menu-button').click(function(){
// 	$('header nav').slideToggle();
// });
// $(window).resize(function(){
// 	$('header nav').css('display', '');
	
// });

