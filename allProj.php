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
    <title>Project List</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- sweet alert -->
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
                  
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="ProjView.php">Project List</a></li> 
                    <li class="nav-item"><a class="nav-link" href="finalProj.php">Final Project List</a></li>
                   <li class="nav-item"><a class="nav-link" href="TeamList.php">View Team List</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- body -->
    <section class="contact-section bg-black">
        <div class="row">
            <div class="col-lg-12">
                <div class="container px-1 my-2">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="text-danger text-center p-2">Project List</div>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Project Name</th>
                                        <th>Description</th>
                                       <th>Project tag</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    
                                        $batch = $_POST['batch'];
                                        $year= $_POST['year'];

                                        $sql_1 = "SELECT * FROM program WHERE name='$batch' and year='$year'";
                                        $res2 = mysqli_query($conn, $sql_1);
                                        if(mysqli_num_rows($res2)>0)
                                        {
                                            foreach($res2 as $row2)
                                            {
                                                $batchid=$row2['sid'];  
                                            }  
                                        } 

                                        //echo $batchid;
                                        
                                    
                                     $query = "SELECT * FROM `project_list` where batch_id ='$batchid' ";
                                     $data = $conn->query($query);
                                     while($row = $data->fetch_assoc())
                                     {
                                        // condition
                                        // 0 for available
                                        // 1 for Assigned
                                        if ($row["project_status"] == 0) {
                                            $status = '<div class="text-success">Available</div>';
                                        } else {
                                            $status = '<div class="text-danger">Assigned</div>';
                                        }
                                        
                                         echo '
                                         <tr>
                                        <td>'.$row["project_no"].'</td>
                                        <td>'.$row["project_name"].'</td>
                                        <td>'.$row["project_des"].'</td>
                                        <td>'.$row["project_tag"].'</td> 
                                        </tr>';
                                     }
                                    ?>
                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- endlist -->
    <!-- endlist -->
    <!-- end -->

    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Priyanshu Pal Dutta & Subhrajit Saikia</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <!-- custonm -->

</body>

</html>