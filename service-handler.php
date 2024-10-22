
<?php
// order_handler.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $serviceType = $_POST['service-type'];
    $device = $_POST['device'];
    $issue = $_POST['issue'];
    $submissionDate = date("Y-m-d H:i:s");

    // In a real application, this data should be saved to a database.
    // For simplicity, let's store it in the session for now.
    session_start();
    $_SESSION['orders'][] = array(
        "name" => $name,
        "email" => $email,
        "serviceType" => $serviceType,
        "device" => $device,
        "issue" => $issue,
        "submissionDate" => $submissionDate
    );

    // Redirect to display_orders.php
    header("Location: display_orders.php");
    exit();
}
?>