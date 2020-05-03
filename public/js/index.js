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


