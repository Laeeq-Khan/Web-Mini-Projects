<?php include "head.php";  ?>
 
<ul>
  <li><a  href="index.php">Home</a></li>
  <li><a class="active" href="Booking.php">Room Booking</a></li>
  <li><a href="Status.php">Status</a></li>
     <li><a href="add_room.php">Add Rooms</a></li> 
</ul>


<br><br>

<div class="row">
<div class="col-md-3"></div>
    <div class="col-md-6" style="background-color:white"> 
    <h3>Rooms Details</h3>
    <br>
    <table class="table table-hover table-borderd" style="border-top:2px solid black;">
    <thead>
    <tr>
        
        <th>Room Name</th>
        <th> Avalible Beds</th>
        <th>Total Beds</th>
        <th>Order</th>
    </tr>    
    </thead>    
    <?php
      $query_text = "select * from rooms";
        $result = mysqli_query($connection , $query_text);
        
        if(!$result){
            echo "No room is in database. first add rooms";
        }
        $count = 0;
        while($row = mysqli_fetch_assoc($result)){
            $no = $row['no'];
            $beds = $row['beds'];
            $booked= $beds;
            $cont_query = "select COUNT(room) as total from booked where room = '$no'   ";
            $count_result = mysqli_query($connection , $cont_query);
            if(!$count_result){
                echo mysqli_error($connection);
            }else{
            $res = mysqli_fetch_assoc($count_result);
            $booked = $res['total'];
            $booked =  $beds - $booked;
            }
            
            if($booked <0){
                $booked = 0;
            }
            
                if($booked <= 0){
                echo "<tr>";
                echo "<td> $no </td>";
                echo "<td> $booked </td>";
                echo "<td> $beds </td>";
                echo "<td> All Beds are Booked </td>";
                echo "</tr>";   
                }else{
                echo "<tr>";
                echo "<td> $no </td>";
                echo "<td> $booked </td>";
                echo "<td> $beds </td>";
                 echo "<td><a href='bookingProcess.php?name=$no'> Book Me </a></td>";
                echo "</tr>";  
                }

                
        $count = $count  + 1;
        }
        
    ?>    
      
    </table>
    
    </div>
</div>



<?php include "footer.php";  ?>