




$(() => {
	// ====== [BEGIN] Toggle the sidebar on mobile version ======
	const btnMenu = document.getElementById("menu-icon-trigger");
	btnMenu.addEventListener("click", (e) => {
		e.preventDefault();
		document.querySelector('.menu-icon-wrapper').classList.toggle('open');
		document.querySelector('.nav-content').classList.toggle('is-active');
	});
	// ====== [END] Toggle the sidebar on mobile version ======

	// Enable bootstrap Tooltip
	$('[data-toggle="tooltip"]').tooltip();
});

