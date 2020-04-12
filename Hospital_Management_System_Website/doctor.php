<?php include "folder/main.php";  ?>
<?php include "folder/navigation_bar.php";  ?>

<style>
 
    .ab{
        padding: 10px;
    }
    label{
        color:black;
    }
    
</style>
 

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-8"><img src="Photo/doctor.jpg" height="350" width="950" style="border:3px solid black;"></div>
</div>
<br>

<div class="row">
<div class="col-md-1"></div>
    <div class="col-md-10" style="background-color:white; padding:20px; border:1px solid gray;">
    <h1 style="color:black"> Add Doctors </h1>
       
        
        <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">
            
                                    <form class="form" method="get" >
                                     
                                     <?php
                                         $max = 0;
                                        $quer = "select MAX(id) as maxx from doctor";
                                        $record = mysqli_query($connection , $quer);
                                        echo mysqli_error($connection);
                                        if(!$record){
                                            
                                        }else{
                                        $row = mysqli_fetch_assoc($record);
                                         $max = $row['maxx'];   
                                        }
                                        $max =  $max +1;
                                        
                                       echo "<h3 style='color:black ; text-align:left'   > Doctor ID :   $max </h3>";
                                        
                                    ?>   
                                     <input type="text" name="id" value="<?php echo $max ?>" hidden>
                                        
                                    <div class="form-gourp">
                                    <label> Name : </label>
                                    <input type="text" name="name" class="form-control" required>
                                    </div>
                                        
                                    <div class="form-gourp">
                                    <label> Speciality : </label>
                                        <textarea class="form-control" name="specil" required> </textarea>
                                    </div>
                                        
                                     
                                    <div class="form-gourp">
                                    <label> Contact : </label>
                                    <input type="text" name="contact" class="form-control" required>
                                    </div>
                                        
                                     
                                        <br>
                                    <div class="form-gourp">
                                    <label> Address : </label>
                                    <input type="text" name="address" class="form-control" required>
                                    </div>
                                        <br>
                                        
                                        <center> <input type="submit" name="sub" value="Add" class="btn btn-warning"> </center>
                                        
                                    </form>
                
<!--                php code below to add record in database-->
                
                <?php
              
                
                if(isset($_GET['sub'])){
                    $id = $_GET['id'];
                    $name =  $_GET['name'];
                    $specil =  $_GET['specil'];
                     $contact =  $_GET['contact'];
                     $address =  $_GET['address'];
                    
                    $insert = "INSERT INTO doctor(name , contact , type , address ) ";
                    $insert .= " VALUES( '$name' , '$contact' , '$specil' , '$address' ) "; 
                    
                    $result = mysqli_query($connection , $insert);
                    if(!$result){
                        echo "<script> alert('Not Inserted ')  </script>";
                      
                    }else{
                        echo "<script> alert('Successfully added ')  </script>";
                        unset($_GET['sub']);
                        
                    }
                    
                }
                
                ?>
                
<!--                php code end -->
            
            </div>
        </div>
        
    </div>
</div>
        <br><br>
<?php include "folder/footer.php";  ?>