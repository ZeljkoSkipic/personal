"use strict";

jQuery(document).ready(function ($) {
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
  $(".contact_trigger").on("click", function () {
    $(".form_wrap").fadeToggle();
    $(".form_wrap").toggleClass('open');
  });
  $(document).keyup(function (e) {
    if (e.keyCode == 27) {
      // Esc
      $(".form_wrap.open").fadeToggle();
      $(".form_wrap").removeClass('open');
    }
  });
});