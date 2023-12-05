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
   <title>Admin-F-Req</title>
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
</head>

<body class="inner_page project_page">
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
                     </div>
                  </div>
                  <!-- row -->
                  <div class="row column1">
                     <div class="col-md-12">
                        <div class="white_shd full margin_bottom_30">
                           <div class="full graph_head">
                           </div>
                           <div class="full price_table padding_infor_info">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="table-responsive-sm">
                                       <table class="table table-striped projects">
                                          <thead class="thead-dark">
                                             <tr>
                                                <th style="width: 2%">ID</th>
                                                <th>NAME</th>
                                                <th>EMAIL</th>
                                                <th>PHONE NUMBER</th>
                                                <th>PASSWORD</th>
                                                <th>ACTION</th>
                              
                                             </tr>
                                          </thead>
                                          <tbody>


                                          <?php
                                                        include "con.php";

                                                            $sql = "SELECT * FROM temp_faculty";
                                                            $result = $con->query($sql);

                                                            if ($result->num_rows > 0) {
                                                               
                                                                while ($row = $result->fetch_assoc()) {
                                                                    // echo "<tr>";
                                                                    // echo "<td>" . $row["id"] . "</td>";
                                                                    // echo "<td>" . $row["name"] . "</td>";
                                                                    // echo "<td>" . $row["email"] . "</td>";
                                                                    // echo "</tr>";



                                                                    echo "  <tr>";
                                                                    echo "<td>" . $row["fid"] . "</td>";
                                                                    echo "<td>" . $row["name"] . "</td>";
                                                                    echo "<td>" . $row["email"] . "</td>";  
                                                                    echo "<td>" . $row["mobile"] . "</td>";  
                                                                    echo "<td>" . $row["password"] . "</td>"; 
                                                                      ?>

                                              

                                               
                                                <td class="project_progress">
                                                   <a href="f_reject.php?id=<?php echo $row['fid']; ?>">
                                                <button type="button" class="btn btn-reject btn-xs">Reject</button>
                                                                </a>
                                                
                                                                <a href="f_accept.php?id=<?php echo $row['fid']; ?>">
                                                   <button type="button" class="btn btn-success btn-xs">Accept</button></a>
                                                </td>
                                             </tr>



<?php

                                                                }
                                                                
                                                            } else {
                                                                echo "<h4>No requests found in the Database</h4>";
                                                            }



                                            ?>




                                             <!-- <tr>
                                                <td>1</td>
                                                <td>
                                                   <a>Sed ut perspiciatis unde omnis iste natus error sit volup tatem
                                                      accus antium doloremque</a>
                                                </td>
                                                <td>
                                                   <ul class="list-inline">
                                                      <li>
                                                         <img width="40" src="images/layout_img/msg2.png"
                                                            class="rounded-circle" alt="#">
                                                      </li>
                                                      <li>
                                                         <img width="40" src="images/layout_img/msg3.png"
                                                            class="rounded-circle" alt="#">
                                                      </li>
                                                   </ul>
                                                </td>
                                                <td class="project_progress">
                                                <button type="button" class="btn btn-reject btn-xs">Reject</button>
                                                </td>
                                                <td>
                                                   <button type="button" class="btn btn-success btn-xs">Accept</button>
                                                </td>
                                             </tr>
 -->




                                            
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="row">
                        <div class="footer">
                           <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
                        </div>
                     </div>
                  </div>
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
</body>

</html>