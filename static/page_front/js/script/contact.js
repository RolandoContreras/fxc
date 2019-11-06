function send_message(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    //GET DATA RECAPTCHA
    var response = grecaptcha.getResponse();
    
    if(response.length == 0){
        document.getElementById("captcha_messages").style.display = "block";
    }
    else{
        if(name == ""){
        document.getElementById("message_name").style.display = "block";
        $("#name").focus();
        }else if(email == ""){
            document.getElementById("message_email").style.display = "block";
            $("#email").focus();
        }else if(message == ""){
            document.getElementById("message_comments").style.display = "block";
            $("#message").focus();
        }else{
            var email_2 = validar_email(email);
            if(email_2 == true){
                   $.ajax({
                   type: "post",
                   url: site+"contact/send_messages",
                   dataType: "json",
                   data: {name : name,
                          email : email,
                          message : message
                          },
                   success:function(data){
                       if(data.message == true){
                           document.getElementById("messages_respose").style.display = "block";
                           document.getElementById("captcha_messages").style.display = "none";
                       }
                   }         
                 });
            }else{
                document.getElementById("message_email").style.display = "block";
                $("#email").focus();
            }
        }
    }
    
    
}
function validar_email( email ){
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}
function fade_name(){
    var string = document.getElementById("name").value;
    if(string != ""){ 
        document.getElementById("message_name").style.display = "none";
    }
}
function fade_email(){
    var string = document.getElementById("email").value;
    if(string != ""){ 
        document.getElementById("message_email").style.display = "none";
    }
}
function fade_comments(){
    var string = document.getElementById("message").value;
    if(string != ""){ 
        document.getElementById("message_comments").style.display = "none";
    }
}

