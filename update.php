<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
      body{
            background-image: url('background.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
  <?php
  include 'connect.php';
  $id=$_GET['updateid'];
  $sql="SELECT * from `list` WHERE id=$id LIMIT 1";
  $res=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($res);
  ?>
        <div class="container">
        <h3 class="text-center my-3"><u>Update Details About Product</u></h3>
        <form action="update1.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Name:</label>
              <input type="text" class="form-control" id="exampleInputText" name="name" autocomplete="off" value="<?php echo $row['name'] ?>">
            </div>
            <label class="form-label">Price:</label>
            <div class="input-group mb-3">
                <span class="input-group-text">Rs.</span>
                <input type="text" class="form-control" name="price" autocomplete="off" value="<?php echo $row['price'] ?>">
                <span class="input-group-text">.00</span>
              </div>
              <label class="form-label">Product Description:</label>
              <div class="form-floating">
                <textarea class="form-control" placeholder="Enter Product Description" id="floatingTextarea2" style="height: 100px" name="desc_p" autocomplete="off"><?php echo $row['desc_p'] ?></textarea>
                <label for="floatingTextarea2"></label>
              </div>
              <br>
              <div class="input-group mb-3">
                <td><input type="file" class="form-control" id="inputGroupFile02" name="files" value="<?php echo $row['image'] ?>"><img src="<?php echo $row['image'] ?>" /></td>
              </div>
              <br>
              <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <button type="submit" class="btn btn-dark" name="update">Update</button>
          </form>
        </div>

</body>
</html>