<?php
	
	if(isset($_REQUEST['submit'])){
		
		$bg = $_REQUEST['bg'];

		if($bg == ""){
			echo "invalid blood group!";
		}else{
			echo $bg;
		}

	}else{
		echo 'invalid request';
	}
?>