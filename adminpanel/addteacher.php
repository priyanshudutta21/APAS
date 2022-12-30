<?php
include("include/head.php");
include("include/sidebar.php");


// insert  to database
if(isset($_POST["addprojectButton"]))
{
    
    $name = $_POST[''];
    $email = $_POST['']; 
    $password = $_POST[''];
    $address = $_POST[''];
    $phone = $_POST[''];
    $mobile = $_POST[''];
    $bio = $_POST[''];
    $dept = $_POST[''];
    $institute = $_POST[''];
    
    $query = "";
    $data = $conn->query($query);
    echo '<script>
	swal({
	    title: "Teacher added",
	    icon: "success",
	    button: "close",
	    type: "success"
	});
	</script>'; 

    // echo '<meta http-equiv="refresh" content= "2;URL=?added" />'; 

}
?>
<!--start paste -->


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Teacher Details</h1>


    <!-- Form -->
    <div class="card shadow mb-4 mx-4">

        <div class="card-body mx-3">

            <!-- paste form -->
            <form id="teacherform" data-sb-form-api-token="API_TOKEN">
                <div class="mb-3">
                    <!-- <label class="form-label" for="fullName">Full Name</label> -->
                    <input class="form-control" name="fullName" type="text" placeholder="Full Name"
                        data-sb-validations="required" required />
                    <div class="invalid-feedback" data-sb-feedback="fullName:required">Full Name is required.</div>
                </div>
                <div class="mb-3">
                    <!-- <label class="form-label" for="emailAddress">Email Address</label> -->
                    <input class="form-control" name="emailAddress" type="email" placeholder="Email Address"
                        data-sb-validations="required,email" required />
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.
                    </div>
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not
                        valid.</div>
                </div>
                <div class="mb-3">
                    <!-- <label class="form-label" for="address">Address</label> -->
                    <input class="form-control" name="address" type="text" placeholder="Address"
                        data-sb-validations="required" required/>
                    <div class="invalid-feedback" data-sb-feedback="address:required">Address is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" name="phone" type="text" placeholder="Phone"
                        data-sb-validations="required" required/>
                    <!-- <label for="phone">Phone</label> -->
                    <div class="invalid-feedback" data-sb-feedback="phone:required">Phone is required.</div>
                </div>
                <div class="mb-3">
                    <!-- <label class="form-label" for="mobile">Mobile</label> -->
                    <input class="form-control" name="mobile" type="text" placeholder="Mobile"
                        data-sb-validations="required" required/>
                    <div class="invalid-feedback" data-sb-feedback="mobile:required">Mobile is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="bio" type="text" placeholder="Bio"
                        data-sb-validations="required" required></textarea>
                    <!-- <label for="bio">Bio</label> -->
                    <div class="invalid-feedback" data-sb-feedback="bio:required">Bio is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" name="depertmant" type="text" placeholder="Depertmant"
                        data-sb-validations="required" required/>
                    <!-- <label for="depertmant">Depertmant</label> -->
                    <div class="invalid-feedback" data-sb-feedback="depertmant:required">Depertmant is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" name="institute" type="text" placeholder="Institute"
                        data-sb-validations="required" required/>
                    <!-- <label for="institute">Institute</label> -->
                    <div class="invalid-feedback" data-sb-feedback="institute:required">Institute is required.</div>
                </div>
                <div class="mb-3">
                    <!-- <label class="form-label" for="password">Password</label>? -->
                    <input class="form-control" name="password" type="password" placeholder="Password"
                        data-sb-validations="required" required />
                    <div class="invalid-feedback" data-sb-feedback="password:required">Password is required.</div>
                </div>

                <div class="d-grid">
                    <button class="btn btn-success btn-lg" name="addprojectButton" type="submit">Add Teacher</button>
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