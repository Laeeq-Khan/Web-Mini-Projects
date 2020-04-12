


      
       
         
<style>
    
    
   .design {
    padding: 10px;
       width: 350px;
       transition: width 0.5s;
    }
    
    .design:focus{
        transition: width 0.5s;
        background-color: white;
        text-align: center;
        font-size: 15px;
        color: red;
         padding: 10px;
       width: 400px;
    }
    
    
    
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
 


        <?php include "navigation.php";  ?>


<br><br>
<div class="row">
<div class="col-md-12"> <h2 style="text-align:center;"> Fill all the fields to successful Registration</h2> </div>
</div>


<div class="row">
<div class="col-md-12">
   
    
   
    
 <form method="post" action="Submitting_Page.php" enctype="multipart/form-data">
     
         <hr>
        <h3 style="color:blac">Bio Data </h3>
        <hr>
        
        Full Name  : &nbsp;  &nbsp;
        <input id="fullnameID" type="text" class="design" name="fullName"  required  >
         <br>
         <br>
     
         
        Father Name : 
        <input id="fathername" type="text" class="design" name="fatherName"   required  >
        <br><br>

       Date of Birth : 
        <input id="msg" type="text" class="design" name="dob" required > 
        <br><br>


        CNIC &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
        <input id="cnic" type="text" class="design" name="cnic"  required > 
       <br><br>



        Contact &nbsp; &nbsp; &nbsp; &nbsp;: 
        <input id="contact" type="text" class="design" required name="contact">
        <br><br>


       Email  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :
        <input id="email" type="text" class="design"  name="email" >
      <br><br>
  

                
                 Gender :     &nbsp;   &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp; &nbsp;   &nbsp;                
                    <input type="radio" name="gender" required value="male"> Male  &nbsp;   &nbsp;   &nbsp;
               <input type="radio" name="gender" required value="female"> Fe-male 
             <br><br>    

                    
     
<!--     Image protion here is code where yourser will upload the image -->
 Your Recent Photo :  &nbsp; &nbsp; &nbsp;

<input id="my-file-selector" type="file" required name="image" multiple="multiple" value="Upload" >
 
<span class='label label-info' id="upload-file-info"></span>
<br><br>
<!--     image upload code finished-->
     
     
     
<!--     Acadminc info fileds code below-->
                                          
                                            
     
<!--     Applied for fields-->
   
     
<h3> Admission Information</h3>
Program  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp :
<select class="design" name="program" required>
<option>  Select your program </option>
<option> BS</option>
<option> Msc/M.A</option>
</select>    
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    
Discipline :
<select class="design" name="discipline" required>
<option>Select your Discipline</option>
<option>MIT</option>    
 <option>Math</option>
<option>English</option>
<option>Urdu</option>
<option>Chemistry</option>
<option>Zology</option>
<option>Botony</option>
<option>Education</option>
</select> 
<hr>
<br>  
<br><br><br>
     
     
     
                                            <b style="color:green">Intermediate</b><br>
                                            
                                            Select Board &nbsp; &nbsp; &nbsp; &nbsp; : 
                                            <select class="design" name="selectBoard1" required>
                                            <option>Select Board </option>
                                            <option> Sargodha </option>
                                            <option> Fedral Board </option>
                                            <option>  Lahore </option>
                                            <option>  Pindi </option>
                                            <option>  Gugraat </option>
                                            <option>  Multan </option>
                                            <option>  DI Khan </option>
                                            <option>  Other  </option>

                                            </select>    

                                            &nbsp; &nbsp;  &nbsp; 
                                            Roll No  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; :
                                            <input id="rollno" required type="text" class="design" name="rollNo1">
                                           
<br><br>
                                            <div class="input-group">
                                            Completion Year   : &nbsp; 

                                            <select class="design" name="completionYear1" required>
                                            <option>  Completion Year </option>
                                            <option> 2018 </option>
                                            <option> 2017  </option>
                                            <option> 2016  </option>
                                            <option> 2015  </option>
                                            <option> 2012  </option>
                                            <option> 2011  </option>
                                            <option> 2010   </option>
                                            <option> Other  </option>
                                            </select>    

                                            &nbsp; &nbsp; &nbsp; 
                                            Group  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;:

                                            <select class="design" name="group1" required>
                                            <option> Select Group</option>
                                            <option> I.C.S</option>
                                            <option>FSc </option>
                                            <option> F.A </option>
                                            <option> Deploma  </option>
                                            </select> 

                                            </div><br><br>

                                            
                                           Obtain Marks &nbsp; &nbsp; &nbsp; &nbsp;: 
                                            <input id="marks1" type="text" required class="design"  name="obtainMarks1"> &nbsp; &nbsp; &nbsp; 
                                           Total Marks &nbsp; &nbsp; &nbsp; &nbsp; :
                                            <input id="total1" type="text" required class="design" name="totalMarks1" >
                                            <br><br>


     <br>

                                                 <b style="color:green">Matric : </b><br>
                                            
                                           Select Board &nbsp; &nbsp; &nbsp; &nbsp; :
                                            <select class="design" name="selectBoard" required>
                                                <option>  Sargodha </option>
                                                <option>  Lahore </option>
                                                <option>  Pindi </option>
                                                <option>  Gugraat </option>
                                                <option>  Multan </option>
                                                <option>  DI Khan </option>
                                                <option>  Other  </option>

                                                </select>    

                                                &nbsp; &nbsp;
                                               Roll No  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; :
                                            <input id="msg" type="text" required class="design" name="rollNo2" >
                                            <br><br>

                                                Completion Year   &nbsp;:
                                                <select class="design" name="completionYear2" required>
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

                                                &nbsp; &nbsp; &nbsp; 
                                               Group  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;:                             <select class="design" name="group2" required>
                                                <option> Select Group</option>
                                                <option> Science </option>
                                                <option> Art  </option>
                                                </select> 

                                           <br><br>

                                            Obtain Marks &nbsp; &nbsp; &nbsp;:
                                            <input id="obtain2" name= "obtainMarks2" type="text" class="design" required>
                                            &nbsp; &nbsp; &nbsp; 
                                            Total Marks &nbsp; &nbsp; &nbsp; :
                                            <input id="total2" type="text" required class="design" name="totalMarks2" >
                                            <br><br>

     
    
     <b>Why you have selected this field  ?</b>
<div class="input-group">

    <textarea class="design" rows="10" name="vission" required></textarea>
    
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


<h1 id="text"> </h1>
    
<!--
    
    </div>
</body>
</html>
-->
    
    
    
    
  