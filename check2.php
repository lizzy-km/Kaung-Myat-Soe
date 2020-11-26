<?php
include('check.php');
$myfile= file_exists("t.html");
if($email==$log['Email'] && $pass==$log['Password' ]&&$myfile==1){
    $_SESSION['auth'] = true;
    header("Location:  bst.php");

//$sql = mysqli_query($conn,"SELECT Name FROM user_data WHERE Email='$email' And Password='$pass' ");
//$log=mysqli_fetch_array($sql);
//$row = $result->fetch_assoc();
//echo $row['Name'];
    //require('bst.php');
    //echo $main["Name"];
}
elseif($_SESSION['auth'] ){
  header("Location:  bst.php");
  //require('bst.php');
  //$sql = mysqli_query($conn,"SELECT Name FROM user_data WHERE Email='$email' And Password='$pass' ");
//$log=mysqli_fetch_array($sql);
  //echo $log['Name'];
}
else{

  $myfile = fopen("wrongpass.html", "r") or die("Unable to open file!");
echo fread($myfile,filesize("wrongpass.html"));

}
?>
