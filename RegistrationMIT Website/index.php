<?php  include "include_Files/head.php"  ?>

<style>

    .backgroud{
        box-shadow: 2px 2px 10px gray;
        background-color: white;
        border-radius: 10px;
        padding: 10px;
        }
    
</style>


<br>
<div class="row backgroud">
<div class="col-md-2"></div>

                <div class="col-md-8 " >
                <form method="post" class="form" action="Submitting_to_database.php">

                <div class="form-group">
                <label>Roll No</label>
                <input type="text" class="form-control" name="rollNo" required>
                </div>
                <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                <label>Father Name</label>
                <input type="text" class="form-control" name="father_name"   required>
                </div>

                <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email"  required>
                </div>

                <div class="form-group">
                <label>Contact</label>
                <input type="text" class="form-control" name="contact"  required>
                </div>

                <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address"  required>
                </div>


                <div class="form-group">
                <label>Department</label>
                <select class="form-control" name="department"  required>
                <option>Select Department</option>
                <option>CS & IT</option>
                <option>Physics</option>
                <option>Math</option>
                <option>English</option>
                <option>BBA</option>
                <option>Zology</option>
                <option>Botony</option>
                <option>Urdu</option>
                </select>
                </div>

                <div class="form-group">
                <la> Program</la>
                <select class="form-control" name="program"  required>
                <option>Select Program</option>
                <option> BS</option>
                <option> MSc/M.A</option>
                <option> MS/ Mphil</option>
                </select>
                </div>

               
                <br>
                <div class="from-group">
                <input type="submit" value=" Submit " name="sub" class="btn btn-default">
                </div>

                </form>
<br><br><br>
        
       
    </div>
    
<div class="col-md-2"></div>
    
</div>



<?php  include "include_Files/bottom.php"  ?>
