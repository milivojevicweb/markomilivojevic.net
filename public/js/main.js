$(document).ready(function(){
    window.onscroll = function() {scrollFunction()};
    currentYear();
    $(document).on('click','#mouse',scrollNext);
    $(document).on('click','#buttonBenefits',scrollBenefits);
    hiddeLogin();
})

function scrollFunction() {

    if(220<document.body.scrollTop || 200<document.documentElement.scrollTop){
        document.querySelector("header").style.position="fixed";
        document.querySelector("header").style.backgroundColor="rgba(255,255,255,0.9)";
        document.querySelector("header").style.marginTop="0px";
        document.querySelector("header").style.backdropFilter="saturate(180%) blur(20px)";
        document.querySelector("header").style.webkitBackdropFilter="saturate(180%) blur(20px)";
        document.querySelector("header").style.padding="9px 0px 2px 0px";
        document.querySelector("#logo img").style.width="28px";
        document.querySelector("#logo img").style.margin="3px 0px"
        document.querySelector("#headerLinks").style.marginTop="11px"
        $(".cool-link").css({'color':'#fff'});
    }else{
        document.querySelector("header").style.position="absolute";
        document.querySelector("header").style.backgroundColor="transparent";
        // document.querySelector("header").style.boxShadow="none";
        document.querySelector("header").style.marginTop="25px"
        document.querySelector("header").style.padding="0px";
        document.querySelector("#logo img").style.width="31px";
        document.querySelector("#logo img").style.margin="10px 0px"
        document.querySelector("#headerLinks").style.marginTop="20.8px"
        $(".cool-link").css({'color':'#fff'});

    }

}

$(window).scroll(function(){
    var skrolovano = $(this).scrollTop();
    if(skrolovano > 700){
    $('#scrollToTop').fadeIn();
    } else {
    $('#scrollToTop').fadeOut();
    }
});

$('#scrollToTop').click(function(){
    $('html').animate({scrollTop: 0}, 2000);
});

function currentYear(){
    var date= new Date();
    var year=date.getFullYear();
    $("#year").html(year);
}



function scrollNext(){
    $('html').animate({scrollTop: 750}, 750);
}

function scrollBenefits(){
    var benefits=document.querySelector(".container3").offsetTop-50;
    $('html').animate({scrollTop: benefits}, 2000);
}

function hiddeLogin(){
    $("#hiddenLogin").hide();
    $("#hiddenLoginButton").click(function(){
        $("#hiddenLogin").toggle("1000");
    });
}

