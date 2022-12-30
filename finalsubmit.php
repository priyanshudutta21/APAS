<!DOCTYPE html>
<html lang="en">

<head>

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
   
<body></body>
<?php


include("dbcon.php");

$batchid=0;

if(isset($_POST["studentpref"]))
            {
                    // $batch= $_POST['batch'];
                    // $year= $_POST['year'];

                    // student count

                    // preference
                    session_start();
                    $batchid=$_SESSION["batchid"];

                    $Option =  $_POST['noOfStudent'];

                        $s1name = $_POST['s1fullName'];
                        $s1roll = $_POST['s1rollNumber'];
                        $s1cgp = (float)$_POST['s1cgpa'];
                  
                  

                    $pref1 = $_POST['preference1'];
                    $pref2 = $_POST['preference2'];
                    $pref3 = $_POST['preference3'];
                    $pref4 = $_POST['preference4'];
                    $pref5 = $_POST['preference5'];
                    $remark = $_POST['rmk'];
                    // calcuate avg cgp

                    
                    // echo "<script>alert('$avgcgp')</script>";die();

                    // echo ";<script>alert('')</script>";

                    // send student data
                
                if ($Option == '1') 
                        { 
                        //send single student data

                       
                        $flag=0;
                        $sql6 = "SELECT roll_no FROM student_list where roll_no='$s1roll'";
                        $res6 =mysqli_query($conn,$sql6);
                        
                       if(mysqli_num_rows($res6)>0)
                       {
                        $flag=1;
                       }
                       
                        //echo $flag;
                        //echo $s1roll;

                        if($flag)
                        {
                            echo '<script>
                                swal({
                                    title: "Rollnumber already exist ",
                                    icon: "warning",
                                    button: "close",
                                    type: "unsuccess"
                                }).then(function() {
                                    window.location = "projectselection.php";
                                });
                                </script>'; 
                        }
                        else{
                        // store preference

                        $prefquery = "INSERT INTO `preference_list`( `average_cgpa`, `Pr1`, `Pr2`, `Pr3`, `Pr4`, `Pr5`, `Remarks`) 
                        VALUES ('$s1cgp','$pref1','$pref2','$pref3','$pref4','$pref5','$remark')";
                        $prefdata = $conn->query($prefquery);
                        
                         $teamid=$conn->insert_id;

                       // echo $teamid; 
                    
                    //     $sql_2 = "SELECT max(team_no) FROM preference_list";
                    //     $res3 = mysqli_query($conn, $sql_2);
                    //     if(mysqli_num_rows($res3)>0)
                    // {
                    //     foreach($res3 as $row3)
                    //     {
                    //         $teamid=$row3['max(team_no)'];  
                    //     }  
                    // }


                        $query = "INSERT INTO `student_list`(`name`, `roll_no`, `team_no`, `cgpa`, `batch_id`) VALUES (' $s1name','$s1roll','$teamid','$s1cgp','$batchid')";
                        $data = $conn->query($query);

                     
                        echo '<script>
                        swal({
                            title: "Submitted",
                            icon: "success",
                            button: "close",
                            type: "success", 
                        }).then(function() {
                            window.location = "index.php";
                        });
                        </script>'; 
                    }
                    }

                    else if ($Option == '2') { 


                        $s2name = $_POST['s2fullName'];
                        $s2roll = $_POST['s2rollNumber'];
                        $s2cgp = (float)$_POST['s2cgpa'];
                    
                        $avgcgp = ($s1cgp+$s2cgp)/2;
                    
                        //send second+first student data

                        // store preference

                        $sql7 = "SELECT * FROM student_list WHERE roll_no='$s1roll'";
                        $sql8= "SELECT * FROM student_list WHERE OR rollno='$s2roll'";
                        $res7 = mysqli_query($conn, $sql7);
                        $res8 = mysqli_query($conn, $sql8);
                        $flag=0;


                        if(mysqli_num_rows($res7)>0) 
                        {
                            $flag=1;
                        }
                        if(mysqli_num_rows($res8)>0)
                        {
                            $flag=1;
                        }
                        
                        if($flag)
                        {
                            echo '<script>
                                swal({
                                    title: "Rollnumber already exist ",
                                    icon: "warning",
                                    button: "close",
                                    type: "unsuccess"
                                }).then(function() {
                                    window.location = "projectselection.php";
                                });
                                </script>'; 
                        }
                        else{
                        // student2
                        
                     
                        $prefquery = "INSERT INTO `preference_list`( `average_cgpa`, `Pr1`, `Pr2`, `Pr3`, `Pr4`, `Pr5`, `Remarks`) 
                        VALUES ('$avgcgp','$pref1','$pref2','$pref3','$pref4','$pref5','$remark')";
                        $prefdata = $conn->query($prefquery);
                        $teamid=$conn->insert_id;

                    //     $sql_2 = "SELECT max(team_no) FROM preference_list";
                    //     $res3 = mysqli_query($conn, $sql_2);
                    //     if(mysqli_num_rows($res3)>0)
                    // {
                    //     foreach($res3 as $row3)
                    //     {
                    //         $teamid=$row3['max(team_no)'];  
                    //     }  
                    // }

                        $query = "INSERT INTO `student_list`(`name`, `roll_no`, `team_no`, `cgpa`, `batch_id`) VALUES (' $s1name','$s1roll','$teamid','$s1cgp','$batchid')"; //student1 entry sql
                        $query2 = "INSERT INTO `student_list`(`name`, `roll_no`, `team_no`, `cgpa`, `batch_id`) VALUES (' $s2name','$s2roll','$teamid','$s2cgp','$batchid')"; //student2 entry sql
                        $data = $conn->query($query);
                        $data2 = $conn->query($query2);
                        
                        
                       
                        echo '<script>
                        swal({
                            title: "Submitted",
                            icon: "success",
                            button: "close",
                            type: "success", 
                        }).then(function() {
                            window.location = "index.php";
                        });
                        </script>'; 
                        
                    }
                        
                    }  
                    
            }
            else{
                header("refresh:2; url=projectselection.php");
            }

?>
</html>