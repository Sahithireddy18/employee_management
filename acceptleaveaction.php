<?php  
session_start();  
?>  


<?php
$link = mysqli_connect('localhost', 'root' , '', 'majorproject');
if(!$link){
	die('error connection');
}
$type=$_SESSION['type'];
$days=$_SESSION['days'];
$id=$_SESSION['id'];

$query = "SELECT $type FROM `leavevalues` WHERE e_id='$id'";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_assoc($result);
$count=$row[$type] ;

if (mysqli_num_rows($result) > 0) {
//	echo "entered";
//	$_SESSION["e_id"] = "$e_id";
//	echo  "hi" .$_SESSION["email"]. "!";
	$final=$count-$days;
      $query = "update  `leavevalues` SET `$type`='$final' where e_id='$id'";
$result = mysqli_query($link,$query);
	header("Location: leavemanagement.php");
}
else {
	header("Location: applyforleave.php");
}
mysqli_close($link);
?>