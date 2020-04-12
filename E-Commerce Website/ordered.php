<?php  include "Files\\Navigation_Bar.php"; ?>

<div class="row">
<div class="col-md-12">
<br><br>
    
    
    <center>
    
   
        
        <?php  
        if(isset($_GET['subb'] )){
             echo "<h1> Your Order has been diliverd to Way. Payment will be on Dilivery  </h1>";
            echo "<br><h4> Thanks for Purchasing from Damas Jewellry  </h4>";
            $username = $_SESSION['username'];
            $query = "delete from cart where username = '$username'";
            $result = mysqli_query($con , $query);
        }else{
            ?>
            <center><h3 style="color:red">Please Confirm Your Order</h3></center><hr>
            <h3><?php echo"Name : ".$_SESSION['name']; ?></h3><br>
            <h3><?php echo"Contact : ".$_SESSION['contact']; ?></h3><br>
            <h3><?php echo"Email : ".$_SESSION['email']; ?></h3><br>
            <h3><?php echo"Address : ".$_SESSION['address']; ?></h3><br>
            <h3><?php echo"Amount : ".$_GET['amount']; ?></h3><hr>

            <form method="get">
            <div class="from-group">

            <input type="submit" name="subb" class="btn btn-default" value="Confirm Order">    
            </div>
            </form>
        <?php
        }
          
        ?>
        
    </center>
    
<br><br>
</div>
</div>
<?php  include "Files\\Footer.php"; ?>







