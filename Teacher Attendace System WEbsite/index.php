<?php
include "Files/Header.php";
?>






<style>
    h1{
        text-align: center;
    }
</style>


<div class="row" style="background-color:indianred;">
    <div class="col-md-3"></div>
<div class="col-md-6">
    <br><br>
    
    <form class="form" method="post" style="background-color:white; padding:20px">
    <h3 style="text-align:center"> Register Teacher</h3>
        <div class="form-group">
        <label>  Teacher ID:</label>
        <input type="text" name="id" required class="form-control">
        </div>
        
        <div class="form-group">
        <label>  Teacher Name :</label>
        <input type="text" name="name" required class="form-control">
        </div>
        
        <div class="form-group">
        <label>  CNIC :</label>
        <input type="text" name="cnic" required class="form-control">
        </div>
        
        
        <div class="form-group">
        <label>  Contact :</label>
        <input type="text" name="contact" required class="form-control">
        </div>
        
        <input type="submit" name="submit" class="btn btn-info" value="Submit"  >
        
    </form>
    <br><Br>
    
</div>
</div>
        
  <?php
    if(isset($_POST['submit'])){
    
        $name = $_POST['name'];
        $id = $_POST['id'];
        $cnic = $_POST['cnic'];
        $contact = $_POST['contact'];
        
        $query = "insert into teacher(id , name , cnic , contact) values('$id' , '$name' , '$cnic' , '$contact') ";
        $insert = mysqli_query($connection , $query);
        
        if(mysqli_errno($connection) == 1062)
           echo "<h1> $id is already assigned to other Teacher . Try other. </h1> ";
        
        
        if(!$insert){
            echo "<h1 This Id hass been already assign to a teacher </h1>";
        }else{
            echo "<h1>Congrats $name is registered </h1>";
        }
        
    }
    ?>

<?php
include "Files/Footer.php";
?>