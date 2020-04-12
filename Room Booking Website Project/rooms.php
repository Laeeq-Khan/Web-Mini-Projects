<?php include "Inc/head.php";  ?>
<?php include "Inc/nav.php";  ?>

<style>

    .pos{
        position: relative;
        top: 60px;
        left: 70px;
    }
    
    .colo{
        background-color: white;
        box-shadow: 0xp 0px 10px black;
        position: relative;
        top: 50px;
        border-top: 2px solid black;
        border-bottom: 2px solid black;
    }
    
    a{
        text-decoration: none;
    }
    a:link{
        text-decoration: none;
    }
    a:hover{
        color: red;
    }
    
            img:hover {
            transform: scale(1.3);
            position: relative;
            z-index: 100;
            transition: all 2s ease;

            }
    
</style>

<div class="row colo">
<br><br>

    <?php
    
    $query = "select * from room";
    $res = mysqli_query($connection , $query);
    
     $wDate = "";
    while($row  = mysqli_fetch_assoc($res)){
        $code = $row['Code'];
        $img = $row['Img'];
        $type = $row['Type'];
        $price = $row['Price'];
        $detail = $row['Details'];
        $date_Computer= date("Y-m-d");
        $booked   = false;

        $query2 = "select * from booked where code ='$code'  ";
        $result2 = mysqli_query($connection , $query2);
        if(!$result2){
            
        }else{
            $roww = mysqli_fetch_assoc($result2) ;
            $date1 = $roww['too'];
            
            if($date1 >= $date_Computer){
                 $wDate = $roww['too'];
                $booked = true;
              }            
        }
        
        if($booked == true){
             $booked   = false;
             echo "<div class='col-md-4' > <img src='Room_Images/$img' class='img img-responsive' width='350' style='padding:5px; box-shadow:0px 0px 10px gray'><br> $type &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    <strong>  Booked</strong> Till :  $wDate  <br>R.S : <strong> $price PKR </strong>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   <br><br>  </div>"   ;
        } else if($booked == false){
             $booked   = false;
             echo "<div class='col-md-4' ><a href='details.php?code=$code'>  <img src='Room_Images/$img' class='img img-responsive' width='350' style='padding:5px; box-shadow:0px 0px 10px gray'><br> $type &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp  <strong>  Book Me   </strong> <br>R.S : <strong> $price PKR </strong>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   
             </a><br><br> </div>"  ;
            
        }//else ended
        
    }//while loop ended
    ?>
    
 
    
    
<br><br>
</div>


<?php include "Inc/footer.php";  ?>


 
