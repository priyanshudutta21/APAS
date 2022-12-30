<?php
include("include/head.php");
include("include/sidebar.php");

// get project data



?>
<!--start paste -->


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Student Details</h1>

    <!-- copy or make new itm inside this comment(copy this template for each page) -->
    <!-- example card is bellow-->

    <!-- Card Start here if need card -->
    
    
    
    
    
    
    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Roll no</th>
                                            <th>Name</th>
                                            <th>CGPG</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        <?php
                                        if(isset($_POST["viewstudent"]))
                                        {
                                            $tmid = $_POST["team_id"];
                                        
                                            $query = "SELECT * FROM `student_list` WHERE `team_no` = '{$tmid}' ";
                                            $data = $conn->query($query);
                                        
                                         while($row = $data->fetch_assoc()){    
                                            echo '
                                            <tr>
                                            <td>'.$row["roll_no"].'</td>
                                            <td>'.$row["name"].'</td>
                                            <td>'.$row["cgpa"].'</td>
                                            
                                            ';
                                        }
                                        }
                                        ?>

                      
                                       
                                    </tbody>
                                </table>
                                    <div class="d-flex m-2">
                                            <a href="viewproject.php" class="btn btn-outline-success ms-1" >Back</a>
                                       </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

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

<!-- <a href="#" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-check"></i>
        </span>
        <span class="text">Split Button Success</span>
    </a> -->