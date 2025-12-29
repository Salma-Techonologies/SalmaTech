<?php
// forms/contact.php - TEST VERSION (Always returns OK)
error_reporting(0); // Turn off errors

// Log the submission to a file instead of email
$log_data = "========== NEW SUBMISSION ==========\n";
$log_data .= "Date: " . date('Y-m-d H:i:s') . "\n";
$log_data .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
$log_data .= "Name: " . ($_POST['name'] ?? '') . "\n";
$log_data .= "Email: " . ($_POST['email'] ?? '') . "\n";
$log_data .= "Phone: " . ($_POST['phone'] ?? '') . "\n";
$log_data .= "Service: " . ($_POST['service'] ?? '') . "\n";
$log_data .= "Subject: " . ($_POST['subject'] ?? '') . "\n";
$log_data .= "Message: " . ($_POST['message'] ?? '') . "\n";
$log_data .= "Newsletter: " . (isset($_POST['newsletter']) ? 'Yes' : 'No') . "\n";
$log_data .= "===================================\n\n";

// Save to file
file_put_contents('submissions.log', $log_data, FILE_APPEND);

// ALWAYS return OK for testing
echo 'OK';
?>