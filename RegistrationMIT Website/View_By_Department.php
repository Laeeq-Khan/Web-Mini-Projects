

<?php  include "include_Files/Head.php" ?>

<br><br><br><br>


<div class="row">
<div class="col-md-12">
    
    </div>
</div>

<form method="post">
<div class="form-inline">
    <label> Select Department : </label>
    
      <select class="form-control" name="department"  required>
                <option>Select Department</option>
                <option>CS & IT</option>
                <option>Physics</option>
                <option>Math</option>
                <option>English</option>
                <option>BBA</option>
                <option>Zology</option>
                <option>Botony</option>
                <option>Urdu</option>
                </select>
    &nbsp;  &nbsp;  &nbsp;
<input type="submit" value="Search" name="sub"  class="btn btn-primary">
    </div>
</form>
<br>

    <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>Contact</th>
          <th>Program</th>
          <th>Obtain </th>
          <th>Total</th>
           <th>Enter Marks</th>
      </tr>
    </thead>
   

<?php

        if(isset($_POST['department'])){
            $dp1 = $_POST['department'];
            
            $query = "select * from Students where department = '$dp1' ";
            $result = mysqli_query($con , $query);
          $count = 0;
            while($row = mysqli_fetch_assoc($result)){
                    $count = $count+1;
                    $roll = $row['RollNo'];
                    $name = $row['name'];
                    $fathername = $row['fathername'];
                    $email = $row['email'];
                    $contact = $row['contact'];
                    $address = $row['address'];
                    $obtain = $row['obtain'];
                    $total = $row['total'];
                    $department = $row['department'];
                    $program = $row['program'];
                ?>

<tr>
    <?php 
    echo "<td>$roll</td>";
    echo "<td>$name</td>";
    echo "<td>$contact</td>";
    echo "<td>$program</td>";            
    
    $qq = "select SUM(Marks) as total1 from subject where St_Roll = '$roll' ";            
    $re = mysqli_query($con , $qq);
    $re22 = mysqli_fetch_assoc($re);
    $t2  = $re22['total1'];
    echo "<td> $t2 </td>";
                
    
    $qq2 = "select COUNT(St_Roll) as roll from subject where St_Roll = '$roll' ";            
    $re2 = mysqli_query($con , $qq2);
    $re222 = mysqli_fetch_assoc($re2);
    $t22 = $re222['roll'] * 100;       
    echo "<td>$t22</td>";
    echo "<td><a href='Marks_Detail.php?ab=$roll'> Edit </a> </td>";            
    ?>
</tr>

    <?php
    }
            
            if($count == 0){
                echo "<h4 style='color:red'>No record Found</h4>";
            }
    }//end of isset if
    ?>

</table>
<br><br>
<?php  include "include_Files/Bottom.php" ?>