<?php include "head.php";  ?>
 
<ul>
  <li><a  href="index.php">Home</a></li>
  <li><a href="Booking.php">Room Booking</a></li>
  <li><a  class="active" href="Status.php">Status</a></li>
     <li><a href="add_room.php">Add Rooms</a></li> 
</ul>

<br><br>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6" style="background-color:white">

    <h2> Check your booking status</h2><br><br>
    
    <form class="form" method="post"> 
    
    <div class="form-input">
    <label> CNIC </label>    
    <input type="text" name="cnic" class="form-control"><br>
   <center><input type="submit" name="sub" value="Search" class="btn btn-primary"></center>
    </div><br><br>
    
    </form>
    
</div>
</div>
<br>

<div class="row">
<div class="col-md-1"></div>
    <div class="col-md-9" style="background-color:white">
    
        <table class="table table-hover table-stripped">
            <thead>
            <tr>
            <th>Room</th>
            <th>Date</th>
            <th>Name</th>
            <th> Cnic</th>
            </tr>
            </thead>
        
            <?php
            if(isset($_POST['sub'])){
                $cnic = $_POST['cnic'];
                
                $query = "select  * from booked where cnic = '$cnic'";
                $result = mysqli_query($connection , $query);
                
                while($row = mysqli_fetch_assoc($result)){
                    $room = $row['room'];
                    $date = $row['date'];
                    $name = $row['name'];
                    $cnic = $row['cnic'];
                    
                    echo "<tr>";
                    echo "<td> $room  </td>";
                    echo "<td> $date  </td>";
                    echo "<td> $name  </td>";
                    echo "<td> $cnic  </td>";
                    
                    echo "</tr>";
                }
                
            }
            
            ?>
        
        </table>
    
    </div>
</div>

 
<?php include "footer.php";  ?>