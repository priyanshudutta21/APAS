<?php
include("include/head.php");
include("include/sidebar.php");


// insert project to database
if(isset($_POST["addprojectButton"]))
{
    $year = $_POST["year"];
    $batch = $_POST["batchname"];
    $prname = $_POST["projectname"];
    $prdes = $conn->real_escape_string($_POST["projectdesc"]);
    $tag = $conn->real_escape_string($_POST["projecttag"]);
    $batchid=0;

    $temail=$_SESSION["teacheremail"];
    $sql_tea = "SELECT teacher_id FROM teacher_list WHERE email='$temail'";
    $res1 = mysqli_query($conn, $sql_tea);
    if(mysqli_num_rows($res1)>0)
    {
         foreach($res1 as $row1)
         {
   
         $tid=$row1['teacher_id'];
          }
     }
     $sql_1 = "SELECT sid FROM program WHERE name='$batch' and year='$year' and status= '1' ";
     $res2 = mysqli_query($conn, $sql_1);
     if(mysqli_num_rows($res2)>0)
     {
         foreach($res2 as $row2)
         {
             $batchid=$row2['sid'];  
         }  
     }
 
     if($batchid)
     {
         
        // echo $year;
         //echo $batch;
         //echo $prname;
         //echo $prdes;
        // echo $tid;  
        // echo $batchid;
         //echo $tag;
          

            
             $sqlinst = "INSERT INTO `project_list`(`project_name`, `project_des`, `project_tag`, `teacher_id`, `batch_id`) VALUES ('$prname','$prdes','$tag','$tid','$batchid')"; 
             if(!mysqli_query($conn,$sqlinst))   
                 {
                    echo '<script>
                    swal({
                        title: "Project Not added",
                        icon: "unsuccess",
                        button: "close",
                        type: "unsuccess"
                    });
                    </script>';
                 }
             else
                 {
                    echo '<script>
                    swal({
                        title: "Project added",
                        icon: "success",
                        button: "close",
                        type: "success"
                    });
                    </script>'; 
                 }
        }
        else
        {   
            echo '<script>
            swal({
                title: "Admin not allowed insert project for this year ",
                icon: "warning",
                button: "close",
                type: "unsuccess"
            });
            </script>'; 
          //  echo'<script type="text/javascript">alert("Admin not allowed insert project for this year !!")</script>';
        } 

    // $query = "INSERT INTO `project_list`(`project_name`, `project_des`, `project_tag`, `batch_id`) 
    // VALUES ('$projectname','$description','$tag','$batch')";
    // $data = $conn->query($query);
    

    // echo '<meta http-equiv="refresh" content= "2;URL=?added" />'; 

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
                    <label for="batch" required>Select Batch</label>
                    
                    
                   <select class="form-control" name="batchname" aria-label="Batch" required>
                        <option value="">None</option>
                        <option value="MCA">MCA</option>
                        <option value="Btech">Btech</option>
                        <option value="Mtech">Mtech</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="nameOfProject">Project Details :</label>
                    <input class="form-control" id="nameOfProject" name="projectname" type="text" placeholder="Name Of Project"
                        data-sb-validations="required" required/>
                    <div class="invalid-feedback" data-sb-feedback="nameOfProject:required">Name Of Project is
                        required.</div>
                </div>
                <div class="form-group mb-3">
                    <textarea class="form-control" id="projectDescription" name="projectdesc" type="text" placeholder="Project Description"
                        style="height: 10rem;" data-sb-validations="required" required></textarea>
                    <div class="invalid-feedback" data-sb-feedback="projectDescription:required">Project Description
                        is required.</div>
                </div>
                <div class="form-group mb-3">
                    <input class="form-control" id="projectTags" type="text" name="projecttag" placeholder="Project tags"
                        data-sb-validations="required" required/>
                    <label for="projectTags">eg: Ai,python,Web,ML</label>
                    <div class="invalid-feedback" data-sb-feedback="projectTags:required">Project tags is required.
                    </div>
                </div>

                <div class="d-grid">
                    <button class="btn btn-success btn-lg" name="addprojectButton" type="submit">Add project</button>
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