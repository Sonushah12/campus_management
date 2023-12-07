
<?php
  session_start();
  if(!ISSET($_SESSION['fname'])){
     header('location:login.html');
     exit; // It's a good practice to exit after a redirect
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
   <title>Faculty-Dashboard</title>
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

<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
         <?php
         require('f_sidebar.php');
         ?>
         <!-- end topbar -->
         <!-- dashboard inner -->
         <!-- <div class="midde_cont">
            <div class="container-fluid">
               <div class="row column_title">
                  <div class="col-md-12">
                     <div class="page_title">

                     </div>
                  </div>
               </div>
               <div class="row column1">
                  <a href="login.html">
                     <div class="col-md-6 col-lg-3">
                        <div class="full counter_section margin_bottom_30">
                           <div class="couter_icon">
                              <div>
                                 <i class="fa fa-money green_color"></i>
                              </div>
                           </div>
                           <div class="counter_no">
                              <div>
                                 <p class="total_no">PAY FEES</p>
                                 <p class="total_no">HERE</p>
                              </div>
                           </div>
                        </div>
                  </a>
               </div>

               <div class="col-md-6 col-lg-3">
                  <a href="login.html">
                     <div class="full counter_section margin_bottom_30">
                        <div class="couter_icon">
                           <div>
                              <i class="fa fa-clock-o blue1_color"></i>
                           </div>
                        </div>
                        <div class="counter_no">
                           <div>
                              <p class="total_no">TIME</p>
                              <p class="total_no">TABLE</p>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>

               <div class="col-md-6 col-lg-3">
                  <a href="login.html">
                     <div class="full counter_section margin_bottom_30">
                        <div class="couter_icon">
                           <div>
                              <i class="fa fa-percent green_color"></i>
                           </div>
                        </div>
                        <div class="counter_no">
                           <div>
                              <p class="total_no">GRADES</p>
                              <p class="total_no">RESULTS </p>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-md-6 col-lg-3">
                  <a href="login.html">
                     <div class="full counter_section margin_bottom_30">
                        <div class="couter_icon">
                           <div>
                              <i class="fa fa-file red_color"></i>
                           </div>
                        </div>
                        <div class="counter_no">
                           <div>
                              <p class="total_no">BOOKS</p>
                              <p class="total_no">ASSIGNMENT</p>
                           </div>
                        </div>
                     </div>
               </div>
               </a>
            </div>
            <div class="row column3">
            </div> -->
          
   



<!-- schedule add -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>College Schedule</title>
</head>
<body>

    <div class="container">
        <br>
        <br>
        <h1>College Schedule</h1>
        <br>
        <br>

        <div class="buttons-container">
            <a href="view_schedule.php" class="btn">View Schedule</a>
            <a href="add_schedule.php" class="btn">Add Schedule</a>
        </div>

        
<style>

/* ... Your existing styles ... */

.buttons-container {
    margin-bottom: 20px;
}

.btn {
    display: inline-block;
    padding: 10px 15px;
    background-color: #4caf50;
    color: #fff;
    text-decoration: none;
    margin-right: 10px;
    border-radius: 5px;
}

.btn:hover {
    background-color: #45a049;
}


</style>