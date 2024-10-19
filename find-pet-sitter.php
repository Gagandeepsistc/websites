<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Use your database username
$password = ""; // Use your database password
$dbname = "pet_sitting_service";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the location entered by the user
$location = $_POST['location'];

// Query the database to find pet sitters in the specified location
$sql = "SELECT sitter_name, service_type, contact_info, rating FROM pet_sitters WHERE town = '$location'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Sitters in <?php echo htmlspecialchars($location); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Pet Sitters in <?php echo htmlspecialchars($location); ?></h1>
    </header>

    <main>
        <?php
        if ($result->num_rows > 0) {
            echo "<ul>";
            while($row = $result->fetch_assoc()) {
                echo "<li>";
                echo "<strong>Sitter Name:</strong> " . htmlspecialchars($row['sitter_name']) . "<br>";
                echo "<strong>Service Type:</strong> " . htmlspecialchars($row['service_type']) . "<br>";
                echo "<strong>Contact Info:</strong> " . htmlspecialchars($row['contact_info']) . "<br>";
                echo "<strong>Rating:</strong> " . htmlspecialchars($row['rating']) . "/5<br>";
                echo "</li><br>";
            }
            echo "</ul>";
        } else {
            echo "<p>No pet sitters found in " . htmlspecialchars($location) . ".</p>";
        }
        ?>

        <a href="index.php">Search Again</a>
    </main>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
