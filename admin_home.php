<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>MCET</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
		
		
		<img src="img/mcet.png"  width="300" style="margin-left:90px;" class="sha">
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > college Information</h3><br>
					<img src="img/home.png" class="imgs">
					<p class="para">
						Dr. Mahalingam College of Engineering and Technology (MCET) is a self – financing educational institution situated in Pollachi, Coimbatore District.
					</p>
					
					<p class="para">
						Dr. Mahalingam College of Engineering and Technology, Pollachi endeavors to impart high quality, competency based technical education in Engineering and Technology to the younger generation with the required skills and abilities to face the challenging needs of the industry around the globe.
					</p>
				</div>
				
			</div>
	
		<?php include"footer.php";?>
	</body>
</html>