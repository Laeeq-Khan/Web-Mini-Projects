<?php  include "Files\\Navigation_Bar.php"; ?>
<?php  
if(isset($_SESSION['type'] ))
    $type = $_SESSION['type'];
 
  if($type=="admin")header("Location:admin.php")
?>

<br><br><br><Br><br><Br>
<div class="row">
<div class="col-md-12">
    
    <div class="row">
    <div class="col-md-4"></div>
        <div class="col-md-4">
        
            <form method="get" >
            <label>Username  </label>
            <input type="text" name="username" class="form-control" required> 
            
                
            <label>Password  </label>
            <input type="password" name="password" class="form-control" required> 
                
                <br><br><center>
                <input type=submit name="sub2" class="btn btn-primary" value="Login">
                </center>
        
            </form>
            <br><br>
            <center><a href="singup.php"><h4>Creat New Account</h4></a></center>
        </div>
    </div>

</div>
</div>
<?php  include "Files\\Footer.php"; ?>

    
    <?php
    if(isset($_GET['sub2'])){
        $found = false;
        $username= $_GET['username'];
        $password  =$_GET['password'];

        $query = "SELECT * FROM user where username = '$username' AND password = '$password'  ";
        $result = mysqli_query($con , $query);
        
        if($row = mysqli_fetch_assoc($result)){
            $found = true;
            $name = $row['name'];
            $contact = $row['contact'];
            $email = $row['email'];
            $address =$row['address'];
            $type = $row['type'];
            
            $_SESSION['type'] = $type;
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $name;
            $_SESSION['contact'] = $contact;
            $_SESSION['email'] = $email;
            $_SESSION['address'] = $address;
            
            if($type=="admin"){
                header("Location:admin.php");
            }else{
                header("Location:index.php");
            }
            
        }
  
        if($found == false){
            echo "<script> alert('Your Information is Wrong!') </script>";
        }
            
        
    }
    ?>






