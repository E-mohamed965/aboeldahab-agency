<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=" UTF-8">
    <title>Sign UP</title>
    <link rel="stylesheet" href="sign.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="body">
<center>
<a href="index.php"><button type="button" class="btn btn-outline-light">Home</button></a>
    
   <div class="container">
        <div class="title">Registration</div>
        <form action="sign3.php" method="post" enctype="multipart/form-data" class="dd">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">First name</span>
                    <input type="text" name="FirstName" placeholder="Enter your First name" requried>
                </div>
                <div class="input-box">
                    <span class="details">Last name</span>
                    <input type="text" name="LastName" placeholder="Enter your Last name" requried>
                </div>
                <div class="input-box">
                    <span class="details">E-mail</span>
                    <input class="bt" type="text" name="Email" placeholder="Enter your E-mail" requried>
                </div>
                <div class="input-box">
                    <span class="details">Phone number</span>
                    <input type="text"name="phonenumber" placeholder="Enter your Phone number" requried>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="sige" value="Register" >
            </div>
       </form>
    </div>
    </center>

    <!-- <div >
    <form action="sign3.php" method="post" enctype="multipart/form-data" class="dd">
        <label ><div class="dd"> First Name</div></label>
        <input type="text" name="FirstName" value=""><br><br>
    
        <label ><div class="dd">Last Name</div></label>
        <input type="text" name="LastName" value=""><br><br>
    
        <label ><div class="dd">E-mail</div></label>
        <input type="text" name="Email" value=""><br><br>
    
        <label ><div class="dd">Phone number</div></label>
        <input type="text" name="phonenumber" value="">
       <button  name="sign" >Sign</button>
        </form>
    </div> -->
</body>