<?php
session_start(); // Start the session

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'db.php'; // Include your database configuration file

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Get email from form
    $email = $_POST['email'];

    // Prepare and execute SQL statement
    if ($stmt = $conn->prepare("SELECT password, username FROM users WHERE email = ?")) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // If user found
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $user_name = $row["username"];
            $password_user = $row["password"];

            // Send password via email using PHPMailer
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = 2; // Enable verbose debug output (use 3 for more detailed debug output)
                $mail->isSMTP();
                $mail->Host       = 'smtp.office365.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'rodkillsolitario@outlook.com'; // Update with your SMTP username
                $mail->Password   = 'rodelsolitariO'; // Update with your SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;

                //Recipients
                $mail->setFrom('rodkillsolitario@outlook.com', 'Your Name'); // Update with your details
                $mail->addAddress($email);

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'Your Password Recovery';
                $mail->Body    = 'Hello ' . htmlspecialchars($user_name) . ', your password is: ' . htmlspecialchars($password_user);

                // Send email
                if($mail->send()) {
                    // Redirect to login page after successful sending
                    header('Location: login.php');
                    exit();
                } else {
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                }

            } catch (Exception $e) {
                // Log error for debugging
                error_log("Error sending email: " . $e->getMessage(), 0);
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            echo "Invalid email address";
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

