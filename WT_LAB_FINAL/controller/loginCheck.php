<?php
	session_start();
	require_once('DB_config.php');
	function validate($username, $password){

		$conn = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) > 0 ){
			return true;
		}else{
			return false;
		}
	}
	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];

		if($username != '' && $password != ''){


			$status = validate($username, $password);

			if($status){
				$_SESSION['flag'] = 'true';
				$_SESSION['username'] = $username;
				header('location: ../view/home.php');
			}else{
				echo 'invlaid username/password';
			}


		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}
?>