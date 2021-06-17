<?php
	
	if(isset($_REQUEST['submit'])){
		
		$gender = $_REQUEST['gender'];

		if($gender == ""){
			echo "invalid gender!";
		}else{
			echo $gender;
		}

	}else{
		echo 'invalid request';
	}
?>