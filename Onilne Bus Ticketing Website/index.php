<style>
    .back{
        box-shadow: 0px 0px 10px yellow;
        border-bottom: 2px solid yellow;
        position: relative;
        z-index: -5;
    }
    
   

    .boxShadow{
        
        color: red;
     box-shadow: 1px 1px 10px black;   
    }
    
    option{
        width:150px;
        color: red;
        font-size: 20px;
    }
    select{
    width: 220px;
        height: 50px;
    }
    
     input{
    width: 220px;
        height: 50px;
    }
    .black{
        background-color: dimgrey;
        padding: 10px;
    }
    
</style>

<?php  include"head.php" ?>
<?php  include"Navigation.php" ?>


<div class="row">
<div class="col-md-12">
    <img src="Pictures/main.jpg"  class="img img-responsive back" >
    </div>
</div>


<div class="row uperData">
<div class="col-md-1"></div>
<div class="col-md-10 black">

   <form  class="form-inline"  method="post" action="Selected.php">
    
       <select class=" boxShadow" name="departure">
       <option> &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp; Start &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; </option>
        <option>Karachi</option>
        <option>Lahore</option>
        <option>Islamabad</option>
        <option>Mianwali</option>
         
       </select>
       <select class="  boxShadow" name="destination" >
       <option> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  Destination &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; </option>
       <option>Karachi</option>
        <option>Lahore</option>
        <option>Islamabad</option>
        <option>Mianwali</option>
         
       </select>
      
     <div class="form-group">
    <input class=" " id="focusedInput" type="date" name="date" id="dateF" >
  </div>
       
       
       <input type="submit" class="" value="BOOK ME"  name="submit1" >
       
       
    </form>
   
    </div>
    <br>
</div>
<bR>
<div class="row">
    <div class="col-md-1"></div>
<div class="col-md-10">
    <img src="Pictures/img.jpg" class=" img-responsive " >
    </div>
</div>

<?php  include"footer.php" ?>




