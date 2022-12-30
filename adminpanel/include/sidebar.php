<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-star"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin <sup>Console</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>



            <!-- Nav Item - add texher -->
            <li class="nav-item">
                <a class="nav-link" href="addteacher.php">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Add Teacher</span></a>
            </li>

            <!-- Nav Item - teachers -->
            <li class="nav-item">
                <a class="nav-link" href="allteachers.php">
                    <i class="fa fa-paper-plane"></i>
                    <span>All Teachers</span></a>
            </li>

            <!-- prrojects -->
            <li class="nav-item">
                <a class="nav-link" href="viewproject.php">
                   <i class="fa fa-file"></i>
                    <span>Projects</span></a>
            </li>
            <!-- final-->

            <li class="nav-item">
                <a class="nav-link" href="final_list.php">
                    <i class="fa fa-list-ul"></i>
                    <span>Final Projects List</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="clear_list.php">
                    <i class="fa fa-recycle"></i>
                    <span>Clear Projects List</span></a>
            </li>
            <!-- batch -->
            <li class="nav-item">
                <a class="nav-link" href="addbatch.php">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Add batch</span></a>
            </li>

            <!-- students -->
            <li class="nav-item">
                <a class="nav-link" href="viewstudent.php">
                    <i class="fa fa-graduation-cap"></i>
                    <span>students</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="studentissues.php">
                    <i class="fa fa-exclamation"></i>
                    <span>Student Issues</span></a>
            </li>
            <!-- Nav Item - profile  -->
            <li class="nav-item">
                <a class="nav-link" href="profile.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Profile</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["name"] ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->