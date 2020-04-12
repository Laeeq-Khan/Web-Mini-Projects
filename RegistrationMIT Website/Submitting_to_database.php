

<?php  include "include_Files/Head.php" ?>
<?php
$output = "";

if(isset($_POST['sub'])){
 
    $roll = $_POST['rollNo'];
    $name = $_POST['name'];
    $fathername = $_POST['father_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
  
    $department = $_POST['department'];
    $program = $_POST['program'];
    
    
    $query = "insert into Students(RollNo  , name , fathername , address, contact , email , department , program  ) ";    
    $query .= " values('$roll' , '$name' , '$fathername', '$address', '$contact', '$email', '$department', '$program')";
    
    $result = mysqli_query($con , $query);
    
    if(!$result){
         echo "<h1>  Error , Not submitted  , This Roll number is already registered</h1>";
       
    }else{
        $output = "Successfully registered";
            unset($_POST);
            $_POST = array();
    }
}else{
   header("Location:index.php");
}
?>





<div class="row">

<div class="col-md-3"></div>
<div class="col-md-6">
    
   <?php echo "<h1>".$output."</h1>"  ?>
    
    </div>
    
</div>


<?php  include "include_Files/Bottom.php" ?>