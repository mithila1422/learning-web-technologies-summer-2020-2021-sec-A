<?php
	session_start();

	if(isset($_POST['submit'])){

		$nameErr =$companyErr = $cnErr = $unameErr = $passwordErr = "" ;

		$name=""
		$cn= ""
		$company="" 
		$username="" 
		$password= ""
		$type= ""

		  if(empty($_POST['name'])) 
        {
          $NameErr = "Enter your Name";
        }
        else {
          $Name = $_POST['name'];
        }

        if(empty($_POST['company'])) 
        {
          $NameErr = "Enter your Company Name";
        }
        else {
          $Name = $_POST['company'];
        }

          if(empty($_POST['cn'])) 
        {
          $NameErr = "Enter your Contact no";
        }
        else {
          $Name = $_POST['cn'];
        }

        if(empty($_POST['uname'])) 
        {
          $NameErr = "Enter your user name";
        }
        else {
          $Name = $_POST['uname'];
        }

        if(empty($_POST['password'])) {
          $passwordErr = "Enter your user password";
          }

          else {


			if(strlen($password) >= 5)

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