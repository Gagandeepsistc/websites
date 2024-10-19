// JavaScript for interactivity
document.getElementById("search-btn").addEventListener("click", function() {
    const location = document.getElementById("location").value;
    if (location) {
        alert("Searching for pet sitters in " + location + "...");
    } else {
        alert("Please enter a location.");
    }
});
document.getElementById('booking-form').addEventListener('submit', function(event) {
    const name = document.getElementById('name').value.trim();
    const petName = document.getElementById('pet-name').value.trim();
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;

    // Check if fields are empty
    if (!name || !petName || !date || !time) {
        alert('Please fill in all required fields.');
        event.preventDefault(); // Prevent the form from being submitted
        return;
    }

    // Check if the selected date is in the future
    const selectedDate = new Date(date);
    const currentDate = new Date();
    currentDate.setHours(0, 0, 0, 0); // Set current time to 00:00:00

    if (selectedDate < currentDate) {
        alert('Please select a valid date in the future.');
        event.preventDefault();
        return;
    }

    // If everything is valid, the form will submit
});
