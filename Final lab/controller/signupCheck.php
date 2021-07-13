<?php
	session_start();

	if(isset($_POST['submit'])){

		$fname= $_POST['fname'];
		$lname= $_POST['lname'];
		$email= $_POST['email'];
		$username= $_POST['username'];
		$password= $_POST['password'];
		$type= $_POST['type'];

		if($fname != ''&& $lname != '' && $email != ''&& $username != '' && $password != ''  ){
			if(strlen($password) >= 5){
				
				$user =$fname. "|". $lname. "|". $email."|". $username."|".$password."|". $type;
				$file = fopen('users.txt', 'w');
				fwrite($file, $user);
				fclose($file);
				header('location: ../view/login.php');
		}else{
				header('location: ../view/signup.php?msg=password_error');
			}
		}else{
			header('location: ../view/signup.php?msg=null');
		}
	}else{
		echo "invalid request...";
}
?>