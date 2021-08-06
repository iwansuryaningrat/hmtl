// ========== dropdown menu hover ==========
document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
	if (window.innerWidth > 992) {

		document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){
			everyitem.addEventListener('mouseover', function(e){
				let el_link = this.querySelector('a[data-bs-toggle]');
				const iconRotate = document.querySelector('.icofont-simple-down');

				if(el_link != null){
					let nextEl = el_link.nextElementSibling;
					el_link.classList.add('show');
					nextEl.classList.add('show');
					iconRotate.style.transform = 'rotate(180deg)';
				}
			});
			everyitem.addEventListener('mouseleave', function(e){
				let el_link = this.querySelector('a[data-bs-toggle]');
				const iconRotate = document.querySelector('.icofont-simple-down');

				if(el_link != null){
					let nextEl = el_link.nextElementSibling;
					el_link.classList.remove('show');
					nextEl.classList.remove('show');
					iconRotate.style.transform = 'rotate(0deg)';
				}
			});
		});
	}
// end if innerWidth
});

// ========== active and remove menu ==========
const navLink = document.querySelectorAll('.nav-link');
const dropLink = document.querySelectorAll('.dropdown-item');
const dropToggleLink = document.querySelector('.dropdown-toggle');

function linkActive() {
	navLink.forEach(n => n.classList.remove('active'));
	dropLink.forEach(n => n.classList.remove('active'));
	this.classList.add('active');
}

navLink.forEach(n => n.addEventListener('click', linkActive));

// active and remove menu dropdown
function linkDropActive() {
	dropLink.forEach(n => n.classList.remove('active'));
	navLink.forEach(n => n.classList.remove('active'));
	this.classList.add('active');
	dropToggleLink.classList.add('active');
}

dropLink.forEach(n => n.addEventListener('click', linkDropActive));

// ========== navbar on scroll ==========
const navBar = document.querySelector('.navbar');
const dropMenu = document.querySelector('.dropdown-menu');
// show background navbar
window.addEventListener('scroll', function() {
	navBar.classList.toggle('bg-nav', window.scrollY > 100);
	dropMenu.classList.toggle('down', window.scrollY > 100);
});

// hide and show navbar in scroll
let scrollPrevious = window.pageYOffset;
window.onscroll = function() {
	let scrollCurrent = window.pageYOffset;
	if (scrollPrevious < scrollCurrent && scrollPrevious > 150) {
		navBar.style.top = '-86px';
	}
	 else {
		navBar.style.top = '0';
	}

	scrollPrevious = scrollCurrent;
};

// navbar mobile background
const navToggler = document.querySelector('.navbar-toggler');
navToggler.addEventListener('click', function(){
	if (window.scrollY < 100) {
		navBar.classList.toggle('mobile-nav');
	}
});