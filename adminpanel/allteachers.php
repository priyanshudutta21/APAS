<?php
include("include/head.php");
include("include/sidebar.php");
?>
<!--start paste -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Teachers Details</h1>
                    <!-- Tales -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Teacher id</th>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        <?php
                                        
                                        // delete project
                                        if(isset($_POST["deleteteacher"]))
                                        {
                                            $teacherid = $_POST["teacherid"];
                                            $query = "DELETE FROM `teacher_list` WHERE `teacher_id` = $teacherid";
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
                                        // get project list
                                        $query = "SELECT * FROM `teacher_list` ";
                                        $data = $conn->query($query);
                                        while($row = $data->fetch_assoc())
                                        {
                                            echo '

                                            <tr>
                                            <td>'.$row["teacher_id"].'</td>
                                            <td>'.$row["name"].'</td>
                                            <td>'.$row["email"].'</td>
                                            <td>
                                            
                                            <!-- View  -->
                                            <form action="teacherdetails.php" method="post" class="d-inline p-2">
												<input type="hidden" name="teacherid" value='.$row["teacher_id"].'>
												<button class="btn btn-success" type="submit" name="showteacher">
												<i class="fas fa-info "></i><span> Details</span>
												</button>
											</form>

                                            <!-- edit -->
                                            <form action="editteacher.php" method="post" class="d-inline p-2">
												<input type="hidden" name="teacherid" value='.$row["teacher_id"].'>
												<button class="btn btn-info" type="submit" name="editteacher">
												<i class="fas fa-pen "></i><span> Edit</span>
												</button>
											</form>

                                            <!-- delete -->
                                            <form action="" method="post" class="d-inline p-2">
												<input type="hidden" name="teacherid" value='.$row["teacher_id"].'>
												<button class="btn btn-danger btn-circle" type="submit" name="deleteteacher">
												<i class="fas fa-trash "></i>
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


<!-- end paste -->

<?php
include("include/footer.php");
?>