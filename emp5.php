<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'abo_eldahab agency');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if(isset ($_POST['sigw'])){
    $Name=$_POST['FirstName'];
    $Last=$_POST['LastName'];
    $Email=$_POST['Email'];
    $Phone=$_POST['phonenumber'];
    $Salary=$_POST['salary'];
    


if(empty($Name)||empty($Last)||empty($Email)||empty($Phone)||empty($Salary)){
 echo"<script>alert('All Data Required')</script>";?>
 <a href="index.php"><button type="button" class="btn btn-outline-light">Home</button></a>
 <a href="emp4.php"><button type="button" class="btn btn-outline-light">add emp</button></a>
 <?php
}
else{
    mysqli_query($link ,"INSERT INTO employee ( FirstName, LastName, Email, phonenumber,salary ) VALUES ('$Name','$Last','$Email','$Phone','$Salary')");
    header ('location: show3.php');
}

}

?>