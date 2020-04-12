<?php
$connection = mysqli_connect("localhost" , "root" , "" , "hp");

if(!$connection){
    die("Not connected with database");
}

?>

<style>
  h1 , h2,  h3 ,h4{
        text-align: center;
      color: white;
    } 
    
    body , p , li , ul , div , lable h1 ,h2 ,h3, h4,h5,h6 , a  {
        color: black;
    }
    
    .img1{
        background-image: url(Photo/background.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    
</style>

<!doctype html>
<html lang="en">
<head>
    <title> Room Booking Website</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    
    
    <body class="container img1">
    <h1><strong style="color:black">Hospital Managment System</strong> </h1>
 <hr style="border-bottom:1px solid white;">
        
        
        