<?php  
session_start();  
?>  


<?php
$link = mysqli_connect('localhost', 'root' , '', 'majorproject');
if(!$link){
    die('error connection');
}

$e_id= $_SESSION["editid"] ; 

$qual = ''; 
if( isset( $_POST['qual'])) {
    $qual = $_POST['qual']; 
} 
$ph = ''; 
if( isset( $_POST['ph'])) {
    $ph = $_POST['ph']; 
} 
$pc = ''; 
if( isset( $_POST['pc'])) {
    $pc = $_POST['pc']; 
} 
$stat = ''; 
if( isset( $_POST['stat'])) {
    $stat = $_POST['stat']; 
}
$hd = ''; 
if( isset( $_POST['hd'])) {
    $hd = $_POST['hd']; 
}
$rd = ''; 
if( isset( $_POST['rd'])) {
    $rd = $_POST['rd']; 
}
$te = ''; 
if( isset( $_POST['te'])) {
    $te = $_POST['te']; 
}
$iexp = ''; 
if( isset( $_POST['iexp'])) {
    $iexp = $_POST['iexp']; 
}


$query="UPDATE `job_details` SET  `qualification`='$qual', `position_hired`='$ph' , `position_current`='$pc',`status`='$stat' ,`hired_date`='$hd' ,`resign_date`='$rd',`teaching_exp`='$te',`industrial_exp`='$iexp' WHERE e_id='$e_id'";

//$query="UPDATE `job_details` SET  `qualification`='$qual', `position_hired`='$ph', `position_current`='$pc', `status`='$stat',`hired_date`='$hd',`resign_date`='$rd',`teaching_exp`='$te',`industry_exp`='$ie' WHERE e_id='$e_id'";

$result = mysqli_query($link,$query);

if (mysqli_num_rows($result) > 0) {
//  echo "entered";
    $_SESSION["e_id"] = "$e_id";
//  echo  "hi" .$_SESSION["email"]. "!";
    header("Location: removeemployees.php");
}
else {
     $_SESSION["editid"] = "$e_id";
    header("Location: editemployees3.php");
}
mysqli_close($link);
?>


