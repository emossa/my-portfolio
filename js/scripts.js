function openMenu(){

	menu.toggleClass('is-open');
}
const icona = document.getElementById("container1__content__logo__icon-bar");
const menu = document.querySelector(".container1__content__menu");
 icona.addEventListener("click",  function(e){
 menu.classList.toggle('is-open');
});
var swiper = new Swiper('.swiper-container', {
	effect: 'coverflow',
	grabCursor: true,
	centeredSlides: true,
	slidesPerView: 'auto',
	coverflowEffect: {
		rotate: 50,
		stretch: 0,
		depth: 100,
		modifier: 1,
		slideShadows : true,
	},
	pagination: {
		el: '.swiper-pagination',
	},
	navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
});
