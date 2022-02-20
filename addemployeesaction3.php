<?php
$connect = mysqli_connect('localhost','root','','majorproject');
if($_POST){
	$id = $_POST["e_id"];
	$name = $_POST["e_name"];
	$fname = $_POST["father_name"];
	$dob = $_POST["dob"];
	$gender = $_POST["gender"];
	$bloodgroup= $_POST["blood_group"];
	$nationality= $_POST["nationality"];
	$religion= $_POST["religion"];
	$caste= $_POST["caste"];
	$mstatus= $_POST["marital_status"];
	$sname= $_POST["spouse_name"];
	$occupation= $_POST["occupation"];
	$org= $_POST["organization"];
	$dep= $_POST["dependants"];
	$pan= $_POST["pan_number"];
	$aadhar= $_POST["aadhar_number"];
	$driving= $_POST["driving_license"];
	$bankname= $_POST["bank_name"];
	$bankaccname= $_POST["bankacc_number"];
	$bankaccno= $_POST["bankacc_name"];
	
	$con = "INSERT INTO `personal_details`(`e_id`, `e_name`, `father_name`, `dob`, `gender`,`blood_group`,`nationality`,`religion`,`caste`,`marital_status`,`spouse_name`,`occupation`,`organization`,`dependants`,`pan_number`,`aadhar_number`,`driving_license`,`bank_name`,`bankacc_number`,`bankacc_name`) VALUES ('$id','$name','$fname','$dob','$gender','$bloodgroup','$nationality','$religion','$caste','$mstatus','$sname','$occupation','$org','$dep','$pan','$aadhar','$driving','$bankname','$bankaccname','$bankaccno')";
	if (!mysqli_query($connect,$con)) {
		die('error');
	}
	else {
	echo "employee details added successfully <br> Click her to<a href='addemployees.php'>add another employee</a>";
}
}
?>
