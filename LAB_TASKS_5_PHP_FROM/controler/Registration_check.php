<?php
	session_start();

	if(isset($_POST['submit'])){

		$name= $_POST['name'];
		$email= $_POST['email'];
		$username= $_POST['username'];
		$password= $_POST['password'];
		$confirm_password= $_POST['confirm password'];
		$gender= $_POST['gender'];
		$dob= $_POST['dob'];
		
		

		if($username != '' && $password != '' && $email != ''&& $name != ''&& $confirm_password != ''&& $gender != ''&& $dob!= ''){
			$user =['username'=> $username, 'password'=>$password, 'email'=>$email, 'name'=>$name'confirm password'=>$confirm_password'gender'=>$gender'dob'=>$dob];
			$_SESSION['user'] = $user;
			header('location: ../view/login_check.php');
		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}

?>