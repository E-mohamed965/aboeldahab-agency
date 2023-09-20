<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=" UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="available.css">
    <title>available cars</title>
    <style>
      .card-img-top{
        margin-left:150px;
      }
      
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </head>
<body>
 <a href="index.php"><button type="button" class="btn btn-outline-light">Home</button></a> <br>
 <a href="insert.php"><button type="button" class="btn btn-outline-light">addcar</button></a>   
<?php
include('yu.php');
    $result = mysqli_query($link, "SELECT * FROM cars"); 
            while($row = mysqli_fetch_array($result)){
         echo "
         <center>
         <main>
<div class='card' style='width: 35rem;'>
  <img src='$row[Image]' class='card-img-top'>
  <div class='card-body'>
  <h5 class='card-text'>$row[Name]</h5>  
    <h5 class='card-title'>$row[Model]</h5>
    <h5 class='card-text'>$row[color]</h5>
    <h5 class='card-text'>$row[Price]</h5>
   

    <a href='delete.php? id=$row[ID]'class='btn btn-danger'>delete</a>
    <a href='edit.php? id=$row[ID] ' class='btn btn-primary'>edit</a>
  </div>
</div>
        </main>
         <center>
         ";  
            }


?>


</body>
</html>