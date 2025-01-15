$(document).ready(function() {
    try {
        // Toggle navigation
        $('.toggle').click(function() {
            $('.nav').slideToggle('normal'); // Toggle the entire navigation
        });
    } catch (error) {
        console.error("Error in toggle navigation:", error);
    }

    try {
        // Navigation link selection
        $('.nav li a').click(function() {
            $('.nav li a').removeClass('select');
            $(this).addClass('select');
        });
    } catch (error) {
        console.error("Error in navigation link selection:", error);
    }

    try {
        // Initialize Owl Carousel
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            nav: true,
            margin: 40,
            autoplay: false, // Disable auto-scrolling
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                960: {
                    items: 2
                },
                1200: {
                    items: 2
                }
            }
        });

        // Completely disable mouse wheel control
        $('.owl-carousel').on('mousewheel DOMMouseScroll', function(e) {
            e.preventDefault();
            e.stopPropagation();
        });

    } catch (error) {
        console.error("Error initializing Owl Carousel:", error);
    }
});
