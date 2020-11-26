<?php 
//session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Untitled Document</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        a {
            margin-bottom: 20px;
            margin-top: -20px;
        }

        border {
            height: 20%;


        }
        .box{
            background-color: dimgrey;
            margin-left: 300px;
        }
        body{
            background-color: dimgrey;
        }

    </style>
</head>

<body>

<div class="box container">
    <div class="mt-3 bg-secondary p-3 border border-dark ml-5 w-50 container">
        <p class="container font-weight-bold text-light">Are you sure want to logout? </p>
    </div>

    <div class="bg-light border border-dark  ml-5 p-4 w-50">

        <a class="btn btn-secondary float-right ml-3 pl-3 mr-5" type="button" href="bst.php">No</a>
        <a class="  btn btn-danger float-right pl-3 ml-3" href="lg.php">Yes</a>
    </div></div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>

</html>
<?php
//session_destroy();
//header("location:logout.php");
?>
