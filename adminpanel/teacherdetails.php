<?php
include("include/head.php");
include("include/sidebar.php");

// get project data

if(isset($_POST["showteacher"]))
{
    $tID = $_POST["teacherid"];

    $query = "SELECT * FROM `teacher_list` WHERE `teacher_id` = '{$tID}' ";
    $data = $conn->query($query);
    $row = $data->fetch_assoc();

}

?>
<!--start paste -->


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Project Details</h1>

    <!-- copy or make new itm inside this comment(copy this template for each page) -->
    <!-- example card is bellow-->

    <!-- Card Start here if need card -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                <div class="card">
                                <div class="card-body text-center">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                        alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                    <h5 class="my-3"><?php //echo $row["phone"];
                                    echo "+91123456789(rmv this add in db";?></h5>
                                    <p class="text-muted mb-1">Jorhat</p>
                                    <p class="text-muted mb-4">Assam</p>

                                </div>
                            </div>

                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Teacher ID</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $row["teacher_id"]?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $row["name"]?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $row["email"]?></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="d-flex m-2 ">
                    <a href="allteachers.php" class="btn btn-outline-success m-2 " >Back</a><br>
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