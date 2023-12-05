<?php
  session_start();
  if(!ISSET($_SESSION['email'])){
     header('location:login.html');
  }
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Admin-Dashboard</title>

   <style>
        /* Styling for the number input */
        .number-input {
            width: 500px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
        }

        /* Styling for the up and down buttons */
        .number-input::-webkit-inner-spin-button,
        .number-input::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Styling for placeholder text */
        .number-input::placeholder {
            color: 000000;
        }

        /* Styling when the input is in focus */
        .number-input:focus {
            border-color: 000000;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        /* Styling for invalid input */
        .number-input:invalid {
            border-color: #3570bd; /* Red border for invalid input */
            border-style: solid;
            border-width: 5px;
        }

        select {
    border: 5px solid #ccc; /* Add a 1-pixel solid border with a light gray color */
    padding: 5px; /* Optional: Add some padding for spacing inside the select box */
    border-color: #3570bd;
}



.submit-button {
  
   border: 2px solid blue; /* Blue border */
  color: black; /* Black text color */
  padding: 10px 20px; /* Adjust padding as needed */
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
  background-color: transparent;
}
    </style>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">

   <!-- site icon -->
   <link rel="icon" href="images/logo/logo_small.png" type="image/png" />
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <!-- site css -->
   <link rel="stylesheet" href="style.css" />
   <!-- responsive css -->
   <link rel="stylesheet" href="css/responsive.css" />
   <!-- color css -->
   <link rel="stylesheet" href="css/colors.css" />
   <!-- select bootstrap -->
   <link rel="stylesheet" href="css/bootstrap-select.css" />
   <!-- scrollbar css -->
   <link rel="stylesheet" href="css/perfect-scrollbar.css" />
   <!-- custom css -->
   <link rel="stylesheet" href="css/custom.css" />
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<form method="POST" action="makefees.php">
<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
         <?php
         require('ad_sidebar.php');
         ?>
         <!-- end topbar -->
         <!-- dashboard inner -->
         <div class="midde_cont">
            <div class="container-fluid">
               <div class="row column_title">
                  <div class="col-md-12">
                     <!-- <div class="page_title">

                     </div> -->
<br>
<center>
                    <h1>Enter Fees Details</h1>
                    <br>
                    <tr><td>
                    <input type="number" name="amount" placeholder="Enter Fees Amount" class="number-input" required>
                    </tr></td>

                    <br>
                    <br>
                    <tr><td>
                    <input type="number" name="year" placeholder="Enter Fees Year" class="number-input" required>
                    </tr></td>


                    
                    <br>
                    <br>
                    <tr><td>
                    <select name="Department" id="Department" class="field">
                     <option value="Department" name="Department" disabled selected> Select Department</option>
                        <option value="BCA" name="BCA">BCA</option>
                        <option value="MCA" name="MCA">MCA</option>
                        <option value="IMCA" name="IMCA">IMCA</option>
                        <option value="MscIT" name="MscIT">MscIT</option>
                    </select>
                    </tr></td>


                    <br>
                    <br>
                    <tr><td>
                    <select name="Semester" id="Semester" class="field">
                     <option value="Semester" name="Semester" disabled selected> Select Semester</option>
                        <option value="1" name="1">1</option>
                        <option value="2" name="2">2</option>
                        <option value="3" name="3">3</option>
                        <option value="4" name="4">4</option>
                        <option value="5" name="5">5</option>
                        <option value="6" name="6">6</option>
                        <option value="7" name="7">7</option>
                        <option value="8" name="8">8</option>
                        <option value="9" name="9">9</option>
                        <option value="10" name="10">10</option>
                    </select>
                    </tr></td>

<br><br>

                    <tr><td>
                    <input type="submit" name="submit" class="submit-button">
                    </tr></td>
</center>
                  </div>
               </div>
              
            </div>
            <div class="row column3">
            </div>
            <!-- footer -->

            <?php
         require('footer.php');
         ?>
          
         <!-- end dashboard inner -->
      </div>
   </div>
   </div>
   <!-- jQuery -->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <!-- wow animation -->
   <script src="js/animate.js"></script>
   <!-- select country -->
   <script src="js/bootstrap-select.js"></script>
   <!-- owl carousel -->
   <script src="js/owl.carousel.js"></script>
   <!-- chart js -->
   <script src="js/Chart.min.js"></script>
   <script src="js/Chart.bundle.min.js"></script>
   <script src="js/utils.js"></script>
   <script src="js/analyser.js"></script>
   <!-- nice scrollbar -->
   <script src="js/perfect-scrollbar.min.js"></script>
   <script>
      var ps = new PerfectScrollbar('#sidebar');
   </script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
   <script src="js/chart_custom_style1.js"></script>
</form>
</body>

</html>