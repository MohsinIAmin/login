<?php
$server = "localhost";
$user = "webTechLogin";
$pass = "amin1234";
$database = "login_register_pure_coding";
    $con = mysqli_connect($server, $user, $pass, $database);
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
