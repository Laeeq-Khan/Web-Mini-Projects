 
<style>

    .one{
        padding: 20px;
        background-color: navy;
    }

</style>
<?php include "navigation.php";  ?>
<br><br><br>


<div class="row">

<div class="col-md-3"></div>
<div class="col-md-6" class="one">
    <h3>Enter your Details</h3>
    
    <form method="get" action="Status_Submitting_Page.php" >


        
 CNIC &nbsp; &nbsp; 
<input id="fathername" type="text" size="40" name="cnic"  required placeholder="ege 3830225342463">
<br>
    
    <br>
     
Siral No 
<input id="fathername" type="text" size="40" name="srno"  required placeholder="Enter your assigned Sr No">
<br>
<br>
    <center><input type="submit" name="submit" value="Submit"  > </center>
</form>
    </div>
</div>


<br><br><br>
<?php include"footer.php"  ?>