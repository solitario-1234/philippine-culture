<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredOTP = $_POST['otp'];

    // Database connection
    require 'db.php'; // Include your database configuration file

    // Sanitize input to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $_SESSION['email']);
    $enteredOTP = mysqli_real_escape_string($conn, $enteredOTP);

    // Query to check if OTP matches for the provided email
    $sql = "SELECT * FROM users WHERE email = '$email' AND otp = '$enteredOTP'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        // OTP matched, update verification status
        $updateSql = "UPDATE users SET verification = 1 WHERE email = '$email'";
        if (mysqli_query($conn, $updateSql)) {
            header("Location: login.php");
            echo "Account verified successfully. You can now log in.";
            // You can redirect here using header('Location: login.php');
            exit;
        } else {
            // For example:
            echo "Error updating verification status: " . mysqli_error($conn);
        }
    } else {
        // OTP does not match, show error message
        echo "Invalid OTP. Please try again.";
    }

    // Close database connection
    mysqli_close($conn);
}
?>
