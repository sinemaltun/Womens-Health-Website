<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
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
    <style>
        .image-container {
            text-align: center;
        }
        /* Bootstrap's img-fluid class to make the image responsive */
        .image-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<?php 
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $msg = $_POST['msg'];
    $myfile = fopen("message.txt", "a") or die("Unable to open file!");
    fwrite($myfile, $msg);
    fwrite($myfile, "\n");
    fclose($myfile);
    $message = "<p>Message saved successfully!</p>";
}

include 'p_navbar.php'; 

if ($message != "") {
    echo $message; }
?>
    <div class="message-container">
        <h2>HOW CAN WE HELP YOU?</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateForm()">
            <textarea id="textbox" name="msg" placeholder="We will be happy to assist you with your questions. Simply write us a message..."></textarea>
            <button type="submit">Submit Message</button>
        </form>
    </div>
    <div class="image-container">
    <img src="womens-health.png" alt="Description of the image">
    </div>
</body>
</html>
