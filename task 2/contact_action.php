<?php
session_start();

$host = 'localhost';
$dbname = 'contact_form';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    $_SESSION['status'] = ['type' => 'error', 'message' => 'Database connection failed'];
    header("Location: risheek.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO submissions (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql)) {
        $_SESSION['status'] = ['type' => 'success', 'message' => 'Enquiry successfully submitted. We will reach out soon!'];
    } else {
        $_SESSION['status'] = ['type' => 'error', 'message' => 'Failed to submit enquiry. Please try again.'];
    }

    $conn->close();
    header("Location: risheek.php"); 
    exit();
}
?>
