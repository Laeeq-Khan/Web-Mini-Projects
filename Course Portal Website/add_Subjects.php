<?php
include "Files/Header.php";
?>

 
<?php

if(isset($_POST['sumbit'])){
    $username= $_POST['name'];
    $passwrod = $_POST['password'];
    
    $query = "select * from admin where username = '$username' AND  password = '$passwrod'";
    $res = mysqli_query($connection , $query);
    echo mysqli_error($connection);
    $row= mysqli_fetch_assoc($res);
    if(!$row){
        echo "<h1 style='text-align:center; color;red'> Wrong Information </h1>";
    }else{

        ?>


<div class="row">
<div class="col-md-3"></div>
    <div class="col-md-6">
    <h3 style="text-align:center"> Add Courses</h3>
        <hr style="border-bottom:1px solid red;">
        
<form method="post" class="form" > 
        <div class="form-group">
            <label> Select Department</label>
            <select name="department" class="form-control">
                <option>CS&IT</option>
                 <option>English</option>
                 <option>Math</option>
            </select>
            </div>
                      

            
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
            
            
             <div class="form-group">
            <label> Course Code</label>
         <input type="text" name="code" placeholder="Course Code here" class="form-control" required>
            </div>
            
              <div class="form-group">
            <label> Course Name</label>
         <input type="text" name="name" placeholder="Course Name here" class="form-control" required >
            </div>
    
            
              <div class="form-group">
            <label> Credit Hours</label>
         <input type="number" name="credit" placeholder="Course Credit Hours here" class="form-control" required>
            </div>
            
            <input type="submit" name="sub" class="btn btn-default" style="float:center">
            
        </form>
    
    </div>
    
</div><br><br>


  <?php       
    }
}
?>

<?php 
            
if(isset($_POST['sub'])){
    
    $department = $_POST['department'];
      $program = $_POST['program'];
      $code = $_POST['code'];
      $name = $_POST['name'];
      $credit = $_POST['credit'];
    
    $query2 = "insert into course(Department , Program , Name , Code , Credit) ";
    $query2 .= "Values ('$department' , '$program' , '$code'  , '$name' , '$credit') ";
    
    $resss= mysqli_query($connection , $query2);
    if(!$resss){
        echo "<h1 style='text-align:center ; color:red;'> Not reload page or Same course code are not allowed  </h1>";
    }else{
          echo "<h1 style='text-align:center ; color:red;'> Course Hass been inserted  </h1>";
    }
    
    $_POST['sub'] = NULL;
}
?>

<?php
include "Files/Footer.php";
?>