$(document).ready(function(){
    let tmp = localStorage.getItem('isloggedin');
    if (tmp == '404') {
        window.location.href = "../../";
    }
    display();
});

$('#btn-rev').click(function(e) {
    e.preventDefault();

    if ($('#image')[0].files.length === 0) {
        alert("Please select an image.");
    } else if ($('#pname').val() !== "" && $('#pprice').val() !== "" && $('#pkilo').val() !== "") {
        $('#pkilo').val($('#pkilo').val() + " kg/s");
        $('#pprice').val('₱' + $('#pprice').val());

        addProducts();
    } else {
        alert("Please fill in all required fields.");
    }
});

var addProducts = () => {
    var formData = new FormData();
    formData.append('choice', 'addProduct');
    formData.append('image', $('#image')[0].files[0]); 
    formData.append('pname', $('#pname').val());
    formData.append('pprice', $('#pprice').val());
    formData.append('pkilo', $('#pkilo').val());

    $.ajax({
        type: "POST",
        url: "../../routes/router.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
            if (data == "200") {
                alert("Product added successfully.");
                window.location.href = "../../pages/admin/admin.php";
            } else {
                alert(data);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert("Error: " + thrownError);
        }
    });
}

var display = () => {
    $.ajax({
        type: "POST",
        url: "../../routes/router.php",
        data: { choice: 'display' },
        success: function (data) {
            var json = JSON.parse(data);
            var container = $('#div-container');
            container.empty();

            json.forEach(function (e) {
                var cardDiv = $("<div>").addClass("col-12 col-md-12 col-lg-4 mb-2");
                var card = $("<div>").addClass("card text-center pb-2");
                var cardBody = $("<div>").addClass("card-body");
                var title = $("<h3>").addClass("card-title").text(e.prod_name);
                var imgArea = $("<div>").addClass("img-area mb-4 text-center");
                var img = $("<img>").addClass("fish").attr("src", "../../uploads/productImage/" + e.prod_img);
                var price = $("<p>").addClass("price text-decoration-none").html("Remaining kilo: <small class='text-danger'>" + e.prod_kilo + "kg</small>");
                var selectDiv = $("<div>");
                var select = $("<select>").addClass("custom-select");
                var availableOption = $("<option>").text("Available");
                var notAvailableOption = $("<option>").text("Not Available");
                var added = $("<small>").addClass("text-info mt-2").text("Added " + e.added);

                select.append(availableOption, notAvailableOption);
                selectDiv.append(select);
                imgArea.append(img);
                cardBody.append(title, imgArea, price, selectDiv, added);
                card.append(cardBody);
                cardDiv.append(card);

                container.append(cardDiv);
            });
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError);
        }
    });
}

var searchProducts = () => {
    var searchQuery = $('#searchInput').val().toLowerCase();
    var container = $('#div-container');

    if (searchQuery === '') {
        display();
        return;
    }

    $.ajax({
        type: "POST",
        url: "../../routes/router.php",
        data: { choice: 'display' },
        success: function (data) {
            var json = JSON.parse(data);
            console.log(json);
            var filteredData = json.filter(function (e) {
                console.log(e.prod_name)
                // return e.prod_name.toLowerCase().includes(searchQuery);
            });

            container.empty();

            filteredData.forEach(function (e) {
                var cardDiv = $("<div>").addClass("col-12 col-md-12 col-lg-4 mb-2");

                container.append(cardDiv);
            });
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError);
        }
    });
}

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
            if (data == "200") {
                localStorage.setItem('isloggedin','404');
                window.location.href = "../../";
            }
        }, 
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError);
        }
    });
}


