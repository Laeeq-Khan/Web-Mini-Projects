<?php  include "Includes/header.php" ?>
<br><br>
<?php include "Includes/navigation.php"?>
<?php include "standard.php" ?>
<br>
<br>


<div class="row" onload="disab()">
<div class="col-md-12">
            <h3 style="color:white; "> Payment Method : &nbsp; &nbsp; &nbsp; &nbsp;Cash On Deleivery</h3>
    <table class="table table-hover table-bordered" style="color:white">

        <thead>
        <tr>
        <th> Code </th>
        <th> Product Name</th>
        <th> Price</th>
        
        <th> Remove</th>
        </tr>
            
            
            <?php  
            
        $totalAmount  = 0;
    if(isset($_GET['total']) && $_GET['total'] == 0){
        echo "<h1 style='color:red; text-align:center;' > Cart Empty . Please add some products into card to make final successfull purchase. Thank you. </h1>";
    }else{
        $email = $_SESSION['email'];
        $query  = "select * from cart where email = '$email' ";
        $res  = mysqli_query($con , $query);
        while($row = mysqli_fetch_assoc($res)){
            
            $pid = $row['product_ID'];
            $sr = $row['Sr'];
            $query2 = "select * from products where pID = '$pid' ";
            $ress = mysqli_query($con , $query2);
            
            
            while($row22 = mysqli_fetch_assoc($ress)){
                
                $code = $row22['pID'];
                $name = $row22['pname'];
                $price = $row22['pprice'];
                $totalAmount = $totalAmount + $price;
                
              echo "<tr>";
            echo "<td> $sr</td>"; 
            echo "<td> $name</td>";     
            echo "<td> $price</td>";  
                
             echo "<td><a href='cart.php?codee=$sr'>Remove </td></a>"; 
            echo "</tr>";   
            }
            
            
        }//end of outer while
    }
?>
            
        </thead>


    
    </table>
<h2 style="color:white">Total Price :  <span> <?php echo $totalAmount ?> </span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
    </h2>    
<form method="post" action="final.php?total=<?php echo $totalAmount ?>"><input id="buttn" type="submit" class="btn btn-default btn-lg" value="|  Buy Now   |">
    <script>
    
    
    
    </script>
    
    </form>    
    </div>
</div>
<br><br>
<?php  include "Includes/footer.php" ?>



<?php  
if(isset($_GET['codee'])){
    $cod = $_GET['codee'];
    $quer = "DELETE FROM cart where Sr ='$cod'";
    $result22 = mysqli_query($con , $quer);
    
    header("Location:cart.php");
    if(!$result22){
        echo "Not Deleted";
    }else{
    }
    
}


?>