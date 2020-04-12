<?php
$connection = mysqli_connect("localhost" , "root" , "" , "room_booking");

if(!$connection){
    die("Not connected with database");
}

?>

<!doctype html>
<html lang="en">
<head>
    <title> Room Booking Website</title>
    <link rel="stylesheet" href="BOOTSTRAP_fILE.css">
    </head>
    
    <style>
    
        .back{
         background-image: url(Pictures/back.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1 , h2 , h3 , h4{
            text-align: center;
        }
        .mar{
           border: 1px solid black;
            color: white;
            font-size: bolder;
            padding: 4px;
        }
        
    </style>
    
    <body class="container back">
    <h1 style="color:white;  text-shadow:0px 0px 10px black;"> Welcome to <strong style="color:red"> Royal Pak Hotel</strong> </h1>
    <div class="mar">
         <marquee>25% discount for Summer Booking , 40% OFF for 5 bed rooms booking </marquee>
         </div>