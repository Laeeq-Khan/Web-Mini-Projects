


<?php include "navigation.php";  ?>
<br><br><br>

<?php
 ob_start();
if(isset($_GET['submit'])){
$cnic = $_GET['cnic'];
$sr = $_GET['srno'];
     
    
    $query = "select * from registered where cnic =$cnic  AND  SrNo = $sr";
    $result = mysqli_query($con , $query);
    
      
 if(!$result){
    echo "<h2 style='color:green ; text-align:center;'> <u> There is no record in Database for your Input </u> </h2>";
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
     
    
    ?>

    <img src="<?php echo "Images/".$post_image; ?>"  style="box-shadow:2px 2px 10px gray;" class="img img-responsive "   width="650px" >
<br><br>

<div class="row"> 
 <h2>Status  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  :  <span style="color:green"> Registered </span></h2><br> 
    <table class="table table-hover">
    <thead>
        
        <tr>
        <th> Name</th>
        <th>Date of Birth</th>
        <th>Program</th>
        <th> Discpline</th>
        </tr>
        </thead>
    
     <tr>
         
      <td>  <h2>  <?php  echo $fullName; ?> </h2></td><br>
      <td>  <h2>  <?php  echo $dob; ?>  </h2></td> <br>
      <td>  <h2> <small> <?php  echo $program; ?>  </h2> </td><br>
     <td>   <h2> <?php  echo $discpline; ?>  </h2> </td><br>
       
     </tr>
         
 </div>        
 


<?php
     }
}else{
    
    header("Location: Registration.php");
}
//end of main if
?>


<br><br><br>
<?php include "footer.php";  ?>