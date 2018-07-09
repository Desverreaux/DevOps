// var overlayState = false;

// initOverlay();




// function toggleOverlay() {
//     overlayState ? disableOverlay() : enableOverlay();
//     overlayState = !overlayState
// }

// function initOverlay() {
//     $('.inputField').focus(function() {
//         $(this).next().css("width","100%");
//         $(this).next().addClass('SlideInLeft');
//     })
//     $('.inputField').blur(function() {
//         $(this).next().css("width","0%");
//         $(this).next().removeClass('SlideInLeft');
//     })
// }   

// function enableOverlay() {

//     $('#dimmingScreen').css("visibility", "visible");
//     $('#dimmingScreen').fadeIn("slow")
    
//     $("#contactForm").css("visibility", "visible");
//     $("#contactForm").addClass("bounce-in-top");

//     $("dimmingScreen").on("click", disableOverlay);

// }

// function disableOverlay() {

//     $('#dimmingScreen').fadeOut("slow")

//     $("#contactForm").css("visibility", "hidden");
//     $("#contactForm").removeClass("bounce-in-top");

//     //$("#contactElement").css("z-index", "-1");

//     $("dimmingScreen").off("click", disableOverlay);

// }

