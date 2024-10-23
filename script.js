// Toggling the search form
const searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
};

//Toggling the profile form
const profileForm =document.querySelector('.profile-form');
document.querySelector('#user-btn').onclick = () => {
    profileForm.classList.toggle('active');
};

//Toggling the cart form
const cartForm = document.querySelector('.cart-form');
document.querySelector('#cart-btn').onclick = () => {
    cartForm.classList.toggle('active');
};
 

function showPopup() {
    document.getElementById("popup").style.display = "flex";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}

   
function validate() {
    // Get form field values
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var date = document.getElementById('date').value;
    var time = document.getElementById('time').value;
    var guests = document.getElementById('guests').value;

    // Regex patterns
    var phonePattern = /^(\+?\d{1,3}[-.\s]?)?(\(?\d{1,4}\)?[-.\s]?)?[\d-.\s]{3,15}\d$/;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Validate name
    if (name.trim() === "" || name.trim === null) {
        alert("Please enter your name.");
        return false;
    }

    // Validate email
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Validate phone
    if (!phonePattern.test(phone) || phone.length != 10 || /[A-Z]/.test(phone) || /[a-z]/.test(phone)) {
        alert("Please enter a valid phone number.");
        return false;
    }

    // Validate date
    if (date === "") {
        alert("Please select a date.");
        return false;
    }

    // Validate time
    if (time === "") {
        alert("Please select a time.");
        return false;
    }

    // Validate number of guests
    if (guests < 1 || guests > 30) {
        alert("Number of guests must be at least 1 ans at most 30.");
        return false;
    }

    // If all validations pass
    alert("Registration successful");
    return true;
}

document.getElementById('reservationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    // Validate form fields (you can add more validation as needed)
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;
    const guests = document.getElementById('guests').value;

    if (name && email && phone && date && time && guests) {
        // Show the popup
        document.getElementById('popup').style.display = 'block';
    }
});

// Close the popup when the user clicks on <span> (x)
document.querySelector('.close').onclick = function() {
    document.getElementById('popup').style.display = 'none';
}

// Close the popup when the user clicks anywhere outside of the popup
window.onclick = function(event) {
    if (event.target == document.getElementById('popup')) {
        document.getElementById('popup').style.display = 'none';
    }
}
