<?php  include "Includes/header.php" ?>
<br><br>
<?php include "Includes/navigation.php"?>
 
<br>
<br>

<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8" style="color:black; background-color:white ; padding: 20px    ">
    
    <?php 
        if(isset($_GET['total']) && $_GET['total'] > 0){
                $amount = $_GET['total'];

                echo "<h1 style= 'color:black'> Order of R.S $amount  will be  
                Deleiverd to your home Adress after 30 mints. . <br>
                Thanks for buying from our Online Resturent Shop.
                
                </h1>";
                $email = $_SESSION['email'];
                if($amount > 0){
                mysqli_query($con , "Delete from cart where email = '$email' ");
                }
            
            $quer = "delete from order1 where email = '$email' ";
            $q = mysqli_query($con , $quer);
            
        }else{
            echo "<h2 style='color:balck; text-align:center'> First add some products into carts then place order </h2>";
        }

 



?>
    </div>

</div>


<br><br>
<?php  include "Includes/footer.php" ?>
    