$(function() {
	$(".navbar-burger").click(function() { $(".navbar-burger").toggleClass("is-active"); $(".navbar-menu").toggleClass("is-active"); });
	var carouselOptions = {
		effect: 'fade',
		autoplay: true,
		autoplaySpeed: 6000,
		loop: true,
		navigation: false,
		navigationKeys: false,
		duration: 1500,
		pagination: false
	}
	var calendarOptions = {
		color: 'info',
		displayMode: 'dialog'
	}
	bulmaCarousel.attach('.hero-carousel', carouselOptions);
	bulmaCalendar.attach('[type="date"]', calendarOptions);
	bulmaQuickview.attach();
	bulmaToast.toast({
		message: 'Hello There',
		type: 'is-success',
		dismissible: true,
		animate: { in: 'fadeIn', out: 'fadeOut' }
	});
});