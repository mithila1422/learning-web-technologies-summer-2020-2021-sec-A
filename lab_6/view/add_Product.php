<html>
<head>
	<title>ADD Product</title>
</head>
<body >
	<form method="post" action="../Controller/productControl.php">
		<fieldset  >
            <legend><b>ADD Product</legend>
            	<br>
		<table>
			<tr>
				<td><b>Name </td>
	            <td>
	            <input type="text" name="name">
	            </td>
	        </tr>
	        <tr>
				<td><b>Buying Price </td>
	            <td>
	            <input type="text" name="buyingPrice">
	            </td>
	        </tr>
	        <tr>
				<td><b>Selling Price </td>
	            <td>
	            <input type="text" name="sellingPrice">
	            </td>
	        </tr>
	        <tr>
	        	<td colspan="2"> <hr> </td>
	        </tr>
	        <tr>
                <td colspan=2>
                <input type="checkbox" name="Display" value=""> Display
                </td>
            </tr>
            <tr>
	        	<td colspan="2"> <hr> </td>
	        </tr>
	        <tr>
	        	<td colspan="2"> <input type="submit" name= "Save" value="Save"> </td>
	        </tr>
		</table>
	</form>
</body>
</html>