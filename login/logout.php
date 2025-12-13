<?php
session_start();
unset($_SESSION['username']);
session_destroy();
header('Location: http://localhost/Kisan%20Mitra/home/home.php');
exit;
?>
