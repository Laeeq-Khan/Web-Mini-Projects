<?php include "folder/main.php";  ?>
<?php include "folder/navigation_bar.php";  ?>

<br><br><br><br><Br>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
    
    
<table class="table table-hover  table-bordered" style="font-size:20px; background-color:white; ">
<thead >
    <tr>
    <th> Website Title</th>
    <th> Link</th>
    </tr>
    
    </thead>

<?php  
if(isset($_GET['code'])){
    $code = $_GET['code'];
   
    $query = "select * from  links where page_id = '$code' ";
    $result = mysqli_query($connection , $query);
    
    while($row = mysqli_fetch_assoc($result)){
        $name = $row['name'];
        $link = $row['link'];
        
        echo "<tr>";
        echo "<td  style='padding-left:20px'>$name  </td>";
        echo "<td style='padding-left:20px'><a href='$link' target='_blank'>  Click me </a>  </td>";
        echo "</tr>";
        
    }
    
}

?>

    
</table>

    </div>
</div>


<?php include "folder/footer.php";  ?>
    
    