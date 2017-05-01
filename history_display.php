<?php
if ($_SESSION['authuser'] != 1)
{echo 'sORRY  You dont have permission to view this fIlee   ';
exit();
}
else{
	$User=$_SESSION['Username'];
	$Pass=$_SESSION['password'];

}
  
           
			include('db_login.php');
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
  
            $sql2 = "SELECT  * FROM users where user_id='$User'; ";
			mysqli_select_db( $conn,'test_db');
            $retval =  mysqli_query( $conn , $sql2);
            if ($retval->num_rows > 0) {

				while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
				{	$user_id = $row['user_id'];
					$name= $row['name'];
					$Donation_amount = $row['Donation_amount'];
					$Fund_donated = $row['Fund_donated'];
					
			echo " <h1 style='align:center; color:red'> Donation History <h1><br /><br />
			<h1> Total Fund Donated = <style='color: red'><mark>$Fund_donated Rs.</mark><h1><br />
			<h1> Latest Food Donation made for <style='color: red'><mark>$Donation_amount</style></mark> People.<br /><br /> <br />";}}
			
			
		
		 
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
			background-image:url("img.png");
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
				<img src="back2.png" alt="Back to Home Page" style="width:72px;height:72px;border:0;">
			</a>
	
	<h1 style="padding:400px 80px"> Thank you, Your Donation has been Submitted <h1>
	</body>
	</html>

