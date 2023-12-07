<?php
  session_start();
  if(!ISSET($_SESSION['name'])){
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
   <title>Student-Dash</title>
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
   <!-- fancy box js -->
   <link rel="stylesheet" href="css/jquery.fancybox.css" />
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
         #logo { height: 135px; width: 270px; overflow: hidden;}
         .image-container {
            width: 200px; /* Set the desired fixed width */
            height: 150px; /* Set the desired fixed height */
            overflow: hidden; /* Hide any parts of the images that exceed the container */
            margin: 10px; /* Add spacing between the image containers */
            display: inline-block; /* Display containers inline */
        }

        .image-container img {
            max-width: 100%; /* Ensure images don't exceed the container width */
            max-height: 100%; /* Ensure images don't exceed the container height */
            display: block; /* Remove extra spacing below inline images */
            margin: 0 auto; /* Center-align the image within the container */
        }
    </style>
</head>

<body class="inner_page media_gallery">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
         <!-- Sidebar  -->
         <?php
         require('student_sidebar.php');
         ?>
            <!-- end topbar -->
            <!-- dashboard inner -->
            <div class="midde_cont">
               <div class="container-fluid">
                  <div class="row column_title">
                     <div class="col-md-12">
                        <div class="page_title">
                           <!-- <h2>Media Gallery</h2> -->
                        </div>
                     </div>
                  </div>
                  <!-- <!-- row -->
                  <div class="row column4 graph">
                     <!-- Gallery section -->
                     <div class="col-md-12">
                        <div class="white_shd full margin_bottom_30">
                           <div class="full graph_head">
                              <div class="heading1 margin_0">
                                 <!-- <h2>Media Gallery Design Elements</h2> -->
                              </div>
                           </div>
                           <div class="full gallery_section_inner padding_infor_info">
                                 <div class="row">
                           <?php

include "conn.php";

$result = $con->query("SELECT * FROM `images`");



if($result->num_rows > 0){  

while($row = $result->fetch_assoc()){ 

  
   ?>
                       
                        <div class="col-sm-4 col-md-3 margin_bottom_30">
                        <div id="logo">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"><img class="img-responsive" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          
                                       </div>
                                    </div>
</div>
   <?php
   
   
}
}else{
echo "<tr><td><td><h4>No images found in the database...!</h4></td></td></tr>";
}

?>
                          
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- footer -->
                  <!-- <div class="container-fluid">
                     <div class="row">
                        <div class="footer">
                           <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
                        </div>
                     </div>
                  </div>
               </div> -->

               <?php
                     include "footer.php";
               ?>
               <!-- end dashboard inner -->
            <!-- </div>
         </div> -->
         <!-- model popup -->
         <!-- The Modal -->
         <div class="modal fade" id="myModal">
            <div class="modal-dialog">
               <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                     <h4 class="modal-title">Modal Heading</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                     Modal body..
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <!-- end model popup -->
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
   <!-- fancy box js -->
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="js/jquery.fancybox.min.js"></script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
   <!-- calendar file css -->
   <script src="js/semantic.min.js"></script>
</body>

</html>