<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=" UTF-8">
    <title> Update</title>
    <link rel="stylesheet" href="add.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body class="body">

<?php
include('yu.php'); 
$x=$_GET['id'];
 $up= mysqli_query($link, "select * from cars  where ID =$x"); 
 $data=mysqli_fetch_array($up);

?>
    
<center>

     
         <div class="container">
         <a href="index.php"><button type="button" class="btn btn-outline-light">Home</button></a>
         <form action="up.php" method="post" enctype="multipart/form-data">
       <h2>Update data</h2>

        <div class="user-details">
        <div class="input-box">
       <label >ID</label>
        <input type="text" name="ID" value=' <?php echo $data['ID']?>'><br>
</div>
<div class="input-box">
        <label >Name</label>
        <input type="text" name="Name" value=' <?php echo $data['Name']?>'><br>
</div>
<div class="input-box">
        <label >Model</label>
        <input type="text" name="Model" value=' <?php echo $data['Model']?>'><br>
    
</div>
<div class="input-box">
        <label >color</label>
        <input type="text" name="color" value=' <?php echo $data['color']?>'><br>
</div>
<div class="input-box">
        <label >Price</label>
        <input type="text" name="Price" value=' <?php echo $data['Price']?>'>
</div>
<div class="input-box">
        <input type="file"  id ="file" name="Image"  style='display:none;'>
        <label for="file">Upload image</label>
</div>
</div>
       <button  name='update' type='submit' >Confirm</button>

        </form>
       
</div>
</center>
</body>
         </html>