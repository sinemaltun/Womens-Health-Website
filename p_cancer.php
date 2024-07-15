<!DOCTYPE html>
<html lang="en">
<head>
<title>Women's Health</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="MAT347E Term Project">
    <meta name="author" content="Sinem Faide Altun">
    
    <link rel="shortcut icon" type="image/x-icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="sty-cancer.css">
    <style>
        .big-title {
            color: #5A5A5A;
            font-weight: 700;
        }
        .paragraph {
            color: #777;
        }
    </style>
</head>
<body>
    <?php include 'p_navbar.php'; 
    session_start();?>
    <div class="container mt-4 text-center">
        <h1 class="display-4 big-title">Cancer Awareness</h1>
        <p class="lead paragraph mx-auto" style="max-width: 800px;">Join us in spreading awareness about various types of cancer affecting women. Through education and information, we can better understand the impact and strive towards prevention and effective treatment.</p>
    </div>

    <div class="container">
    <div class="row">
    <div class="col-md-6">
        <div class="image" style="background-image: url('cancer1.png');"></div>
    </div>
    <div class="col-md-6">
        <div class="text-box">
            <h2 class="big-title">How Does Breast Cancer Affect the Body?</h2>
            <p class="paragraph">Explore Healthline's insightful article, "How Does Breast Cancer Affect the Body?". Healthline is a trusted source for medical information, offering comprehensive coverage of various health topics. This particular article delves into the impact of breast cancer on the body, providing essential insights into its physiological effects and implications.</p>
            <a target="_blank" href="https://www.healthline.com/health/breast-cancer/radiation-effects-on-body" class="btn">Signs of Breast Cancer</a>
        </div>
    </div>
    </div>
    </div>

    <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 order-md-2">
            <img class="image mt-4" src="cancer2.jpg" alt="Ovarian Cancer Image">
        </div>
        <div class="col-md-6 order-md-1">
            <div class="text-box">
                <h2 class="big-title">Ovarian Cancer: Information Catalog</h2>
                <p class="paragraph">Ovarian cancer is when abnormal cells in the ovary begin to grow and divide in an uncontrolled way. They eventually form a tumour. If not caught early, cancer cells gradually grow into the surrounding tissues, and may spread to other areas of the body. <b>Cancer Research UK</b> provides a comprehensive information catalog on certain types and symptoms of ovarian cancer.</p>
                <a target="_blank" href="https://www.cancerresearchuk.org/about-cancer/ovarian-cancer#:~:text=Ovarian%20cancer%20is%20when%20abnormal,other%20areas%20of%20the%20body." class="btn">Signs of Ovarian Cancer</a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6">
            <img class="image" src="cancer3.png" alt="Lung Cancer Image">
        </div>
        <div class="col-md-6">
            <div class="text-box mt-4">
                <h2 class="big-title">Guide to Lung Cancer in Women</h2>
                <p class="paragraph">Columbia University Department of Surgery states that the risk of developing lung cancer during her lifetime is about 1 in 17 for women, and that the rates of lung cancer have been increasing over the past several years for women, particularly adenocarcinoma. Inform yourself by reading their guide on diagnosis, stages of lung cancer, and treatment.</p>
                <a target="_blank" href="https://columbiasurgery.org/conditions-and-treatments/lung-cancer-women#:~:text=The%20risk%20of%20developing%20lung,years%20for%20women%2C%20particularly%20adenocarcinoma." class="btn">Lung Cancer</a>
            </div>
        </div>
    </div>
</div>

</div>


</body>
</html>
