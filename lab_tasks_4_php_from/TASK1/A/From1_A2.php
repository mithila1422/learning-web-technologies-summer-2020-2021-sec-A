<?php
	
	if(isset($_REQUEST['submit'])){
		
		$name = $_REQUEST['username'];

		if($name == ""){
			echo "invalid username!";
		}else{
			echo $name;
		}

	}else{
		echo 'invalid request';
	}
?>