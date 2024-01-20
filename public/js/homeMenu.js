$(document).ready(function(){
    window.onscroll = function() {scrollFunction()};
})

function scrollFunction() {

    if(220<document.body.scrollTop || 200<document.documentElement.scrollTop){
        document.querySelector("header").style.position="fixed";
        document.querySelector("header").style.backgroundColor="rgba(0,0,0,0.8)";
        document.querySelector("header").style.marginTop="0px";
        document.querySelector("header").style.backdropFilter="saturate(180%) blur(20px)";
        document.querySelector("header").style.webkitBackdropFilter="saturate(180%) blur(20px)";
        document.querySelector("header").style.padding="9px 0px 2px 0px";
        document.querySelector("#hamburger").style.marginTop="7px";
        document.querySelector("#logo img").style.width="28px";
        document.querySelector("#logo img").style.margin="3px 0px"
        document.querySelector("#headerLinks").style.marginTop="11px"
        document.querySelector("#logo img").src = "images/logoWhite.webp";
        $(".cool-link").css({'color':'#fff'});

        if(720<document.body.scrollTop || 700<document.documentElement.scrollTop){
            document.querySelector("header").style.backgroundColor="rgba(255,255,255,0.85)";
            document.querySelector("#logo img").src = "images/logoBlack.webp";
            $(".cool-link").css({'color':'#000'});
            $("#hamburger .hamburger").css({'backgroundColor':'#000'});
        }


            if((document.querySelector(".container3").offsetTop-100)<document.body.scrollTop || (document.querySelector(".container3").offsetTop-100)<document.documentElement.scrollTop){
                document.querySelector("header").style.backgroundColor="rgba(0,0,0,0.85)";
                document.querySelector("#logo img").src = "images/logoWhite.webp";
                $(".cool-link").css({'color':'#fff'});
                $("#hamburger .hamburger").css({'backgroundColor':'#fff'});
            }

            if((document.querySelector("#googleSecurity").offsetTop-100)<document.body.scrollTop || (document.querySelector("#googleSecurity").offsetTop-100)<document.documentElement.scrollTop){
                document.querySelector("header").style.backgroundColor="rgba(255,255,255,0.85)";
                document.querySelector("#logo img").src = "images/logoBlack.webp";
                $(".cool-link").css({'color':'#000'});
                $("#hamburger .hamburger").css({'backgroundColor':'#000'});
            }

    }else{
        document.querySelector("header").style.position="absolute";
        document.querySelector("header").style.backgroundColor="transparent";
        // document.querySelector("header").style.boxShadow="none";
        document.querySelector("header").style.marginTop="30px"
        document.querySelector("header").style.padding="0px";
        document.querySelector("#hamburger").style.marginTop="14px";
        document.querySelector("#logo img").style.width="31px";
        document.querySelector("#logo img").style.margin="10px 0px"
        document.querySelector("#headerLinks").style.marginTop="20.8px"
        document.querySelector("#logo img").src = "images/logoWhite.webp";
        $(".cool-link").css({'color':'#fff'});
        $("#hamburger .hamburger").css({'backgroundColor':'#fff'});

    }

}
