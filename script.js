$(document).ready(function () {
    $("#registrationForm").on("submit", function (e) {
        // Validate Phone Number
        const phone = $("#phone").val();
        if (!/^\d{10}$/.test(phone)) {
            alert("Please enter a valid 10-digit phone number.");
            e.preventDefault();
        }
    });
});