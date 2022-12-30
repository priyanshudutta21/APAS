<?php
include("include/head.php");
include("include/sidebar.php");


// get project to data
if(isset($_POST["editproject"]))
{
    $projectid =$_POST["projectid"];

    $query = "SELECT * FROM `project_list` WHERE `project_no` = $projectid";
    $data  = $conn->query($query);
    $row= $data->fetch_assoc();
}
    // echo '<meta http-equiv="refresh" content= "2;URL=?added" />'; 

    // update
      // update details
      if(isset($_POST["updateproject"]))
      {
          $project_no = $_POST["projectno"];

          $projectyear = $_POST["year"];
          $projectname = $_POST["projectname"];
          $projectbatch = $_POST["batchname"];
          $projectdesc = $_POST["projectdesc"];
          $projecttag = $_POST["projecttag"];
         
  
          $query2 = "UPDATE `project_list` SET `project_name`='$projectname',`project_des`='$projectdesc', `batch_id`='$projectbatch',`project_tag`='$projecttag' WHERE `project_no` = $project_no";
        //   echo $query2;die();
          $data2  = $conn->query($query2);
          echo '<script>
          swal({
              title: "Updated",
              icon: "success",
              button: "close",
              type: "success"
          }).then(function() {
            window.location = "viewproject.php";
        });
          </script>';
           
      }


?>
<!--start paste -->


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Project Details</h1>


    <!-- Form -->
    <div class="card shadow mb-4 mx-4">

        <div class="card-body mx-3">

            <!-- paste form -->
            <form id="projectaddform" method="post" action="">
                <div class="form-group mb-3">
                    <label for="year">Year</label>
                    <input class="form-control" type="number" name="year" min="1900" max="2099" step="1" value="2022"
                        data-sb-validations="required" required />
                    <div class="invalid-feedback" data-sb-feedback="year:required">date is required.</div>
                </div>

                <div class="form-group mb-3">
                    <label for="batch">Select Batch</label>
                    <select class="form-control" name="batchname" aria-label="Batch">
                        <?php
                        $q = "SELECT * FROM `PROGRAM`";
                        $d = $conn->query($q);
                        while($r = $d->fetch_assoc())
                        {
                            echo '<option name="batchname" value='.$r["sid"].'>'.$r["name"].'</option>';
                        }
                        ?>
                        
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="nameOfProject">Project Details :</label>
                    <input class="form-control" id="nameOfProject" name="projectname" type="text" placeholder="Name Of Project" value="<?Php echo $row["project_name"]?>"
                        data-sb-validations="required" required/>
                    <div class="invalid-feedback" data-sb-feedback="nameOfProject:required">Name Of Project is
                        required.</div>
                </div>
                <div class="form-group mb-3">
                    <textarea class="form-control" id="projectDescription" name="projectdesc" type="text" placeholder="Project Description"
                        style="height: 10rem;" data-sb-validations="required" required><?Php echo $row["project_des"]?></textarea>
                    <div class="invalid-feedback" data-sb-feedback="projectDescription:required">Project Description
                        is required.</div>
                </div>
                <div class="form-group mb-3">
                    <input class="form-control" id="projectTags" type="text" name="projecttag" placeholder="Project tags" value="<?Php echo $row["project_tag"]?>"
                        data-sb-validations="required" required/>
                    <label for="projectTags">eg: Ai,python,Web,ML</label>
                    <div class="invalid-feedback" data-sb-feedback="projectTags:required">Project tags is required.
                    </div>
                </div>

                <div class="d-grid">
                    <input type="hidden" name="projectno" value="<?Php echo $row["project_no"]?>">
                    <button class="btn btn-success btn-lg" name="updateproject" type="submit">Update</button>
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