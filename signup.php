<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <h2>Sign Up</h2>
    <form action="signuphandler.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username">
 
        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" id="password" name="password">

        <label for="reenter_password">Re-enter Password</label>
        <input type="password" id="reenter_password" name="reenter_password">

        <input type="submit" value="Sign Up">

        <p>Already have an account? <a href="login.php">Login</a></p>
    </form>
</body>

</html>


