$('#btn-edit').click(function(){
    checking();
}); 

var checking =()=>{
    if($('#fname').val() != "" && $('#lname').val() != "" && $('#age').val() != "" && $('#gender').val() != "" && $('#email_phone').val() != "" && $('#pm').val() != "") {
        req();
    }else{
        alert("Please fill-in empty field(s)");
    }
}

var req =()=>{
    $.ajax({
        type: "POST",
        url: "../static/source/router.php",
        data: {choice:'editProfile',fname:$('#fname').val(),lname:$('#lname').val(),age:$('#age').val(),gender:$('#gender').val(),email_phone:$('#email_phone').val(),pm:$('#pm').val()},
        success: function(data){
            console.log(data);
            if(data == 200){
                alert('Updated Succesfully')
                window.location.href = "../public/profile.php";
            }else{
                alert(data);
            }
        }, 
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError);
        }
    });
}