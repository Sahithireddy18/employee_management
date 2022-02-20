<?php  
session_start();  
?>  


<?php
$link = mysqli_connect('localhost', 'root' , '', 'majorproject');
if(!$link){
	die('error connection');
}

$uname='';
if( isset( $_POST['uname'])) {
	$uname= $_POST['uname'];
}
$pwd='';
if( isset( $_POST['pwd'])) {
	$pwd= $_POST['pwd'];
}
if($uname==`admin` && $pwd==`password`
)
{
	header("Location: dashboard.php");
}
else
{
	header("Location: admin_login.html");
}
mysqli_close($link);
?>