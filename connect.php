<?php

    $con=mysqli_connect('localhost','root','','product');
    if(!$con){
        die('Connection Error! '.mysqli_error($con));
    }

?>