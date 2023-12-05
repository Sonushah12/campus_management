<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Student-Reg</title>
      <link rel="icon" href="images/logo/logo_small.png" type="image/png" />
      <link rel="stylesheet" href="login.css">
      <style>
               input::-webkit-outer-spin-button,
               input::-webkit-inner-spin-button {
               -webkit-appearance: none;
               margin: 0;
               }

                select {
        margin-bottom: 10px;
        margin-top: 10px;
        font-family: 'Poppins', sans-serif;
        outline: 0;
         font-size: 17px;
        color: grey;
        border: 1px solid lightgrey;
        padding: 4px;
        border-radius: 25px;
        padding-left: 15px; 

      }
      input{padding:10px;}
         </style>
   </head>
   <body>
      <div class="wrapper">
         <div class="title">Student Registration
         </div>
         <form action="Signup.php" method="POST">
            <div class="field">
               <input type="text" required name="name">
               <label>Full Name </label>
            </div>
            <div class="field">
               <input type="number" required name="e_no">
               <label>Enrolment number</label>
            </div>
            <div class="field">
                <input type="email" required name="email">
                <label>College email id</label>
             </div>


           


             <div class="field">
                <input type="password" required name="password">
                <label>Password</label>
             </div>
             <div class="field">
               <input type="password" required name="cpassword">
               <label>Repeat Password</label>
            </div>
            
<div >  
   <!-- <label for="Department" >Department</label> -->
   <select name="Department" id="Department" class="field">
      <option value="Department" name="Department" disabled selected>Department</option>
     <option value="BCA" name="BCA">BCA</option>
     <option value="MCA" name="MCA">MCA</option>
     <option value="IMCA" name="IMCA">IMCA</option>
     <option value="MscIT" name="MscIT">MscIT</option>
   </select>
</div>

<div>  
   <!-- <label for="Division" class="field">Division</label> -->
   <select name="sem" id="sem" class="field">
   <option value="sem" name="sem" disabled selected>Semester</option>
     <option value="1" name="A">1</option>
     <option value="2" name="B">2</option>
     <option value="3" name="C">3</option>
     <option value="4" name="D">4</option>
     <option value="5" name="E">5</option>
     <option value="6" name="F">6</option>
     <option value="7" name="A">7</option>
     <option value="8" name="B">8</option>
     <option value="9" name="C">9</option>
     <option value="10" name="D">10</option>
     
   </select>
</div>

<div>  
   <!-- <label for="Division" class="field">Division</label> -->
   <select name="Division" id="Division" class="field">
   <option value="Division" name="Division" disabled selected>Division</option>
     <option value="A" name="A">A</option>
     <option value="B" name="B">B</option>
     <option value="C" name="C">C</option>
     <option value="D" name="D">D</option>
     <option value="E" name="E">E</option>
     <option value="F" name="F">F</option>
     
   </select>
</div>
            <!-- <div class="content">  
            </div> -->
            <div class="field">
               <input type="submit" value="Signup" name="submit">
            </div>
            <div class="signup-link">
               Already a member <a href="login.html">Login</a> Here
            </div>
            <div class="signup-link">
               Faculty<a href="tsignup.html">Signup</a>
            </div>
         </form>
      </div>
   </body>
</html>