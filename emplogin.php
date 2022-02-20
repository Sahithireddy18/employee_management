<?php  
session_start();  
?>  


<?php
$link = mysqli_connect('localhost', 'root' , '', 'majorproject');
if(!$link){
   die('error connection');
}

$email='';
if( isset( $_POST['id'])) {
    $email = $_POST['id']; 
} 

$password = ''; 
if( isset( $_POST['pass'])) {
    $password = $_POST['pass']; 
} 

//$query = "select * from `emplogin` where e_id='$email' and e_pass='$password' ";
//$result = mysqli_query($link,$query);

 // $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `emplogin` where e_id='$email' && e_pass='$password' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                   
                                     



if (mysqli_num_rows($result) > 0) {
// echo "entered";
   $_SESSION["e_id"] = "$email";
// echo  "hi" .$_SESSION["email"]. "!";
   header("Location: empdashboard.php");
}
else {
   echo "Wrong password or wrong username <br> Click her to<a href='user_login.html'>login</a>";
}
mysqli_close($link);
?>