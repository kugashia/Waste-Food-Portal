<?php
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
		<title>Admin Details</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap1.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
		<style>
		body { background-image:url("AirporT1.png");
		background-repeat:no repeat;
		background-position:left top;
		background-size:cover;
		background-attachment:   fixed  ;
		color:white;
		
		text-align:center;
		font-family:Roboto;
		}
		</style>
      
   </head>
   
   <body>
      <?php
         
            $User=$_SESSION['Username'];
		$Pass=$_SESSION['password'];
			
			include('db_login.php');
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
            
            
			
            
			$sql = "SELECT * FROM users WHERE donation_amount>0;";
               
            mysqli_select_db( $conn,'test_db');
            $retval =  mysqli_query( $conn , $sql);
            if ($retval->num_rows > 0) {

				while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
				{	$user_id = $row['user_id'];
					$name= $row['name'];
					$phone = $row['phone'];
					$location = $row['location'];
					$Donation_amount= $row['Donation_amount'];
					
					
					echo "  <div class='row'>
								<div class='col-md-10 col-md-offset-1' style='text-align:center;padding: 5pxpx 0px;font-size:16px;border-style:solid;border-width:1px;background-color:#878383'>
									<h2>Donor: $name</h2>
									<div class='row'>
										<div class='col-md-5 col-md-offset-1' style='text-align:left;'>
											Donor ID: $user_id<br />
											
										</div>
										<div class='col-md-5' style='text-align:right;'>
											<div class='airport' style:'float:right'><br />
											Phone: $phone<br />
											Location: $location<br />
											Food For: $Donation_amount People <br /></div>
											
											</div>
										</div>
									</div>
								</div>
							</div>
					";
					}
						}
				

            mysqli_close($conn);
        ?>
   </body>
</html>