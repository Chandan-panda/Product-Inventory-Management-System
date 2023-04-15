<?php
    include ('./connect.php');
    if(isset($_POST['update'])){
        $id=$_POST['id'];
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
        }
        $query="UPDATE `list` SET `name`='$name',`price`='$price',`desc_p`='$desc_p',`image`='$upload_img' WHERE id='$id'";
        $res=mysqli_query($con,$query);
        header("Location: display.php");
    }
?>