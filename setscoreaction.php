<?php  
session_start();  
?>  


<?php
$link = mysqli_connect('localhost', 'root' , '', 'majorproject');
if(!$link){
    die('error connection');
}

$e_id= $_SESSION["editid"] ; 

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
$query = "select * from `weightages`";


//$query = "UPDATE `employee_data` (e_id, e_name, dept, subject, position_current,emp_type) VALUES ('$id','$name','$dept','$sub','$position','$type')";
//$query="INSERT INTO `empscores`(e_id, individual_performance, working_exp, exp_inposition, attitude,feedback) VALUES ('$e_id','$ip2','$we','$ep','$at','$fp')";

$result = mysqli_query($link,$query);
  $row = mysqli_fetch_assoc($result);
 $ip1=$row["individual_performance"];
$c1=($ip*100)/5;
$c2=($ip1*$c1)/100;
$we1=$row["working_exp"];
$d1=($we*100)/5;
$d2=($we1*$d1)/100;
$ep1=$row["exp_inposition"];
$e1=($ep*100)/5;
$e2=($ep1*$e1)/100;
$at1=$row["attitude"];
$f1=($at*100)/5;
$f2=($at1*$f1)/100;
$fp1=$row["feedback"];
$g1=($fp*100)/5;
$g2=($fp1*$g1)/100;

$query1="INSERT INTO `empscores`(e_id, individual_performance, working_exp, exp_inposition, attitude,feedback) VALUES ('$e_id','$c2','$d2','$e2','$f2','$g2')";
$result1 = mysqli_query($link,$query1);

if (mysqli_num_rows($result1) > 0) {
//  echo "entered";
    $_SESSION["e_id"] = "$e_id";
//  echo  "hi" .$_SESSION["email"]. "!";
    header("Location: removeemployees.php");
}
else {
     
     $_SESSION["editid"] = "$e_id";
    header("Location: setscore.php");
}
mysqli_close($link);
?>
