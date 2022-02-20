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

echo "sravya";
$query = "select * from `job_details` where e_id='$e_id' ";
$result = mysqli_query($link,$query);

if (mysqli_num_rows($result) > 0) {
//	echo "entered";
	$_SESSION["e_id"] = "$e_id";
//	echo  "hi" .$_SESSION["email"]. "!";
	header("Location: empbyidaction.php");
}
else {
	header("Location: viewempbyid.php");
}
mysqli_close($link);
?>