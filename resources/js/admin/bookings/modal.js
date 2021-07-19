let bookingSelected = null,
    first = false;
$(function() {
    getListUser();
    namgetListTour();
    $("#datepicker").datepicker({ dateFormat: "dd-mm-yy" });
    // $("#datepicker").datepicker("setDate", new Date());
    $("#datepicker").change(function() {
        var date = $("#datepicker").datepicker("getDate");
        console.log(date.dateFormat);
    });
    $(document).on("click", ".selectedRow", function() {
        bookingSelected = JSON.parse(
            $(this)
                .closest("tr")
                .find("td")
                .eq(0)
                .text()
        );
        $("#customerName").val(bookingSelected.user_id);
        $("#tourName").val(bookingSelected.tour_id);
        $("#datepicker").datepicker("setDate", new Date(bookingSelected.date));
        let paypalHtml = paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [
                        {
                            amount: {
                                value: bookingSelected.tour[0].money
                            }
                        }
                    ]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    alert(
                        "Transaction completed by " +
                            details.payer.name.given_name
                    );
                });
            }
        });
        if (!first) {
            paypalHtml.render("#paypal-button-container");
            first = true;
        }
    });
});
function openModal() {
    $("#modalBookings").modal("show");
}

function getListUser() {
    let ar = [];
    var csrf = document.querySelector('meta[name="csrf-token"]').content;
    $.ajax({
        url: "/admin/users/list",
        type: "GET",
        data: { value: "", _token: csrf },
        success: function(response) {
            response.forEach(element => {
                $("#customerName").append(
                    $("<option>", {
                        value: element.id,
                        text: element.name
                    })
                );
            });
        }
    });
}

function namgetListTour() {
    let ar = [];
    var csrf = document.querySelector('meta[name="csrf-token"]').content;
    $.ajax({
        url: "/admin/tours/list",
        type: "GET",
        data: { value: "", _token: csrf },
        success: function(response) {
            response.forEach(element => {
                $("#tourName").append(
                    $("<option>", {
                        value: element.id,
                        text: element.name
                    })
                );
            });
        }
    });
}
