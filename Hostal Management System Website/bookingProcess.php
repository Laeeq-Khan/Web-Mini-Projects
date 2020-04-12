<?php include "head.php";  ?>
 
<ul>
  <li><a  href="index.php">Home</a></li>
  <li><a class="active" href="Booking.php">Room Booking</a></li>
  <li><a href="Status.php">Status</a></li>
     <li><a href="add_room.php">Add Rooms</a></li> 
</ul>


<br><br>

<div class="row">
<div class="col-md-2"></div>
    
    <div class="col-md-8" style="background-color:white"> 
    <h3> Enter Your Personal Details</h3>
        <form method="post">
        
            
            <div class="form-group">
            <label> Name</label>
            <input type="text" name="name" class="form-control" required>
            </div>
           
             <div class="form-group">
            <label> CNIC </label>
            <input type="text" name="cnic" class="form-control" required>
            </div>
            
            
            <div class="form-group">
            <label> Contact </label>
            <input type="text" name="contact" class="form-control" required>
            </div>
            
            <div class="form-group">
            <label> Father Name</label>
            <input type="text" name="father" class="form-control" required>
            </div>
            
            
            <div class="form-group">
            <label> Father Contact </label>
            <input type="text" name="fcontact" class="form-control" required>
            </div>
            
              <div class="form-group">
            <label> Father CNIC </label>
            <input type="text" name="fcnic" class="form-control" required>
            </div>
            
            
            <div class="form-group">
            <label> Address </label>
            <input type="text" name="address" class="form-control" required>
            </div>
            
            <div class="form-group">
            <label> Date </label>
            <input type="date" name="date" class="form-control" required>
            </div>
            
            <center> <input type="submit" name="sub" value="Submit" class="btn btn-primary">   </center>
            
        </form>
    <br><br>
    </div>
</div>

<?php  

if(isset($_POST['sub'])){
    
    $no = $_GET['name'];
    $name = $_POST['name'];
    $cninc = $_POST['cnic'];
    $contact  = $_POST['contact'];
    $father= $_POST['father'];
    $father_Contact =  $_POST['contact'];
    $father_cnic = $_POST['fcnic'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    
    
    
    $query_insert = "insert into booked(room , date , name , cnic , contact , address , father , father_contact , father_cnic) ";
    $query_insert .= " values('$no' , '$date', '$name', '$cninc', '$contact', '$address', '$father', '$father_Contact', '$father_cnic')  ";
    
    $final = mysqli_query($connection , $query_insert);
    if(!$final){
        echo "<h3 stle='color:white'>  Not submitted <h3>";
    }else{
        
        
        echo "<h2 style='background-color:white; padding:20px'> Booked  Successfully. </h2>";
        echo "<script> alert('Successfully booked Room  $no ')  </script>";
        
    }
    
}

?>

<?php include "footer.php";  ?>