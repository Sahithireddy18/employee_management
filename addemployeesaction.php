<?php  
session_start();  
?>
<?php
$link= mysqli_connect('localhost','root','','majorproject');
if(!$link){
    die('error connection');
}
 
$id = ''; 
if( isset( $_POST['id'])) {
    $id = $_POST['id']; 
} 
$name = ''; 
if( isset( $_POST['name'])) {
    $name = $_POST['name']; 
} 
$dept = ''; 
if( isset( $_POST['dept'])) {
    $dept = $_POST['dept']; 
} 
$sub = ''; 
if( isset( $_POST['sub'])) {
    $sub = $_POST['sub']; 
} 
$position = ''; 
if( isset( $_POST['position'])) {
    $position = $_POST['position']; 
}
$type = ''; 
if( isset( $_POST['type'])) {
    $type = $_POST['type']; 
}
$query = "select * from `employee_data` where e_id='$id' ";
$result = mysqli_query($link,$query);
if (mysqli_num_rows($result) > 0) {
	header("Location: addemployees.php");
}
else{
		$con = "INSERT INTO `employee_data`(e_id, e_name, dept, subject, position_current,emp_type) VALUES ('$id','$name','$dept','$sub','$position','$type')";
    $result = mysqli_query($link,$con);
   
     $_SESSION["id"] = "$id";
    header("Location: addemployees1.php");

}
	


?>
