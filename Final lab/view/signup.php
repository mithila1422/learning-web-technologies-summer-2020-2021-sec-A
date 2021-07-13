<?php

	if(isset($_GET['msg'])){
		$msg = $_GET['msg'];

		if($msg == 'null'){
			echo "null value found...";
		}

		if($msg == 'password_error'){
			echo "password must be at least 5 char...";
		}		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
</head>
<body>
	<form method="post" action="../controller/signupCheck.php">
		
		<fieldset>
			<legend align="center">Signup</legend>
			<table>
				<tr>
					<td>First Name</td>
					<td><input type="text" name="fname" required=""></td>
					
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="text" name="lname"required=""></td>
					
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"required=""></td>
					
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"required=""></td>
					
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"required=""></td>
					
				</tr>
				
				<tr>
					<td>Type</td>
					<td>
						<select name="type"required="">
							<option value="admin">Admin</option>
							<option value="user">User</option>
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
	</td>
	<td width="40%"></td>
</tr>
</table>
	</form>
</div>
</body>
</html>