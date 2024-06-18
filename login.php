<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $username1 = $_POST["username"];
    $password1 = $_POST["password"];
 
    // Validate input (you might want to add more validation)
    if (!empty($username1) && !empty($password1)) {
        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "userdb";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to check if username and password match
        $sql = "SELECT id, username FROM users WHERE username = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username1, $password1);
        $stmt->execute();
        $result = $stmt->get_result();

        // If a match is found, log the user in
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            header("Location:index2.html"); // Redirect to dashboard or home page
            exit();
        } else {
            $error = "Invalid username or password";
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    } else {
        $error = "Please enter both username and password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <style>
        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Login">
        
        <p>Don't have an account? <a href="signup.php">Signup</a></p>
        <p>Forgot your password? <a href="forgotpassword.php">Reset it here</a></p>
        
        <?php if (isset($error)) { ?>
            <div class="error"><?php echo $error; ?></div>
        <?php } ?>
    </form>
</body>
</html>
    