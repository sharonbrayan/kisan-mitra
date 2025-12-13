<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info | Flower-Seeds</title>
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="shortcut icon" href="http://localhost/Kisan%20Mitra/photos/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/home/multipurpose.css">
    <style>
        html {
    height: 100%;
    box-sizing: border-box;

}

body {
    position: relative;
    min-height: 100%;
    box-sizing: inherit;
    background-color: #e9fce5;
}

main {
    padding-bottom: 240px;
    padding-left: 10px;
    padding-right: 10px;

}

footer {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
}

.foot-content {
    height: 170px;
    background-color: rgb(181, 241, 181);
}

.bgcol {
    height: 55px;
}

.logo-col {
    height: 75px;
    width: 75px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    margin-top: -5px;

}

.limg {
    height: 120px;
    width: 150px;
    mix-blend-mode: multiply;
}

.fa-brands {
    color: rgb(255, 255, 255);
    font-size: 1.7rem;
}

.fa-brands:hover {
    border: 2px solid white;
    color: white;
    font-size: 2.1rem;
}

.info-seeds {
    color: black;
    text-decoration: none;
    font-size: 17px;
}

.info-seeds:hover {
    text-decoration: underline;
    background-color: rgb(158, 228, 158);
}

.head-content {
    height: 100px;
    background-color: rgb(181, 241, 181);
}
.head-alink{
    width: 110px;
}
.head-alink:hover a{
    color: white;
}
.head-alink:hover {
    border-radius: 5px;
    border-bottom: 5px solid black;
    cursor:pointer;
    color: white;
}
.a1,.a2,.a3,.a4{
    color: black;
    text-decoration: none;
}
    </style>
</head>
<body>
    <header>
    <a href="http://localhost/kisan%20mitra/chatbot/chat.php"><div style="position:fixed; bottom:5%; right:1%; height: 80px; width: 80px; border-radius:50px"><img src="http://localhost/kisan%20mitra/photos/chatbot.jpg" alt="" srcset="" height="80px" width="80px"></div></a>
        <div class="container-fluid head-content">
            <div class="row h-100">
            <div class="col-6 h-100 d-flex flex-row">
                    <div class="col-6">
                        <div class="logo-col ms-6">
                            <img src="http://localhost/Kisan%20Mitra/photos/logo.jpg" alt="" srcset="" class="pb-3 limg">
                        </div>
                        <div>
                            <p>Smart Farming, Better Harvest</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <?php
                            if (session_status() === PHP_SESSION_NONE) {
                                session_start();
                            }
                            if (isset($_SESSION['username'])) {
                                echo "<p class='fs-4'> <span class='fw-bold'>" . $_SESSION['username'] . "</span></p>";

                            }
                        ?>
                    </div>
                </div>
                <div class="col-6 h-100 d-flex justify-content-end align-items-center gap-3 alink-container">
                <div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink">
                        <a href="http://localhost/Kisan%20Mitra/home/home.php" class="a1 ahover ms-3">Home</a>
                    </div>
                    <div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink me-3">
                        <a href="http://localhost/Kisan%20Mitra/policy/aboutus.php" class="a2 ahover">About Us</a>
                    </div>
                   <!--  <div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink ms-">
                        <a href="http://localhost/Kisan%20Mitra/dashboard/dashboard.php" class="a3 ahover">Dashboard</a>
                    </div> -->
                    <div class="col-3 fs-2 fw-bold d-flex justify-content-center head-alink" style="height: 56px; padding-top: 5px;">
                    <a href="http://localhost/Kisan%20Mitra/cart/cart.php" class="a4 ahover"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </header>
    <main>
        <br>
        <div class="text-center"><h2>Flower Seeds</h2></div>
        <br>
        <h4>Introduction to Flower Seeds</h4>
        <p>Flower seeds bring vibrant colors and beauty to our gardens and homes. With the right seeds and a little care, you can enjoy a stunning display of blooms all season long.
        </p>
        <br><br>
        <h4>Types of Flower Seeds</h4>
        <h6>- Annual Seeds:</h6>
         <p> Annual flower seeds complete their life cycle within a year, germinating, growing, producing flowers, and dying all within a single growing season.
        </p>
         <h6>- Perennial Seeds:</h6>
         <p> Perennial flower seeds come back year after year, often requiring minimal maintenance and care.
        </p>
         <h6>- Heirloom Seeds:</h6>
         <p>Heirloom flower seeds come from open-pollinated plants that have been saved and handed down through generations, often producing unique and delicate blooms.
        </p>
        <br><br>
        <h4>How to Choose the Right Flower Seeds</h4>
        <h6>- Climate:</h6>
        <p> Select flower seeds suitable for your local climate and growing conditions.
        </p>
        <h6>- Soil:</h6>
        <p>Choose flower seeds that thrive in your soil type.</p>
        <h6>- Sunlight:</h6>
        <p>Consider the amount of sunlight your garden receives and choose flower seeds that match those conditions.
        </p>
        <br><br>
        <h4>Seed Germination and Planting</h4>
        <h6>- Seed Preparation</h6>
        <p>Follow the specific seed preparation instructions for each flower variety, such as soaking or scarification.
        </p>
        <h6>- Sowing Seeds</h6>
        <p>Plant seeds at the correct depth and spacing, and provide adequate moisture and warmth.</p>
        <h6>- Transplanting:</h6>
        <p>Transplant seedlings into larger containers or directly into the garden when they have 2-3 sets of leaves.</p>
        <br><br>
        <h4>Common Flower Seed-Related Terms</h4>
        <h6>- Seed Viability:</h6>
        <p> The ability of seeds to germinate and produce healthy plants.
        </p>
        <h6>- Seed Dormancy:</h6>
        <p>A state of reduced metabolic activity in seeds, requiring specific conditions to break dormancy.</p>
        <h6>- Deadheading:</h6>
        <p>The process of removing spent flowers to encourage more blooms and prevent seed production</p>
        <br><br>
        <h4>Frequently Asked Questions</h4>
        <p>- How long do flower seeds take to germinate?</p>
        <p> Germination times vary depending on the flower variety, but most flower seeds germinate within 1-3 weeks.
        </p>
        <p>- Can I save seeds from my own flowers?</p>
        <p>Yes, you can save seeds from your own flowers, but be aware that saved seeds may not retain the same characteristics as the parent plant.
        </p>
        <p>- How do I store fruit seeds for next season?</p>
        <p>Store flower seeds in a cool, dry place (around 40°F/4°C and 50% humidity) in airtight containers or envelopes.
        </p>
    </main>
    <footer>
        <div class="container-fluid  foot-content">
            <div class="row h-100">
                <div class="col-3 mt-3">
                    <div class="logo-col col-6 ms-5">
                        <img src="http://localhost/Kisan%20Mitra/photos/logo.jpg" alt="" srcset="" class="pb-3 limg">
                    </div>
                    <div class="col- title ms-5">
                        <h3 class="">Kisan Mitra</h3>
                    </div>
                </div>
                <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                    <div>
                        <p class="fs-5 fw-bold mt-2">Seeds</p>
                    </div>
                    <div class="me-4">
                        <ul>
                            <a href="http://localhost/Kisan%20Mitra/seeds/fruits.php" class="info-seeds i1">Fruits Seeds</a><br>
                            <p class="i2" style="color: white; margin-bottom: 0px; font-size: 17px;">Flower Seeds</p>
                            <a href="http://localhost/Kisan%20Mitra/seeds/cereal.php" class="info-seeds i3">Cereal Seeds</a><br>
                            <a href="http://localhost/Kisan%20Mitra/seeds/vegetables.php" class="info-seeds i4">Vegetable Seeds</a><br>
                        </ul>
                    </div>
                </div>
                <div class="col-3 d-flex flex-column justify-content-center align-items-md-center">
                    <div>
                        <p class="fs-5 fw-bold mb-4">Information</p>
                    </div>
                    <div class="me-4">
                        <ul>
                        <a href="http://localhost/Kisan%20Mitra/policy/aboutus.php" class="info-seeds">About Us</a><br>
                            <a href="http://localhost/Kisan%20Mitra/policy/contactus.php" class="info-seeds">Contact Us</a><br>
                            <a href="http://localhost/Kisan%20Mitra/policy/refund.php" class="info-seeds">Refund Policy</a><br>
                        </ul>
                    </div>
                </div>
                <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                    <div>
                        <p class="fw-bold fs-5">Follow Us On</p>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/find-friends"><i class="fa-brands fa-facebook mx-2"></i></a>
                        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram mx-2"></i></a>
                        <a href="https://www.youtube.com/?gl=IN"><i class="fa-brands fa-youtube mx-2"></i></a>
                        <a href="https://www.threads.net/"><i class="fa-brands fa-threads mx-2"></i></a>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid bgcol text-center fs-5 pt-3">
            <p class=""> &copy; Copyright 2025 Kisan Mitra</p>
        </div>
    </footer>
</body>
</html>