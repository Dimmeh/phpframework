$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});

var bg = jQuery(".fullScreen");
var windowWidth = 0;

jQuery(window).resize.bind("resizeBackground");

function resizeBackground() {
    if(windowWidth != jQuery(window).width()){
        windowWidth = jQuery(window).width();
        bg.height(jQuery(window).height());
    }
    requestAnimationFrame(this.resizeBackground.bind(this));
}
resizeBackground();

var nav = jQuery("#nav");
var appearMenu = 0;

nav.on("click", function(){
    var menu = jQuery("#menuContainer");
    if(appearMenu == 0){
        $("body").css("overflow", "hidden");
        menu.css("zIndex", "99");
        var widthValue;
        if(jQuery(window).width() < 500){
            widthValue = "60%"
        }
        else{
            widthValue = "40%"
        }
        menu.animate({
            width: widthValue
        }, 250,
            function(){
                $("#imgNav").attr('src', "images/close.png");
                $(".nav p").text("Sluiten");
                $(".menu").animate({
                    left: widthValue
            },150,
            function() {
                menu.children().animate({
                    opacity: "1"
                }, 250);
            })
        });
        appearMenu = 1;
    }else{
        $("body").css("overflow", "auto");
        $("#imgNav").attr('src', "images/hamburgerMenu.png");
        $(".nav p").text("menu");
        menu.css("zIndex","-1");
        menu.children().css("opacity", "0");
        $(".menu").animate({
            left: "0%"
        },100, function(){
            menu.animate({
                width: "0%"
            }, 110)
        });
        appearMenu = 0;
    }
});
var slide = jQuery(".slideContainer ul");
var margin = 0;
function swipe(){
    if(margin >= 0){
        slide.on("swipeRight", function(){
            margin++;
            margin.animate({
                marginLeft: margin
            });
        });
    }
    requestAnimationFrame(this.swipe.bind(this));
}
swipe();
console.log(margin);