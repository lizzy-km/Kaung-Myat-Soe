<?php
 include("config.php");

 $id = $_GET['Id'];
 $sql = "DELETE FROM user_data WHERE Id = $id";
 mysqli_query($conn, $sql);
 header("location: view.php");

?>