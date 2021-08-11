<html>
<head>
	<title>Search Product</title>
</head>
<body >
	<form method="post" action="../Controller/productControl.php">
		<fieldset >
            <legend>Search</legend>
            	<br>
   	<input type="text" name="Search" value="">
   	<button>Search By Name</button>

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

	</form>
</body>
</html>