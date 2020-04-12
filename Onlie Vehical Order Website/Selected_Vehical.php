
<?php  include "Includes/header.php" ?>
<br><br>
<?php include "Includes/navigation.php"?>
<?php include "animation.php" ?>
<br><br>
 
<style>
    label{
        color: red;
    }

</style>
<div class="row">
    <div class="col-md-1"></div>
<div class="col-md-10" style="background-color:white" >
    <br>
    <h2 style="color:black; text-align:center ; border-bottom:2px solid black;">Your Selection Panel</h2>
    
    <?php 
    if(isset($_GET['pId'])){
        $id = $_GET['pId'];
        $query = "select * from products where pID = '$id' ";
        $result = mysqli_query($con , $query);
        
        if(!$result){
            
        }else{
            $row = mysqli_fetch_assoc($result);
        $iddd = $row['ppicture'];
         $model = $row['pname'];
         $price= $row['pprice'];
         $detail = $row['pdetails'];
        $discount = $row['pdiscount'];
        
        $model = substr($model , 7);
        
        echo "<center> <img src='Images/$iddd' height='300px' width='400px' style='border:2px solid yellow ; box-shadow:0px 0px 10px black;' > </center>";
        }
      
       
    }
    ?>
    <br>
    <table class="table table-inverse">
    <thead>
        <tr>
        <th> Model</th>
        <th> Price</th>
        <th> Discount</th>
        <th> Details</th>
        </tr>
        
        <tr>
        <td><?php echo $model ?></td>
         <td>$<?php echo $price ?></td>
         <td><?php echo $discount ?>%</td>
        <td><?php echo $detail ?></td>
        
        </tr>
        
        </thead>
    
    </table>
    
    <br><br>
    <form class="form form-dark" method="post"  action="Order.php">
    
    
        <input type="text" name="model" value="<?php echo $model ?>" hidden>
        <input type="text" name="price1" value="<?php echo $price ?>" hidden>
        
        <div class="form-group">
        <label> Name : </label>
        <input type="text" name="name" class="form-control" required >
        </div>
        
         <div class="form-group">
        <label> CNIC / Passport No : </label>
        <input type="text" name="cnic" class="form-control" required >
        </div>
        
         <div class="form-group">
        <label> Contact : </label>
        <input type="text" name="contact" class="form-control" required >
        </div>
        
         <div class="form-group">
        <label> Email : </label>
        <input type="email" name="email" class="form-control" required >
        </div>
        
         <div class="form-group">
        <label> Home Town Name : </label>
        <input type="text" name="town" class="form-control" required >
        </div>
        
        
         <div class="form-group">
        <label>Street : </label>
        <input type="text" name="street" class="form-control" required >
        </div>
        
        
         <div class="form-group">
        <label> City  : </label>
        <input type="text" name="city" class="form-control" required >
        </div>
        
        
         <div class="form-group">
        <label>Zip Code : </label>
        <input type="text" name="zip" class="form-control" required >
        </div>
        
        <div class="form-group">
            <label> Country :</label>
        <select class="form-control" name="country"> 
        <option> UK</option>
        <option> Australia</option>
        <option> India</option>
        <option> Pakistan</option>
        <option> Chaina</option>
        <option> Japan</option>
        <option> Newzilan</option>
        <option> Bangladaish</option>
        <option> USA</option>
        <option> Farance</option>
        </select>
            </div>
    
        
<input type="submit" class="btn btn-warning" name="sub" value=" &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Order &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;">
    </form>
    
    <br>
    </div>
</div>

 

<br><br>
<?php include "Includes/footer.php"  ?>

 