
<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	
		
</head>
<body>
	<form method="post" action="Home_page.php">
	<table border="1" cellspacing="0"width="50%">
		<tr><td>
	<h1 align="center">XCompany  </h1>
	<a href="Home.php">Home</a>
	<a href="login.php">Login</a>
	<a href="signup .php">Signup</a>
</td>
	</td></tr>
	<tr><td>
	<h2>Welcome to xCompany  </h2>
	</td></tr>
			<tr>
			<td colspan="2" align="center">
				Copyright @2017
			</td>
		</tr>
	</form>
	</table>
</body>
</html>

<?php
	
	}else{
		header('location: login_check.php');
	}
?>