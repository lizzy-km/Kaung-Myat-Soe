<?php
include("config.php");
session_start();
$email=$_POST['email'];
$pass=$_POST['password'];
$myfile= file_exists("C:\admin.txt");
$main=mysqli_query($conn,"Select * from user_data WHERE Email='$email' And Password='$pass' ");
$log=mysqli_fetch_array($main);
//echo "YOu Enter $email and $password";

//email must be admin@gmail.com and password be admin123

if($email!=""  && $pass!="" && $email==$log['Email'] && $pass==$log['Password' ]&&$myfile==1)
{
    $_SESSION['auth'] = true;
    header("Location:  bst.php");


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
