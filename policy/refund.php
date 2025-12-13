<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refund Policy | Kisan Mitra</title>
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.css">
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

        .head-alink {
            width: 110px;
        }

        .head-alink:hover a {
            color: white;
        }

        .head-alink:hover {
            border-radius: 5px;
            border-bottom: 5px solid black;
            cursor: pointer;
            color: white;
        }

        .a1,
        .a3,
        .a4 {
            color: black;
            text-decoration: none;
        }

        .a2,
        .p1 {
            color: white;
            text-decoration: none;
            margin-bottom: 0;
        }

        .tcol {
            color: #4caf50;
        }

        .bgcol {
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
                        <a href="http://localhost/Kisan%20Mitra/policy/aboutus.php" class="a1 ahover ">About Us</a>
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
        <h2 class="text-center">Refund Policy us</h2>
        <div class="container p-5">
            <p>Returns</p>
            <p>Our policy lasts 10 days. If 10 days have gone by since your purchase, unfortunately we can’t offer you a
                refund or exchange.</p>
            <p>To be eligible for a return, your item must be unused and in the same condition that you received it. It
                must also be in the original packaging.</p>
            <br>
            <p>Several types of goods are exempt from being returned. We also do not accept products that are used.</p>
            <br>
            <p>To complete your return, we require a receipt or proof of purchase.</p>
            <br>
            <p>Please do not send your purchase back to the manufacturer.</p>
            <br>
            <p>There are certain situations where only partial refunds are granted (if applicable)</p>
            <p>Any item not in its original condition, is damaged or missing parts for reasons not due to our error</p>
            <p>Any item that is returned more than 10 days after delivery</p>
            <br>
            <p>Refunds (if applicable)</p>
            <p>Once your return is received and inspected, we will send you an email to notify you that we have received
                your returned item. We will also notify you of the approval or rejection of your refund.</p>
            <p>If you are approved, then your refund will be processed, and a credit will automatically be applied to
                your credit card or original method of payment, within a certain amount of days.</p>
            <br>
            <p>Late or missing refunds (if applicable)</p>
            <p>If you haven’t received a refund yet, first check your bank account again.</p>
            <p>Then contact your credit card company, it may take some time before your refund is officially posted.</p>
            <p>Next contact your bank. There is often some processing time before a refund is posted.</p>
            <p>If you’ve done all of this and you still have not received your refund yet, please contact us at
                support@farmersstop.com.
            </p>
            <br>
            <p>Exchanges (if applicable)</p>
            <p>We only replace items if they are defective or damaged. If you need to exchange it for the same item,
                send us an email at kisanmitra@gmail.com 303801.</p>
            <br>




            You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are
            non-refundable. If you receive a refund, the cost of return shipping will be deducted from your refund.

            Depending on where you live, the time it may take for your exchanged product to reach you, may vary.

            If you are shipping an item , you should consider using a trackable shipping service or purchasing shipping
            insurance. We don’t guarantee that we will receive your returned item.
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
                            <a href="http://localhost/Kisan%20Mitra/policy/aboutus.php" class="info-seeds">About Us</a><br>
                            <a href="http://localhost/Kisan%20Mitra/policy/contactus.php" class="info-seeds">Contact Us</a><br>
                            <p class="info-seeds p1">Refund Policy</p>
                            
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