<?php
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

	function getUserByID($id){

		$conn = getConnection();
		$sql = "select * from users where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from signup";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			array_push($users, $user);
		}

		return $users;
	}

	function insertUser($id, $password, $cpass, $name, $email, $type){
		$conn = getConnection();
		$sql = "insert into registration (id, password, conpassword, name, email, type) values ('$id', '$password', 
		'$cpass', '$name', '$email', '$type')";
		mysqli_query($conn, $sql);
	}

?>