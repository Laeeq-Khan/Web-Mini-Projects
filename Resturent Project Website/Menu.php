<?php  include "Includes/header.php" ?>
<br><br>
<?php include "Includes/navigation.php"?>
 

<?php 

if(!(isset($_SESSION['email']))){
    header("Location:Not_Register_Message.php");
}

?>


<br><br>
<style>
    .l{
      
    }
</style>
<div class="row">
    
    <div class="col-md-2"></div>
    <div class="col-md-8" style="background-color:white ; color:black ; padding:30px;">
    
        <table class="table table-hover table-striped" style="box-shadow:0px 0px 10px gainsboro;">
    <caption style="text-align:center"><h3> Menue </h3> </caption>
        <thead>
        <tr>
            <th> Code</th>
            <th> Name </th>
            <th> Price</th>
            <th> Size</th>
            <th> Order</th>
            </tr>   
        </thead>
         <?php 
            
            $query = "select * from  products";
            $rres = mysqli_query($con , $query);
        while($row = mysqli_fetch_assoc($rres)){
            $name = $row['pname'];
            $id = $row['pID'];
            $price = $row['pprice'];
            $szie = $row['size'];
        
            echo "<tr>";
            echo "<td> $id   </td>";
             echo "<td> $name   </td>";
             echo "<td> $price   </td>";
             echo "<td> $szie   </td>";
            echo "<td><a href='Menu.php?order=$id'> Order  </a>  </td>";
            echo "<tr>";
        }
            ?>   
            
            
        </table>
    <hr><hr>
    <h2 style="text-align:center"> Your Order</h2>    
        
        <table class="table table-striped table-hover"  style="box-shadow:0px 0px 10px gainsboro;">
        <thead>
            <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Price</th>
            <th>Size</th>
            <th>Delete</th>
            </tr>
            </thead>
          <?php 
            $total = 0;
            $email = $_SESSION['email'];
        $quer  = "select * from order1 where email = '$email' ";
        $result1 = mysqli_query($con , $quer);
         if(!$result1){
             
         }else{
             
            while($ress = mysqli_fetch_assoc($result1)){
                
                $id1  = $ress['Sr'];
                $id = $ress['product_ID'];
                
                $qqq = "select * from products where pID = '$id' ";
                $re = mysqli_query($con , $qqq);
                $rowff = mysqli_fetch_assoc($re);
                
                $name = $rowff['pname'];
                $price = $rowff['pprice'];
                $size = $rowff['size'];
                $total = $total + $price;
                echo "<tr>";
                echo "<td>$id1  </td>";
                echo "<td>$name </td>";
                echo "<td>$price  </td>";
                echo "<td>$size  </td>";
                echo "<td style='color:red'> <a  href='Menu.php?delete= $id1' >Delete <a>  </td>";
                echo "</tr>";
              
            }
        }
        ?>
        
        </table>
      
        <form method="post" action="Order_Dispatch.php?total=<?php echo $total ?>">
      <h2>   <label> Total : </label> <?php echo $total; ?></h2> &nbsp; &nbsp; &nbsp; &nbsp;
        <input type="submit" class="btn btn-default" value="Place Order" name="order">
    </form>
     
    </div>
    
   
</div>
<br>
<br>

<?php include "Includes/footer.php" ?>
<!-- Inserting records to database-->
<?php 
    if(isset($_GET['order'])){
     
        
        $code  = $_GET['order'];
        $username = $_SESSION['email'];
        
        $inser_query = "insert into order1(email , product_ID) Values('$username' , '$code')";
        $exe  = mysqli_query($con , $inser_query);
        
        echo mysqli_error($con);
        if(!$exe){
            echo "Nor Inserted";
        }
        header("Location:Menu.php");
        
    }
?>

<!--Deleting product from order table code-->

<?php 

if(isset($_GET['delete'])){
    $codd = $_GET['delete'];
    
    $resss = mysqli_query($con , "delete from order1 where Sr = '$codd' ");
     header("Location:Menu.php");
    
}

?>