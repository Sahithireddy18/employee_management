<?php  
session_start();  
?>  


<?php
$link = mysqli_connect('localhost', 'root' , '', 'majorproject');
if(!$link){
    die('error connection');
}

$e_id= $_SESSION["editid"] ; 

$mail = ''; 
if( isset( $_POST['mail'])) {
    $mail = $_POST['mail']; 
} 
$phno = ''; 
if( isset( $_POST['phno'])) {
    $phno = $_POST['phno']; 
} 
$ephno= ''; 
if( isset( $_POST['ephno'])) {
    $ephno= $_POST['ephno']; 
} 
$presentadd = ''; 
if( isset( $_POST['presentadd'])) {
    $presentadd= $_POST['presentadd']; 
}
$permanentadd = ''; 
if( isset( $_POST['permanentadd'])) {
    $permanentadd = $_POST['permanentadd']; 
}
$query="UPDATE `contact_details` SET  `email`='$mail', `phone_number`='$phno', `emergency_phno`='$ephno', `present_address`='$presentadd',`permanent_address`='$permanentadd' WHERE e_id='$e_id'";

$result = mysqli_query($link,$query);

if (mysqli_num_rows($result) > 0) {
//  echo "entered";
    $_SESSION["e_id"] = "$e_id";
//  echo  "hi" .$_SESSION["email"]. "!";
    header("Location: removeemployees.php");
}
else {
     $_SESSION["editid"] = "$e_id";
    header("Location: editemployees4.php");
}
mysqli_close($link);
?>


