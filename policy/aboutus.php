<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Kisan Mitra</title>
    <link rel="stylesheet" href="http://localhost/Kisan Mitra/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="shortcut icon" href="http://localhost/Kisan%20Mitra/photos/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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
    font-size: 20px;
    line-height: 30px;
}

main {
    padding-bottom: 260px;
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
    height: 180px;
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
.a1,.a3,.a4{
    color: black;
    text-decoration: none;
}
.a2,.p1{
    color: white;
    text-decoration: none;
    margin-bottom: 0;
}
.tcol{
    color:  #4caf50;
}
.bgcol{
    background-color: #4caf50;
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
                        <p class="a2 ahover">About Us</p>
                    </div>
                    
                    <!-- <div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink ms-">
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
        <div class="container d-flex flex-column align-items-center justify-content-center p-5">
            <h1>Kisan Mitra</h1>
            <br>
            <p><strong>Welcome to Kisan Mitra.</strong> At <strong>Kisan Mitra</strong>, we're passionate about providing high-quality seeds to gardeners and farmers of all levels. Our mission is to help our customers grow their best crops, whether they're seasoned professionals or just starting out.
            </p>
        </div>
        <div class="container px-5">
            <h4>Our Values</h4>
            <p><strong>At Kisan Mitra</strong>, we're guided by a set of core values that include:</p>
            <p>- Quality: We're committed to providing the highest-quality seeds possible.</p>
            <p>- Customer Service: We're dedicated to providing exceptional customer service and support.</p>
            <p>- Integrity: We operate with honesty and transparency in all our interactions.</p>
            <p>- Sustainability: We're committed to sustainable practices and reducing our environmental impact.</p>
            <br>
            <h4>Our Commitment to Quality</h4>
            <p>We're committed to providing the highest-quality seeds possible. Here are some of the steps we take to ensure quality:</p>
            <p>- Careful Selection: We carefully select each batch of seeds from reputable suppliers.</p>
            <p>- Quality Control: Our quality control specialist carefully inspects each batch of seeds to ensure it meets our high standards.</p>
            <p>- Testing: We test our seeds regularly to ensure they meet our standards for germination and purity.</p>
            <br>
            <h4>Get in Touch</h4>
            <p>We're always here to help. Whether you have a question about our seeds, need help with an order, or just want to say hello, we'd love to hear from you.</p>
            <p>- Email: <a href="mailto:kisanmitra@gmail.com">kisanmitra@gmail.com</a></p>
            <p>- Phone: <a href="tel:+9847821657">9847821657</a></p>
            <br><br>
            <p>Thank you for choosing <strong>Kisan Mitra</strong>! We look forward to helping you grow your best crops.</p>
        </div>
            
            
            




            
     
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
                            <a href="http://localhost/Kisan%20Mitra/seeds/fruits.php" class="info-seeds">Fruit Seeds</a><br>
                            <a href="http://localhost/Kisan%20Mitra/seeds/flower.php" class="info-seeds">Flower Seeds</a><br>
                            <a href="http://localhost/Kisan%20Mitra/seeds/cereal.php" class="info-seeds">Cereal Seeds</a><br>
                            <a href="http://localhost/Kisan%20Mitra/seeds/vegetables.php" class="info-seeds">Vegetable Seeds</a><br>
                        </ul>
                    </div>
                </div>
                <div class="col-3 d-flex flex-column justify-content-center align-items-md-center">
                    <div>
                        <p class="fs-5 fw-bold mb-4">Information</p>
                    </div>
                    <div class="me-4">
                        <ul>
                            <p class="info-seeds p1">About Us</p>
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