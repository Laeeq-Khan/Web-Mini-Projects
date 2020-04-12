<?php include "folder/main.php";  ?>
<?php include "folder/navigation_bar.php";  ?>

<style>
    label{
        text-align: left;
        color: royalblue;
    }
    
</style>
<br><br>
<div class="row">
<div class="col-md-3"></div>
 <div class="col-md-6">
    
    <?php
     
     if(isset($_POST['submit'])){
         $title  = $_POST['title'];
          $link  = $_POST['link'];
          $page = $_POST['page'];
          
    $query = "insert into links(page_id , name , link) Values('$page' , '$title' , '$link') ";
         
         $insert = mysqli_query($connection , $query);
         if(!$insert){
              echo "<h3>  Not inserted </h3>";
         }else{
              echo "<h3>  Link hass been added </h3>";
           }
         
     }
     
     ?>
     
</div>

 <br><br>

<?php include "folder/footer.php";  ?>