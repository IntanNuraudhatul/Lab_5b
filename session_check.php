<?php
session_start();

// Ensure the session variable 'loggedin' is set
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php"); // Redirect to login page
    exit; // Stop further script execution
}
?>
