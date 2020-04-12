<?php
include "Files/Header.php";
?>
 <style>
      h1 , h2 , h3{
         text-align: center;
         color: mediumvioletred;
     }

</style>
<br><br>
<div class="row">
    <div class="col-md-2"></div>    
<div class="col-md-8">
   <br><br>
    
    <?php
     $st = 0;
    
    if(isset($_POST['submit'])){
          $count = $_POST['count'];
         $date = $_POST['date'];
        $status = true;
         while($st < $count){
           
        $attend = $_POST["Attend".$st];
        $name = $_POST["name11".$st];
         $id = $_POST["id".$st];
           
        $query = "insert into attendence( name ,teacher_code , status , date) values('$id' , '$name' , '$attend' , '$date')  ";
        $result = mysqli_query($connection , $query);
           
         
        if(mysqli_errno($connection) == 1062){
           echo "<h1> Duplication Error. Not reload page </h1> ";
            $status = false;
            break;
        }
           
             
             
           $st++;
       }//end of while   
        if($status == true){
            echo "<h1> Successfully Submitted Attendance of $date   </h1>";
        }
        
    }//end of if
    
    ?>
    
    
  
    <br><br>
</div>
</div>
  
<?php
include "Files/Footer.php";
?>