<?php
session_start();
if ($_SESSION['authuser'] != 1)
{echo 'SORRY  You dont have permission to view this fIlee   ';
exit();
}
else{
	$User=$_SESSION['Username'];
	$Pass=$_SESSION['password'];
}
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>donate fund</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
		<style type="text/css">
	      body {
	        padding-top: 40px;
	        padding-bottom: 40px; 
			background-image:url("Donate.png");
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
	<?php include('style.php');?>
	<div class="container">
			<form class="form-signin" method='post'  action='fund_update.php' >
				<center>
					<h2 class="form-signin-heading">Fund Donation</h2><br>
							
						<input type='text' name='amount'/ placeholder="Amount in Rupees" required><br />
						<br/>
						
						<button type="submit" class="btn btn-info">
							<i class="icon-ok icon-white"></i> Make a Donation 
						</button>
						<button type="reset" class="btn">
							<i class="icon-refresh icon-black"></i> Clear
						</button>
				</center>
			</form>
			
	</body>
</html>