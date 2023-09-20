<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'abo_eldahab agency');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if(isset ($_POST['update'])){
    $ID=$_POST['ID'];
    $Name=$_POST['FirstName'];
    $Model=$_POST['LastName'];
    $Color=$_POST['Email'];
    $Price=$_POST['salary']; 
    $confirm="UPDATE employee SET FirstName='$Name' ,LastName='$Model', Email='$Color',salary=' $Price' WHERE ID=$ID ";
mysqli_query($link ,$confirm);
header ('location: show3.php');
}

?>