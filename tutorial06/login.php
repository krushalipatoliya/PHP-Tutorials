<?php 
session_start(); 
if(isset($_SESSION['username'])){ 
header("location:index.php"); 
} 
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/global.css"> 
<style>
body {
	background: #fff;
	padding-top: 25vh;
}

form{
	background: #000000;
}

.form-container {
	border-radius: 10px;
	padding: 30px;
	box-shadow:  0px 0px 10px 0px; 
}
.bg {
	width: 60px;
	height: 60px;
	position: absolute;
	top: -35px;
	left: 40%;
}
</style>
</head>
<body>
<section class="container-fluid">
	<section class="row justify-content-center">
		<section class="col-12 col-sm-6 col-md-3">
			<form action="validation.php" class="form-container"method="POST">
				<h4 class="text-center font-weight-bold"><font color="white">Login Form</font></h4>
				<div class="form-group">
					<input type="text" name="username" class="form-control" id="exampleInputEmail" value="Krushali">
				</div>
  
				<div class="form-group">
					<input type="password" name="password" class="form-control" id="exampleInputPassword" value="K1251">
				</div>
  
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1"><font color="white">Remember me</font></label>
				</div>
				
				<button type="submit" class="btn btn-primary btn-block">Submit</button>
				<br>
				<br>
				
			</form>
		</section>
	<section>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
