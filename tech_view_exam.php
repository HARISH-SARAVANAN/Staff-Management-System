<?php
	include"database.php";
	session_start();
		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>MCET</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
			<?php include"navbar.php";?><br>
			
			<img src="img/mcet.png" style="margin-left:90px;" class="sha">
			
			<div id="section">
				
					<?php include"sidebar.php";?><br><br><br>
					
					<h3 class="text">Welcome <?php echo $_SESSION["TNAME"]; ?></h3><br><hr><br>
					
				<div class="content">
					
						<h3 >View Exam Time Table Details</h3><br>
						
						
						
						<table border="1px">
							<tr>
								<th>S.No</th>
								<th>Department </th>
								<th>Subject</th>
								<th>Exam Name</th>
								<th>Type</th>
								<th>Date</th>
								<th>Session</th>
							</tr>
							<?php
								$s="select * from exam";
								$res=$db->query($s);
								if($res->num_rows>0)
								{
									$i=0;
									while($r=$res->fetch_assoc())
									{
										$i++;
										$today=date("Y-m-d");
										$expire=$r["EDATE"];
										$today_time=strtotime($today);
										$expire_time=strtotime($expire);
										$bg_color=$expire_time >=$today_time?"#00FF7F" : "#FFA07A";
										  
										  echo "
											  <tr style='background-color:". $bg_color .";'>
												  <td>{$i}</td>
												  <td>{$r["DEPT"]}</td>
												  <td>{$r["SUB"]}</td>
												  <td>{$r["ENAME"]}</td>
												  <td>{$r["ETYPE"]}</td>
												  <td>{$r["EDATE"]}</td>
												  <td>{$r["SESSION"]}</td>
												
											  </tr>
											";											
		
									}
								}
								else
								{
									echo "No Record Found";
								}
							
							
							
							?>
						
						
						
						
						
						
						
						
						
						</table>
				
				</div>
				
				
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>