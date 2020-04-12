<?php include"Includes/header.php"  ?>
<?php include"Includes/slideImage.php"  ?>
<?php include"Includes/navigation.php"  ?>
<br><br><br>


<div class="row">

<div class="col-md-3"></div>
<div class="col-md-6">
    <h5> Put your details to show your record </h5>
    
    <form method="get" action="process.php">

<div class="input-group">
<span class="input-group-addon">CNIC &nbsp; &nbsp; </span>
<input id="fathername" type="text" class="form-control" name="cnic"  required placeholder="ege 3830225342463">
</div><br>
    
    
    <div class="input-group">
<span class="input-group-addon">Siral No</span>
<input id="fathername" type="text" class="form-control" name="srno"  required placeholder="Enter your assigned Sr No">
</div><br>

    <center><input type="submit" name="submit" value="Submit" class="btn btn-primary" > </center>
</form>
    </div>
</div>


<br><br><br>
<?php include"Includes/footer.php"  ?>