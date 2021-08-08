<?php
	 
      
      include "../control/jobsignupCheck.php"; 


?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
</head>
<body>
	<h3>Signup Page</h3>
<div>
	<form method="post" >
		<fieldset>
			<legend>Signup</legend>
			<table>

				<tr>
					<td>Company Name</td>
					<td><input type="text" name="company" id="company"></td>
					<td><?php echo $comErr; ?></td>
				</tr>

				<tr>
					<td>Job title</td>
					<td><input type="text" name="jobTitle" id="jobTitle"></td>
					<td><?php echo $jobTitleErr; ?></td>
				</tr>

				<tr>
					<td>Job Location</td>
					<td><input type="text" name="jobLoc" id="jobLoc"></td>
					<td><?php echo $jobLocErr; ?></td>
				</tr>

				<tr>
					<td>Salary</td>
					<td><input type="text" name="sal" id="sal"></td>
					<td><?php echo $salErr; ?></td>
				</tr>
				
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Signup"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
</body>
</html>