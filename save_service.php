<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aorfixmandb"; // Use your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['service_type'])) {
    $service_type = $conn->real_escape_string($_POST['service_type']);

    // Assume successful handling of the input for example purposes
    // (In practice, insert into database or perform other logic)

    // Redirect based on service type
    switch ($service_type) {
        case 'Smartphone Repair':
            header("Location: smartphone-repair.html");
            break;
        case 'Data Recovery':
            header("Location: data-recovery.html");
            break;
        case 'Accessory Repair':
            header("Location: accessory-repair.html");
            break;
        case 'Software Installation':
            header("Location: software-installation.html");
            break;
        default:
            header("Location: service.html"); // redirect back if no valid option selected
            break;
    }
    exit(); // Don't forget to call exit after header()
} else {
    echo "No service type selected or form not submitted correctly.";
}

// Close the database connection
$conn->close();
?>
