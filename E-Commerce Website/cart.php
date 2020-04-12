<?php  include "Files\\Navigation_Bar.php"; ?>

   <?php 
        $count = 0;
        if(isset($_SESSION['type'])){
            $username = $_SESSION['username'];
            $query = "select COUNT(*) AS Abc FROM cart where username = '$username' ";
            $result = mysqli_query($con , $query);
            $row = mysqli_fetch_assoc($result);
            $count = $row['Abc'];
          if($count== 0){
             header("Location:index.php");
          }  
        }
       ?>

<div class="row">
<div class="col-md-12">
    <br>
   <center><h2>Cart Details</h2></center>
    <hr>
   <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
       
        <table class="table table-bordered table-hover">
    <thead>
    <tr>
   
    <th>Name     &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;</th>
    <th>Price PI</th>
    <th>Pieces</th>
    <th>Action</th>    
    </tr>    
    </thead>
    
    
    
    <?php  
    if(isset($_SESSION['type'])){
        $type = $_SESSION['type'];
        if($type==""){
          header("Location:singup.php");     
        }
        
        $username = $_SESSION['username'];
        $query = "select * from cart where username = '$username'";
        $result = mysqli_query($con , $query);
        $total = 0;
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];   
            $name = $row['name'];
            $code= $row['code'];
            $items= $row['items'];
            $items= abs($items);
            $price = $row['price'];
            $pp = $items * $price;
            $total = $total + $pp;
            echo "<tr>";
           
            echo "<td> $name </td>";
            echo "<td> $price </td>";
            echo "<td> $items </td>";
            echo "<td><a href='cart.php?code={$id}'> Remove</a> </td>";
            echo "</tr>";
        }
    }
    ?>
        </table>
        <h3 style="float:right">Total Price : <?php echo $total ?></h3><br>
    </div>   
    </div>
    
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
    <form action="ordered.php">
        <div class="input-group">
          
        <input type="text" name="amount" value="<?php echo $total ?>" hidden="true">
        <input type="submit"  name="car_sub" value="Order" class="btn btn-danger"  >
        </div>
    </form>    
        
    </div>
    </div>
    
    <br><br><br><br>
</div>
</div>
<?php  include "Files\\Footer.php"; ?>

<?php  

if(isset($_GET['code'])){
    $code = $_GET['code'];
    $query = "DELETE FROM cart where id='$code'";
    $result = mysqli_query($con , $query);
    header("Location:cart.php");
}

?>





