<?php
header("Access-Control-Allow-Origin: https://patrika2.vercel.app");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
include "authenticate.php";
session_start();
$conn=new mysqli("localhost","root","","project",3306);
$source=$_FILES["images"]["tmp_name"];
$target=$_FILES["images"]["name"];
move_uploaded_file($source,$target);
$query="insert into blogs(details,owner,created_date,imgpath) values('$_POST[desc]','$_SESSION[pid]','$_POST[date]','$target')";
mysqli_query($conn,$query);
    header("Location: viewblogs.php");
?>