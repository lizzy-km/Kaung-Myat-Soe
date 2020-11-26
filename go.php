<?php
 include("config.php");

 $pass = $_POST['password'];
 $email = $_POST['email'];
 mysqli_query($conn, $sql);
 $sql = "INSERT INTO user_data (Email, Password) VALUES ('$email', '$pass')";
 


 header("location: login.php");
?> 