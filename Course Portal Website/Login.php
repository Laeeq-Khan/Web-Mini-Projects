<?php
include "Files/Header.php";
?>

 


<div class="row">
<div class="col-md-4"></div>
    <div class="col-md-4">
    
        <form class="form" method="post" action="add_Subjects.php">
        
            <div class="form-group">
            <label> Username</label>
                <input class="form-control" type="text" name="name" placeholder="Enter your name">
            </div> 
            
             <div class="form-group">
            <label> Password</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your name">
            </div> 
        
            <input type="submit" name="sumbit" value="Login" class="btn btn-inverse">
        </form>
    
    </div>
    
</div><br><br>


 

<?php
include "Files/Footer.php";
?>