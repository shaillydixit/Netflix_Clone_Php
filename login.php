<?php
if(isset($_POST["submitButton"])){
    echo "form submited";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css">
</head>

<body>
    <div class="signInContainer">
        <div class="column">
            <div class="header">
                <img src="assets/images/logo.png" alt="logo" title="Logo">
                <h3>Sign In</h3>
                <span>to continue to Netflix</span>
            </div>
            <form method="POST">
                <input type="text" name="username" placeholder="Username" required>

                <input type="password" name="password" placeholder="Password" required>

                <input type="submit" name="submitButton" value="SUBMIT">

            </form>
            <a href="register.php" class="signInMessage"> Need an account? Sign up here!</a>
        </div>
    </div>
</body>

</html>