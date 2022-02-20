<?php  
session_start();  
?>  
<?php
$link = mysqli_connect('localhost', 'root' , '', 'majorproject');
if(!$link){
    die('error connection');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin_Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                    <style type="text/css">
                        .slidecontainer {
                            width: 50%;
                        }
                    
                    .slider {
                        -webkit-appearance: none;
                        width: 100%;
                        height: 15px;
                        border-radius: 5px;
                        background: #d3d3d3;
                        outline: none;
                        opacity: 0.7;
                        -webkit-transition: .2s;
                        transition: opacity .2s;
                    }
                    
                    .slider:hover {
                        opacity: 1;
                    }

                     .pad{
                        padding-left:350px;
                    }

                     .pad1{
                        padding-left:50px;
                    }


                     .pad2{
                        padding-left:50px;
                    }
                    .slider::-webkit-slider-thumb {
                        -webkit-appearance: none;
                        appearance: none;
                        width: 25px;
                        height: 25px;
                        border-radius: 50%;
                        background: #2196F3;
                        cursor: pointer;
                    }
                    
                    .slider::-moz-range-thumb {
                        width: 25px;
                        height: 25px;
                        border-radius: 50%;
                        background: #2196F3;
                        cursor: pointer;
                    }
                    input[type=text]:focus, input[type=password]:focus {
                        background-color: #ddd;
                        outline: none;
                    }
                    .slider-value {
                        padding-left: 2vh;
                        font-weight: bold;
                    }
                    hr {
                        border: 1px solid #f1f1f1;
                        margin-bottom: 25px;
                    }
                    /* Set a style for all buttons */
                    button {
                        background-color: #4CAF50;
                        color: white;
                        padding: auto;
                        height: 6vh;
                        border: none;
                        cursor: pointer;
                        width: 100%;
                        opacity: 0.9;
                    }
                    button:hover {
                        opacity:1;
                    }
                    .cancelbtn {
                        padding: auto;
                        background-color: #f44336;
                    }
                    
                    /* Float cancel and signup buttons and add an equal width */
                    .cancelbtn, .signupbtn {
                        float: left;
                        width: 50%;
                    }
                    .container {
                        padding: 14px 14px 6px 14px;
                    }
                    
                    /* Clear floats */
                    .clearfix::after {
                        content: "";
                        clear: both;
                        display: table;
                    }
                    
                    /* Change styles for cancel button and signup button on extra small screens */
                    @media screen and (max-width: 300px) {
                        .cancelbtn, .signupbtn {
                            width: 100%;
                        }
                    }
                    ul {
                        li: right;
                    }
                    
                    .navbar-default .navbar-nav > li > a {
                        color: black;
                        font-weight: bold;
                        margin: 0;
                    }
                    
                    .navbar-header > a {
                        color: black;
                        font-weight: bold;
                    }
                    
                    .navbar {
                        margin:0;
                    }
                    
                        </style>
                    </head>
    <body onresize="w3_close()" onload="fillContent()">
        <!--Collapsible sidebar-->
        <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width: 17%;" id="mySidebar">
            <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
            <!--User profile-->
            <div style="width:100%; height:15%; display:flex;">
                <div style="width:40%; display:flex; justify-content:flex-end; align-items:center;">
                    <img src="admin_logo.jpg" style="border-radius:50%; width:60%; margin-right:4%;"/>
                </div>
                <div style="width:60%; display:flex; flex-direction:column; justify-content:center; font-size:12px; color:#4285F4;">
                   <p style="margin:0;">ADMIN </p>
                </div>
            </div>
            <!--Navigation Items-->
            <div id="sidebarItemModel" style="width:100%; height:8%; display:flex; border:1px solid #E6EBF1;">
                <div style="width:2%; height:100%; background:#4285F4"></div>
                <div style="width:93%; height:100%; display:flex; justify-content:flex-start; align-items:center; font-size:12px; padding-left:16%; color:#74838B;"></div>
                <div style="width:5%; height:100%; display:flex; justify-content:flex-start; align-items:center; font-size:12px; padding-right:12%; color:#74838B;">&gt;</div>
            </div>
            <div style="height:13%;"></div>
            <div style="width:100%; height:8%; display:flex; border:1px solid #E6EBF1;">
                <div style="width:2%; height:100%; background:#FFF"></div>
                <div style="width:93%; height:100%; display:flex; justify-content:flex-start; align-items:center; font-size:12px; padding-left:16%; color:#74838B;"><a href="index.html">Sign Out</a></div>
                <div style="width:5%; height:100%; display:flex; justify-content:flex-start; align-items:center; font-size:12px; padding-right:12%; color:#FFF;">&gt;</div>
            </div>
        </div>

        <!--Heading-->
        <div class="w3-main" style="margin-left:17%; height:100vh;">
            <div style="height:15vh; display:flex; align-items:center; background:#4285F4;">
                <button class="w3-button w3-xlarge w3-hide-large" style="width:5%; color:#FFF;" onclick="w3_open()">&#9776;</button>
                <!--Logo & Branding-->
                <div style="width:100%; height:100%; display:flex; flex-direction:row; align-items:center;">
                    <div style="margin-left:6%;">
                        <a class = "navbar-brand" href = "index.html" style = "padding: 0;"> <img src = "cbit_logo.png" height = 80px width= 60px style = "float: left;"><img src = "cbit_header2.png" height = 50px  style = "float: right;"/></a>
                    </div>
                    
                </div>
            </div>
            <div  class="container" style="height:85vh;">
                <div class="row" style="height:100%;">
                    <!--Upcoming Appointment & Diagnosis Columns-->
                   
               
                    <!--Your Doctors Column-->
                    <div class="col-sm-15" style="height:100%;display:flex; flex-direction:column; align-items:center; justify-content:center; background:#F8F9FA;">
                        <div style="width:80%; height:94.5%; background:#FFF; display:flex; flex-direction:column; overflow-y:auto; overflow-x:hidden; box-shadow:2px 2px 20px #AAA;">
                            <div style="height:5%;"></div>
                            <b>  <p align = "center"><font size="5" color="#4285F4">Employee Information </font></p></b>
                        <hr>
                         
                        <table border = "0"  cellspacing="10" align="center" style ="width:100%"  bgcolor= "#FFFAFA" > 

<tr  height="30"><td rowspan=40 style="width:33%;padding-left: 65px" valign="top"><img src="http://cbit.ac.in/files/china ramu.JPG" alt="china ramu.JPG" title="china ramu.JPG" width="124" height="124"  /> </td>
<td><b>Employee Id</b></td><td><b>:</b>  <?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `job_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["e_id"]. " ";
                                   ?> </td>
</tr>
<tr height="30"><td><b>Name</b></td>
<td>
<b>: </b> <?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["e_name"]. " ";
                                   ?></td></tr>
<tr height="30"><td><b>Department</b></td>
    <td><b>: </b>  <?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `employee_data` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["dept"]. " ";
                                   ?></td></tr>
<tr height="30"><td><b>Subject</b></td>
<td>
<b>: </b>
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `employee_data` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["subject"]. " ";
                                   ?></td> </tr>
<tr height="30"><td><b>Designation</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `employee_data` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["position_current"]. " ";
                                   ?></td></tr>
<tr height="30"><td><b>Employement type</b></td><td><b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `employee_data` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["emp_type"]. " ";
                                   ?></td></tr>
<tr height="30"><td><b>Phone</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `contact_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["phone_number"]. " ";
                                   ?></td></tr>

 <tr height="30"><td><b>Emergency contact:</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `contact_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["emergency_phno"]. " ";
                                   ?></td></tr>    
<tr height="30"><td><b>Email</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `contact_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["email"]. " ";
                                   ?></td></tr>     
<tr height="30"><td><b>Present Address</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `contact_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["present_address"]. " ";
                                   ?></td></tr>
<tr height="30"><td><b>Permanent Address</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `contact_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["permanent_address"]. " ";
                                   ?></td></tr>
<tr height="30"><td><b>Qualification</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `job_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["qualification"]. " ";
                                   ?></td></tr>  
 <tr height="30"><td><b>Hired Position</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `job_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["position_hired"]. " ";
                                   ?></td></tr>   
 <tr height="30"><td><b>Status</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `job_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["status"]. " ";
                                   ?></td></tr> 
<tr height="30"><td><b>Teaching experience</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `job_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["teaching_exp"]. " ";
                                   ?></td></tr> 
 <tr height="30"><td><b>Industrial experience</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `job_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["industrial_exp"]. " ";
                                   ?></td></tr>                
<tr height="30"><td><b>Hired date</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `job_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["hired_date"]. " ";
                                   ?></td></tr>    
<tr height="30"><td><b>Resign date</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `job_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["resign_date"]. " ";
                                   ?></td></tr>      
 <tr height="30"><td><b>Father name</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["father_name"]. " ";
                                   ?></td></tr>   
 <tr height="30"><td><b>Date of birth</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["dob"]. " ";
                                   ?></td></tr> 
 <tr height="30"><td><b>Gender</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["gender"]. " ";
                                   ?></td></tr>  
 <tr height="30"><td><b>Blooad group</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["blood_group"]. " ";
                                   ?></td></tr>     
 <tr height="30"><td><b>Nationality</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["nationality"]. " ";
                                   ?></td></tr> 
<tr height="30"><td><b>Religion</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["religion"]. " ";
                                   ?></td></tr>  
<tr height="30"><td><b>Caste</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["caste"]. " ";
                                   ?></td></tr>     
<tr height="30"><td><b>Marital Status</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["marital_status"]. " ";
                                   ?></td></tr>  
 <tr height="30"><td><b>Occupation</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["occupation"]. " ";
                                   ?></td></tr>   
<tr height="30"><td><b>Organization</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["organization"]. " ";
                                   ?></td></tr>     
 <tr height="30"><td><b>Dependants</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["dependants"]. " ";
                                   ?></td></tr>  
<tr height="30"><td><b>PAN number</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["pan_number"]. " ";
                                   ?></td></tr>   
<tr height="30"><td><b>Aadhar number</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["aadhar_number"]. " ";
                                   ?></td></tr>  
<tr height="30"><td><b>Driving License</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["driving_license"]. " ";
                                   ?></td></tr> 
 <tr height="30"><td><b>Name as per bank acc</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["bankacc_name"]. " ";
                                   ?></td></tr> 
<tr height="30"><td><b>Bank name</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["bank_name"]. " ";
                                   ?></td></tr> 
<tr height="30"><td><b>Bank accountno</b></td>
<td>
<b>: </b> 
<?php
                             $value1= $_SESSION["e_id"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["e_id"] = "$value1";
                                      echo " " .$row["bankacc_number"]. " ";
                                   ?></td></tr>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
</p>
</table>
                    
                         


                         </div>
            </div>
        </div>
    </div>
           </div>
            <script type="text/javascript">
                var remarks = ["Terrible", "Bad", "Average", "Good", "Very good"]
                var mySlideContainerList = document.getElementsByClassName("slidecontainer");
                var i = 0;
                for (i = 0; i < mySlideContainerList.length; i++)
                {
                    var mySlider = mySlideContainerList[i].getElementsByClassName("slider")[0];
                    var myOutput =  mySlideContainerList[i].getElementsByTagName("label")[0].getElementsByTagName("span")[0];
                    var myValue = (mySlideContainerList[i].getElementsByClassName("slider")[0].value);
                    myOutput.innerHTML = "\t"+remarks[myValue-1];
                }
            function update(elem)
            {
                elem.parentNode.getElementsByTagName("span")[0].innerHTML = remarks[elem.value-1];
            }
            
                </script>
                    
        
        <script>
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("mySidebar").style.width = "70%";
            }
        
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("mySidebar").style.width = "17%";
        }
        
        function fillContent() {
            populateSidebar();
        }
        
        function populateSidebar() {
            var items = ["View Employees", "Edit Employees", "Add Employees",  "Remove Employees", "Leave Management", "Performance Analysis"];
            var links = ["viewemployees.php", "editemployees.php","addemployees.php", "removeemployees.php", "#","#"];
            
            var sidebarItemModel = document.getElementById("sidebarItemModel");
            for(itemNo in items) {
                var item = items[itemNo];
                sidebarItemModel.children[0].style.visibility = "hidden";
                sidebarItemModel.children[1].innerHTML = "<a href='"+links[itemNo]+"'>"+item+"</a>";
                if(document.title == item) {
                    sidebarItemModel.children[0].style.visibility = "visible";
                    sidebarItemModel.children[1].style.color = "#000";
                    sidebarItemModel.children[2].style.visibility = "visible";
                }
                else
                sidebarItemModel.children[2].style.visibility = "hidden";
                sidebarItemModel.parentElement.insertBefore(sidebarItemModel.cloneNode(true), sidebarItemModel);
            }
            sidebarItemModel.remove();
        }
        </script>
    </body>
</html>
