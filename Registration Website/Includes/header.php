<?php 
$con = mysqli_connect("localhost" , "root" , "" , "registration");
if(!$con){
    die(mysqli_error($con));

}
?>

<!Doctype html>
<html>
<head>
    <title> Online Registration for UOS Sub Campus Mianwali</title>
    
    <link rel="stylesheet" href="Libraryies/bootstrap.css">
    <link  href="Libraryies/bootstrap.min.css" rel="stylesheet" >
     <script src="Libraryies/bootstrap.min.js"></script>
     <script src="Libraryies/jquery.min.js"></script>
    

   
 
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

        
        <div class="row">
        <div class= "col-md-10">
        <h1 style="color:red" class="fonter">The University of Sargodha Campus Mianwali  </h1>
        <div class="row">
        <div class="col-md-12">
        <B>Address :</B> Near Talagang Road District Mianwali , Punjab , Pakistan
        <br>
        <B>Contact :  </B>   0459-887548  &nbsp; &nbsp; &nbsp; &nbsp; <B>Email :  </B>   mianwali.campus@uos.edu.pk
        </div>
        </div>    
        </div>
        <div class="col-md-2"> <img src="Icons/logo.png" class="img img-responsice logo" width="150px"> </div>    
        </div>
        <hr>     
       
        