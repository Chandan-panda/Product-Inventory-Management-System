<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
        <div class="container">
        <h3 class="text-center my-3"><u>Enter Details About Product</u></h3>
        <form action="display.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Name:</label>
              <input type="text" class="form-control" id="exampleInputText" name="name" autocomplete="off">
            </div>
            <label class="form-label">Price:</label>
            <div class="input-group mb-3">
                <span class="input-group-text">Rs.</span>
                <input type="text" class="form-control" name="price" autocomplete="off">
                <span class="input-group-text">.00</span>
              </div>
              <label class="form-label">Product Description:</label>
              <div class="form-floating">
                <textarea class="form-control" placeholder="Enter Product Description" id="floatingTextarea2" style="height: 100px" name="desc_p" autocomplete="off"></textarea>
                <label for="floatingTextarea2"></label>
              </div>
              <br>
              <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02" name="files" >
              </div>
              <br>
            <button type="submit" class="btn btn-dark" name="submit">Submit</button>
          </form>
        </div>

</body>
</html>