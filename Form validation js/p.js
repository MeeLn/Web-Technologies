function mypassword(){
    var pas=document.getElementById("pass");
    var pas1=document.getElementById('pass1');

    if(pas.value == ""){
        document.getElementById('message').innerHTML="*Enter password";
        return false;
    }
    if(pas.value.length < 8){
        document.getElementById('message').innerHTML="*Enter password that is atleast greater than 8";
        return false;
    }
    else{
        document.getElementById('message').innerHTML="";
        return true;
    }
}

function confirmpassword(){
    var pas=document.getElementById("pass");
    var pas1=document.getElementById('pass1');

    if(pas.value != pas1.value){
        document.getElementById('message1').innerHTML="*Your password doesnot match";
        return false;
    }
    else{
        document.getElementById('message1').innerHTML="";
        return true;
    }
}

function checkname(){
    var name=document.getElementById('name');

    var pos=name.value.search(/^[A-Za-z]+ [A-Za-z]+$/);
    if(pos != 0){
        document.getElementById('message2').innerHTML="*Enter name in the form(Firstname Lastname)";
        return false;
    }
    else{
        document.getElementById('message2').innerHTML="";
        return true;
    }
}

function checkemail(){
    var email=document.getElementById('email');

    var pos=email.value.search(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/);
    if(pos != 0){
        document.getElementById('message3').innerHTML="*Enter email in the form(eg.milan@gmail.com))";
        return false;
    }
    else{
        document.getElementById('message3').innerHTML="";
        return true;
    }
}