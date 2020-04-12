 

<?php  include"Website_Head.php" ?>
<?php  include"Upper_Navigation.php" ?>
 <img src="Pictures/nav.jpg" class="img img-responsive" style="box-shadow:0px 0px 10px gray;"> 

<div class="row">

<div class="col-md-12">
    <br><br>
    <table class="table table-hover tablek-striped" style="box-shadow:0px 0px 10px gray;">
    <thead>
        <tr>
        <th> Bus No</th>
        <th> Driver Name</th>
        <th> Departure</th>
        <th> Destination</th>
        <th> Start</th>
        <th> Reached</th>
        <th> RS</th>
        <th> Book Me</th>
        </tr>
        </thead>
    
   
<?php  
  
    
    if(isset($_POST['submit1'])){
        $date_Selected = $_POST['date'];
        $destination = $_POST['destination'];
        $departure = $_POST['departure'];
    
        $date_Computer= date("Y-m-d");
      
        if($date_Selected > $date_Computer){
           
            $query = "select * from bus where From1 = '$departure'  && To1 = '$destination' ";
            $result = mysqli_query($con , $query);
 $count = 0;
            
            while($row = mysqli_fetch_assoc($result)){
                $busNo= $row['BusNo'];
                $dirver = $row['Driver_Name'];
                $from = $row['From1'];
                $to = $row['To1'];
                $start = $row['Start1'];
                $end = $row['Reach1'];
                echo "<tr>";
                echo "<td>$busNo </td>";
                echo "<td>$dirver </td>";
                echo "<td>$from </td>";
                echo "<td>$to </td>";
                echo "<td>$start </td>";
                echo "<td>$end </td>";
                echo "<td>750 RS </td>";
                echo "<td><a href='van_status.php?van=$busNo&date=$date_Selected '> Book Me  </a></td>";
                echo "<tr>";
                $count = $count + 1;
            }
            
            if($count == 0){
                echo "<h1 style='color:red';>  No Record Found ,  May be your Departure and Destination is Wrong.  </h1>";
echo "<h3 style='color:red';> Please Book Your  seat one day before. Same Day no online booking </h3>";
            }
          
        }else{ //if user select old date then else statement
            echo "<h1> You Select Old Date. Please Select Today date or select  Coming Days . Thanks </h1>";
        }
        
    }
?>
    
    
     </table>
    </div>
</div>


<?php  include"Website_Foot.php" ?>