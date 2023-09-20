<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'abo_eldahab agency');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if(isset ($_POST['sige'])){
    $Name=$_POST['FirstName'];
    $Last=$_POST['LastName'];
    $Email=$_POST['Email'];
    $Phone=$_POST['phonenumber'];
if(empty($Name)||empty($Last)||empty($Email)||empty($Phone)){
 echo"<script>alert('All Data Required')</script>";?>

 <a href="index.php"><button type="button" class="btn btn-outline-light">Home</button></a>
 <a href="sign.php"><button type="button" class="btn btn-outline-light">Sign up</button></a>
 <?php
}
else{mysqli_query($link ,"INSERT INTO clients ( FirstName, LastName, Email, phonenumber ) VALUES ('$Name','$Last','$Email','$Phone')");
    echo"<script>alert('nice')</script>";
    header ('location: available.php');
}


}
?>