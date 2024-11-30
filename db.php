<?php
$con=new mysqli('localhost','root','','projecy crud');
if(!$con){
    die(mysqli_error($con));
}