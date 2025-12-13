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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pimage = $_POST['pimage'];
    $category = $_POST['category'];
    $stkqty = $_POST['qty'];


    $query = "INSERT INTO product(p_name,p_price,p_image,category,p_stock) VALUES('$pname','$pprice','$pimage','$category',$stkqty)";
    if ($conn->query($query) === TRUE) {
        header('Location: http://localhost/Kisan%20Mitra/dashboard/addproduct.php');
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
if (isset($_GET['delete'])) {
    $p_name = $_GET['delete'];

    $query = "DELETE FROM product WHERE p_name='$p_name'";
    $conn->query($query);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
$query = "SELECT * FROM product";
$result = mysqli_query($conn, $query);
$total_products = $result->num_rows;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products | Kisan Mitra</title>
    <link rel="stylesheet" href="http://localhost/Kisan Mitra/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="shortcut icon" href="http://localhost/Kisan%20Mitra/photos/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/dashboard/dashboard.css">
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/login/login.css">
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/home/multipurpose.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        table {
            border: 2px solid black;
        }

        td {
            border: 2px solid black;
            text-align: center;

        }

        th {
            border: 2px solid black;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
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
                        if (isset($_SESSION['admin_username'])) {
                            echo "<p class='fs-4 mt-4'>Welcome, <span class='fw-bold'>" . $_SESSION['admin_username'] . "</span></p>";
                        }
                        ?>
                    </div>
                </div>
                <div class="col-6 h-100 d-flex justify-content-end align-items-center alink-container">
                    <div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink ms-0">
                        <a href="http://localhost/Kisan%20Mitra/login/logout.php" class="a3 ahover me-2">Logout</a>
                    </div>
                    <div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink me-5">
                        <a href="http://localhost/Kisan%20Mitra/dashboard/dashboard.php" class="a3 ahover ms-2">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!-- adding product to the product table -->
        <div class="container-fluid vh-100">
            <div class="row h-100 d-flex justify-content-center">
                <div class="col-6">
                    <br>
                    <main class="">
                        <div class="fwidth ">
                            <h2 class="primcol text-center mt-3">Enter The Product Details Here:</h2>
                            <br><br>
                            <div class="login-form d-flex justify-content-center">
                                <div class="d-flex justify-content-center bg-white border form">
                                    <form action="" method="post">
                                        <label for="pname" class="my-3 text-warning">Product Name:</label><br>
                                        <input type="text" name="pname" id="pname" placeholder="Enter Product Name"
                                            class="w-100" required>
                                        <label for="pprice" class="my-3">Price:</label><br>
                                        <input type="number" name="pprice" id="pprice" placeholder="Enter price" class="w-100" required>
                                        <label for="qty" class="my-3">Quantity:</label><br>
                                        <input type="number" name="qty" id="qty" placeholder="Enter Stock Quantiy" class="w-100" required>
                                        <label for="pimage" class="my-3">Image:</label><br>
                                        <input type="file" name="pimage" id="pimage" class="w-100" required>
                                        <label for="category" class="my-3">Category:</label><br>
                                        <select name="category" name="category" id="category" required>
                                            <option value="" disabled selected hidden>Select an option</option>
                                            <option value="Vegetable Seeds">Vegetable Seeds</option>
                                            <option value="Fruit Seeds">Fruit Seeds</option>
                                            <option value="Flower Seeds">Flower Seeds</option>
                                            <option value="Cereal Seeds">Cereal Seeds</option>
                                            <option value="Fertilizers">Fertilizers</option>
                                            <option value="Plants">Plants</option>
                                            <option value="Equipments">Equipments</option>
                                        </select>
                                        <br><br>
                                        <input type="submit" value="Continue" class="w-25 text-white hbtn">
                                        <br><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
        </div>
        <!-- displaying products -->
        <div class="container">
            <div class="row">
                <h2 class="text-center">Product List</h2>
                <div style="width:100%;" class="d-flex justify-content-end">
                    <p><?php
                        echo "Total number of products: " . $total_products;
                        ?></p>
                </div>

                <table>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Remove</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['p_name']; ?></td>
                            <td><?php echo $row['p_price'] . " Rs"; ?></td>
                            <td><?php
                                if ($row['p_stock'] == 0) {
                                    echo '<p class=" text-danger">Stock not available</p>';
                                } else {
                                    echo $row['p_stock'];
                                } ?></td>


                            <td><?php echo $row['category']; ?></td>
                            <td><img src="http://localhost/kisan%20mitra/album/<?php echo $row['p_image']; ?>" width="100" height="100"></td>
                            <td><button class="bg-danger" onclick="window.location.href='?delete=<?php echo $row['p_name']; ?>'">Delete</button></td>

                        </tr>
                    <?php } ?>
                </table>


            </div>
        </div>
    </main>

    <footer>
        <div class="container-fluid  foot-content">
            <div class="row h-100 d-flex justify-content-center align-content-center">
                <div class="col-3 mt-3 ms-5">
                    <div class="logo-col col-6 ms-5">
                        <img src="http://localhost/kisan%20mitra/photos/logo.jpg" alt="" srcset="" class="pb-3">
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
    <?php
    $conn->close();
    ?>
</body>

</html>