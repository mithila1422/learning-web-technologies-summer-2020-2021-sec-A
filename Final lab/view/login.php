<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post" action="../controller/loginCheck.php">
		
		<fieldset>
			<legend align="center">Login</legend>
			<table>
				
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
					<td><input type="submit" name="submit" value="login"></td>
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