<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Kisan Mitra</title>
    <link rel="stylesheet" href="http://localhost/Kisan Mitra/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="shortcut icon" href="http://localhost/Kisan%20Mitra/photos/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/dashboard/dashboard.css">
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/home/multipurpose.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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
                        <p class="a1 ahover ms-2">Dashboard</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container d-flex justify-content-center mt-5">
            <div class="row fs-4 w-50 ms-5 border bg-green">
                <div class="col-5 d-flex justify-content-center ms-5 "><button class="bg-green border-0" onclick="window.location.href='addproduct.php'">Add Products</button></div>
                <div class="col-5 d-flex justify-content-center "><button class="bg-green border-0" onclick="window.location.href='users.php'">Users</button></div>
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
</body>

</html>