<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=" UTF-8">
    <title> Update</title>
    <link rel="stylesheet" href="edit2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body class="body">

<?php
include('yu.php'); 
$x=$_GET['id'];
 $up= mysqli_query($link, "select * from employee  where ID =$x"); 
 $data=mysqli_fetch_array($up);

?>
    
<center>
<a href="index.php"><button type="button" class="btn btn-outline-light">Home</button></a>
         
         <div class="container">
         <h2>Update data</h2>
         <form action="up2.php" method="post" enctype="multipart/form-data" >
      <div class="user-details ">
       <div class="input-box">
       <label >ID</label>
        <input type="text" name="ID" value=' <?php echo $data['ID']?>'><br>
        </div>
        <div class="input-box">
        <label >FirstName</label>
        <input type="text" name="FirstName" value=' <?php echo $data['FirstName']?>'><br>
        </div> 
        <div class="input-box">
        <label >LastName</label>
        <input type="text" name="LastName" value=' <?php echo $data['LastName']?>'><br>
        </div>
        <div class="input-box">
        <label >Email</label>
        <input type="text" name="Email" value=' <?php echo $data['Email']?>'><br>
        </dev>
        <div class="input-box">
        <label >salary</label>
        <input type="text" name="salary" value=' <?php echo $data['salary']?>'><br>
         </div>
         <div class="input-box">
        <label >phonenumber</label>
        <input type="text" name="phonenumber" value=' <?php echo $data['phonenumber']?>'><br>
        </div>
</div>
           <button  name='update' class="bt"   type='submit' >Confirm</button>  
        </form>
</div>
</center>
</body>
         </html>