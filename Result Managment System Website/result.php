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
    <h2> Check your Result by  Roll No</h2><br>
      <div id="print">
    <center>
        
     <form class="form-inline" method="get">
        <div class="form-group">
         <label> Roll No : </label>
       <input type="text" name="roll" class="form-control" required>
        </div>
        <input type="submit" name="sub" value="Search" class="btn btn-danger">
        
     </form>
     </center>
     
     <hr style="border-top:2px dashed gray;">
   
     <?php 
     if(isset($_GET['sub'])){
         $roll = $_GET['roll'];
         
         $query_Result = "select * from result where roll = '$roll' ";
         $result  = mysqli_query($connection , $query_Result);
         
         $record = mysqli_fetch_assoc($result);
         
         if($record){
             
             $eng = $record['english'];
             $urdu  = $record['urdu'];
             $islam = $record['islamiat'];
             $math = $record['math'];
             $bio = $record['biology'];
             $chem = $record['chemistry'];
             $physic = $record['physic'];
             
             $total = $eng + $urdu + $islam + $math + $bio + $chem + $physic;
             $percent = $total  * 100 / 800;
             
             
             if($eng <=33){
                 $eng = $eng."*";
             }
             if($urdu <=33){
                 $urdu = $urdu."*";
             }
             if($islam <=33){
                 $islam = $islam."*";
             }
             if($math <=33){
                 $math = $math."*";
             }
             if($bio <=33){
                 $bio = $bio."*";
             }
             if($chem <=33){
                 $chem = $chem."*";
             }
             if($physic <=33){
                 $physic = $physic."*";
             }
             
           echo "<h3 style='text-align:left'> Name  :   &nbsp;  &nbsp;  &nbsp;  &nbsp;   <small> {$record['name']}  </small>  </h3>";
             echo "<h3 style='text-align:left'> Father : &nbsp;  &nbsp;  &nbsp;  &nbsp; <small> {$record['fathername']} </small>  </h3>";
             echo "<h3 style='text-align:left'> School :  &nbsp;  &nbsp;  &nbsp;  &nbsp; <small> {$record['schoolname']} </small>  </h3>";
             echo "<h3 style='text-align:left'> Roll No:   &nbsp;  &nbsp;  &nbsp;  &nbsp;<small> {$record['roll']} </small>  </h3>";
             
             echo "
             <table class>
              <table class='table table-bordered table-hover'>
    <thead>
        <tr>
        <th> English</th>
        <th> Urdu</th>
        <th> Is/Pk</th>
        <th> Math</th>
        <th> Bio</th>
        <th> Chemistry</th>
        <th> Physic</th>
        </tr>
        <tr>
        <td><strong style='color:green'>$eng</strong>/100</td>
        <td><strong style='color:green'>$urdu</strong>/100</td>
        <td><strong style='color:green'>$islam</strong>/100</td>
        <td><strong style='color:green'>$math</strong>/100</td>
        <td><strong style='color:green'>$bio</strong>/100</td>
        <td><strong style='color:green'>$chem</strong>/100</td>
        <td><strong style='color:green'>$physic</strong>/100</td>
        </tr>
        
        </thead>
    
    </table>
             ";
             
            echo "<h3> Total Marks : <small style='color:red'> $total / 800 </small>  </h3>"; 
        ?>   
             <hr style="border-top:2px dashed gray;">
            <center>  <input type="button" value="Print " class="btn btn-inverse"  onclick="printDiv('print')" /></center>
    <p> Errors and Omissions are acceptiable this is not final copy of your result for any query or error please contact us on given numbers on website </p> 
             
          <?php   
         }//if end 
     }// outer isset if
     ?>
  
     <br>
 </div>   
      
</div>
    
   
   

 <br><br>

<?php include "Inc/footer.php";  ?>
    
    
    
 <script>
       function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>