<style>
    .back{
        box-shadow: 0px 0px 10px yellow;
        border-bottom: 2px solid yellow;
        position: relative;
        z-index: -5;
    }
    
    .uperData{
        position: relative;
        top: -70px;
    }

    .boxShadow{
        
        color: red;
     box-shadow: 1px 1px 10px black;   
    }
    
    
</style>

<?php  include"Website_Head.php" ?>
<?php  include"Upper_Navigation.php" ?>


<div class="row">

<div class="col-md-12">
    
    
    <img src="Pictures/main.jpg"  class=" img-responsive back" >
    
    </div>
    
</div>


<div class="row uperData">
<div class="col-md-1"></div>
<div class="col-md-10">

   <form  class="form-inline"  method="post" action="Submit.php">
    
       <select class="form-control boxShadow" name="departure">
       <option> &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp; Departure &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; </option>
        <option>Mianwali</option>
        <option>Islamabad</option>
        <option>Lahore</option>
        <option>Pindi</option>
         
       </select>
       <select class="form-control boxShadow" name="destination" >
       <option> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Destination &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; </option>
       <option>Mianwali</option>
        <option>Islamabad</option>
        <option>Lahore</option>
        <option>Pindi</option>
         
       </select>
      
     <div class="form-group">
    <input class="form-control" id="focusedInput" type="date" name="date" id="dateF" >
  </div>
       
       
       <input type="submit" class="btn btn-danger" value="BOOK ME"  name="submit1" >
       
       
    </form>
   
    </div>
    
</div>

<div class="row">
<div class="col-md-12">
    <img src="Pictures/img.jpg" class=" img-responsive " >
    </div>
</div>


<?php  include"Website_Foot.php" ?>




