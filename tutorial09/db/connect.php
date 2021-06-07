<?php
	$db=new mysqli('localhost','root','','connection');
	if($db->connect_errno){
			echo $db->connect_errno;
			echo "Connection Error";
			exit;
	}
	else{
		echo"Connection Successfully";
	}
	
	?>