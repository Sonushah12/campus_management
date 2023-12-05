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
               .button-71 {
               background-color: #0078d0;
               border: 0;
               border-radius: 56px;
               color: 000000;
               cursor: pointer;
               display: inline-block;
               font-family: system-ui,-apple-system,system-ui,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",sans-serif;
               font-size: 18px;
               font-weight: 600;
               outline: 0;
               padding: 16px 21px;
               position: relative;
               text-align: center;
               text-decoration: none;
               transition: all .3s;
               user-select: none;
               -webkit-user-select: none;
               touch-action: manipulation;
               }

               .button-71:before {
               background-color: initial;
               background-image: linear-gradient(#fff 0, rgba(255, 255, 255, 0) 100%);
               border-radius: 125px;
               content: "";
               height: 30%;
               left: 4%;
               opacity: .5;
               position: absolute;
               top: 0;
               transition: all .3s;
               width: 92%;
               }

               .button-71:hover {
               box-shadow: rgba(255, 255, 255, .2) 0 3px 15px inset, rgba(0, 0, 0, .1) 0 3px 5px, rgba(0, 0, 0, .1) 0 10px 13px;
               transform: scale(1.05);
               }

               @media (min-width: 768px) {
               .button-71 {
                  padding: 16px 48px;
               }
               }
         </style>
         <script>
      
            </script>
</head>

<body class="inner_page contact_page">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
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
                        <div class="page_title">
                          
                       <a href="action_faculty.php"> <button class="button-71" role="button">Add Faculty</button></a>
                           
                        </div>
                     </div>
                  </div>
                  <!-- row -->
                  <div class="row column1">
                     <!-- <div class="col-md-12"> -->
                        <div class="white_shd full margin_bottom_30">
                           <div class="full graph_head">
                              <div class="heading1 margin_0">   
                                 <h2></h2>
                              </div>
                           </div>
                           <div class="full price_table padding_infor_info">
                              <div class="row">
                                 <!-- column contact -->
                                 <!-- end column contact blog -->
                                 <!-- column contact -->
                                 <?php
                                    include "con.php";

                                     $sql = "SELECT * FROM faculty";
                                  $result = $con->query($sql);
                                                            if ($result->num_rows > 0) {
                                                               
                                                                while ($row = $result->fetch_assoc()) {
                                                                    ?>



<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                    <div class="contact_blog">
                                       <h4 class="brief">main sub</h4>
                                       <div class="contact_inner">
                                          <div class="left">
                                             <h3>
                                                <?php
                                                    echo $row['name'];
                                                ?>
                                                </h3>
                                             <p><strong>About: </strong>Frontend Developer</p>
                                             <ul class="list-unstyled">
                                                <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                             </ul>
                                          </div>
                                          <div class="right">
                                             <div class="profile_contacts">
                                                <img class="img-responsive" src="images/layout_img/user.png" alt="#" />
                                             </div>
                                          </div>
                                          <!-- <div class="bottom_list"> -->
                                             <!-- <div class="left_rating">
                                                <p class="ratings">
                                                   <a href="#"><span class="fa fa-star"></span></a>
                                                   <a href="#"><span class="fa fa-star"></span></a>
                                                   <a href="#"><span class="fa fa-star"></span></a>
                                                   <a href="#"><span class="fa fa-star"></span></a>
                                                   <a href="#"><span class="fa fa-star-o"></span></a>
                                                </p>
                                             </div> -->
                                             <!-- <div class="right_button">
                                                <button type="button" class="btn btn-success btn-xs"> <i
                                                      class="fa fa-user">
                                                   </i> <i class="fa fa-comments-o"></i>
                                                </button>
                                                <button type="button" class="btn btn-primary btn-xs">
                                                   <i class="fa fa-user"> </i> View Profile
                                                </button>
                                             </div> -->
                                          <!-- </div> -->
                                       </div>
                                    </div>
                                 </div>





                                                                  
                                                                   
                                                <?php
                                                                }
                                                                
                                                            } else {
                                                                echo "<h4>No requests found in the Database</h4>";
                                                            }
                                            ?>
                               





                                 <!-- end column contact blog -->
                              </div>
                           </div>
                        </div>
                     </div>
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