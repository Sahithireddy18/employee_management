<?php  
session_start();  
?>  

<?php

$link = mysqli_connect('localhost', 'root' , '', 'majorproject');
if(!$link){
	die('error connection');
}

$uid=$_GET['myNumber'];

// echo "$_SESSION['myNumber']";
$query = "update  `leave_management` SET `leave_status`='approved' where token='$uid'";
$result = mysqli_query($link,$query);

if (mysqli_num_rows($result) > 0) {
//	echo "entered";
	$_SESSION["e_id"] = "$e_id";
//	echo  "hi" .$_SESSION["email"]. "!";
	echo "error";
}
else {
  $query5="select  e_id from leave_management where token='$uid'";
$result = mysqli_query($link,$query5);
                                    $row = mysqli_fetch_assoc($result);
                                  
                                     $uid3=$row["e_id"] ; 
	
$query1="select  email from contact_details where e_id='$uid3'";
$result = mysqli_query($link,$query1);
                                    $row = mysqli_fetch_assoc($result);
                                  
                                     $to=$row["email"] ;
$query2="select  from_date,to_date from leave_management where token='$uid'";
$result = mysqli_query($link,$query2);
                                    $row = mysqli_fetch_assoc($result);
                                  
                                     $fromdate=$row["from_date"] ; 
                                     $todate=$row["to_date"] ;                                    
require_once('C:\xampp\htdocs\neocities-varshitausem\neocities-varshitausem\class.phpmailer.php');

$mail = new PHPMailer;
$email='usemvarshita7598@gmail.com';

  if(!$mail->validateAddress($email)){
    echo 'Invalid Email Address';
    exit;
  }


  //Creating the email body to be sent
  $email_body = "";
  $email_body .= "Your leave has been approved from:  ".$fromdate."  to:  ".$todate."\n";

  $mail->IsSMTP();
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = "tls"; 
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587;
  $mail->Username = "usemvarshita7598@gmail.com";
  $mail->Password = "varshita@75";
  //Sending the actual email
  $mail->setFrom($email, 'varshita');
  $mail->addAddress($to, 'Me');     // Add a recipient
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'Calculation form results from ' . $email;
  $mail->Body = $email_body;

  if(!$mail->send()) {
    echo 'Message could not be sent. ';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
  }
  $query = "update  `leave_management` SET `leave_status`='approved' where token='$uid' ";
$result = mysqli_query($link,$query);
$query6 = "select e_id,leave_type,((to_date)-(from_date)+1) as days from leave_management where token='$uid'";
$result = mysqli_query($link,$query6);
                                    $row = mysqli_fetch_assoc($result);
                                   $type=$row["leave_type"] ; 
                                   $days=$row["days"] ;
                                   $id=$row["e_id"]; 
                                   $_SESSION["type"] = "$type";
                                   $_SESSION["days"] = "$days";
                                   $_SESSION["id"] = "$id";
  header("Location: acceptleaveaction.php");
}
mysqli_close($link);
?>


