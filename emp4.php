<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=" UTF-8">
    <title>sign.php</title>
    <link rel="stylesheet" href="emp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="body">

<a href="index.php"><button type="button" class="btn btn-outline-light">Home</button></a><br>
<a href="show3.php"><button type="button" class="btn btn-outline-light">Show Employees</button></a>
<center>
   <div class="container">
        <div class="title">Registration</div>
        <form action="emp5.php" method="post" enctype="multipart/form-data" class="dd">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">First name</span>
                    <input type="text"name="FirstName" placeholder="Enter your First name" requried>
                </div>
                <div class="input-box">
                    <span class="details">Last name</span>
                    <input type="text"name="LastName" placeholder="Enter your Last name" requried>
                </div>
                <div class="input-box">
                    <span class="details">E-mail</span>
                    <input class="bt" type="text" name="Email"placeholder="Enter your E-mail" requried>
                </div>
                <div class="input-box">
                    <span class="details">Phone number</span>
                    <input type="text"name="phonenumber" placeholder="Enter your Phone number" requried>
                </div>
                <div class="input-box">
                    <span class="details">salary</span>
                    <input type="text" name="salary"placeholder="Enter your Phone salary" requried>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="sigw" value="submit">
            </div>
       </form>
    </div>
    </center>
</body>