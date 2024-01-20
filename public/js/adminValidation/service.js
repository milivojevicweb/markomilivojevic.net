$(document).ready(function() {
    $(document).on('keyup','input',checkService);
    $(document).on('change','#profilePhoto',checkService);
});


function checkService(){
    var profilePhoto=$('#profilePhoto').val();
    var name=$('#serviceName').val();
    var text=$('#serviceText').val();
    var link=$('#serviceLink').val();
    var button=$("#submit");
    var reText=/[a-z]/;

    valid=true;

    if(profilePhoto == "") {
        valid = false;
        error("#imageButton");
    }else {
        success("#imageButton");

    }


    if(name == "") {
        valid = false;
        error("#serviceName");

    }else if(!reText.test(name)) {
        valid = false;
        error("#serviceName");
    }else {
        success("#serviceName");
    }

    if(text == "") {
        valid = false;
        error("#serviceText");
    }else if(!reText.test(text)) {
        valid = false;
        error("#serviceText");
    }else {
        success("#serviceText");
    }

    if(link == "") {
        valid = false;
        error("#serviceLink");

    }else if(!reText.test(link)) {
        valid = false;
        error("#serviceLink");
    }else {
        success("#serviceLink");
    }


    if(valid==false){
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
