<?php  include "Files\\Navigation_Bar.php"; ?>


<div class="row">
<div class="col-md-12">

    <div class="row">
   <div class="col-md-1"></div>
    <div class="col-md-5">
        <h3>Add Products</h3>
    <br>
        <form method="post" enctype="multipart/form-data">
        
            <input type="file" name="image" value="Upload Image" class="btn btn-primary" required>
            <br><br>
          
             <div class="input-group">
             <label>Category &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</label>
              <select class="form-control" name="cetegory">
                 <?php 
                    $query = "select * from navigation";
                    $result = mysqli_query($con , $query);
                    while($row = mysqli_fetch_assoc($result)){
                    $name = $row['name'];
                    echo "<option> $name </option>";
                    }
        
        ?></select>
             </div>
            
            
            <div class="input-group">
             <label> Product  Code</label>
            <input type="number" name="code"  class="form-control" required>
             </div>

            <div class="input-group">
             <label>Product Name</label>
            <input type="text" name="name"  class="form-control" required>
             </div>
            
            
            <div class="input-group">
             <label> Enter Price &nbsp; &nbsp; </label>
            <input type="number" name="price"  class="form-control" required>
             </div>
            
            
            
            <div class="input-group">
             <label>Details &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</label>
            <textarea class="form-control" name="details" required rows="5"></textarea>
             </div>
            
            
            
            <br>
            <div class="input-group">
            
            <center>
            <input type="submit" name="submit" value="Add" class="form-control">
            </center>    
            </div>
                
        </form>
        
    </div>
    
  
    <div class="col-md-5">
    <h3> View All and Delete</h3>    
       <br>
        <table class="table table-bordered table-hover">
        <thead>
        <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>    
        <th>Action</th>
        </tr>    
        </thead>
        
        <?php  
        $query = "select * from product ORDER BY category DESC";
        $result = mysqli_query($con , $query);
        while($row = mysqli_fetch_assoc($result)){
            $code  = $row['code'];
            $name = $row['name'];
            $price = $row['price'];
            $cat = $row['category'];
            echo "<tr>";
            echo "<td> $code </td>";
            echo "<td> $name </td>";
            echo "<td> $price </td>";
             echo "<td> $cat </td>";
            echo "<td> <a href='admin.php?delete={$code}'> Delete </a> </td>";
            echo "</tr>";
            
        }    
            
        ?>    
                
        </table>
    </div>
</div> 
    
    
</div>
</div>
<?php  include "Files\\Footer.php"; ?>


<?php

if(isset($_GET['delete'])){
    $code = $_GET['delete'];
    
    $query= "delete from product where code = '{$code}' ";
    $result = mysqli_query($con , $query);

    if($result){
    echo "<script> alert('Successfully Deleted')  </script>";
    header("location:admin.php");
    }else{
    echo "<script> alert('Npt Deleted ')  </script>";
    }
    header("location:admin.php");
}

?>


<?php

            if(isset($_POST['submit'])){
                $code = $_POST['code'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $details = $_POST['details'];
                $cetgory  = $_POST['cetegory'];
                $post_image =  $_FILES['image']['name'];
                $post_image_temp = $_FILES['image']['tmp_name'];
                 $image_name = $code.$post_image;
                 $query = "INSERT INTO product(code , name , category , Image , price , details) VALUES('{$code}' , '{$name}' , '{$cetgory}' , '{$image_name}','{$price}','{$details}' )  ";
                $resul = mysqli_query($con , $query);
                
                if($resul){
                    $string = $code.$post_image;
                    move_uploaded_file($post_image_temp , "Images/$string");
                    echo "<script> alert('Successfully Added')  </script>";
                    header("location:admin.php");
                }else{
                    echo "<script> alert('Not Inserted. This Product Code is Assigned to Other product')  </script>";
                }
            }
?>







