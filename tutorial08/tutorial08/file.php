<html>
<body style="background-color:Black;">
<font color="white">
	<br><br><br><br><br><br><br><br>
	<center>

<?php 
if(isset($_FILES['myfile']))
{
	$ftmp=$_FILES['myfile']['tmp_name'];
	$path="upload/"."usedid".$_FILES['myfile']['name'];
	$type=$_FILES['myfile']['type'];
	$size=$_FILES['myfile']['size'];
	
	$name=$_FILES['myfile']['name'];
	echo $name;
	
	if(file_exists($path)){
		echo("file exists");
	}
	else{
		
		
	
	if($size<100*1024){
	move_uploaded_file($ftmp,$path);
	echo "<img src='".$path."'/>";
	echo("uploaded");
	}
	else{
		echo("file size more then 100kb");
	}
	}
	}

else
{
	echo("Not uploaded");
}
?>
</center>
</body>
</html>






