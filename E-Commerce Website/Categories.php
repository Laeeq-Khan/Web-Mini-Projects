<?php  include "Files\\Navigation_Bar.php"; ?>

<div class="row">
<div class="col-md-12" style="box-shadow:1px 1px 10px #d6d7d8;" >
<br><br>
    
    
 
    
     <?php 
        $count = 0;
       if(isset($_GET['category'])){
        $catt = $_GET['category'];
        $query = "select * from product where category ='{$catt}'  ";
        $result = mysqli_query($con , $query);
        $found = false;
        while($row = mysqli_fetch_assoc($result)){
            $code  = $row['code'];
            $name = $row['name'];
            $price = $row['price'];
            $cat = $row['category'];
            $img = $row['Image'];
            $detail = $row['details'];
          echo"<a href='Categories.php?code={$code}'><div class='col-md-4' > <img src='Images\\$img' class='img img-responsive' width='350' style='padding:5px; box-shadow:0px 0px 10px gray'><br><strong>Title  &nbsp &nbsp  :  &nbsp &nbsp   </strong> $name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp     <br><strong>R.S &nbsp&nbsp &nbsp :</strong>  &nbsp &nbsp   $price PKR   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   <br><br>  </div></a>" ;
           $found = true;
            
            
            
         }
           if($found == false){
                 echo "<center><h3 style='color:red'> No Content Yet! </h3></center><br><br>";   
           }
      }  
        
    ?>    
    
    
    <?php  
    if(isset($_GET['code'])){
        $code = $_GET['code'];
        $query = "select * from product where code = $code ";
        $result = mysqli_query($con , $query);
        if($row = mysqli_fetch_assoc($result)){
        
            $name = $row['name'];
            $price = $row['price'];
            $cat = $row['category'];
            $img = $row['Image'];
            $detail = $row['details'];
            
        ?>
  <div class="row">
<div class="col-md-8">
      <img src="<?php echo 'Images\\'.$img;  ?>" width="550"  style="padding:5px ; border:1px solid blue; box-shadow:1px 1px 10px gray; "><br><br><br><br>
</div>
<div class="col-md-4">
<label> Code &nbsp; &nbsp;  : &nbsp; &nbsp; </label> <?php echo $code; ?>   <br>  <br>
<label> Name &nbsp; &nbsp;  : &nbsp; &nbsp; </label> <?php echo $name; ?>       <br>  <br>
<label> Price &nbsp; &nbsp;  : &nbsp; &nbsp; </label> <?php echo $price; ?>     <br><br>
<label> Details &nbsp; &nbsp;  : &nbsp; &nbsp; </label> <?php echo $detail; ?>     <br><br>
    
    <form>
    <input type="text" name="code" value="<?php echo $code ?>" hidden="true" >  
    <input type="text" name="name" value="<?php echo $name ?>" hidden="true" >  
    <input type="text" name="price" value="<?php echo $price ?>" hidden="true" >      
        
        
    <div class="input-group">
    <label> Total Pieces</label>    
    <input type="number" name="pieces" class="form-control" required>    
    </div>
    <br>
    <div class="input-group">
    <input type="submit" name="sub" value="Add to Cart" class="btn  btn-default">
    </div>
    </form>
    <?php  
    if(isset($_GET['sub'])){
        $code = $_GET['code'];
        $name=  $_GET['name'];
        $price= $_GET['price'];
        $items = $_GET['pieces'];
       
        $username = $_SESSION['username'];
        $query = "insert into Cart(code , name , items ,price , username) VALUES('$code' ,'$name'  ,'$items' ,'$price' ,'$username' ) ";
        $output = mysqli_query($con , $query);
        echo mysqli_error($con);
        
        if($output){
            echo "<script> alert('Item is added to Cart') </script>";
            header("Location:index.php");
        }else{
            echo "<script> alert('Item is not added to Cart') </script>";
        }
    }
    
    ?>
    
    
    
</div>      
    
</div>          
            
      <?php
      }
     }
    ?>
    

</div>
</div>
<?php  include "Files\\Footer.php"; ?>







