<?php include "folder/main.php";  ?>
<?php include "folder/navigation_bar.php";  ?>

<style>
    label{
        text-align: left;
        color: lightseagreen;
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
     <h1>Admin Panel </h1>
     <hr>
      <form class="form" method="post" action="added.php">
     
          
          <div class="form-group">
          <label> Select Page</label>
        <select name="page" class="form-control" required>
            <option value=''>Select Page </option>
        <?php 
    $query = "select * from pages ";
    $result = mysqli_query($connection , $query);
    
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $page = $row['name'];
        echo "<option value='$id'>$page  </option>";
    }
            
            ?>
        </select>
          </div>
          
         <div class="form-group">
          <label>Title</label>
            <input type="text" name="title" class="form-control" required>
          </div>
          
          <div class="form-group">
          <label>Linke</label>
            <input type="text" name="link" class="form-control" required>
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

<?php include "folder/footer.php";  ?>