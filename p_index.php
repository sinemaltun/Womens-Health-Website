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
    <link rel="stylesheet" href="sty-index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .btn{
        background-color: #a7608c; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;
        position: absolute; bottom: 10px;
    }
        .btn:hover {
            background-color: #ffaf00; 
        }
        .card-body{
            position: relative;
            padding-bottom: 40px;
        }
    </style>
</head>
<body>
<?php include 'p_navbar.php'; 
'<br>';

function welcome_user($user){
    if(isset($user)) {
        return "Welcome ".$user."!";
    } else {
        return "Welcome Guest!";
    }
}

echo welcome_user($_COOKIE["user"]);
?>
<br><br>

<div class="row justify-content-center">
    <div class="card" style="width: 18rem;">
        <img src="health.png" class="card-img-top" alt="cancer-awareness">
        <div class="card-body">
            <h5 class="card-title">Cancer Awareness</h5>
            <p class="card-text">Cancer Awareness page, a dedicated space where we aim to educate and empower women about the various types of cancer that affect them. Here, you'll find valuable insights on breast cancer, ovarian cancer, and more.</p>
            <a href="p_cancer.php" class="btn">Click for more</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="community.jpeg" class="card-img-top" alt="unity-in-health">
        <div class="card-body">
            <h5 class="card-title">Unity in Health</h5>
            <p class="card-text">Unity in Health, a supportive space for women to share their health journeys and challenges. Connect with others, find advice, and offer support as we navigate the path to better health together.</p>
            <a href="p_unity.php" class="btn">Click for more</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="mental-health.jpg" class="card-img-top" alt="mental-health">
        <div class="card-body">
            <h5 class="card-title">Mental Health</h5>
            <p class="card-text">Our Mental Health page is dedicated to the emotional well-being of women. Here, you'll find resources, articles, and insights on topics such as anxiety, depression, stress management, self-care.</p>
            <a href="p_mental.php" class="btn">Click for more</a>
        </div>
    </div>
    
  </div>
</body>
</html>