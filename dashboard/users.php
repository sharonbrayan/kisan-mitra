<?php
$conn = new mysqli("localhost", "root", "", "kisan_mitra");

if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}

$query = "SELECT * FROM farmer";
$result = $conn->query($query);
$total_users = $result->num_rows;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Detils | Kisan Mitra</title>
    <link rel="stylesheet" href="http://localhost/Kisan Mitra/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="shortcut icon" href="http://localhost/Kisan%20Mitra/photos/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/dashboard/dashboard.css">
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
        <div class="container mt-5">
            <div class="row">
                <h2 class="text-center">User List</h2>
                <div style="width:100%;" class="d-flex justify-content-end">
                    <p><?php
                        echo "Total number of users/farmers: " . $total_users;
                        ?></p>
                </div>
<!-- displaying users -->
<table>
<tr>
<th>Sl No</th>
<th>Farmer/User Name</th>
<th>Telephone No</th>
<th>Email</th>
</tr>
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['f_id']; ?></td>
<td><?php echo $row['f_name']; ?></td>
<td><?php echo $row['f_tel']; ?></td>
<td><?php echo $row['f_email']; ?></td>
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
</body>

</html>