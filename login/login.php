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
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM admin WHERE a_name = '$username'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    $admin = $result->fetch_assoc();
    if ($password===$admin['a_password']) {
      $_SESSION['admin_username'] = $username;
      header('Location: http://localhost/Kisan%20Mitra/dashboard/dashboard.php');
      exit;
    } else {
        echo "<script>alert('Invalid a Password'); 
        window.location.href='http://localhost/Kisan%20Mitra/login/login.php';</script>";
    }
  } else {

  $query = "SELECT * FROM farmer WHERE f_name = '$username'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
      $_SESSION['username'] = $username;
      header('Location: http://localhost/Kisan%20Mitra/home/home.php');
      exit;
    } else {
        echo "<script>alert('Invalid Password'); 
        window.location.href='http://localhost/Kisan%20Mitra/login/login.php';</script>";
    }
  } else {
    echo "<script>alert('User Not Found.'); 
    window.location.href='http://localhost/Kisan%20Mitra/login/login.php';</script>";
  }
}
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Kisan Mitra</title>
    <link rel="stylesheet" href="http://localhost/Kisan Mitra/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="shortcut icon" href="http://localhost/Kisan%20Mitra/photos/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/login/login.css">
   


</head>

<body>

    <div class="container-fluid vh-100">
        <div class="row h-100">
            <div class="col-6 img d-flex justify-content-center text-white">

                <p class="position-absolute msg">Welcome To Kisan Mitra</p>
                <p class="position-absolute quote">"Smart Farming, Better Harvest"</p>
            </div>
            <div class="col-6">
                <header>
                    <nav>
                        <div class="contain navbarr">
                            <div class="logo"></div>
                            <h1 class="d-inline text-white">Kisan</h1> &nbsp;
                            <span class="text-warning fs-1 fw-bolder">Mitra</span>
                        </div>
                    </nav>
                </header>
                <br>
                <main class="">
                    <div class="fwidth ">
                        <h2 class="primcol text-center mt-3">Login To Your Account</h2>
                        <br><br>
                        <div class="login-form d-flex justify-content-center">
                            <div class="d-flex justify-content-center bg-white border form">
                                <form action="" method="post">
                                    <label for="username" class="my-3">Username:</label><br>
                                    <input type="text" name="username" id="username" placeholder="Enter your username"
                                        class="w-100" required>
                                    <label for="password" class="my-3">Password:</label><br>
                                    <input type="password" name="password" id="password" placeholder="Enter password" class="w-100" required>
                                    <br><br>

                                    <input type="submit" value="Continue" class="w-25 text-white hbtn">
                                    <br><br>
                                    <div class="col-md-12 d-flex justify-content-between">
                                        <div class="col-md-6">
                                            <p>Don't have an account?</p>
                                        </div>
                                        <div class="col-md-5 text-end">
                                            <a href="http://localhost/Kisan%20Mitra/login/register.php" class="text-decoration-none">Register now</a>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <div class="position-fixed end-0 bottom-0"><a href="http://localhost/Kisan%20Mitra/home/home.php" class="text-info">Home</a></div>
            </div>
        </div>
    </div>
</body>

</html>