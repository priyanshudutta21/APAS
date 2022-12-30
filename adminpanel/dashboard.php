<?php
include("include/head.php");
include("include/sidebar.php");


// projectnumber
$query1 = "SELECT COUNT(project_no) FROM project_list";
$data1= $conn->query($query1);
$result1 = mysqli_fetch_row($data1);
$projnum = $result1[0];

// studentnumbe
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
                                    <img src="./images/60111.jpg"
                                        alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                   <p class="text-muted mb-1 pt-3">Admin</p>
                                   <p class="text-muted mb-1 pt-3">Department of Computer Science and Engineering</p>
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
                                            <p class="text-muted mb-0">Admin</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">admin@tezu.ac.in</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Phone</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">(097) 234-5678</p>
                                        </div>
                                    </div>
                                    <hr>
                                
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Address</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">Tezpur , Assam</p>
                                        </div>
                                    </div>
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