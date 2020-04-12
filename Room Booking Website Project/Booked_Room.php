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
        top: 60px;

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
    
           
    
</style>
<div class="row colo">
 <br><br>
    
    
<?php
if(isset($_POST['submit'])){
    $code = $_POST['code'];
    $to  = $_POST['to'];
    $from = $_POST['from'];
     $name = $_POST['name'];
     $cnic = $_POST['cnic'];
     $contact = $_POST['contact'];
    
    
    $query = "select * from room where code ='$code' ";
    $resu = mysqli_query($connection , $query);
    $row = mysqli_fetch_assoc($resu);
    $price = $row['Price'];
    $date_Computer= date("Y-m-d");
    
    // adding 5 days to date
$newdate = strtotime ( '+6 day' , strtotime ( $date_Computer ) ) ;
$newdate = date ( 'Y-m-d' , $newdate );
 
 
    
    if($to <= $from){
        echo "<h1 style='color:red'> Your Selected Date is Wrong. Start Date must be Greater then End Date  </h1>";
    }else if($date_Computer > $to  ||  $date_Computer  > $from){
         echo "<h1 style='color:red'> Your Selected date has been passed </h1>";
    }
    else if($to >= $newdate){
        echo "<h1 style='color:red'> You can not booked for too long Before. Thanks </h1>";
    }
    else{
        
        
        $insert = "INSERT INTO booked(code ,from1 , too , Name ,CNIC ,Contact ) VALUES('$code' , '$from' , '$to' , '$name' , '$cnic' , '$contact') ";
        $result_insert = mysqli_query($connection , $insert);
        
        if(!$result_insert){
            echo mysqli_error($connection)." Not Inserted";
        }else{
        
         $d1 = substr($from , 8 , 10);  
         $d2 = substr($to , 8 , 10);  
        $day = ($d2 - $d1)+1;
        $dis = 0;
        if($day >= 3 && $day <=5) $dis = 0.05;
        else if($day >= 6 && $day <=9) $dis = 0.15;
         else if($day >= 10) $dis = 0.4;
        
        $amount =  $day * $price;
        $amount = $amount -   ($amount * $dis);
        $dicount = $dis*100;
        
         echo "<h3> Contacts <strong style='color:red'> $name </strong>  <br> Your Room has beed booked for $day Days From <b>$from </b> To <b>$to </b> <br>
         Total Amount : $amount PKR after  $dicount% Discount
         </h3> ";
        }
        
    }//else end inner else
}//if end outer isset if
?>


    
    <br><br>
 </div>


<?php include "Inc/footer.php";  ?>


 
 