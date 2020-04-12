<?php 

$con = mysqli_connect("localhost" , "root" , "" , "regmit");
if(!$con){
    echo "Database is not connected";
}

?>

<!Doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../Lib/bootstrap.min.css">
    
    </head>
    <body>
    <div class="container">    
        


<style>
    .shadow{
        background-color:lightgray;
        box-shadow: 2px 2px 10px gainsboro;
    }
    
    li:hover{
        background-color: darkgray;
    }
    
    color{
        color: black;
        font-size: 16px;
    }

</style>

<div class="row shadow" >
<div class="col-md-12">
    <br>
    <link rel="stylesheet" href="Lib/bootstrap.min.css"> 
  
<nav class="navbar navbar-default">
    <ul class="nav navbar-nav">
      <li><a href="index.php" >Registration</a></li>
      <li><a href="View_By_Department.php">View By Department</a></li>
      <li><a href="Marks_Detail.php">Marks Details</a></li>
    </ul>
</nav>
</div>
</div>
