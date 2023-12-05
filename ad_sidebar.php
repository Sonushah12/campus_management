<!-- Sidebar  -->
<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section">
                <a href="admin_dash.php"><img class="logo_icon img-responsive" src="images/logo/logo_small.png"
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
                    
                            $name = $_SESSION['email'];
                            echo $name;

                    ?>
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <h4>Administrator</h4>
        <ul class="list-unstyled components">


        <li><a href="admin_dash.php"><i class="fa fa-home blue1_color"></i> <span>Home</span></a>
            </li>

        

        <li>
                <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-check-square-o purple_color"></i> <span>Requests</span></a>
                <ul class="collapse list-unstyled" id="element">
                    <li><a href="srequets.php">> <span>Students</span></a></li>
                    <li><a href="frequets.php">> <span>Faculty</span></a></li>
                </ul>
            </li>
           
            <!-- <li><a href="tables.php"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
            <li>
                <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                <ul class="collapse list-unstyled" id="apps">
                    <li><a href="email.php">> <span>Email</span></a></li>
                    <li><a href="calendar.php">> <span>Calendar</span></a></li>
                    <li><a href="media_gallery.php">> <span>Media Gallery</span></a></li>
                </ul>
            </li> -->

            <li>
                <a href="#fees" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-money purple_color"></i> <span>Fees</span></a>
                <ul class="collapse list-unstyled" id="fees">
                    <li><a href="make_fees.php">> <span>Make Fees</span></a></li>
                    <li><a href="paid_unpaid.php">> <span>Paid / Unpaid</span></a></li>
                    <li><a href="see_fees.php">> <span>Update</span></a></li>
                </ul>
            </li>




            <li><a href="admin_img.php"><i class="fa fa-image blue1_color"></i> <span>Add Photos</span></a>
            </li>
            <li>
                <a href="admin_faculty.php">
                    <i class="fa fa-user red_color"></i> <span>Faculties</span></a>
            </li>

            <!-- <li class="active">
                <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-clone yellow_color"></i> <span>Additional
                        Pages</span></a>
                <ul class="collapse list-unstyled" id="additional_page">
                    <li>
                        <a href="profile.php">> <span>Profile</span></a>
                    </li>
                    <li>
                        <a href="project.php">> <span>Projects</span></a>
                    </li>
                    <li>
                        <a href="login.php">> <span>Login</span></a>
                    </li>
                    <li>
                        <a href="404_error.php">> <span>404 Error</span></a>
                    </li>
                </ul>
            </li>
            <li><a href="map.php"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
            <li><a href="charts.php"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a>
            </li>
            <li><a href="settings.php"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a>
            </li> -->
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
                    <a href="admin_dash.php"><img class="img-responsive" src="images/logo/logo_big.png" alt="#" /></a>
                </div>
                <div class="right_topbar">
                    <div class="icon_info">
                        <ul class="user_profile_dd">
                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown"><img
                                        class="img-responsive rounded-circle" src="images/layout_img/user.png"
                                        alt="#" /><span class="name_user"><?php echo $name; ?></span></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="profile.php">My Profile</a>
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