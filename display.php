<?php
    include ('./connect.php');
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $price=$_POST['price'];
        $desc_p=$_POST['desc_p'];
        $image=$_FILES['files'];
        $image_file_name=$image['name'];
        $image_file_error=$image['error'];
        $image_file_temp=$image['tmp_name'];
        $filename_sep=explode('.',$image_file_name);
        $file_extension=strtolower(end($filename_sep));
        $allowed_extension=array('jpeg','jpg','png');
        if(in_array($file_extension,$allowed_extension)){
            $upload_img='images/'.$image_file_name;
            move_uploaded_file($image_file_temp,$upload_img);
            $query="insert into `list` (name,price,desc_p,image) values('$name','$price','$desc_p','$upload_img')";
            $res=mysqli_query($con,$query);
            if($res){
                echo '<div class="alert alert-success" role="alert">
                <b>Success !</b> Data Inserted Successfully
              </div>';
            }
            else{
                die(mysqli_error($con));
            }
        }
        header("Location: display.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maithan Ispat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        img{
            width: 150px;
            height: 150px;
        }
        #zzz{
            width: 40px;
            height:40px;
        }
        body{
            background-image: url('background.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <div class="container mt-5 justify-content-center">
    <h1 class="text-center my-4"><u>PRODUCT DATABASE</u></h1>
    <button class="btn btn-primary mx-10 my-2"><a href="index.php" class="text-light">Add Product</a></button>
        <table class="table table-bordered ">
            <thead class="table-dark">
              <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Description</th>
                <th scope="col">Images</th>
                <th scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $query="select * from `list`";
                    $res=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($res)){
                        $id=$row['id'];
                        $name=$row['name'];
                        $price=$row['price'];
                        $desc_p=$row['desc_p'];
                        $image=$row['image'];
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$price.'</td>
                        <td>'.$desc_p.'</td>
                        <td><img src='.$image.' /></td>
                        <td>
                        <button class="btn "><a href="update.php?updateid='.$id.'" class="text-light"><img id="zzz" src="update.png"/></a></button>
                        <button class="btn "><a href="delete.php?deleteid='.$id.'" class="text-light"><img id="zzz" src="delete.png"/></a></button>
                        </td>
                      </tr>';
                    }
                ?>
            </tbody>
          </table>
    </div>
</body>
</html>