<?php
	require_once('../Model/userModel.php');
	$products = getAllUser();
?>

<html>
<head>
	<title> Display </title>
</head>
	<body>
		<fieldset >
            <legend><b>Display</legend>
            	<br>
		<table border="1">
			<tr>
				<td>NAME</td>
				<td>PROFIT</td>
				<td colspan="2"></td>
			</tr>

				<tr>
					
					<td>
						<a href="edit.php">Edit</a>
					</td>
					<td>
						<a href="delete.php">Delete</a>
					</td>
				</tr>
		</table>
	</body>
</html>