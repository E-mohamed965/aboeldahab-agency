<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=" UTF-8">
    <title>Add.php</title>
    <link rel="stylesheet" href="add.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="body">


<center>
<a href="index.php"><button type="button" class="btn btn-outline-light">Home</button></a>
   <div class="container">
        <div class="title">Add Car</div>
        <form action="insert3.php" method="post" enctype="multipart/form-data" >
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Name</span>
                    <input type="text"name="Name" placeholder="Enter  Name" requried>
                </div>
                <div class="input-box">
                    <span class="details">Model</span>
                    <input type="text"name="Model" placeholder="Enter  Model" requried>
                </div>
                <div class="input-box">
                    <span class="details">Color</span>
                    <input type="text" name="color"placeholder="Enter  Color" requried>
                </div>
                <div class="input-box">
                    <span class="details">Price</span>
                    <input type="text"name="Price" placeholder="Enter Price " requried>
                </div>
                <div class="input-box">
                <input type="file"  id ="file" name="Image"  style='display:none;'>
        <label for="file">Upload image</label>
                </div>
            </div>
           <button class="bt" name="submit">submit</button>
       </form>
    </div>
    </center>
</body>
</html>