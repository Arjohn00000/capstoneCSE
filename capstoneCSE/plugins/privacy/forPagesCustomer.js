$(document).ready(function(){
    let tmp = localStorage.getItem('isloggedin');
    if (tmp == '404') {
        window.location.href = "../../";
    }
    display();
});

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
                var price = $("<p>").addClass("price text-decoration-none").html("Price: <small class='text-danger'>" + e.prod_price + "</small>");
                var av_kilo = $("<p>").addClass("price text-decoration-none").html("Available kilo: <small class='text-danger'>" + e.available_kilo + "</small>");
                var pricek = $("<p>").addClass("price text-decoration-none").html("Kilo: <small class='text-danger'>" + e.prod_kilo + "</small>");
                // var selectDiv = $("<div>");
                // var select = $("<select>").addClass("custom-select");
                // var availableOption = $("<option>").text("Available");
                // var notAvailableOption = $("<option>").text("Not Available");
                var added = $("<small>").addClass("text-info mt-2").text("Added " + e.added);

                // select.append(availableOption, notAvailableOption);
                // selectDiv.append(select);
                imgArea.append(img);
                cardBody.append(title, imgArea, price,pricek, av_kilo, added);
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