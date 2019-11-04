function send_message(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    
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
               url: site+"contact/send_message",
               dataType: "json",
               data: {name : name,
                      email : email,
                      message : message
                      },
               success:function(data){
                   if(data){
                       document.getElementById("messages").style.display = "block";
                   }
               }         
             });
             
             document.getElementById("messages_respose").style.display = "block";
             
        }else{
            document.getElementById("message_email").style.display = "block";
            $("#email").focus();
        }
    }
}
function validar_email( email ){
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}