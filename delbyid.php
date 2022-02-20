<?php  
session_start();  
?>  


<?php
$link = mysqli_connect('localhost', 'root' , '', 'majorproject');
if(!$link){
	die('error connection');
}

$e_id='';
if( isset( $_POST['e_id'])) {
    $e_id = $_POST['e_id']; 
} 

$query = "update  `job_details` SET `status`='inactive' where e_id='$e_id' ";
$result = mysqli_query($link,$query);

if (mysqli_num_rows($result) > 0) {
//	echo "entered";
	$_SESSION["e_id"] = "$e_id";
//	echo  "hi" .$_SESSION["email"]. "!";
	header("Location: removeemployees.php");
}
else {
	header("Location: deletebyidaction.php");
}
mysqli_close($link);
?>