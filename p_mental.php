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
    <?php include 'p_navbar.php'; ?>
    <div class="container mt-4 text-center">
        <h1 class="display-4 big-title">Mental Health</h1>
        <p class="lead paragraph mx-auto" style="max-width: 800px;">Join us in raising awareness about mental health issues affecting women. By promoting education and sharing valuable information, we can better understand the challenges and work towards effective support, prevention, and treatment.</p>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6">
                <img class="image img-fluid mb-4" src="caregiver.png" alt="Caregiver Image">
            </div>
            <div class="col-md-6">
                <div class="text-box mt-4">
                    <h2 class="big-title">Caregiving and Mental Health Effects</h2>
                    <p class="paragraph">The Women's Mental Health Conference (WMHC), founded in 2019 by Drs. Sofia Noori and Stefanie Gillson at Yale, is a free, globally accessible, academic and trainee-led event focusing on comprehensive women's mental health issues. Check out their panel on caregiving and mental health effects, which seeks to address the significant impact of caregiving responsibilities on the mental well-being of caregivers.</p>
                    <a target="_blank" href="https://www.youtube.com/watch?v=KX9MCBsiM4M" class="btn">Panel: Caregiving and Mental Health Effects</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img class="image img-fluid mb-4" src="leader.jpg" alt="Leader Image">
            </div>
            <div class="col-md-6 order-md-1">
                <div class="text-box mt-4">
                    <h2 class="big-title">Women and Leadership: Well-Being in the Executive Suite</h2>
                    <p class="paragraph">Dr. Hilke Brockmann, a professor of sociology at Jacobs University in Bremen, addresses the topic of women in leadership roles in an Economist article. The Economist Intelligence Unit report “Women's Health and Well-Being” found that women's definition of well-being evolves with circumstances, and to attract women to leadership roles, employers need a better understanding of what makes them happy.</p>
                    <a target="_blank" href="https://impact.economist.com/perspectives/health/womens-health-and-well-being/blog/women-and-leadership-well-being-executive-suite"  class="btn">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6">
                <img class="image img-fluid mb-4" src="socialmedia.jpg" alt="Social Media Image">
            </div>
            <div class="col-md-6">
                <div class="text-box mt-4">
                    <h2 class="big-title">A Complex Relation Between Gen Z and Social Media</h2>
                    <p class="paragraph">If you're interested in the nuanced effects of social media on young people's mental health, check out the McKinsey Health Institute's 2022 Global Gen Z Survey. The survey highlights that while Gen Z often experiences negative feelings like <b>FOMO and poor body image</b>  from social media, it also provides benefits like enhanced social connections and self-expression. Notably, Gen Z is more inclined to use digital wellness apps and mental health programs, showcasing the potential of technology in offering crucial support. This is an insightful read for anyone looking to understand the complex relationship between social media and youth mental health.</p>
                    <a target="_blank" href="https://www.mckinsey.com/mhi/our-insights/gen-z-mental-health-the-impact-of-tech-and-social-media" class="btn">Gen Z Mental Health</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
