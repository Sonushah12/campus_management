<?php
 // session_start();
  if(!ISSET($_SESSION['name'])){
     header('location:login.html'
    //  $name = $_SESSION['name'];
    );
  }
   ?>
<!-- Sidebar  -->
<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section">
                <a href="student_dash.php"><img class="logo_icon img-responsive" src="images/logo/logo_small.png"
                        alt="#" /></a>
            </div>
        </div>
        <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
                <div class="user_img"><img class="img-responsive" src="images/layout_img/user.png" alt="#" /></div>
                <div class="user_info">
                    <h6>
                        <?php
                             $name = $_SESSION['name'];
                             echo $name;
                        ?>
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <h4>Student</h4>
        <ul class="list-unstyled components">


        <!-- <li>
                <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-check-square-o purple_color"></i> <span>Requests</span></a>
                <ul class="collapse list-unstyled" id="element">
                    <li><a href="srequets.php">> <span>Students</span></a></li>
                    <li><a href="frequets.php">> <span>Faculty</span></a></li>
                </ul>
            </li> -->
           
            <li><a href="student_dash.php"><i class="fa fa-home purple_color2"></i> <span>Home</span></a></li>

            
            <li><a href="student_home.php"><i class="fa fa-tasks purple_color2"></i> <span>Menu</span></a></li>
          
            <li><a href="student_fees.php"><i class="fa fa-money blue1_color"></i> <span>Fees</span></a>
            </li>
            <li>
                <a href="student_time_table.php">
                    <i class="fa fa-clock-o blue1_color"></i> <span>Time Table</span></a>
            </li>
            <li class="active">
                <a href="student_result.php" data-toggle="collapse" aria-expanded="false"><i
                        class="fa fa-percent green_color"></i> <span>Grades / Result</span></a>
            </li>
            <li><a href="student_books.php"><i class="fa fa-file purple_color2"></i> <span>Books / Assignment</span></a></li>
            <li><a href="student_events.php"><i class="fa fa-calendar green_color"></i> <span>Events</span></a>
            </li>
            <li><a href="student_faculty.php"><i class="fa fa-user red_color"></i> <span>Faculty Members</span></a>
            </li>
            </li>
            <li><a href="logout.php"><i class="fa fa-sign-out red_color"></i> <span>Logout</span></a>
            </li>
        </ul>
    </div>
</nav>
<!-- end sidebar -->
<!-- right content -->
<div id="content">
    <!-- topbar -->
    <div class="topbar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="full">
                <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                <div class="logo_section">
                    <a href="student_dash.php"><img class="img-responsive" src="images/logo/logo_big.png" alt="#" /></a>
                </div>
                <div class="right_topbar">
                    <div class="icon_info">
                        <ul class="user_profile_dd">
                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown"><img
                                        class="img-responsive rounded-circle" src="images/layout_img/user.png"
                                        alt="#" /><span class="name_user"> <?php echo $name; ?></span></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="student_profile.php">My Profile</a>
                                    <a class="dropdown-item" href="settings.php">Settings</a>
                                    <a class="dropdown-item" href="help.php">Help</a>
                                    <a class="dropdown-item" href="logout.php"><span>Log Out</span> <i
                                            class="fa fa-sign-out"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>