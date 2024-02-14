<?php 

$sname="localhost";
$uname="root";
$password="";
$db_name="patients";


$conn = mysqli_connect($sname, $uname, $password,$db_name);

if (!$conn){
    echo "Connection is failed";
}

