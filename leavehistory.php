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
        <title>leave management</title>
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
                            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "majorproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$tk=$_GET['id'];
//echo $tk;
$sql1 = "SELECT MONTH(from_date) AS m,e_id from leave_management where token='$tk'";
$result = $conn->query($sql1);
if ($result->num_rows > 0)
{
     if($row = $result->fetch_assoc())
     {
$m=$row["m"];
$id=$row["e_id"];
}
}
//echo $m;
//echo $id;
$sql = "SELECT  from_date,to_date,leave_type,(DATEDIFF(to_date,from_date)) AS days from leave_management where month(from_date)='$m' and e_id='$id' and leave_status='approved'";

$result1 = $conn->query($sql);
//$linkaddr='index.html';
if ($result1->num_rows > 0) {
 //   <p>Mpnthly hitory</p>
    // output dstyle="color:blue;"ata of each row
    echo "<h3 style='color:blue;'> <center>monthly history</center></h3><br>";
    //echo"<table align=""><caption>Monthly savings</caption></table>";
    while($row = $result1->fetch_assoc()) {
        echo "<table><tr><td style='height:160px'>
        <table  width=600><tr height:160px><th style='padding-left: 300px; color:#4285F4;height:60;width:150%;valign:bottom'>Leave type</th><td style='width:150%;padding-left: 150px; height:60;valign:bottom'>".$row["leave_type"]."</td></tr>
        <tr><th style='padding-left: 300px; color:#4285F4;height:60'>From date</th>
            <td style='width:33%;padding-left: 150px; height:60'>".$row["from_date"]."</td></tr>
        <tr> <th style='padding-left: 300px; color:#4285F4;height:60'>To date</th>
            <td style='width:33%;padding-left: 150px;height:60'>".$row["to_date"]."</td></tr>
        <tr> <th style='padding-left: 300px; color:#4285F4;height:60'>Number of days</th>
              <td style='width:33%;padding-left: 150px;height:60'>".$row["days"]."</td></tr></td></tr></table>";
      
       // echo"<hr></hr>";
    }
    echo "</table>";

} else {
    echo "0 results";
}
$sql3 = "SELECT  * from leavevalues where e_id='$id'";

$result3 = $conn->query($sql3);
if ($result3->num_rows > 0) {

    echo "<h3 style='color:blue;'> <center>annual history</center></h3><br>";

    while($row = $result3->fetch_assoc()) {
        echo "
        <table  border=1 align=center width=600><tr height:160px><th style='padding-left: 150px; color:#4285F4;height:50px;width:150%;valign:bottom'>casual leaves remaining:</th><td style='width:150%;padding-left: 150px; height:50px;valign:bottom'>".$row["casual"]."</td></tr>
        <tr><th style='padding-left: 150px; color:#4285F4;height:50px'>Sick leaves remaining:</th>
            <td style='width:33%;padding-left: 150px; height:50px'>".$row["sick"]."</td></tr>
        <tr> <th style='padding-left: 150px; color:#4285F4;height:50px'>Maternity leaves remaining:</th>
            <td style='width:33%;text-align:center;padding-left:150px;height:50px'>".$row["maternity"]."</td></tr>
        <tr> <th style='padding-left: 150px; color:#4285F4;height:50px'>Vacation leaves remaining:</th>
              <td style='width:33%;padding-left: 150px;height:50px'>".$row["vacation"]."</td></tr>
              <tr> <th style='padding-left: 150px; color:#4285F4;height:50px'>Half pay leaves remaining:</th>
              <td style='width:33%;padding-left: 150px;height:50px'>".$row["paternity"]."</td></tr>";
      
       // echo"<hr></hr>";
    }
    echo "</table>";

} else {
    echo "0 results";
}

$conn->close();
?>
                            



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
            var links = ["viewemployees.php", "editemployees.php","addemployees.php", "removeemployees.php", "leavemanagement.php","#"];
            
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








