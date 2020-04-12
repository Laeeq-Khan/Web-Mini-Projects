


<br>
<!Doctype html>
<html>
<head>
    <title> Online Registration for UOS Sub Campus Mianwali</title>
    
    <link rel="stylesheet" href="Libraryies/bootstrap.css">
    <link  href="Libraryies/bootstrap.min.css" rel="stylesheet" >
     <script src="Libraryies/bootstrap.min.js"></script>
     <script src="Libraryies/jquery.min.js"></script>
    

  <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <style>
        .shadowBox{
            box-shadow: 1px 2px  5px gray;
        }
        
        .black{
            background-color: black;
            color: white;
            
        }
        
        .fonter{
            font-family: sans-serif;
        }
        
        .logo{
            position: relative;
            top: 0px;
            
        }
       
        a:hover{
            color: white;
        }
        a:link{
            color: red;
            
        }
    
        
        .comp{
            color: red;
            text-shadow: 2px 2px 10px red;
            font-weight: bolder;
        }
    </style>
</head>

    <body >
    <div class="container">

        
        <div class="row">
        <div class= "col-md-10">
        <h1 style="color:red" class="fonter">The University of Sargodha Campus Mianwali  </h1>
        <div class="row">
        <div class="col-md-12">
        <B>Address :</B> Near Talagang Road District Mianwali , Punjab , Pakistan
        <br>
        <B>Contact :  </B>   0459-887548  &nbsp; &nbsp; &nbsp; &nbsp; <B>Email :  </B>   mianwali.campus@uos.edu.pk
        </div>
        </div>    
        </div>
        <div class="col-md-2"> <img src="Icons/logo.png" class="img img-responsice logo" width="150px"> </div>    
        </div>
        <hr>     
       
         
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    box-shadow: 2px 2px 10px gray;
    border-radius: 2px;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    text-decoration: none;
    background-color: #111;
}
</style>
 

<?php include "Includes/navigation.php";  ?>
<br><br>
<div class="row">
<div class="col-md-12"> <h2 style="text-align:center; color:red; border-bottom:1px solid red;"> Registration Form</h2> </div>
</div>


<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
   
    
   
    
 <form method="post" action="subMission.php" enctype="multipart/form-data">
  <span style="color:red;"> <b>Note : </b></span>   Online admission charges are payable (through Challan Form) at any branch of Habib Bank Ltd. and Habib Metro bank. "Challan Form" will be available to you after completion/submission of your application.
     <br>
     
     <u><b style="color:red"> Read and Fill the form Carefully , After Submission your data will not be changeble</b></u>
        <hr>
        <h5 style="color:orange"> Basic Info : </h5>
        <hr>
        <div class="input-group">
        <span class="input-group-addon">Full Name  &nbsp;  &nbsp;</span>
        <input id="fullnameID" type="text" class="form-control" name="fullName"  onkeyup="fullname('fullnameID')" required placeholder="Enter your full name">
      
        </div>
        <br>
     
        <div class="input-group">
        <span class="input-group-addon">Father Name</span>
        <input id="fathername" type="text" class="form-control" name="fatherName" onkeyup="fullname('fathername')" required placeholder="Enter your Father name"> 
        </div><br>


        <div class="input-group">
        <span class="input-group-addon">Date of Birth</span>
        <input id="msg" type="text" class="form-control" name="dob" required placeholder="DD/MM/YYYY"> 
        </div><br>


        <div class="input-group">
        <span class="input-group-addon">CNIC &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>
        <input id="cnic" type="text" class="form-control" name="cnic"  required onkeyup="onlyNumber('cnic') " placeholder="Enter your National Identity Number"> 
        </div><br>




        <div class="input-group">
        <span class="input-group-addon">Contact &nbsp; &nbsp; &nbsp; &nbsp; </span>
        <input id="contact" type="text" class="form-control" required name="contact" onkeyup="onlyNumber('contact')" placeholder="Enter your Contact">  
        </div><br>


        <div class="input-group">
        <span class="input-group-addon">Email  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>
        <input id="email" type="text" class="form-control"  name="email" placeholder="Enter your Email">  
        </div><br>
  

                <div class="radio">
                <b> Gender : </b>     &nbsp;   &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;
                <label><input type="radio" name="gender" required value="male"> Male</label>
                &nbsp;   &nbsp;   &nbsp;
                <label><input type="radio" name="gender" required value="female"> Fe-male</label>
                </div>

                <div class="radio">
                <b> Martial Status : </b>     &nbsp;   &nbsp;
                <label><input type="radio" name="shadi" value="marid"> Marid</label>
                &nbsp;   &nbsp;   &nbsp;
                <label><input type="radio" name="shadi" value="single"> Single</label>
                </div>
<!--     Image protion here is code where yourser will upload the image -->
<b> Upload Image</b> &nbsp; &nbsp; &nbsp;
<label class="btn btn-primary" for="my-file-selector">
<input id="my-file-selector" type="file" required name="image" multiple="multiple" style="display:none"
onchange="$('#upload-file-info').html(
(this.files.length > 1) ? this.files[0].name : this.files.length + ' files')">                     
Upload Image&hellip;
</label>
<span class='label label-info' id="upload-file-info"></span>
<br><br><hr>
<!--     image upload code finished-->
     
     
     
<!--     Acadminc info fileds code below-->
                                            <h5 style="color:orange"> Acadmic Info </h5>
                                            <hr> <br>
                                            <b style="color:red">Intermediate Equalient Details</b>
                                            <div class="form-group">
                                            <label> Select Board  </label>
                                            <select class="form-control" name="selectBoard1" required>
                                            <option value="">Select Board </option>
                                            <option> BISE Sargodha </option>
                                            <option> Fedral Board </option>
                                            <option> BISE Lahore </option>
                                            <option> BISE Pindi </option>
                                            <option> BISE Gugraat </option>
                                            <option> BISE Multan </option>
                                            <option> BISE DI Khan </option>
                                            <option> BISE Other  </option>
                                             </select>    
                                             

                                          
                                            <label>Roll No      </label>
                                            <input id="rollno" required type="text" class="form-control" name="rollNo1" placeholder="Enter your Email"> 
                                            </div><br>

                                            <div class="form-group">
                                            <label  >Completion Year </label>

                                            <select class="form-control" name="completionYear1" required>
                                            <option>  Completion Year </option>
                                            <option> 2017 </option>
                                            <option> 2016  </option>
                                            <option> 2015  </option>
                                            <option> 2014  </option>
                                            <option> 2013  </option>
                                            <option> 2012  </option>
                                            <option> 2011   </option>
                                            <option> Other  </option>
                                            </select>    

                                           
                                            <label>Group </label>

                                            <select class="form-control" name="group1" required>
                                            <option> Select Group</option>
                                            <option> FSc</option>
                                            <option> I.C.S</option>
                                            <option> F.A </option>
                                            <option> Deploma  </option>
                                            </select> 

                                            </div><br>

                                            <div class="from-grou[]">
                                            <label>Obtain Marks &nbsp; &nbsp; </label>
                                            <input id="marks1" type="text" required class="form-control"  onkeyup="onlyNumber('marks1')" name="obtainMarks1" placeholder="Obtain Marks"> 
                                            <label>Total Marks &nbsp; &nbsp; &nbsp; </label>
                                            <input id="total1" type="text" required class="form-control" onkeyup="onlyNumber('total1')" name="totalMarks1" placeholder="Total Marks"> 
                                            </div><br>



                                                 <b style="color:red">Matric or Equalient Details</b>
                                            <div class="form-group">
                                            <label> Select Board </label>
                                            <select class="form-control" name="selectBoard" required>
                                                <option> BISE Sargodha </option>
                                                <option> BISE Lahore </option>
                                                <option> BISE Pindi </option>
                                                <option> BISE Gugraat </option>
                                                <option> BISE Multan </option>
                                                <option> BISE DI Khan </option>
                                                <option> BISE Other  </option>

                                                </select>    

                                                
                                                <label>Roll No  </label>
                                            <input id="msg" type="text" required class="form-control" name="rollNo2" placeholder="Enter your Email"> 
                                            </div><br>

                                            <div class="form-group">
                                            <label>Completion Year </label>

                                                 <select class="form-control" name="completionYear2" required>
                                                <option>  Completion Year </option>
                                                <option> 2017 </option>
                                                <option> 2016  </option>
                                                <option> 2015  </option>
                                                <option> 2014  </option>
                                                <option> 2013  </option>
                                                <option> 2012  </option>
                                                <option> 2011   </option>
                                                 <option> Other  </option>
                                                </select>    

                                                
                                                <label>Group  </label>
                                                <select class="form-control" name="group2" required>
                                                <option> Select Group</option>
                                                <option> Science </option>
                                                <option> Art  </option>
                                                </select> 

                                            </div><br>

                                            <div class="form    -group">
                                            <label>Obtain Marks  </label>
                                            <input id="obtain2" name= "obtainMarks2" type="text" class="form-control" onkeyup="onlyNumber('obtain2')"  placeholder="Obtain Marks" required>
                                       
                                            <label>Total Marks </label>
                                            <input id="total2" type="text" onkeyup="onlyNumber('total2')" required class="form-control" name="totalMarks2" placeholder="Total Marks"> 
                                            </div><br>

     
     <br><br>
    
        <hr>
        <h5 style="color:orange"> Applied for Details : </h5>
        <hr>
     

<div class="form-group">
<label>Program </label>

<select class="form-control" name="program" required>
<option>  Select your program </option>
<option> BS</option>
<option> Msc/M.A</option>
</select>    
&nbsp;
    
<label>Discipline </label>
<select class="form-control" name="discipline" required>
<option>Select your Discipline</option>
<option>CS</option>    
<option>IT</option>
<option>Math</option>
<option>English</option>
<option>Urdu</option>
<option>Chemistry</option>
<option>Zology</option>
<option>Botony</option>
<option>Education</option>
</select> 

</div>     
<br>
     <b>What is your Vission ?</b>
<div class="form-group">

    <textarea class="form-control" rows="10" name="vission" required></textarea>
    
</div><br>   
     
     <br>   
     <input type="submit" class="btn btn-primay" value="Submit"  name="submit">
    </form>


    </div>
<div class="col-md-2"></div>
</div>

<br><br>
<br><br>
 


<style>
    .br{
        border-top: 2px solid red;
        border-bottom: 2px solid red;
    }

</style>

<div class="row">
<div class="col-md-12">

    <hr>
    <div class="jumbotron shadowBox br">
    
        <div class="row">
        <div class="col-md-2" style="border-right:2px solid black;"><h2> Contact US  </h2> </div>
        <div class="col-md-8" style="border-right:2px solid black"> 
        
            <h3 style="text-align:center"> Email: laiqkhan0000@@gmail.com</h1>
            <h3 style="text-align:center">030588988985</h2>
            </div>
       
            <div class="col-md-2" >
           <h2> Computer Scientest</h2>
            </div>
            
         </div>
      </div>
</div>
<h1 id="text"> </h1>
    
<!--
    
    </div>
</body>
</html>
-->
    
    
    
    
    <script>
    
     
        function fullname(field){

        var control = document.getElementById(field);
        var value1 =   document.getElementById(field).value;
        var rg = /^[a-zA-Z ]+$/;
        if(!value1.match(rg) && value1.length > 0){
        control.style.backgroundColor = "red";
        control.style.color = "white";
        }else{
        control.style.color = "black";
        control.style.backgroundColor = "white";
        }
        }//end of function
    
        
        
          function onlyNumber(field){

        var control = document.getElementById(field);
        var value1 =   document.getElementById(field).value;
        var rg = /^[a-zA-Z ]+$/;
        if(value1.match(rg) && value1.length > 0){
        control.style.backgroundColor = "red";
        control.style.color = "white";
        }else{
        control.style.color = "black";
        control.style.backgroundColor = "white";
        }
        }//end of function
    
        
        
      
        
    </script>
