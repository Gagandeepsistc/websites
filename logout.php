<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the index page
header('Location: index.php');
exit();
?>
