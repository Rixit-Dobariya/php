<?php
    $con=mysqli_connect("localhost","root","","flone_db");
    if(!$con)
    {
        die(mysqli_error($con));
    }
?>