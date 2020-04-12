<?php   include "Includes/Db_Connect.php";
$total = 0;

if(isset($_SESSION['email'])){
    $email1 = $_SESSION['email'];
    $query1 = "select count(email) as la from order where email = '$email1' ";
    
    $resultt = mysqli_query($con , $query1);
    if(!$resultt){
        
    }else{
    $row = mysqli_fetch_assoc($resultt);
    if(!$row){
        $total = 0;
    }else{
        $total = $row['la'];
    }    
    }
    
    

}

?>

<br>
<div class="row">
<div class="col-md-12">
    
    
<a href="cart.php?total=<?php echo $total  ?>"><span style="font-weight:bold ; color:black;" id ="cart">Your Orders : <?php echo $total  ?></span></a>
    
    
    <nav class="navbar navbar-default" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Online Resturent</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php?a=1">Home</a></li>
      <li><a href="Menu.php?a=2">Menue </a></li>
      
     
     
      <li><a href="register.php"> Register</a></li>
     
    <?php  
        
        if(isset($_SESSION['name'])){
            $aa = $_SESSION['name'];
            
          echo "<li><a href='login.php'> | Welcom to  $aa |</a></li>";
        }else{
                echo "<li><a href='login.php'> Login </a></li>";
        }
        
        ?>
         
    </ul>
       
  </div>
</nav>
    
    </div>

</div>



 