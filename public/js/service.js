$(document).ready(function() {


    $(document).on("click",".pag", function(event){
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        $('#hidden_page').val(Number(page)+1);
        fetch_data(page);
       });



});


function fetch_data(page){
    var paginationNumber=Number(page)*6;
    var currentPage=1;

    $.ajax({
        url:"/projects/fetch_data?page="+currentPage,
        dataType:"JSON",
        type:"GET",
        data:{
            paginationNumber:paginationNumber
        },
        success:function(data){
            printService(data);
            printPagination(data);
        },error:ajaxError
    })
}

// function printPagination(data){
//     var page=$('#hidden_page').val();
//     pagIspis="";
//     for(var i=1;i<=Math.ceil(data.total/6);i++){
//         if(page==i){
//             pagIspis+=`<li><a class="pag activePagination"  href="page=${i}">${i}</a></li>`;
//         }else{
//             pagIspis+=`<li><a class="pag"  href="page=${i}">${i}</a></li>`;
//         }
//     }

//     $(".pagination").html(pagIspis);
// }

function printPagination(data){
    var page=$('#hidden_page').val();
    pagIspis="";
    if(Math.ceil(data.total/6)>=page){
        pagIspis+=`<li><a target="_self" rel="follow" href="page=${page}" class="pag link linkPagination">Load more projects +</a></li>`;
        console.log(Math.ceil(data.total/6));
        console.log(page);
    }


    $(".pagination").html(pagIspis);
}

function ajaxError(greska, status, statusText){
    console.error('GRESKA AJAX: ');
    console.log(status);
    console.log(statusText);
    if(greska.status == 500){
        console.log(greska.parseJSON);
        alert(greska.parseJSON.poruka);
    }
    else if(greska.status == 400){
        alert('Niste poslali ispravno parametre!')
    }
}

function printService(data){
    let html = "";
    for(let item of data.data){
        html += `
        <a class="project" target="_self" rel="follow" href="/projects/${item.idService}">
            <div class="projectPlus">
                <div class="plusContent">
                    <h1>
                        View project
                    </h1>
                </div>
            </div>
            <img src="images/${item.path}" alt="${item.alt}" />
        </a>
        `
    }
    $("#mainProject").html(html);
}

function limit(element)
{
    html="";
    var max_chars = 100;

    if(element.length > max_chars) {
        html = element.substr(0, max_chars)+"...";
    }else{
        html=element;
    }

    return html;
}
