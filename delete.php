<?php

include('./connect.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $query="delete from `list` where id=$id";
    $res=mysqli_query($con,$query);
    if($res){
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>