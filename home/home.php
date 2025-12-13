<!-- establishing connection -->
<?php
session_start();
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'kisan_mitra';
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* if (session_status() === PHP_SESSION_NONE) {
    session_start();
} */

/* adding to cart */
$query = "SELECT * FROM product";
$result = mysqli_query($conn, $query);
if (isset($_GET['addtocart'])) {
    $cp_name = $_GET['addtocart'];
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    $_SESSION['cart'][] = $cp_name;
    header('Location:home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Kisan Mitra</title>
    <link rel="stylesheet" href="http://localhost/Kisan Mitra/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="shortcut icon" href="http://localhost/Kisan%20Mitra/photos/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/home/home.css">
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/home/multipurpose.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <header>
        <a href="http://localhost/kisan%20mitra/chatbot/chat.php">
            <div style="position:fixed; bottom:5%; right:1%; height: 80px; width: 80px; border-radius:50px"><img src="http://localhost/kisan%20mitra/photos/chatbot.jpg" alt="" srcset="" height="80px" width="80px"></div>
        </a>
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
                            echo "<p class='fs-4 mt-4'>Welcome, <span class='fw-bold'>" . $_SESSION['username'] . "</span></p>";
                        }
                        ?>
                    </div>
                </div>
                <div class="col-6 h-100 d-flex justify-content-end align-items-center alink-container gap-3">
                    <div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink">
                        <p class="a1 ahover">Home</p>
                    </div>
                    <div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink">
                        <a href="http://localhost/Kisan%20Mitra/policy/aboutus.php" class="a2 ahover">About Us</a>
                    </div>

                    <?php
                    if (session_status() === PHP_SESSION_NONE) {
                        session_start();
                    }
                    if (isset($_SESSION['username'])) {
                        echo '<div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink ms-">
                        <a href="http://localhost/Kisan%20Mitra/login/logout.php" class="a3 ahover">Logout</a>
                        </div></a>';
                    } else {
                        echo '<div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink ms-">
                        <a href="http://localhost/Kisan%20Mitra/login/login.php" class="a3 ahover">Login</a>
                        </div>';
                    }
                    ?>
                    <div class="col-3 fs-2 fw-bold d-flex justify-content-center head-alink"
                        style="height: 56px; padding-top: 5px;">
                        <a href="http://localhost/Kisan%20Mitra/cart/cart.php" class="a4 ahover"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!-- displaying products category wise -->
        <div class="container mt-5 mb-5 border-black border p-5">
            <h4>Vegetable Seeds</h4>
            <div class="row border-black border sveg d-flex justify-content-around mb-5">
                <!-- Row for vegetable seeds -->
                <?php while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['category'] === "Vegetable Seeds") {
                ?>
                        <div class="col-3 border border-black pdiv m-4">
                            <p class="fs-4 mb-0"><?php echo $row['p_name'] . " :"; ?></p>
                            <img src="http://localhost/kisan%20mitra/album/<?php echo $row['p_image']; ?>" width="245" height="200">
                            <p class="fs-5 mb-0"><?php echo "Price: " . $row['p_price'] . " Rs"; ?></p>
                            <?php
                            if ($row['p_stock'] == 0) {
                                echo '<p class="text-danger mb-2">Stock not available</p>';
                            } else { ?>
                                <p class="mb-2"><?php echo "Stocks left: " . $row["p_stock"]; ?></p>
                                <?php
                                if (session_status() === PHP_SESSION_NONE) {
                                    session_start();
                                }
                                if (isset($_SESSION['username'])) {
                                    echo "<p class='text-center'><button onclick=\"window.location.href='?addtocart=" . $row['p_name'] . "'\" class='bg-green btn btn-outline-success'>Add to Cart <i class='fa-solid fa-cart-shopping'></i></button></p>";
                                } else {
                                    echo "<p class='text-center'><button class='bg-green btn btn-outline-success'><a style='color: black; text-decoration:none;'  href='http://localhost/Kisan%20Mitra/login/login.php'>Login To Buy</a></button></p>";
                                }
                                ?>
                            <?php } ?>
                        </div>

                <?php }
                }
                mysqli_data_seek($result, 0);
                ?>

            </div>
            <h4>Fruit Seeds</h4>
            <div class="row border-black border sfruit d-flex justify-content-around mb-5">
                <!-- Row for fruit seeds -->
                <?php while ($row = mysqli_fetch_assoc($result)) {

                    if ($row['category'] === "Fruit Seeds") {
                ?>
                        <div class="col-3 border border-black pdiv m-4">
                            <p class="fs-4 mb-0"><?php echo $row['p_name'] . " :"; ?></p>
                            <img src="http://localhost/kisan%20mitra/album/<?php echo $row['p_image']; ?>" width="245" height="200">
                            <p class="fs-5 mb-0"><?php echo "Price: " . $row['p_price'] . " Rs"; ?></p>
                            <?php
                            if ($row['p_stock'] == 0) {
                                echo '<p class="text-danger mb-2">Stock not available</p>';
                            } else { ?>
                                <p class="mb-2"><?php echo "Stocks left: " . $row["p_stock"]; ?></p>
                                <?php
                                if (session_status() === PHP_SESSION_NONE) {
                                    session_start();
                                }
                                if (isset($_SESSION['username'])) {
                                    echo "<p class='text-center'><button onclick=\"window.location.href='?addtocart=" . $row['p_name'] . "'\" class='bg-green btn btn-outline-success'>Add to Cart <i class='fa-solid fa-cart-shopping'></i></button></p>";
                                } else {
                                    echo "<p class='text-center'><button class='bg-green btn btn-outline-success'><a style='color: black; text-decoration:none;'  href='http://localhost/Kisan%20Mitra/login/login.php'>Login To Buy</a></button></p>";
                                }
                                ?> <?php } ?>

                        </div>

                <?php }
                }
                mysqli_data_seek($result, 0);
                ?>
            </div>
            <h4>Flower Seeds</h4>
            <div class="row border-black border sflower d-flex justify-content-around mb-5">
                <!-- Row for flower seeds -->
                <?php while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['category'] === "Flower Seeds") {
                ?>
                        <div class="col-3 border border-black pdiv m-4">
                            <p class="fs-4 mb-0"><?php echo $row['p_name'] . " :"; ?></p>
                            <img src="http://localhost/kisan%20mitra/album/<?php echo $row['p_image']; ?>" width="245" height="200">
                            <p class="fs-5 mb-0"><?php echo "Price: " . $row['p_price'] . " Rs"; ?></p>
                            <?php
                            if ($row['p_stock'] == 0) {
                                echo '<p class="text-danger mb-2">Stock not available</p>';
                            } else { ?>
                                <p class="mb-2"><?php echo "Stocks left: " . $row["p_stock"]; ?></p>
                                <?php
                                if (session_status() === PHP_SESSION_NONE) {
                                    session_start();
                                }
                                if (isset($_SESSION['username'])) {
                                    echo "<p class='text-center'><button onclick=\"window.location.href='?addtocart=" . $row['p_name'] . "'\" class='bg-green btn btn-outline-success'>Add to Cart <i class='fa-solid fa-cart-shopping'></i></button></p>";
                                } else {
                                    echo "<p class='text-center'><button class='bg-green btn btn-outline-success'><a style='color: black; text-decoration:none;'  href='http://localhost/Kisan%20Mitra/login/login.php'>Login To Buy</a></button></p>";
                                }
                                ?> <?php } ?>

                        </div>

                <?php }
                }
                mysqli_data_seek($result, 0);
                ?>
            </div>
            <h4>Cereal Seeds</h4>
            <div class="row border-black border scereal d-flex justify-content-around mb-5">
                <!-- Row for cereal seeds -->
                <?php while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['category'] === "Cereal Seeds") {
                ?>
                        <div class="col-3 border border-black pdiv m-4">
                            <p class="fs-4 mb-0"><?php echo $row['p_name'] . " :"; ?></p>
                            <img src="http://localhost/kisan%20mitra/album/<?php echo $row['p_image']; ?>" width="245" height="200">
                            <p class="fs-5 mb-0"><?php echo "Price: " . $row['p_price'] . " Rs"; ?></p>
                            <?php
                            if ($row['p_stock'] == 0) {
                                echo '<p class="text-danger mb-2">Stock not available</p>';
                            } else { ?>
                                <p class="mb-2"><?php echo "Stocks left: " . $row["p_stock"]; ?></p>
                                <?php
                                if (session_status() === PHP_SESSION_NONE) {
                                    session_start();
                                }
                                if (isset($_SESSION['username'])) {
                                    echo "<p class='text-center'><button onclick=\"window.location.href='?addtocart=" . $row['p_name'] . "'\" class='bg-green btn btn-outline-success'>Add to Cart <i class='fa-solid fa-cart-shopping'></i></button></p>";
                                } else {
                                    echo "<p class='text-center'><button class='bg-green btn btn-outline-success'><a style='color: black; text-decoration:none;'  href='http://localhost/Kisan%20Mitra/login/login.php'>Login To Buy</a></button></p>";
                                }
                                ?> <?php } ?>

                        </div>

                <?php }
                }
                mysqli_data_seek($result, 0);
                ?>
            </div>
            <h4>Fertilizers(1kg)</h4>
            <div class="row border-black border fert d-flex justify-content-around mb-5">
                <!-- Row for fertilizers -->
                <?php while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['category'] === "Fertilizers") {
                ?>
                        <div class="col-3 border border-black pdiv m-4">
                            <p class="fs-4 mb-0"><?php echo $row['p_name'] . " :"; ?></p>
                            <img src="http://localhost/kisan%20mitra/album/<?php echo $row['p_image']; ?>" width="245" height="200">
                            <p class="fs-5 mb-0"><?php echo "Price: " . $row['p_price'] . " Rs"; ?></p>
                            <?php
                            if ($row['p_stock'] == 0) {
                                echo '<p class="text-danger mb-2">Stock not available</p>';
                            } else { ?>
                                <p class="mb-2"><?php echo "Stocks left: " . $row["p_stock"]; ?></p>
                                <?php
                                if (session_status() === PHP_SESSION_NONE) {
                                    session_start();
                                }
                                if (isset($_SESSION['username'])) {
                                    echo "<p class='text-center'><button onclick=\"window.location.href='?addtocart=" . $row['p_name'] . "'\" class='bg-green btn btn-outline-success'>Add to Cart <i class='fa-solid fa-cart-shopping'></i></button></p>";
                                } else {
                                    echo "<p class='text-center'><button class='bg-green btn btn-outline-success'><a style='color: black; text-decoration:none;'  href='http://localhost/Kisan%20Mitra/login/login.php'>Login To Buy</a></button></p>";
                                }
                                ?> <?php } ?>

                        </div>

                <?php }
                }
                mysqli_data_seek($result, 0);
                ?>
            </div>
            <h4>Plants</h4>
            <div class="row border-black border plants d-flex justify-content-around mb-5">
                <!-- Row for plants -->
                <?php while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['category'] === "Plants") {
                ?>
                        <div class="col-3 border border-black pdiv m-4">
                            <p class="fs-4 mb-0"><?php echo $row['p_name'] . " :"; ?></p>
                            <img src="http://localhost/kisan%20mitra/album/<?php echo $row['p_image']; ?>" width="245" height="200">
                            <p class="fs-5 mb-0"><?php echo "Price: " . $row['p_price'] . " Rs"; ?></p>
                            <?php
                            if ($row['p_stock'] == 0) {
                                echo '<p class="text-danger mb-2">Stock not available</p>';
                            } else { ?>
                                <p class="mb-2"><?php echo "Stocks left: " . $row["p_stock"]; ?></p>
                                <?php
                                if (session_status() === PHP_SESSION_NONE) {
                                    session_start();
                                }
                                if (isset($_SESSION['username'])) {
                                    echo "<p class='text-center'><button onclick=\"window.location.href='?addtocart=" . $row['p_name'] . "'\" class='bg-green btn btn-outline-success'>Add to Cart <i class='fa-solid fa-cart-shopping'></i></button></p>";
                                } else {
                                    echo "<p class='text-center'><button class='bg-green btn btn-outline-success'><a style='color: black; text-decoration:none;'  href='http://localhost/Kisan%20Mitra/login/login.php'>Login To Buy</a></button></p>";
                                }
                                ?>
                            <?php } ?>

                        </div>

                <?php }
                }
                mysqli_data_seek($result, 0);
                ?>
            </div>
            <h4>Equipments</h4>
            <div class="row border-black border equip d-flex justify-content-around mb-5">
                <!-- Row for equipments -->
                <?php while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['category'] === "Equipments") {
                ?>
                        <div class="col-3 border border-black pdiv m-4">
                            <p class="fs-4 mb-0"><?php echo $row['p_name'] . " :"; ?></p>
                            <img src="http://localhost/kisan%20mitra/album/<?php echo $row['p_image']; ?>" width="245" height="200">
                            <p class="fs-5 mb-0"><?php echo "Price: " . $row['p_price'] . " Rs"; ?></p>
                            <?php
                            if ($row['p_stock'] == 0) {
                                echo '<p class="text-danger mb-2">Stock not available</p>';
                            } else { ?>
                                <p class="mb-2"><?php echo "Stocks left: " . $row["p_stock"]; ?></p>
                                <?php
                                if (session_status() === PHP_SESSION_NONE) {
                                    session_start();
                                }
                                if (isset($_SESSION['username'])) {
                                    echo "<p class='text-center'><button onclick=\"window.location.href='?addtocart=" . $row['p_name'] . "'\" class='bg-green btn btn-outline-success'>Add to Cart <i class='fa-solid fa-cart-shopping'></i></button></p>";
                                } else {
                                    echo "<p class='text-center'><button class='bg-green btn btn-outline-success'><a style='color: black; text-decoration:none;'  href='http://localhost/Kisan%20Mitra/login/login.php'>Login To Buy</a></button></p>";
                                }
                                ?>
                            <?php } ?>

                        </div>

                <?php }
                }
                mysqli_data_seek($result, 0);
                ?>
            </div>
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