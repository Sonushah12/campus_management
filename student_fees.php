<?php
    session_start();
   
    if(isset($_SESSION['sid'])) {
      // echo 'Username: ' . $_SESSION['username'] . '<br>';
      // echo 'Email: ' . $_SESSION['email'];
  } else {
      echo 'Session variables not set';
  }
  $sid = $_SESSION["sid"];
  
  $Department = $_SESSION['Department'];
  
  $sem = $_SESSION['sem'];
  

//   $qq = "SELECT * FROM `student` WHERE `email`='$email'";
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
      <title>Student-Fees</title>
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
      <link rel="stylesheet" href="login.css">
   <style>
      .icon {
         padding: 10px;
         background: dodgerblue;
         color: white;
         min-width: 50px;
         text-align: center;
       }
       
       .input-field {
         width: 100%;
         padding: 10px;
         outline: none;
       }
   </style>
   </head>
   <body class="inner_page price_table">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <?php

                include "student_sidebar.php";

                ?>
             <!-- end topbar -->
               <!-- dashboard inner -->
              
                 
                     <!-- row -->
                   <br>
                   <h1>Fees Details</h1>
                   <br>
                        
                           
                     <div class="table-responsive-sm">
                                       <table class="table table-striped projects">
                                          <thead class="thead-dark">
                                             <tr>
                                                <th>Fees Id</th>
                                                <th>Fees Amount</th>
                                                <th>Year</th>
                                                <th>Semester</th>
                                                <th>Status</th>                                       
                                             </tr>
                                          </thead>
                                          <tbody>


                                            <?php
                                                        include "con.php";

                                                            $sql = "SELECT * FROM `fees` WHERE `Department`='$Department' and `sem`='$sem'";
                                                            $result = $con->query($sql);

                                                            if ($result->num_rows > 0) {
                                                               
                                                                while ($row = $result->fetch_assoc()) {
                                                                    // echo "<tr>";
                                                                    // echo "<td>" . $row["id"] . "</td>";
                                                                    // echo "<td>" . $row["name"] . "</td>";
                                                                    // echo "<td>" . $row["email"] . "</td>";
                                                                    // echo "</tr>";



                                                                    echo "  <tr>";
                                                                    echo "<td>" . $row["af_id"] . "</td>";
                                                                    echo "<td>" . $row["fees_amount"] . "</td>";
                                                                    echo "<td>" . $row["year"] . "</td>";
                                                                    echo "<td>" . $row["sem"] . "</td>"; 
                                                                      ?>
                                                <!-- <td class="project_progress">
                                                   <a href="update_fees.php?id=<?php echo $row['af_id']; ?>">
                                                <input type="submit" class="btn btn-reject btn-xs" style="background-color:lightgreen; color:black" name="Update" value="Update">
                                                                </a>
                                                                <a href="delete_fees.php?id=<?php echo $row['af_id']; ?>">
                                                <input type="submit" class="btn btn-reject btn-xs" name="Delete" value="Delete">
                                                                </a>
                                                </td>
                                             </tr> -->
<?php

                                                                }
                                                                
                                                            } else {
                                                               echo "<h4>No requests found in the Database</h4>";
                                                            }
                                            ?>
                                          </tbody>
                                       </table>
                                    </div>

                     <!-- end row -->
                  
                  <!-- footer -->
                 <?php
                            include "footer.php";
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
      <!-- calendar file css -->    
      <script src="js/semantic.min.js"></script>
      <script></script>
   </body>
</html>