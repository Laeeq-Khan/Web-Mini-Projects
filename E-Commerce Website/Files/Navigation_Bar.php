<?php include "Files\\Database_Connection.php";  ?>
<?php ob_start(); 
      session_start();
?>

<html>
<head> <title> Demas Jewellry</title>
<link rel="stylesheet" href="bootstrap.min.css">    
    <style>
        
ul {
    list-style-type: none;
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
</head>
    
<body>
    
<div class="container" style="height:500px; "> 
    
    <br>
    <div class="row" >
        <marquee style="color:red"> Experience a convenient and hassle free way of online shopping in Pakistan. Damas Jewellary takes your style statement into a whole new territory by placing an extensive variety of top-class brands within easy reach. Shop online, for trendy apparel  latest gadgets like you have never done before from the comfort of your home. We strive to make sure that the best collections of designer clothing and fashion shoes are brought onto your computer screen. </marquee>
        
   
        <div class="col-md-12" style="background-image:url('Images\\header1.jpg'); height:300; border-bottom:2px solid gray; box-shadow:1px 1px 10px #d6d7d8;" >
            
        <h1 style="text-shadow:1px 1px 10px #d6d7d8">Damas Jewellry</h1>
       
         <div class="row">
        <div class="col-md-4" style="border-bottom:1px solid black;"></div>    
        </div>
       </div>
        <div class="col-md-1"></div>
    </div>
    <br><br>

    <div class="row" style="">
    <br>
    <div class="col-md-12">
    <ul>
        <li><a href='index.php'>Home</a></li> 
        <?php 
        $query = "select * from navigation";
        $result = mysqli_query($con , $query);
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['name'];
            echo "<li><a href='Categories.php?category={$name}'>$name</a></li>";
        }
        
        ?>
        
       
        <li><a href='contact.php'>Contact Us</a></li> 
        <li><a href='about.php'>About Us</a></li> 
       <li><a href='login.php'>Login</a></li> 
        <li><a href='admin.php?logout=1'> Logout</a></li> 
        
        <?php 
        $count = 0;
        if(isset($_SESSION['type'])){
            $username = $_SESSION['username'];
            $query = "select COUNT(*) AS Abc FROM cart where username = '$username' ";
            $result = mysqli_query($con , $query);
            $row = mysqli_fetch_assoc($result);
            $count = $row['Abc'];
          if($count > 0){
              echo " <li style='float:right; ' ><a href='cart.php'>Cart  $count </a></li> ";
          }  
        }
       ?>
        
       
  </ul>    
    </div>
        
        <?php
        if(isset($_GET['logout'])){
            $_SESSION['type'] = "";
            $_SESSION['username'] = "";
            $_SESSION['name'] ="";
            $_SESSION['contact'] ="";
            $_SESSION['email'] = "";
            $_SESSION['address'] ="";
            header("Location:index.php");
        }
       ?>
       
   
    