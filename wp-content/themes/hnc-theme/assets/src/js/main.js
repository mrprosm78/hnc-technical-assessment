import General from './_generalScripts';

const App = {

	/**
	 * App.init
	 */
	init() {
		// General scripts
		function initGeneral() {
			return new General();
		}
		initGeneral();
	}

};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});


window.addEventListener("DOMContentLoaded", function (e) {
	$(".carousel").slick({
	  slidesToShow: 5,
	  prevArrow:
		'<button class="previous-button is-control">' +
		'  <span class="fas fa-angle-left" aria-hidden="true"></span>' +
		'  <span class="sr-only">Previous slide</span>' +
		"</button>",
	  nextArrow:
		'<button class="next-button is-control">' +
		'  <span class="fas fa-angle-right" aria-hidden="true"></span>' +
		'  <span class="sr-only">Next slide</span>' +
		"</button>",
	  responsive: [
		{
		  breakpoint: 575,
		  settings: {
			slidesToShow: 2
		  }
		},
		{
		  breakpoint: 375,
		  settings: {
			slidesToShow: 1
		  }
		}
	  ]
	});
  });
  
 jQuery('.subscriptions').click(function() {
    $(this).removeClass('btn-outline-primary');
    $(this).addClass('btn-primary');
});