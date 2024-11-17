<?php
header("Access-Control-Allow-Origin: https://patrika2.vercel.app");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
session_start();
if(!isset($_SESSION["loggedin"])){
    header("Location: login.html");
    die;
}
if($_SESSION["loggedin"]==false){
    echo "<h1>unauthorized attempt to access</h1>";
    die;
}
?>