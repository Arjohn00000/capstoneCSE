$('#btn-reg').click(function(){
    checking();
}); 

var checking =()=>{
    if ($('#username').val() != "" && $('#email').val() != "" && $('#password').val() != "" && $('#cpass').val() != "") {
        if($('#password').val() != $('#cpass').val()){
            alert('Password not matched!');
        }else{
            req();
        }
    }else{
        alert("Please fill-in empty field(s)");
    }
}

var req =()=>{
    $.ajax({
        type: "POST",
        url: "../../routes/router.php",
        data: {choice:'signUp',username:$('#username').val(),email:$('#email').val(),password:$('#password').val()},
        success: function(data){
            if (data == "Exist") {
                alert("Username Already Taken");
            }else if (data == "Exist2") {
                alert("Email Already in used");
            }else if(data == "200"){
                alert("User Registered Successfully!");
                window.location.href = "../../pages/credentials/login.php";
            }else{
                alert(data);
            }
        }, 
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError);
        }
    });
}