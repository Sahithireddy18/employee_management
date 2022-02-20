<?php  
session_start();  
?>

<?php
$connect = mysqli_connect('localhost','root','','majorproject');
$id= $_SESSION["id"] ;
if($_POST){

	$mail = $_POST["email"];
	$phno = $_POST["phone_number"];
	$phno1 = $_POST["emergency_phno"];
	$add1 = $_POST["present_address"];
	$add2= $_POST["permanent_address"];
	$con = "INSERT INTO `contact_details`(`e_id`, `email`, `phone_number`, `emergency_phno`, `present_address`,`permanent_address`) VALUES ('$id','$mail','$phno','$phno1','$add1','$add2')";
	if (!mysqli_query($connect,$con)) {
		die('error');
	}
	else {
	header("Location: addemployees2.php");
}
	
}
?>
