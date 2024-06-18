<?php
session_start(); // Start the session

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'db.php'; // Include your database configuration file

// Function to generate random OTP
function generateOTP($length = 6) {
    $characters = '0123456789';
    $otp = '';
    for ($i = 0; $i < $length; $i++) {
        $otp .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $otp;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    // Check if passwords match
    // if ($password !== $retype_password) {
    //     echo "Passwords do not match.";
    //     exit; // Stop further execution
    // }

    // Generate OTP
    $otp = generateOTP();
    $verification = 0;

    // Prepare and bind parameters
    if ($stmt = $conn->prepare("INSERT INTO users (username, email, password, otp, verification) VALUES (?, ?, ?, ?, ?)")) {
        $stmt->bind_param("ssssi", $username, $email, $password, $otp, $verification);

        // Execute the statement
        if ($stmt->execute()) {
            // Send OTP via email using PHPMailer
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 0;
                $mail->isSMTP();                                            
                $mail->Host       = 'smtp.office365.com';                      
                $mail->SMTPAuth   = true;                                  
                $mail->Username   = 'dulf.gimeno@outlook.com'; // Update with your SMTP username          
                $mail->Password   = 'office2021'; // Update with your SMTP password                  
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        
                $mail->Port       = 587;                                  

                //Recipients
                $mail->setFrom('dulf.gimeno@outlook.com', 'culturePH'); // Update with your details
                $mail->addAddress($email);    

                // Content
                $mail->isHTML(true);                                  
                $mail->Subject = 'Your OTP for Registration';
                $mail->Body    = 'Hello '.$username.', your OTP for email verification is: ' . $otp;

                $mail->send();

                // Store OTP and user email in session
                $_SESSION['otp'] = $otp;
                $_SESSION['email'] = $email;

                // Redirect to OTP verification page
                header('Location: otp.php');
                exit();
            } catch (Exception $e) {
                // Log error for debugging
                error_log("Error sending email: " . $e->getMessage(), 0);
                echo "Message could not be sent. Please try again later.";
            }
        } else {
            echo "Error executing statement: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>
