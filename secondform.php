<?php
include("dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MINOR PROJECT</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        .show {
            animation: fadeIn 1.5s;
            display: block;
        }

        .hide {
            animation: fadeIn 1.5s;
            display: none;
        }
    </style>

    <script>
        $(document).ready(function () {
            $("#noOfStudent").change(function () {
                $(this).find("option:selected").each(function () {
                    var optionValue = $(this).attr("value");
                    // console.log(optionValue);
                    if (optionValue == '1') {
                        $(".studentform2").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else {
                        $(".studentform2").show();
                    }
                });
            }).change();
        });
    </script>

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">APAS</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle"data-toggle="dropdown">Projects</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">MCA</a>
                                <a class="dropdown-item" href="#">M.Tech</a>
                                <a class="dropdown-item" href="#">B.Tech</a> 
                            </div>
                        </li> 
                    <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    


    <?php
if(isset($_POST['next'])){
    $batch = $_POST["batch"];
    $year = $_POST["year"];

    

   
    
    $batchid=0;
  

// insert to db
            
    $sql_1 = "SELECT * FROM program WHERE name='$batch' and year='$year' and status='2' ";
     $res2 = mysqli_query($conn, $sql_1);
     if(mysqli_num_rows($res2)>0)
     {
         foreach($res2 as $row2)
         {
             $batchid=$row2['sid'];  
         }  
     } 
}

    if($batchid)
    {

        session_start();

        // set session value
        $_SESSION["batchid"] = $batchid;
    
        ?>

    <section class="contact-section bg-primary shadow">
        <div class="row">
            <div class="col-lg-12">
                <div class="container px-5 my-5">
                    <div class="card shadow">

                    <div class="card-body">
                        <fieldset id="second">
                                <form id="msform2" method="post" action="finalsubmit.php" data-sb-form-api-token="API_TOKEN">
                                    <div class="form-floating mb-3" id="studentform">
                                        <select class="form-select" id="noOfStudent" name="noOfStudent"
                                            aria-label="No of Student">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                        </select>
                                        <label for="noOfStudent">No of Student</label>
                                    </div>


                                    <!-- student form1 -->
                                    <div class="studentform1">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="s1fullName" type="text"
                                                placeholder="Full Name" data-sb-validations="required" required/>
                                            <label for="fullName">Full Name</label>
                                            <div class="invalid-feedback" data-sb-feedback="fullName:required">Full Name
                                                is
                                                required.
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="s1rollNumber" type="text"
                                                placeholder="Roll Number" data-sb-validations="required" required/>
                                            <label for="rollNumber">Roll Number</label>
                                            <div class="invalid-feedback" data-sb-feedback="rollNumber:required">Roll
                                                Number
                                                is
                                                required.</div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="s1cgpa" type=number step=0.01 placeholder="CGPA"
                                                data-sb-validations="required" required/>
                                            <label for="cgpa">CGPA</label>
                                            <div class="invalid-feedback" data-sb-feedback="cgpa:required">CGPA is
                                                required.
                                            </div>
                                        </div>
                                       

                                    </div>
                                    <!-- student1 end -->

                                    <!-- student2 form1 -->
                                    <div class="studentform2">
                                        <div class="text-success p-2">Enter second student details</div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="s2fullName" type="text"
                                                placeholder="Full Name" data-sb-validations="required" />
                                            <label for="fullName">Full Name</label>
                                            <div class="invalid-feedback" data-sb-feedback="fullName:required">Full Name
                                                is
                                                required.
                                            </div>
                                        </div>
                                        
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="s2rollNumber" type="text"
                                                placeholder="Roll Number" data-sb-validations="required" />
                                            <label for="rollNumber">Roll Number</label>
                                            <div class="invalid-feedback" data-sb-feedback="rollNumber:required">Roll
                                                Number
                                                is
                                                required.</div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="s2cgpa" type=number step=0.01 placeholder="CGPA"
                                                data-sb-validations="required"/>
                                            <label for="cgpa">CGPA</label>
                                            <div class="invalid-feedback" data-sb-feedback="cgpa:required">CGPA is
                                                required.
                                            </div>
                                        </div>
                                </div>
                                    <!-- project preference -->
                                    <div class="py-2 projectpref">
                                        <div class="text-success p-2">Project Preference</div>

                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="preference1" aria-label="Preference 1">
                                            <option>NA</option>
                                                <?php
                                            $pquery = "SELECT * FROM `project_list` WHERE batch_id = $batchid ";
                                            $data = $conn->query($pquery);
                                            while ($rows = $data->fetch_assoc()) {
                                                // 0 for available
                                                // 1 for Assigned
                                                echo '<option value="'.$rows["project_no"].'">'.$rows["project_name"].'</option>';
                                            }
                                        ?>
                                            </select>
                                            <label for="preference1">Preference 1</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="preference2" aria-label="Preference 2">
                                            <option>NA</option>
                                                <?php
                                            $pquery = "SELECT * FROM `project_list` WHERE batch_id ='$batchid'";
                                            $data = $conn->query($pquery);
                                            while ($rows = $data->fetch_assoc()) {
                                                // 0 for available
                                                // 1 for Assigned
                                                echo '<option value="'.$rows["project_no"].'">'.$rows["project_name"].'</option>';
                                            }
                                        ?>
                                            </select>
                                            <label for="preference2">Preference 2</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="preference3" aria-label="Preference 3">
                                            <option>NA</option>
                                                <?php
                                            $pquery = "SELECT * FROM `project_list` WHERE batch_id ='$batchid'";
                                            $data = $conn->query($pquery);
                                            while ($rows = $data->fetch_assoc()) {
                                                // 0 for available
                                                // 1 for Assigned
                                                echo '<option value="'.$rows["project_no"].'">'.$rows["project_name"].'</option>';
                                            }
                                        ?>
                                            </select>
                                            <label for="preference3">Preference 3</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="preference4" aria-label="Preference 4">
                                            <option>NA</option>
                                                <option>NA</option>
                                                <?php
                                            $pquery = "SELECT * FROM `project_list` WHERE batch_id ='$batchid'";
                                            $data = $conn->query($pquery);
                                            while ($rows = $data->fetch_assoc()) {
                                                // 0 for available
                                                // 1 for Assigned
                                                echo '<option value="'.$rows["project_no"].'">'.$rows["project_name"].'</option>';
                                            }
                                        ?>
                                            </select>
                                            <label for="preference4">Preference 4</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="preference5" aria-label="Preference 5">
                                            <option>NA</option>
                                                <?php
                                            $pquery = "SELECT * FROM `project_list` WHERE  batch_id ='$batchid' ";
                                            $data = $conn->query($pquery);
                                            while ($rows = $data->fetch_assoc()) {
                                                // 0 for available
                                                // 1 for Assigned
                                                echo '<option value="'.$rows["project_no"].'">'.$rows["project_name"].'</option>';
                                            }
                                        ?>
                                            </select>
                                            <label for="preference4">Preference 5</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="rmk" type="text"
                                                placeholder="Remark" data-sb-validations="required"/>
                                            <label for="fullName">Remark</label>
                                            <div class="invalid-feedback" data-sb-feedback="fullName:required">Remark
                                                is
                                                required.
                                            </div>
                                        </div>

                                        <!-- end preference -->


                                        <div class="d-grid">
                                           <a class="pre_btn btn btn-danger btn-lg m-2" href="projectselection.php">Previous</a>
                                            <button class="btn btn-danger btn-lg m-2" id="submittodb"
                                                name="studentpref" type="submit">Submit</button>
                                        </div>

                                    </form>
                                </fieldset>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
    </section>
                                    

                                <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Priyanshu Pal Dutta & Subhrajit Saikia</div>
    </footer>

<?php
}
else{
    echo '<script>
    swal({
        title: "Admin not allowed select projects for this year ",
        icon: "warning",
        button: "close",
        type: "unsuccess"
    }).then(function() {
        window.location = "projectselection.php";
    });
    </script>'; 
    //header("refresh:2; url=projectselection.php");
}


?>
</body>
</html>