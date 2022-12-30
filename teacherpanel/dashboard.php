<?php
include("include/head.php");
include("include/sidebar.php");

// get profile data
$pquery = "SELECT * FROM `teacher_list` WHERE `email` = '{$_SESSION["teacheremail"]}'";
$pdata = $conn->query($pquery);
$profrow = $pdata->fetch_assoc();

// projectnumber
$query1 = "SELECT COUNT(project_no) FROM project_list";
$data1= $conn->query($query1);
$result1 = mysqli_fetch_row($data1);
$projnum = $result1[0];

// studentnumber
$query2 = "SELECT COUNT(roll_no) FROM `student_list` ";
$data2= $conn->query($query2);
$result2 = mysqli_fetch_row($data2);
$studnum = $result2[0];

$query3 = "select round((SELECT COUNT(project_no) FROM project_list WHERE project_status=1) / (SELECT COUNT(project_no) FROM project_list)*100) FROM project_list";
$data3= $conn->query($query3);
$result3 = mysqli_fetch_row($data3);
$assigned = $result3[0];
// assignedproject
?>
<!--start paste -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Projects</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $projnum?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Students</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $studnum?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">project Assigned
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $assigned?>%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $assigned?>%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                10jun-2022</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="time"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow m-2">
                <div class="card-body">
                <section>
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img src='images\teacher_logo.png'
                                        alt="Profile Photo" class="rounded-circle img-fluid" style="width: 150px;">
                                    <p class="text-muted mb-1 pt-3"><?php echo $profrow["designation"]?></p>
                                    <p class="text-muted mb-4">Tezpur University</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Full Name</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?php echo $profrow["name"]?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?php echo $profrow["email"]?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Phone</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?php echo $profrow["phone_no"]?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Address</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?php echo $profrow["address"]?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12 m-2">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="mb-2 text-muted ">Bio</h3>
                                    <p class="text-dark m-2"><?php echo $profrow["bio"]?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                </div>
            </div>
        </div>


    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->






<!-- end paste -->

<?php
include("include/footer.php");
?>