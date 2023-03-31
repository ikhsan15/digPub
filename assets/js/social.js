// INSERT JS HERE


// SOCIAL PANEL JS
const floating_btn = document.querySelector('.floating-btn');
const close_btn = document.querySelector('.close-btn');
const social_panel_container = document.querySelector('.social-panel-container');

floating_btn.addEventListener('click', () => {
	social_panel_container.classList.toggle('visible')
});

close_btn.addEventListener('click', () => {
	social_panel_container.classList.remove('visible')
});


// BACK TO TOP
// $(document).ready(function () {
$(window).scroll(function () {
	if ($(this).scrollTop() > 100) {
		$('#scroll').fadeIn();
	} else {
		$('#scroll').fadeOut();
	}
});

$('#scroll').click(function () {
	$("html, body").animate({
		scrollTop: 0
	}, 600);
	return false;
});
// });
