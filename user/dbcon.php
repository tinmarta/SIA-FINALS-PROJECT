<?php

$con = mysqli_connect("localhost","root","","logindb");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
//echo "Connected successfully";
?>