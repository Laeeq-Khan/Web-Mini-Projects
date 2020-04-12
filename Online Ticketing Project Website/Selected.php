 

<?php  include"head.php" ?>
<?php  include"Navigation.php" ?>
 <div class="row">
<div class="col-md-12">
    <img src="Pictures/main.jpg"  class="img img-responsive back" >
    </div>
</div>

<style>
    table{
        color:green;
        font-size: 22px;
        padding: 5px;
    }
    
    a{
        color: red;
        
    }   
    a:hover{
        background-color: black;
        color: white;
        padding: 8px;
        text-decoration: none;
    }
    th{
        background-color: darkslategray;
        color: white;
        text-align: center;
    }
    td{
        background-color: hotpink;
    }
    
</style>

<div class="row">

<div class="col-md-12">
    <br><br>
    <table class="table table-bordered" style="">
    <thead>
        <tr>
        <th> Bus No</th>
        
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
               
                echo "<td>$from </td>";
                echo "<td>$to </td>";
                echo "<td>$start </td>";
                echo "<td>$end </td>";
                echo "<td>1050 RS </td>";
                echo "<td><a href='Seats_Details.php?van=$busNo&date=$date_Selected '> Booking Order  </a></td>";
                echo "<tr>";
                $count = $count + 1;
            }
            
            if($count == 0){
                echo "<h1 style='color:red';>  No Record Found ,  May be your Departure and Destination is Wrong.  </h1>";
echo "<h3 style='color:red';>You can not book seat online same day. Sorry  </h3>";
            }
          
        }else{ //if user select old date then else statement
            echo "<h1 style='color:red';> Date Selectioin Problem - Refill form,  Thanks </h1>";
        }
        
    }
?>
    
    
     </table>
    </div>
</div>

<?php  include"footer.php" ?>