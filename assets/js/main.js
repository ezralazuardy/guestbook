$(function() {
	var options = {
		loop: true,
		initialSlide: 0,
		navigation: false,
		navigationKeys: false,
		effect: 'fade',
		autoplay: true,
		autoplaySpeed: 5000,
		duration: 600,
		pagination: false
	}
	var carousels = bulmaCarousel.attach('.hero-carousel', options);
	bulmaToast.toast({
		message: 'Hello There',
		type: 'is-success',
		dismissible: true,
		animate: { in: 'fadeIn', out: 'fadeOut' }
	});
});