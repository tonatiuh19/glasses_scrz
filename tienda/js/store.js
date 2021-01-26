$(document).ready(function(){
    
    $(".tb").hover(function(){
    
    $(".tb").removeClass("tb-active");
    $(this).addClass("tb-active");
    
    current_fs = $(".active");
    
    next_fs = $(this).attr('id');
    next_fs = "#" + next_fs + "1";
    
    $("fieldset").removeClass("active");
    $(next_fs).addClass("active");
    
    current_fs.animate({}, {
    step: function() {
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    next_fs.css({
    'display': 'block'
    });
    }
    });
    });

    
    
});

function checkboxes(){
   
    if (document.getElementById('singleV').checked) {
        $('#a').modal('hide'); 
        document.getElementById('textTitleGlasses').innerHTML = "Vision normal";
        document.querySelector(".prescriptionLi").children[0].style.display = "none"
        $('#b').modal('show'); 
    }else if(document.getElementById('progressive').checked){
        $('#a').modal('hide'); 
        document.getElementById('progressive').innerHTML = "Progresivas";
        $('#b').modal('show'); 
    }else if(document.getElementById('prescription').checked){
        $('#a').modal('hide'); 
        document.getElementById('prescription').innerHTML = "Con prescripcion";
        $('#b').modal('show'); 
    }else if(document.getElementById('read').checked){
        $('#a').modal('hide'); 
        document.getElementById('read').innerHTML = "Para Leer";
        $('#b').modal('show'); 
    }
}