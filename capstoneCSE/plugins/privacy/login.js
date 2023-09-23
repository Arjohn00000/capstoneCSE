$('#btnlogIn').click(function(){
    if ($('#username').val() != "" && $('#email').val() != "" && $('#password').val() != "") {
        // alert("ok")
        signIn();
    } else {
        alert("Please fill-in empty field(s)");
    }
}); 

var signIn = () => {
    $.ajax({
        type: "POST",
        url: "../../routes/router.php",
        data: {
            choice: 'signIn',
            username: $('#username').val(),
            email: $('#email').val(),
            password: $('#password').val()
        },
        success: function(data) {
            var response = JSON.parse(data); 
            if (response.status === "200") {
                if (response.role === "admin") {
                    alert("Admin Login successfully!");
                    window.location.href = "../../pages/admin/admin.php";
                } else if (response.role === "customer") {
                    if(response.classification === "newUser") {
                        alert("Login successfully!");
                        window.location.href = "../../pages/customer/";
                    }
                    else if((response.classification === "oldUser")){
                        alert("Login successfully!");
                        window.location.href = "../../pages/customer/product.php";
                    }
                    else {
                        alert("Invalid to login");
                    }
                    
                } else {
                    alert("Invalid to login");
                }
            } else if (response.status === "401") {
                // Handle invalid credentials (Unauthorized) here
                alert("Invalid username or password");
            } else {
                // Handle other error statuses here
                alert("Login failed!");
            }
        }, 
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError);
        }
    });
}


// $('#btnlogIn').click(function(){
//     if ($('#username').val() != "" && $('#email').val() != "" && $('#password').val() != "") {
//         // alert("ok")
//         signIn();
//     }else{
//         alert("Please fill-in empty field(s)");
//     }
// }); 


// var signIn =()=>{
//     $.ajax({
//         type: "POST",
//         url: "../../routes/router.php",
//         data: {choice:'signIn',
//             username:$('#username').val(),
//             email:$('#email').val(),
//             password:$('#password').val()},

//         success: function(data){
//             var response = JSON.parse(data); 
//             if (response.status === "200") {
                 
//                 if (response.role === "admin"){
//                     alert("Admin Login successfully!");
//                     window.location.href = "../../pages/customer/admin.php";
//                 }
//                 else if (response.role === "customer") {
//                     alert("Login successfully!");
//                     window.location.href = "../../pages/customer/";
//                 }
//                 else {
//                     alert("Invalid to login");
//                 }
               
//             }
//             else {
//                 alert("Login failed!");
//             }
            
//         }, 
//         error: function (xhr, ajaxOptions, thrownError) {
//             alert(thrownError);
//         }
//     });
// }