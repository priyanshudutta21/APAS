<?php
include("include/head.php");
include("include/sidebar.php");

// LOAD PROFILE
$query = "SELECT * FROM `teacher_list` WHERE `email` = '{$_SESSION["teacheremail"]}'";
$data = $conn->query($query);
$row = $data->fetch_assoc();


// password udate

if(isset($_POST["updatepasswordButton"]))
{
    $currentpssword =  $conn->real_escape_string($_POST["oldpassword"]);
    $newpass =  $conn->real_escape_string($_POST["newPassword"]);
    $cnfpass =  $conn->real_escape_string($_POST["confirmPassword"]);
    

    // matching login
    if($newpass == $cnfpass)
    {
        // verify old logic
        $sqlpass = "SELECT `password` FROM `teacher_list` WHERE `email` = '{$_SESSION["teacheremail"]}'";
        $datapass = $conn->query($sqlpass);
        $rowpass = $datapass->fetch_assoc();

        $oldpass = $rowpass["password"];
        // echo $oldpass;die();

        if( $oldpass == $currentpssword)
        {
            $query = " UPDATE `teacher_list` SET `password`= '{$newpass}' WHERE `email` = '{$_SESSION["teacheremail"]}' ";
            $data = $conn->query($query);
            echo '<script>
            swal({
            title: "Update Successfull",
            icon: "success",
            button: "close",
            type: "success"
            });
            </script>'; 
        }
        else{
            echo '<script>alert("Oldpassword incorrect")</script>';

        }
    }
    else
    {
        echo '<script>alert("password not match")</script>';
    }
   

}

?>
<!--start paste -->


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Profile</h1>

    <!-- copy or make new itm inside this comment(copy this template for each page) -->
    <!-- example card is bellow-->

    <!-- Card Start here if need card -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <section>
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img src="images\teacher_logo.png"
                                        alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                    <h5 class="my-3"><?php echo $row["name"] ?></h5>
                                    <p class="text-muted mb-1"><?php echo $row["designation"] ?></p>
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
                                            <p class="text-muted mb-0"><?php echo $row["name"] ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?php echo $row["email"] ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Phone</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?php echo $row["phone_no"] ?></p>
                                        </div>
                                    </div>
                                    <!-- <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Mobile</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">(098) 765-4321</p>
                                        </div>
                                    </div>-->
                                    <hr> 
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Address</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?php echo $row["address"] ?></p>
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
                                    <p class="text-dark m-2"><?php echo $row["bio"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- password reset -->
    <div class="card shadow mb-4">
        <div class="card-body">

            <section>
                <div class="container px-5 my-5">
                    <h2 class="h3 mb-2 text-gray-800">Password Update</h2>
                    <form class="passwordupdateform" method="post" action="">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="oldpassword" type="password" placeholder="Current Password"
                                data-sb-validations="required" required/>
                            <div class="invalid-feedback" data-sb-feedback="oldpassword:required">Current password is
                                required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="newPassword" type="password" placeholder="New Password"
                                data-sb-validations="required"  required/>
                            <div class="invalid-feedback" data-sb-feedback="newPassword:required">New Password is
                                required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="confirmPassword" type="password"
                                placeholder="Confirm Password" data-sb-validations="required" required />
                            <div class="invalid-feedback" data-sb-feedback="confirmPassword:required">Confirm Password
                                is required.</div>
                        </div>
                        <div class="d-flex justify-content-center mb-2 py-2">
                            <button type="submit" class="btn btn-outline-primary ms-1" name="updatepasswordButton">Change Password</button>
                        </div>
                    </form>
                </div>

            </section>

        </div>
    </div>
    <!-- end password -->
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