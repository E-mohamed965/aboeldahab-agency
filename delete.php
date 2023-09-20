<?php
   include('yu.php');
  $x=$_GET['id'];
 mysqli_query($link, "DELETE  FROM cars  WHERE id=$x"); 
 header ('location: available2.php');
  
?>