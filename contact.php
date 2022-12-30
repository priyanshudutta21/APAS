<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
<?php


include("dbcon.php");
if(!isset($_SESSION["submitButton"]))
{
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $roll=$_POST['roll'];
    $message=$_POST['message']; 

$sql="INSERT INTO `stdmessage`(`name`, `email`, `rollno`, `message`) VALUES ('$uname','$email','$roll','$message')";

$result=mysqli_query($conn,$sql);
if($result){
    header('Location:./index.php');
}


}

?>
</body>
</html>