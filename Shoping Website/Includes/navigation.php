<?php   include "Includes/Db_Connect.php";
$total = 0;

if(isset($_SESSION['email'])){
    $email1 = $_SESSION['email'];
    $query1 = "select count(email) as la from cart where email = '$email1' ";
    
    $resultt = mysqli_query($con , $query1);
    $row = mysqli_fetch_assoc($resultt);
echo mysqli_error($con);
    
    if(!$row){
        $total = 0;
    }else{
        $total = $row['la'];
    }
    

}

?>

<br>
<div class="row">
<div class="col-md-12">
    
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Online Bazar For Girls</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="Garally.php?a=1">Shoes</a></li>
      <li><a href="Garally.php?a=2">Jewelry </a></li>
      <li><a href="Garally.php?a=3">Begs</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
     
        
        <?php  
        
        if(isset($_SESSION['name'])){
            $aa = $_SESSION['name'];
            
          echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in' id='logout'></span> $aa </a></li>";
        }else{
                echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login </a></li>";
        }
        
        ?>
        
        <li style="background-color:black;"><a href="cart.php?total=<?php echo $total  ?>"><span style="font-weight:bold ; color:white;" id ="cart">Cart : <?php echo $total  ?></span></a></li>
    </ul>
  </div>
</nav>
    
    </div>

</div>



 