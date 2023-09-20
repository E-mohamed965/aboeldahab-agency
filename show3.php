<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=" UTF-8">
    <title>sign.php</title>
    <style> table, tr, td {
    border: 5px solid black;
    border-collapse: collapse;
    padding: 5px;
  }
  tr,td{
     padding: 10px;
  }
</style>
    <link rel="stylesheet" href="show.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="body">
<a href="index.php"><button type="button" class="btn btn-outline-light">Home</button></a>
<a href="emp4.php"><button type="button" class="btn btn-outline-light">Add</button></a>
    <center>
   
    
    <?php
    require_once "yu.php";
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($link, $sql); 
            while($row = mysqli_fetch_array($result)){
              
                echo
        "
        <table class='container' border='5' >
            <tr >
                <td>   $row[FirstName]  </td>
                <td> $row[LastName]  </td> 
                <td>   $row[salary]  </td> 
                <td> $row[Email]  </td>  
                <td> <a href='delete2.php? id=$row[ID]'class='btn btn-danger'>delete</a></td>
                <td>
                <a href='edit2.php? id=$row[ID] ' class='btn btn-primary'>edit</a>
            </td>
                </tr>
                </table>
           ";
          
            } 

            ?>
             
    
    </center>
</body>