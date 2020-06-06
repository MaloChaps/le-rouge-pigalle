$(document).ready(function(){
                $('#nav-open').click(function(){
                    $('.nav-burger').css('display', 'none');
                    $('.nav-open').css('display', 'flex');
                });

                $('#nav-close').click(function(){
                    $('.nav-open').css('display', 'none');
                    $('.nav-burger').css('display', 'flex');
                });

                $('#nav-open-mobile').click(function(){
                    $('.nav-mobile-close-mobile').fadeOut('1000');
                    $('.nav-open-mobile').fadeIn('1000');
                });

                 $('#nav-close-mobile').click(function(){
                    $('.nav-open-mobile').fadeOut('1000');
                    $('.nav-mobile-close-mobile').fadeIn('1000');
                });
                

                $('#upcoming-click').click(function(){
                    $('.nav-open-mobile').fadeOut('1000');
                    $('.nav-mobile-close-mobile').fadeIn('1000');
                });

                 $('#friends-click').click(function(){
                    $('.nav-open-mobile').fadeOut('1000');
                    $('.nav-mobile-close-mobile').fadeIn('1000');
                });

                 $('#jetaime-click').click(function(){
                    $('.nav-open-mobile').fadeOut('1000');
                    $('.nav-mobile-close-mobile').fadeIn('1000');
                });



                
                

            });

// parallax
const parallax = document.querySelectorAll("#parallax");
        window.addEventListener("scroll", function() {
            let offset = window.pageYOffset;
            parallax.forEach(function(prllx, i) {
                console.log("Parallax " + i + ": " + prllx.offsetTop + " / Window: " + offset);
                prllx.style.backgroundPositionY = (offset - prllx.offsetTop) * 0.3 + "px";
            })
        });

        



// scroll reveal anime
const sr = ScrollReveal();

sr.reveal('#logo-hero', {
	 delay: 0,
    duration: 2000,
    distance: "150px",
    origin: "bottom"
});

sr.reveal('#title-upcoming', {
	 delay: 0.2,
    duration: 2000,
    distance: "150px",
    origin: "bottom"
});

sr.reveal('#line-upcoming', {
	 delay: 0.2,
    duration: 2000,
    distance: "150px",
    origin: "bottom"
});


sr.reveal('#subtitle-upcoming', {
	 delay: 0.2,
    duration: 2000,
    distance: "150px",
    origin: "bottom"
});

sr.reveal('#paragraphe-upcoming', {
	 delay: 0.2,
    duration: 2000,
    distance: "150px",
    origin: "bottom"
});

sr.reveal('#btn-upcoming', {
	 delay: 0.2,
    duration: 2000,
    distance: "150px",
    origin: "bottom"
});


sr.reveal('.video-section', {
	 delay: 0.2,
    duration: 2000,
    distance: "150px",
    origin: "bottom"
});

sr.reveal('.cover-section', {
	 delay: 0.2,
    duration: 2000,
    distance: "150px",
    origin: "bottom"
});

sr.reveal('.love-section', {
	 delay: 0.2,
    duration: 2000,
    distance: "150px",
    origin: "bottom"
});

sr.reveal('.audit-section', {
	 delay: 0.2,
    duration: 2000,
    distance: "150px",
    origin: "bottom"
});

sr.reveal('.red-section', {
	 delay: 0.2,
    duration: 2000,
    distance: "150px",
    origin: "bottom"
});

sr.reveal('.friends-section', {
	 delay: 0.2,
    duration: 2000,
    distance: "150px",
    origin: "bottom"
});

sr.reveal('footer', {
	 delay: 0.2,
    duration: 2000,
    distance: "0px",
    origin: "bottom"
});


sr.reveal('.audit-section', {
     delay: 0.2,
    duration: 2000,
    distance: "0px",
    origin: "bottom"
});







