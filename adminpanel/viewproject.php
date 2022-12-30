<?php
include("include/head.php");
include("include/sidebar.php");
?>
<!--start paste -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Project Details</h1>
                    <!-- Tales -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Project id</th>
                                            <th>Project Name</th>
                                            <th>Description</th>
                                            <!-- <th>tags </th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        <?php
                                       
                                        // delete project
                                        // if(isset($_POST["deleteproject"]))
                                        // {
                                        //     $project_id = $_POST["projectid"];
                                        //     $query = "DELETE FROM `project_list` WHERE `project_no` = $project_id";
                                        //     $process = $conn->query($query);
                                        //     echo '<script>
									    //     swal({
										//         title: "Deleted",
										//         icon: "success",
										//         button: "close",
										//         type: "success"
									    //     });
									    //     </script>'; 
                                        // echo '<meta http-equiv="refresh" content= "2;URL=?deleted" />'; 

                                        // }
                                        // get project list
                                        $query = "SELECT * FROM `project_list` ";
                                        $data = $conn->query($query);
                                        while($row = $data->fetch_assoc())
                                        {
                                            echo '

                                            <tr>
                                            <td>'.$row["project_no"].'</td>
                                            <td>'.$row["project_name"].'</td>
                                            <td>'.$row["project_des"].'</td>
                                            <td>
                                            
                                            <!-- View  -->
                                            <form action="projectdetails.php" method="post" class="d-inline p-2">
												<input type="hidden" name="projectid" value='.$row["project_no"].'>
												<button class="btn btn-success" type="submit" name="editproject">
												<i class="fas fa-info "></i><span> Details</span>
												</button>
											</form>

                                            <!-- edit -->
                                            <!--<form action="editproject.php" method="post" class="d-inline p-2"> -->
											<!--	<input type="hidden" name="projectid" value='.$row["project_no"].'> -->
											<!--	<button class="btn btn-info" type="submit" name="editproject"> -->
											<!--	<i class="fas fa-pen "></i><span> Edit</span> -->
											<!--	</button> -->
											<!--</form> -->

                                            <!-- delete -->
                                            <!--<form action="" method="post" class="d-inline p-2"> -->
											<!--	<input type="hidden" name="projectid" value='.$row["project_no"].'> -->
											<!--	<button class="btn btn-danger btn-circle" type="submit" name="deleteproject"> -->
											<!--	<i class="fas fa-trash "></i> -->
											<!--	</button> -->
											<!--</form> -->

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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


<!-- end paste -->

<?php
include("include/footer.php");
?>