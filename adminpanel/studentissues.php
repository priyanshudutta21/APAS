<?php
include("include/head.php");
include("include/sidebar.php");
?>
<!--start paste -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Studnet Issues</h1>
                   
                    <!-- Tales -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Student name</th>
                                            <th>Email</th>
                                            <th>Roll_no</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                        <?php

                                        // get student list
                                        $query = "SELECT * FROM `stdmessage` ";
                                        $data = $conn->query($query);

                                       

                                        while($row = $data->fetch_assoc())
                                        {
                                            echo '
                                            <tr>
                                            <td>'.$row["name"].'</td>
                                            <td>'.$row["email"].'</td>
                                            <td>'.$row["rollno"].'</td>
                                            <td>'.$row["message"].'</td>
                                           
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