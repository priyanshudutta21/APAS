<?php
include("dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">
<style>
        .card{
            padding-top: 6rem;
            padding-bottom: 6rem;
        }
     

    </style>
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
                    <li class="nav-item"><a class="nav-link" href="ProjView.php">Project List</a></li> 
                    <li class="nav-item"><a class="nav-link" href="finalProj.php">Final Project List</a></li>
                    <li class="nav-item"><a class="nav-link" href="TeamList.php">View Team List</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- body -->
    <section class="contact-section bg-primary shadow">
        <div class="row">
            <div class="col-lg-12">
                <div class="container px-5 my-5">
                    <div class="card shadow">
                        <div class="card-body">

                            <!-- php -->
                          
                        <form id="msform1" method="post" action="secondform.php" data-sb-form-api-token="API_TOKEN">

                          <fieldset id="first">
                                <div class="text-success p-2">Student Preference
                                    
                                </div>
                                    <!-- student selection -->
                                    <div class="form-floating mb-3" id="studentform">
                                        <select class="form-select" id="batch" name="batch"
                                            aria-label="Name of the batch" required>
                                            <option value="">SELECT BATCH</option>
                                            <option value="MCA">MCA</option>
                                            <option value="Btech">BTech</option>
                                            <option value="Mtech">Mtech</option>
                                        </select>
                                        <label for="batch">Batch</label>
                                    </div>
                                    <div class="form-floating mb-3" id="studentform">
                                    <input class="form-control" name="year" id ="year" type="number"
                                        placeholder="Year" data-sb-validations="required" required/>
                                        <label for="year">ENTER THE YEAR</label>
                                    </div>
                                    <input type="submit" name="next" id = "addPrefBtn"class="next_btn btn btn-primary"
                                        value="Add project Preference"/>
                                        
                                    </div>
                                    
                                    <!-- student2 end -->

                        </form>
                                </fieldset>

                               
                            <!-- end form -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
  
    </section>

    <!-- project list -->
 
    <!-- end -->

    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Priyanshu Pal Dutta & Subhrajit Saikia</div>
    </footer>
    <!-- Bootstrap core JS-->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
    <!-- <script src="scriptss.js"></script> -->

    <?php
        // $batch = $_POST['batchtext'];
        // $year = $_POST['yeartext'];

        // print $batch;
        // print $year;

    ?>

    <!-- custonm -->

</body>

</html>