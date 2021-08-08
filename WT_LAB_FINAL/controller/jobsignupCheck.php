<?php
	session_start();

	if(isset($_POST['submit'])){

	$companyErr = $jobTitleErr = $jobLocErr = $salErr = "" ;

      $company = "";
      $jobTitle = "";
      $jobLoc = "";
      $sal = "";
  

		  
        if(empty($_POST['company'])) 
        {
          $NameErr = "Enter your Company Name";
        }
        else {
          $Name = $_POST['company'];
        }

        if(empty($_POST['jobTitle'])) 
        {
          $NameErr = "Enter your job Title";
        }
        else {
          $Name = $_POST['jobTitle'];
        }

          if(empty($_POST['jobLoc'])) 
        {
          $NameErr = "Enter your job location";
        }
        else {
          $Name = $_POST['jobLoc'];
        }

        if(empty($_POST['sal'])) 
        {
          $NameErr = "Enter your salary";
        }
        else {
          $Name = $_POST['sal'];
        }

				header('location: ../view/jobsignup.php?msg=password_error');
			}
		}else{
			header('location: ../view/jobsignup.php?msg=null');
		}
	}else{
		echo "invalid request...";
	}

?>