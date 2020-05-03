$(window).load(function() {
     // $(".loader").fadeOut("1000"); 
 });

$(document).ready(function(){
                $('#nav-open').click(function(){
                    $('.burger-menu').css('display', 'none');
                    $('.nav-open').css('display', 'flex');
                });

                $('#nav-close').click(function(){
                    $('.nav-open').css('display', 'none');
                    $('.burger-menu').css('display', 'flex');
                });

                $('#nav-open-mobile').click(function(){
                    $('.nav-mobile-close-mobile').fadeOut('1000');
                    $('.nav-open-mobile').fadeIn('1000');
                });

                 $('#nav-close-mobile').click(function(){
                    $('.nav-open-mobile').fadeOut('1000');
                    $('.nav-mobile-close-mobile').fadeIn('1000');
                });

                //  $('#nav-open-mobile').click(function(){
                //     $('.nav-mobile-close-mobile').css('display', 'none');
                //     $('.nav-open-mobile').css('display', 'flex');
                // });

                // $('#nav-close-mobile').click(function(){
                //     $('.nav-open-mobile').css('display', 'none');
                //     $('.nav-mobile-close-mobile').css('display', 'flex');
                // });


                
                

            });

// parallax
const parallax = document.querySelectorAll("#parallax");
        window.addEventListener("scroll", function() {
            let offset = window.pageYOffset;
            parallax.forEach(function(prllx, i) {
                console.log("Parallax " + i + ": " + prllx.offsetTop + " / Window: " + offset);
                prllx.style.backgroundPositionY = (offset - prllx.offsetTop) * 0.8 + "px";
            })
        });


