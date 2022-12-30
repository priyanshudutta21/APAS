<?php
include("include/head.php");
include("include/sidebar.php");
?>
<!--start paste -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Student Details</h1>
                   
                    <!-- Tales -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Student Roll</th>
                                            <th>Batch id</th>
                                            <th>Team_no</th>
                                            <th>CGPA</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        <?php

                                        // get student list
                                        $query = "SELECT * FROM `student_list` ";
                                        $data = $conn->query($query);

                                       

                                        while($row = $data->fetch_assoc())
                                        {
                                            echo '
                                            <tr>
                                            <td>'.$row["roll_no"].'</td>
                                            <td>'.$row["batch_id"].'</td>
                                            <td>'.$row["team_no"].'</td>
                                            <td>'.$row["cgpa"].'</td>
                                            <td>
                                            
                                            <form action="studetdetails.php" method="post" class="d-inline p-2">
												<input type="hidden" name="rollid" value='.$row["roll_no"].'>
												<button class="btn btn-success" type="submit" name="viewstudent">
											<i class="fas fa-eye "></i><span> View</span>
												</button>
											</form>

                                            <!-- edit -->
                                            <form action="editstudent.php" method="post" class="d-inline p-2">
												<input type="hidden" name="rollno" value='.$row["roll_no"].'>
												<button class="btn btn-info" type="submit" name="editstudent">
												<i class="fas fa-pen "></i><span> Edit</span>
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