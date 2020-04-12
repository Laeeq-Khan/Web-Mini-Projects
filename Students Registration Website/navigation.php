<?php 
$con = mysqli_connect("localhost" , "root" , "" , "registration");
if(!$con){
    die(mysqli_error($con));
 }
 ?>  
<br>
    <!Doctype html>
    <html>
    <head>
    <style>
    .shadowBox{
    box-shadow: 1px 2px  5px gray;
    }

    .black{
    background-color: black;
    color: white;

    }

    .fonter{
    font-family: sans-serif;
    }

    .logo{
    position: relative;
    top: 0px;

    }

    a:hover{
    color: white;
    }
    a:link{
    color: red;

    }
    .comp{
    color: red;
    text-shadow: 2px 2px 10px red;
    font-weight: bolder;
    }
    </style>
    </head>

    <body >
    <div class="container">
        
        
        
<link rel="stylesheet" href="Libraryies/bootstrap.min.css">

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: blueviolet;
    box-shadow: 2px 2px 10px gray;
    border-radius: 2px;
    border: 2px solid yellow;
}

li {
    float: left;
}

li a {
    font-size: 20px;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    text-decoration: none;
    color: red;
    background-color: white;
}
</style>
 

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  
  <li><a href="Registration_Page.php">Register Now</a></li>
  <li><a href="Status_Page.php">Check your Status</a></li>
 
</ul>
