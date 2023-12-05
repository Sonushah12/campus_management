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
   <title>Admin-Faculty</title>
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
   <!-- calendar file css -->
   <link rel="stylesheet" href="js/semantic.min.css" />
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

      <style>

 /* Style for the file input container */
 .file-input-container {
            display: inline-block;
            overflow: hidden;
        }

        /* Style for the custom file input button */
        .custom-file-input-button {
            padding: 20px 20px 20px 20px;
            background-color: #3498db;
            color: 000000;
            border: none;
            cursor: pointer;
            border-radius: 25px;
            width: 30%;
           font-size: 22px;
        }

        /* Style for hiding the real file input */
        .file-input {
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
            position: absolute;
            top: 0;
            left: 0;
        }

        /* Style for displaying the selected file name */
        .file-name {
            margin-left: 10px;
        }

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
        /* Style for the heading */
        .hey{
    font-size: 32px; /* Set the font size as needed */
    color:  000000; /* Set the font color */
    font-weight: bold; /* Set the font weight to bold */
    text-align: center; /* Center-align the text */
    /* text-transform: uppercase; Transform text to uppercase */
    letter-spacing: 2px; /* Adjust letter spacing as needed */
    margin: 20px 0; /* Add margin for spacing */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); /* Add a text shadow */
    background-color: #f7f7f7; /* Set a background color */
    padding: 10px 20px; /* Add padding */
    border: 2px solid #3498db; /* Add a border */
    border-radius: 25px; /* Round the corners */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add a box shadow */
    width: 50%;
}

.heya{
    font-size: 32px; /* Set the font size as needed */
    color:  000000; /* Set the font color */
    font-weight: bold; /* Set the font weight to bold */
    text-align: center; /* Center-align the text */
    /* text-transform: uppercase; Transform text to uppercase */
    letter-spacing: 2px; /* Adjust letter spacing as needed */
    margin: 20px 0; /* Add margin for spacing */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); /* Add a text shadow */
    background-color: #f7f7f7; /* Set a background color */
    padding: 10px 20px; /* Add padding */
    border: 2px solid #3498db; /* Add a border */
    border-radius: 25px; /* Round the corners */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add a box shadow */
    width: 50%;
    cursor: pointer;
}

h1{
    font-size: 32px; /* Set the font size as needed */
    color: 000000; /* Set the font color */
    font-weight: bold; /* Set the font weight to bold */
    text-align: center; /* Center-align the text */
    text-transform: uppercase; /* Transform text to uppercase */
    letter-spacing: 2px; /* Adjust letter spacing as needed */
    margin: 20px 0; /* Add margin for spacing */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0, 0, 0); /* Add a text shadow */
    background-color: #f7f7f7; /* Set a background color */
    padding: 10px 20px; /* Add padding */
    border: 2px solid #3498db; /* Add a border */
    border-radius: 5px; /* Round the corners */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add a box shadow */
    width: 209%;
}

      .white-heading {
            color: white;
        }
        .input-container {
            display: flex;
            gap: 100px; /* Set the gap between the inputs to 30px */
        }

        /* Style for each text input */
        .text-input {
            flex: 1; /* Distribute available space equally between the two inputs */
            padding: 15px; /* Adjust the padding as needed */
            border: 2px solid #3498db;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s; /* Add a smooth transition for the border color */
        }

        /* Style for when the input is focused */
        .text-input:focus {
            border-color: #ff5733; /* Change the border color when focused */
        }

        /* Placeholder style */
        .text-input::placeholder {
            color: 000000;
        }
         </style>
         <script>
            function updateButtonLabel() {
            const fileInput = document.getElementById('fileInput');
            const fileInputLabel = document.getElementById('fileInputLabel');
            const selectedFileName = document.getElementById('selectedFileName');

            if (fileInput.files.length > 0) {
                const fileName = fileInput.files[0].name;
                fileInputLabel.textContent = fileName;
                selectedFileName.textContent = ``;
            } else {
                fileInputLabel.textContent = 'Select Photo';
                selectedFileName.textContent = '';
            }
        }



   
            </script>
</head>

<body>
   <div class="full_container">
      <!-- <div class="inner_container"> -->
         <!-- Sidebar  -->
         <!-- Sidebar  -->
         <?php
         require('ad_sidebar.php');
         ?>
            <!-- end topbar -->
            <!-- dashboard inner -->
            <!-- <div class="midde_cont">
               <div class="container-fluid">
                 
                  <!-- row -->
                  <!-- <div class="row column1">-->
                     <div class="col-md-12">

                     
                        <div class="white_shd full margin_bottom_30"> 
                          
                        <div>

</div>

                           <div class="full graph_head">
                              <div class="heading1 margin_0">   
                                 <strong><h1>Fill the details of Faculty</h1></strong>
                              </div>
                           </div>

                           <div>
      <!-- <h1 class="white-heading">Hello</h1></div> -->
      <center>
                    <div>

                     <form action="a_fac.php" method="POST" >
                    <input type="text" class="hey" placeholder=" Enter Firstname" name="first">
                    <input type="text" class="hey" placeholder=" Enter Lastname" name="last">
                    <input type="text" class="hey" placeholder="Enter Education" name="edu">
                    <input type="number" class="hey" placeholder="Mobile No" name="phone">
                    <input type="email" class="hey" placeholder="Email" name="email">
                    <br>
                    <label for="fileInput" class="custom-file-input-button hey" id="fileInputLabel">Select Photo</label>
                    <input type="file" id="fileInput" class="file-input" name="image" accept="image/*" onchange="updateButtonLabel()" required>
                      <span id="selectedFileName" class="file-name"></span>
    <br>
                   <input type="submit" value="SUBMIT" class="heya" href="a_fac.php" name="submit">
                  </form>



      </div>
      </center>

                     <!-- end row -->
                  </div>
                  <!-- footer -->
                  <?php
                     include "footer.php";
                  ?>
                  <!-- <div class="container-fluid"> -->
                     <!-- <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                           Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                        </p>
                     </div>
                  </div> -->
               </div>
               <!-- end dashboard inner -->
            </div>
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
   <!-- calendar file css -->
   <script src="js/semantic.min.js"></script>
   <script></script>
</body>

</html>