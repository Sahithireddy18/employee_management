<?php
$connect = mysqli_connect('localhost','root','','majorproject');
if($_POST){
	$id = $_POST["e_id"];
	$qual = $_POST["qualification"];
	$position = $_POST["position_hired"];
	$status = $_POST["status"];
	$date = $_POST["hired_date"];
	$texp= $_POST["teaching_exp"];
	$iexp= $_POST["industrial_exp"];
	$con = "INSERT INTO `job_details`(`e_id`, `qualification`, `position_hired`, `status`, `hired_date`,`teaching_exp`,`industrial_exp`) VALUES ('$id','$qual','$position','$status','$date','$texp','$iexp')";
	if (!mysqli_query($connect,$con)) {
		die('error');
	}
	else {
	header("Location: addemployees3.php");
}
	
}
?>
