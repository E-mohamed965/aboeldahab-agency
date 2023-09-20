<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=" UTF-8">
    <title>sign.php</title>
    <link rel="stylesheet" href="emp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="body">
<?php
if(isset ($_POST['sign'])){ 
      $pass=$_POST['pass'];
}
if($pass=="1234"){ 
    header ('location: emp4.php');}
 else if($pass=="2345"){
    header ('location: available2.php');
 }
 else if($pass=="3456"){
    header ('location: insert.php');
 }
    else{ echo"<script>alert('Wrong Password')</script>";?>
  
        <a href="index.php"><button type="button" class="btn btn-outline-light">Home</button></a>
        <a href="emp.php"><button type="button" class="btn btn-outline-light">for emp</button></a>
        <?php
    }
?>
</body>