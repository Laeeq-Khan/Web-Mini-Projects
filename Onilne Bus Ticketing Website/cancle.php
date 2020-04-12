 <style>
     .aa{
         width: 350px;
     }
</style>

<?php  include"head.php" ?>
<?php  include"Navigation.php" ?>
 <div class="row">
<div class="col-md-12">
    <img src="Pictures/main.jpg"  class="img img-responsive back" >
    </div>
</div>
 <br><br>
  
<div class="row">
<div class="col-md-2"></div>
    <div class="col-md-8">
    <h1 style="text-align:center"> Cancle your Advance booking seat </h1>
        <hr style="border:2px solid black;" >
        <center>
        <form class="table table-dark" method="post">
        
            CNIC : &nbsp; &nbsp;
            <input type="text" name="cnic" required  class="aa"><br><br>
            Bus No:  &nbsp;
            <input type="text" name="no11" required  class="aa"><br><br>
            Date:  &nbsp; &nbsp; &nbsp;
            <input type="date" name="date" required  class="aa"><br><br>
            
             Seat No: 
            <input type="text" name="seat" required  class="aa">
            <br><br>
            <input type="submit" name="submit" value="Cancle" style="background-color:pink; padding:10px;">
        </form>
    </center>
        
        <?php
if(isset($_POST['submit'])){
    $cnic = $_POST['cnic'];
    $busno = $_POST['no11'];
    $date = $_POST['date'];
    $seat = $_POST['seat'];
    
    $query = "delete from booked where cnic = '$cnic' AND bus_no = '$busno'  AND  Datee = '$date'  AND  seat =  '$seat' ";
    $result = mysqli_query($con , $query);
    
    if(!$result){
        echo "<h1> Not Cancled your entered wrong information </h1>";
    }else{
         echo "<h1> Your Seat no $seat for Date $date has been cancled. </h1>";
    }
    
}

?>
    </div>
</div>

<br><br>
<?php  include"footer.php" ?>



