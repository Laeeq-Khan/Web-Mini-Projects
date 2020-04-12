 
 
 <div class="row">
<ul class="nav nav-tabs">
  <li ><a href="index.php">Home</a></li>

<?php
    
    $query = "select * from pages ";
    $result = mysqli_query($connection , $query);
    
    while($row = mysqli_fetch_assoc($result)){
        $id111 = $row['id'];
        $page = $row['name'];
        echo " <li ><a href='page.php?code=$id111'>$page</a></li>";
    }
    
    ?>
    <li style="float:right"><a href="login.php">Admin Panel</a></li>
</ul>
</div>
   