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
   <title>Admin-Image</title>
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
         require('ad_sidebar.php');
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
            <!-- footer -->
            <div>

</div>
<br>
<br>

            <form action="upload.php" method="POST" enctype="multipart/form-data">
    <p><strong>Select Image File to Upload:</strong></p>
    <a> <input type="file" class="btn btn-success btn-xs" name="image" id="image"></a>
    <!-- <input type="file" name="file"> -->
   
    <input type="submit" name="submit" value="Upload" class="btn btn-reject btn-xs">

</form>



<div class="full price_table padding_infor_info">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="table-responsive-sm">
                                       <table class="table table-striped projects">
                                          <thead class="thead-dark">
                                             <tr>
                                             <th width="200px">Id<th>
                                                <th></th>
                                                <th></th>
                                             
                                             </tr>
                                          </thead>
                                          <tbody>


                                            <?php
                                                        include "con.php";

                                                        $result = $con->query("SELECT * FROM `images`");

                                                       
                                                         
                                                       if($result->num_rows > 0){  
                                                     
                                                          while($row = $result->fetch_assoc()){ 

                                                            echo "<tr>";

                                                            echo "<td>" . $row["id"] . "</td>";
                                                           ?>

                                                            <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" height="150" width="300"/> </td>
                                                           
                                                            <td class="project_progress">
                                                            <a href="action_img.php?id=<?php echo $row['id']; ?>">
                                                            <button type="button" class="btn btn-reject btn-xs">DELETE</button>
                                                          </a></td>

                                                           <?php
                                                             
                                                            echo "</tr>";
                                                         }
                                                      }else{
                                                         echo "<tr><td><td><h4>No images found in the database...!</h4></td></td></tr>";
                                                      }
                                                         ?> 

                                                                  
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>



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
</body>

</html>