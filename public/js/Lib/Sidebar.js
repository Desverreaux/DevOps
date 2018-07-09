/*TODO set it up so that if the bar is closed then hovering over it will pop over by a couple pixels just so that its more obvious that it can be opened

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
var navState = true;
var accentColor = "#242424"
const BAR_WIDTH_DEFAULT = "200px";

var mySidenav = document.getElementById('mySidenav');


initSidebar();

function initSidebar() {
    $('.noClick').click(function(e){ 
        e.stopPropagation()
    });
    initHover();

    $(document).ready( function() {
        $(".sideNavText").hide();
        closeNav();
    });
}

/*unfortunately there is no a:hover component for js to modify so i have to implement my own version of it if i want to change the color */
function initHover() { 
    let nb = document.getElementsByClassName("navButton");
    for(let item of nb) {
        item.onmouseenter = function() {highlight(item)};
        item.onmouseleave = function() {lowlight(item)};
    }

    let toHide = document.getElementsByClassName("sideNavText");
    
    for (let item of toHide) {
        item.style.visibility= "hidden";
        hideElement(item);
    }
}



function openNav() {
    navState = true;
   

    $(".sidenav").css("width",BAR_WIDTH_DEFAULT);
    $("#main").css("marginLeft", BAR_WIDTH_DEFAULT);


    // if(mySidenav != null) {
    //     mySidenav.style.width = BAR_WIDTH_DEFAULT;
    // }
    //     document.getElementById("main").style.marginLeft = BAR_WIDTH_DEFAULT;

    let toHide = document.getElementsByClassName("sideNavIcon");
    let toShow = document.getElementsByClassName("sideNavText");
    
    for (let item of toHide) {
        hideElement(item);
    }
    for (let item of toShow) {
        showElement(item);
    }

    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    navState = false;
    
    // if(mySidenav != null) {
    //     mySidenav.style.width = BAR_WIDTH_DEFAULT;
    // }
    // document.getElementById("main").style.marginLeft = "64px";

    $(".sidenav").css("width","64px");
    $("#main").css("marginLeft", "64px");

    
    let toShow = document.getElementsByClassName("sideNavIcon");
    let toHide = document.getElementsByClassName("sideNavText");
    
    for (let item of toHide) {
        hideElement(item);
    }
    for (let item of toShow) {
        showElement(item);
    }

    $("body").css("backgroundColor", "White");
    // document.body.style.backgroundColor = "white";
}

function hideElement(node) {
    $(node).animate({marginLeft: '-=' + BAR_WIDTH_DEFAULT}, 200, function() {
        $(node).fadeOut();
    });
}

function showElement(node) {
    $(node).show().fadeIn();
    $(node).animate({ marginLeft: '0px'}, 200);
}

function toggleNav() {
    navState ? closeNav() : openNav(); 
}

function highlight(item) {
    if(navState) {
        item.style.backgroundColor = accentColor;
    }
}

/* lowlight is simple the reverse of highlight */
function lowlight(item) {
    if(navState) {
        item.style.backgroundColor = "#111111";
    }
}



