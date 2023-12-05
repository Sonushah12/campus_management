<?php


?>

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


.ff {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

/* Add a hover effect for the button */
.ff:hover {
  background-color: #FF7F50;
}

/* Style the icon */
.ff.icon {
  display: inline-block;
  margin-right: 5px;
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
<div class="table-responsive-sm">
                                       <table class="table table-striped projects">
                                          <thead class="thead-dark">
                                             <tr>
                                                <th>Fees Id</th>
                                                <th>Fees Amount</th>
                                                <th>Year</th>
                                                <th>Department NO</th>
                                                <th>Semester</th>
                                                <th>Action</th>                                       
                                             </tr>
                                          </thead>
                                          <tbody>


                                            <?php
                                                        include "con.php";

                                                            $sql = "SELECT * FROM fees";
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
                                                                    echo "<td>" . $row["Department"] . "</td>";
                                                                    echo "<td>" . $row["sem"] . "</td>"; 
                                                                      ?>
                                                <td class="project_progress">
                                                   <a href="update_fees.php?id=<?php echo $row['af_id']; ?>">
                                                <input type="submit" class="btn btn-reject btn-xs" style="background-color:lightgreen; color:black" name="Update" value="Update">
                                                                </a>
                                                                <a href="delete_fees.php?id=<?php echo $row['af_id']; ?>">
                                                <input type="submit" class="btn btn-reject btn-xs" name="Delete" value="Delete">
                                                                </a>
                                                </td>
                                             </tr>
<?php

                                                                }
                                                                
                                                            } else {
                                                               echo "<h4>No requests found in the Database</h4>";
                                                            }
                                            ?>
                                          </tbody>
                                       </table>
                                    </div>
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
