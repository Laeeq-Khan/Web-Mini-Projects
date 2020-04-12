<?php  include "Includes/header.php" ?>
<br><br>
<?php include "Includes/navigation.php"?>

<br>

<style>
    div>label{
        color:black;
        
       
    }
    

</style>

<div class="row" id="main">

    <div class="col-md-1"></div>
    <dic class="col-md-10">
   <form method="post" action="Successfull_Register_Message.php" style="background-color:white; padding:10px;  border-radius:10px;">
        
         <h3 style="color:white; background-color:black ; padding:20px; text-align:center;">Register Now Free</h3>

         <div class="form-group">
            <label for="pwd">Name:</label>
            <input type="text" class="form-control" id="pwd" name="name" required>
            </div>
            <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password" required>
            </div>
           <div class="form-group">
            <label for="pwd">Contact:</label>
            <input type="text" class="form-control" id="pwd" name="contact" required>
            </div>
           <div class="form-group">
            <label for="pwd">Address:</label>
            <input type="text" class="form-control" id="pwd" name="address" required>
            </div>
          
        <input type="submit" class="btn btn-default"  value="Click me to Register" name="submit">
        
        </form>
    
    </dic>
</div>


<br><br>
<?php  include "Includes/footer.php"  ?>