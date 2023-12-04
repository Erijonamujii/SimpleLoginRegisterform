var myForm=document.forms.contactForm;
var message=document.getElementById("message");



myForm.onsubmit=function(){

    event.preventDefault();




    if(myForm.name.value==""){
        message.innerText="Please enter your name:";
        myForm.name.focus();
        return false;
        
    }else if(myForm.email.value==""){
        message.innerText="Please enter your email!";
        myForm.email.focus();
        return false;
    }else if(myForm.subject.value==""){

        message.innerText="Please enter a subject!";
        myForm.subject.focus();
        return false;

    } else if(myForm.description.value==""){
        message.innerText="Please enter a description,question or anything else!";
        myForm.description.focus();
        return false;
    }else{
        message.innerText="";
        return true;
    }
    





};



