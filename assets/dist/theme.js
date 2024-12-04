"use strict";

jQuery(document).ready(function ($) {
  gsap.registerPlugin(ScrollTrigger);
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
    $(".menu-main-container").slideToggle();
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

  $('.st_tabs_nav li:first-child').addClass('active');
  $('.st_tabs_nav a').click(function (e) {
    e.preventDefault();
    // Check for active
    var tabLabels = $(this.closest('.container')).find('.st_tabs_nav li');
    tabLabels.removeClass('active');
    $(this).parent().addClass('active');

    // Display active tab
    var currentTab = $(this).data('tab');
    var currentsTabContent = $(this.closest('.container')).find('.st_tab');
    currentsTabContent.hide();
    $.each(currentsTabContent, function (key, tab) {
      var tabContentIndex = $(tab).data('tab');
      if (tabContentIndex === currentTab) {
        $(tab).show();
      }
    });
    return false;
  });
});