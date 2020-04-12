<?php
$connection = mysqli_connect("localhost" , "root" , "" , "card");

if(!$connection){
    die("Not connected with database");
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>Get your Card</title>
    <link rel="stylesheet" href="bootstrap.css">
    </head>
    
    <style>
    
        .back{
         background-image: url(Pic/background1.jpg);
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
    background-color:whitesmoke;
    color: black;
    box-shadow: 0px 0px 10px white;
}

li {
    float: left;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: skyblue;
}
</style>

    <body class="container back">
       
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
            <img src="Pic/1.png" class="img img-responsive img-thumbnail" style="box-shadow:0px 0px 10px white; border:2px solid white;"> </div>    
        <div class="col-md-4">
          
          <h1 style="color:white;  text-shadow:0px 0px 10px black;"><strong>Get your V.Card </strong> </h1>
            </div>
            
        </div>
    <br>
    
         
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="categories.php">Categories</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
 
</ul>
    