<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order | Kisan Mitra</title>
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
                                $username=$_SESSION['username'];
                                echo "<p class='fs-4 mt-4'>Welcome, <span class='fw-bold'>" . $_SESSION['username'] . "</span></p>";

                            }
                        ?>
                    </div>
                </div>
                <div class="col-6 h-100 d-flex justify-content-end align-items-center alink-container gap-3">
                    <div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink">
                        <a href="http://localhost/Kisan%20Mitra/home/home.php" class="a2 ahover">Home</a>
                    </div>
                    <div class="col-3 fs-2 fw-bold d-flex justify-content-center head-alink"
                        style="height: 56px; padding-top: 5px;">
                        <a href="http://localhost/Kisan%20Mitra/cart/cart.php" class="a4 ahover"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
<h1 class="text-center">Your Order Items</h1>
<?php
$conn=new mysqli('localhost','root','','kisan_mitra');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query="SELECT order_id FROM orders WHERE u_name='$username'";
$result=mysqli_query($conn,$query);
?>
<div class="container d-flex justify-content-center mb-5 flex-colum">
<table>
    <tr>
        <th>Sl No</th>
        <th>Product Name</th>
        <th>Image</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Order Status</th>
    </tr>

<?php
while($row=mysqli_fetch_assoc($result)){

    $oitems_query="SELECT * FROM order_items WHERE o_id=$row[order_id]";
    $oitems_result=mysqli_query($conn,$oitems_query);
    while($oitems_row=mysqli_fetch_assoc($oitems_result)){
        $slno=1
        ?>
        <tr>
            <td><?php echo $slno;?></td>
            <td><?php echo $oitems_row['p_name']?></td>
            <?php
            $pimage_query="SELECT * FROM product WHERE p_name='{$oitems_row['p_name']}'";
            $pimage_result=mysqli_query($conn,$pimage_query);
            while($pimage_row=mysqli_fetch_assoc($pimage_result)){
                ?>
                <td><img src="http://localhost/kisan%20mitra/album/<?php echo $pimage_row['p_image']; ?>" width="100" height="100"></td>
                <?php
            } 
            ?>
            <td><?php echo $oitems_row['quantity']?></td>
            <td><?php echo $oitems_row['price']?></td>
            <td>Out for Delivery</td>
        </tr>


<?php
    }
    $slno+=1;
}
?>

</table>
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