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
<div class="col-md-8"><img src="Photo/1.jpg" height="350" width="950" style="border:3px solid black;"></div>
</div>
<br>

<div class="row">
<div class="col-md-1"></div>
    <div class="col-md-10" style="background-color:white; padding:20px; border:1px solid gray;">
    <h1 style="color:black"> Status Panel </h1>
       
        
        <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">
            
                                    <form class="form" method="get" >
                                    
                                        <div class="form-inline">
                                        <label>Select Doctor : </label>
                                     
                                                <select name="doctor" class="form-control">
                                                <option value=''> Select Doctor</option>
                                                <?php
                                                $quer = "select * from doctor";
                                                $record = mysqli_query($connection , $quer);
                                                while($row = mysqli_fetch_assoc($record)){
                                                $id = $row['id'];
                                                $name =$row['name'];
                                                echo "<option value='$id'> $name  </option>";
                                                }

                                                ?>    
                                                </select>    
                                            &nbsp; &nbsp; &nbsp;
                                       <input type="submit" name="sub" value="  &nbsp;  Search   &nbsp;  " class="btn btn-primary">   
                                            
                                        </div>
                                        
                                    </form>

            </div>
        </div>
        <?php 
    if(isset($_GET['sub'])){
        $id = $_GET['doctor'];
        
        $query = "select * from patient where doc_id = '$id' ";
        $result = mysqli_query($connection , $query);
        if($result){
         
        ?>
            <table class="table table-hover table-bordered">
            <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Problem</th>
            <th>Contact</th>
            <th>Addmitted</th>
            </tr>    
            </thead>        
                
            
        <?php    
        while($record = mysqli_fetch_assoc($result)){
            $id = $record['p_id'];
            $name = $record['p_name'];
            $problem = $record['p_problem'];
            $contact = $record['p_contact'];
            $addmitted = $record['addmitted'];
            
            echo "<tr>";
            echo "<td> $id </td>";
             echo "<td> $name </td>";
             echo "<td> $problem </td>";
             echo "<td> $contact </td>";
             echo "<td> $addmitted </td>";
            echo "</tr>";
            
        }   //while end
            
          
        }//if end 

        ?>
        </table>
        <?php                
        }
        ?>
                
    </div>
</div>
        <br><br>
<?php include "folder/footer.php";  ?>