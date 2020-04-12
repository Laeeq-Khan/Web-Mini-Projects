<?php include "Inc/main.php";  ?>
<?php include "Inc/links.php";  ?>

<style>
    label{
        text-align: left;
        color: royalblue;
    }
    
</style>
<br><br>
<div class="row">
<div class="col-md-3"></div>
 <div class="col-md-6">
    
    <?php
     
     if(isset($_POST['submit'])){
         $name  = $_POST['name'];
          $fathername  = $_POST['fathername'];
          $city  = $_POST['city'];
          $school  = $_POST['school'];
          $english  = $_POST['english'];
          $urdu  = $_POST['urdu'];
          $islam  = $_POST['islam'];
          $math  = $_POST['math'];
          $bio  = $_POST['bio'];
          $physic  = $_POST['physic'];
          $chemsitry  = $_POST['chemistry'];
          $roll  = $_POST['roll'];
          
         $query = "insert into result(roll ,name , fathername , city , schoolname , english , urdu , math , islamiat, biology, chemistry, physic) Values('$roll' , '$name', '$fathername', '$city', '$school', '$english', '$urdu', '$math', '$islam', '$bio', '$chemsitry', '$physic') ";
         
         
         $insert = mysqli_query($connection , $query);
         if(!$insert){
             echo "<h1> Record is not inserted , Please contact to DBA  </h1>";
         }else{
              echo "<h1> $name Record hass been inserted into Database </h1>";
         }
         
     }
     
     ?>
     
</div>

 <br><br>

<?php include "Inc/footer.php";  ?>