<?php
session_start();
$name=$_GET['name'];
$price=$_GET['price'];
$src=$_GET['src'];

if(!isset($_SESSION['UserLoginId'])){
    header("location: login.php");
}
else{
    header("location: process.php?name=$name&price=$price&src=$src");
}

?>