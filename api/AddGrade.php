<?php

require('../util/Connection.php');
require('../util/SessionFunction.php');

if(!SessionCheck()){
	//return;
}

$grade = $_POST['grade'];
$subject = $_POST['subject'];
$date = $_POST['date'];
$uid = uniqid();
$studentid = $_SESSION['studentid'];

$query = "INSERT INTO grades (uid,subject,date,studentid,grade,approved) VALUES ('$uid','$subject','$date','$studentid','$grade','Pending')";
mysqli_query($con,$query);

header("Location:../ProgressReport.php");

?>