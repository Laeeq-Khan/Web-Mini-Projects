<?php  include "Files\\Navigation_Bar.php"; ?>
<br><br><br>
<div class="row">
<div class="col-md-12">
    
    <div class="row">
    <div class="col-md-4"></div>
        <div class="col-md-4">
        
            <form method="post" >
                    <center><h3 style="color:red">Register Here</h3></center><hr></h4><br><br>
            <label>Username  </label>
            <input type="text" name="username" class="form-control"> 

            <label> Name</label>    
            <input type="text" name="name" class="form-control">    

            <label> Email</label>    
            <input type="email" name="email" class="form-control">    

            <label> Contact</label>    
            <input type="text" name="contact" class="form-control">    


            <label> Address</label>    
            <textarea name="address" class="form-control"> </textarea>   


            <label>Password  </label>
            <input type="password" name="password" class="form-control"> 

            <br><br><center>
            <input type=submit name="sub1" class="btn btn-primary" value="Create Account">
            </center>
        
            </form>
            <br><br>
            <center><a href="Login.php"><h4>Login</h4></a></center>
        </div>
    </div>

</div>
</div>
<?php  include "Files\\Footer.php"; ?>
    
    
    
    <?php 
    if(isset($_POST['sub1'])){
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $password = $_POST['password'];    
        
        $qury = "INSERT INTO user(username , password , type , contact , email , name , address) VALUES('$username' , '$password' , 'Subscriber' , '$contact' , '$email' , '$name'  , '$address') ";
        
        $result = mysqli_query($con , $qury);
   
        if($result){
            echo "<script> alert('Your Profile has been created') </script>";
        }else{
            echo "<script> alert('This username is already Assigned ') </script>";
        }
    }
    ?>







