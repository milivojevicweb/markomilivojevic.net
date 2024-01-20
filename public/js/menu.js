$(document).ready(function(){
    $(document).on("click","#hamburger",openNav);
    $(document).on("click",".closebtn",closeNav);
})

function openNav() {
    $(".overlayBox").fadeIn();

}

function closeNav() {
    $(".overlayBox").fadeOut();

}
