


<?php  include "Includes/header.php" ?>
<br><br>
<?php include "Includes/navigation.php"?>
<?php include "standard.php" ?>
<br><br>



<?php

    if(!isset($_SESSION['email'])){
        echo "<h1> Please Login first then makes purchases. Thanks for Visiting Us. </h1>";
    }else{
    
    if(isset($_GET['pId'])){
                $pID = $_GET['pId'];
                
                $query = "select * from products where pID =$pID ";
                $res = mysqli_query($con , $query);
                
                $row  = mysqli_fetch_assoc($res);
                
                $picture  = $row['ppicture'];
                $name = $row['pname'];
                $details = $row['pdetails'];
                $price = $row['pprice'];
                $discount = $row['pdiscount'];
                $email = $_SESSION['email'];             

                ?>

<div class="row">
<div class="col-md-6">
    
    <img src="Images/<?php echo $picture ?>" width="500">
    </div>
<div class="col-md-6">
    <h3 style="color:white"> Name : <span style="color:red"><?php echo $name ?> </span></h3>
      <h3 style="color:white"> Price   : <span style="color:red"><?php echo $price ?> </span></h3>
      <h3 style="color:white"> Discount : <span style="color:red"><?php echo $discount ?> </span></h3>
      <h3 style="color:white"> Details : <span style="color:red"><?php echo $details ?> </span></h3>
    
    <form method="post">
    <input type="submit" name="submit" value="Add to Cart" class="btn btn-default" style="box-shadow:0px 0px 5px white;">
    </form>

    </div>
</div>

<?php                
}     
else{
        echo "<h3 style='color:red; text-align:center'>   </h3>";
}
}
?>


<br><br>

<?php include "Includes/footer.php"  ?>





<?php 

    if(isset($_POST['submit'])){
    
        $query = "insert into cart(product_ID , email )  VALUES('$pID' , '$email')  ";
        $res= mysqli_query($con , $query);
        if(!$res){
            echo "Not added to card";
        } 
        $id = $_GET['page'];
        echo $id;
       header("Location: Garally.php?a=$id");
    
    }
    
?>