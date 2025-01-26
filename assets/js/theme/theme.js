jQuery(document).ready(function ($) {

    // Mobile navigation

    $(".menu-toggle").click(function () {
        $(".menu-main-wrap").fadeToggle();
        $(this).toggleClass('menu-open');
		$(".header-main").toggleClass('menu-open')
    });


    // Sub Menu Trigger

    $( ".sub-menu-trigger" ).click(function() {
		$( this ).parent().toggleClass('sub-menu-open')
		$( this ).siblings(".sub-menu").slideToggle();
	});

	// Accordion

	$(".st_accordion-header").click(function () {
		$(this).siblings(".st_accordion-body").slideToggle();
		$(this).parent('.st_accordion-item ').toggleClass('open')
	});

	// Tabs
	jQuery(document).ready(function ($) {
		const $tabsNav = $('.st_tabs_nav ul');
		const $tabs = $tabsNav.find('li');
		const slider = $('<div class="slider"></div>');
		$tabsNav.append(slider);

		function updateSlider($activeTab) {
			const tabWidth = $activeTab.outerWidth();
			const tabLeft = $activeTab.position().left;
			slider.css({
				width: `${tabWidth}px`,
				transform: `translateX(${tabLeft}px)`
			});
		}

		// Initialize the first active tab and slider position
		const $firstTab = $tabs.first();
		$firstTab.addClass('active');
		updateSlider($firstTab);

		$('.st_tabs_nav a').click(function (e) {
			e.preventDefault();

			// Manage active class on tab navigation
			const $tabLabels = $(this.closest('.container')).find('.st_tabs_nav li');
			$tabLabels.removeClass('active');
			const $activeTab = $(this).parent();
			$activeTab.addClass('active');

			// Animate slider to the active tab
			updateSlider($activeTab);

			// Display active tab content with fade-in effect
			const currentTab = $(this).data('tab');
			const $tabsContent = $(this.closest('.container')).find('.st_tab');
			$tabsContent.removeClass('tab_active').hide(); // Hide all tabs and remove active class
			$tabsContent.each(function () {
				if ($(this).data('tab') === currentTab) {
					$(this).addClass('tab_active').fadeIn(400); // Add active class and fade in
				}
			});
		});
	});

	$( ".contact_trigger" ).on( "click", function() {
		$( ".form_wrap" ).fadeToggle();
		$( ".form_wrap" ).toggleClass('open');
	  } );

	  $(document).keyup(function(e) {
		if (e.keyCode == 27) { // Esc
			$( ".form_wrap.open" ).fadeToggle();
			$( ".form_wrap" ).removeClass('open');
		}
	});



	(function() {
		function onTidioChatApiReady() {
		window.tidioChatApi.hide();
		window.tidioChatApi.on("close", function() {
		window.tidioChatApi.hide();
		});
		}

		if (window.tidioChatApi) {
		window.tidioChatApi.on("ready", onTidioChatApiReady);
		} else {
		document.addEventListener("tidioChat-ready", onTidioChatApiReady);
		}

		document.querySelector(".chat-button, .chat-button-floating").addEventListener("click", function() {
		window.tidioChatApi.show();
		window.tidioChatApi.open();
		});
	   })();


});


document.addEventListener('DOMContentLoaded', function () {
  // Select all buttons with the class 'contact_trigger'
  const buttons = document.querySelectorAll('.contact_trigger');
  const dropdown = document.getElementById('wpforms-303-field_5');

  // Add click event listeners to each button
  buttons.forEach(button => {
    button.addEventListener('click', function () {
      const selectedOption = button.getAttribute('data-option'); // Get the value from the button's data-option

      if (selectedOption === 'reset') {
        // Reset the dropdown to its placeholder option
        dropdown.value = '';
      } else if (selectedOption) {
        // Set the dropdown's value to the selected option
        dropdown.value = selectedOption;
      }
    });
  });
});

document.addEventListener("scroll", function () {
	const elements = document.querySelectorAll(".mob_bot_bar");
	elements.forEach(element => {
	  if (window.scrollY >= window.innerHeight) { // Check if scrolled beyond 100vh
		element.classList.add("visible");
	  } else {
		element.classList.remove("visible");
	  }
	});
  });
