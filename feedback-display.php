<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet_sitting_service";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch feedback from the database
$sql = "SELECT user_name, message, submitted_at FROM feedback ORDER BY submitted_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Feedback</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Customer Feedback</h1>
    </header>

    <main>
        <?php
        if ($result->num_rows > 0) {
            echo "<ul>";
            while($row = $result->fetch_assoc()) {
                echo "<li>";
                echo "<strong>" . htmlspecialchars($row['user_name']) . "</strong> (" . $row['submitted_at'] . ")";
                echo "<p>" . htmlspecialchars($row['message']) . "</p>";
                echo "</li><br>";
            }
            echo "</ul>";
        } else {
            echo "<p>No feedback available.</p>";
        }
        ?>

        <a href="index.php">Back to Home</a>
    </main>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
