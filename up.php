<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'abo_eldahab agency');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if(isset ($_POST['update'])){
    $ID=$_POST['ID'];
    $Name=$_POST['Name'];
    $Model=$_POST['Model'];
    $Color=$_POST['color'];
    $Price=$_POST['Price'];
    $Image=$_FILES['Image'];
    $image_location=$_FILES['Image']['tmp_name'];
    $image_name=$_FILES['Image']['name'];   
    $image_up="". $image_name; 
    $confirm="UPDATE cars SET Name='$Name' ,Model='$Model', color='$Color',Price=' $Price',Image='$image_up' WHERE ID=$ID ";

mysqli_query($link ,$confirm);
if(move_uploaded_file($image_location,''. $image_name)){
    echo"<script>alert('nice')</script>";
}
else{
    echo"<script>alert('bad')</script>";
}
header ('location: available2.php');
}

?>