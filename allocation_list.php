<html>
<head>



<title>Final List</title>
<style>
  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}
h1{
    text-align: center;
}
a{
    text-decoration: none;
}
th, td { 
    width:800px; 
    text-align:center;  
    padding:10px 
    
}
.box{
width: 1200px;  
overflow: hidden;  
margin: auto;  
margin: 20 0 0 250px;  
padding: 50px;  
background: #23463f;  
border-radius: 15px ; 
}
.content-table{
  border-collapse:collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow:  hidden;
  box-shadow: 0 0 20px rgba(0,0,0,0.15 );
}
.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  font-weight: bold;
  text-align:  left;
}
.content-table th ,
.content-table td {
  padding: 12px 15px;
}
.content-table tbody tr{
  border-bottom: 1px solid #dddddd;

}
.content-table tbody tr :nth-of-type(even){
  background-color: #f3f3f3;
}
.content-table tbody tr :last-of-type(){
  border-bottom:2px solid #009879;
} 

</style>
</head>
<body>
<?php
 include("dbcon.php");

 if(isset($_POST["addbatch"]))
 {
     $batch=$_POST["batch"];
     $year=$_POST["year"];
    // $projectID = $_POST["projectid"];
 
     // $query = "SELECT * FROM `project_list` WHERE `project_no` = '{$projectID}' ";
     // $data = $conn->query($query);
     // $row = $data->fetch_assoc();
 
    $batch_id=0;
    $sql_1 = "SELECT * FROM program WHERE name='$batch' and year='$year' and status='3'";
    $res2 = mysqli_query($conn, $sql_1);
    if(mysqli_num_rows($res2)>0)
    {
        foreach($res2 as $row2)
        {
            $batch_id=$row2['sid'];  
        }  
    } 
 

if($batch_id)
{


?>


<?php

//$batch_id = 1;

$sql = "SELECT `preference_list`.*,`student_list`.`batch_id` FROM `preference_list`,`student_list` WHERE `preference_list`.`team_no`=`student_list`.`team_no` AND `student_list`.`batch_id` = '$batch_id' ORDER BY `preference_list`.`average_cgpa` desc";
$preference_list = mysqli_query($conn,$sql);

// Clear project status to reallocate projects
// mysqli_query($conn,"UPDATE `project_list` SET `project_status`=NULL WHERE 1");

foreach($preference_list as $P){

  //check if a project is already allocated to the team
  $not_allocated = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `project_list` WHERE `batch_id`='$batch_id' AND `project_status`='$P[team_no]'"))==0;
  
  //run if not allocated
  if($not_allocated){

    $allocated = false;
    
    //for each preference in $P
    for($i = 1;$i<6;$i++){

      //set $preference as the prefered project
      $preference = $P['Pr'.$i];  
      
      //get the project status
      $project_status = mysqli_fetch_array(mysqli_query($conn,"SELECT `project_status` FROM `project_list` WHERE `project_no`='$preference' LIMIT 1"))[0];
      
      //if the project status is null that means no project is allocated
      if($project_status == NULL){
        //allocate the project to the current team i.e. $P[team_no]
        mysqli_query($conn,"UPDATE `project_list` SET `project_status`='$P[team_no]' WHERE `project_no`='$preference'");
        //after successful execution of above query the project is allocated to the team
        $allocated = true;

        //break since no need to check for other preference
        break;
      }
    }
    //if the project is not allocated for each preference
    if(!$allocated){
      //do something
      // mysqli_query($conn,"UPDATE `preference_list` SET `Remarks`='No Project Allocated' WHERE `team_no`='$P[team_no]'");
    }
  }
}



?>

<h1>Project Allocation List for <?php echo $batch  ,  $year ;?></h1>
<?php
$data= "SELECT project_list.project_no, project_list.project_name, teacher_list.name ,project_list.project_status FROM project_list INNER JOIN teacher_list ON project_list.teacher_id=teacher_list.teacher_id"; //You don't need a ; like you do in SQL
$result = mysqli_query($conn, $data);

?>

<table class="content-table" border="1">
<tr>
  <th>Project No</th>
  <th>Project Name</th>
  <th>Teacher Name</th>
  <th>Team No</th>
 </tr>

<?php

if($result)
{
   foreach($result as $row){
     
?>
 <tr>
   <td><?php echo $row['project_no'];?></td>
   <td><?php echo $row['project_name'];?></td>
   <td><?php echo $row['name'];?></td>
   <td><?php echo $row['project_status'];?></td>
   
 </tr>


 <?php
   }
 
} else{
   echo "No record found";
}


}
else{

  echo '<script>
	swal({
	    title: "Admin not uploaded",
	    icon: "unsuccess",
	    button: "close",
	    type: "unsuccess"
	});
	</script>'; 
   echo "Admin not upload";
}


 }

?>
</table>
<br>
<br>

<button class="button button1"><a href="index.php"  >Back</a></button>
<button class="button button1" onclick="window.print();" > Print</button>




</body>

</html>
