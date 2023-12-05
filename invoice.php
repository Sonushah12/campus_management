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
   <title>Invoice</title>
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
</head>

<body class="inner_page invoice_page">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
         <!-- Sidebar  -->
         <?php
         require('sidebar.inc.php');
         ?>
            <!-- end topbar -->
            <!-- dashboard inner -->
            <div class="midde_cont">
               <div class="container-fluid">
                  <div class="row column_title">
                     <div class="col-md-12">
                        <div class="page_title">
                           <h2>Invoice <small>( user invoice design )</small></h2>
                        </div>
                     </div>
                  </div>
                  <!-- row -->
                  <div class="row">
                     <!-- invoice section -->
                     <div class="col-md-12">
                        <div class="white_shd full margin_bottom_30">
                           <div class="full graph_head">
                              <div class="heading1 margin_0">
                                 <h2><i class="fa fa-file-text-o"></i> Invoice</h2>
                              </div>
                           </div>
                           <div class="full">
                              <div class="invoice_inner">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div class="full invoice_blog padding_infor_info padding-bottom_0">
                                          <h4>From</h4>
                                          <p><strong>Pluto Admin</strong><br>
                                             427 Schoen Circles Suite 124<br>
                                             Melbourne Australia<br>
                                             <strong>Phone : </strong><a href="tel:9876543210">9876 543 210</a><br>
                                             <strong>Email : </strong><a
                                                href="mailto:yourmail@gmail.com">Yourmail@gmail.com</a>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="full invoice_blog padding_infor_info padding-bottom_0">
                                          <h4>To</h4>
                                          <p><strong>David Roman</strong><br>
                                             427 Schoen Circles Suite 124<br>
                                             Melbourne Australia<br>
                                             <strong>Phone : </strong><a href="tel:9876543210">9876 543 210</a><br>
                                             <strong>Email : </strong><a
                                                href="mailto:yourmail@gmail.com">Yourmail@gmail.com</a>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="full invoice_blog padding_infor_info padding-bottom_0">
                                          <h4>Invoice No - #111457 </h4>
                                          <p><strong>Order ID : </strong>5b6R9C<br>
                                             <strong>Payment Due : </strong>July/18/2018<br>
                                             <strong>Account : </strong>254-55847
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="full padding_infor_info">
                              <div class="table_row">
                                 <div class="table-responsive">
                                    <table class="table table-striped">
                                       <thead>
                                          <tr>
                                             <th>Qty</th>
                                             <th>Product</th>
                                             <th>Serial #</th>
                                             <th>Description</th>
                                             <th>Subtotal</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>1</td>
                                             <td>Product One</td>
                                             <td>005-475-321</td>
                                             <td>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                dolore eu fugiat nulla pariatur.</td>
                                             <td>$20.00</td>
                                          </tr>
                                          <tr>
                                             <td>2</td>
                                             <td>Product Two</td>
                                             <td>015-475-321</td>
                                             <td>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                dolore eu fugiat nulla pariatur.</td>
                                             <td>$25.00</td>
                                          </tr>
                                          <tr>
                                             <td>3</td>
                                             <td>Product Three</td>
                                             <td>025-475-321</td>
                                             <td>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                dolore eu fugiat nulla pariatur.</td>
                                             <td>$20.00</td>
                                          </tr>
                                          <tr>
                                             <td>4</td>
                                             <td>Product Four</td>
                                             <td>035-475-321</td>
                                             <td>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                dolore eu fugiat nulla pariatur.</td>
                                             <td>$15.00</td>
                                          </tr>
                                          <tr>
                                             <td>5</td>
                                             <td>Product Five</td>
                                             <td>045-475-321</td>
                                             <td>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                dolore eu fugiat nulla pariatur.</td>
                                             <td>$25.00</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- row -->
                  <div class="row">
                     <div class="col-md-6">
                        <div class="full white_shd">
                           <div class="full graph_head">
                              <div class="heading1 margin_0">
                                 <h2>Payment Methods</h2>
                              </div>
                           </div>
                           <div class="full padding_infor_info">
                              <ul class="payment_option">
                                 <li><img src="images/layout_img/visa.png" alt="#" /></li>
                                 <li><img src="images/layout_img/mastercard.png" alt="#" /></li>
                                 <li><img src="images/layout_img/american-express.png" alt="#" /></li>
                                 <li><img src="images/layout_img/paypal.png" alt="#" /></li>
                              </ul>
                              <p class="note_cont">If you use this site regularly and would like to help keep the site
                                 on the Internet.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="full white_shd">
                           <div class="full graph_head">
                              <div class="heading1 margin_0">
                                 <h2>Total Amount</h2>
                              </div>
                           </div>
                           <div class="full padding_infor_info">
                              <div class="price_table">
                                 <div class="table-responsive">
                                    <table class="table">
                                       <tbody>
                                          <tr>
                                             <th style="width:50%">Subtotal:</th>
                                             <td>$250.30</td>
                                          </tr>
                                          <tr>
                                             <th>Tax (9.3%)</th>
                                             <td>$10.34</td>
                                          </tr>
                                          <tr>
                                             <th>Shipping:</th>
                                             <td>$5.80</td>
                                          </tr>
                                          <tr>
                                             <th>Total:</th>
                                             <td>$265.24</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- footer -->
               <div class="container-fluid">
                  <div class="footer">
                     <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
                  </div>
               </div>
            </div>
            <!-- end dashboard inner -->
         </div>
      </div>
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