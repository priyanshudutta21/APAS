<?php
include("include/head.php");
include("include/sidebar.php");




// get project to data
if(isset($_POST["editbatch"]))
{
    $batchid =$_POST["batchid"];
    $query = "SELECT * FROM `program` where sid=$batchid ";
    $data  = $conn->query($query);
    $row= $data->fetch_assoc();
}  


    // update
      // update details
      if(isset($_POST["updatebatch"]))
      {
        //$project_no=$row["batch_id"];
        
          $status = $_POST["sts"];
          $batchid =$_POST["batchno"];
            
        //   echo $status;
        //   echo $batchid;
  
           $query2 = "UPDATE `program` SET status='$status'  WHERE sid='$batchid'";
           $data2  = $conn->query($query2);

          
          

          echo '<script>
                                swal({
                                    title: "Updated",
                                    icon: "success",
                                    button: "close",
                                    type: "success"
                                }).then(function() {
                                    window.location = "batchedit.php";
                                });
                                </script>'; 
      }



?>
<!--start paste -->


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Batch Details</h1>


    <!-- Form -->
    <div class="card shadow mb-4 mx-4">

        <div class="card-body mx-3">

            <!-- paste form -->
            <form id="batchupdate" method="post" action="">
                <div class="form-group mb-3">
                    
                </div>
                <div class="form-group mb-3">
                <label for="nameOfBatch">Batch Status</label>
                <select class ="form-control" name="sts" id="batchstatus">
                <option value="0" >Close</option>
                <option  value="1">Open for Teacher</option>
                <option  value="2">Open for Student</option>
                <option  value="3">Open for Final list</option>
                </select>
                    <!-- <input class="form-control" id="batchstatus" type="text" name="bstatus" placeholder="BatchStatus" 
                       data-sb-validations="required" required/> -->
                    <div class="invalid-feedback" data-sb-feedback="batchstatus:required">Batch status is required.
                    </div>
                </div>
              

                <div class="d-grid">
                    <input type="hidden" name="batchno" value="<?Php echo $row["sid"]?>">
                    <button class="btn btn-success btn-lg" name="updatebatch" type="submit">Update</button>
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
  