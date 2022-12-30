<?php
include("dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">
<style>
        .card{
            padding-top: 5rem;
            padding-bottom: 6rem;
        }
     

    </style>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Project View</title>
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
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="ProjView.php">Project List</a></li> 
                    <li class="nav-item"><a class="nav-link" href="finalProj.php">Final Project List</a></li>
                   <li class="nav-item"><a class="nav-link" href="TeamList.php">View Team List</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- body -->
    <section class="contact-section bg-black">

   

<!-- Page Heading -->

<!-- copy or make new itm inside this comment(copy this template for each page) -->
<!-- example card is bellow-->

<!-- Card Start here if need card -->
<div class="card mb-4">
                    <div class="card-body">
                    
                                <div class="card-body mx-3">
                                    <h5 class="text-primary text-center">View All Project List</h5>
                                    <!-- paste form -->
                                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="post" action="allProj.php">
                                        <div class="mb-4">
                                            <label class="form-label" for="name">Batch</label>
                                    <select class="form-control" id="batch" name="batch"
                                        aria-label="Name of the batch" required>
                                        <option value="">SELECT BATCH</option>
                                        <option value="MCA">MCA</option>
                                        <option value="Btech">BTech</option>
                                        <option value="Mtech">Mtech</option>
                                    </select>
                                            <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="year">Year</label>
                                                <input class="form-control" name="year" id ="year" type="number"
                                    placeholder="Year" data-sb-validations="required" required/>
                                            <div class="invalid-feedback" data-sb-feedback="year:required">Year is required.</div>
                                        </div>
                                        <div class="card-body">
                                            <button class="btn btn-primary btn-lg " id="submitButton" name="addbatch"
                                                type="submit">Fetch</button>
                                        </div>
                                    </form>
                                    <!-- end form -->
                                </div>
                            </div>
                         
                </div>
    </div>  

<!-- end card here -->

<!-- end copy -->





    
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <!-- custonm -->

</body>

</html>