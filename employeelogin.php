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
	<title>Employee Login</title>
	  <script type="text/javascript" src="/js/adminvalidate.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<style type="text/css">
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
		* {box-sizing: border-box; font-size: 15px;}
		/* Full-width input fields */
		  input[type=text], input[type=password] {
		    width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
		}

		input[type=text]:focus, input[type=password]:focus {
		  background-color: #ddd;
		  outline: none;
		}

		hr {
		  border: 1px solid #f1f1f1;
		  margin-bottom: 25px;
		}

		/* Set a style for all buttons */
		button {
		  background-color: #2196F3;
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

		/* Extra styles for the cancel button */
		.cancelbtn {
		  padding: auto;
		  background-color: #f44336;
		}

		/* Float cancel and signup buttons and add an equal width */
		.cancelbtn, .signupbtn {
		  margin: auto;
		  width: 50%;
		}

		/* Add padding to container elements */
		.container {
		  padding: 10vh auto;
		  margin: auto;
		}

		/* Clear floats */
		.clearfix::after {
		  content: "";
		  clear: both;
		  display: table;
		  visibility: hidden;
		}

		.sign-up {
			width: 100%;
			border: 2px;
			border-radius: 25px;
			background-color: white;
			margin: auto;
			padding: 5vh 5vh 3vh 5vh;
		}

		/* Change styles for cancel button and signup button on extra small screens */
		@media only screen and (max-width: 600px) {
		  .cancelbtn, .signupbtn {
		    width: 100%;
		  }

		  .sign-up {
		  	width: 100%;
		  	margin: 0;

		  }
		}
	</style>

</head>
<body>
<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
               <a class = "navbar-brand" href = "index.html" style = "padding: 0;"> 
				  <img src = "cbit_logo.png" height = 80px width=80px style = "float: left;">
				  <img src = "cbit header.png" height = 50px  style = "float: right;">
				</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="get-started.html">Get Started</a></li> 
                    <li><a href="resources.html">Resources</a></li> 
                    <li><a href="faqs.html">FAQs</a></li> 
                    <li><a href="login.html">Login</a></li> 
                </ul>
            </div>
        </div>
    </nav>
    <br/><br/>
	<div class = "container"  style="width:35%; height:70%; border:0px; border-radius: 10px">
					<form name = "admin" action="emplogin.php" method="post" style="border:0px solid #ccc"  >
					    <h1 align = "center">Login </h1>
					    <p align = "center">Please enter the credentials to login</p>
					    <hr>
              
					    <label for="e_id"><b>Username</b></label>
					    <input type="text" placeholder="Enter Username" name="id" required>
					    <br>
					    <br>

					    <label for="e_pass"><b>Password</b></label>
					    <input type="password" placeholder="Enter Password" name="pass" required>
					    <br>
					    <br>	
					   
					    <div class="clearfix" style="display: flex; justify-content: center;">
					      <button type="submit" class="signupbtn">Login</button>
					    </div>
					    <br>
					</form>
	</div>
</body>
</html>