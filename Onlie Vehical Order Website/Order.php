<?php  include "Includes/header.php" ?>
<br><br>
<?php include "Includes/navigation.php"?>
<?php include "animation.php" ?>
<br>
<br>

<?php 
    
    if(isset($_POST['sub'])){
     $name = $_POST['name'];
    $cnic = $_POST['cnic'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $town = $_POST['town'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $model = $_POST['model'];
      $price = $_POST['price1'];
    
    
        $query = "INSERT INTO order_place(model , price , name , cnic , contact , email , town , street , city , zip  , country )  ";
        $query .= " VALUES('$model' , '$price', '$name ' , '$cnic', '$contact' , '$email', '$town', '$street', '$city', '$zip', '$country') ";

        $result = mysqli_query($con , $query);
        if(!$result){
            echo "<h1> Order Faild . Please contact with website admin  </h1>";
        }else{
            echo "<br><br>";
            
            ?>
         
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8" style="background-color:white ; color:black">
    <br>
    <h1><span style="color:red">  <?php echo  $name  ?></span> Thanks for Using our Service. <br></h1>
    <h1> Congrats Your Order has been placed. You will receive confirmation Email. Shortly </h1>
    <br><Br>
    </div>
    
</div>

<?php
        }
    }
?>


<br><br>
<?php  include "Includes/footer.php" ?>
