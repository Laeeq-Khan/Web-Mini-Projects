

<?php  include "include_Files/Head.php" ?>

<br><br><br><br>


<div class="row">
<div class="col-md-12">
    
    </div>
</div>

<form method="get" >
<div class="form-inline">
    
    <label> Search </label>
    <input type="text" id="se" class="form-control" name="search" placeholder="Search by Roll No"
         value=
                <?php 
                if(isset($_GET['ab'])){
                $ac = $_GET['ab'];
                echo $ac;
                } ?>
           
           > &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
    <input type="submit" class="btn btn-danger" name="sub" value="Submit">
    </div>

</form>

<script>

</script>
<?php 
    
    
//                                                          Here we are bringing data from database on search base
    if(isset($_GET['sub'])){
     
        $roll = $_GET['search'];
        $query  = "select * from students where RollNo = '$roll' ";
        $result = mysqli_query($con , $query);
        
        $row = mysqli_fetch_assoc($result);
        if(!$row){
            echo "<h1>  No Record Found </h1>";
         }else{
            
            $roll = $_GET['search'];
            $name = $row['name'];
            $department = $row['department'];
            $program  = $row['program'];
            
            echo "<h3>Roll No :   $roll </h3>";
            echo "<h3>Name :   $name </h3>";
            echo "<h3>Department :   $department </h3>";
            echo "<h3>Program :   $program </h3>";
            
        }//end of else
    }//end if isset if 


?>
<br>

                    <!--here is form of subject name and marks enter field -->
<form  method="post">
<div class="form-inline">
    
    <label> Subject Name</label> &nbsp; &nbsp;
    <input type="text" class="form-control" name="subname" required>  &nbsp; &nbsp;<label> Marks : </label>
    <input type="text" class="form-control" name="marks"> &nbsp; &nbsp; &nbsp;
    <input type="submit" name="subb" value="Submit" class="btn btn-primary" required>
    </div>
</form>


<br><br>

<?php // subjecet adding to form  

if(isset($_POST['subb']) && isset($roll)){
    $Subname = $_POST['subname'];
    $Submarks = $_POST['marks'];
    $roll = $roll;
    
    $query = "insert into subject(St_Roll , Name , Marks) Values('$roll' , '$Subname' , '$Submarks') ";
    $res = mysqli_query($con  , $query);
    if(!$res){
        echo "Not inserted into database";
    }
}


?>


<table  class="table table-hover">
<thead>
    <tr>
    <th> ID</th>
    <th> Subject Name</th>
    <th> Obtain / Total</th>
     </tr>
    </thead>
    
<?php
    if(isset($_GET['sub'])){
        
    $q = "select * from subject where St_Roll = '$roll' ";
    $re = mysqli_query($con , $q);
    while($row1 = mysqli_fetch_assoc($re)){
        $id = $row1['Subject_ID'];
       ?>
    
       <tr> 
        <td> <?php  echo $row1['Subject_ID']; ?></td>
            <td> <?php  echo $row1['Name']; ?></td>
            <td> <?php  echo $row1['Marks']." / 100"; ?></td>
           
    </tr>
<?php        
    }
        
    }
    ?>
   
</table>


<?php  include "include_Files/Bottom.php" ?>