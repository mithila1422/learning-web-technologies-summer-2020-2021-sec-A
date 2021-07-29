<?php
$email = $_POST['email'];
	

		if(empty($email))
		{
		echo 'Enter Your Email';
		}else{

		$conn = mysqli_connect('localhost', 'root', '', 'email_db');
		$sql = "insert into email_db values('$email') values('mithi@gmail.com)'"; 
		$result = mysqli_query($conn, $sql);
		echo 'Subscribe successfully';
		}
		?>
