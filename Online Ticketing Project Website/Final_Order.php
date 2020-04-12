 

<?php  include"head.php" ?>
<?php  include"Navigation.php" ?>
 <img src="Pictures/main.jpg" class="img img-responsive" style="box-shadow:0px 0px 10px gray;"> 
  <br><br>  <br><br>
<div class="row">

<div class="col-md-12">
  
    <?php
    
    if(isset($_GET['seat'])){
        $seat = $_GET['seat'];
        $date = $_GET['date'];
        $van = $_GET['bus'];
        
        echo "<h2 style='text-align:center';> Fill the form to confirm your booking  </h2>";
      
    }
    ?>
  <style>
      .ab{
          width: 300px;
      }
    </style>
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="box-shadow:0px 0px 10px gray; background-color:orange;">
        <br>
        <center>
        <form method="post" class="form">
        
            Name:  &nbsp; &nbsp;
            <input type="text" name="name" class="ab" required> <br><br>
           
        
            CNIC : &nbsp;  &nbsp;
            <input type="text" name="cnic" class="ab" required><br><br>
           
            Contact : 
            <input type="text" name="contact" class="ab" required><br><br>
             
            &nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;
            &nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;
            
            <input type="submit" name="sub" value=" &nbsp  &nbsp  &nbsp Booking &nbsp  &nbsp  &nbsp "   >
            
        </form>
        </center>
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

<?php  include"footer.php" ?>