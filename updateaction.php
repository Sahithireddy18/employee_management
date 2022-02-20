<?php  
session_start();  
?>  


<?php
$link = mysqli_connect('localhost', 'root' , '', 'majorproject');
if(!$link){
    die('error connection');
}

$e_id= $_SESSION["editid"] ; 

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

//$query = "UPDATE `employee_data` (e_id, e_name, dept, subject, position_current,emp_type) VALUES ('$id','$name','$dept','$sub','$position','$type')";
$query="UPDATE `employee_data` SET  `e_name`='$name', `dept`='$dept', `subject`='$sub', `position_current`='$position',`emp_type`='$type'
WHERE e_id='$e_id'";

$result = mysqli_query($link,$query);

if (mysqli_num_rows($result) > 0) {
//  echo "entered";
    $_SESSION["e_id"] = "$e_id";
//  echo  "hi" .$_SESSION["email"]. "!";
    header("Location: removeemployees.php");
}
else {
     $_SESSION["editid"] = "$e_id";
    header("Location: editemployees2.php");
}
mysqli_close($link);
?>


