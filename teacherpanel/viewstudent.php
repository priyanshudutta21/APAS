<?php
include("include/head.php");
include("include/sidebar.php");
?>
<!--start paste -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Assigned Students Details</h1>
                   
                    <!-- Tales -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Team No</th>
                                            <th>Project Title</th>
                                            <th>Batch</th>
                                            <th>Year</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        <?php
                                       $tmail=$_SESSION["teacheremail"];
                                        
                                       $sql_t = "SELECT teacher_id FROM teacher_list WHERE email='$tmail'";
                                       $res1 = mysqli_query($conn, $sql_t);
                                       if(mysqli_num_rows($res1)>0)
                                       {
                                            foreach($res1 as $row1)
                                            {
                                      
                                            $tid=$row1['teacher_id'];
                                             }
                                        }
                                        $query = "SELECT p.project_name, p1.name, p1.year, pr.team_no FROM project_list AS p INNER JOIN preference_list AS pr ON p.project_status=pr.team_no AND p.teacher_id= '$tid' INNER JOIN program AS p1 ON p.batch_id = p1.sid";
                                        $data = $conn->query($query);

                                       

                                        while($row = $data->fetch_assoc())
                                        {
                                            echo '
                                            <tr>
                                            <td>'.$row["team_no"].'</td>
                                            <td>'.$row["project_name"].'</td>
                                            <td>'.$row["name"].'</td>
                                            <td>'.$row["year"].'</td>
                                            <td>
                                            
                                             <form action="studetdetails.php" method="post" class="d-inline p-2">
											<input type="hidden" name="team_id" value='.$row["team_no"].'>
											 	<button class="btn btn-success" type="submit" name="viewstudent">
												<i class="fas fa-eye "></i><span> View</span>
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