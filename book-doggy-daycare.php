<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Doggy Day Care</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Book Doggy Day Care</h1>
    </header>
    <main>
        <form action="submit-booking.php" method="POST">
            <input type="hidden" name="service_type" value="Doggy Day Care">

            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="pet-name">Pet's Name:</label>
            <input type="text" id="pet-name" name="pet_name" required>

            <label for="date">Date of Service:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Preferred Time:</label>
            <input type="time" id="time" name="time" required>

            <label for="pet-sitter">Select a Pet Sitter:</label>
            <select id="pet-sitter" name="pet_sitter_id" required>
                <option value="">Select a pet sitter</option>
                <?php
                // Connect to the database
                $conn = new mysqli("localhost", "root", "", "pet_sitting_service");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch all pet sitters from the database
                $sql = "SELECT id, sitter_name, town, service_type FROM pet_sitters";
                $result = $conn->query($sql);

                // Populate the dropdown with pet sitters
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['id'] . "'>" . $row['sitter_name'] . " - " . $row['service_type'] . " (" . $row['town'] . ")</option>";
                    }
                } else {
                    echo "<option value=''>No sitters available</option>";
                }

                // Close the database connection
                $conn->close();
                ?>
            </select>

            <button type="submit">Confirm Booking</button>
        </form>
    </main>
</body>
</html>
