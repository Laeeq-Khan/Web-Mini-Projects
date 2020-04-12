<?php  include "Includes/header.php" ?>
<br><br>
<?php include "Includes/navigation.php"?>
<?php include "standard.php" ?>
<br><br>

<div class="row">
    <?php
    
    if(isset($_GET['a'])){
        $code = $_GET['a'];
      
        $start =0;
        $end = 0;
        
        if($code == 1){
            $start = 1;
            $end = 9;
        }else if($code == 2){
            $start = 10;
            $end = 15;
        }else if($code == 3){
            $start = 16;
            $end = 27;
        }
         
        $query = "select * from products where pID >= '$start' and pID <= $end "; 
        $res  = mysqli_query($con , $query);
        
        while($row = mysqli_fetch_assoc($res)){
           $address = "Images/".$row['ppicture'];
           ?>
                    
                <div class='col-md-4'>
                 
                <a href="details.php?pId=<?php echo $row['pID'] ?>&page=<?php  echo $_GET['a']?>">
                <img src=<?php  echo $address; ?> width="300" style="border:1px solid black;" /><br>
                    <span><b style="color:white"> <?php echo $row['pname'] ?> </b>  </span>    
                 </a> 
                    <br>
                </div>
    
    <?php
        }
    }else{
        echo "<h3 style:'color:red;'> Enternal Server error , <h3>";
    }
    
    ?>
</div>
<br>
<br>

<?php include "Includes/footer.php" ?>