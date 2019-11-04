function alter_password(){
    var pass = document.getElementById("pass").value;
    var new_pass = document.getElementById("new_pass").value;
    var new_pass_2 = document.getElementById("new_pass_2").value;
    //VERIFY DATA RECAPTCHA
        
            if(pass == ""){
                document.getElementById("message_no_pass").style.display = "block";
                $("#pass").focus();
            }else if(new_pass == ""){
                document.getElementById("message_no_pass").style.display = "block";
                $("#new_pass").focus();
            }else if(new_pass_2 == ""){
                document.getElementById("message_no_pass").style.display = "block";
                $("#new_pass_2").focus();
            }else{
                if(new_pass == new_pass_2){
                    $.ajax({
                       type: "post",
                       url: site+"backoffice/profile/update_password",
                       dataType: "json",
                       data: {pass : pass,
                              new_pass : new_pass,
                              new_pass_2 : new_pass_2},
                       success:function(data){          
                           if(data.status == "true"){
                               document.getElementById("message_no_pass").style.display = "none";
                               document.getElementById("message_no_equal").style.display = "none";
                               document.getElementById("message_success").style.display = "block";
                           }else{
                               document.getElementById("message_no_pass").style.display = "block";
                           }
                       }         
                     });
                    }else {
                        document.getElementById("message_no_equal").style.display = "block";
                        $("#new_pass").focus();
                    }
                
                } 
}   

function validar_email( email ){
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}
function fade_email(string){
    var string = document.getElementById("email").value;
    if(string != ""){ 
        document.getElementById("message_email").style.display = "none";
    }
}
function fade_password(string){
    var string = document.getElementById("password").value;
    if(string != ""){ 
        document.getElementById("message_password").style.display = "none";
    }
}