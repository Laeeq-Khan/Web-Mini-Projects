<?php  include"navigation.php" ?>

<?php
                                        // Here is code to stop crose side scripting and some basic hacking 
                                        function hackingValidation($data){

                                        $data = trim($data);
                                        $data = trim($data);
                                        $data = stripslashes($data);
                                        $data = htmlspecialchars($data);
                                        return $data;
                                        }
   



 
if(isset($_POST['submit'])){
    
    $aa = $_POST['submit'];
    echo $aa;
    if($aa == "Not"){
        echo "Fun";
        header("Location:index.php");
    }
      $fullName = hackingValidation($_POST['fullName']);
      $fatherName = hackingValidation($_POST['fatherName']);
      $dob = hackingValidation($_POST['dob']);
      $cnic = hackingValidation($_POST['cnic']);
      $contact = hackingValidation($_POST['contact']);
      $email = hackingValidation($_POST['email']);
      $gender = hackingValidation($_POST['gender']);
      
     
      $board1 = hackingValidation($_POST['selectBoard1']);
      $roll1 = hackingValidation($_POST['rollNo1']);
      $year1 = hackingValidation($_POST['completionYear1']);
      $group1 = hackingValidation($_POST['group1']);
      $obtain1 = hackingValidation($_POST['obtainMarks1']);
      $total1 = hackingValidation($_POST['totalMarks1']);
     
     
      $board2 = hackingValidation($_POST['selectBoard']);
      $roll2 = hackingValidation($_POST['rollNo2']);
      $year2 = hackingValidation($_POST['completionYear2']);
      $group2 = hackingValidation($_POST['group2']);
      
      $total2 = hackingValidation($_POST['totalMarks2']);
     $obtain = hackingValidation($_POST['obtainMarks2']);
      $program = hackingValidation($_POST['program']);
      $discpline = hackingValidation($_POST['discipline']);
     $post_image =  $_FILES['image']['name'];
     $post_image_temp = $_FILES['image']['tmp_name'];
    
    $img = $cnic.$discpline.$program.$post_image;
   
    $query = "INSERT INTO registered(cnic , fullname , fathername , dob , contact , email , gender  , board1, rollno1 , year1 , group1, ";
   $query  .= " obtain1 ,total1 , board2  , rollno2 , year2, group2, obtain2 , total2, program  , discipline  ,	Image ) ";
    $query .= "VALUES('$cnic', '$fullName' , '$fatherName','$dob' ,'$contact','$email','$gender', '$board1','$roll1','$year1' , ";
    $query .= " '$group1','$obtain1' ,'$total1','$board2','$roll2','$year2','$group2','$obtain','$total2','$program','$discpline' , '$img'  )";
    
    $result  = mysqli_query($con, $query);
    
     move_uploaded_file($post_image_temp , "Images/".$img);
    
    
    unset($_POST);
  
    
    if(!$result){
        echo mysqli_error($con)." First fill the form please ";
       
    }else{
        
        
        
        ?>
 
<br><br>

<div class="row">

<div class="col-md-12" style="background-color:blue; padding:40px;">
    
    <h1 style="color:yellow; text-align:center;">Congrats : You are Registered Now</h1>
    <h4 style="color:yellow ; text-align:center"> Your Admission Code is  :  
        <?php 
        $query = "select MAX(SrNo) as laiq from registered";
        $result  = mysqli_query($con , $query );
         
        $number = mysqli_fetch_assoc($result);
        echo $number['laiq'];
        ?>
        
        You can check your result by Siral No  </h4>
    </div>

</div>


<br><br><br><br><br>
<?php include "footer.php"; ?>
 
 
 

<?php
    }
    
   
}else{
?>
                 
                <?php include "navigation.php"; ?>
 
                <br><br>

                <div class="row">

                <div class="col-md-12" style="background-color:green; padding:40px;">

                <h1 style="color:yellow; text-align:center;"> First Fill the form and Submit to check the status </h1>
                <h4 style="color:yellow ; text-align:center">    </h4>
                </div>

                </div>


                <br><br><br><br><br>
                <?php include "Includes/footer.php"; ?>

    
   <?php 
}
?>


