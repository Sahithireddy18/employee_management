<?php  
session_start();  
?>  


<?php
$link = mysqli_connect('localhost', 'root' , '', 'majorproject');
if(!$link){
	die('error connection');
}

$uid=$_GET['myNumber'];

$query = "update  `leave_management` SET `leave_status`='approved' where e_id='$uid' ";
$result = mysqli_query($link,$query);

if (mysqli_num_rows($result) > 0) {
//	echo "entered";
	$_SESSION["e_id"] = "$e_id";
//	echo  "hi" .$_SESSION["email"]. "!";
	echo "error";
}
else {
	header("Location: leavemanagement.php");
}
mysqli_close($link);
?>
mysqli_close($link);
?>



