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


function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

/*$("#alertForm").hide();
$("#alertEmail").hide();
const checkboxes = () =>{
    if (document.getElementById("singleV").checked) {
        $("#a").modal("hide"); 
        document.getElementById("prescription").innerHTML = "Vision Normal";
        document.getElementById("prescFile").setAttribute("required", "");
        $("#prescriptionLi").show();
        $("#prescFile").show();
        $("#b").modal("show");  
    }else if(document.getElementById("prescription").checked){
        $("#a").modal("hide"); 
        document.getElementById("prescription").innerHTML = "Con prescripcion";
        document.getElementById("prescFile").setAttribute("required", "");
        $("#prescriptionLi").show();
        $("#prescFile").show();
        $("#b").modal("show"); 
    }else if(document.getElementById("read").checked){
        $("#a").modal("hide"); 
        document.getElementById("read").innerHTML = "Para Leer";
        $("#prescriptionLi").hide();
        $("#bRead").modal("show"); 
    }
}

const radiosMani = () =>{
    if (document.getElementById("magni0").checked) {
        document.getElementById("myMagni").value = "0";
    }else if(document.getElementById("magni025").checked){
        document.getElementById("myMagni").value = "0.25";
    }else if(document.getElementById("magni050").checked){
        document.getElementById("myMagni").value = "0.50";
    }else if(document.getElementById("magni075").checked){
        document.getElementById("myMagni").value = "0.75";
    }else if(document.getElementById("magni1").checked){
        document.getElementById("myMagni").value = "1.00";
    }else if(document.getElementById("magni125").checked){
        document.getElementById("myMagni").value = "1.25";
    }else if(document.getElementById("magni150").checked){
        document.getElementById("myMagni").value = "1.50";
    }else if(document.getElementById("magni175").checked){
        document.getElementById("myMagni").value = "1.75";
    }else if(document.getElementById("magni2").checked){
        document.getElementById("myMagni").value = "2.00";
    }else if(document.getElementById("magni225").checked){
        document.getElementById("myMagni").value = "2.25";
    }else if(document.getElementById("magni250").checked){
        document.getElementById("myMagni").value = "2.50";
    }else if(document.getElementById("magni275").checked){
        document.getElementById("myMagni").value = "2.75";
    }
}

const btnCheckout = () =>{
    $("#b").modal("hide"); 
    $("#c").modal("show");
}

const btnGoToModalB = () =>{
    $("#bRead").modal("hide"); 
    $("#b").modal("show");
}

const formPayment = () => {
    $("#alertForm").hide();
    const email = document.getElementById('mail').value;
    const street = document.getElementById('street').value;
    const city = document.getElementById('city').value;
    const cp = document.getElementById('cp').value;
    let ready = false;
    
    if(email === ''){
        document.getElementById("mail").style.borderColor = "red";
        $("#alertForm").show();
    }else if(street === ''){
        document.getElementById("street").style.borderColor = "red";
        $("#alertForm").show();
    }else if(city === ''){
        document.getElementById("city").style.borderColor = "red";
        $("#alertForm").show();
    }else if(cp === ''){
        document.getElementById("cp").style.borderColor = "red";
        $("#alertForm").show();
    }else if(!validateEmail(email)){
        document.getElementById("mail").style.borderColor = "red";
        $("#alertEmail").show();
    }else{
        $("#alertForm").hide();
        $("#alertEmail").hide();
        document.getElementById("mail").style.borderColor = "green";
        document.getElementById("street").style.borderColor = "green";
        document.getElementById("city").style.borderColor = "green";
        document.getElementById("cp").style.borderColor = "green";
        ready = true;
    }
    

    if(ready){
        document.buy.submit();
    }
    
}*/