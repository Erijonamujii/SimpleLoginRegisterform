var myForm=document.forms.registerForm;
var message=document.getElementById("message");



myForm.onsubmit=function(){

event.preventDefault();


if(myForm.name.value==""){
    message.innerText="Please enter your name!";
    myForm.name.focus();
    return false;
}else if(myForm.surname.value==""){
    message.innerText="Please enter your surname";
    myForm.surname.focus();
    return false;
}
else if(myForm.username.value==""){
    message.innerText="Please enter your username";
    myForm.username.focus();
    return false;
}



else if(myForm.email.value==""){
    message.innerText="Please enter your email!";
    myForm.email.focus();
    return false;

}else if (!isValidEmail(myForm.email.value)){
    message.innerText="Please enter a valid email adress!";
    myForm.email.focus();
    return false;
}



else if(myForm.password.value===""){
message.innerText="Please enter the password!";
myForm.password.focus();
return false;
}else if(myForm.password.value.length<8){
    message.innerText = "Password should be at least 8 characters long!";
        myForm.password.focus();
        return false;
}
else{
    message.innerText="";
    return true;
}


};




function isValidEmail(email){
    var emailRegex = /\S+@\S+\.\S+/;
    return emailRegex.test(email);
}


function isValidDate(date){
    var dateRegex=/^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/g;;
    return dateRegex.test(date);
}

