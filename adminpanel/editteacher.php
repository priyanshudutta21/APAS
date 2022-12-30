<?php
include("include/head.php");
include("include/sidebar.php");


    
    // get details
    if(isset($_POST["editteacher"]))
    {
        $teacherid =$_POST["teacherid"];

        $query2 = "SELECT * FROM `teacher_list` WHERE `teacher_id` = $teacherid";
        $data2  = $conn->query($query2);
        $row2= $data2->fetch_assoc();
    }
    // update details
    if(isset($_POST["updateteacher"]))
    {
        $tid = $_POST["tid"];
        $name = $_POST["fullName"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];
        $mobile = $_POST["mobile"];
        $bio = $_POST["bio"];
        $dept = $_POST["depertmant"];
        $institute = $_POST["institute"];

        // $query2 = "UPDATE `teacher_list` SET `name`='[value-2]',`email`='[value-3]' WHERE `teacher_id` = $tid";
        // $data2  = $conn->query($query2);
        // $row2= $data2->fetch_assoc();
    }
?>
<!--start paste -->


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Teacher Details</h1>


    <!-- Form -->
    <div class="card shadow mb-4 mx-4">

        <div class="card-body mx-3">

            <!-- paste form -->
            <form id="teacherform" data-sb-form-api-token="API_TOKEN" method="post" action="">
                <div class="mb-3">
                    <!-- <label class="form-label" for="fullName">Full Name</label> -->
                    <input class="form-control" name="fullName" type="text" placeholder="Full Name" value="<?php echo $row2["name"] ?>"
                        data-sb-validations="required"  />
                    <div class="invalid-feedback" data-sb-feedback="fullName:required">Full Name is required.</div>
                </div>
                <div class="mb-3">
                    <!-- <label class="form-label" for="address">Address</label> -->
                    <input class="form-control" name="address" type="text" placeholder="Address" value="<?php ?>"
                        data-sb-validations="required"  />
                    <div class="invalid-feedback" data-sb-feedback="address:required">Address is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" name="phone" type="text" placeholder="Phone" value="<?php ?>"
                        data-sb-validations="required"  />
                    <!-- <label for="phone">Phone</label> -->
                    <div class="invalid-feedback" data-sb-feedback="phone:required">Phone is required.</div>
                </div>
                <div class="mb-3">
                    <!-- <label class="form-label" for="mobile">Mobile</label> -->
                    <input class="form-control" name="mobile" type="text" placeholder="Mobile" value="<?php ?>"
                        data-sb-validations="required"  />
                    <div class="invalid-feedback" data-sb-feedback="mobile:required">Mobile is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="bio" type="text" placeholder="Bio" value="<?php ?>"
                        data-sb-validations="required" ></textarea>
                    <!-- <label for="bio">Bio</label> -->
                    <div class="invalid-feedback" data-sb-feedback="bio:required">Bio is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" name="depertmant" type="text" placeholder="Depertmant" value="<?php ?>"
                        data-sb-validations="required"  />
                    <!-- <label for="depertmant">Depertmant</label> -->
                    <div class="invalid-feedback" data-sb-feedback="depertmant:required">Depertmant is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" name="institute" type="text" placeholder="Institute" value="<?php ?>"
                        data-sb-validations="required"  />
                    <!-- <label for="institute">Institute</label> -->
                    <div class="invalid-feedback" data-sb-feedback="institute:required">Institute is required.</div>
                </div>

                <div class="d-grid">
                    <input type="hidden" name="tid" value="<?php echo $row2["teacher_id"] ?>">
                    <button class="btn btn-success btn-lg" name="updateteacher" type="submit">Update</button>
                </div>
            </form>
            <!-- end form -->
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

<!-- <a href="#" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-check"></i>
        </span>
        <span class="text">Split Button Success</span>
    </a> -->