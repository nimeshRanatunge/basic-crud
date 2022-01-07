<?php
    $con = new mysqli('localhost', 'root', '', 'crudoperation');

    if($con){
        echo "connection ok";
    }else{
        die(mysqli_error($con));
    }
?>


