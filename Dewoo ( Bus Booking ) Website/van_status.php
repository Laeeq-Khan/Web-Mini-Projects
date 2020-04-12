 <style>

     td:hover{
         background-color: darkgray;
     }
</style>

<?php  include"Website_Head.php" ?>
<?php  include"Upper_Navigation.php" ?>
 <img src="Pictures/nav.jpg" class="img img-responsive" style="box-shadow:0px 0px 10px gray;"> 

<div class="row">

<div class="col-md-12">
<h1 style="text-align:center">Avaliable Seats </h1>
    <table class="table table-hover">
    
       
    <tr>
  
    <?php 
    
        
$found = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

if(isset($_GET['van'])){
        $bus_id= $_GET['van'];
        $date= $_GET['date'];
    
        $query  = "select * from booked where Datee = '$date' AND bus_no='$bus_id'  ";
        $result = mysqli_query($con , $query);    
    $count = 0;
    if(!$result){echo "Query error";}else{
        
        while($res = mysqli_fetch_assoc($result)){
          $found[$count] = $res['seat'];
        $count++;
        }
        
    }
}


$sb = 1;
$seat = 1;
while($seat < 41){

   
foreach($found as $ff){
 if($ff == $seat)
     $seat++;
}  
     echo "<td> <a href='Final_Form.php?date=$date&bus=$bus_id&seat=$seat'>  $seat </a></td>";
    if($sb %10 == 0){
        echo "<tr></tr>";
    }
     $sb++;   
    $seat++;
}


    ?>

        
        
        </tr>
      </table>
    </div>
</div>


<?php  include"Website_Foot.php" ?>


<!--    
    <?php
    
    
    
    ?>
    -->