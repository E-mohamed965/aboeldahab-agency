<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'abo_eldahab agency');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if(isset ($_POST['submit'])){
    $Name=$_POST['Name'];
    $Model=$_POST['Model'];
    $Color=$_POST['color'];
    $Price=$_POST['Price'];
    $Image=$_FILES['Image'];
    $image_location=$_FILES['Image']['tmp_name'];
    $image_name=$_FILES['Image']['name'];   
    $image_up=''. $image_name; 
    $insert ="INSERT INTO cars (Name, Model, color,Price,Image ) VALUES ('$Name','$Model','$Color','$Price',' $image_up')";
if(empty($Name)||empty($Model)||empty($Color)||empty($Price)||empty($image_up)){
    echo"<script>alert('All Data Required')</script>";?>
   
    <a href="index.php"><button type="button" class="btn btn-outline-light">Home</button></a>
    <a href="insert.php"><button type="button" class="btn btn-outline-light">add car</button></a>
    <?php
   }
   else{mysqli_query($link ,$insert);
       echo"<script>alert('nice')</script>";
       header ('location: available2.php');
   }
   
   
   }
   ?>
