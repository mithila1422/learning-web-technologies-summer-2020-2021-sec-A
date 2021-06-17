<?php
	
	if(isset($_REQUEST['submit'])){
		
		$dob = $_REQUEST['dob'];

		if($dob == ""){
			echo "invalid date of birth!";
		}else{
			echo $dob;
		}

	}else{
		echo 'invalid request';
	}
?>