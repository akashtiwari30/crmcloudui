// navbar scroll starts here 

window.addEventListener("scroll", function () {
    const searchCont = document.querySelector(".search-container-top");
    if (window.scrollY > 10) {
      searchCont.classList.add("scrolled");
    } else {
      searchCont.classList.remove("scrolled");
    }
  });

// navbar scroll ends here 


// dropdownOverlay starts here 
jQuery(document).ready(function () {
  jQuery('.top-navbar .dropdown').on('show.bs.dropdown', function () {
    jQuery('#dropdownOverlay').fadeIn(100);
  });

  jQuery('.top-navbar .dropdown').on('hide.bs.dropdown', function () {
    jQuery('#dropdownOverlay').fadeOut(100);
  });
});
// dropdownOverlay ends here 



// edit , delete , details dropdown of filter table right side section in every sub pages start here
$(document).ready(function () {
  $('.more.dropdown').on('shown.bs.dropdown', function () {
    $('.floatThead-wrapper .ps-container').addClass('ps-visible');
  });

  $('.more.dropdown').on('hidden.bs.dropdown', function () {
    $('.floatThead-wrapper .ps-container').removeClass('ps-visible');
  });

  

  setTimeout(() => {
  const target = document.querySelector('.ready .test');
  if (target) {
    const observer = new MutationObserver(() => {
      target.removeAttribute('style');
    });
    observer.observe(target, { attributes: true, attributeFilter: ['style'] });
    console.log('MutationObserver attached after delay.');
  } else {
    console.log('Element not found after delay.');
  }
}, 1000);




// for dark light mode starts here
jQuery(document).ready(function($) {
    // Load saved theme
    if (localStorage.getItem('theme') === 'dark') {
      $('html').addClass('dark-mode');
    }

    // Toggle theme on click
    $('#theme-toggle').on('click', function () {
      $('html').toggleClass('dark-mode');

      if ($('html').hasClass('dark-mode')) {
        localStorage.setItem('theme', 'dark');
      } else {
        localStorage.setItem('theme', 'light');
      }
    });
  });
// for dark light mode ends here



});
// edit , delete , details dropdown of filter table right side section in every sub pages ends here






