<?php
$connection = mysqli_connect("localhost" , "root" , "" , "result_managment_system");

if(!$connection){
    die("Not connected with database");
}

?>

<style>
  h1 , h2,  h3 ,h4{
        text-align: center;
    } 
</style>

<!doctype html>
<html lang="en">
<head>
    <title> Room Booking Website</title>
    <link rel="stylesheet" href="BOOTSTRAP_fILE.css">
    </head>
    
    
    <body class="container">
    <h1><strong>Result Managment System</strong> </h1>
 