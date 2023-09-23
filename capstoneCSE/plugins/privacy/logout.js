// $(document).ready(function(){
//     let tmp = localStorage.getItem('isloggedin');
//     if (tmp == 404) {
//         window.location.href = "../";
//     }
// });

$('#btn-logout').click(function(){
    if(confirm('Are you sure to logout')) {
            logout();
    }
    return false;
});

var logout =()=>{
    $.ajax({
        type: "POST",
        url: "../../routes/router.php",
        data: {choice:'logout'},
        success: function(data){
            // if (data == "200") {
            //     alert(data)
            //     localStorage.setItem('isloggedin','404');
                window.location.href = "../../";
            // }
        }, 
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError);
        }
    });
}