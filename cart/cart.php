<?php
$conn = new mysqli('localhost', 'root', '', 'kisan_mitra');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_GET['delete'])) {
    $productToDelete = $_GET['delete'];
    if (isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array_filter($_SESSION['cart'], function ($value) use ($productToDelete) {
            return $value != $productToDelete;
        });
    }
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_POST['buy'])) {
    $address = $_POST['address'];
    $products = array_count_values($_SESSION['cart']);
    $tcost = 0;
    foreach ($products as $product => $quantity) {
        $query = "SELECT * FROM product where p_name='$product'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $total_price = $quantity * $row['p_price'];
        $tcost += $total_price;
    }

    $query = "INSERT INTO orders(u_name,u_address,tot_cost) VALUES ('{$_SESSION['username']}','$address','$tcost')";
    mysqli_query($conn, $query);
    $order_id = mysqli_insert_id($conn);

    foreach ($products as $product => $quantity) {
        $query = "SELECT * FROM product WHERE p_name = '$product'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $query = "INSERT INTO order_items(o_id, p_name, quantity, price) VALUES ('$order_id', '$product', '$quantity', '$row[p_price]')";
        mysqli_query($conn, $query);
    }
    unset($_SESSION['cart']);
    echo "Order placed successfully!";
    header('Refresh: 2; URL=http://localhost/Kisan%20Mitra/home/home.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | Kisan Mitra</title>
    <link rel="stylesheet" href="http://localhost/Kisan Mitra/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="shortcut icon" href="http://localhost/Kisan%20Mitra/photos/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/home/multipurpose.css">
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/cart/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>

    </style>
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
                        <a href="http://localhost/Kisan%20Mitra/home/home.php" class="a2 ahover">Home</a>
                    </div>
                    <div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink" style="width: 150px">
                        <a href="http://localhost/Kisan%20Mitra/cart/order.php" class="a2 ahover">Your Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <h1 class="text-center">Your Cart Products</h1>
        <div class="container d-flex justify-content-center mb-5 flex-column">
            <?php
            if (isset($_SESSION['cart'])) {
                $products = array_count_values($_SESSION['cart']);
            ?>
                <table class="mt-5">
                    <tr>
                        <th>Sl No</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Product Price</th>
                        <th>Total Price</th>
                        <th>Image</th>
                        <th>&nbsp;&nbsp;&nbsp; Remove &nbsp;&nbsp;&nbsp;</th>
                    </tr>
                    <?php
                    $a = 1;
                    $tcost = 0;
                    foreach ($products as $product => $quantity) {
                        $query = "SELECT * FROM product WHERE p_name= '$product'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);
                        $total_price = $quantity * $row['p_price'];
                        $tcost += $total_price;
                    ?>
                        <tr>
                            <td><?php echo $a++; ?></td>
                            <td><?php echo $row['p_name']; ?></td>
                            <td><?php echo $quantity; ?></td>
                            <td><?php echo $row['p_price']; ?></td>
                            <td><?php echo $total_price; ?></td>
                            <td><img src="http://localhost/kisan%20mitra/album/<?php echo $row['p_image']; ?>" width="100" height="100"></td>
                            <td><button class="bg-danger" onclick="window.location.href='?delete=<?php echo $product; ?>'">Delete</button></td>
                        </tr>
                    <?php
                    }
                    ?>
                    <tr>
                        <td colspan="4">Total Cost:</td>
                        <td><?php echo $tcost; ?></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

                <form action="" method="post"><br>
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" placeholder="Enter the address for product delivery" class="w-25" required><br>
                    <input type="submit" name="buy" value="Buy">
                </form>
            <?php



            } else {
                echo "<h4>You Have Nothing In Your Cart</h4>";
            } ?>



        </div>

    </main>
    <footer>
        <div class="container-fluid  foot-content">
            <div class="row h-100 d-flex justify-content-center align-content-center">
                <div class="col-3 mt-3 ms-5">
                    <div class="logo-col col-6 ms-5">
                        <img src="http://localhost/kisan%20mitra/photos/logo.jpg" alt="" srcset="" class="pb-3 limg">
                    </div>
                    <div class="col- title ms-5">
                        <h3 class="">Kisan Mitra</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bgcol text-center fs-5 pt-3">
            <p class="me-4"> &copy; Copyright 2025 Kisan Mitra</p>
        </div>
    </footer>
</body>

</html>