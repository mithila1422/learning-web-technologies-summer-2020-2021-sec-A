<?php

  
      
      include "../control/empsignupCheck.php"; 


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
					<td>Name</td>
					<td><input type="text" name="name" id="name"></td>
					<td><?php echo $nameErr; ?></td>
				</tr>

				<tr>
					<td>Company Name</td>
					<td><input type="text" name="company" id="company"></td>
					<td><?php echo $companyErr; ?></td>
				</tr>

				<tr>
					<td>Contact no</td>
					<td><input type="number" name="cn" id="cn"></td>
					<td><?php echo $cnErr; ?></td>
				</tr>

				<tr>
					<td>Username</td>
					<td><input type="text" name="uname" id="uname"></td>
					<td><?php echo $unameErr; ?></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" id="password"></td>
					<td><?php echo $passwordErr; ?></td>
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