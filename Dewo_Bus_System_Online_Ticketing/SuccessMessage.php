 

<?php  include"Website_Head.php" ?>
<?php  include"Upper_Navigation.php" ?>
 <img src="Pictures/nav.jpg" class="img img-responsive" style="box-shadow:0px 0px 10px gray;"> 
  <br><br>  <br><br>
<div class="row">

<div class="col-md-12">
  
    <?php
    
 if(isset($_GET['seat'])){
     $seat =$_GET['seat'];
     $van1 =$_GET['bus'];
     $date = $_GET['date'];
     echo "<h1 style='text-align:center' >  Congrats for Successfull Booking  </h1>";
       echo "<h3 style='text-align:center ; color:red' > Bus No : <b><u>$van1</u></b> </h3>";
          echo "<h3 style='text-align:center ; color:red' > Your Booked Seat No: <b><u>$seat</u></b> </h3>";
          echo "<h3 style='text-align:center; color:red'  >  Date : <b><u>$date</u></b>  </h3>";
        echo "<h3 style='text-align:center' >  Please Confirm you seat by Easy paisa on 0358988899 <br>
        OR <br> Submit Rs 750 on Counter </h3>";
     
     echo "<h3 style='text-align:center ; color:red' > Thanks for Chosing Dewoo Express </h3>";
 }
    
     
     ?>
    
    </div>
</div>
 
<?php  include"Website_Foot.php" ?>