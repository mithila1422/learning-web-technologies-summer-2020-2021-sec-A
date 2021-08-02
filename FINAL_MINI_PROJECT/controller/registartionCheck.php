<?php
	session_start();
	require_once('../model/usersModel.php');
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$password = $_POST['password'];
		$cpass = $_POST['cpass'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$type = $_POST['type'];

		if($id == "" || $email == "" || $password == "" || $cpass == "" || $name == ""){
			echo "Null value found";
		if(password==cpass){	
				

				header('location: ../view/login.php');
	}else{
		echo "Password not match";
	}
		}

	}
?>