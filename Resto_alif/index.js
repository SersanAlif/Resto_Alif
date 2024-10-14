$(document).ready(function () {
	var lastScrollTop = 0; // Menyimpan posisi scroll sebelumnya
	var navbar = $("#navbar");

	$(window).scroll(function () {
		var scrollTop = $(this).scrollTop(); // Posisi scroll saat ini

		if (scrollTop > lastScrollTop) {
			// Jika scroll ke bawah
			navbar.addClass("navbar-hidden"); // Menyembunyikan navbar
		} else {
			// Jika scroll ke atas
			navbar.removeClass("navbar-hidden"); // Menampilkan navbar
		}
		lastScrollTop = scrollTop; // Memperbarui posisi scroll terakhir
	});

	// Smooth scrolling untuk tautan navbar
	$(".navbar-nav a").on("click", function (event) {
		event.preventDefault();
		var target = $(this).attr("href");
		$("html, body").animate(
			{
				scrollTop: $(target).offset().top,
			},
			500
		);
	});
});
const panorama = new PANOLENS.ImagePanorama("images/pasta.png"); // Replace with the path to your 360-degree image
const viewer = new PANOLENS.Viewer({
	container: document.querySelector("#panorama-container"),
	autoRotate: true, // Automatically rotate the view
	autoRotateSpeed: 0.5, // Adjust rotation speed
});

// Add the panorama image to the viewer
viewer.add(panorama);

// You can also add event listeners for interactivity
panorama.addEventListener("enter", function () {
	console.log("User has entered the virtual tour!");
});
