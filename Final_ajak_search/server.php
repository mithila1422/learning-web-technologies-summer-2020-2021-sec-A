<?php
$SEARCH = $_POST['SEARCH'];
	

		if(empty($SEARCH))
		{
		echo 'Enter Your email';
		}else{

		$conn = mysqli_connect('localhost', 'root', '', 'email_db');
		$sql = "SELECT*FROM emaiL_db WHERE email like '$email%'"; 
		$result = mysqli_query($conn, $sql);
		echo 'Subscribe successfully';
		}
		?>
