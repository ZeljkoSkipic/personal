"use strict";

jQuery(document).ready(function ($) {
  var panels = gsap.utils.toArray(".project_manager_box");
  panels.forEach(function (panel, i) {
    ScrollTrigger.create({
      trigger: panel,
      start: "top top",
      pin: i < panels.length - 1,
      // Pin only if it's not the last panel
      pinSpacing: false,
      onUpdate: function onUpdate(self) {
        var progress = self.progress; // Progress between 0 and 1
        gsap.to(panel, {
          scale: 1 - 0.15 * progress,
          // Shrinks to 50% at full progress
          opacity: 1 - progress,
          // Fades to 0 at full progress
          overwrite: "auto",
          // Avoid conflicts
          duration: 0 // Instant adjustments
        });
      }
    });
  });
});
"use strict";

jQuery(document).ready(function ($) {
  var $stickyElement = $(".header-main");

  // Get the initial offset position of the element
  var headerHeight = $stickyElement.outerHeight();
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
    $(".header-main").toggleClass('menu-open');
  });

  // Sub Menu Trigger

  $(".sub-menu-trigger").click(function () {
    $(this).parent().toggleClass('sub-menu-open');
    $(this).siblings(".sub-menu").slideToggle();
  });

  // Accordion

  $(".st_accordion-header").click(function () {
    $(this).siblings(".st_accordion-body").slideToggle();
    $(this).parent('.st_accordion-item ').toggleClass('open');
  });

  // Tabs
  jQuery(document).ready(function ($) {
    var $tabsNav = $('.st_tabs_nav ul');
    var $tabs = $tabsNav.find('li');
    var slider = $('<div class="slider"></div>');
    $tabsNav.append(slider);
    function updateSlider($activeTab) {
      var tabWidth = $activeTab.outerWidth();
      var tabLeft = $activeTab.position().left;
      slider.css({
        width: "".concat(tabWidth, "px"),
        transform: "translateX(".concat(tabLeft, "px)")
      });
    }

    // Initialize the first active tab and slider position
    var $firstTab = $tabs.first();
    $firstTab.addClass('active');
    updateSlider($firstTab);
    $('.st_tabs_nav a').click(function (e) {
      e.preventDefault();

      // Manage active class on tab navigation
      var $tabLabels = $(this.closest('.container')).find('.st_tabs_nav li');
      $tabLabels.removeClass('active');
      var $activeTab = $(this).parent();
      $activeTab.addClass('active');

      // Animate slider to the active tab
      updateSlider($activeTab);

      // Display active tab content with fade-in effect
      var currentTab = $(this).data('tab');
      var $tabsContent = $(this.closest('.container')).find('.st_tab');
      $tabsContent.removeClass('tab_active').hide(); // Hide all tabs and remove active class
      $tabsContent.each(function () {
        if ($(this).data('tab') === currentTab) {
          $(this).addClass('tab_active').fadeIn(400); // Add active class and fade in
        }
      });
    });
  });
});