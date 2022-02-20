<?php  
session_start();  
?>  


<?php
$link = mysqli_connect('localhost', 'root' , '', 'majorproject');
if(!$link){
    die('error connection');
}



$ip = ''; 
if( isset( $_POST['ip'])) {
    $ip = $_POST['ip']; 
} 
$we = ''; 
if( isset( $_POST['we'])) {
    $we = $_POST['we']; 
} 
$ep = ''; 
if( isset( $_POST['ep'])) {
    $ep = $_POST['ep']; 
} 
$at = ''; 
if( isset( $_POST['at'])) {
    $at = $_POST['at']; 
}
$fp = ''; 
if( isset( $_POST['fp'])) {
    $fp = $_POST['fp']; 
}


//$query = "UPDATE `employee_data` (e_id, e_name, dept, subject, position_current,emp_type) VALUES ('$id','$name','$dept','$sub','$position','$type')";
$query="UPDATE `weightages` SET  `individual_performance`='$ip', `working_exp`='$we', `exp_inposition`='$ep', `attitude`='$at',`feedback`='$fp' ";

$result = mysqli_query($link,$query);

if (mysqli_num_rows($result) > 0) {
//  echo "entered";
   
//  echo  "hi" .$_SESSION["email"]. "!";
    header("Location: removeemployees.php");
}
else {
     
    header("Location: weightages.php");
}
mysqli_close($link);
?>


