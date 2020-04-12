<?php  include "Includes/header.php" ?>
<br><br>
<?php include "Includes/navigation.php"?>


<div class="row">
<div class="col-md-2"></div>
   <div class="col-md-6" id="work">
    <?php
    
    
    if(isset($_POST['submit'])){
        
        $email = $_POST['email'];
        $query = "select * from users where email = '$email' ";
        $res = mysqli_query($con , $query);
        $row = mysqli_fetch_assoc($res);
        if($row){
            echo "<h3 style='color:red'> This email already Registered please try other one </h3>";   
        }else{
            
             $name = $_POST['name'];
             $contact = $_POST['contact'];
             $address = $_POST['address'];
             $email = $_POST['email'];
             $password = $_POST['password'];
            
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
             $_SESSION['name'] = $name;
            
          
            
            $quer = "INSERT INTO users(name ,email , password, address ,  contact ) ";
            $quer .= "VALUES ('$name' , '$email' , '$password' , '$address' , '$contact') ";
            $res = mysqli_query($con , $quer);
            
            if($res){
                echo "<h3 > Congrats you are registered successfully</h3>";
            }else{
                echo "<h3> Faild to register , Please contact us for your problem.  </h3>";
            }
            
            
        }//end of else statement
        
        
    }else{
        echo "<h3> Not Registered</h3>";
    }
    
    
    ?>
    
    </div>

</div>
<br>

<?php  include "Includes/footer.php" ?>