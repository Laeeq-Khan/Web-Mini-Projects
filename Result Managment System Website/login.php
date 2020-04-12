<?php include "Inc/main.php";  ?>
<?php include "Inc/links.php";  ?>

<style>

    
</style>
<br><br>
<div class="row">
<div class="col-md-3"></div>
 <div class="col-md-6">
    
     <form method="post" action="admin_panel.php" class="form"> 
     <h3> Login Panel</h3>
         <div class="form-group">
         <label> Username</label>
            <input type="text" name="username" class="form-control" required>
         </div>
     
         <div class="form-group">
         <label> Password</label>
            <input type="password" name="password" class="form-control" required>
         </div>
         
         <center>
         <input type="submit" name="submit" class="btn btn-inverse">
         </center>
             
     </form>

</div>

 

<?php include "Inc/footer.php";  ?>