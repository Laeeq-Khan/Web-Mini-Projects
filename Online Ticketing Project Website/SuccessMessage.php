 

<?php  include"head.php" ?>
<?php  include"Navigation.php" ?>
 <img src="Pictures/main.jpg" class="img img-responsive" style="box-shadow:0px 0px 10px gray;"> 
  <br><br>  <br><br>
<div class="row" style="color:white;background-color:orange; border-radius:20px;">

 
  
    <?php
    
 if(isset($_GET['seat'])){
     $seat =$_GET['seat'];
     $van1 =$_GET['bus'];
     $date = $_GET['date'];
     echo "<h1 style='text-align:center' > You have booked your Seat </h1>";
       echo "<h3 style='text-align:center ;  > Vehical No :  $van1  </h3>";
          echo "<h3 style='text-align:center   >Seat:  $seat  </h3>";
          echo "<h3 style='text-align:center;   >  Dated :  $date   </h3>";
        echo "<h3 style='text-align:center' >  Pay your order charges on counter with in 4 hours </h3>";
   
 }
    
     
     ?>
    
    < 
</div>
 
<?php  include"footer.php" ?>