<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Women's Health</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="MAT347E Term Project">
    <meta name="author" content="Sinem Faide Altun">
    
    <link rel="shortcut icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="sty-textbox.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="p_validate.js"></script>
</head>
<body>
    <?php
        include 'p_navbar.php'; 
        include 'connect.php';
        //mysqli_query($c, "ALTER TABLE POSTS ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY FIRST;");

        if(!isset($_COOKIE["user"])) {
            header('Location: p_login.php');
            exit();
        }
        if(isset($_GET['Message'])){
            echo $_GET['Message'];
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            extract($_POST);
            if (isset($_POST["post_button"])) {
                $text = $_POST['unitytext'];
                $username = $_COOKIE["user"];
    
                $query = "INSERT INTO POSTS (username, text) VALUES ('$username', '$text')";
                $verified = mysqli_query($c, $query);
    
                if ($verified) {
                    // Post successful
                    setcookie("user", $username);
                    $Message = urlencode("Posted!");
                    header("Location: p_unity.php?Message=" . $Message);
                    exit();
                } else {
                    // Post failed
                    $Message = urlencode("An error occurred! Try again.");
                    header("Location: p_unity.php?Message=" . $Message);
                    exit();
                }
            }
        }
    ?>

    <!-- Offcanvas container -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="messageOffcanvas" aria-labelledby="messageOffcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="messageOffcanvasLabel">SHARE YOUR THOUGHTS</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="message-container">
            <form action="" method="post" onsubmit="return validateForm()">
                <textarea id="textbox" name="unitytext" style="height: 250px;" placeholder="Join us to read, share, and uplift each other..."></textarea>
                <button name="post_button" type="submit">Submit Message</button>
            </form>
        </div>
    </div>

    <button id="offcanvas-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#messageOffcanvas" aria-controls="messageOffcanvas" style="background-color: #a7608c; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
    Click to post
    </button>

    <!-- Display last 3 posts -->
<!-- Display last 3 posts -->
<div>
    <br>
    <h4>Latest 3 Posts</h4>
    <?php
    $query = "SELECT username, text FROM POSTS ORDER BY id DESC LIMIT 3";
    $result = mysqli_query($c, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "<table class='post-table'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td class='post-username'><strong>{$row['username']}:</strong></td>";
            echo "<td class='post-text'>{$row['text']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No posts available.</p>";
    }
    ?>
</div>


</body>
</html>
