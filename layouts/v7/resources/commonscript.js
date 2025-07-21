// ************** Document Ready Starts Here **************
$(document).ready(function () {
  // ************** Navbar Scroll Effect Starts Here **************
  $(window).on("scroll", function () {
    const $searchCont = $(".search-cont");
    if ($(this).scrollTop() > 10) {
      $searchCont.addClass("scrolled");
    } else {
      $searchCont.removeClass("scrolled");
    }
  });
  // ************** Navbar Scroll Effect Ends Here **************

  // ************** Dropdown Overlay Starts Here **************
  $(".top-navbar .dropdown").on("show.bs.dropdown", function () {
    $("#dropdownOverlay").fadeIn(100);
  });

  $(".top-navbar .dropdown").on("hide.bs.dropdown", function () {
    $("#dropdownOverlay").fadeOut(100);
  });
  // ************** Dropdown Overlay Ends Here **************

  // ************** FloatThead Scroll Fix on Dropdown Starts Here **************
  $(".more.dropdown").on("shown.bs.dropdown", function () {
    $(".floatThead-wrapper .ps-container").addClass("ps-visible");
  });

  $(".more.dropdown").on("hidden.bs.dropdown", function () {
    $(".floatThead-wrapper .ps-container").removeClass("ps-visible");
  });
  // ************** FloatThead Scroll Fix Ends Here **************

  // ************** MutationObserver for .ready .test Element Starts Here **************
  setTimeout(() => {
    const target = document.querySelector(".ready .test");
    if (target) {
      const observer = new MutationObserver(() => {
        target.removeAttribute("style");
      });
      observer.observe(target, {
        attributes: true,
        attributeFilter: ["style"],
      });
      console.log("MutationObserver attached after delay.");
    } else {
      console.log("Element not found after delay.");
    }
  }, 1000);
  // ************** MutationObserver Ends Here **************

  // ************** Dark/Light Mode Toggle Starts Here **************
  if (localStorage.getItem("theme") === "dark") {
    $("html").addClass("dark-mode");
  }

  $("#theme-toggle").on("click", function () {
    $("html").toggleClass("dark-mode");
    const newTheme = $("html").hasClass("dark-mode") ? "dark" : "light";
    localStorage.setItem("theme", newTheme);
  });
  // ************** Dark/Light Mode Toggle Ends Here **************

  // ************** Disable Body Scroll on Modal Open Starts Here **************
  // $(document).on("shown.bs.modal", function () {
  //   $("body").css("overflow", "hidden");
  // });

  // $(document).on("hidden.bs.modal", function () {
  //   $("body").css("overflow", "");
  // });
  // ************** Disable Body Scroll on Modal Open Ends Here **************
});
// ************** Document Ready Ends Here **************
