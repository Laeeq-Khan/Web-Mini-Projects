<style>

    div{
        color: white;
       
    }
    
    .abc{
         background-color: cornflowerblue;
        padding: 20px;
        font-size: 18px;
        text-align: center;
    }
    .abc:hover{
        color: royalblue;
        background-color: gainsboro;
        box-shadow: 0px 0px 10px black;
    
    }
</style>
<?php include "head.php";  ?>
 
 



<br><br>

<div class="row">
    <h1> Category Panel</h1>
<a href="categories.php?type=1"><div class="col-md-4 abc" >Business</div></a>
<a href="categories.php?type=2"><div class="col-md-4 abc"> Educational  </div></a>
<a href="categories.php?type=3"><div class="col-md-4 abc"> Medical </div></a>

</div>
<br><br>
<div class="row">
<div class="col-md-1"></div>

    <div class="col-md-10">
        <div class="row">
    <?php
    
        if(isset($_GET['type'])){
            $type = $_GET['type'];
            $query = "select * from card_detail where type = '$type' ";
            $result = mysqli_query($connection , $query);
            
            if(!$result){
                echo "<h2> Not Found  </h2>";
            }else{
                while($row = mysqli_fetch_assoc($result)){
                    $img = $row['img'];
                    $id = $row['id'];
                    echo "<div class='col-md-4' ><a href='customer_form.php?id=$id'>  <img src='Pic/Card_Images/$img.jpg' > </a></div> ";
                    
                }
                
                
                
            }
            
        }
        
    ?>
    </div>
    </div>

</div>




<?php include "footer.php";  ?>