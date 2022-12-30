<?php
include("include/head.php");
include("include/sidebar.php");


// insert  to database
if(isset($_POST["addbatch"]))
{
    $batchName = $_POST["bname"];
    $batchYear = $_POST["byear"];
    
    $query = "INSERT INTO `program`(`name`, `year`) VALUES ('$batchName','$batchYear')";
    $data = $conn->query($query);
    echo '<script>
	swal({
	    title: "Batch added",
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


    <!-- Form -->
    <div class="card shadow mb-4 mx-4">
        <div class="card-body mx-3">
            <h5 class="text-primary text-center">Add new batch</h5>
            <!-- paste form -->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="post">
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                        <select class="form-control" id="name" name="bname"
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
                    <input class="form-control" id="year" type="text" name="byear" placeholder="Year"
                        data-sb-validations="required" required />
                    <div class="invalid-feedback" data-sb-feedback="year:required">Year is required.</div>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg " id="submitButton" name="addbatch"
                        type="submit">Insert</button>
                </div>
            </form>
            <!-- end form -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 m-2">
            <div class="card shadow mb-4">
                <div class="card-body">
                <h5 class="text-primary text-center">All batch</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Year</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                        // delete 
                                        if(isset($_POST["deletebatch"]))
                                        {
                                            $bid = $_POST["batchid"];
                                            $query = "DELETE FROM `program` WHERE `sid` = $bid";
                                            $process = $conn->query($query);
                                            echo '<script>
									        swal({
										        title: "Deleted",
										        icon: "success",
										        button: "close",
										        type: "success"
									        });
									        </script>'; 
                                        // echo '<meta http-equiv="refresh" content= "2;URL=?deleted" />'; 

                                        }
                                        // get  list
                                        $query = "SELECT * FROM `program` ";
                                        $data = $conn->query($query);
                                        while($row = $data->fetch_assoc())
                                        {
                                            echo '

                                            <tr>
                                            <td>'.$row["sid"].'</td>
                                            <td>'.$row["name"].'</td>
                                            <td>'.$row["year"].'</td>
                                            <td>
                                            

                                            <!-- delete -->
                                            <form action="" method="post" class="d-inline p-2">
												<input type="hidden" name="batchid" value='.$row["sid"].'>
												<button class="btn btn-danger btn-circle" type="submit" name="deletebatch">
												<i class="fas fa-trash "></i>
												</button>
											</form>
                                            <form action="batchedit.php" method="post" class="d-inline p-2">
                                            <input type="hidden" name="batchid" value='.$row["sid"].'>
                                            <button class="btn btn-success btn-circle" type="submit" name="editbatch">
                                           <i class="fas fa-pen "></i>
                                            </button>
                                         </form>
                                            </td>
                                        
                                           
                                            
                                        </tr>

                                            ';
                                        }
                                        ?>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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