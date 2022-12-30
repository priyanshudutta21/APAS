<?php
include("include/head.php");
include("include/sidebar.php");

// get project data

if(isset($_POST["viewstudent"]))
{
    $rollno = $_POST["rollid"];

    $query = "SELECT * FROM `student_list` WHERE `roll_no` = '{$rollno}' ";
    $data = $conn->query($query);
    $row = $data->fetch_assoc();

}

?>
<!--start paste -->


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Student Details</h1>

    <!-- copy or make new itm inside this comment(copy this template for each page) -->
    <!-- example card is bellow-->

    <!-- Card Start here if need card -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Roll ID</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $row["roll_no"]?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Batch ID </p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $row["batch_id"]?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $row["roll_no"]?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">TeamNo</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $row["team_no"]?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">CGPA</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $row["cgpa"]?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex m-2">
                    <a href="viewstudent.php" class="btn btn-outline-success ms-1" >Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end card here -->

    <!-- end copy -->



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- end paste -->

<?php
include("include/footer.php");
?>

<!-- <a href="#" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-check"></i>
        </span>
        <span class="text">Split Button Success</span>
    </a> -->