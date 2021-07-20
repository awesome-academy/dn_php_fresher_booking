$(function() {});

function bookings(e) {
    var csrf = document.querySelector('meta[name="csrf-token"]').content;
    let tour = JSON.parse(e);
    let booking = {
        tour_id: tour.id,
        date: "2010-09-10"
    };
    $.ajax({
        url: "/user/bookings",
        type: "POST",
        data: { tour_id: tour.id, date: "2010-09-10", _token: csrf },
        success: function(response) {
            alert("Booking Success");
        },
        error: function(error) {
            if (error.status === 401) window.location = "/login";
        }
    });
}
