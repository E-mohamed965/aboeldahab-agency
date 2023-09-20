<?php
   include('yu.php');
  $w=$_GET['id'];
 mysqli_query($link, "DELETE  FROM employee  WHERE id=$w"); 
 header ('location: show3.php');
  
?>