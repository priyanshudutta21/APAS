<?php
include("include/head.php");
include("include/sidebar.php");


?>
<!--start paste -->


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- copy or make new itm inside this comment(copy this template for each page) -->
    <!-- example card is bellow-->

    <!-- Card Start here if need card -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row" >
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-body">
                        
                                    <div class="card-body mx-3">
                                        <h5 class="text-primary text-center">Project Allocation List</h5>
                                        <!-- paste form -->
                                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="post" action="finalview.php">
                                            <div class="mb-3">
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
                                            <div class="mb-3">
                                                <label class="form-label" for="year">Year</label>
                                                    <input class="form-control" name="year" id ="year" type="number"
                                        placeholder="Year" data-sb-validations="required" required/>
                                                <div class="invalid-feedback" data-sb-feedback="year:required">Year is required.</div>
                                            </div>
                                            <div class="d-grid">
                                                <button class="btn btn-primary btn-lg " id="submitButton" name="addbatch"
                                                    type="submit">Fatch</button>
                                            </div>
                                        </form>
                                        <!-- end form -->
                                    </div>
                                </div>
                             
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