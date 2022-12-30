<?php
include("include/head.php");
include("include/sidebar.php");


    
    // get details
    if(isset($_POST["editstudent"]))
    {
        $roll_no =$_POST["rollno"];
        $query2 = "SELECT * FROM `student_list` WHERE `roll_no` = '$roll_no';";
        $data2  = $conn->query($query2);
        $row2= $data2->fetch_assoc();

       // echo $row2['name'];
    }
    // update details
    if(isset($_POST["updatestudent"]))
    {
        $team_id = $_POST["tid"];
        $name = $_POST["fullName"];
        $cgpa = $_POST["cgpa"];


        // $query2 = "UPDATE `teacher_list` SET `name`='[value-2]',`email`='[value-3]' WHERE `teacher_id` = $tid";
        // $data2  = $conn->query($query2);
        // $row2= $data2->fetch_assoc();
    }
?>
<!--start paste -->


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Student Details</h1>


    <!-- Form -->
    <div class="card shadow mb-4 mx-4">

        <div class="card-body mx-3">

            <!-- paste form -->
            <form id="studentform" data-sb-form-api-token="API_TOKEN" method="post" action="">
                <div class="mb-3">
                    <!-- <label class="form-label" for="fullName">Full Name</label> -->
                    <input class="form-control" name="fullName" type="text" placeholder="Full Name" value="<?php echo $row2["name"] ?>"
                        data-sb-validations="required"  />
                    <div class="invalid-feedback" data-sb-feedback="fullName:required">Full Name is required.</div>
                </div>
                <div class="mb-3">
                    <!-- <label class="form-label" for="address">Address</label> -->
                    <input class="form-control" name="Team" type="text" placeholder="Team_number" value="<?php ?>"
                        data-sb-validations="required"  />
                    <div class="invalid-feedback" data-sb-feedback="address:required">Team Number is required</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" name="cgpa" type="text" placeholder="CGPA" value="<?php ?>"
                        data-sb-validations="required"  />
                    <!-- <label for="phone">Phone</label> -->
                    <div class="invalid-feedback" data-sb-feedback="phone:required">CGPA is required.</div>
                </div>

                <div class="d-grid">
                    <input type="hidden" name="tid" value="<?php echo $row2["roll_np"] ?>">
                    <button class="btn btn-success btn-lg" name="updatestudent" type="submit">Update</button>
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