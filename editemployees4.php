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
        <title>Edit Employee</title>
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
                    .nextbtn
                    {    
                         float: right;
                        width: 40%;
                        padding-left: 200px;    
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
                            <div class = "container"  style="width:35%; height:10%; border:0px; border-radius: 10px">
                    <form name = "eid" action="updateaction3.php" method="post" style="border:0px solid #ccc"  >
                    
                      <b>  <p align = "center"> Enter employee data here</p></b>
                        <hr>

                            <table border = "0"  align="center" style ="width:100%"  bgcolor= "#FFFAFA" > 

<tr height="40" ><td width="100"><label for="e_id"><b>Employee ID  </b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `job_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["e_id"]. " ";
                                   ?>"      name="id" required></td>
</tr>

<tr height="40"><td><label for="e_id"><b>Name</b></label></td>
<td>
<b>: </b><input type="text"   value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                       echo " " .$row["e_name"]. " ";
                                   ?>"    name="name" required></td>
</tr>

<tr height="40"><td><label for="e_id"><b>Father Name </b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["father_name"]. " ";
                                   ?>"  name="fname" required></td>
</tr>

<tr height="40"><td><label for="e_id"><b>Date Of Birth </b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["dob"]. " ";
                                   ?>"  name="dob" required></td>
</tr>
<tr height="40" ><td><label for="e_id"><b>Gender </b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["gender"]. " ";
                                   ?>" name="gender" required></td>
</tr>

<tr height="40"><td><label for="e_id"><b>Blood Group </b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["blood_group"]. " ";
                                   ?>" name="bg" required></td>
</tr>

<tr height="40"><td><label for="e_id"><b>Nationality</b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["nationality"]. " ";
                                   ?>" name="nt" required></td>
</tr>
<tr height="40"><td><label for="e_id"><b>Religion </b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["religion"]. " ";
                                   ?>" name="religion" required></td>
</tr>

<tr height="40"><td><label for="e_id"><b>Caste </b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["caste"]. " ";
                                   ?>" name="caste" required></td>
</tr>
<tr height="40"><td><label for="e_id"><b>Marital Status </b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["marital_status"]. " ";
                                   ?>" name="ms" required></td>
</tr>
<tr height="40"><td><label for="e_id"><b>Spouse Name</b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["spouse_name"]. " ";
                                   ?>" name="sn" required></td>
</tr>
<tr height="40"><td><label for="e_id"><b>Occupation </b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["occupation"]. " ";
                                   ?>" name="occ" required></td>
</tr>
<tr height="40"><td><label for="e_id"><b>Organization</b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["organization"]. " ";
                                   ?>" name="org" required></td>
</tr>
<tr height="40"><td><label for="e_id"><b>Dependants </b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["dependants"]. " ";
                                   ?>" name="dep" required></td>
</tr>
<tr height="40"><td><label for="e_id"><b>Pan No. </b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["pan_number"]. " ";
                                   ?>" name="pan" required></td>
</tr>
<tr height="40"><td><label for="e_id"><b>Aadhar No. </b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["aadhar_number"]. " ";
                                   ?>" name="aadhar" required></td>
</tr>

<tr height="40"><td><label for="e_id"><b>License No</b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["driving_license"]. " ";
                                   ?>" name="ln" required></td>
</tr>

<tr height="40"><td><label for="e_id"><b>Bank Name </b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["bank_name"]. " ";
                                   ?>" name="bn" required></td>
</tr>

<tr height="40"><td><label for="e_id"><b>Bank account Name </b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["bankacc_name"]. " ";
                                   ?>" name="ban" required></td>
</tr>

<tr height="40"><td><label for="e_id"><b>Bank accNo </b></label></td>
<td>
<b>: </b><input type="text" value="<?php
                             $value1= $_SESSION["editid"] ;
                                   $query = "select * from `personal_details` where e_id='$value1' ";
                                    $result = mysqli_query($link,$query);
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION["editid"] = "$value1";
                                      echo " " .$row["bankacc_number"]. " ";
                                   ?>" name="bano" required></td>
</tr>

</table>
<br>
<br>
<div class="clearfix" style="display: flex; justify-content: center;">
                          <button type="submit" class="signupbtn">submit</button>
                         
                        </div> <br></form>

                          <form action="editempfinal.php">
                            <div class="clearfix" style="display: flex; justify-content: center;">
                        <button type="submit" class="signupbtn">Next</button> </div>
                    </form>
                        <br>

                    
                   
    </div>
                         </div>
            </div>
        </div>
    </div>
           
          
                    </div>
        
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