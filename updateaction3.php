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
    $name= $_POST['name']; 
} 
$fname = ''; 
if( isset( $_POST['fname'])) {
    $fname = $_POST['fname']; 
} 
$dob= ''; 
if( isset( $_POST['dob'])) {
    $dob= $_POST['dob']; 
} 
$gender = ''; 
if( isset( $_POST['gender'])) {
    $gender= $_POST['gender']; 
}
$bg = ''; 
if( isset( $_POST['bg'])) {
    $bg = $_POST['bg']; 
}
$nt = ''; 
if( isset( $_POST['nt'])) {
    $nt = $_POST['nt']; 
}
$religion = ''; 
if( isset( $_POST['religion'])) {
    $religion = $_POST['religion']; 
}
$caste = ''; 
if( isset( $_POST['caste'])) {
    $caste = $_POST['caste']; 
}
$ms = ''; 
if( isset( $_POST['ms'])) {
    $ms = $_POST['ms']; 
}
$sn = ''; 
if( isset( $_POST['sn'])) {
    $sn = $_POST['sn']; 
}
$occ = ''; 
if( isset( $_POST['occ'])) {
    $occ = $_POST['occ']; 
}
$org = ''; 
if( isset( $_POST['org'])) {
    $org = $_POST['org']; 
}
$dep = ''; 
if( isset( $_POST['dep'])) {
    $dep = $_POST['dep']; 
}
$pan = ''; 
if( isset( $_POST['pan'])) {
    $pan = $_POST['pan']; 
}
$aadhar = ''; 
if( isset( $_POST['aadhar'])) {
    $aadhar = $_POST['aadhar']; 
}
$ln = ''; 
if( isset( $_POST['ln'])) {
    $ln = $_POST['ln']; 
}
$bn = ''; 
if( isset( $_POST['bn'])) {
    $bn = $_POST['bn']; 
}
$ban = ''; 
if( isset( $_POST['ban'])) {
    $ban = $_POST['ban']; 
}
$bano = ''; 
if( isset( $_POST['bano'])) {
    $bano = $_POST['bano']; 
}


$query="UPDATE `personal_details` SET  `e_name`='$name', `father_name`='$fname', `dob`='$dob', `gender`='$gender',`blood_group`='$bg',`nationality`='$nt',`religion`='$religion',`caste`='$caste',`marital_status`='$ms',`spouse_name`='$sn',`occupation`='$occ',`organization`='$org',`dependants`='$dep',`pan_number`='$pan',`aadhar_number`='$aadhar',`driving_license`='$ln',`bank_name`='$bn',`bankacc_name`='$ban',`bankacc_number`='$bano' WHERE e_id='$e_id'";

$result = mysqli_query($link,$query);

if (mysqli_num_rows($result) > 0) {
//  echo "entered";
    $_SESSION["e_id"] = "$e_id";
//  echo  "hi" .$_SESSION["email"]. "!";
    header("Location: removeemployees.php");
}
else {
     $_SESSION["editid"] = "$e_id";
     echo "edited successfully";
    header("Location: editempfinal.php");
}
mysqli_close($link);
?>


