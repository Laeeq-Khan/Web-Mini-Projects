<?php include "head.php";  ?>
 
<ul>
  <li><a  href="index.php">Home</a></li>
  <li><a href="Booking.php">Room Booking</a></li>
  <li><a href="Status.php">Status</a></li>
     <li><a class="active" href="add_room.php">Add Rooms</a></li> 
</ul>


<br><br>

<div class="row" style="background-color:white; border:2px solid black;">
    <h4>Add Rooms   </h4><br><br>
<div class="col-md-3"></div>
    <div class="col-md-6"> 
    
    <form method="post">
    
        <div class="form-group">
        <label> Room No/Name</label>
        <input type="text" name="number" class="form-control" required>    
        </div>
        
        
        <div class="form-group">
        <label>Total No of Beds </label>
        <input type="number" name="total" class="form-control" required>    
        </div>
        
        <center><input type="submit" name="sub" value="Add" class="btn btn-primary"></center>
        
    </form>
    <br><br>
    </div>

</div>
    <div class="row"><!--    Here is code to insert room in database-->
<?php 
    
    if(isset($_POST['sub'])){
        
        $number = $_POST['number'];
        $total  = $_POST['total'];
        
        $query_result = mysqli_query($connection , "insert into rooms(no , beds) Values('$number' , '$total') ");
        if(!$query_result){
            echo "<h1> This name/Room no is already assigned . Don't Refresh page</h1>";
        }else{
            echo "<h1> Added into database </h1>";
        }
        
    }//end of main if statement
    
    ?>

</div>

<?php include "footer.php";  ?>