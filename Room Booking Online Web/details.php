<?php include "Inc/head.php";  ?>
<?php include "Inc/nav.php";  ?>

<style>

    .pos{
        position: relative;
        top: 60px;
        left: 70px;
    }
    
    .colo{
        background-color: white;
        box-shadow: 0xp 0px 10px black;
        position: relative;
        top: 50px;
        border-top: 2px solid black;
        border-bottom: 2px solid black;
    }
    
    a{
        text-decoration: none;
    }
    a:link{
        text-decoration: none;
    }
    a:hover{
        color: red;
    }
    
           
    
</style>

<?php
if(isset($_GET['code'])){
$code1 = $_GET['code'];
$query = "select * from room where code = '$code1'";
$res = mysqli_query($connection , $query);
$row  = mysqli_fetch_assoc($res) ;

$code = $row['Code'];
$img = $row['Img'];
$type = $row['Type'];
$price = $row['Price'];
$detail = $row['Details'];

}
$date_Computer= date("Y-m-d");
 $newdate = strtotime ( '+1 day' , strtotime ( $date_Computer ) ) ;
$newdate = date ( 'Y-m-d' , $newdate );  
?>

<div class="row colo">
<div class="col-md-12">
    
       <div class="row"  >
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <h1> Booking</h1>
            <form class="form" method="post" action="Booked_Room.php">

            <div class="form-inline">
            <label>From</label>
            <input type="date" class="form-control" name="from" required="date" id="from" value="<?php echo $newdate  ?>">
                &nbsp; &nbsp; &nbsp;  <label>To</label>
            <input type="date" class="form-control" name="to" required="date" id="to">
            </div>
                
            <div class="form-group">
            <label> Name : </label>
                <input type="text" name="name" class="form-control" required>
            </div>
           
             <div class="form-group">
            <label> CNIC : </label>
                <input type="text" name="cnic" class="form-control" required>
            </div>
                
             <div class="form-group">
            <label> Contact : </label>
                <input type="text" name="contact" class="form-control" required>
            </div>
              
                
                 <br>
            &nbsp; &nbsp; &nbsp;
            <input type="submit" value="Book Me" class="btn btn-primary" id="btn" name="submit">
               
            <input type="text" value="<?php echo $code ?>" hidden name="code">    
            </form>

            </div>
            </div> 
    
<div class="row">
<br><br>
    <br>
    <br><Br>
           
<div class="col-md-5">
<h1> Type  : <small> <?php echo $type ?></small></h1>
<h1> Price  : <small> <?php echo $price ?> PKR / Night</small></h1>
<h1> Details  : <small> <?php echo $detail ?></small></h1>
</div>
<div class="col-md-7">
<img src="Room_Images/<?php echo $img ?>" class="img img-responsive" width="600" style="box-shadow:0px 0px 10px gray"> &nbsp; &nbsp;
<br><Br>
</div>
</div>
    
    </div>
 </div>


<?php include "Inc/footer.php";  ?>


 