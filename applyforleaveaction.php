<?php  
session_start();  
?>

<?php
$connect = mysqli_connect('localhost','root','','majorproject');
$e_id= $_SESSION["e_id"] ;
if($_POST){

	$leave = $_POST["leave_type"];
	$from = $_POST["from_date"];
	$to = $_POST["to_date"];
	$desc= $_POST["description"];
	$con = "INSERT INTO `leave_management`(`e_id`, `leave_type`, `from_date`, `to_date`, `description`) VALUES ('$e_id','$leave','$from','$to','$desc')";
	if (!mysqli_query($connect,$con)) {
		die('error');
	}
	else {
	echo"applied leave successfully";
}
	
}
?>
