<!DOCTYPE html>
<html lang="en">
<head>
    <title>Women's Health</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="MAT347E Term Project">
    <meta name="author" content="Sinem Faide Altun">

    <link rel="shortcut icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="sty-login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="p_validate.js"></script>

</head>
<body>
    <?php include 'p_navbar.php'; ?>
    <form method="POST" action="p_verify_login.php" onsubmit="return validateForm()">
        <div class="container">
        <div class="login column">
            <div class="login-form">
                <p style="text-align: left;">Welcome back! Please enter your credentials to access your account.</p>
                <br>
                <input type="text" class="textbox" name="usrn" placeholder="Username" id="username" required><br>
                <input type="password" class="textbox" name="psw" placeholder="Password" id="password" required><br>
            </div>
            <input type="submit" id="login_button" value="Login">
            <p id="signup_link">Sign Up</p>
            <p><?php
                if(isset($_GET['Message'])){
                        echo $_GET['Message'];
                    }?>
                    </p>
        </div>
            <div class="picture">
                <img src="friends.jpeg" alt="Placeholder Image">
            </div>
        </div>
    </form>

<script>
    const button = document.getElementById('login_button');
    button.addEventListener('mouseover', function() {
    button.style.backgroundColor = '#E4D2C8';
    });

    button.addEventListener('mouseout', function() {
    button.style.backgroundColor = '#F99F7F';
    });

    const signupLink = document.getElementById('signup_link');
    signupLink.addEventListener('click', function() {
        window.location.href = 'p_signup.php';
    });
</script>
</body>
</html>
