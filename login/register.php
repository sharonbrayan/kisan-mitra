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
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telno=$_POST['phno'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT * FROM farmer WHERE f_name = '$username' OR f_email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        
        echo "<script>alert('Username or email already exists.'); window.location.href='http://localhost/Kisan%20Mitra/login/register.php';</script>";

        exit;
    }

    // Insert user into database
    $query = "INSERT INTO farmer (f_name,f_tel,f_email, password) VALUES ('$username','$telno','$email', '$hashedPassword')";
    if ($conn->query($query) === TRUE) {
        $_SESSION['username'] = $username;
        header('Location: http://localhost/Kisan%20Mitra/home/home.php');
        exit;
        } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Kisan Mitra</title>
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="shortcut icon" href="http://localhost/Kisan%20Mitra/photos/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/login/register.css">
    <style>
        .mt--1{
        margin-top:-25px;
    }
    </style>
</head>

<body>
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <div class="col-md-6 img d-flex justify-content-center text-white">

                <p class="position-absolute msg">Welcome To Kisan Mitra</p>
                <p class="position-absolute quote">"Smart Farming, Better Harvest"</p>
            </div>
            <div class="col-md-6">
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
                        <h2 class="primcol text-center mt-1">Sign Up To Kisan Mitra</h2>
                        <br><br>
                        <div class="login-form d-flex justify-content-center mt--1">
                            <div class="d-flex justify-content-center bg-white border form">
                                <form method="post">
                                    <label for="username" class="my-3">Username</label>
                                    <input type="text" name="username" id="username" placeholder="Enter Your Name:"
                                        class="w-100" required>
                                    <label for="phno" class="my-3">Phone Number</label><br>
                                    <input type="tel" name="phno" id="phno" class="w-100" placeholder="Enter Your Phone Number" required>
                                    <label for="email" class="my-3">Email Address:</label><br>
                                    <input type="email" name="email" id="email" placeholder="Enter your email"
                                        class="w-100" required>
                                    <label for="password" class="my-3">Password:</label><br>
                                    <input type="password" name="password" id="password" placeholder="Enter password"
                                        class="w-100" required>
                                    <br><br>

                                    <input type="submit" value="Continue" class="w-25 text-white hbtn">
                                    <br><br>
                                    <div class="col-md-12 d-flex justify-content-between">
                                        <div class="col-md-6">
                                            <p>Already have an account?</p>
                                        </div>
                                        <div class="col-md-5 text-end">
                                            <a href="http://localhost/Kisan%20Mitra/login/login.php" class="text-decoration-none">Login</a>
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