<?php
session_start();
$_SESSION['Username']=$_POST['user'];
$_SESSION['password']=$_POST['pass'];
$Name = $_POST['user'];
$Pass = $_POST['pass'];
$_SESSION['authuser'] =  0;

include('db_login.php');
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
             
            
			
            
			$sql = "SELECT * FROM users WHERE user_id='$Name' and password='$Pass';";
               
            mysqli_select_db( $conn,'test_db');
            $retval =  mysqli_query( $conn , $sql);
            if ($retval->num_rows > 0) {
				$_SESSION['authuser']  = 1;
				while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
				{$user_id = $row['user_id'];
				$name= $row['name'];
				$phone = $row['phone'];
				$location = $row['location'];
			}}
			else{
			echo '<h1>Sorry you dont have a permision to view this page!!<h1>';
			?>
			<script>
			alert("Invalid Login Credentials");
			</script>
			<?php
			exit();
			}
?>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Menus</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
		<style type="text/css">
	      body {
	        padding-top: 0px;
	        padding-bottom: 40px;
	        background-color: #f5f5f5;
			color:black;
	      }

	      .form-signin {
	        max-width: 300px;
	        padding: 19px 29px 29px;
	        margin: 0 auto 20px;
	        background-color: #fff;
	        border: 1px solid #e5e5e5;
	        -webkit-border-radius: 5px;
	           -moz-border-radius: 5px;
	                border-radius: 5px;
	        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	                box-shadow: 0 1px 2px rgba(0,0,0,.05);
	      }
	      .form-signin .form-signin-heading,
	      .form-signin .checkbox {
	        margin-bottom: 10px;
	      }
	      .form-signin input[type="text"],
	      .form-signin input[type="password"] {
	        font-size: 16px;
	        height: auto;
	        margin-bottom: 15px;
	        padding: 7px 9px;
	      }

	    </style>
		</head>
	<body>
		
			<?php include('Admin_info.php'); ?>
			<br />
			<br />
			<div class="container">
				<div class="row">
					<div class='col-md-4' style='text-align:center;color:black;'>
					
						  <h4> <strong>Update/Delete/Insert Employee Details</strong> </h4><br />
						  
						  <a class="btn btn-info" href="Update1.php?"> Update Employee's Name</a><br /><br /> 
						
						  <a class="btn btn-info" href="Update2.php?"> Update Employee's Phone</a><br /><br /> 
							
						  <a class="btn btn-info" href="Update3.php?"> Update Employee's Shift</a><br /><br /> 
							
						  <a class="btn btn-info" href="Update4.php?"> Update Employee's Job</a><br /><br /> 
						
						  <a class="btn btn-info" href="DeleteEmp.php?"> Delete Employee</a><br /><br /> 
						
						  <a class="btn btn-info" href="InsertEmp.php?"> Insert Employee</a><br /><br /> 
					
					</div>
					<div class='col-md-4' style='text-align:center;color:black;'>
					
						  <h4> <strong>View Airport Details</strong> </h4><br />
						  
						  <a class="btn btn-info" href="Query7.php?"> Check Airport Details</a><br /><br /> 
						
						  <a class="btn btn-info" href="Query5.php?"> Search Specific Employee</a><br /><br /> 
						
						  <a class="btn btn-info" href="Query4.php?"> Employee Details</a><br /><br /> 
						  
						  <h4> View Flight Details </h4><br />
						
						  <a class="btn btn-info" href="Query6.php?"> Flight Details</a><br /><br />
						
						  <a class="btn btn-info" href="Query2.php?"> Cargo Details</a><br /><br /> 
					
					</div>
					<div class='col-md-4' style='text-align:center;color:black;'>
					
						  <h4> <strong>Flight Delay/Cancelation</strong> </h4><br />
						  
						  <a class="btn btn-info" href="UpdateTime.php?"> Update Time</a><br /><br /> 
						
						  <a class="btn btn-info" href="CancelFlight.php?"> Cancel Flight</a><br /><br />
						  
						  <h4> <strong>Update Flight Details</strong> </h4><br />
						  
						  <a class="btn btn-info" href="UpdateFlight1.php?"> Update Baggage Counter</a><br /><br /> 
						
						  <a class="btn btn-info" href="UpdateFlight2.php?"> Update No. of Passenger in flight</a><br /><br /> 
						  
						  <h4> <strong>Update Airport Details</strong> </h4><br />
						
						  <a class="btn btn-info" href="Update5.php?"> Update Runways</a><br /><br /> 
						
						  <a class="btn btn-info" href="Update6.php?"> Update Terminals</a><br /><br /> 
					
					
					</div>
				</div>
			</div>
				
	
	</body>
</html>