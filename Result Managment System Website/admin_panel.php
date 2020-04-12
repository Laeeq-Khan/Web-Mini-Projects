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
    
     <?php  
     if(isset($_POST['submit'])){
         $username = $_POST['username'];
         $password= $_POST['password'];
         
         $query_check = "select * from login where username = '$username' AND password= '$password' ";
         $res = mysqli_query($connection , $query_check);
         $record = mysqli_fetch_assoc($res);
         
         $name = $record['username'];
         $pass = $record['password'];
         if(!($name == $username && $pass == $password)){
             echo "<h2>  Wrong Username or Pasword , Try again </h2>";
         }else{
             
             ?>
     <h1>Admin Panel  <small> <u>Enter Student Details</u></small></h1>
     <hr>
      <form class="form" method="post" action="added.php">
     
         <div class="form-group">
          <label>Roll No :</label>
            <input type="text" name="roll" class="form-control" required>
          </div>
          
          <div class="form-group">
          <label>Name :</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          
          <div class="form-group">
          <label>Father Name :</label>
            <input type="text" name="fathername" class="form-control" required>
          </div>
          
          <div class="form-group">
          <label>City :</label>
            <input type="text" name="city" class="form-control" required>
          </div>
          
          <div class="form-group">
          <label>School Name :</label>
            <input type="text" name="school" class="form-control" required>
          </div>
          
          <h4> Marks Details </h4> <hr>
      <div class="form-inline">
          <label> English</label>
            <input type="text" name="english" class="form-control" required>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        
        <label> Urdu</label>
            <input type="text" name="urdu" class="form-control" required>  <br><br>
          
        <label> Is/Pak</label>&nbsp; &nbsp;
            <input type="text" name="islam" class="form-control" required>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
              
        <label> Math</label>
            <input type="text" name="math" class="form-control" required>     <br><br>
              
        <label> Bio/Cop</label>
            <input type="text" name="bio" class="form-control" required> &nbsp;    &nbsp; 
              
        <label> Chemistry</label>
            <input type="text" name="chemistry" class="form-control" required>    <br><br>
              
          
         &nbsp;   <label> Physic </label>
            <input type="text" name="physic" class="form-control" required>    <br><br>
          
           </div>
          
           
        
         
          
          <center> <input type="submit" name="submit" class="btn btn-inverse"> </center>
      
     </form>
         <div>
    </div>
   <br><br>
     
     <?php  
            //this is else part ending 
         }//else end 
     }//out if end isset
     ?>
     
</div>

 <br><br>

<?php include "Inc/footer.php";  ?>