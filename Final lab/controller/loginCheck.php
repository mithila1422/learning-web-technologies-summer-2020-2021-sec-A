<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];

		if($username != '' && $password != ''){

			$file = fopen('users.txt', 'r');
			$data = fread($file, filesize('users.txt'));
			$user = explode('|', $data);

			if($_SESSION['user']['username'] == $username && $_SESSION['user']['password'] == $password){
					$_SESSION['flag'] = 'true';
					$_SESSION['username']=$username;
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