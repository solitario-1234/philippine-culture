<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location:login.php");
    exit();
}

// Database connection
// Validate input (you might want to add more validation)
        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "userdb";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

$user_id = $_SESSION['user_id'];
$sql = "SELECT username, email FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($username1, $email);
$stmt->fetch();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('for.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

            width: 300px;
            text-align: center;
        }
        .profile-container h2 {
            margin-bottom: 20px;
        }
        .profile-container p {
            margin: 10px 0;
        }
        .profile-container img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .profile-container a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            color: white;
            background: #007BFF;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        }
        .profile-container a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <img src="profilelogo.jpg" alt="Profile Icon">
        <h2>Profile</h2>
        <p><strong>Username:</strong> <?php echo htmlspecialchars($username1); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <a href="sessiondestroy.php">Logout</a>
        <a href="index2.html">Back to home</a>
    </div>
</body>
</html>
<?php 

?>