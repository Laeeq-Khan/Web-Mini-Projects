<?php
$connection = mysqli_connect("localhost" , "root" , "" , "website");

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
        color: white;
    }
    
    .img1{
        background-image: url(backgroud.jpg);
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
    <h1><strong style="color:white">Welcome to our webiste <small style="color:gray"> Finds all top rank websites links</small></strong> </h1>
 