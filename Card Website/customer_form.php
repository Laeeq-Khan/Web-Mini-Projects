<style>
    label{
        color: white;
    }
</style>
<?php include "head.php";  ?>

<br>
<div class="row">
<div class="col-md-3"></div>
    
    <div class="col-md-6" style="background-color:#4EC0C2; padding:10px ; border-radius:5px;">
        
        
        <?php
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $query = "select * from card_detail where id  = '$id' ";    
            $result = mysqli_query($connection, $query);
            
            $row = mysqli_fetch_assoc($result);
            $imgg = $row['img'];
            
        echo "<center><img src='Pic/Card_Images/$imgg.jpg' class='img img-thumbnail'; style='box-shadow:0px 0px 10px black' > </center>";
            
        }
        
        ?>
        
        
    <h2 style="color:white;"> Fill the Form</h2>
        <form method="post">
        
            <div class="form-gourp">
            <label> Name</label>
            <input type="text" name="name" class="form-control" required>
            </div>
            
            <div class="form-gourp">
            <label> Profession </label>
            <input type="text" name="prof" class="form-control" required>
            </div>
            
            <div class="form-gourp">
            <label> Contact</label>
            <input type="text" name="cont" class="form-control" required>
            </div>
            
            <div class="form-gourp">
            <label> Email </label>
            <input type="email" name="email" class="form-control" required>
            </div>
            
            <div class="form-gourp">
            <label> Address </label>
            <input type="text" name="address" class="form-control" required>
            </div>
            
            <div class="form-gourp">
            <label> Total Card for Printing </label>
            <input type="number" name="total" class="form-control" required>
            </div>
            
            <br>
            <center>  <input type="submit" name="sub" value="Submit" class="btn btn-primary">  </center>
        
        </form>
    </div> 
    
    <?php
    
        if(isset($_POST['sub'])){
            $name = $_POST['name'];
            $prof = $_POST['prof'];
            $contact = $_POST['cont'];
            $address = $_POST['address'];
            $total = $_POST['total'];
            $email = $_POST['email'];
            
            $query = "insert into order_card(name, contact , card_id , total) Values('$name', '$contact' , '$id' , '$total')  ";
            $result = mysqli_query($connection , $query);
            
            if(!$result){
                echo "<script>  alert('Not Saved'); </script>";
            }else{
                 echo "<script>  alert('Saved Successfully'); </script>";
            }
            
            
            
        }
    
    ?>
    
</div>



<?php include "footer.php";  ?>