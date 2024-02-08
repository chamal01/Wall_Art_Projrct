// JavaScript to control the typewriter effect
const typewriter = document.querySelector('h1');
const additionalTexts = document.querySelectorAll('.d-block');

typewriter.addEventListener('animationend', () => {
  typewriter.style.borderRight = 'none'; // Remove the cursor when typing is complete

  // Loop through the additional texts and reveal them with a delay
  additionalTexts.forEach((text, index) => {
    setTimeout(() => {
      text.style.display = 'inline-block';
      text.style.animation = 'fadein 1s';
    }, index * 1000); // Adjust the delay as needed
  });
});

//------------------------------------------ future product script


  document.addEventListener("DOMContentLoaded", function () {
    var mySwiper = new Swiper(".swiper-container", {
      loop: true, // Enable loop mode
      slidesPerView: 1, // Number of visible slides
      spaceBetween: 30, // Space between slides
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        // Responsive breakpoints for different screen sizes
        768: {
          slidesPerView: 2, // 2 slides visible on screens wider than 768px
        },
        992: {
          slidesPerView: 3, // 3 slides visible on screens wider than 992px
        },
      },
    });

    // Add mousemove event listener to the product section
    var productSection = document.querySelector(".popular-product");

    productSection.addEventListener("mousemove", function (event) {
      var x = event.clientX;
      var width = window.innerWidth;
      var threshold = 50; // Adjust this value for sensitivity

      if (x < threshold) {
        // Mouse reached left corner, go to the previous slide
        mySwiper.slidePrev();
      } else if (x > width - threshold) {
        // Mouse reached right corner, go to the next slide
        mySwiper.slideNext();
      }
    });
  });


    document.addEventListener("DOMContentLoaded", function () {
        // Get the current page's path
        var path = window.location.pathname;

        // Remove the trailing slash if present
        path = path.replace(/\/$/, "");

        // Get all navigation links
        var navLinks = document.querySelectorAll("#navbarNav .nav-link");

        // Loop through the navigation links
        for (var i = 0; i < navLinks.length; i++) {
            var link = navLinks[i];
            var linkPath = link.getAttribute("href");

            // Remove the trailing slash if present
            linkPath = linkPath.replace(/\/$/, "");

            // Check if the link's path matches the current page's path
            if (path === linkPath) {
                // Add the "active" class to the matching link
                link.classList.add("active");
            }
        }
    });

//------------------------------------products page---------------------------
    $(document).ready(function() {
      // Activate the carousel and set the interval to change slides every 3 seconds (3000 milliseconds)
      $('#myCarousel').carousel({
          interval: 3000
      });
  });