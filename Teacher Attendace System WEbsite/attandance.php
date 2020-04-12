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
    
    <form method="post" class="form" action="submitted.php">
        
    <div class="form-inline">  
        <label> Date : </label>
    <input type="date" name="date" class="form-control" value="<?php  echo date("Y-m-d"); ?>">
    </div>
        <br>
        
        
    <table class="table table-bordered table-hover">
    <thead>
        <tr>
        <th> Code</th>
        <th> Name</th>
        <th> Contact</th>
        <th> Present</th>
        <th> Appsent</th>
            
        </tr>
    </thead>
    
        <?php
        
        $query = "select * from teacher";
        $result = mysqli_query($connection , $query);
        $count = 0;
        
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $contact = $row['contact'];
            
            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$name</td>";
            echo "<td>$contact  </td>";
            $attend = "Attend".$count;
             
            echo "<td><input type='radio' name='$attend'  value='P' class='form-control' required>  </td>";
             echo "<td><input type='radio' name='$attend' value='A' class='form-control'>  </td>";
            echo "</tr>";
           
            ?>
            
         <input type="text" name="name11<?php echo $count ?>" hidden  value="<?php echo $id; ?>">
        <input type="text" name="id<?php echo $count ?>" hidden  value="<?php echo $name; ?>">
          
        
            <?php
             $count++;
        } //end of while loop
        ?>
        
        
    </table>
<!--        table end here-->
        
        
    
       <input type="text" name="count" hidden  value="<?php echo $count; ?>"> 
        <input type="submit" name="submit" class="btn btn-md     btn-primary">
        
    </form>
<!--    form end here-->
    <br><br>
</div>
</div>
  
<?php
include "Files/Footer.php";
?>