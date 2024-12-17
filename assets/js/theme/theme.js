jQuery(document).ready(function ($) {

	const $stickyElement = $(".header-main");

	// Get the initial offset position of the element
	let headerHeight = $stickyElement.outerHeight();

	$(window).on("scroll", function () {
		if ($(window).scrollTop() >= headerHeight) {
		headerHeight = $stickyElement.outerHeight();
		$stickyElement.addClass("is-pinned");
		} else {
		headerHeight = $stickyElement.outerHeight();
		$stickyElement.removeClass("is-pinned");
		}
	});

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

});
