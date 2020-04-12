<?php  include "Includes/header.php" ?>
<br><br>
<?php include "Includes/navigation.php"?>
<?php include "standard.php" ?>
<br>
<br>

<?php 
        if(isset($_GET['total']) && $_GET['total'] > 0){
                $amount = $_GET['total'];

                echo "<h1 style= 'color:white'> Order of R.S $amount  has been placed to your address which you have given while account
                creation. You will reveive your order with in 2 to 4 days.<br> Thanks for purchasing from Online Shop </h1>";
                $email = $_SESSION['email'];
                if($amount > 0){
                mysqli_query($con , "Delete from cart where email = '$email' ");
                }
        }else{
            echo "<h2 style='color:white; text-align:center'> First add some products into carts then place order </h2>";
        }


?>


<br><br>
<?php  include "Includes/footer.php" ?>
