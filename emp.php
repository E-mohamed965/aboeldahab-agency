<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=" UTF-8">
    <title>enterpass.php</title>
    <link rel="stylesheet" href="emp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="body">
    <center>
 
     <div>
    <form action="emp3.php" method="post" enctype="multipart/form-data" class="dd">
        <label ><div class="dd"> Enter Password</div></label>
        <input type="password" name="pass" placeholder="Enter Password" required><br>
        <a href="index.php"><button type="button" class="btn btn-outline-light">Home</button></a><br>
       <button  name="sign" >Sign</button>
        </form>
    </div> 
    </center>
</body>