<?php
session_start();
if ($_SESSION['authuser'] != 1)
{echo 'sORRY  You dont have permission to view this fIlee   ';
exit();
}
else{
	$User=$_SESSION['Username'];
	$Pass=$_SESSION['password'];
	$_SESSION['amount']=$_POST['amount'];
	$amount=$_POST['amount'];
}
  
           
			include('db_login.php');
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
   
            mysqli_select_db( $conn,'test_db');
            $sql2 = "UPDATE users set Donation_amount= $amount where user_id='$User'; ";
			mysqli_query( $conn , $sql2);
		
		// echo ' <h1 style="color: red" "text-align: center"> Thank you, Your Donation has been Submitted <h1>';
		 
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>donate food</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
		<style type="text/css">
	      body {
	        padding-top: 40px;
	        padding-bottom: 40px; 
			background-image:url("you.png");
			background-repeat:no repeat;
			background-position:left top;
			background-size:cover;
			background-attachment:   fixed  ;
			text-align:center;
			font-family:Roboto;
	      }

	      .form-signin {
	        max-width: 300px;
	        padding: 35px 35px 35px;
	        margin: 50px auto 20px;
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
	      .form-signin input[type="text"]
		  {
	        font-size: 16px;
	        height: auto;
	        margin-bottom: 15px;
	        padding: 7px 9px;
	      }
	      

	    </style>
	</head>
	
	<body>
	
	
	
	<a href="index.php">
				<img src="back2.png" alt="Back to Home Page" style="width:72px;height:72px;border:0;padding:0px 1000px">
			</a>

	
	<h1 style="padding:400px 80px"> Thank you, Your Donation has been Submitted <h1>
	
	</body>
	</html>

