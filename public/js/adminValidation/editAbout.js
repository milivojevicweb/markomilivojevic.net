$(document).ready(function() {
    $(document).on('keyup','textarea',checkParam);
});

function checkParam(){
    var text1=$("#serviceText1").val();
    var text2=$("#serviceText2").val();
    var button=$("#submit")
    var reText=/[a-z]/;

    console.log("asas");

    var status=true;

    if(text1 == "") {
        status = false;
        error("#serviceText1");

    } else if(!reText.test(text1)) {
        status = false;
        error("#serviceText1");
    } else {
        success("#serviceText1");
    }

    if(text2 == "") {
        status = false;
        error("#serviceText2");

    } else if(!reText.test(text2)) {
        status = false;
        error("#serviceText2");
    } else {
        success("#serviceText2");
    }


    if(status==false){
        $(button).prop( "disabled", true );
        $(button).addClass("buttonDisable");
    }else{
        $(button).prop( "disabled", false );
        $(button).removeClass("buttonDisable");
    }



}

function error(name){
    $(name).addClass("errorReg");
    $(name).removeClass("successReg");
}

function success(name){
    $(name).removeClass("errorReg");
    $(name).addClass("successReg");
}
