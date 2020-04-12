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
    <div class="col-md-"></div>    
<div class="col-md-12">
 <h1> Attendance Status </h1>
    <br>
    <form class="form-inline" method="post">
    
        <div class="form-group">
        <label> Month</label>
        <select name="month" class="form-control">
            <option value="-10"> Select Month</option>
            <option value="1"> January</option>
            <option value="2"> February</option>
            <option value="3"> March </option>
            <option value="4"> April</option>
            <option value="5"> May</option>
            <option value="6"> June </option>
            <option value="7"> July </option>
            <option value="8"> August </option>
            <option value="9"> September</option>
             <option value="10"> October</option>
             <option value="11"> November</option>
             <option value="12"> December </option>
            </select>
        </div>
    &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
        <div class="form-group">
        <label> Year</label>
        <select name="year" class="form-control">
            <option value="-11"> Select Year</option>
            <option value="2016"> 2016</option>
            <option value="2017"> 2017</option>
            <option value="2018"> 2018</option>
            <option value="2019"> 2019</option>
            <option value="2020"> 2020</option>
            <option value="2021"> 2021</option>
            <option value="2022"> 2022</option>
            </select>
        </div>    
        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
        <input type="submit" name="sub" value="Submit" class="btn btn-inverse">
        
    </form>
    
    
    <br>
    <table class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
        <th>Code</th>
        <th> Name</th>    
        <th> Total Days</th>    
        <th> Presents</th>    
        <th> Apsents</th>    
        <th> Fine</th>    
            
        </tr>
        </thead>
        
        <?php
      
        
        if(isset($_POST['sub'])){
            $month = $_POST['month'];
            $year = $_POST['year'];
            
            
            
            $start1  = $year.'-'.$month.'-1';
            $end1  = $year.'-'.$month.'-31';
            
            
       
        
        $query = "select * from teacher";
        $result = mysqli_query($connection , $query);
        if(!$result){
            die("<h1> No Record Found </h1> ");
        }
        
        while($r  = mysqli_fetch_assoc($result)){
            $code = $r['id'];
            $name = $r['name'];
                     
             
            $query2 = "select * from attendence where teacher_code = '$code' ";
            $result2  = mysqli_query($connection , $query2);
            
            $total = 0 ;
            $attend = 0 ; 
            $apsent  = 0;
            
            while($row2 = mysqli_fetch_assoc($result2)){
                 $status  = $row2['status'];
                $date1 = $row2['date'];
                
            if($date1 >=  $start1 && $date1 <= $end1 ){
                if($status == "P"){
                  $attend++;
              }else{
                  $apsent++;
              }
                $total++;
            }//if end    
              
            }//inner loop end
            
            $fine = 0;
            if($apsent > 2){
                $fine = ($apsent - 2) * 250;
            }
            
            echo "<tr>";
            echo "<td> $code </td>";
             echo "<td> $name </td>";
             echo "<td> $total   </td>";
             echo "<td> $attend </td>";
             echo "<td> $apsent </td>";
             echo "<td> $fine </td>";
            echo "</tr>";
        }//end of outer loop
             }//if end post method set if
    ?>
    </table>
    
    
</div>
</div>
  
<?php
include "Files/Footer.php";
?>