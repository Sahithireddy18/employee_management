<?php  
session_start();  
?>  


<?php
$link = mysqli_connect('localhost', 'root' , '', 'majorproject');
if(!$link){
    die('error connection');
}

$id = ''; 
if( isset( $_POST['e_id'])) {
    $id = $_POST['e_id']; 
}

$query = "select * from `employee_data` where e_id='$id' ";
$result = mysqli_query($link,$query);

if (mysqli_num_rows($result) > 0) {
//  echo "entered";
    $_SESSION["editid"] = "$id";
//  echo  "hi" .$_SESSION["email"]. "!";
    header("Location: setscoreform.php");
}
else {
    echo "id not found";}
mysqli_close($link);
?>