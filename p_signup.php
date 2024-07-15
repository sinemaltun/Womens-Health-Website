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
    <?php 
    session_start(); 
    include 'p_navbar.php';
    include 'connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        extract($_POST);
        if (isset($_POST["signup_button"])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            //$hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $check_query = "SELECT * FROM USERS WHERE username = '$username'";
            $result = mysqli_query($c, $check_query);
    
            if (mysqli_num_rows($result) > 0) {
                // Username already exists
                $Message = urlencode("Username already exists! Try a different one.");
                header("Location: p_signup.php?Message=" . $Message);
                exit();
            } else {
                // Username does not exist, proceed with signup
                //$hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
                $query = "INSERT INTO USERS (username, password) VALUES ('$username', '$password')";
                $verified = mysqli_query($c, $query);
    
                if ($verified) {
                    // Signup successful
                    setcookie("user", $username);
                    $Message = urlencode("Sign up is successful!");
                    header("Location: p_login.php?Message=" . $Message);
                    exit();
                } else {
                    // Signup failed
                    $Message = urlencode("An error occurred! Try again.");
                    header("Location: p_signup.php?Message=" . $Message);
                    exit();
                }
            }
        }
    }
    ?>

    <div class="container">
        <div class="login column">
            <div class="login-form">
                <p style="text-align: left;">New here? Welcome aboard!</p>
                <br>
                <form method="post" action="p_signup.php" onsubmit="return validateForm()">
                    <input type="text" class="textbox" name="username" id="username" placeholder="Username" required><br>
                    <input type="password" class="textbox" name="password" id="password" placeholder="Password" required><br>
                    <input type="submit" id="signup_button" name="signup_button" value="Sign Up">
                </form>
                <p><?php
                if(isset($_GET['Message'])){
                        echo $_GET['Message'];
                    }?>
                    </p>
            </div>
        </div>
        <div class="picture">
            <img src="friends.jpeg" alt="Placeholder Image">
        </div>
    </div>
</body>
</html>
