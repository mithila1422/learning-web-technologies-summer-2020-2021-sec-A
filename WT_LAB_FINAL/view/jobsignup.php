<?php
	 $companyErr = $jobTitleErr = $jobLocErr = $salErr = "" ;

      $company = "";
      $jobTitle = "";
      $jobLoc = "";
      $sal = "";
  
      
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
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" id="password"></td>
					<td></td>
				</tr>
	
				<tr>
					<td>Type</td>
					<td>
						<select name="type" >
							<option value="a">Admin</option>
							<option value="e">Employee</option>
						</select>
					</td>
					<td></td>
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