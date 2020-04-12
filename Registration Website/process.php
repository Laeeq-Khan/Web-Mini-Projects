<?php include "Includes/header.php";  ?>
<?php include "Includes/slideImage.php";  ?>
<?php include "Includes/navigation.php";  ?>
<br><br><br>

<?php
 ob_start();
if(isset($_GET['submit'])){
$cnic = $_GET['cnic'];
$sr = $_GET['srno'];
     
    
    $query = "select * from registered where cnic =$cnic  AND  SrNo = $sr";
    $result = mysqli_query($con , $query);
 if(!$result){
    echo "<h2 style='color:red ; text-align:center;'> No Record of your given Data </h2>";
   } else{
     $row = mysqli_fetch_assoc($result);
  
   
   
     $fullName = $row['fullname'];
    
      $fatherName = $row['fathername'];
      $dob = $row['dob'];
      $cnic = $row['cnic'];
      $contact = $row['contact'];
      $email = $row['email'];
      $gender = $row['gender'];
      $shadi =$row['shadi'];
     
      $board1 = $row['board1'];
      $roll1 = $row['rollno1'];
      $year1 = $row['year1'];
      $group1 = $row['group1'];
      $obtain1 = $row['obtain1'];
      $total1 = $row['total1'];
     
     
      $board2 = $row['board2'];
      $roll2 = $row['rollno2'];
      $year2 =$row['year2'];
      $group2 =$row['group2'];
      
      $total2 = $row['total2'];
     $obtain = $row['obtain2'];
      $program =$row['program'];
      $discpline = $row['discipline'];
     $SrNo = $row['SrNo'];
     $post_image = $row['Image'];
       
    $post_image = "Images/".$post_image;
     
    ?>
    
<div class="row">  
        <div class="col-md-8">
        <h5>Status  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  :  <span style="color:red"> Registered </span></h5><br>
        <h5>Full Name &nbsp; &nbsp; : <small> <?php  echo $fullName; ?></small> </h5><br>
        <h5>Father Name : <small> <?php  echo $fatherName; ?></small> </h5> <br>
        <h5>Date of Birth : <small> <?php  echo $dob; ?></small> </h5> <br>
        <h5>Program  &nbsp; &nbsp; &nbsp; &nbsp;: <small> <?php  echo $program; ?></small> </h5> <br>
        <h5>Discipline &nbsp; &nbsp;   : <small> <?php  echo $discpline; ?></small> </h5> <br>
        <h5>Contact  &nbsp; &nbsp; &nbsp; &nbsp;: <small> <?php  echo $contact; ?></small> </h5> <br>
        
            

        </div>
    
 
            
        <div class="col-md-4">
        <img src="<?php echo $post_image; ?>"  style="box-shadow:2px 2px 10px gray;" class="img img-responsive img-thumbnail"   width="350px" >
        </div>
 </div>        



<?php
    }
}else{
    
    header("Location: Registration.php");
}
//end of main if
?>


<br><br><br>
<?php include "Includes/footer.php";  ?>