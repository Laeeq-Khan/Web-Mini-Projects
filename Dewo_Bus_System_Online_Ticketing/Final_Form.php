 

<?php  include"Website_Head.php" ?>
<?php  include"Upper_Navigation.php" ?>
 <img src="Pictures/nav.jpg" class="img img-responsive" style="box-shadow:0px 0px 10px gray;"> 
  <br><br>  <br><br>
<div class="row">

<div class="col-md-12">
  
    <?php
    
    if(isset($_GET['seat'])){
        $seat = $_GET['seat'];
        $date = $_GET['date'];
        $van = $_GET['bus'];
        
        echo "<h2 style='text-align:center';> Welcome to Booking Panel  </h2> <hr>";
        echo "<h3> Bus No : $van  </h3>";
         echo "<h3> Seat : $seat  </h3>";
         echo "<h3> Departure Date : $date  </h3> <hr>";
    }
    ?>
  
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="box-shadow:0px 0px 10px gray;">
        <br>
        <form method="post" class="form">
        
            <div class="form-group">
            <label> Name </label>
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
            
            <input type="submit" name="sub" value=" &nbsp  &nbsp  &nbsp Booking &nbsp  &nbsp  &nbsp " class="btn btn-danger" >
            
        </form>
        
        <Br>
        </div>
    </div>
    
    </div>
</div>


<?php  
        if(isset($_POST['sub'])){
             $cnic= $_POST['cnic'];
            $name= $_POST['name'];
            $contact =  $_POST['contact'];
            
          $queryinsert = "insert into booked(bus_no ,seat ,Datee , cnic, Name, Contact) ";
            $queryinsert .=" Values('$van' , '$seat' , '$date' , '$cnic' , '$name' , '$contact') " ;
            
            $res1 = mysqli_query($con , $queryinsert);
            if(!$res1){
                echo "<br> <h4 style='text-align:center;'>Already Book this seat, Contact with Manager <h4>";
            }else{
                
                header("Location:SuccessMessage.php?seat=$seat&date=$date&bus=$van");
            }
            
        }


?>


<?php  include"Website_Foot.php" ?>