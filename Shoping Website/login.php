<?php  include "Includes/header.php" ?>
<br><br>
<?php include "Includes/navigation.php"?>
<?php include "standard.php" ?>
<br>

<style>
    div>label{
        color:white;
    }

</style>

<div class="row" id="main">

    <div class="col-md-3"></div>
    <div class="col-md-6">
   <form method="post" >
        
         <h3 style="color:white; text-align:center;">Login</h3>

         
            <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password" required>
            </div>
          <input type="submit" class="btn btn-default"  value="Login" name="submit">
        
        </form>
        
              <?php 
    
        if(isset($_POST['submit'])){
    
            $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "select * from users where email = '$email ' AND password = '$password' ";
        $res = mysqli_query($con , $query);
        $row = mysqli_fetch_assoc($res);

        $name2 = $row['name'];
        $email2 = $row['email'];
        $pass2 = $row['password'];

        if($email == $email2 && $password == $pass2){
          
         $_SESSION['name'] = $name2;
        $_SESSION['email'] = $email2;
        $_SESSION['password'] = $pass2;
        echo "<script>window.top.location='index.php'</script>";
        }else{
          echo "<h3 style='color:red ; text-align:center'> Invalild Details , Please Try agian </h3> ";
        }
        }

        ?>
        
    </div>
</div>


<br><br>
<?php  include "Includes/footer.php"  ?>


<style>
    h2{
        color: bl;
    }
</style>

     