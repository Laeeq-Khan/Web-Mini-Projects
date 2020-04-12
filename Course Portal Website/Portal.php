<?php
include "Files/Header.php";
?>

 


<div class="row">
<div class="col-md-12">
    
    <div class="row">
    <div class="col-md-3"></div>
        <div class="col-md-6">
        
            <form class="form-inline" method="get">
            
                  <div class="form-group">
            <label> Select Department</label>
            <select name="department" class="form-control">
                <option>CS&IT</option>
                 <option>English</option>
                 <option>Math</option>
            </select>
            </div>
                      
            &nbsp;

            
             <div class="form-group">
            <label> Select Discpiline</label>
            <select name="program" class="form-control">
                <option>BSCS</option>
                 <option>BSIT</option>
                 <option>BS English</option>
                 <option>BS Math</option>
                 <option>MIT</option>
                 <option>MSc Math</option>
                 <option>M.A English</option>
                  
            </select>
            </div>      
            &nbsp; 
            <input type="submit" name="subb" value="Show" class="btn btn-inverse">
            </form>
            <hr style="border-bottom:1px dashed black;">
        </div>
    </div>
    <br>
    
    <table class="table table-bordered table-hover">
    <thead>
        <tr>
        <th>Department</th>
        <th> Discipline</th>
        <th>Couse Code</th>
        <th> Course Name</th>
        <th> Credit Hours</th>
        </tr>
        </thead>
    
    
    <?php
    
    if(isset($_GET['subb'])){
        $depart = $_GET['department'];
        $prog = $_GET['program'];
        
        $select_query = "select * from course where Department = '$depart'  AND Program = '$prog' ";
        $result = mysqli_query($connection , $select_query);
        
        if(!$result){
            echo "<h2 style='text-align:center'> No Record Found </h2>";
        }else{
        while($row = mysqli_fetch_assoc($result)){
            
        $name  = $row['Name'];
        $code = $row['Code'];
        $credit = $row['Credit'];
        $dept = $row['Department'];
        $prog = $row['Program'];
            
        echo "<tr>";
        echo "<td> $dept </td>";
        echo "<td> $prog </td>";
        echo "<td> $code </td>";
        echo "<td> $name </td>";
        echo "<td> $credit </td>";
        echo "</tr>";
            
            
        }//while end
        }//else end
            
    }
    
    ?>
        
        </table>
<!--    Col-md-12 div edding in blow div block-->
    </div>
    
</div><br><br>



 

<?php
include "Files/Footer.php";
?>