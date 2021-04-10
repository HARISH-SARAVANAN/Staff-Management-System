<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
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
		<img src="img/mcet.png" style="margin-left:90px;" class="sha">
			<div id="section">
				<?php include"sidebar.php";?><br>
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
						<h3 > Add Department Details</h3><br>
					<?php
						if(isset($_POST["submit"]))
						{
							 $sq="insert into department(DNAME,DSEC) values('{$_POST["cname"]}','{$_POST["sec"]}')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert failed..</div>";
							}
							
							
						}
					
					?>
						
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<label>Department</label><br>
				<select name="cname"  required class="input2">
						<option value="">Select</option>
						<option value="CSE">CSE</option>
						<option value="EEE">EEE</option>
						<option value="ECE">ECE</option>
						<option value="MECH">MECH</option>
						<option value="IT">IT</option>
						<option value="CIVIL">CIVIL</option>
						
						
					</select><br><br>
					<label>Section </label><br>
					<select name="sec"  required class="input2">
						<option value="">Select</option>
						<option value="-">-</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						
					
					</select>
					<br>
					<button type="submit" class="btn" name="submit">Add Department Details</button>
				</form>
				
				
				</div>
				
				
				<div class="tbox">
					<h3 style="margin-top:30px;"> Department Details</h3><br>
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
							<th>S.No</th>
							<th>Department</th>
							<th>Section</th>
							<th>Delete</th>
						</tr>
						<?php
							$s="select * from department";
							$res=$db->query($s);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo "
										<tr>
											<td>{$i}</td>
											<td>{$r["DNAME"]}</td>
											<td>{$r["DSEC"]}</td>
											<td><a href='delete.php?id={$r["DID"]}' class='btnr'>Delete</a></td>
										</tr>
										";
									
								}
								
							}
						?>
					
					</table>
				</div>
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>