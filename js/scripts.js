/*!
* Start Bootstrap - Grayscale v7.0.5 (https://startbootstrap.com/theme/grayscale)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-grayscale/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

// multiform
$(document).ready(function() {
	$('#second').addClass('hide');

	$(".next_btn").click(function() {

	$('#second').addClass('show');
	$('#second').removeClass('hide');
	$('#first').addClass('hide');

	
	});

	$(".pre_btn").click(function() { 
	
	$('#second').addClass('hide');
	$('#second').removeClass('show');
	$('#first').addClass('show');
	$('#first').removeClass('hide');

	});

	// Validating All Input And Textarea Fields
	$("#submittodb").click(function(e) {
	if ($('input').val() == "" || $('textarea').val() == "") {
	swal("All fields Are Mendetory", "go back and fill all the fields");
	swal({
		title: "All fields Are Mendetory",
		text: "go back and fill all the fields",
		icon: "warning",
		dangerMode: true,
	  })
	return false;
	} else {
	return true;
	}
	});

	});