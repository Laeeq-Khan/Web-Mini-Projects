<?php
$connection = mysqli_connect("localhost" , "root" , "" , "Hostal_Management");

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
         background-image: url(Pictures/background.jpg);
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
<!--    this style blow tags for navigation bar-->
    <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}

li {
    float: left;
}

li a {
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: white;
    background-color: #4CAF50;
}
</style>

    
    <body class="container back">
    <h1 style="color:white;  text-shadow:0px 0px 10px black;"><strong> Hostal Management System</strong> </h1>
    